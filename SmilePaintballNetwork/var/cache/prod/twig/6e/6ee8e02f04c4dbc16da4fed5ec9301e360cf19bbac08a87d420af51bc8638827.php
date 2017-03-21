<?php

/* @SmilePlatform/Default/layout.html.twig */
class __TwigTemplate_020b3ddf1d6d60db89a33486a90eb1f982eca8cfc940e39738a22b36bd3d5b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'openGraph' => array($this, 'block_openGraph'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'postYourFun' => array($this, 'block_postYourFun'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <meta name=\"google-signin-client_id\" content=\"469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com\">

    ";
        // line 12
        $this->displayBlock('openGraph', $context, $blocks);
        // line 19
        echo "    <meta property=\"fb:app_id\" content=\"1274219895951492\">
    <meta property=\"og:site_name\" content=\"Watch, rate and share fun! on smilepaintball.com :)\" />

    <title>Smile Paintball Network</title>

    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    <!-- Optional theme -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

    <!-- Font awsome -->
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\">

    <!-- jQuery -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

    <!-- Custom CSS -->
    <link href=\"css/1-col-portfolio.css\" rel=\"stylesheet\">
    ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6d14613_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6d14613_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6d14613_style_1.css");
            // line 42
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6d14613"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6d14613") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/6d14613.css");
            // line 42
            echo "
    <link rel=\"stylesheet\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 45
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js\"></script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.1/angular-sanitize.min.js\"></script>


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
        //alert('test');
        FB.init({
            appId      : '1274219895951492',
            xfbml      : true,
            version    : 'v2.7'
        });

            //alert('test');
            console.log('test');
            getSmileGroup();

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
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";

            } else {
                // not_authorized
                FB.login(function(response) {
                    if (response.authResponse) {
                        document.location = \"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                    } else {
                        alert('Cancelled.');
                    }
                }, {scope: 'email'});
            }
        });
    }

    function getSmileGroup(){

        FB.api(
            \"/1790079874650463/members?summary=true\",
            function (response) {
                console.log('group:');
                console.log(response);
                if (response && !response.error) {

                }
            }
        );
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
        // line 153
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/navbar.html.twig", "@SmilePlatform/Default/layout.html.twig", 153)->display($context);
        // line 154
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Default:termsAndAgreements", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
        echo "

<!-- Page Content -->
<div class=\"container\" >

    <!-- Page Heading -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 162
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 174
        echo "        </div>
    </div>
    <!-- /.row -->
    ";
        // line 177
        $this->displayBlock('content', $context, $blocks);
        // line 338
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

<span id=\"addViewUrl\" hidden>";
        // line 357
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_post_addView_url");
        echo "</span>
<span id=\"goToAnEventAsMeUrl\" hidden>";
        // line 358
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_addUserComing_url");
        echo "</span>
<span id=\"goToAnEventAsTeamUrl\" hidden>";
        // line 359
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_event_addTeamComing_url");
        echo "</span>


";
        // line 362
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fd0d37f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_waypoint_1.js");
            // line 373
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_noframework_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_context_3.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_group_4.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_app_5.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_allPostsCtrl_6.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
            // asset "fd0d37f_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f_jqwery_7.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fd0d37f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fd0d37f") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fd0d37f.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 375
        echo "


<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: en_US</script>
<!-- Bootstrap Core JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

</body>

</html>";
    }

    // line 12
    public function block_openGraph($context, array $blocks = array())
    {
        // line 13
        echo "        <meta property=\"og:title\" content=\"Smile Paintball Network\" />
        <meta property=\"og:type\" content=\"website\" />
        <meta property=\"og:url\" content=\"http://smilepaintball.com/\" />
        <meta property=\"og:image\" content=\"http://smilepaintball.com/images/ogpic.jpeg\" />
        <meta property=\"og:description\" content=\"Content posted on SmilePaintball.com.\" />
    ";
    }

    // line 162
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 163
        echo "                ";
        $this->loadTemplate("SmilePlatformBundle::Default/Blocs/banner.html.twig", "@SmilePlatform/Default/layout.html.twig", 163)->display($context);
        // line 164
        echo "                <div class=\"pull-right\">
                    ";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Post:numberOfViews"));
        echo "


                    <!--Smile's facebook page:
                    <div class=\"fb-like\" data-href=\"https://www.facebook.com/smilepaintball/?fref=ts\" data-layout=\"button_count\" data-action=\"like\" data-size=\"large\" data-show-faces=\"true\" data-share=\"true\"></div>
                    -->
                </div>

            ";
    }

    // line 177
    public function block_content($context, array $blocks = array())
    {
        // line 178
        echo "    <div class=\"row\">
        <div class=\"col-md-9\" id=\"postsNews\" ng-app=\"smile\">
            ";
        // line 180
        $this->displayBlock('postYourFun', $context, $blocks);
        // line 221
        echo "            ";
        $this->displayBlock('leftCollumn', $context, $blocks);
        // line 226
        echo "        </div>
        <div class=\"col-md-3 right-bar\">
            ";
        // line 228
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 334
        echo "        </div>
    </div>
    <!-- /.row -->
    ";
    }

    // line 180
    public function block_postYourFun($context, array $blocks = array())
    {
        // line 181
        echo "                <div class=\"row\">
                    <div class=\"container\">
                        <div class=\"col-md-9\">
                            <div class=\"form-group\">
                                ";
        // line 185
        if ($this->getAttribute(($context["app"] ?? null), "user", array())) {
            // line 186
            echo "                                    <ul class=\"nav nav-tabs nav-justified nav-tabs-spacer\">
                                        <li role=\"presentation\" id=\"show-create-post-form\" class=\"active\"><a href=\"#\"><H2><strong>+ POST<span class=\"postSmallText\"> your Fun</span></strong></H2></a></li>
                                        <li role=\"presentation\" id=\"show-create-event-form\" class=\"\"><a href=\"#\"><H2><strong>+ <span class=\"eventSmallText\" >create an </span>EVENT</strong></H2></a></li>
                                        <li role=\"presentation\" id=\"show-create-team-form\" class=\"\"><a href=\"#\"><H2><strong>+ <span class=\"teamSmallText\" >create your </span>TEAM</strong></H2></a></li>

                                    </ul>
                                    <div class=\"newPostForm\">
                                        ";
            // line 193
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Post:addNewInPage", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
            echo "
                                    </div>
                                    <div class=\"newEventForm\" hidden>
                                        ";
            // line 196
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Event:addNew", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
            echo "
                                    </div>
                                    <div class=\"newTeamForm\" hidden>
                                        ";
            // line 199
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Team:createTeam", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
            echo "
                                    </div>

                                ";
        } else {
            // line 203
            echo "
                                    <H2><strong>+ POST your Fun</strong></H2>
                                    <div class=\"form-group postOpenSignIn\">
                                        <input class=\"form-control input-lg postOpenSignIn\" id=\"postTitleOpenSignIn\" placeholder=\"Post Title\">
                                    </div>
                                    <div class=\"form-group postOpenSignIn\">
                                        <div class=\"pull-right\">
                                            <button class=\"btn btn-primary postOpenSignIn\"><strong>POST</strong></button>
                                        </div>
                                    </div>

                                ";
        }
        // line 215
        echo "                            </div>
                        </div>

                    </div>
                </div>
            ";
    }

    // line 221
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 222
        echo "
                ";
        // line 223
        echo twig_include($this->env, $context, "SmilePlatformBundle:Default:Blocs/allPosts.html.twig");
        echo "

            ";
    }

    // line 228
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 229
        echo "
                <div class=\"row\">
                    <h3>Latest Smile Team video</h3>
                    <iframe  src=\"https://www.youtube.com/embed/ahEIa4VdGJY\" frameborder=\"0\" allowfullscreen></iframe>
                    <div class=\"text-center\">
                        <a href=\"https://www.youtube.com/user/mrfiesta007\">See more on Youtube</a>
                    </div>
                    <a href=\"https://www.facebook.com/groups/1790079874650463/\"><button class=\"btn btn-register-facebook\"><strong>Join our Facebook group</strong></button></a>


                    <!--<div class=\"fb-video\" data-href=\"https://www.facebook.com/smilepaintball/videos/vb.1552858474930301/1812396948976451/?type=2&theater\" data-width=\"700px\" data-show-text=\"false\"><blockquote cite=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1768534383362708/?type=1&theater\"></a>
                        </blockquote></div>-->
                </div>
                <hr/>
                <div class=\"row row-top10\">
                    <!-- top 10 -->
                    <h3>Top 10</h3>
                    ";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("SmilePlatformBundle:Post:topTen"));
        echo "
                </div>
                <hr/>
                <div class=\"row\">
                    <h3>Sponsors</h3>
                    <div class=\"col-md-3\" >
                        <a href=\"http://www.tippmann.com/\">
                            <img src=\"/images/sponsors/tippmann.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\" >
                        <a href=\"http://gisportz.com/\">
                            <img src=\"/images/sponsors/gisportz.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\" >
                        <a href=\"http://gisportz.com/vforce-goggles.php\">
                            <img src=\"/images/sponsors/vforce.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\" >
                        <a href=\"http://www.redbull.com/be/fr\">
                            <img src=\"/images/sponsors/redbull-com-logo.png\" width=\"100%\">
                        </a>

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a href=\"http://www.kg-factory.fr/fr/\">
                            <img src=\"/images/sponsors/kgfactory.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\">
                        <a href=\"http://www.patch-werk.com/index.php/en/\">
                            <img src=\"/images/sponsors/patch-werk.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\">
                        <a href=\"http://www.enolagaye.com\">
                            <img src=\"/images/sponsors/e-g.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\">
                        <a href=\"http://maxxloader.com/\">
                            <img src=\"/images/sponsors/maxxloader.png\" width=\"100%\">
                        </a>

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a href=\"http://shop.customgunrails.com/\">
                            <img src=\"/images/sponsors/cgr.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\">
                        <a href=\"http://www.anthraxpaintball.com/\">
                            <img src=\"/images/sponsors/anthrax.png\" width=\"100%\">
                        </a>

                    </div>

                    <div class=\"col-md-3\">
                        <a href=\"http://www.techtpaintball.com/\">
                            <img src=\"/images/sponsors/techt.png\" width=\"100%\">
                        </a>

                    </div>

                </div>


            ";
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 246,  461 => 229,  458 => 228,  451 => 223,  448 => 222,  445 => 221,  436 => 215,  422 => 203,  415 => 199,  409 => 196,  403 => 193,  394 => 186,  392 => 185,  386 => 181,  383 => 180,  376 => 334,  374 => 228,  370 => 226,  367 => 221,  365 => 180,  361 => 178,  358 => 177,  345 => 165,  342 => 164,  339 => 163,  336 => 162,  327 => 13,  324 => 12,  311 => 375,  261 => 373,  257 => 362,  251 => 359,  247 => 358,  243 => 357,  222 => 338,  220 => 177,  215 => 174,  213 => 162,  202 => 154,  200 => 153,  154 => 110,  145 => 104,  84 => 45,  78 => 43,  75 => 42,  68 => 43,  65 => 42,  61 => 38,  40 => 19,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/layout.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\layout.html.twig");
    }
}