<?php

/* SmileUserBundle::Default/form/editProfile.html.twig */
class __TwigTemplate_c6eea60640093789771331cb2cbf4a328439c9c14eca0132ddcd2d4e4e431c9a extends Twig_Template
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
        $__internal_f8801e15647fb91083e500f7621a2177eda470bbd390622c904c02798f30124e = $this->env->getExtension("native_profiler");
        $__internal_f8801e15647fb91083e500f7621a2177eda470bbd390622c904c02798f30124e->enter($__internal_f8801e15647fb91083e500f7621a2177eda470bbd390622c904c02798f30124e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmileUserBundle::Default/form/editProfile.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"form-group text-center\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Firstname", "maxlength" => "255")));
        echo "
</div>
<div class=\"form-group text-center\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Lastname", "maxlength" => "255")));
        echo "
</div>
<div class=\"form-group text-center\">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Profile picture:"));
        echo "<br/>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
</div>
<div class=\"form-group text-center\">
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "team name", "maxlength" => "255")));
        echo "
</div>
<div class=\"form-group text-center\">
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamPicture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Team logo:"));
        echo "<br/>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamPicture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right")));
        echo "
</div>

";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_f8801e15647fb91083e500f7621a2177eda470bbd390622c904c02798f30124e->leave($__internal_f8801e15647fb91083e500f7621a2177eda470bbd390622c904c02798f30124e_prof);

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
        return array (  81 => 27,  77 => 26,  71 => 23,  65 => 20,  60 => 18,  54 => 15,  48 => 12,  43 => 10,  37 => 7,  31 => 4,  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/* {{ form_errors(form) }}*/
/* <div class="form-group text-center">*/
/*     {{ form_widget(form.firstName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Firstname', 'maxlength': '255'}}) }}*/
/* </div>*/
/* <div class="form-group text-center">*/
/*     {{ form_widget(form.lastName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Lastname', 'maxlength': '255'}}) }}*/
/* </div>*/
/* <div class="form-group text-center">*/
/*     {{ form_label(form.picture,"Profile picture:", {'label_attr': {'class': 'pull-left'}}) }}<br/>*/
/*     <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />*/
/*     {{ form_widget(form.picture.file, {'attr': {'class': '', 'accept':'image/*'}}) }}*/
/* </div>*/
/* <div class="form-group text-center">*/
/*     {{ form_widget(form.teamName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'team name', 'maxlength': '255'}}) }}*/
/* </div>*/
/* <div class="form-group text-center">*/
/*     {{ form_label(form.teamPicture,"Team logo:", {'label_attr': {'class': 'pull-left'}}) }}<br/>*/
/*     <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />*/
/*     {{ form_widget(form.teamPicture.file, {'attr': {'class': '','accept':'image/*'}}) }}*/
/* </div>*/
/* <div class="form-group">*/
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-lg btn-primary pull-right'}}) }}*/
/* </div>*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
