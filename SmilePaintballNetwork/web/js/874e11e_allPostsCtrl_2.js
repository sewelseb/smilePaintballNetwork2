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
                    scope.$apply();
                    FB.XFBML.parse();
                });

                //console.log($scope.newsList);
                $('#spiningWheelAllPosts').hide("slow");
                $('#contentAllPosts').show("slow", $scope.facebookSafeApply());
                $scope.loadMore=true;





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
        var oldestPostId= $scope.posts[$scope.posts.length-1].id;
        var url = document.getElementById("smileApiGetOlder").innerHTML+oldestPostId;
        console.log(url);
        $.ajax({
            url : url,
            type : 'GET',
            dataType : 'html',
            success : function(results, status){


                var news = JSON.parse(results);
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
        if(FB != null)
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
            if($scope.loadMore)
            {
                $scope.searchOlderPost();
                $scope.loadMore=false;
            }

        }
    });



});
