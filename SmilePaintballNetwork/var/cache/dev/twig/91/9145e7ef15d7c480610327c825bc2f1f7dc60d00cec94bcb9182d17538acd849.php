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
        $__internal_2b6ed80ae17969bba80202e63d710e1a959a1057a816de04b8e8ecc28266a463 = $this->env->getExtension("native_profiler");
        $__internal_2b6ed80ae17969bba80202e63d710e1a959a1057a816de04b8e8ecc28266a463->enter($__internal_2b6ed80ae17969bba80202e63d710e1a959a1057a816de04b8e8ecc28266a463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:Blocs/allPosts.html.twig"));

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
        // line 23
        echo "
                <div class=\"row\" >
                    <div class=\"col-md-7\">
                        <a href=\"#\">
                            <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                        </a>
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
        
        $__internal_2b6ed80ae17969bba80202e63d710e1a959a1057a816de04b8e8ecc28266a463->leave($__internal_2b6ed80ae17969bba80202e63d710e1a959a1057a816de04b8e8ecc28266a463_prof);

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
        return array (  35 => 23,  26 => 3,  22 => 1,);
    }
}
/* <!-- Project One -->*/
/* <div ng-controller="allPostsCtrl">*/
/*     <span id="smileApiGetLastPostsUrl" hidden>{{ path ('smile_api_getlastPosts') }}</span>*/
/*     <div id="spiningWheelAllPosts">*/
/*         <i class="fa fa-spinner fa-spin fa-5x"></i> <H3>Loading</H3>*/
/*     </div>*/
/*     <div id="contentAllPosts" hidden>*/
/*         <div ng-repeat="post in posts | orderBy: '-creationTime'">*/
/*             {% verbatim %}*/
/*                 <div class="row" >*/
/*                     <div class="col-md-7">*/
/*                         <a href="#">*/
/*                             <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                         </a>*/
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
