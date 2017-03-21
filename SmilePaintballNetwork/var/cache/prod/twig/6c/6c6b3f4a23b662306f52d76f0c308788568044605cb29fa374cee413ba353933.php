<?php

/* @SmilePlatform/Default/form/addNewEvent.html.twig */
class __TwigTemplate_0081c7fc62794f0f7ec387d758d603e1e08bdb98843f8ad0d8299ee64b1e54d5 extends Twig_Template
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
        // line 1
        echo "
";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-add-event-in-page")));
        echo "
    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
<div class=\"form-group text-center\">
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("class" => "form-control input-lg nameAddEvent", "placeholder" => "Event Title", "maxlength" => "255")));
        echo "
</div>
<div class=\"restOfTheFormCreateEvent\" hidden>
    <div class=\"form-group text-center\">
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Event description", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "ticketLinck", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Link for the tickets (not mandatory)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "prix", array()), 'widget', array("attr" => array("class" => "form-control input-lg ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group \">
        <strong>Staring date:</strong>
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "startingDate", array()), "month", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "startingDate", array()), "day", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "startingDate", array()), "year", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "

    </div>
    <div class=\"form-group \">
        <strong>End date:  </strong>
        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "endDate", array()), "month", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "endDate", array()), "day", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "endDate", array()), "year", array()), 'widget', array("attr" => array("class" => "year-class btn ", "placeholder" => "Event price (not mandatory)", "maxlength" => "255")));
        echo "

    </div>
    <div class=\"form-group\">
        <strong>Country: </strong>
        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "country", array()), 'widget', array("attr" => array("class" => "form-control input-lg ")));
        echo "
    </div>
    <div class=\"form-group\">
        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Picture:"));
        echo "
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "image-file2", "accept" => "image/*")));
        echo "
    </div>
</div>
<div class=\"form-group\">
    <strong>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("label" => "+ CREATE", "attr" => array("class" => "btn btn-primary pull-right btn-save-form-add-event-in-page")));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/form/addNewEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 58,  125 => 57,  107 => 42,  100 => 38,  95 => 36,  89 => 33,  81 => 28,  77 => 27,  73 => 26,  65 => 21,  61 => 20,  57 => 19,  50 => 15,  44 => 12,  38 => 9,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/form/addNewEvent.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\form\\addNewEvent.html.twig");
    }
}
