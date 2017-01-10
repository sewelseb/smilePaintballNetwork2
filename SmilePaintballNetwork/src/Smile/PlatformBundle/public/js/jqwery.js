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