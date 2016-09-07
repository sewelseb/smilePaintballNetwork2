<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_9a737e853d0d3ace48b2be56fc7bf8408a225b0c45160ad283579180d80303b9 extends Twig_Template
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
        $__internal_1864b48a7e4e956d77f67d1d004e487aa673ab2b03135690d3646d6de9ca290d = $this->env->getExtension("native_profiler");
        $__internal_1864b48a7e4e956d77f67d1d004e487aa673ab2b03135690d3646d6de9ca290d->enter($__internal_1864b48a7e4e956d77f67d1d004e487aa673ab2b03135690d3646d6de9ca290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1864b48a7e4e956d77f67d1d004e487aa673ab2b03135690d3646d6de9ca290d->leave($__internal_1864b48a7e4e956d77f67d1d004e487aa673ab2b03135690d3646d6de9ca290d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
