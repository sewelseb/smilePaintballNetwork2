<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_25290286895ed5a4a2cf5d79e823b1f36d4ed726b67d50fb3f50b1742a76c3aa extends Twig_Template
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
        $__internal_17a5f14a1930e04969197e37cfa69cf881d42e5fa09ed4606dbe0f9466456ca6 = $this->env->getExtension("native_profiler");
        $__internal_17a5f14a1930e04969197e37cfa69cf881d42e5fa09ed4606dbe0f9466456ca6->enter($__internal_17a5f14a1930e04969197e37cfa69cf881d42e5fa09ed4606dbe0f9466456ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>Smile Paintball Network</title>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Font awsome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"css/1-col-portfolio.css\" rel=\"stylesheet\">
    ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 29
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613.css");
            // line 29
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 32
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

";
        // line 44
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 44)->display($context);
        // line 45
        echo "
<!-- Page Content -->
<div class=\"container\">

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Smile Paintball Network
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\">

        <!-- Project One -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project One</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Two</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Three</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class=\"row\">

            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Four</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class=\"row\">
            <div class=\"col-md-7\">
                <a href=\"#\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/700x300\" alt=\"\">
                </a>
            </div>
            <div class=\"col-md-5\">
                <h3>Project Five</h3>
                <h4>Subheading</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>
                <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    <li>
                        <a href=\"#\">&laquo;</a>
                    </li>
                    <li class=\"active\">
                        <a href=\"#\">1</a>
                    </li>
                    <li>
                        <a href=\"#\">2</a>
                    </li>
                    <li>
                        <a href=\"#\">3</a>
                    </li>
                    <li>
                        <a href=\"#\">4</a>
                    </li>
                    <li>
                        <a href=\"#\">5</a>
                    </li>
                    <li>
                        <a href=\"#\">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <h3>Project One</h3>
        <h4>Subheading</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
        <a class=\"btn btn-primary\" href=\"#\">View Project <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
    </div>

    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src=\"js/jquery.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<!-- Bootstrap Core JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>

</html>";
        
        $__internal_17a5f14a1930e04969197e37cfa69cf881d42e5fa09ed4606dbe0f9466456ca6->leave($__internal_17a5f14a1930e04969197e37cfa69cf881d42e5fa09ed4606dbe0f9466456ca6_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 45,  85 => 44,  71 => 32,  65 => 30,  62 => 29,  55 => 30,  52 => 29,  48 => 25,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>Smile Paintball Network</title>*/
/* */
/*     <!-- Latest compiled and minified CSS -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     <!-- Optional theme -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">*/
/* */
/*     <!-- Font awsome -->*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">*/
/* */
/*     <!-- Custom CSS -->*/
/*     <link href="css/1-col-portfolio.css" rel="stylesheet">*/
/*     {% stylesheets filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/css/style.css'*/
/* */
/*     %}*/
/* */
/*     <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% include 'SmilePlatformBundle::Default/Blocs/navbar.html.twig' %}*/
/* */
/* <!-- Page Content -->*/
/* <div class="container">*/
/* */
/*     <!-- Page Heading -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">*/
/*                 Smile Paintball Network*/
/*             </h1>*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     <div class="col-md-9">*/
/* */
/*         <!-- Project One -->*/
/*         <div class="row">*/
/*             <div class="col-md-7">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>Project One</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/*         <!-- Project Two -->*/
/*         <div class="row">*/
/*             <div class="col-md-7">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>Project Two</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/*         <!-- Project Three -->*/
/*         <div class="row">*/
/*             <div class="col-md-7">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>Project Three</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, temporibus, dolores, at, praesentium ut unde repudiandae voluptatum sit ab debitis suscipit fugiat natus velit excepturi amet commodi deleniti alias possimus!</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/*         <!-- Project Four -->*/
/*         <div class="row">*/
/* */
/*             <div class="col-md-7">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>Project Four</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, quidem, consectetur, officia rem officiis illum aliquam perspiciatis aspernatur quod modi hic nemo qui soluta aut eius fugit quam in suscipit?</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/*         <!-- Project Five -->*/
/*         <div class="row">*/
/*             <div class="col-md-7">*/
/*                 <a href="#">*/
/*                     <img class="img-responsive" src="http://placehold.it/700x300" alt="">*/
/*                 </a>*/
/*             </div>*/
/*             <div class="col-md-5">*/
/*                 <h3>Project Five</h3>*/
/*                 <h4>Subheading</h4>*/
/*                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident ex quisquam hic odio repellendus atque porro distinctio quae id laboriosam facilis dolorum.</p>*/
/*                 <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*         <hr>*/
/* */
/*         <!-- Pagination -->*/
/*         <div class="row text-center">*/
/*             <div class="col-lg-12">*/
/*                 <ul class="pagination">*/
/*                     <li>*/
/*                         <a href="#">&laquo;</a>*/
/*                     </li>*/
/*                     <li class="active">*/
/*                         <a href="#">1</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">2</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">3</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">4</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">5</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="#">&raquo;</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*         <h3>Project One</h3>*/
/*         <h4>Subheading</h4>*/
/*         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>*/
/*         <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*     </div>*/
/* */
/*     <!-- /.row -->*/
/* */
/*     <hr>*/
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <p>Copyright &copy; Your Website 2014</p>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </footer>*/
/* */
/* </div>*/
/* <!-- /.container -->*/
/* */
/* <!-- jQuery -->*/
/* <script src="js/jquery.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
