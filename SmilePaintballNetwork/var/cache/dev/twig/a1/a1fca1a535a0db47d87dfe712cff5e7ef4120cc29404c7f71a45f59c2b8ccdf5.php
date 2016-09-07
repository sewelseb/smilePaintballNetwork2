<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_eb32a36b078bf0eb4aa801908b93928ce19bce1b0e4c554110acd16d61dd11f6 extends Twig_Template
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
        $__internal_df6e705009e88d91ecb02623e32936d947f274b0d75efef8c1d373676e04e032 = $this->env->getExtension("native_profiler");
        $__internal_df6e705009e88d91ecb02623e32936d947f274b0d75efef8c1d373676e04e032->enter($__internal_df6e705009e88d91ecb02623e32936d947f274b0d75efef8c1d373676e04e032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_df6e705009e88d91ecb02623e32936d947f274b0d75efef8c1d373676e04e032->leave($__internal_df6e705009e88d91ecb02623e32936d947f274b0d75efef8c1d373676e04e032_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
