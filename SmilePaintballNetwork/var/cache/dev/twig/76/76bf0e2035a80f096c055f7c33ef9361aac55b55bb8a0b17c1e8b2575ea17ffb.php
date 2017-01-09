<?php

/* SmilePlatformBundle::Default/form/addNewPostInPage.html.twig */
class __TwigTemplate_58d75014ded1be4cc277c071e333d19c15e64756e31c7ff7a0ef468b1c92be9e extends Twig_Template
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
        $__internal_a976253886b76e4a1a235cdc8a7e40e1e0981aefab2435d431db9998d729315b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a976253886b76e4a1a235cdc8a7e40e1e0981aefab2435d431db9998d729315b->enter($__internal_a976253886b76e4a1a235cdc8a7e40e1e0981aefab2435d431db9998d729315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/addNewPostInPage.html.twig"));

        // line 1
        echo "<H2><strong>+ POST your Fun</strong></H2>
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-post-in-page")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"form-group text-center\">
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control input-lg titleAddPost", "placeholder" => "Post Title", "maxlength" => "255")));
        echo "
</div>
<div class=\"restOfTheForm\" hidden>
    <div class=\"form-group text-center\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eventName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Event name (optional)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "team", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team to link to the post", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        <div class=\"col-md-6\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Picture:"));
        echo "
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "image-file2", "accept" => "image/*")));
        echo "
        </div>
        <div class=\"col-md-1\">
            <H3><strong>OR</strong></H3>
        </div>
        <div class=\"col-md-5\">
            ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Url of a pic or a video", "maxlength" => "255")));
        echo "
            (you can also add a facebook or a youtube media link)
        </div>
    </div>
</div>
<div class=\"form-group\">

    <strong>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "+ POST", "attr" => array("class" => "btn btn-lg btn-primary pull-right btn-save-form-add-post-in-page")));
        echo "</strong>
</div>
<script type=\"text/javascript\">
    \$('.image-file').bind('change', function() {
        if(this.files[0].size>3000000)
        {
            alert('This file size is: ' + this.files[0].size/1024/1024 + \"MB, and the maximum accepted is 3MB ;)\");
        }
    });
    \$('.btn-save-form-add-post-in-page').click(function(){
        \$('.form-add-post-in-page')[0].submit();
    });

</script>

";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a976253886b76e4a1a235cdc8a7e40e1e0981aefab2435d431db9998d729315b->leave($__internal_a976253886b76e4a1a235cdc8a7e40e1e0981aefab2435d431db9998d729315b_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/addNewPostInPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 47,  96 => 46,  78 => 31,  68 => 24,  59 => 18,  54 => 16,  47 => 12,  41 => 9,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<H2><strong>+ POST your Fun</strong></H2>
{{ form_start(form, {'attr': {'class': 'form-add-post-in-page'}}) }}
    {{ form_errors(form) }}
<div class=\"form-group text-center\">
    {{ form_widget(form.title, {'attr': {'class': 'form-control input-lg titleAddPost', 'placeholder': 'Post Title', 'maxlength': '255'}}) }}
</div>
<div class=\"restOfTheForm\" hidden>
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
            {{ form_widget(form.picture.file, {'attr': {'class': 'image-file2', 'accept':'image/*'}}) }}
        </div>
        <div class=\"col-md-1\">
            <H3><strong>OR</strong></H3>
        </div>
        <div class=\"col-md-5\">
            {{ form_widget(form.url, {'attr': {'class': 'form-control input-lg', 'placeholder': 'Url of a pic or a video', 'maxlength': '255'}}) }}
            (you can also add a facebook or a youtube media link)
        </div>
    </div>
</div>
<div class=\"form-group\">

    <strong>{{ form_widget(form.save, {'label': '+ POST', 'attr': {'class': 'btn btn-lg btn-primary pull-right btn-save-form-add-post-in-page'}}) }}</strong>
</div>
<script type=\"text/javascript\">
    \$('.image-file').bind('change', function() {
        if(this.files[0].size>3000000)
        {
            alert('This file size is: ' + this.files[0].size/1024/1024 + \"MB, and the maximum accepted is 3MB ;)\");
        }
    });
    \$('.btn-save-form-add-post-in-page').click(function(){
        \$('.form-add-post-in-page')[0].submit();
    });

</script>

{{ form_rest(form) }}
{{ form_end(form) }}

", "SmilePlatformBundle::Default/form/addNewPostInPage.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/addNewPostInPage.html.twig");
    }
}
