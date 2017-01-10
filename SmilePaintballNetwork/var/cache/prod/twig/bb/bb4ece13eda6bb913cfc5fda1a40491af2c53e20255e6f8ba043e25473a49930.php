<?php

/* SmilePlatformBundle::Default/team.html.twig */
class __TwigTemplate_b7f46d9700a18444022b74c0bec2e7db59e3b2be8a75a0ff786271142868305b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle::Default/team.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cfb4611521b8dbc17818e4e52b26f6019dfb29f454cc8d7888d2b8536d726cd = $this->env->getExtension("native_profiler");
        $__internal_9cfb4611521b8dbc17818e4e52b26f6019dfb29f454cc8d7888d2b8536d726cd->enter($__internal_9cfb4611521b8dbc17818e4e52b26f6019dfb29f454cc8d7888d2b8536d726cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cfb4611521b8dbc17818e4e52b26f6019dfb29f454cc8d7888d2b8536d726cd->leave($__internal_9cfb4611521b8dbc17818e4e52b26f6019dfb29f454cc8d7888d2b8536d726cd_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_927a833943b7f17d160f418ae084dfb7c4652070270b093a5e4bcd443d37edb2 = $this->env->getExtension("native_profiler");
        $__internal_927a833943b7f17d160f418ae084dfb7c4652070270b093a5e4bcd443d37edb2->enter($__internal_927a833943b7f17d160f418ae084dfb7c4652070270b093a5e4bcd443d37edb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "    <H1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
        echo "</H1>
    ";
        // line 5
        if ($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array())) {
            // line 6
            echo "        <img width=\"100px\" class=\"img-responsive \" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array()), "uploadDir", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "teamPicture", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "name", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 8
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "admin", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 9
            echo "        <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#editTeamModal\">Edit team</button>
    ";
        } else {
            // line 11
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 12
                echo "            ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["user"], "id", array()))) {
                    // line 13
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_leaveTeam", array("teamId" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "Id", array()))), "html", null, true);
                    echo "\">
                    <button class=\"btn btn-primary\">Leave team</button>
                </a>
            ";
                }
                // line 17
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <hr/>


    <div class=\"modal fade\" id=\"editTeamModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editTeamModal\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edit team</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SmilePlatformBundle:Team:edit", array("id" => $this->getAttribute((isset($context["team"]) ? $context["team"] : $this->getContext($context, "team")), "id", array()), "request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
    </div>
";
        
        $__internal_927a833943b7f17d160f418ae084dfb7c4652070270b093a5e4bcd443d37edb2->leave($__internal_927a833943b7f17d160f418ae084dfb7c4652070270b093a5e4bcd443d37edb2_prof);

    }

    // line 39
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_100f4c619c13377ba758a8af25e511fd3d1de727a36dc7cb062b72783e84802b = $this->env->getExtension("native_profiler");
        $__internal_100f4c619c13377ba758a8af25e511fd3d1de727a36dc7cb062b72783e84802b->enter($__internal_100f4c619c13377ba758a8af25e511fd3d1de727a36dc7cb062b72783e84802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 40
        echo "    <H2>Team members:</H2>
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 42
            echo "        <div class=\"row\">
            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($context["user"], "getId", array()))), "html", null, true);
            echo "\">
                ";
            // line 44
            if (($this->getAttribute($context["user"], "picture", array()) != null)) {
                // line 45
                echo "                    <img width=\"20px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 47
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_100f4c619c13377ba758a8af25e511fd3d1de727a36dc7cb062b72783e84802b->leave($__internal_100f4c619c13377ba758a8af25e511fd3d1de727a36dc7cb062b72783e84802b_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  140 => 45,  138 => 44,  134 => 43,  131 => 42,  127 => 41,  124 => 40,  118 => 39,  103 => 30,  90 => 19,  87 => 18,  81 => 17,  73 => 13,  70 => 12,  65 => 11,  61 => 9,  58 => 8,  48 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/*     <H1>{{ team.name }}</H1>*/
/*     {%  if team.teamPicture  %}*/
/*         <img width="100px" class="img-responsive " src="{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}" alt="{{ team.name }}">*/
/*     {%  endif %}*/
/*     {% if team.admin.id == app.user.id %}*/
/*         <button class="btn btn-primary" data-toggle="modal" data-target="#editTeamModal">Edit team</button>*/
/*     {% else %}*/
/*         {% for user in users %}*/
/*             {% if app.user.id == user.id %}*/
/*                 <a href="{{ path('smile_platform_leaveTeam', {'teamId': team.Id }) }}">*/
/*                     <button class="btn btn-primary">Leave team</button>*/
/*                 </a>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     <hr/>*/
/* */
/* */
/*     <div class="modal fade" id="editTeamModal" tabindex="-1" role="dialog" aria-labelledby="editTeamModal">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Edit team</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ render(controller('SmilePlatformBundle:Team:edit', {'id': team.id, 'request': app.request})) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     <H2>Team members:</H2>*/
/*     {% for user in users %}*/
/*         <div class="row">*/
/*             <a href="{{ path('smile_platform_profile', {'userId': user.getId }) }}">*/
/*                 {% if user.picture != null %}*/
/*                     <img width="20px" class="img-responsive pull-left" src="{{user.picture.uploadDir}}/{{user.picture.url}}" alt="{{ user.username }}">*/
/*                 {% endif %}*/
/*                 {{ user.username }}*/
/*             </a>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
