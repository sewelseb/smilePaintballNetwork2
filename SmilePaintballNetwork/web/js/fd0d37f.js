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

(function() {
  'use strict'

  function requestAnimationFrameShim(callback) {
    window.setTimeout(callback, 1000 / 60)
  }

  var keyCounter = 0
  var contexts = {}
  var Waypoint = window.Waypoint
  var oldWindowLoad = window.onload

  /* http://imakewebthings.com/waypoints/api/context */
  function Context(element) {
    this.element = element
    this.Adapter = Waypoint.Adapter
    this.adapter = new this.Adapter(element)
    this.key = 'waypoint-context-' + keyCounter
    this.didScroll = false
    this.didResize = false
    this.oldScroll = {
      x: this.adapter.scrollLeft(),
      y: this.adapter.scrollTop()
    }
    this.waypoints = {
      vertical: {},
      horizontal: {}
    }

    element.waypointContextKey = this.key
    contexts[element.waypointContextKey] = this
    keyCounter += 1
    if (!Waypoint.windowContext) {
      Waypoint.windowContext = true
      Waypoint.windowContext = new Context(window)
    }

    this.createThrottledScrollHandler()
    this.createThrottledResizeHandler()
  }

  /* Private */
  Context.prototype.add = function(waypoint) {
    var axis = waypoint.options.horizontal ? 'horizontal' : 'vertical'
    this.waypoints[axis][waypoint.key] = waypoint
    this.refresh()
  }

  /* Private */
  Context.prototype.checkEmpty = function() {
    var horizontalEmpty = this.Adapter.isEmptyObject(this.waypoints.horizontal)
    var verticalEmpty = this.Adapter.isEmptyObject(this.waypoints.vertical)
    var isWindow = this.element == this.element.window
    if (horizontalEmpty && verticalEmpty && !isWindow) {
      this.adapter.off('.waypoints')
      delete contexts[this.key]
    }
  }

  /* Private */
  Context.prototype.createThrottledResizeHandler = function() {
    var self = this

    function resizeHandler() {
      self.handleResize()
      self.didResize = false
    }

    this.adapter.on('resize.waypoints', function() {
      if (!self.didResize) {
        self.didResize = true
        Waypoint.requestAnimationFrame(resizeHandler)
      }
    })
  }

  /* Private */
  Context.prototype.createThrottledScrollHandler = function() {
    var self = this
    function scrollHandler() {
      self.handleScroll()
      self.didScroll = false
    }

    this.adapter.on('scroll.waypoints', function() {
      if (!self.didScroll || Waypoint.isTouch) {
        self.didScroll = true
        Waypoint.requestAnimationFrame(scrollHandler)
      }
    })
  }

  /* Private */
  Context.prototype.handleResize = function() {
    Waypoint.Context.refreshAll()
  }

  /* Private */
  Context.prototype.handleScroll = function() {
    var triggeredGroups = {}
    var axes = {
      horizontal: {
        newScroll: this.adapter.scrollLeft(),
        oldScroll: this.oldScroll.x,
        forward: 'right',
        backward: 'left'
      },
      vertical: {
        newScroll: this.adapter.scrollTop(),
        oldScroll: this.oldScroll.y,
        forward: 'down',
        backward: 'up'
      }
    }

    for (var axisKey in axes) {
      var axis = axes[axisKey]
      var isForward = axis.newScroll > axis.oldScroll
      var direction = isForward ? axis.forward : axis.backward

      for (var waypointKey in this.waypoints[axisKey]) {
        var waypoint = this.waypoints[axisKey][waypointKey]
        if (waypoint.triggerPoint === null) {
          continue
        }
        var wasBeforeTriggerPoint = axis.oldScroll < waypoint.triggerPoint
        var nowAfterTriggerPoint = axis.newScroll >= waypoint.triggerPoint
        var crossedForward = wasBeforeTriggerPoint && nowAfterTriggerPoint
        var crossedBackward = !wasBeforeTriggerPoint && !nowAfterTriggerPoint
        if (crossedForward || crossedBackward) {
          waypoint.queueTrigger(direction)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
      }
    }

    for (var groupKey in triggeredGroups) {
      triggeredGroups[groupKey].flushTriggers()
    }

    this.oldScroll = {
      x: axes.horizontal.newScroll,
      y: axes.vertical.newScroll
    }
  }

  /* Private */
  Context.prototype.innerHeight = function() {
    /*eslint-disable eqeqeq */
    if (this.element == this.element.window) {
      return Waypoint.viewportHeight()
    }
    /*eslint-enable eqeqeq */
    return this.adapter.innerHeight()
  }

  /* Private */
  Context.prototype.remove = function(waypoint) {
    delete this.waypoints[waypoint.axis][waypoint.key]
    this.checkEmpty()
  }

  /* Private */
  Context.prototype.innerWidth = function() {
    /*eslint-disable eqeqeq */
    if (this.element == this.element.window) {
      return Waypoint.viewportWidth()
    }
    /*eslint-enable eqeqeq */
    return this.adapter.innerWidth()
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-destroy */
  Context.prototype.destroy = function() {
    var allWaypoints = []
    for (var axis in this.waypoints) {
      for (var waypointKey in this.waypoints[axis]) {
        allWaypoints.push(this.waypoints[axis][waypointKey])
      }
    }
    for (var i = 0, end = allWaypoints.length; i < end; i++) {
      allWaypoints[i].destroy()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-refresh */
  Context.prototype.refresh = function() {
    /*eslint-disable eqeqeq */
    var isWindow = this.element == this.element.window
    /*eslint-enable eqeqeq */
    var contextOffset = isWindow ? undefined : this.adapter.offset()
    var triggeredGroups = {}
    var axes

    this.handleScroll()
    axes = {
      horizontal: {
        contextOffset: isWindow ? 0 : contextOffset.left,
        contextScroll: isWindow ? 0 : this.oldScroll.x,
        contextDimension: this.innerWidth(),
        oldScroll: this.oldScroll.x,
        forward: 'right',
        backward: 'left',
        offsetProp: 'left'
      },
      vertical: {
        contextOffset: isWindow ? 0 : contextOffset.top,
        contextScroll: isWindow ? 0 : this.oldScroll.y,
        contextDimension: this.innerHeight(),
        oldScroll: this.oldScroll.y,
        forward: 'down',
        backward: 'up',
        offsetProp: 'top'
      }
    }

    for (var axisKey in axes) {
      var axis = axes[axisKey]
      for (var waypointKey in this.waypoints[axisKey]) {
        var waypoint = this.waypoints[axisKey][waypointKey]
        var adjustment = waypoint.options.offset
        var oldTriggerPoint = waypoint.triggerPoint
        var elementOffset = 0
        var freshWaypoint = oldTriggerPoint == null
        var contextModifier, wasBeforeScroll, nowAfterScroll
        var triggeredBackward, triggeredForward

        if (waypoint.element !== waypoint.element.window) {
          elementOffset = waypoint.adapter.offset()[axis.offsetProp]
        }

        if (typeof adjustment === 'function') {
          adjustment = adjustment.apply(waypoint)
        }
        else if (typeof adjustment === 'string') {
          adjustment = parseFloat(adjustment)
          if (waypoint.options.offset.indexOf('%') > - 1) {
            adjustment = Math.ceil(axis.contextDimension * adjustment / 100)
          }
        }

        contextModifier = axis.contextScroll - axis.contextOffset
        waypoint.triggerPoint = Math.floor(elementOffset + contextModifier - adjustment)
        wasBeforeScroll = oldTriggerPoint < axis.oldScroll
        nowAfterScroll = waypoint.triggerPoint >= axis.oldScroll
        triggeredBackward = wasBeforeScroll && nowAfterScroll
        triggeredForward = !wasBeforeScroll && !nowAfterScroll

        if (!freshWaypoint && triggeredBackward) {
          waypoint.queueTrigger(axis.backward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
        else if (!freshWaypoint && triggeredForward) {
          waypoint.queueTrigger(axis.forward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
        else if (freshWaypoint && axis.oldScroll >= waypoint.triggerPoint) {
          waypoint.queueTrigger(axis.forward)
          triggeredGroups[waypoint.group.id] = waypoint.group
        }
      }
    }

    Waypoint.requestAnimationFrame(function() {
      for (var groupKey in triggeredGroups) {
        triggeredGroups[groupKey].flushTriggers()
      }
    })

    return this
  }

  /* Private */
  Context.findOrCreateByElement = function(element) {
    return Context.findByElement(element) || new Context(element)
  }

  /* Private */
  Context.refreshAll = function() {
    for (var contextId in contexts) {
      contexts[contextId].refresh()
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/context-find-by-element */
  Context.findByElement = function(element) {
    return contexts[element.waypointContextKey]
  }

  window.onload = function() {
    if (oldWindowLoad) {
      oldWindowLoad()
    }
    Context.refreshAll()
  }


  Waypoint.requestAnimationFrame = function(callback) {
    var requestFn = window.requestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      requestAnimationFrameShim
    requestFn.call(window, callback)
  }
  Waypoint.Context = Context
}())

(function() {
  'use strict'

  function byTriggerPoint(a, b) {
    return a.triggerPoint - b.triggerPoint
  }

  function byReverseTriggerPoint(a, b) {
    return b.triggerPoint - a.triggerPoint
  }

  var groups = {
    vertical: {},
    horizontal: {}
  }
  var Waypoint = window.Waypoint

  /* http://imakewebthings.com/waypoints/api/group */
  function Group(options) {
    this.name = options.name
    this.axis = options.axis
    this.id = this.name + '-' + this.axis
    this.waypoints = []
    this.clearTriggerQueues()
    groups[this.axis][this.name] = this
  }

  /* Private */
  Group.prototype.add = function(waypoint) {
    this.waypoints.push(waypoint)
  }

  /* Private */
  Group.prototype.clearTriggerQueues = function() {
    this.triggerQueues = {
      up: [],
      down: [],
      left: [],
      right: []
    }
  }

  /* Private */
  Group.prototype.flushTriggers = function() {
    for (var direction in this.triggerQueues) {
      var waypoints = this.triggerQueues[direction]
      var reverse = direction === 'up' || direction === 'left'
      waypoints.sort(reverse ? byReverseTriggerPoint : byTriggerPoint)
      for (var i = 0, end = waypoints.length; i < end; i += 1) {
        var waypoint = waypoints[i]
        if (waypoint.options.continuous || i === waypoints.length - 1) {
          waypoint.trigger([direction])
        }
      }
    }
    this.clearTriggerQueues()
  }

  /* Private */
  Group.prototype.next = function(waypoint) {
    this.waypoints.sort(byTriggerPoint)
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    var isLast = index === this.waypoints.length - 1
    return isLast ? null : this.waypoints[index + 1]
  }

  /* Private */
  Group.prototype.previous = function(waypoint) {
    this.waypoints.sort(byTriggerPoint)
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    return index ? this.waypoints[index - 1] : null
  }

  /* Private */
  Group.prototype.queueTrigger = function(waypoint, direction) {
    this.triggerQueues[direction].push(waypoint)
  }

  /* Private */
  Group.prototype.remove = function(waypoint) {
    var index = Waypoint.Adapter.inArray(waypoint, this.waypoints)
    if (index > -1) {
      this.waypoints.splice(index, 1)
    }
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/first */
  Group.prototype.first = function() {
    return this.waypoints[0]
  }

  /* Public */
  /* http://imakewebthings.com/waypoints/api/last */
  Group.prototype.last = function() {
    return this.waypoints[this.waypoints.length - 1]
  }

  /* Private */
  Group.findOrCreate = function(options) {
    return groups[options.axis][options.name] || new Group(options)
  }

  Waypoint.Group = Group
}())

var myApp = angular.module("smile", []);

/**
 * Created by sebastien on 07-09-16.
 * allPostsCtrl
 */

myApp.controller("allPostsCtrl", function($scope, $sce,$rootScope,$q) {

    $scope.posts = [];

    $scope.loadMore=false;





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
                    $scope.$apply();
                    FB.XFBML.parse();
                });

                //console.log($scope.newsList);
                $('#spiningWheelAllPosts').hide("slow");
                $('#contentAllPosts').show("slow", $scope.facebookSafeApply());
                $scope.loadMore=true;
                $scope.safeApply();
                //waypointSeen();

                /*$('.postSeen').each(function() {
                    $(this).waypoint(function() {
                        alert('You have scrolled to an entry.');
                        //$(this).addClass('on');
                    });
                });*/

                $('.postSeen').each(function(){
                    new Waypoint({
                        element: this,
                        handler: function(direction) {
                            //console.log(this);
                            var id = $(this.element).attr('data-postId');
                            //console.log('post Seen ! id: '+id);
                            $scope.addVueToPost(id);


                        }
                    });
                })







            },
            error : function(results, status, error){
                console.log(results);
                console.log(results.responseText);
            },
            complete : function(results, status){

            }
        });
    };

    $scope.addVueToPost = function (id)
    {
        var url = document.getElementById('addViewUrl').innerHTML;
        $.ajax({
            url : url+id,
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

    $scope.searchOlderPost = function()
    {
        var oldestPostId= $scope.posts[0].id;
        //console.log(oldestPostId);

        for (i = 0; $scope.posts.length>i; i++)
        {
            //console.log('test post:'+$scope.posts[i].id);
            //console.log('test oldest post:'+oldestPostId);
            if (parseInt($scope.posts[i].id)<parseInt(oldestPostId))
            {
                oldestPostId=$scope.posts[i].id;
            }
        }

        var url = document.getElementById("smileApiGetOlder").innerHTML+oldestPostId;
        console.log(url);
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


                var news = JSON.parse(results);
                console.log('older posts:');
                console.log(news);

                $scope.posts=$scope.posts.concat(news);

                $scope.safeApply();

                $q.defer(function(){
                    scope.$apply();
                    FB.XFBML.parse();

                });

                //console.log($scope.newsList);
                $('#spiningWheelAllPosts').hide("slow");
                $('#contentAllPosts').show("slow", $scope.facebookSafeApply());
                $scope.loadMore=true;

                /*$('.postSeen').each(function() {
                    $(this).waypoint(function() {
                        alert('You have scrolled to an entry.');
                        //$(this).addClass('on');
                    });
                });*/
                $('.postSeen').each(function(){
                    new Waypoint({
                        element: this,
                        handler: function(direction) {
                            //console.log(this);
                            var id = $(this.element).attr('data-postId');
                            //console.log('post Seen ! id: '+id);
                            $scope.addVueToPost(id);


                        }
                    });
                })





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
        document.getElementById('post_point_'+postId).innerHTML = parseInt(document.getElementById('post_point_'+postId).innerHTML) + 1;
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



    $scope.downvote = function(postId)
    {
        $('#updownVote_'+postId).hide('slow');
        $('#downvoted_'+postId).show('slow');
        document.getElementById('post_point_'+postId).innerHTML = parseInt(document.getElementById('post_point_'+postId).innerHTML) - 1;
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
        //console.log('test');
        if(typeof FB != 'undefined')
        {
            FB.XFBML.parse();
        }
        else
        {
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        }


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

    var waypoint = new Waypoint({
        element: document.getElementById('bottomOfThePage'),
        handler: function(direction) {
            console.log('Scrolled to waypoint!');
            if($scope.loadMore == true)
            {
                $scope.searchOlderPost();
                $scope.loadMore=false;
            }

        }
    });

    /*var waypointSeen = new Waypoint({
        element: document.getElementById('postSeen'),
        handler: function(direction) {
            console.log('post Seen !');
        }
    });*/


    $scope.loadMoreBdt = function () {
        console.log('Load More btn!');
        $scope.searchOlderPost();
        if($scope.loadMore == true)
        {
            $scope.loadMore=false;
        }
    }


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
    document.getElementById('post_point_'+postId).innerHTML = parseInt(document.getElementById('post_point_'+postId).innerHTML) + 1;
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
    document.getElementById('post_point_'+postId).innerHTML = parseInt(document.getElementById('post_point_'+postId).innerHTML) - 1;
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
    document.getElementById('post_comment_'+postId).innerHTML = parseInt(document.getElementById('post_comment_'+postId).innerHTML) + 1;


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

function connectToIo()
{
    $.ajax({
        url: '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-578e0c34094f3158',
        dataType: "script",
        setTimeout : 5000,
        success: function(data)
        {
            addthis.init();
        },
        error:function()
        {
            errorToConnect();
        }
    });
}

//exploreFacebookVideo('https://www.facebook.com/smilepaintball/videos/1792202604329219/')
function exploreFacebookVideo(fb_url)
{
    var htmlToPrepare = '<div class="fb-video" data-href="'+fb_url+'" data-width="700px" data-show-text="false" id="newFacebookLink"><blockquote cite="'+fb_url+'" class="fb-xfbml-parse-ignore"><a href="'+fb_url+'"></a> </blockquote></div>';
    document.getElementById('facebookContainer').innerHTML=htmlToPrepare;
    FB.XFBML.parse(function(){
        var url = $('._1p6f')[0];
        //var url =document.getElementsByClassName('_1p6f')[0];
        console.log(url);
    });
    /*

     FB.XFBML.parse(document.getElementById('facebookContainer'), function(){
     var url = $('._1p6f')[0].attr('src');
     console.log('url');
     });
     */

}

$('.formCreateTeamSubmit').click(function(){
    document.getElementsByClassName('formCreateTeam')[0].submit();
    console.log('test');
});

function submitEditProfile(){
    document.getElementsByClassName('formEditProfile')[0].submit();
    console.log('test');

}

function submitNewTeam(){
    document.getElementsByClassName('formCreateTeam')[0].submit();

}

function openModalConnectToVote(){
    $('#showMandatoryLoginForVotes').show();
}



$('.postOpenSignIn').focus(function () {
    //alert('test');
    $('#showMandatoryLoginForPost').show();
    $('#loginModal').modal('show');
});

$('.titleAddPost').click(function(){
    $('.restOfTheForm').show('slow');
});

$('.btn-see-more-top-10').click(function(){
    $('.btn-see-more-top-10').hide('slow');
    $('.hidden-top-ten').show('slow');
});

$('.row-top10').hover(function(){
    $('.btn-see-more-top-10').hide('slow');
    $('.hidden-top-ten').show('slow');
});

$('.nameAddEvent').click(function () {
    $('.restOfTheFormCreateEvent').show('slow');
});

/*$(".ignore-click").click(function(){
    return false;
})
*/


/*$('.postSeen').each(function() {
    $(this).waypoint(function() {
        alert('You have scrolled to an entry.');
        //$(this).addClass('on');
    });
});
*/

$(window).load(function () {
    $('.postSeenPage').each(function(){
        new Waypoint({
            element: this,
            handler: function(direction) {
                console.log(this);
                var id = $(this.element).attr('data-postId');
                console.log('post Seen ! id: '+id);
                addVueToPost(id);
            }
        });
    });
});


function addVueToPost(id)
{
    var url = document.getElementById('addViewUrl').innerHTML+id;
    console.log(url);
    $.ajax({
        url : url,
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
}

function goToEventAsMe(eventId)
{
    $('#goingToEvent_'+eventId).show('slow');
    var url = document.getElementById('goToAnEventAsMeUrl').innerHTML+eventId;
    console.log(url);
    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){
            $('#goingToEvent_'+eventId).hide('slow');
        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){

        }
    });
}

function goToEventAsTeam(eventId, teamId)
{
    $('#goingToEvent_'+eventId).show('slow');
    var url = document.getElementById('goToAnEventAsTeamUrl').innerHTML+eventId+"/"+teamId;
    console.log(url);
    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){
            $('#goingToEvent_'+eventId).hide('slow');
        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){

        }
    });
}

function dontComeAsMe(eventId)
{
    var url = document.getElementById('dontComeAsMe').innerHTML+eventId;
    $('.notgoingToEventAsMe_'+eventId).show('slow');
    console.log(url);
    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){

            $('.notgoingToEventAsMe_btn_'+eventId).hide('slow');
        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){
            $('.notgoingToEventAsMe_'+eventId).hide('slow');
        }
    });
}

function dontComeAsTeam(eventId, teamId)
{
    var url = document.getElementById('dontComeAsTeam').innerHTML+eventId+"/"+teamId;
    $('.notgoingToEventAsTeam_'+eventId+'_'+teamId).show('slow');
    console.log(url);
    $.ajax({
        url : url,
        type : 'GET',
        dataType : 'html',
        success : function(results, status){

            $('.notgoingToEventAsTeam_btn_'+eventId+'_'+teamId).hide('slow');
        },
        error : function(results, status, error){
            console.log(results);
            console.log(results.responseText);
        },
        complete : function(results, status){
            $('.notgoingToEventAsTeam_'+eventId+'_'+teamId).hide('slow');
        }
    });
}

$('#notGoingAsCaret').click(function () {
   $('.notGoingAsTeamBtns').show('slow');
});
$('#notGoingButNotMeAsCaret').click(function () {
    $('.notGoingAsTeamBtns').show('slow');
});

$('#show-create-post-form').click(function(){
    $('#show-create-post-form').addClass('active');
    $('#show-create-event-form').removeClass('active');
    $('#show-create-team-form').removeClass('active');

    $('.newPostForm').show('slow');
    $('.newEventForm').hide('slow');
    $('.newTeamForm').hide('slow');
});
$('#show-create-event-form').click(function(){
    $('#show-create-post-form').removeClass('active');
    $('#show-create-event-form').addClass('active');
    $('#show-create-team-form').removeClass('active');

    $('.newEventForm').show('slow');
    $('.newPostForm').hide('slow');
    $('.newTeamForm').hide('slow');
});
$('#show-create-team-form').click(function(){
    $('#show-create-post-form').removeClass('active');
    $('#show-create-event-form').removeClass('active');
    $('#show-create-team-form').addClass('active');

    $('.newTeamForm').show('slow');
    $('.newPostForm').hide('slow');
    $('.newEventForm').hide('slow');
});

$('.thermsAndAgreementNotif').click(function(){
    var url = document.getElementById('setCookieThermsAndAgreementsUrl').innerHTML;
    $('.thermsAndAgreementNotif').hide('slow');
    $.ajax({
        url : url,
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
});

$('.showThermsAndAgreements').click(function(){
    var win = window.open(document.getElementById('showThermsAndAgreements').innerHTML, '_blank');
    if (win) {
        //Browser has allowed it to be opened
        win.focus();
    } else {
        //Browser has blocked it
        alert('Please allow popups for this website');
    }
});