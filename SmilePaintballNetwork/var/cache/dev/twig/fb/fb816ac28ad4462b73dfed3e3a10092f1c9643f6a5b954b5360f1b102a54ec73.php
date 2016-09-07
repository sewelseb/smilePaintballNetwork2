<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b7e5537d4d1a4322dbd570619594484a6af4920f32e3fda357f4af4e2d3da2e extends Twig_Template
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
        $__internal_aadec08cde978abbebcc056a7e8ad37d18fb0b737805a8c84b514263fb254c5d = $this->env->getExtension("native_profiler");
        $__internal_aadec08cde978abbebcc056a7e8ad37d18fb0b737805a8c84b514263fb254c5d->enter($__internal_aadec08cde978abbebcc056a7e8ad37d18fb0b737805a8c84b514263fb254c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aadec08cde978abbebcc056a7e8ad37d18fb0b737805a8c84b514263fb254c5d->leave($__internal_aadec08cde978abbebcc056a7e8ad37d18fb0b737805a8c84b514263fb254c5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
