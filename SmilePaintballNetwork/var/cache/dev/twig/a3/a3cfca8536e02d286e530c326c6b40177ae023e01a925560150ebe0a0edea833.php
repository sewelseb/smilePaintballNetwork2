<?php

/* SmilePlatformBundle::Default/form/addNewEvent.html.twig */
class __TwigTemplate_8bbd32c675de6c690f257f397a87937852f6b6e9160e2e68c3dbde885ba951a7 extends Twig_Template
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
        $__internal_5a8dafc02dec424e00dc5d69bf444ee461005b3248620b5171f88d2cc8cdbb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8dafc02dec424e00dc5d69bf444ee461005b3248620b5171f88d2cc8cdbb09->enter($__internal_5a8dafc02dec424e00dc5d69bf444ee461005b3248620b5171f88d2cc8cdbb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/addNewEvent.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-add-event-in-page")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"form-group text-center\">
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control input-lg nameAddEvent", "placeholder" => "Event Title", "maxlength" => "255")));
        echo "
</div>
<div class=\"restOfTheFormCreateEvent\" hidden>
    <div class=\"form-group text-center\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Event description", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ticketLinck", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Link for the tickets (not mandatory)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prix", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group \">
        <strong>Staring date:</strong>
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startingDate", array()), "month", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startingDate", array()), "day", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "startingDate", array()), "year", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "

    </div>
    <div class=\"form-group \">
        <strong>End date:  </strong>
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endDate", array()), "month", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endDate", array()), "day", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "endDate", array()), "year", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "

    </div>
    <div class=\"form-group\">
        <strong>Country: </strong>
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "country", array()), 'widget', array("attr" => array("class" => "form-control input-lg ")));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Picture:"));
        echo "
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "image-file2", "accept" => "image/*")));
        echo "
    </div>
</div>
<div class=\"form-group\">
    <strong>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "+ CREATE", "attr" => array("class" => "btn btn-primary pull-right btn-save-form-add-event-in-page")));
        echo "</strong>
</div>
<script type=\"text/javascript\">
    \$('.image-file').bind('change', function() {
        if(this.files[0].size>3000000)
        {
            alert('This file size is: ' + this.files[0].size/1024/1024 + \"MB, and the maximum accepted is 3MB ;)\");
        }
    });
    \$('.btn-save-form-add-event-in-page').click(function(){
        \$('.form-add-event-in-page')[0].submit();
    });

</script>

";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_5a8dafc02dec424e00dc5d69bf444ee461005b3248620b5171f88d2cc8cdbb09->leave($__internal_5a8dafc02dec424e00dc5d69bf444ee461005b3248620b5171f88d2cc8cdbb09_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/addNewEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  128 => 57,  110 => 42,  103 => 38,  98 => 36,  92 => 33,  84 => 28,  80 => 27,  76 => 26,  68 => 21,  64 => 20,  60 => 19,  53 => 15,  47 => 12,  41 => 9,  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ form_start(form, {'attr': {'class': 'form-add-event-in-page'}}) }}
    {{ form_errors(form) }}
<div class=\"form-group text-center\">
    {{ form_widget(form.name, {'attr': {'class': 'form-control input-lg nameAddEvent', 'placeholder': 'Event Title', 'maxlength': '255'}}) }}
</div>
<div class=\"restOfTheFormCreateEvent\" hidden>
    <div class=\"form-group text-center\">
        {{ form_widget(form.description, {'attr': {'class': 'form-control input-lg ', 'placeholder': 'Event description', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        {{ form_widget(form.ticketLinck, {'attr': {'class': 'form-control input-lg ', 'placeholder': 'Link for the tickets (not mandatory)', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group text-center\">
        {{ form_widget(form.prix, {'attr': {'class': 'form-control input-lg ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}
    </div>
    <div class=\"form-group \">
        <strong>Staring date:</strong>
        {{ form_widget(form.startingDate.month, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}
        {{ form_widget(form.startingDate.day, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}
        {{ form_widget(form.startingDate.year, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}

    </div>
    <div class=\"form-group \">
        <strong>End date:  </strong>
        {{ form_widget(form.endDate.month, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}
        {{ form_widget(form.endDate.day, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}
        {{ form_widget(form.endDate.year, {'attr': {'class': 'year-class btn ', 'placeholder': 'Event price (not mandatory)', 'maxlength': '255'}}) }}

    </div>
    <div class=\"form-group\">
        <strong>Country: </strong>
        {{ form_widget(form.country, {'attr': {'class': 'form-control input-lg '}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.picture,\"Picture:\", {'label_attr': {'class': 'pull-left'}}) }}
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        {{ form_widget(form.picture.file, {'attr': {'class': 'image-file2', 'accept':'image/*'}}) }}
    </div>
</div>
<div class=\"form-group\">
    <strong>{{ form_widget(form.save, {'label': '+ CREATE', 'attr': {'class': 'btn btn-primary pull-right btn-save-form-add-event-in-page'}}) }}</strong>
</div>
<script type=\"text/javascript\">
    \$('.image-file').bind('change', function() {
        if(this.files[0].size>3000000)
        {
            alert('This file size is: ' + this.files[0].size/1024/1024 + \"MB, and the maximum accepted is 3MB ;)\");
        }
    });
    \$('.btn-save-form-add-event-in-page').click(function(){
        \$('.form-add-event-in-page')[0].submit();
    });

</script>

{{ form_rest(form) }}
{{ form_end(form) }}
", "SmilePlatformBundle::Default/form/addNewEvent.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/form/addNewEvent.html.twig");
    }
}
