<?php

/* SmileUserBundle::Default/form/editProfile.html.twig */
class __TwigTemplate_cb9af44d10ab50a9ad3dcdd1de5382b9b2802fcaf7c225407829f66e83f1c19d extends Twig_Template
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
        $__internal_ab2dd78abe4cbdb56e8e72034cf692bfa2da1948c0c370910983afad2f11a0c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2dd78abe4cbdb56e8e72034cf692bfa2da1948c0c370910983afad2f11a0c7->enter($__internal_ab2dd78abe4cbdb56e8e72034cf692bfa2da1948c0c370910983afad2f11a0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmileUserBundle::Default/form/editProfile.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), 'form_start', array("attr" => array("class" => "formEditProfile")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), 'errors');
        echo "
        <div class=\"form-group text-center\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Firstname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Lastname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Profile picture:"));
        echo "<br/>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right", "onclick" => "submitEditProfile()")));
        echo "
        </div>

    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), 'rest');
        echo "
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formEditProfile"] ?? $this->getContext($context, "formEditProfile")), 'form_end');
        
        $__internal_ab2dd78abe4cbdb56e8e72034cf692bfa2da1948c0c370910983afad2f11a0c7->leave($__internal_ab2dd78abe4cbdb56e8e72034cf692bfa2da1948c0c370910983afad2f11a0c7_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(formEditProfile, {'attr': {'class': 'formEditProfile'}}) }}
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
{{ form_end(formEditProfile) }}", "SmileUserBundle::Default/form/editProfile.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\UserBundle/Resources/views/Default/form/editProfile.html.twig");
    }
}
