<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_bc7421ca6f17dfa66916492a6acf1148a889134699e935ed84c5363d87808abb extends Twig_Template
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
        $__internal_be6ce89cedc25037ae7af37426dd2153c5568d092734f2dd49fa8c5cbb868efa = $this->env->getExtension("native_profiler");
        $__internal_be6ce89cedc25037ae7af37426dd2153c5568d092734f2dd49fa8c5cbb868efa->enter($__internal_be6ce89cedc25037ae7af37426dd2153c5568d092734f2dd49fa8c5cbb868efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_be6ce89cedc25037ae7af37426dd2153c5568d092734f2dd49fa8c5cbb868efa->leave($__internal_be6ce89cedc25037ae7af37426dd2153c5568d092734f2dd49fa8c5cbb868efa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
