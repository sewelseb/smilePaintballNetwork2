<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_036227c8f8cb28f007433f73e26f8ed8b0db021802cd72b62c6953b6117269ab extends Twig_Template
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
        $__internal_3b648e53355cba4708977bcb9160016c259b1b2dc05e5423fd5f8f501d690a12 = $this->env->getExtension("native_profiler");
        $__internal_3b648e53355cba4708977bcb9160016c259b1b2dc05e5423fd5f8f501d690a12->enter($__internal_3b648e53355cba4708977bcb9160016c259b1b2dc05e5423fd5f8f501d690a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3b648e53355cba4708977bcb9160016c259b1b2dc05e5423fd5f8f501d690a12->leave($__internal_3b648e53355cba4708977bcb9160016c259b1b2dc05e5423fd5f8f501d690a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
