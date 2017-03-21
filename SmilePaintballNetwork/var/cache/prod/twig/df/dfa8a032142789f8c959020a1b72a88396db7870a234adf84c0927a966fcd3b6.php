<?php

/* SmilePlatformBundle:Default:Blocs/allPosts.html.twig */
class __TwigTemplate_f3e60d5e0980b9aaa57cebfb5b3db476ef4ba92fec41c0483f3e28284f05805c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ac9eef5a7e1b6f9734029870e85c3fb3a47a656ae906dbabd2fe4e640fead6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac9eef5a7e1b6f9734029870e85c3fb3a47a656ae906dbabd2fe4e640fead6d->enter($__internal_2ac9eef5a7e1b6f9734029870e85c3fb3a47a656ae906dbabd2fe4e640fead6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

        // line 1
        echo "<!-- Project One -->
<div ng-controller=\"allPostsCtrl\">
    <span id=\"smileApiGetLastPostsUrl\" hidden>";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_getlastPosts");
        echo "</span>
    <span id=\"smileApiGetOlder\" hidden>";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_getOlderPosts_url");
        echo "</span>
    <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_upvote_url");
        echo "</span>
    <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_downvote_url");
        echo "</span>
    <div id=\"spiningWheelAllPosts\">
        <i class=\"fa fa-spinner fa-spin fa-5x\"></i> <H3>Loading</H3>
    </div>
    <div id=\"contentAllPosts\" hidden>
        <div ng-repeat=\"post in posts | orderBy: '-creationTime'\">
            ";
        // line 105
        echo "
                <div class=\"row\">
                    <span class=\"postSeen\" data-postId=\"{{ post.id }}\"></span>
                    <div ng-if=\"post.team\">
                        <a ng-href=\"/platform/team/{{ post.team.id }}\">
                            <div class=\"col-md-1 col-xs-3\">
                                <img ng-src=\"/teamPicture/profilePics/{{post.team.teamPicture.url}}\" class=\"img-responsive profile-pic-small\">
                            </div>
                            <div class=\"col-md-10 col-xs-9\">
                                <strong>{{ post.team.name }}</strong> (team) posted
                            </div>
                        </a>
                    </div>
                    <h3><strong><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.title }}</a></strong></h3>
                    <div ng-if=\"!post.team\">
                        <a ng-href=\"/platform/profile/{{ post.user.id }}\">
                            <div class=\"col-md-1 col-xs-3\">
                                <img ng-src=\"/uploads/profilePics/{{post.user.picture.url}}\" class=\"img-responsive profile-pic-small\">
                            </div>
                            <div class=\"col-md-10 col-xs-9\">
                                <span ng-if=\"post.user.firstName != '' && post.user.lastName != '' && post.user.firstName != null && post.user.lastName != null\">
                                     <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong> posted
                                </span>
                                <span ng-if=\"post.user.firstName == '' || post.user.lastName == '' || post.user.firstName == null || post.user.lastName == null\">
                                    <strong>{{ post.user.username }}</strong> posted
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row text-center\" >
                    <div class=\"\">
                         <div class=\"text-center\">
                            <div ng-if=\"post.type=='video_youtube'\">
                                <iframe  width=\"80%\"  height=\"300px\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <div ng-if=\"post.type=='video_facebook'\">
                                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"460px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                                </blockquote></div>
                            </div>
                            <div ng-if=\"post.type=='picture_facebook'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='event_picture'\">
                                <a ng-href=\"/platform/event/{{ post.event.id }}\">
                                    <img class=\"post-img\" ng-src=\"/{{post.event.picture.uploadDir}}/{{post.event.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='team_picture'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-9 col-xs-9\">
                        <div ng-if=\"post.eventName && post.eventName != ''\">
                            <h4>Event: <a ng-href=\"/platform/post/{{ post.id }}\">{{ post.eventName }}</a></h4>
                        </div>
                        <div>

                            <div class=\"fb-share-button\"
                            data-href=\"http://smilepaintball.com/platform/post/{{ post.id }}\"
                            data-layout=\"button_count\">
                            </div>

                            <a href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}\">
                                <button class=\"btn twitter-share-button\">Tweet</button>
                            </a>
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                             <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/{{ post.id }}\">

                        </div>
                    </div>
                    <div class=\"col-md-3  sm-hidden\">



                        <div >
                            ";
        echo "
                            ";
        // line 106
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 107
            echo "                            ";
            // line 126
            echo "
                            <div class=\"row\" id=\"updownVote_{{post.id}}\">
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"upvote(post.id)\">
                                            <img src=\"/images/upvote.png\" class=\"im-responsive vote-img\">

                                        </span>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"downvote(post.id)\">
                                            <img src=\"/images/downvote.png\" class=\"im-responsive vote-img\">

                                        </span>
                                    </a>
                                </div>
                            </div>
                            ";
            echo "
                            ";
        } else {
            // line 128
            echo "                            ";
            // line 139
            echo "
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                        <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"im-responsive vote-img\"></span>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                        <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"im-responsive vote-img\"></span>
                                    </a>
                                </div>
                            ";
            echo "
                            ";
        }
        // line 141
        echo "                            ";
        // line 221
        echo "
                           <div id=\"upvoted_{{post.id}}\" hidden>
                                  upvoted ;)
                            </div>
                            <div id=\"downvoted_{{post.id}}\" hidden>
                                downvoted :(
                            </div>
                        </div>
                        <div>
                            <a ng-href=\"/platform/post/{{ post.id }}\"><span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, {{ post.comments }} comments</a>
                        </div>


                    </div>
                    <div>
                        <a ng-href=\"/platform/post/{{ post.id }}\">this post has been seen {{ post.views }} times on SmilePaintball.com</a>
                    </div>
                </div>

                <div ng-if=\"(\$index%5)==0\" class=\"row\">
                    <hr/>
                    <h3>Sponsors</h3>
                    <div class=\"row\">
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.tippmann.com/\">
                                <img src=\"/images/sponsors/tippmann.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/\">
                                <img src=\"/images/sponsors/gisportz.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/vforce-goggles.php\">
                                <img src=\"/images/sponsors/vforce.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.redbull.com/be/fr\">
                                <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.kg-factory.fr/fr/\">
                                <img src=\"/images/sponsors/kgfactory.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.patch-werk.com/index.php/en/\">
                                <img src=\"/images/sponsors/patch-werk.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.enolagaye.com\">
                                <img src=\"/images/sponsors/e-g.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://maxxloader.com/\">
                                <img src=\"/images/sponsors/maxxloader.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://shop.customgunrails.com/\">
                                <img src=\"/images/sponsors/cgr.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.anthraxpaintball.com/\">
                                <img src=\"/images/sponsors/anthrax.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.techtpaintball.com/\">
                                <img src=\"/images/sponsors/techt.png\" width=\"50em\">
                            </a>
                        </div>
                    </div>
                </div>
            ";
        echo "
            <!-- /.row -->
            <hr>
        </div>
    </div>
    <!--  end ng-repeat -->
    <div id=\"bottomOfThePage\">
    </div>
    <div ng-if=\"loadMore == true\">
        <button class=\"btn btn-primary\" ng-click=\"loadMoreBdt\">Load More</button>
    </div>
</div>

";
        
        $__internal_2ac9eef5a7e1b6f9734029870e85c3fb3a47a656ae906dbabd2fe4e640fead6d->leave($__internal_2ac9eef5a7e1b6f9734029870e85c3fb3a47a656ae906dbabd2fe4e640fead6d_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:Blocs/allPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 221,  190 => 141,  174 => 139,  172 => 128,  148 => 126,  146 => 107,  144 => 106,  47 => 105,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Project One -->
<div ng-controller=\"allPostsCtrl\">
    <span id=\"smileApiGetLastPostsUrl\" hidden>{{ path ('smile_api_getlastPosts') }}</span>
    <span id=\"smileApiGetOlder\" hidden>{{ path('smile_api_getOlderPosts_url') }}</span>
    <span id=\"smileApiUpvoteUrl\" hidden>{{ path ('smile_api_post_upvote_url') }}</span>
    <span id=\"smileApiDownvoteUrl\" hidden>{{ path ('smile_api_post_downvote_url') }}</span>
    <div id=\"spiningWheelAllPosts\">
        <i class=\"fa fa-spinner fa-spin fa-5x\"></i> <H3>Loading</H3>
    </div>
    <div id=\"contentAllPosts\" hidden>
        <div ng-repeat=\"post in posts | orderBy: '-creationTime'\">
            {% verbatim %}
                <div class=\"row\">
                    <span class=\"postSeen\" data-postId=\"{{ post.id }}\"></span>
                    <div ng-if=\"post.team\">
                        <a ng-href=\"/platform/team/{{ post.team.id }}\">
                            <div class=\"col-md-1 col-xs-3\">
                                <img ng-src=\"/teamPicture/profilePics/{{post.team.teamPicture.url}}\" class=\"img-responsive profile-pic-small\">
                            </div>
                            <div class=\"col-md-10 col-xs-9\">
                                <strong>{{ post.team.name }}</strong> (team) posted
                            </div>
                        </a>
                    </div>
                    <h3><strong><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.title }}</a></strong></h3>
                    <div ng-if=\"!post.team\">
                        <a ng-href=\"/platform/profile/{{ post.user.id }}\">
                            <div class=\"col-md-1 col-xs-3\">
                                <img ng-src=\"/uploads/profilePics/{{post.user.picture.url}}\" class=\"img-responsive profile-pic-small\">
                            </div>
                            <div class=\"col-md-10 col-xs-9\">
                                <span ng-if=\"post.user.firstName != '' && post.user.lastName != '' && post.user.firstName != null && post.user.lastName != null\">
                                     <strong>{{ post.user.firstName }} {{ post.user.lastName }}</strong> posted
                                </span>
                                <span ng-if=\"post.user.firstName == '' || post.user.lastName == '' || post.user.firstName == null || post.user.lastName == null\">
                                    <strong>{{ post.user.username }}</strong> posted
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=\"row text-center\" >
                    <div class=\"\">
                         <div class=\"text-center\">
                            <div ng-if=\"post.type=='video_youtube'\">
                                <iframe  width=\"80%\"  height=\"300px\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <div ng-if=\"post.type=='video_facebook'\">
                                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"460px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                                </blockquote></div>
                            </div>
                            <div ng-if=\"post.type=='picture_facebook'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='event_picture'\">
                                <a ng-href=\"/platform/event/{{ post.event.id }}\">
                                    <img class=\"post-img\" ng-src=\"/{{post.event.picture.uploadDir}}/{{post.event.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='team_picture'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"post-img\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9 col-sm-9 col-xs-9\">
                        <div ng-if=\"post.eventName && post.eventName != ''\">
                            <h4>Event: <a ng-href=\"/platform/post/{{ post.id }}\">{{ post.eventName }}</a></h4>
                        </div>
                        <div>

                            <div class=\"fb-share-button\"
                            data-href=\"http://smilepaintball.com/platform/post/{{ post.id }}\"
                            data-layout=\"button_count\">
                            </div>

                            <a href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}\">
                                <button class=\"btn twitter-share-button\">Tweet</button>
                            </a>
                            <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                             <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/{{ post.id }}\">

                        </div>
                    </div>
                    <div class=\"col-md-3  sm-hidden\">



                        <div >
                            {% endverbatim %}
                            {% if app.user %}
                            {% verbatim %}
                            <div class=\"row\" id=\"updownVote_{{post.id}}\">
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"upvote(post.id)\">
                                            <img src=\"/images/upvote.png\" class=\"im-responsive vote-img\">

                                        </span>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-xs-6\">
                                    <a href=\"\">
                                        <span ng-click=\"downvote(post.id)\">
                                            <img src=\"/images/downvote.png\" class=\"im-responsive vote-img\">

                                        </span>
                                    </a>
                                </div>
                            </div>
                            {% endverbatim %}
                            {% else %}
                            {% verbatim %}
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                        <span onclick=\"openModalConnectToVote()\"><img src=\"/images/upvote.png\" class=\"im-responsive vote-img\"></span>
                                    </a>
                                </div>
                                <div class=\"col-md-6 col-sm-6 col-xs-6\">
                                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\" class=\"yellow-text\">
                                        <span onclick=\"openModalConnectToVote()\"><img src=\"/images/downvote.png\" class=\"im-responsive vote-img\"></span>
                                    </a>
                                </div>
                            {% endverbatim %}
                            {% endif %}
                            {% verbatim %}
                           <div id=\"upvoted_{{post.id}}\" hidden>
                                  upvoted ;)
                            </div>
                            <div id=\"downvoted_{{post.id}}\" hidden>
                                downvoted :(
                            </div>
                        </div>
                        <div>
                            <a ng-href=\"/platform/post/{{ post.id }}\"><span id=\"post_point_{{ post.id }}\">{{ post.upvotes-post.downvotes }}</span> points, {{ post.comments }} comments</a>
                        </div>


                    </div>
                    <div>
                        <a ng-href=\"/platform/post/{{ post.id }}\">this post has been seen {{ post.views }} times on SmilePaintball.com</a>
                    </div>
                </div>

                <div ng-if=\"(\$index%5)==0\" class=\"row\">
                    <hr/>
                    <h3>Sponsors</h3>
                    <div class=\"row\">
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.tippmann.com/\">
                                <img src=\"/images/sponsors/tippmann.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/\">
                                <img src=\"/images/sponsors/gisportz.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://gisportz.com/vforce-goggles.php\">
                                <img src=\"/images/sponsors/vforce.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\" >
                            <a href=\"http://www.redbull.com/be/fr\">
                                <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.kg-factory.fr/fr/\">
                                <img src=\"/images/sponsors/kgfactory.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.patch-werk.com/index.php/en/\">
                                <img src=\"/images/sponsors/patch-werk.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.enolagaye.com\">
                                <img src=\"/images/sponsors/e-g.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://maxxloader.com/\">
                                <img src=\"/images/sponsors/maxxloader.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://shop.customgunrails.com/\">
                                <img src=\"/images/sponsors/cgr.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.anthraxpaintball.com/\">
                                <img src=\"/images/sponsors/anthrax.png\" width=\"50em\">
                            </a>
                        </div>
                        <div class=\"col-md-1 col-xs-2\">
                            <a href=\"http://www.techtpaintball.com/\">
                                <img src=\"/images/sponsors/techt.png\" width=\"50em\">
                            </a>
                        </div>
                    </div>
                </div>
            {% endverbatim %}
            <!-- /.row -->
            <hr>
        </div>
    </div>
    <!--  end ng-repeat -->
    <div id=\"bottomOfThePage\">
    </div>
    <div ng-if=\"loadMore == true\">
        <button class=\"btn btn-primary\" ng-click=\"loadMoreBdt\">Load More</button>
    </div>
</div>

", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/allPosts.html.twig");
    }
}
