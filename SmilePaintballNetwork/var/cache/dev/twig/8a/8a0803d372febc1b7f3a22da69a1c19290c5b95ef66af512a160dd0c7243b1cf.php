<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_877039a573c04ef2a61117bc8a949f75127ffd093bff000450402efbfd93c242 extends Twig_Template
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
        $__internal_748b94b663ea9720613f603f7d47913714126aa72fafe45bba1716b28424f3ba = $this->env->getExtension("native_profiler");
        $__internal_748b94b663ea9720613f603f7d47913714126aa72fafe45bba1716b28424f3ba->enter($__internal_748b94b663ea9720613f603f7d47913714126aa72fafe45bba1716b28424f3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_748b94b663ea9720613f603f7d47913714126aa72fafe45bba1716b28424f3ba->leave($__internal_748b94b663ea9720613f603f7d47913714126aa72fafe45bba1716b28424f3ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
