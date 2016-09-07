<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5fe83a7c3575f829bc1aa980df0c660d266e26dd301012be35a7734509fb179b extends Twig_Template
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
        $__internal_7971074d282b0ad9432762338a2a6f3630bcbf2c91789b0970b4550b3937d957 = $this->env->getExtension("native_profiler");
        $__internal_7971074d282b0ad9432762338a2a6f3630bcbf2c91789b0970b4550b3937d957->enter($__internal_7971074d282b0ad9432762338a2a6f3630bcbf2c91789b0970b4550b3937d957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7971074d282b0ad9432762338a2a6f3630bcbf2c91789b0970b4550b3937d957->leave($__internal_7971074d282b0ad9432762338a2a6f3630bcbf2c91789b0970b4550b3937d957_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
