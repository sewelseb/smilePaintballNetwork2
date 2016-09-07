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
        $__internal_08dc709fab76d27c625dd6c55cbc8f94d946e59dfa0474e04171504eed030220 = $this->env->getExtension("native_profiler");
        $__internal_08dc709fab76d27c625dd6c55cbc8f94d946e59dfa0474e04171504eed030220->enter($__internal_08dc709fab76d27c625dd6c55cbc8f94d946e59dfa0474e04171504eed030220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

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
        // line 38
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
                            <div ng-if=\"post.type=='picture_local'\">
                                <img class=\"img-responsive\" ng-src=\"{{post.picture.uploadDir}}{{post.picture.url}}\" alt=\"\">
                            </div>


                    </div>
                    <div class=\"col-md-5\">
                        <h3>{{ post.title }}</h3>
                        <h4>Subheading</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
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
        
        $__internal_08dc709fab76d27c625dd6c55cbc8f94d946e59dfa0474e04171504eed030220->leave($__internal_08dc709fab76d27c625dd6c55cbc8f94d946e59dfa0474e04171504eed030220_prof);

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
        return array (  37 => 38,  26 => 3,  22 => 1,);
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
/*                             <div ng-if="post.type=='picture_local'">*/
/*                                 <img class="img-responsive" ng-src="{{post.picture.uploadDir}}{{post.picture.url}}" alt="">*/
/*                             </div>*/
/* */
/* */
/*                     </div>*/
/*                     <div class="col-md-5">*/
/*                         <h3>{{ post.title }}</h3>*/
/*                         <h4>Subheading</h4>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>*/
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
