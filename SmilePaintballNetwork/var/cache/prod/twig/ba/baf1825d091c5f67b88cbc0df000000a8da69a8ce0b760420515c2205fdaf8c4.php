<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_4bf6e67547514f20bbd09eced16ad08c215b74b91f78c2181f6955de329c642a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'openGraph' => array($this, 'block_openGraph'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb957657b3fc1664ab20093428841e7167ec378e2ad57b63586635d7a0111e96 = $this->env->getExtension("native_profiler");
        $__internal_cb957657b3fc1664ab20093428841e7167ec378e2ad57b63586635d7a0111e96->enter($__internal_cb957657b3fc1664ab20093428841e7167ec378e2ad57b63586635d7a0111e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    ";
        // line 12
        $this->displayBlock('openGraph', $context, $blocks);
        // line 18
        echo "
    <title>Smile Paintball Network</title>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Font awsome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- jQuery -->
    <script src=\"js/jquery.js\"></script><script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

    <!-- Custom CSS -->
    <link href=\"css/1-col-portfolio.css\" rel=\"stylesheet\">
    ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 39
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613.css");
            // line 39
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js\"></script>
    ";
        // line 52
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fd0d37f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_waypoint_1.js");
            // line 63
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_noframework_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_context_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_group_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_app_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_allPostsCtrl_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_jqwery_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fd0d37f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 65
        echo "
</head>

<body >
<div id=\"fb-root\"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1274219895951492',
            xfbml      : true,
            version    : 'v2.7'
        });
    };
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function fb_login() {
        FB.getLoginStatus(function(response) {
            if (response.status === 'connected') {
                // connected
                alert('Already connected, redirect to login page to create token.');
                document.location = \"";
        // line 91
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 96
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                    } else {
                        alert('Cancelled.');
                    }
                }, {scope: 'email'});
            }
        });
    }
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64911145-1', 'auto');
    ga('send', 'pageview');

</script>

";
        // line 116
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 116)->display($context);
        // line 117
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 124
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 129
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        ";
        // line 133
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 137
        echo "    </div>
    <div class=\"col-md-3 right-bar\">
        ";
        // line 139
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 221
        echo "    </div>

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

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->



<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
<!-- Bootstrap Core JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>

</html>";
        
        $__internal_cb957657b3fc1664ab20093428841e7167ec378e2ad57b63586635d7a0111e96->leave($__internal_cb957657b3fc1664ab20093428841e7167ec378e2ad57b63586635d7a0111e96_prof);

    }

    // line 12
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_1023431411adf96368ff48cf7158428480d57e41cebedb45989164cd6cb0b490 = $this->env->getExtension("native_profiler");
        $__internal_1023431411adf96368ff48cf7158428480d57e41cebedb45989164cd6cb0b490->enter($__internal_1023431411adf96368ff48cf7158428480d57e41cebedb45989164cd6cb0b490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 13
        echo "        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
    ";
        
        $__internal_1023431411adf96368ff48cf7158428480d57e41cebedb45989164cd6cb0b490->leave($__internal_1023431411adf96368ff48cf7158428480d57e41cebedb45989164cd6cb0b490_prof);

    }

    // line 124
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_79fab528b3768c2165dd62bdcc6ae831f0bfde546be449f728979617c5e043fc = $this->env->getExtension("native_profiler");
        $__internal_79fab528b3768c2165dd62bdcc6ae831f0bfde546be449f728979617c5e043fc->enter($__internal_79fab528b3768c2165dd62bdcc6ae831f0bfde546be449f728979617c5e043fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 125
        echo "                <h1 class=\"page-header\">
                    Smile Paintball Network BETA
                </h1>
            ";
        
        $__internal_79fab528b3768c2165dd62bdcc6ae831f0bfde546be449f728979617c5e043fc->leave($__internal_79fab528b3768c2165dd62bdcc6ae831f0bfde546be449f728979617c5e043fc_prof);

    }

    // line 133
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_324bf1618a8747e9ee1a3602f33965be01300901ce982c1b241577ce05454129 = $this->env->getExtension("native_profiler");
        $__internal_324bf1618a8747e9ee1a3602f33965be01300901ce982c1b241577ce05454129->enter($__internal_324bf1618a8747e9ee1a3602f33965be01300901ce982c1b241577ce05454129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 134
        echo "            ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

        ";
        
        $__internal_324bf1618a8747e9ee1a3602f33965be01300901ce982c1b241577ce05454129->leave($__internal_324bf1618a8747e9ee1a3602f33965be01300901ce982c1b241577ce05454129_prof);

    }

    // line 139
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_9e9149ff525131e71fe01e92d2f02182782b8d881664e38bf37e6c53faa9a86d = $this->env->getExtension("native_profiler");
        $__internal_9e9149ff525131e71fe01e92d2f02182782b8d881664e38bf37e6c53faa9a86d->enter($__internal_9e9149ff525131e71fe01e92d2f02182782b8d881664e38bf37e6c53faa9a86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 140
        echo "            <div class=\"row\">
                <h3>Latest Smile Paintball video</h3>
                <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                    </blockquote></div>
            </div>
            <hr/>
            <div class=\"row\">
                <!-- top 10 -->
                <h3>Top 10</h3>
                ";
        // line 149
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Post:topTen"));
        echo "
            </div>
            <hr/>
            <div class=\"row\">
                <h3>Sponsors</h3>
                <div class=\"\" >
                    <a href=\"http://www.tippmann.com/\">
                        <img src=\"/images/sponsors/tippmann.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://gisportz.com/\">
                        <img src=\"/images/sponsors/gisportz.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://gisportz.com/vforce-goggles.php\">
                        <img src=\"/images/sponsors/vforce.png\" width=\"500em\">
                    </a>

                </div>

                <div class=\"\" >
                    <a href=\"http://www.redbull.com/be/fr\">
                        <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.kg-factory.fr/fr/\">
                        <img src=\"/images/sponsors/kgfactory.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.patch-werk.com/index.php/en/\">
                        <img src=\"/images/sponsors/patch-werk.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://www.enolagaye.com\">
                        <img src=\"/images/sponsors/g-n.jpeg\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://maxxloader.com/\">
                        <img src=\"http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png\" width=\"500em\">
                    </a>

                </div>

                <div >
                    <a href=\"http://shop.customgunrails.com/\">
                        <img src=\"http://shop.customgunrails.com/images/CGR_LOGOlight.png\">
                    </a>

                </div>

            </div>


        ";
        
        $__internal_9e9149ff525131e71fe01e92d2f02182782b8d881664e38bf37e6c53faa9a86d->leave($__internal_9e9149ff525131e71fe01e92d2f02182782b8d881664e38bf37e6c53faa9a86d_prof);

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
        return array (  339 => 149,  328 => 140,  322 => 139,  311 => 134,  305 => 133,  295 => 125,  289 => 124,  278 => 13,  272 => 12,  235 => 221,  233 => 139,  229 => 137,  227 => 133,  221 => 129,  219 => 124,  210 => 117,  208 => 116,  185 => 96,  177 => 91,  149 => 65,  99 => 63,  95 => 52,  83 => 42,  77 => 40,  74 => 39,  67 => 40,  64 => 39,  60 => 35,  41 => 18,  39 => 12,  26 => 1,);
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
/*     {% block openGraph %}*/
/*         <meta property="og:title" content="Smile Paintball Network" />*/
/*         <meta property="og:type" content="website" />*/
/*         <meta property="og:url" content="http://smilepaintball.com/" />*/
/*         <meta property="og:image" content="http://smilepaintball.com/images/logo.png" />*/
/*     {% endblock %}*/
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
/*     <!-- jQuery -->*/
/*     <script src="js/jquery.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>*/
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
/*     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js"></script>*/
/*     {% javascripts*/
/*     '@SmilePlatformBundle/public/js/waypoint.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/noframework.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/context.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/group.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/Angular/app.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/Angular/Controllers/allPostsCtrl.js' filter='cssrewrite'*/
/*     '@SmilePlatformBundle/public/js/jqwery.js' filter='cssrewrite'*/
/* */
/* */
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* </head>*/
/* */
/* <body >*/
/* <div id="fb-root"></div>*/
/* <script>*/
/*     window.fbAsyncInit = function() {*/
/*         FB.init({*/
/*             appId      : '1274219895951492',*/
/*             xfbml      : true,*/
/*             version    : 'v2.7'*/
/*         });*/
/*     };*/
/*     (function(d, s, id) {*/
/*         var js, fjs = d.getElementsByTagName(s)[0];*/
/*         if (d.getElementById(id)) return;*/
/*         js = d.createElement(s); js.id = id;*/
/*         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";*/
/*         fjs.parentNode.insertBefore(js, fjs);*/
/*     }(document, 'script', 'facebook-jssdk'));*/
/* */
/*     function fb_login() {*/
/*         FB.getLoginStatus(function(response) {*/
/*             if (response.status === 'connected') {*/
/*                 // connected*/
/*                 alert('Already connected, redirect to login page to create token.');*/
/*                 document.location = "{{ url("hwi_oauth_service_redirect", {service: "facebook"}) }}";*/
/*             } else {*/
/*                 // not_authorized*/
/*                 FB.login(function(response) {*/
/*                     if (response.authResponse) {*/
/*                         document.location = "{{ url("hwi_oauth_service_redirect", {service: "facebook"}) }}";*/
/*                     } else {*/
/*                         alert('Cancelled.');*/
/*                     }*/
/*                 }, {scope: 'email'});*/
/*             }*/
/*         });*/
/*     }*/
/* </script>*/
/* <script>*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*                 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');*/
/* */
/*     ga('create', 'UA-64911145-1', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/* </script>*/
/* */
/* {% include 'SmilePlatformBundle::Default/Blocs/navbar.html.twig' %}*/
/* */
/* <!-- Page Content -->*/
/* <div class="container" >*/
/* */
/*     <!-- Page Heading -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             {% block pageHeader %}*/
/*                 <h1 class="page-header">*/
/*                     Smile Paintball Network BETA*/
/*                 </h1>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     <div class="col-md-9" id="postsNews" ng-app="smile">*/
/*         {% block leftCollumn %}*/
/*             {{ include ('SmilePlatformBundle:Default:Blocs/allPosts.html.twig') }}*/
/* */
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="col-md-3 right-bar">*/
/*         {% block rightCollumn %}*/
/*             <div class="row">*/
/*                 <h3>Latest Smile Paintball video</h3>*/
/*                 <div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater" data-width="700px" data-show-text="false"><blockquote cite="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater"></a>*/
/*                     </blockquote></div>*/
/*             </div>*/
/*             <hr/>*/
/*             <div class="row">*/
/*                 <!-- top 10 -->*/
/*                 <h3>Top 10</h3>*/
/*                 {{ render(controller('SmilePlatformBundle:Post:topTen')) }}*/
/*             </div>*/
/*             <hr/>*/
/*             <div class="row">*/
/*                 <h3>Sponsors</h3>*/
/*                 <div class="" >*/
/*                     <a href="http://www.tippmann.com/">*/
/*                         <img src="/images/sponsors/tippmann.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://gisportz.com/">*/
/*                         <img src="/images/sponsors/gisportz.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://gisportz.com/vforce-goggles.php">*/
/*                         <img src="/images/sponsors/vforce.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="" >*/
/*                     <a href="http://www.redbull.com/be/fr">*/
/*                         <img src="/images/sponsors/redbull-com-logo.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.kg-factory.fr/fr/">*/
/*                         <img src="/images/sponsors/kgfactory.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.patch-werk.com/index.php/en/">*/
/*                         <img src="/images/sponsors/patch-werk.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://www.enolagaye.com">*/
/*                         <img src="/images/sponsors/g-n.jpeg" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://maxxloader.com/">*/
/*                         <img src="http://maxxloader.com/wp-content/uploads/2015/03/MaxXloader-Logo-R35.png" width="500em">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div >*/
/*                     <a href="http://shop.customgunrails.com/">*/
/*                         <img src="http://shop.customgunrails.com/images/CGR_LOGOlight.png">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/* */
/* */
/*         {% endblock %}*/
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
/* <!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* <!-- Go to www.addthis.com/dashboard to customize your tools -->*/
/* */
/* */
/* */
/* <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>*/
/* <!-- Bootstrap Core JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
