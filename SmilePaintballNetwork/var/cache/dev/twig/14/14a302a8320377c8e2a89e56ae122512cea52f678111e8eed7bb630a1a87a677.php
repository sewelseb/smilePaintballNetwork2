<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e355da3f4321eb4913f988a52466e8fbeb526db2b1718fa6faa8d8e71aa3dcff extends Twig_Template
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
        $__internal_73c7181652a5ed0e752318ab2ddecd2d8e96831841e612fe0207f66ae1b82849 = $this->env->getExtension("native_profiler");
        $__internal_73c7181652a5ed0e752318ab2ddecd2d8e96831841e612fe0207f66ae1b82849->enter($__internal_73c7181652a5ed0e752318ab2ddecd2d8e96831841e612fe0207f66ae1b82849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_73c7181652a5ed0e752318ab2ddecd2d8e96831841e612fe0207f66ae1b82849->leave($__internal_73c7181652a5ed0e752318ab2ddecd2d8e96831841e612fe0207f66ae1b82849_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
