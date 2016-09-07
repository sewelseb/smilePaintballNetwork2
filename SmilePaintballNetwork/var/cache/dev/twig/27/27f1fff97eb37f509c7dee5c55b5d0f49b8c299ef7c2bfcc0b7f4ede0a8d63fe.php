<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8b1c37b97f6d5228089aef547febe7b64e5fcb5ba7e905d7a6ddbb1a79898a3d extends Twig_Template
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
        $__internal_cc0179d414c51a0644654706c05007136ec342799c4a02efce13ff0f14608b54 = $this->env->getExtension("native_profiler");
        $__internal_cc0179d414c51a0644654706c05007136ec342799c4a02efce13ff0f14608b54->enter($__internal_cc0179d414c51a0644654706c05007136ec342799c4a02efce13ff0f14608b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cc0179d414c51a0644654706c05007136ec342799c4a02efce13ff0f14608b54->leave($__internal_cc0179d414c51a0644654706c05007136ec342799c4a02efce13ff0f14608b54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
