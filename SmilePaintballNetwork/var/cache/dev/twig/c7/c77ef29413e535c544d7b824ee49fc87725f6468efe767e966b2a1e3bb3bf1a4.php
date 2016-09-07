<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_93536daf5dda4271792c8fc2d73618e1f69f26da24b43567522faed78e5b654a extends Twig_Template
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
        $__internal_9897dc88609cf32c3b421626a9dd9a6e9e9947116ed2f5ec4b7425eec01e77d2 = $this->env->getExtension("native_profiler");
        $__internal_9897dc88609cf32c3b421626a9dd9a6e9e9947116ed2f5ec4b7425eec01e77d2->enter($__internal_9897dc88609cf32c3b421626a9dd9a6e9e9947116ed2f5ec4b7425eec01e77d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9897dc88609cf32c3b421626a9dd9a6e9e9947116ed2f5ec4b7425eec01e77d2->leave($__internal_9897dc88609cf32c3b421626a9dd9a6e9e9947116ed2f5ec4b7425eec01e77d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
