<?php

/* SmilePlatformBundle:Default:Blocs/allPosts.html.twig */
class __TwigTemplate_77beff50c2c4b73b50f3568a9b97e4f405a513496b478d9aab76126b0b661518 extends Twig_Template
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
        // line 103
        echo "
                <div class=\"row\" >
                    <div class=\"col-md-7\">

                            <div ng-if=\"post.type=='video_youtube'\">
                                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <div ng-if=\"post.type=='video_facebook'\">
                                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"460px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                                </blockquote></div>
                            </div>
                            <div ng-if=\"post.type=='picture_facebook'\">
                                <a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">
                                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>


                    </div>
                    <div class=\"col-md-5\">
                        <h3><a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">{{ post.title }}</a></h3>
                        <h4><a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">{{ post.event_name }}</a></h4>
                        <a ng-href=\"/app_dev.php/platform/profile/{{ post.user.id }}\">
                            by <strong>{{ post.user.username }}</strong>
                            <br/>
                        </a>
                        <p>
                            <div id=\"updownVote_{{post.id}}\">
                                <div class=\"col-md-6\">
                                    <a href=\"\">
                                        <span ng-click=\"upvote(post.id)\">
                                            <img src=\"/images/upvote.png\" class=\"vote-img\">

                                        </span>
                                    </a>
                                </div>
                                <div class=\"col-md-6\">
                                    <a href=\"\">
                                        <span ng-click=\"downvote(post.id)\">
                                            <img src=\"/images/downvote.png\" class=\"vote-img\">

                                        </span>
                                    </a>
                                </div>
                            </div>
                           <div id=\"upvoted_{{post.id}}\" hidden>
                                  upvoted ;)
                            </div>
                            <div id=\"downvoted_{{post.id}}\" hidden>
                                downvoted :(
                            </div>
                        </p>
                        <div>
                            <a ng-href=\"/app_dev.php/platform/post/{{ post.id }}\">{{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments</a>
                        </div>
                        <div>
                            <div class=\"spacer-5px\">
                                <div class=\"fb-share-button\"
                                data-href=\"http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}\"
                                data-layout=\"button_count\">
                            </div>
                            </div>
                            <div class=\"spacer-5px\">
                                <a
                        href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                            </div>
                            <div class=\"spacer-5px\">
                                <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                            </div>
                            <div class=\"spacer-5px\">
                                Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/app_dev.php/platform/post/{{ post.id }}\">
                            </div>


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

</div>

";
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
        return array (  46 => 103,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/allPosts.html.twig");
    }
}
