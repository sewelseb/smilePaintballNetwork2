<?php

/* SmilePlatformBundle::Default/form/createTeam.html.twig */
class __TwigTemplate_45be9fa2492f188e9241188affe8e0fa9a1bd4bfb3068d184b1cf9379f5b9c3b extends Twig_Template
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
        $__internal_11d7edc1316a6bb2745bd441467e068168a1751f045174fb8375972a9854f9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d7edc1316a6bb2745bd441467e068168a1751f045174fb8375972a9854f9ae->enter($__internal_11d7edc1316a6bb2745bd441467e068168a1751f045174fb8375972a9854f9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/createTeam.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), 'form_start', array("attr" => array("class" => "formCreateTeam")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), 'errors');
        echo "
    <div class=\"form-group text-center\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), "name", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team name", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), "teamPicture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Team logo:"));
        echo "<br/>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), "teamPicture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right formCreateTeamSubmit", "onclick" => "submitNewTeam()")));
        echo "
    </div>

    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), 'rest');
        echo "
";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formCreateTeam"] ?? $this->getContext($context, "formCreateTeam")), 'form_end');
        
        $__internal_11d7edc1316a6bb2745bd441467e068168a1751f045174fb8375972a9854f9ae->leave($__internal_11d7edc1316a6bb2745bd441467e068168a1751f045174fb8375972a9854f9ae_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/createTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  55 => 16,  49 => 13,  42 => 9,  37 => 7,  31 => 4,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(formCreateTeam, {'attr': {'class': 'formCreateTeam'}}) }}
    {{ form_errors(formCreateTeam) }}
    <div class=\"form-group text-center\">
        {{ form_widget(formCreateTeam.name, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Team name', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        {{ form_label(formCreateTeam.teamPicture,\"Team logo:\", {'label_attr': {'class': 'pull-left'}}) }}<br/>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        {{ form_widget(formCreateTeam.teamPicture.file, {'attr': {'class': '','accept':'image/*'}}) }}
    </div>

    <div class=\"form-group\">
        {{ form_widget(formCreateTeam.save, {'attr': {'class': 'btn btn-lg btn-primary pull-right formCreateTeamSubmit','onclick': 'submitNewTeam()'}}) }}
    </div>

    {{ form_rest(formCreateTeam) }}
{{ form_end(formCreateTeam) }}", "SmilePlatformBundle::Default/form/createTeam.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/createTeam.html.twig");
    }
}
