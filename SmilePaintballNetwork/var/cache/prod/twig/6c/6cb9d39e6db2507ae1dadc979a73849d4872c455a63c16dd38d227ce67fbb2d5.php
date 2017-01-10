<?php

/* SmileUserBundle::Default/form/editProfile.html.twig */
class __TwigTemplate_c0594d1b290adb42c5c338b72a6939214ce35e20f702d76e8992b84bbf098b05 extends Twig_Template
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
        $__internal_0723d751e3374996636eb020869ac8a8183d2fb4c4d298d0d25282e69377d296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0723d751e3374996636eb020869ac8a8183d2fb4c4d298d0d25282e69377d296->enter($__internal_0723d751e3374996636eb020869ac8a8183d2fb4c4d298d0d25282e69377d296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmileUserBundle::Default/form/editProfile.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), 'form_start', array("attr" => array("class" => "formEditProfile")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), 'errors');
        echo "
        <div class=\"form-group text-center\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Firstname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Lastname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Profile picture:"));
        echo "<br/>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right", "onclick" => "submitEditProfile()")));
        echo "
        </div>

    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), 'rest');
        echo "
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formEditProfile"]) ? $context["formEditProfile"] : $this->getContext($context, "formEditProfile")), 'form_end');
        
        $__internal_0723d751e3374996636eb020869ac8a8183d2fb4c4d298d0d25282e69377d296->leave($__internal_0723d751e3374996636eb020869ac8a8183d2fb4c4d298d0d25282e69377d296_prof);

    }

    public function getTemplateName()
    {
        return "SmileUserBundle::Default/form/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  61 => 19,  55 => 16,  48 => 12,  43 => 10,  37 => 7,  31 => 4,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(formEditProfile, {'attr': {'class': 'formEditProfile'}}) }}
    {{ form_errors(formEditProfile) }}
        <div class=\"form-group text-center\">
            {{ form_widget(formEditProfile.firstName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Firstname', 'maxlength': '255'}}) }}
        </div>
        <div class=\"form-group text-center\">
            {{ form_widget(formEditProfile.lastName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Lastname', 'maxlength': '255'}}) }}
        </div>
        <div class=\"form-group text-center\">
            {{ form_label(formEditProfile.picture,\"Profile picture:\", {'label_attr': {'class': 'pull-left'}}) }}<br/>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            {{ form_widget(formEditProfile.picture.file, {'attr': {'class': '', 'accept':'image/*'}}) }}
        </div>

        <div class=\"form-group\">
            {{ form_widget(formEditProfile.save, {'attr': {'class': 'btn btn-lg btn-primary pull-right','onclick': 'submitEditProfile()'}}) }}
        </div>

    {{ form_rest(formEditProfile) }}
{{ form_end(formEditProfile) }}";
    }
}
