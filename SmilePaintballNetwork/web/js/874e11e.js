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

