<?php

/* @SmileAdmin/Default/index.html.twig */
class __TwigTemplate_da64acfcbf60a4cf6d18f11f354bcddfa098e9aa844c98100a5ce84fefc98137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@SmileAdmin/Default/index.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 3
        echo "    <h1 class=\"page-header\">
        Admin of Smile Paintball Network
    </h1>
";
    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f14aeed_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f14aeed_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/f14aeed_adminStatsCtrl_1.js");
            // line 15
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f14aeed"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_f14aeed") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/f14aeed.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-md-5\">
            <div ng-controller=\"adminStatsCtrl\">
                <span id=\"getStatsApiUrl\" hidden>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("smile_api_admin_getstats");
        echo "</span>
                <H2>Statistics:</H2>
                ";
        // line 28
        echo "
                <strong>Number of users: {{ numberOfUsers }}</strong><br/>
                <strong>Number of posts: {{ numberOfPosts}}</strong><br/>
                <strong>Number of upvotes: {{ numberOfUpvotes }}</strong><br/>
                <strong>Number of downvotes: {{ numberOfDownvotes }}</strong><br/>
                <strong>Number of Comments: {{ numberOfComments }}</strong><br/>
            ";
        echo "
            </div>
        </div>
        <div class=\"col-md-5\">
            <section id=\"auth-button\"></section>
            <section id=\"view-selector\"></section>
            <section id=\"timeline\"></section>
        </div>
    </div>

    <hr>



    <script>
        (function(w,d,s,g,js,fjs){
            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
            js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
            js.src='https://apis.google.com/js/platform.js';
            fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
        }(window,document,'script'));
    </script>

    <script>
        // Replace with your view ID.

        var VIEW_ID = '104931471';
        var secret = 'XPkxHZwGjLXDfowR8V_IokGY';


        // Replace with your view ID.


        var CLIENT_ID = '469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com';

        gapi.analytics.ready(function() {

            // Step 3: Authorize the user.

            var CLIENT_ID = '469652032975-n6p9uq8411l3jphbnup0njd48hft7pgq.apps.googleusercontent.com';

            gapi.analytics.auth.authorize({
                container: 'auth-button',
                clientid: CLIENT_ID,
            });

            // Step 4: Create the view selector.

            var viewSelector = new gapi.analytics.ViewSelector({
                container: 'view-selector'
            });

            // Step 5: Create the timeline chart.

            var timeline = new gapi.analytics.googleCharts.DataChart({
                reportType: 'ga',
                query: {
                    'dimensions': 'ga:date',
                    'metrics': 'ga:sessions',
                    'start-date': '30daysAgo',
                    'end-date': 'yesterday',
                },
                chart: {
                    type: 'LINE',
                    container: 'timeline'
                }
            });

            // Step 6: Hook up the components to work together.

            gapi.analytics.auth.on('success', function(response) {
                viewSelector.execute();
            });

            viewSelector.on('change', function(ids) {
                var newIds = {
                    query: {
                        ids: ids
                    }
                }
                timeline.set(newIds).execute();
            });
        });

    </script>

    <!-- Load the JavaScript API client and Sign-in library. -->
    <script src=\"https://apis.google.com/js/client:platform.js\"></script>
";
    }

    // line 118
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 119
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SmileAdmin/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 119,  171 => 118,  72 => 28,  67 => 20,  62 => 17,  48 => 15,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmileAdmin/Default/index.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\AdminBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
