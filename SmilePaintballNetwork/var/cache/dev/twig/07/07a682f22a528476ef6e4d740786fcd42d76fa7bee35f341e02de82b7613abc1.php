<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_90c0b607da9ef8a5719ca099b4144defbd551f4e51aae76ee0adb93ca215729d extends Twig_Template
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
        $__internal_3d8b061c22bfe023d36a3155c4fa9634075382140b78e12b8bd764f268f5c45e = $this->env->getExtension("native_profiler");
        $__internal_3d8b061c22bfe023d36a3155c4fa9634075382140b78e12b8bd764f268f5c45e->enter($__internal_3d8b061c22bfe023d36a3155c4fa9634075382140b78e12b8bd764f268f5c45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"google-signin-client_id\" content=\"469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com\">

    ";
        // line 13
        $this->displayBlock('openGraph', $context, $blocks);
        // line 20
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
        // line 37
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 41
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d14613") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/6d14613.css");
            // line 41
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 44
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
        // line 54
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fd0d37f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fd0d37f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/fd0d37f_waypoint_1.js");
            // line 65
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
        // line 67
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
                //alert('Already connected, redirect to login page to create token.');
                document.location = \"";
        // line 93
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 98
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
        // line 118
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 118)->display($context);
        // line 119
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 126
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 131
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        ";
        // line 135
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 139
        echo "    </div>
    <div class=\"col-md-3 right-bar\">
        ";
        // line 141
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 223
        echo "    </div>

    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Smile Paintball Network 2016</p>
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
        
        $__internal_3d8b061c22bfe023d36a3155c4fa9634075382140b78e12b8bd764f268f5c45e->leave($__internal_3d8b061c22bfe023d36a3155c4fa9634075382140b78e12b8bd764f268f5c45e_prof);

    }

    // line 13
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_256fbd030b72d7865c5cd732fa2615ca8cc9b17b6611373577606d2347602517 = $this->env->getExtension("native_profiler");
        $__internal_256fbd030b72d7865c5cd732fa2615ca8cc9b17b6611373577606d2347602517->enter($__internal_256fbd030b72d7865c5cd732fa2615ca8cc9b17b6611373577606d2347602517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 14
        echo "        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        <meta property=\"og:description\" content=\"Contend posted on SmilePaintball.com.\" />
    ";
        
        $__internal_256fbd030b72d7865c5cd732fa2615ca8cc9b17b6611373577606d2347602517->leave($__internal_256fbd030b72d7865c5cd732fa2615ca8cc9b17b6611373577606d2347602517_prof);

    }

    // line 126
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_efbc52ed4758a316d3ae0b0720e1f32398f0c54a232345e80bdc13b1d4ef8260 = $this->env->getExtension("native_profiler");
        $__internal_efbc52ed4758a316d3ae0b0720e1f32398f0c54a232345e80bdc13b1d4ef8260->enter($__internal_efbc52ed4758a316d3ae0b0720e1f32398f0c54a232345e80bdc13b1d4ef8260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 127
        echo "                <h1 class=\"page-header\">
                    Smile Paintball Network BETA
                </h1>
            ";
        
        $__internal_efbc52ed4758a316d3ae0b0720e1f32398f0c54a232345e80bdc13b1d4ef8260->leave($__internal_efbc52ed4758a316d3ae0b0720e1f32398f0c54a232345e80bdc13b1d4ef8260_prof);

    }

    // line 135
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_3a8cd03de3336ddb8fa3f1e52de1a48fa32bd6f6f7d2daf80ff749fd09f0a0a3 = $this->env->getExtension("native_profiler");
        $__internal_3a8cd03de3336ddb8fa3f1e52de1a48fa32bd6f6f7d2daf80ff749fd09f0a0a3->enter($__internal_3a8cd03de3336ddb8fa3f1e52de1a48fa32bd6f6f7d2daf80ff749fd09f0a0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 136
        echo "            ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

        ";
        
        $__internal_3a8cd03de3336ddb8fa3f1e52de1a48fa32bd6f6f7d2daf80ff749fd09f0a0a3->leave($__internal_3a8cd03de3336ddb8fa3f1e52de1a48fa32bd6f6f7d2daf80ff749fd09f0a0a3_prof);

    }

    // line 141
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_ec24556b1fa5474ceec0579d9d0e0dc4d73ca8eaf9ddfdd7716023c9fa5e887e = $this->env->getExtension("native_profiler");
        $__internal_ec24556b1fa5474ceec0579d9d0e0dc4d73ca8eaf9ddfdd7716023c9fa5e887e->enter($__internal_ec24556b1fa5474ceec0579d9d0e0dc4d73ca8eaf9ddfdd7716023c9fa5e887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 142
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
        // line 151
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Post:topTen"));
        echo "
            </div>
            <hr/>
            <div class=\"row\">
                <h3>Sponsors</h3>
                <div class=\"sponsor-big\" >
                    <a href=\"http://www.tippmann.com/\">
                        <img src=\"/images/sponsors/tippmann.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\" >
                    <a href=\"http://gisportz.com/\">
                        <img src=\"/images/sponsors/gisportz.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\" >
                    <a href=\"http://gisportz.com/vforce-goggles.php\">
                        <img src=\"/images/sponsors/vforce.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\" >
                    <a href=\"http://www.redbull.com/be/fr\">
                        <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\">
                    <a href=\"http://www.kg-factory.fr/fr/\">
                        <img src=\"/images/sponsors/kgfactory.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\">
                    <a href=\"http://www.patch-werk.com/index.php/en/\">
                        <img src=\"/images/sponsors/patch-werk.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\">
                    <a href=\"http://www.enolagaye.com\">
                        <img src=\"/images/sponsors/e-g.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\">
                    <a href=\"http://maxxloader.com/\">
                        <img src=\"/images/sponsors/maxxloader.png\" width=\"100%\">
                    </a>

                </div>

                <div class=\"sponsor-big\">
                    <a href=\"http://shop.customgunrails.com/\">
                        <img src=\"/images/sponsors/cgr.png\" width=\"100%\">
                    </a>

                </div>

            </div>


        ";
        
        $__internal_ec24556b1fa5474ceec0579d9d0e0dc4d73ca8eaf9ddfdd7716023c9fa5e887e->leave($__internal_ec24556b1fa5474ceec0579d9d0e0dc4d73ca8eaf9ddfdd7716023c9fa5e887e_prof);

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
        return array (  341 => 151,  330 => 142,  324 => 141,  313 => 136,  307 => 135,  297 => 127,  291 => 126,  279 => 14,  273 => 13,  236 => 223,  234 => 141,  230 => 139,  228 => 135,  222 => 131,  220 => 126,  211 => 119,  209 => 118,  186 => 98,  178 => 93,  150 => 67,  100 => 65,  96 => 54,  84 => 44,  78 => 42,  75 => 41,  68 => 42,  65 => 41,  61 => 37,  42 => 20,  40 => 13,  26 => 1,);
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
/*     <meta name="google-signin-client_id" content="469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com">*/
/* */
/*     {% block openGraph %}*/
/*         <meta property="og:title" content="Smile Paintball Network" />*/
/*         <meta property="og:type" content="website" />*/
/*         <meta property="og:url" content="http://smilepaintball.com/" />*/
/*         <meta property="og:image" content="http://smilepaintball.com/images/logo.png" />*/
/*         <meta property="og:description" content="Contend posted on SmilePaintball.com." />*/
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
/*                 //alert('Already connected, redirect to login page to create token.');*/
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
/*                 <div class="sponsor-big" >*/
/*                     <a href="http://www.tippmann.com/">*/
/*                         <img src="/images/sponsors/tippmann.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big" >*/
/*                     <a href="http://gisportz.com/">*/
/*                         <img src="/images/sponsors/gisportz.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big" >*/
/*                     <a href="http://gisportz.com/vforce-goggles.php">*/
/*                         <img src="/images/sponsors/vforce.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big" >*/
/*                     <a href="http://www.redbull.com/be/fr">*/
/*                         <img src="/images/sponsors/redbull-com-logo.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big">*/
/*                     <a href="http://www.kg-factory.fr/fr/">*/
/*                         <img src="/images/sponsors/kgfactory.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big">*/
/*                     <a href="http://www.patch-werk.com/index.php/en/">*/
/*                         <img src="/images/sponsors/patch-werk.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big">*/
/*                     <a href="http://www.enolagaye.com">*/
/*                         <img src="/images/sponsors/e-g.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big">*/
/*                     <a href="http://maxxloader.com/">*/
/*                         <img src="/images/sponsors/maxxloader.png" width="100%">*/
/*                     </a>*/
/* */
/*                 </div>*/
/* */
/*                 <div class="sponsor-big">*/
/*                     <a href="http://shop.customgunrails.com/">*/
/*                         <img src="/images/sponsors/cgr.png" width="100%">*/
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
/*                 <p>Copyright &copy; Smile Paintball Network 2016</p>*/
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
