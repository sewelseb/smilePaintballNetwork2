<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1389354757a3ff0ee4115b6f3124ae1b0b9b1789427f7b1b1673c0c3efcbc3f1 extends Twig_Template
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
        $__internal_b0e38b7de618184ce2513efc17b5d8b75db31ff6ecf0cb03c77502818ea8f96a = $this->env->getExtension("native_profiler");
        $__internal_b0e38b7de618184ce2513efc17b5d8b75db31ff6ecf0cb03c77502818ea8f96a->enter($__internal_b0e38b7de618184ce2513efc17b5d8b75db31ff6ecf0cb03c77502818ea8f96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b0e38b7de618184ce2513efc17b5d8b75db31ff6ecf0cb03c77502818ea8f96a->leave($__internal_b0e38b7de618184ce2513efc17b5d8b75db31ff6ecf0cb03c77502818ea8f96a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
