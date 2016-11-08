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
