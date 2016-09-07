<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2739bade744e9334f1c074eca2789e65972e78217eaf5ed9d3c326dcf7f4b233 extends Twig_Template
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
        $__internal_ac021446d3e2179027487b104db85f2433aa7a934ad3b585f19e254827993b89 = $this->env->getExtension("native_profiler");
        $__internal_ac021446d3e2179027487b104db85f2433aa7a934ad3b585f19e254827993b89->enter($__internal_ac021446d3e2179027487b104db85f2433aa7a934ad3b585f19e254827993b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ac021446d3e2179027487b104db85f2433aa7a934ad3b585f19e254827993b89->leave($__internal_ac021446d3e2179027487b104db85f2433aa7a934ad3b585f19e254827993b89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
