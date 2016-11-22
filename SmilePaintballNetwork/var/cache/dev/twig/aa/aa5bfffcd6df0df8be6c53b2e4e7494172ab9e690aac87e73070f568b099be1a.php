<?php

/* SmilePlatformBundle::Default/form/addNewPost.html.twig */
class __TwigTemplate_8294c204b54507840563a8602ec365128053f046d1a565bdd28980590a296c7d extends Twig_Template
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
        $__internal_896120ce527d52b66bd8a4eef4d0827ebdcae2becd9acc03b22efefb47b4601c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896120ce527d52b66bd8a4eef4d0827ebdcae2becd9acc03b22efefb47b4601c->enter($__internal_896120ce527d52b66bd8a4eef4d0827ebdcae2becd9acc03b22efefb47b4601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/addNewPost.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group text-center\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Title", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Event name (optional)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "team", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team to link to the post", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        <div class=\"col-md-6\">
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Picture:"));
        echo "
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
        </div>
        <div class=\"col-md-1\">
            <H3><strong>OR</strong></H3>
        </div>
        <div class=\"col-md-5\">
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Url of a pic or a video", "maxlength" => "255")));
        echo "
            (you can also add a facebook or a youtube media link)
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right")));
        echo "
    </div>

";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_896120ce527d52b66bd8a4eef4d0827ebdcae2becd9acc03b22efefb47b4601c->leave($__internal_896120ce527d52b66bd8a4eef4d0827ebdcae2becd9acc03b22efefb47b4601c_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/addNewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  78 => 30,  72 => 27,  64 => 22,  55 => 16,  50 => 14,  43 => 10,  37 => 7,  31 => 4,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{{ form_start(form) }}
    {{ form_errors(form) }}
    <div class=\"form-group text-center\">
        {{ form_widget(form.title, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Title', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        {{ form_widget(form.eventName, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Event name (optional)', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        {{ form_widget(form.team, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Team to link to the post', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        <div class=\"col-md-6\">
            {{ form_label(form.picture,\"Picture:\", {'label_attr': {'class': 'pull-left'}}) }}
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            {{ form_widget(form.picture.file, {'attr': {'class': '', 'accept':'image/*'}}) }}
        </div>
        <div class=\"col-md-1\">
            <H3><strong>OR</strong></H3>
        </div>
        <div class=\"col-md-5\">
            {{ form_widget(form.url, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Url of a pic or a video', 'maxlength': '255'}}) }}
            (you can also add a facebook or a youtube media link)
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-lg btn-primary pull-right'}}) }}
    </div>

{{ form_rest(form) }}
{{ form_end(form) }}";
    }
}