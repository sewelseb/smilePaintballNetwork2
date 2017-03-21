<?php

/* @SmilePlatform/Default/form/addNewPost.html.twig */
class __TwigTemplate_6446f9437591824570b195dbd6598d3d2c802b3de9cad318f46b348292cd5768 extends Twig_Template
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    <div class=\"form-group text-center\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Title", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "eventName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Event name (optional)", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "team", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team to link to the post", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        <div class=\"col-md-6\">
            ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Picture:"));
        echo "
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "image-file", "accept" => "image/*")));
        echo "
        </div>
        <div class=\"col-md-1\">
            <H3><strong>OR</strong></H3>
        </div>
        <div class=\"col-md-5\">
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "url", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Url of a pic or a video", "maxlength" => "255")));
        echo "
            (you can also add a facebook or a youtube media link)
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right")));
        echo "
    </div>
    <script type=\"text/javascript\">
        \$('.image-file').bind('change', function() {
            if(this.files[0].size>3000000)
            {
                alert('This file size is: ' + this.files[0].size/1024/1024 + \"MB, and the maximum accepted is 3MB ;)\");
            }

        });
    </script>

";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/form/addNewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 40,  84 => 39,  69 => 27,  61 => 22,  52 => 16,  47 => 14,  40 => 10,  34 => 7,  28 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/form/addNewPost.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\form\\addNewPost.html.twig");
    }
}
