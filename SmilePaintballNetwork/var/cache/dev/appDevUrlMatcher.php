<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/6d14613')) {
            // _assetic_6d14613
            if ($pathinfo === '/css/6d14613.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6d14613',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6d14613',);
            }

            // _assetic_6d14613_0
            if ($pathinfo === '/css/6d14613_style_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6d14613',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6d14613_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js/fd0d37f')) {
            // _assetic_fd0d37f
            if ($pathinfo === '/js/fd0d37f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fd0d37f',);
            }

            if (0 === strpos($pathinfo, '/js/fd0d37f_')) {
                // _assetic_fd0d37f_0
                if ($pathinfo === '/js/fd0d37f_waypoint_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_0',);
                }

                // _assetic_fd0d37f_1
                if ($pathinfo === '/js/fd0d37f_noframework_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_1',);
                }

                // _assetic_fd0d37f_2
                if ($pathinfo === '/js/fd0d37f_context_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_2',);
                }

                // _assetic_fd0d37f_3
                if ($pathinfo === '/js/fd0d37f_group_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_3',);
                }

                if (0 === strpos($pathinfo, '/js/fd0d37f_a')) {
                    // _assetic_fd0d37f_4
                    if ($pathinfo === '/js/fd0d37f_app_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_4',);
                    }

                    // _assetic_fd0d37f_5
                    if ($pathinfo === '/js/fd0d37f_allPostsCtrl_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_5',);
                    }

                }

                // _assetic_fd0d37f_6
                if ($pathinfo === '/js/fd0d37f_jqwery_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fd0d37f',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_fd0d37f_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/connect')) {
            // hwi_oauth_service_redirect
            if (preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/connect/service') && preg_match('#^/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/connect/registration') && preg_match('#^/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

        }

        if (0 === strpos($pathinfo, '/login')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // facebook_login
            if ($pathinfo === '/login/check-facebook') {
                return array('_route' => 'facebook_login');
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            // smile_api_getlastPosts
            if (0 === strpos($pathinfo, '/api/posts/getLastPosts') && preg_match('#^/api/posts/getLastPosts(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_getlastPosts')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::getLastPostsAction',  '_format' => 'json',));
            }

            if (0 === strpos($pathinfo, '/api/getOlderPosts')) {
                // smile_api_getOlderPosts
                if (preg_match('#^/api/getOlderPosts/(?P<postId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_getOlderPosts')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::getOlderPostsAction',  '_format' => 'json',));
                }

                // smile_api_getOlderPosts_url
                if (0 === strpos($pathinfo, '/api/getOlderPosts/') && preg_match('#^/api/getOlderPosts/(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_getOlderPosts_url')), array (  '_format' => 'json',));
                }

            }

            if (0 === strpos($pathinfo, '/api/post')) {
                if (0 === strpos($pathinfo, '/api/post/upvote')) {
                    // smile_api_post_upvote
                    if (preg_match('#^/api/post/upvote/(?P<postId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_post_upvote')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::upvoteAction',  '_format' => 'json',));
                    }

                    // smile_api_post_upvote_url
                    if (0 === strpos($pathinfo, '/api/post/upvote/') && preg_match('#^/api/post/upvote/(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_post_upvote_url')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::upvoteAction',  '_format' => 'json',));
                    }

                }

                if (0 === strpos($pathinfo, '/api/post/downvote')) {
                    // smile_api_post_udownvote
                    if (preg_match('#^/api/post/downvote/(?P<postId>[^/\\.]++)(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_post_udownvote')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::downvoteAction',  '_format' => 'json',));
                    }

                    // smile_api_post_downvote_url
                    if (0 === strpos($pathinfo, '/api/post/downvote/') && preg_match('#^/api/post/downvote/(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_post_downvote_url')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\PostsController::downvoteAction',  '_format' => 'json',));
                    }

                }

            }

            // smile_api_comment_addNew
            if (0 === strpos($pathinfo, '/api/comment/addNew') && preg_match('#^/api/comment/addNew(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_api_comment_addNew')), array (  '_controller' => 'Smile\\ApiBundle\\Controller\\CommentController::newCommentAction',  '_format' => 'json',));
            }

        }

        // smile_platform_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'smile_platform_homepage');
            }

            return array (  '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'smile_platform_homepage',);
        }

        if (0 === strpos($pathinfo, '/platform')) {
            // smile_platform_homepage_co
            if ($pathinfo === '/platform/co') {
                return array (  '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'smile_platform_homepage_co',);
            }

            if (0 === strpos($pathinfo, '/platform/p')) {
                // smile_platform_profile
                if (0 === strpos($pathinfo, '/platform/profile') && preg_match('#^/platform/profile/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_platform_profile')), array (  '_controller' => 'Smile\\PlatformBundle\\Controller\\UserController::userProfileAction',));
                }

                // smile_platform_post
                if (0 === strpos($pathinfo, '/platform/post') && preg_match('#^/platform/post/(?P<postId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'smile_platform_post')), array (  '_controller' => 'Smile\\PlatformBundle\\Controller\\PostController::showPostAction',));
                }

            }

            // smile_platform_contactUs
            if ($pathinfo === '/platform/contact') {
                return array (  '_controller' => 'Smile\\PlatformBundle\\Controller\\DefaultController::contactAction',  '_route' => 'smile_platform_contactUs',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Smile\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
