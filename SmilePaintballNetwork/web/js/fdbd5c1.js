(function() {
  'use strict'

  var keyCounter = 0
  var allWaypoints = {}

  /* http://imakewebthings.com/waypoints/api/waypoint */
  function Waypoint(options) {
    if (!options) {
      throw new Error('No options passed to Waypoint constructor')
    }
    if (!options.element) {
      throw new Error('No element option passed to Waypoint constructor')
    }
    if (!options.handler) {
      throw new Error('No handler option passed to Waypoint constructor')
    }

    this.key = 'waypoint-' + keyCounter
    this.options = Waypoint.Adapter.extend({}, Waypoint.defaults, options)
    this.element = this.options.element
    this.adapter = new Waypoint.Adapter(this.element)
    this.callback = options.handler
    this.axis = this.options.horizontal ? 'horizontal' : 'vertical'
    this.enabled = this.options.enabled
    this.triggerPoint = null
    this.group = Waypoint.Group.findOrCreate({
      name: this.options.group,
      axis: this.axis
    })
    this.context = Waypoint.Context.findOrCreateByElement(this.options.context)

    if (Waypoint.offsetAliases[this.options.offset]) {
      this.options.offset = Waypoint.offsetAliases[this.options.offset]
    }
    this.group.add(this)
    this.context.add(this)
    allWaypoints[this.key] = this
    keyCounter += 1
  }

  /* Private */
  Waypoint.prototype.queueTrigger = function(direction) {
    this.group.queueTrigger(this, direction)
  }

  /* Private */
  Waypoint.prototype.trigger = function(args) {
    if (!this.enabled) {
      return
    }
    if (this.callback) {
      this.callback.apply(this, args)
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/destroy */
  Waypoint.prototype.destroy = function() {
    this.context.remove(this)
    this.group.remove(this)
    delete allWaypoints[this.key]
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/disable */
  Waypoint.prototype.disable = function() {
    this.enabled = false
    return this
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/enable */
  Waypoint.prototype.enable = function() {
    this.context.refresh()
    this.enabled = true
    return this
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/next */
  Waypoint.prototype.next = function() {
    return this.group.next(this)
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/previous */
  Waypoint.prototype.previous = function() {
    return this.group.previous(this)
  }

  /* Private */
  Waypoint.invokeAll = function(method) {
    var allWaypointsArray = []
    for (var waypointKey in allWaypoints) {
      allWaypointsArray.push(allWaypoints[waypointKey])
    }
    for (var i = 0, end = allWaypointsArray.length; i < end; i++) {
      allWaypointsArray[i][method]()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/destroy-all */
  Waypoint.destroyAll = function() {
    Waypoint.invokeAll('destroy')
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/disable-all */
  Waypoint.disableAll = function() {
    Waypoint.invokeAll('disable')
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/enable-all */
  Waypoint.enableAll = function() {
    Waypoint.Context.refreshAll()
    for (var waypointKey in allWaypoints) {
      allWaypoints[waypointKey].enabled = true
    }
    return this
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/refresh-all */
  Waypoint.refreshAll = function() {
    Waypoint.Context.refreshAll()
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/viewport-height */
  Waypoint.viewportHeight = function() {
    return window.innerHeight || document.documentElement.clientHeight
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/viewport-width */
  Waypoint.viewportWidth = function() {
    return document.documentElement.clientWidth
  }

  Waypoint.adapters = []

  Waypoint.defaults = {
    context: window,
    continuous: true,
    enabled: true,
    group: 'default',
    horizontal: false,
    offset: 0
  }

  Waypoint.offsetAliases = {
    'bottom-in-view': function() {
      return this.context.innerHeight() - this.adapter.outerHeight()
    },
    'right-in-view': function() {
      return this.context.innerWidth() - this.adapter.outerWidth()
    }
  }

  window.Waypoint = Waypoint
}())

(function() {
  'use strict'

  var Waypoint = window.Waypoint

  function isWindow(element) {
    return element === element.window
  }

  function getWindow(element) {
    if (isWindow(element)) {
      return element
    }
    return element.defaultView
  }

  function NoFrameworkAdapter(element) {
    this.element = element
    this.handlers = {}
  }

  NoFrameworkAdapter.prototype.innerHeight = function() {
    var isWin = isWindow(this.element)
    return isWin ? this.element.innerHeight : this.element.clientHeight
  }

  NoFrameworkAdapter.prototype.innerWidth = function() {
    var isWin = isWindow(this.element)
    return isWin ? this.element.innerWidth : this.element.clientWidth
  }

  NoFrameworkAdapter.prototype.off = function(event, handler) {
    function removeListeners(element, listeners, handler) {
      for (var i = 0, end = listeners.length - 1; i < end; i++) {
        var listener = listeners[i]
        if (!handler || handler === listener) {
          element.removeEventListener(listener)
        }
      }
    }

    var eventParts = event.split('.')
    var eventType = eventParts[0]
    var namespace = eventParts[1]
    var element = this.element

    if (namespace && this.handlers[namespace] && eventType) {
      removeListeners(element, this.handlers[namespace][eventType], handler)
      this.handlers[namespace][eventType] = []
    }
    else if (eventType) {
      for (var ns in this.handlers) {
        removeListeners(element, this.handlers[ns][eventType] || [], handler)
        this.handlers[ns][eventType] = []
      }
    }
    else if (namespace && this.handlers[namespace]) {
      for (var type in this.handlers[namespace]) {
        removeListeners(element, this.handlers[namespace][type], handler)
      }
      this.handlers[namespace] = {}
    }
  }

  /* Adapted from jQuery 1.x offset() */
  NoFrameworkAdapter.prototype.offset = function() {
    if (!this.element.ownerDocument) {
      return null
    }

    var documentElement = this.element.ownerDocument.documentElement
    var win = getWindow(this.element.ownerDocument)
    var rect = {
      top: 0,
      left: 0
    }

    if (this.element.getBoundingClientRect) {
      rect = this.element.getBoundingClientRect()
    }

    return {
      top: rect.top + win.pageYOffset - documentElement.clientTop,
      left: rect.left + win.pageXOffset - documentElement.clientLeft
    }
  }

  NoFrameworkAdapter.prototype.on = function(event, handler) {
    var eventParts = event.split('.')
    var eventType = eventParts[0]
    var namespace = eventParts[1] || '__default'
    var nsHandlers = this.handlers[namespace] = this.handlers[namespace] || {}
    var nsTypeList = nsHandlers[eventType] = nsHandlers[eventType] || []

    nsTypeList.push(handler)
    this.element.addEventListener(eventType, handler)
  }

  NoFrameworkAdapter.prototype.outerHeight = function(includeMargin) {
    var height = this.innerHeight()
    var computedStyle

    if (includeMargin && !isWindow(this.element)) {
      computedStyle = window.getComputedStyle(this.element)
      height += parseInt(computedStyle.marginTop, 10)
      height += parseInt(computedStyle.marginBottom, 10)
    }

    return height
  }

  NoFrameworkAdapter.prototype.outerWidth = function(includeMargin) {
    var width = this.innerWidth()
    var computedStyle

    if (includeMargin && !isWindow(this.element)) {
      computedStyle = window.getComputedStyle(this.element)
      width += parseInt(computedStyle.marginLeft, 10)
      width += parseInt(computedStyle.marginRight, 10)
    }

    return width
  }

  NoFrameworkAdapter.prototype.scrollLeft = function() {
    var win = getWindow(this.element)
    return win ? win.pageXOffset : this.element.scrollLeft
  }

  NoFrameworkAdapter.prototype.scrollTop = function() {
    var win = getWindow(this.element)
    return win ? win.pageYOffset : this.element.scrollTop
  }

  NoFrameworkAdapter.extend = function() {
    var args = Array.prototype.slice.call(arguments)

    function merge(target, obj) {
      if (typeof target === 'object' && typeof obj === 'object') {
        for (var key in obj) {
          if (obj.hasOwnProperty(key)) {
            target[key] = obj[key]
          }
        }
      }

      return target
    }

    for (var i = 1, end = args.length; i < end; i++) {
      merge(args[0], args[i])
    }
    return args[0]
  }

  NoFrameworkAdapter.inArray = function(element, array, i) {
    return array == null ? -1 : array.indexOf(element, i)
  }

  NoFrameworkAdapter.isEmptyObject = function(obj) {
    /* eslint no-unused-vars: 0 */
    for (var name in obj) {
      return false
    }
    return true
  }

  Waypoint.adapters.push({
    name: 'noframework',
    Adapter: NoFrameworkAdapter
  })
  Waypoint.Adapter = NoFrameworkAdapter
}())

var myApp = angular.module("smile", []);

/**
 * Created by sebastien on 07-09-16.
 * allPostsCtrl
 */

myApp.controller("allPostsCtrl", function($scope, $sce,$rootScope,$q) {

    $scope.posts = [];

    $scope.postsInitiation = function ()
    {

        $.ajax({
            url : document.getElementById("smileApiGetLastPostsUrl").innerHTML,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


                var news = JSON.parse(results);
                console.log(news);

                $scope.posts=news;

                $scope.safeApply();

                $q.defer(function(){
                    scope.$apply();
                    FB.XFBML.parse();
                });

                //console.log($scope.newsList);
                $('#spiningWheelAllPosts').hide("slow");
                $('#contentAllPosts').show("slow", $scope.facebookSafeApply());





            },
            error : function(results, status, error){
                console.log(results);
                console.log(results.responseText);
            },
            complete : function(results, status){

            }
        });
    };

    $scope.upvote = function(postId)
    {
        $('#updownVote_'+postId).hide('slow');
        $('#upvoted_'+postId).show('slow');
        $.ajax({
            url : document.getElementById("smileApiUpvoteUrl").innerHTML+postId,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


            },
            error : function(results, status, error){
                console.log(results);
                console.log(results.responseText);
            },
            complete : function(results, status){

            }
        });
    };

    var waypoint = new Waypoint({
        element: document.getElementById('bottomOfThePage'),
        handler: function(direction) {
            console.log('Scrolled to waypoint!')
        }
    });

    $scope.downvote = function(postId)
    {
        $('#updownVote_'+postId).hide('slow');
        $('#downvoted_'+postId).show('slow');

        $.ajax({
            url : document.getElementById("smileApiDownvoteUrl").innerHTML+postId,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


            },
            error : function(results, status, error){
                console.log(results);
                console.log(results.responseText);
            },
            complete : function(results, status){

            }
        });
    };

    $scope.facebookSafeApply = function(){
        console.log('test');
        FB.XFBML.parse();
    };

    $scope.trustAsResourceUrl = function(url)
    {
        return $sce.trustAsResourceUrl(url);
    };

    $scope.safeApply = function(fn) {
        var phase = this.$root.$$phase;
        if (phase == '$apply' || phase == '$digest') {
            if (fn && (typeof(fn) === 'function')) {
                fn();
            }
        } else {
            this.$apply(fn);
        }
    };



    $scope.postsInitiation();



});

/**
 * Created by sebastien on 07-09-16.
 */


//setInterval(updateFb(), 6000);

function updateFb(){
    if(typeof FB !== 'undefined')
    {
        FB.XFBML.parse(document.getElementById('postsNews'));
        console.log('update facebook done');

    }
    console.log('update facebook');

}

/*(function(){
    // do some stuff
    updateFb();
    setTimeout(arguments.callee, 6000);
})();*/

function upvote(postId)
{
    $('#updownVote_'+postId).hide('slow');
    $('#upvoted_'+postId).show('slow');
    $.ajax({
        url : document.getElementById("smileApiUpvoteUrl").innerHTML+postId,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){


        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){

        }
    });
};

function downvote(postId)
{
    $('#updownVote_'+postId).hide('slow');
    $('#downvoted_'+postId).show('slow');

    $.ajax({
        url : document.getElementById("smileApiDownvoteUrl").innerHTML+postId,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){


        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){

        }
    });
};

function sendComment(postId)
{
    var text= document.getElementById('textToUseToComment').value;
    document.getElementById('textToUseToComment').value ='';



    $.post( document.getElementById('postCommentUrl').innerHTML,
        {
            post: postId,
            text: text })
        .done(function( data ) {
            $('#sendedMessage').show('slow');
        })  .fail(function(response) {
            console.log(response.responseText);
        });
}

$('#textToUseToComment').change(function(){
    $('#sendedMessage').hide('slow');
});


