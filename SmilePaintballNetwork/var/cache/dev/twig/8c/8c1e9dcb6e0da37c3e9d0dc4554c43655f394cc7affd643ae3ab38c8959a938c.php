<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_448bcff0f3e8c8f382d637eb5b7983d611a35c7f325528b9ffecb29c597623e0 extends Twig_Template
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
        $__internal_208634cc6a4488d888176ab78903d2f0ec6a81e1c4c6e1521a98814069b3d9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208634cc6a4488d888176ab78903d2f0ec6a81e1c4c6e1521a98814069b3d9c2->enter($__internal_208634cc6a4488d888176ab78903d2f0ec6a81e1c4c6e1521a98814069b3d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6d14613_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6d14613_style_1.css");
            // line 41
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6d14613") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6d14613.css");
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_waypoint_1.js");
            // line 65
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_noframework_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_context_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_group_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_app_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_allPostsCtrl_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_jqwery_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fd0d37f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f.js");
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
<!-- La div suivante doit etre placée avant toutes les autres inclusions facebook -->
<div id=\"facebookContainer\" hidden>

</div>

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
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
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
<script>var __v='barc-user-sewelseb';</script>
<script type=\"text/javascript\">
    (function(d) {
        var b = d.createElement(\"script\"); b.type = \"text/javascript\"; b.async = true;
        b.src = (\"https:\" == d.location.protocol ? \"https\" : \"http\") + \"://barc.com/js/libs/barc/barc.js\";
        var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(b, s);
    })(document);
</script>

";
        // line 131
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 131)->display($context);
        // line 132
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 139
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 149
        echo "        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        ";
        // line 153
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 157
        echo "    </div>
    <div class=\"col-md-3 right-bar\">
        ";
        // line 159
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 241
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
        
        $__internal_208634cc6a4488d888176ab78903d2f0ec6a81e1c4c6e1521a98814069b3d9c2->leave($__internal_208634cc6a4488d888176ab78903d2f0ec6a81e1c4c6e1521a98814069b3d9c2_prof);

    }

    // line 13
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_be5790de7881bbdda4e6bf994c491960263cae097aa33778792502ae52ed2fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5790de7881bbdda4e6bf994c491960263cae097aa33778792502ae52ed2fa0->enter($__internal_be5790de7881bbdda4e6bf994c491960263cae097aa33778792502ae52ed2fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 14
        echo "        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        <meta property=\"og:description\" content=\"Contend posted on SmilePaintball.com.\" />
    ";
        
        $__internal_be5790de7881bbdda4e6bf994c491960263cae097aa33778792502ae52ed2fa0->leave($__internal_be5790de7881bbdda4e6bf994c491960263cae097aa33778792502ae52ed2fa0_prof);

    }

    // line 139
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_4d088005ed9c38df8ed3712f15d7a0aa46df67adb17e696054c43d3c14d3a07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d088005ed9c38df8ed3712f15d7a0aa46df67adb17e696054c43d3c14d3a07e->enter($__internal_4d088005ed9c38df8ed3712f15d7a0aa46df67adb17e696054c43d3c14d3a07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 140
        echo "                <h1 class=\"page-header\">
                    Watch, rate and share fun! <img src=\"/images/smileyTop.png\">
                </h1>
                <div class=\"pull-right\">
                    Smile's facebook page:
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>

                </div>
            ";
        
        $__internal_4d088005ed9c38df8ed3712f15d7a0aa46df67adb17e696054c43d3c14d3a07e->leave($__internal_4d088005ed9c38df8ed3712f15d7a0aa46df67adb17e696054c43d3c14d3a07e_prof);

    }

    // line 153
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_1c8352c5993b08b0395152e2187790b180b32aa2eb1fb161497ac53fec7725dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8352c5993b08b0395152e2187790b180b32aa2eb1fb161497ac53fec7725dc->enter($__internal_1c8352c5993b08b0395152e2187790b180b32aa2eb1fb161497ac53fec7725dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 154
        echo "            ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

        ";
        
        $__internal_1c8352c5993b08b0395152e2187790b180b32aa2eb1fb161497ac53fec7725dc->leave($__internal_1c8352c5993b08b0395152e2187790b180b32aa2eb1fb161497ac53fec7725dc_prof);

    }

    // line 159
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_f971351074419757b31d6e2e06a0526b3fb306f1fda7159f286fb9e70e1c0ec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f971351074419757b31d6e2e06a0526b3fb306f1fda7159f286fb9e70e1c0ec8->enter($__internal_f971351074419757b31d6e2e06a0526b3fb306f1fda7159f286fb9e70e1c0ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 160
        echo "            <div class=\"row\">
                <h3>Latest Smile Paintball video</h3>
                <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1792202604329219/?type=1\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                    </blockquote></div>
            </div>
            <hr/>
            <div class=\"row\">
                <!-- top 10 -->
                <h3>Top 10</h3>
                ";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Post:topTen"));
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
        
        $__internal_f971351074419757b31d6e2e06a0526b3fb306f1fda7159f286fb9e70e1c0ec8->leave($__internal_f971351074419757b31d6e2e06a0526b3fb306f1fda7159f286fb9e70e1c0ec8_prof);

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
        return array (  363 => 169,  352 => 160,  346 => 159,  335 => 154,  329 => 153,  314 => 140,  308 => 139,  296 => 14,  290 => 13,  249 => 241,  247 => 159,  243 => 157,  241 => 153,  235 => 149,  233 => 139,  224 => 132,  222 => 131,  191 => 103,  183 => 98,  150 => 67,  100 => 65,  96 => 54,  84 => 44,  78 => 42,  75 => 41,  68 => 42,  65 => 41,  61 => 37,  42 => 20,  40 => 13,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"google-signin-client_id\" content=\"469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com\">

    {% block openGraph %}
        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/logo.png\" />
        <meta property=\"og:description\" content=\"Contend posted on SmilePaintball.com.\" />
    {% endblock %}

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
    {% stylesheets filter='cssrewrite'
    '@SmilePlatformBundle/public/css/style.css'

    %}

    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js\"></script>
    {% javascripts
    '@SmilePlatformBundle/public/js/waypoint.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/noframework.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/context.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/group.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/Angular/app.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/Angular/Controllers/allPostsCtrl.js' filter='cssrewrite'
    '@SmilePlatformBundle/public/js/jqwery.js' filter='cssrewrite'


    %}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

</head>

<body >
<!-- La div suivante doit etre placée avant toutes les autres inclusions facebook -->
<div id=\"facebookContainer\" hidden>

</div>

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
                document.location = \"{{ url(\"hwi_oauth_service_redirect\", {service: \"facebook\"}) }}\";
            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"{{ url(\"hwi_oauth_service_redirect\", {service: \"facebook\"}) }}\";
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
<script>var __v='barc-user-sewelseb';</script>
<script type=\"text/javascript\">
    (function(d) {
        var b = d.createElement(\"script\"); b.type = \"text/javascript\"; b.async = true;
        b.src = (\"https:\" == d.location.protocol ? \"https\" : \"http\") + \"://barc.com/js/libs/barc/barc.js\";
        var s = d.getElementsByTagName(\"script\")[0]; s.parentNode.insertBefore(b, s);
    })(document);
</script>

{% include 'SmilePlatformBundle::Default/Blocs/navbar.html.twig' %}

<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            {% block pageHeader %}
                <h1 class=\"page-header\">
                    Watch, rate and share fun! <img src=\"/images/smileyTop.png\">
                </h1>
                <div class=\"pull-right\">
                    Smile's facebook page:
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>

                </div>
            {% endblock %}
        </div>
    </div>
    <!-- /.row -->
    <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
        {% block leftCollumn %}
            {{ include ('SmilePlatformBundle:Default:Blocs/allPosts.html.twig') }}

        {% endblock %}
    </div>
    <div class=\"col-md-3 right-bar\">
        {% block rightCollumn %}
            <div class=\"row\">
                <h3>Latest Smile Paintball video</h3>
                <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1792202604329219/?type=1\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                    </blockquote></div>
            </div>
            <hr/>
            <div class=\"row\">
                <!-- top 10 -->
                <h3>Top 10</h3>
                {{ render(controller('SmilePlatformBundle:Post:topTen')) }}
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


        {% endblock %}
    </div>

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
    }
}
