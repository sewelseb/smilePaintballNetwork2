<?php

/* SmilePlatformBundle::Default/layout.html.twig */
class __TwigTemplate_7bb7373c513b631c58f27b9b6fbfb544c61448c5f7b61d81bc0e9435977684c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'openGraph' => array($this, 'block_openGraph'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e78882035d5801673e006c14223a0351e79beb6ae7efec8221ac5ba6f19bfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e78882035d5801673e006c14223a0351e79beb6ae7efec8221ac5ba6f19bfe7->enter($__internal_6e78882035d5801673e006c14223a0351e79beb6ae7efec8221ac5ba6f19bfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/layout.html.twig"));

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
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6d14613") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6d14613.css");
            // line 41
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_noframework_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_context_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_group_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_app_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_allPostsCtrl_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "fd0d37f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f_jqwery_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fd0d37f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/fd0d37f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
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

<!-- Begin Inspectlet Embed Code -->
<script type=\"text/javascript\" id=\"inspectletjs\">
    window.__insp = window.__insp || [];
    __insp.push(['wid', 1305717944]);
    (function() {
        function ldinsp(){if(typeof window.__inspld != \"undefined\") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = \"inspsync\"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        setTimeout(ldinsp, 500); document.readyState != \"complete\" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
    })();
</script>
<!-- End Inspectlet Embed Code -->

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
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 114
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
        // line 142
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "SmilePlatformBundle::Default/layout.html.twig", 142)->display($context);
        // line 143
        echo "
<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 150
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 169
        echo "        </div>
    </div>
    <!-- /.row -->
    ";
        // line 172
        $this->displayBlock('content', $context, $blocks);
        // line 267
        echo "
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
        
        $__internal_6e78882035d5801673e006c14223a0351e79beb6ae7efec8221ac5ba6f19bfe7->leave($__internal_6e78882035d5801673e006c14223a0351e79beb6ae7efec8221ac5ba6f19bfe7_prof);

    }

    // line 13
    public function block_openGraph($context, array $blocks = array())
    {
        $__internal_3c6cb6ae795ecfd8c4e87cfa8744f54d6a44830b4426a416f0e62a56e354e87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6cb6ae795ecfd8c4e87cfa8744f54d6a44830b4426a416f0e62a56e354e87a->enter($__internal_3c6cb6ae795ecfd8c4e87cfa8744f54d6a44830b4426a416f0e62a56e354e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "openGraph"));

        // line 14
        echo "        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/imgForFb.jpg\" />
        <meta property=\"og:description\" content=\"Contend posted on SmilePaintball.com.\" />
    ";
        
        $__internal_3c6cb6ae795ecfd8c4e87cfa8744f54d6a44830b4426a416f0e62a56e354e87a->leave($__internal_3c6cb6ae795ecfd8c4e87cfa8744f54d6a44830b4426a416f0e62a56e354e87a_prof);

    }

    // line 150
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_adb4eebae1f7c0d93a776dee7c05c758ac10374f93da93e671dfc95312b71c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb4eebae1f7c0d93a776dee7c05c758ac10374f93da93e671dfc95312b71c04->enter($__internal_adb4eebae1f7c0d93a776dee7c05c758ac10374f93da93e671dfc95312b71c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 151
        echo "                <h1 class=\"page-header\">
                    Watch, rate and share fun! <img src=\"/images/smileyTop.png\">
                </h1>
                <div>
                    ";
        // line 155
        if ( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 156
            echo "                        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a> OR <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > Connect/Sign up</button>
                    ";
        } else {
            // line 158
            echo "                        <div class=\"text-center\">
                            <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><strong>Post your fun</strong></button>
                        </div>
                    ";
        }
        // line 162
        echo "                </div>
                <div class=\"pull-right\">
                    Smile's facebook page:
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>

                </div>
            ";
        
        $__internal_adb4eebae1f7c0d93a776dee7c05c758ac10374f93da93e671dfc95312b71c04->leave($__internal_adb4eebae1f7c0d93a776dee7c05c758ac10374f93da93e671dfc95312b71c04_prof);

    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b62746c1f72475c4427f875e57e22cc4784f756c43f1f310952c50766dc2ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b62746c1f72475c4427f875e57e22cc4784f756c43f1f310952c50766dc2ab5->enter($__internal_3b62746c1f72475c4427f875e57e22cc4784f756c43f1f310952c50766dc2ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 173
        echo "    <div class=\"row\">
        <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
            ";
        // line 175
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 179
        echo "        </div>
        <div class=\"col-md-3 right-bar\">
            ";
        // line 181
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 263
        echo "        </div>
    </div>
    <!-- /.row -->
    ";
        
        $__internal_3b62746c1f72475c4427f875e57e22cc4784f756c43f1f310952c50766dc2ab5->leave($__internal_3b62746c1f72475c4427f875e57e22cc4784f756c43f1f310952c50766dc2ab5_prof);

    }

    // line 175
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_deadb59258ce6665746b9e2e04cf4ba9588fa6b1ed92277c25e2cadcd628b6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deadb59258ce6665746b9e2e04cf4ba9588fa6b1ed92277c25e2cadcd628b6dc->enter($__internal_deadb59258ce6665746b9e2e04cf4ba9588fa6b1ed92277c25e2cadcd628b6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 176
        echo "                ";
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

            ";
        
        $__internal_deadb59258ce6665746b9e2e04cf4ba9588fa6b1ed92277c25e2cadcd628b6dc->leave($__internal_deadb59258ce6665746b9e2e04cf4ba9588fa6b1ed92277c25e2cadcd628b6dc_prof);

    }

    // line 181
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_69c99a51e0904604f36511ea9987ba2a42acb16e37e040832645551ae41c4e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c99a51e0904604f36511ea9987ba2a42acb16e37e040832645551ae41c4e8e->enter($__internal_69c99a51e0904604f36511ea9987ba2a42acb16e37e040832645551ae41c4e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 182
        echo "                <div class=\"row\">
                    <h3>Latest Smile Paintball video</h3>
                    <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vb.1552858474930301/1812396948976451/?type=2&theater\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                        </blockquote></div>
                </div>
                <hr/>
                <div class=\"row\">
                    <!-- top 10 -->
                    <h3>Top 10</h3>
                    ";
        // line 191
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
        
        $__internal_69c99a51e0904604f36511ea9987ba2a42acb16e37e040832645551ae41c4e8e->leave($__internal_69c99a51e0904604f36511ea9987ba2a42acb16e37e040832645551ae41c4e8e_prof);

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
        return array (  409 => 191,  398 => 182,  392 => 181,  381 => 176,  375 => 175,  365 => 263,  363 => 181,  359 => 179,  357 => 175,  353 => 173,  347 => 172,  334 => 162,  328 => 158,  324 => 156,  322 => 155,  316 => 151,  310 => 150,  298 => 14,  292 => 13,  254 => 267,  252 => 172,  247 => 169,  245 => 150,  236 => 143,  234 => 142,  203 => 114,  195 => 109,  151 => 67,  101 => 65,  97 => 54,  85 => 44,  79 => 42,  76 => 41,  69 => 42,  66 => 41,  62 => 37,  43 => 20,  41 => 13,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/imgForFb.jpg\" />
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

<!-- Begin Inspectlet Embed Code -->
<script type=\"text/javascript\" id=\"inspectletjs\">
    window.__insp = window.__insp || [];
    __insp.push(['wid', 1305717944]);
    (function() {
        function ldinsp(){if(typeof window.__inspld != \"undefined\") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = \"inspsync\"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        setTimeout(ldinsp, 500); document.readyState != \"complete\" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
    })();
</script>
<!-- End Inspectlet Embed Code -->

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
                <div>
                    {% if not app.user %}
                        <a class=\"btn btn-register-facebook\" href=\"#\" onclick=\"fb_login();\">Connect with Facebook</a> OR <button class=\"btn btn-primary\"  data-toggle=\"modal\" data-target=\"#loginModal\" > Connect/Sign up</button>
                    {% else %}
                        <div class=\"text-center\">
                            <button class=\"btn btn-primary text-center\" data-toggle=\"modal\" data-target=\"#newPostModal\"><strong>Post your fun</strong></button>
                        </div>
                    {% endif %}
                </div>
                <div class=\"pull-right\">
                    Smile's facebook page:
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>

                </div>
            {% endblock %}
        </div>
    </div>
    <!-- /.row -->
    {% block content %}
    <div class=\"row\">
        <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
            {% block leftCollumn %}
                {{ include ('SmilePlatformBundle:Default:Blocs/allPosts.html.twig') }}

            {% endblock %}
        </div>
        <div class=\"col-md-3 right-bar\">
            {% block rightCollumn %}
                <div class=\"row\">
                    <h3>Latest Smile Paintball video</h3>
                    <div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vb.1552858474930301/1812396948976451/?type=2&theater\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
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
    </div>
    <!-- /.row -->
    {% endblock %}

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

</html>", "SmilePlatformBundle::Default/layout.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/layout.html.twig");
    }
}