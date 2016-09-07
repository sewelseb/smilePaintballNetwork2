<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f8c85ed1dbc7081e4ad7cde69390d0bc1ff5011d7ae07522e806c00e8335f25d extends Twig_Template
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
        $__internal_51595e8ce2f411f1a49e6ec4e2aedcee55a4fc865c57f03c9eaea081070d1d00 = $this->env->getExtension("native_profiler");
        $__internal_51595e8ce2f411f1a49e6ec4e2aedcee55a4fc865c57f03c9eaea081070d1d00->enter($__internal_51595e8ce2f411f1a49e6ec4e2aedcee55a4fc865c57f03c9eaea081070d1d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_51595e8ce2f411f1a49e6ec4e2aedcee55a4fc865c57f03c9eaea081070d1d00->leave($__internal_51595e8ce2f411f1a49e6ec4e2aedcee55a4fc865c57f03c9eaea081070d1d00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
