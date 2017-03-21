<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'skynet_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SkynetBundle\\Controller\\DefaultController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/skynet/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'skynet_group_listGroups' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SkynetBundle\\Controller\\GroupController::listGroupsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/skynet/group/showGroups',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'skynet_group_addcsv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SkynetBundle\\Controller\\GroupController::addCSVAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/skynet/group/addCSV',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'skynet_facebookUser_listUser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'SkynetBundle\\Controller\\facebookUserController::listUsersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/skynet/facebookUser/showUsers',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_service_redirect' => array (  0 =>   array (    0 => 'service',  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'service',    ),    1 =>     array (      0 => 'text',      1 => '/connect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_connect_service' => array (  0 =>   array (    0 => 'service',  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'service',    ),    1 =>     array (      0 => 'text',      1 => '/connect/service',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_connect_registration' => array (  0 =>   array (    0 => 'key',  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'key',    ),    1 =>     array (      0 => 'text',      1 => '/connect/registration',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'hwi_oauth_connect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'facebook_login' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/check-facebook',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_getlastPosts' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::getLastPostsAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/posts/getLastPosts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_getOlderPosts' => array (  0 =>   array (    0 => 'postId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::getOlderPostsAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'postId',    ),    2 =>     array (      0 => 'text',      1 => '/api/getOlderPosts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_getOlderPosts_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/getOlderPosts/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_upvote' => array (  0 =>   array (    0 => 'postId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::upvoteAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'postId',    ),    2 =>     array (      0 => 'text',      1 => '/api/post/upvote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_upvote_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::upvoteAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/post/upvote/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_udownvote' => array (  0 =>   array (    0 => 'postId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::downvoteAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'postId',    ),    2 =>     array (      0 => 'text',      1 => '/api/post/downvote',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_downvote_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::downvoteAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/post/downvote/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_comment_addNew' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\CommentController::newCommentAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/comment/addNew',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_admin_getstats' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\AdminController::statsAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/admin/stats',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_addView' => array (  0 =>   array (    0 => 'postId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::addViewToPostAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'postId',    ),    2 =>     array (      0 => 'text',      1 => '/api/post/addView',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_post_addView_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/post/addView/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_addUserComing' => array (  0 =>   array (    0 => 'eventId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\EventController::attendAsMeToEventAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'eventId',    ),    2 =>     array (      0 => 'text',      1 => '/api/event/iAmComing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_addUserComing_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/event/iAmComing/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_addTeamComing' => array (  0 =>   array (    0 => 'eventId',    1 => 'teamId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\EventController::attendAsTeamToEventAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'teamId',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'eventId',    ),    3 =>     array (      0 => 'text',      1 => '/api/event/teamComing',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_addTeamComing_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\EventController::attendAsTeamToEventAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/event/teamComing/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_dontComeAsMe' => array (  0 =>   array (    0 => 'eventId',    1 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\EventController::dontComeAsMeAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'eventId',    ),    2 =>     array (      0 => 'text',      1 => '/api/event/dontComeAsMe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_dontComeAsMe_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/event/dontComeAsMe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_dontComeAsTeam' => array (  0 =>   array (    0 => 'eventId',    1 => 'teamId',    2 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\EventController::dontComeAsTeamAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'teamId',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'eventId',    ),    3 =>     array (      0 => 'text',      1 => '/api/event/dontComeAsTeam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_event_dontComeAsTeam_url' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/event/dontComeAsTeam/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_api_setThermsAndAgreementsCookie' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'Smile\\ApiBundle\\Controller\\DefaultController::setThermsAndAgreementsCookieAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => 'json|html',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'json|html',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/api/thermsAndAgreementsCookies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_homepage_co' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/co',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Smile_platform_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/co',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_profile' => array (  0 =>   array (    0 => 'userId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\UserController::userProfileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'text',      1 => '/platform/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_post' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\PostController::showPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/platform/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_contactUs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_team' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\TeamController::teamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/platform/team',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_add_to_team' => array (  0 =>   array (    0 => 'teamId',    1 => 'userId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\TeamController::addToTeamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'userId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'teamId',    ),    2 =>     array (      0 => 'text',      1 => '/platform/addToTeam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_leaveTeam' => array (  0 =>   array (    0 => 'teamId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\TeamController::leaveTeamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'teamId',    ),    1 =>     array (      0 => 'text',      1 => '/platform/leaveTeam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_events' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\EventController::seeAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_event' => array (  0 =>   array (    0 => 'eventId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\EventController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'eventId',    ),    1 =>     array (      0 => 'text',      1 => '/platform/event',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_delete_post' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\PostController::deletePostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/platform/delete/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'smile_platform_showThermsAndAgreements' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::showThermsAndAgreementsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/platform/thermsAndAgreements',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
