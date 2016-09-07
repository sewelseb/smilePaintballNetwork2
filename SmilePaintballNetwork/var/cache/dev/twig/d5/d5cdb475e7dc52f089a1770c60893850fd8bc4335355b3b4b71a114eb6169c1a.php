<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66f04aeae6fdf547f69c596d7abb913b21cc4eed94b37adccc317af335847376 extends Twig_Template
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
        $__internal_ea5bd073bd2b090c3254c33e8fd9d2998258732f0b2f2df9ef41144d1eec5f22 = $this->env->getExtension("native_profiler");
        $__internal_ea5bd073bd2b090c3254c33e8fd9d2998258732f0b2f2df9ef41144d1eec5f22->enter($__internal_ea5bd073bd2b090c3254c33e8fd9d2998258732f0b2f2df9ef41144d1eec5f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ea5bd073bd2b090c3254c33e8fd9d2998258732f0b2f2df9ef41144d1eec5f22->leave($__internal_ea5bd073bd2b090c3254c33e8fd9d2998258732f0b2f2df9ef41144d1eec5f22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
