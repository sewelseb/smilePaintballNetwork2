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
        $__internal_05859edfd279736f97fb908110d6a0fea92173da793312b2bf6bee680b0e41df = $this->env->getExtension("native_profiler");
        $__internal_05859edfd279736f97fb908110d6a0fea92173da793312b2bf6bee680b0e41df->enter($__internal_05859edfd279736f97fb908110d6a0fea92173da793312b2bf6bee680b0e41df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/team.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05859edfd279736f97fb908110d6a0fea92173da793312b2bf6bee680b0e41df->leave($__internal_05859edfd279736f97fb908110d6a0fea92173da793312b2bf6bee680b0e41df_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b08ffcccbe0ff8be925002865cf5bfd8fc5820eee63d6275dfc619d5a496ee45 = $this->env->getExtension("native_profiler");
        $__internal_b08ffcccbe0ff8be925002865cf5bfd8fc5820eee63d6275dfc619d5a496ee45->enter($__internal_b08ffcccbe0ff8be925002865cf5bfd8fc5820eee63d6275dfc619d5a496ee45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

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
        echo "    <hr/>
";
        
        $__internal_b08ffcccbe0ff8be925002865cf5bfd8fc5820eee63d6275dfc619d5a496ee45->leave($__internal_b08ffcccbe0ff8be925002865cf5bfd8fc5820eee63d6275dfc619d5a496ee45_prof);

    }

    // line 11
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_ae601e51a3cba3a42efb972f90fae91a6789c6791922a47e5fd090d1bad8a8a3 = $this->env->getExtension("native_profiler");
        $__internal_ae601e51a3cba3a42efb972f90fae91a6789c6791922a47e5fd090d1bad8a8a3->enter($__internal_ae601e51a3cba3a42efb972f90fae91a6789c6791922a47e5fd090d1bad8a8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 12
        echo "    <H2>Team members:</H2>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "        <div class=\"row\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("smile_platform_profile", array("userId" => $this->getAttribute($context["user"], "getId", array()))), "html", null, true);
            echo "\">
                ";
            // line 16
            if (($this->getAttribute($context["user"], "picture", array()) != null)) {
                // line 17
                echo "                    <img width=\"20px\" class=\"img-responsive pull-left\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "uploadDir", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "picture", array()), "url", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "\">
                ";
            }
            // line 19
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
        
        $__internal_ae601e51a3cba3a42efb972f90fae91a6789c6791922a47e5fd090d1bad8a8a3->leave($__internal_ae601e51a3cba3a42efb972f90fae91a6789c6791922a47e5fd090d1bad8a8a3_prof);

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
        return array (  98 => 19,  88 => 17,  86 => 16,  82 => 15,  79 => 14,  75 => 13,  72 => 12,  66 => 11,  58 => 8,  48 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/*     <H1>{{ team.name }}</H1>*/
/*     {%  if team.teamPicture  %}*/
/*         <img width="100px" class="img-responsive " src="{{team.teamPicture.uploadDir}}/{{team.teamPicture.url}}" alt="{{ team.name }}">*/
/*     {%  endif %}*/
/*     <hr/>*/
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
