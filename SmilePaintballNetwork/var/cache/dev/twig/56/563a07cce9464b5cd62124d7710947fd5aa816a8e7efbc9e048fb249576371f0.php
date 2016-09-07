<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_cea5032351afe2709ad228958140484c694843547d954c9deeff573026779718 extends Twig_Template
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
        $__internal_560fe5cccef3153576bb8246e07e37d9d73150137ae9d7bdd72469a6bcfcb4fd = $this->env->getExtension("native_profiler");
        $__internal_560fe5cccef3153576bb8246e07e37d9d73150137ae9d7bdd72469a6bcfcb4fd->enter($__internal_560fe5cccef3153576bb8246e07e37d9d73150137ae9d7bdd72469a6bcfcb4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_560fe5cccef3153576bb8246e07e37d9d73150137ae9d7bdd72469a6bcfcb4fd->leave($__internal_560fe5cccef3153576bb8246e07e37d9d73150137ae9d7bdd72469a6bcfcb4fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
