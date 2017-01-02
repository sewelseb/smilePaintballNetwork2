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



