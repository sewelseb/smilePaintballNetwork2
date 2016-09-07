<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8759516329d40d931886134277d9e2efe609d43ac49d0f1db2d7f56ed72d7dd4 extends Twig_Template
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
        $__internal_a7688c8c5337f3d829e741aabafafaf67a6fb6346faf41c210dda4f61a195e01 = $this->env->getExtension("native_profiler");
        $__internal_a7688c8c5337f3d829e741aabafafaf67a6fb6346faf41c210dda4f61a195e01->enter($__internal_a7688c8c5337f3d829e741aabafafaf67a6fb6346faf41c210dda4f61a195e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a7688c8c5337f3d829e741aabafafaf67a6fb6346faf41c210dda4f61a195e01->leave($__internal_a7688c8c5337f3d829e741aabafafaf67a6fb6346faf41c210dda4f61a195e01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
