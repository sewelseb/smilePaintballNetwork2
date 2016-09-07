<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ef822161cce1e14f550bfdd7793ca1b3e6fc2899caa0eea2cc5c1a6e11820fbe extends Twig_Template
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
        $__internal_e30b789cda0a4c8ac76e4744f14a3cefba8c1b4bd5b04a71aa4260f2e35e4b25 = $this->env->getExtension("native_profiler");
        $__internal_e30b789cda0a4c8ac76e4744f14a3cefba8c1b4bd5b04a71aa4260f2e35e4b25->enter($__internal_e30b789cda0a4c8ac76e4744f14a3cefba8c1b4bd5b04a71aa4260f2e35e4b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e30b789cda0a4c8ac76e4744f14a3cefba8c1b4bd5b04a71aa4260f2e35e4b25->leave($__internal_e30b789cda0a4c8ac76e4744f14a3cefba8c1b4bd5b04a71aa4260f2e35e4b25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
