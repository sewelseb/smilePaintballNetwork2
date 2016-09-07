<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_7fbc264656bd4f974b23221e5d96d04496218c87e376dc3b2fc72afd3ba5341b extends Twig_Template
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
        $__internal_ad081f2a2b56822787c6bc2ec549b676e97f7ad9e9d80ed65226c02e8f22cbbb = $this->env->getExtension("native_profiler");
        $__internal_ad081f2a2b56822787c6bc2ec549b676e97f7ad9e9d80ed65226c02e8f22cbbb->enter($__internal_ad081f2a2b56822787c6bc2ec549b676e97f7ad9e9d80ed65226c02e8f22cbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ad081f2a2b56822787c6bc2ec549b676e97f7ad9e9d80ed65226c02e8f22cbbb->leave($__internal_ad081f2a2b56822787c6bc2ec549b676e97f7ad9e9d80ed65226c02e8f22cbbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($disabled): ?> disabled="disabled"<?php endif ?>*/
/* <?php if ($required): ?> required="required"<?php endif ?>*/
/* <?php foreach ($attr as $k => $v): ?>*/
/* <?php if (in_array($k, array('placeholder', 'title'), true)): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape(false !== $translation_domain ? $view['translator']->trans($v, array(), $translation_domain) : $v)) ?>*/
/* <?php elseif ($v === true): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf(' %s="%s"', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
