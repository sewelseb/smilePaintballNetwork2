<?php

/* SmilePlatformBundle:Default:Blocs/allPosts.html.twig */
class __TwigTemplate_7e98372ada452afe98af84ec6c8dde16d18f524ca5fab1485201cdd10e8cb0a6 extends Twig_Template
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
        $__internal_6ae85fb9eda807bdffd05cc413b016ba4d30216b6370c6aee28c1d1390a885bc = $this->env->getExtension("native_profiler");
        $__internal_6ae85fb9eda807bdffd05cc413b016ba4d30216b6370c6aee28c1d1390a885bc->enter($__internal_6ae85fb9eda807bdffd05cc413b016ba4d30216b6370c6aee28c1d1390a885bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

        // line 1
        echo "<!-- Project One -->
<div ng-controller=\"allPostsCtrl\">
    <span id=\"smileApiGetLastPostsUrl\" hidden>";
        // line 3
        echo $this->env->getExtension('routing')->getPath("smile_api_getlastPosts");
        echo "</span>
    <span id=\"smileApiGetOlder\" hidden>";
        // line 4
        echo $this->env->getExtension('routing')->getPath("smile_api_getOlderPosts_url");
        echo "</span>
    <span id=\"smileApiUpvoteUrl\" hidden>";
        // line 5
        echo $this->env->getExtension('routing')->getPath("smile_api_post_upvote_url");
        echo "</span>
    <span id=\"smileApiDownvoteUrl\" hidden>";
        // line 6
        echo $this->env->getExtension('routing')->getPath("smile_api_post_downvote_url");
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
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                                </a>
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <a ng-href=\"/platform/post/{{ post.id }}\">
                                    <img class=\"img-responsive\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                                </a>
                            </div>


                    </div>
                    <div class=\"col-md-5\">
                        <h3><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.title }}</a></h3>
                        <h4><a ng-href=\"/platform/post/{{ post.id }}\">{{ post.event_name }}</a></h4>
                        <a ng-href=\"/platform/profile/{{ post.user.id }}\">
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
                            <a ng-href=\"/platform/post/{{ post.id }}\">{{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments</a>
                        </div>
                        <div>
                            <div class=\"spacer-5px\">
                                <div class=\"fb-share-button\"
                                data-href=\"http://smilepaintball.com/platform/post/{{ post.id }}\"
                                data-layout=\"button_count\">
                            </div>
                            </div>
                            <div class=\"spacer-5px\">
                                <a
                        href=\"https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}\">
                                <button class=\"btn twitter-share-button\">Tweet</button></a>
                            </div>
                            <div class=\"spacer-5px\">
                                <script type=\"IN/Share\" data-url=\"http://smilepaintball.com/platform/post/{{ post.id }}\" data-counter=\"right\"></script>
                            </div>
                            <div class=\"spacer-5px\">
                                Share: <input class=\" form-control input-lg\" value=\"http://smilepaintball.com/platform/post/{{ post.id }}\">
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
        
        $__internal_6ae85fb9eda807bdffd05cc413b016ba4d30216b6370c6aee28c1d1390a885bc->leave($__internal_6ae85fb9eda807bdffd05cc413b016ba4d30216b6370c6aee28c1d1390a885bc_prof);

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
        return array (  49 => 103,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <!-- Project One -->*/
/* <div ng-controller="allPostsCtrl">*/
/*     <span id="smileApiGetLastPostsUrl" hidden>{{ path ('smile_api_getlastPosts') }}</span>*/
/*     <span id="smileApiGetOlder" hidden>{{ path('smile_api_getOlderPosts_url') }}</span>*/
/*     <span id="smileApiUpvoteUrl" hidden>{{ path ('smile_api_post_upvote_url') }}</span>*/
/*     <span id="smileApiDownvoteUrl" hidden>{{ path ('smile_api_post_downvote_url') }}</span>*/
/*     <div id="spiningWheelAllPosts">*/
/*         <i class="fa fa-spinner fa-spin fa-5x"></i> <H3>Loading</H3>*/
/*     </div>*/
/* */
/* */
/*     <div id="contentAllPosts" hidden>*/
/*         <div ng-repeat="post in posts | orderBy: '-creationTime'">*/
/*             {% verbatim %}*/
/*                 <div class="row" >*/
/*                     <div class="col-md-7">*/
/* */
/*                             <div ng-if="post.type=='video_youtube'">*/
/*                                 <iframe  width="100%"  height="300px" ng-src="{{ trustAsResourceUrl(post.url) }}" frameborder="0" allowfullscreen></iframe>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='video_facebook'">*/
/*                                 <div class="fb-video" data-href="{{ post.url }}" data-width="460px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                                 </blockquote></div>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_facebook'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_externalUrl'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <img class="img-responsive" ng-src="{{ trustAsResourceUrl(post.url) }}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_local'">*/
/*                                 <a ng-href="/platform/post/{{ post.id }}">*/
/*                                     <img class="img-responsive" ng-src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-5">*/
/*                         <h3><a ng-href="/platform/post/{{ post.id }}">{{ post.title }}</a></h3>*/
/*                         <h4><a ng-href="/platform/post/{{ post.id }}">{{ post.event_name }}</a></h4>*/
/*                         <a ng-href="/platform/profile/{{ post.user.id }}">*/
/*                             by <strong>{{ post.user.username }}</strong>*/
/*                             <br/>*/
/*                         </a>*/
/*                         <p>*/
/*                             <div id="updownVote_{{post.id}}">*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="">*/
/*                                         <span ng-click="upvote(post.id)">*/
/*                                             <img src="/images/upvote.png" class="vote-img">*/
/* */
/*                                         </span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <a href="">*/
/*                                         <span ng-click="downvote(post.id)">*/
/*                                             <img src="/images/downvote.png" class="vote-img">*/
/* */
/*                                         </span>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                            <div id="upvoted_{{post.id}}" hidden>*/
/*                                   upvoted ;)*/
/*                             </div>*/
/*                             <div id="downvoted_{{post.id}}" hidden>*/
/*                                 downvoted :(*/
/*                             </div>*/
/*                         </p>*/
/*                         <div>*/
/*                             <a ng-href="/platform/post/{{ post.id }}">{{ post.upvotes-post.downvotes }} points, {{ post.comments }} comments</a>*/
/*                         </div>*/
/*                         <div>*/
/*                             <div class="spacer-5px">*/
/*                                 <div class="fb-share-button"*/
/*                                 data-href="http://smilepaintball.com/platform/post/{{ post.id }}"*/
/*                                 data-layout="button_count">*/
/*                             </div>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 <a*/
/*                         href="https://twitter.com/intent/tweet?text={{post.title}}&url=http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                                 <button class="btn twitter-share-button">Tweet</button></a>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 <script type="IN/Share" data-url="http://smilepaintball.com/platform/post/{{ post.id }}" data-counter="right"></script>*/
/*                             </div>*/
/*                             <div class="spacer-5px">*/
/*                                 Share: <input class=" form-control input-lg" value="http://smilepaintball.com/platform/post/{{ post.id }}">*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             {% endverbatim %}*/
/*             <!-- /.row -->*/
/*             <hr>*/
/*         </div>*/
/*     </div>*/
/*     <!--  end ng-repeat -->*/
/* */
/*     <div id="bottomOfThePage">*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
