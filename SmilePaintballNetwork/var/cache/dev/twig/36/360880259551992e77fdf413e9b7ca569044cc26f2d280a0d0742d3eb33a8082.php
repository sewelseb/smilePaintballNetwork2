<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e54b55af2a660f13fbaf876f97840288b11c8416b21011cd2d908dda7edb5ce7 extends Twig_Template
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
        $__internal_6d1273b8d27a0044c4e017f73175656ebb39db96d97b620b095e0f653604e181 = $this->env->getExtension("native_profiler");
        $__internal_6d1273b8d27a0044c4e017f73175656ebb39db96d97b620b095e0f653604e181->enter($__internal_6d1273b8d27a0044c4e017f73175656ebb39db96d97b620b095e0f653604e181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6d1273b8d27a0044c4e017f73175656ebb39db96d97b620b095e0f653604e181->leave($__internal_6d1273b8d27a0044c4e017f73175656ebb39db96d97b620b095e0f653604e181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
