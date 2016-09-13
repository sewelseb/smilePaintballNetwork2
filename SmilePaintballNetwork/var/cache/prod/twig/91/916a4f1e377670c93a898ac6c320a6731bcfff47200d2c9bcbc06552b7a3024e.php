<?php

/* SmilePlatformBundle::Default/form/createTeam.html.twig */
class __TwigTemplate_2d83f6ab98abd3b881fa5b5795c240739e3536519d6ae3212240b184eda50bc7 extends Twig_Template
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
        $__internal_46ccced8c49ca160aa2befcf5b008aaa657e0261ecebe2e0d6f507d645633ae3 = $this->env->getExtension("native_profiler");
        $__internal_46ccced8c49ca160aa2befcf5b008aaa657e0261ecebe2e0d6f507d645633ae3->enter($__internal_46ccced8c49ca160aa2befcf5b008aaa657e0261ecebe2e0d6f507d645633ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/createTeam.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team name", "maxlength" => "255")));
        echo "
</div>
<div class=\"form-group text-center\">
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamPicture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Team logo:"));
        echo "<br/>
    <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamPicture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
</div>

<div class=\"form-group\">
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right")));
        echo "
</div>

";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_46ccced8c49ca160aa2befcf5b008aaa657e0261ecebe2e0d6f507d645633ae3->leave($__internal_46ccced8c49ca160aa2befcf5b008aaa657e0261ecebe2e0d6f507d645633ae3_prof);

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
}
/* {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* <div class="form-group text-center">*/
/*     {{ form_widget(form.name, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Team name', 'maxlength': '255'}}) }}*/
/* </div>*/
/* <div class="form-group text-center">*/
/*     {{ form_label(form.teamPicture,"Team logo:", {'label_attr': {'class': 'pull-left'}}) }}<br/>*/
/*     <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />*/
/*     {{ form_widget(form.teamPicture.file, {'attr': {'class': '','accept':'image/*'}}) }}*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-lg btn-primary pull-right'}}) }}*/
/* </div>*/
/* */
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
