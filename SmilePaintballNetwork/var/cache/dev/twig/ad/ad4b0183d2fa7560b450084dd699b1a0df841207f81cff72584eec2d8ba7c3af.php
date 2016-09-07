<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_41550363030e422f0379ce9023efbac9fb9ed18298530ee17c3583344ecc1ca7 extends Twig_Template
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
        $__internal_c59764db70fb06744cc1d91f111a11a42f251e7e990b51d83a743fa6c8c64ab5 = $this->env->getExtension("native_profiler");
        $__internal_c59764db70fb06744cc1d91f111a11a42f251e7e990b51d83a743fa6c8c64ab5->enter($__internal_c59764db70fb06744cc1d91f111a11a42f251e7e990b51d83a743fa6c8c64ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c59764db70fb06744cc1d91f111a11a42f251e7e990b51d83a743fa6c8c64ab5->leave($__internal_c59764db70fb06744cc1d91f111a11a42f251e7e990b51d83a743fa6c8c64ab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
