<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9f6a2a5b55949989807bd0cedae95912051fe79df11485ed9669a4d451a8dde7 extends Twig_Template
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
        $__internal_c0ddba3e6bcc08029604f2f23d8535c67f4c84082bedf93fc673d403f2dd4f5e = $this->env->getExtension("native_profiler");
        $__internal_c0ddba3e6bcc08029604f2f23d8535c67f4c84082bedf93fc673d403f2dd4f5e->enter($__internal_c0ddba3e6bcc08029604f2f23d8535c67f4c84082bedf93fc673d403f2dd4f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c0ddba3e6bcc08029604f2f23d8535c67f4c84082bedf93fc673d403f2dd4f5e->leave($__internal_c0ddba3e6bcc08029604f2f23d8535c67f4c84082bedf93fc673d403f2dd4f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
