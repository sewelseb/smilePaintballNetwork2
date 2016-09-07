<?php

/* SmilePlatformBundle:Default:Blocs/allPosts.html.twig */
class __TwigTemplate_41a145771b1d6d62870604b76df5e724af2588a7553a4853d52900456212e6da extends Twig_Template
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
        $__internal_bed18b035553a4223a3afe7b0144e8843231636af5523286bbec1deb795443e9 = $this->env->getExtension("native_profiler");
        $__internal_bed18b035553a4223a3afe7b0144e8843231636af5523286bbec1deb795443e9->enter($__internal_bed18b035553a4223a3afe7b0144e8843231636af5523286bbec1deb795443e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

        // line 1
        echo "<!-- Project One -->
<div ng-controller=\"allPostsCtrl\">
    <span id=\"smileApiGetLastPostsUrl\" hidden>";
        // line 3
        echo $this->env->getExtension('routing')->getPath("smile_api_getlastPosts");
        echo "</span>
    <div id=\"spiningWheelAllPosts\">
        <i class=\"fa fa-spinner fa-spin fa-5x\"></i> <H3>Loading</H3>
    </div>


    <div id=\"contentAllPosts\" hidden>
        <div ng-repeat=\"post in posts | orderBy: '-creationTime'\">
            ";
        // line 52
        echo "
                <div class=\"row\" >
                    <div class=\"col-md-7\">

                            <div ng-if=\"post.type=='video_youtube'\">
                                <iframe  width=\"100%\"  height=\"300px\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" frameborder=\"0\" allowfullscreen></iframe>
                            </div>
                            <div ng-if=\"post.type=='video_facebook'\">
                                <div class=\"fb-video\" data-href=\"{{ post.url }}\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"{{ post.url }}\" class=\"fb-xfbml-parse-ignore\"><a href=\"{{ post.url }}\"></a>
                                </blockquote></div>
                            </div>
                            <div ng-if=\"post.type=='picture_facebook'\">
                                <div data-width=\"460px\" class=\"fb-post\" data-href=\"{{ post.url }}\"></div>
                            </div>
                            <div ng-if=\"post.type=='picture_externalUrl'\">
                                <img class=\"img-responsive\" ng-src=\"{{ trustAsResourceUrl(post.url) }}\" alt=\"\">
                            </div>
                            <div ng-if=\"post.type=='picture_local'\">
                                <img class=\"img-responsive\" ng-src=\"{{post.picture.uploadDir}}/{{post.picture.url}}\" alt=\"\">
                            </div>


                    </div>
                    <div class=\"col-md-5\">
                        <h3>{{ post.title }}</h3>
                        <h4>{{ post.event }}</h4>
                        <p>
                           <div class=\"col-md-6\">
                                <a href=\"\">
                                    <span ng-click=\"upvote({{post.id}})\">Upvote</span>
                                </a>
                            </div>
                            <div class=\"col-md-6\">
                                <a href=\"\">
                                    <span ng-click=\"downvote({{post.id}})\">Downvote</span>
                                </a>
                            </div>
                        </p>
                        <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                    </div>
                </div>
            ";
        echo "
            <!-- /.row -->
            <hr>
        </div>
    </div>
    <!--  end ng-repeat -->


</div>

";
        
        $__internal_bed18b035553a4223a3afe7b0144e8843231636af5523286bbec1deb795443e9->leave($__internal_bed18b035553a4223a3afe7b0144e8843231636af5523286bbec1deb795443e9_prof);

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
        return array (  37 => 52,  26 => 3,  22 => 1,);
    }
}
/* <!-- Project One -->*/
/* <div ng-controller="allPostsCtrl">*/
/*     <span id="smileApiGetLastPostsUrl" hidden>{{ path ('smile_api_getlastPosts') }}</span>*/
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
/*                                 <div class="fb-video" data-href="{{ post.url }}" data-width="700px" data-show-text="false"><blockquote cite="{{ post.url }}" class="fb-xfbml-parse-ignore"><a href="{{ post.url }}"></a>*/
/*                                 </blockquote></div>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_facebook'">*/
/*                                 <div data-width="460px" class="fb-post" data-href="{{ post.url }}"></div>*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_externalUrl'">*/
/*                                 <img class="img-responsive" ng-src="{{ trustAsResourceUrl(post.url) }}" alt="">*/
/*                             </div>*/
/*                             <div ng-if="post.type=='picture_local'">*/
/*                                 <img class="img-responsive" ng-src="{{post.picture.uploadDir}}/{{post.picture.url}}" alt="">*/
/*                             </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-5">*/
/*                         <h3>{{ post.title }}</h3>*/
/*                         <h4>{{ post.event }}</h4>*/
/*                         <p>*/
/*                            <div class="col-md-6">*/
/*                                 <a href="">*/
/*                                     <span ng-click="upvote({{post.id}})">Upvote</span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <a href="">*/
/*                                     <span ng-click="downvote({{post.id}})">Downvote</span>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </p>*/
/*                         <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endverbatim %}*/
/*             <!-- /.row -->*/
/*             <hr>*/
/*         </div>*/
/*     </div>*/
/*     <!--  end ng-repeat -->*/
/* */
/* */
/* </div>*/
/* */
/* */
