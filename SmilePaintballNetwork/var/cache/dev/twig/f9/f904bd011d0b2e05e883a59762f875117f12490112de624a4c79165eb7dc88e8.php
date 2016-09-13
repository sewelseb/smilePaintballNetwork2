<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8a3c82a044d9b59c5d022d8ad872ea6c1d88372f5bcdbcd85310ddfda8ae281a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c90bf27519dde6217c0b870e2a397b34d08c57b3d579633355ce315b97188f8 = $this->env->getExtension("native_profiler");
        $__internal_6c90bf27519dde6217c0b870e2a397b34d08c57b3d579633355ce315b97188f8->enter($__internal_6c90bf27519dde6217c0b870e2a397b34d08c57b3d579633355ce315b97188f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c90bf27519dde6217c0b870e2a397b34d08c57b3d579633355ce315b97188f8->leave($__internal_6c90bf27519dde6217c0b870e2a397b34d08c57b3d579633355ce315b97188f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46f1f2d68b5d1cde0ad53c0ca50695cdde931287ea7c703e745e32023bf729db = $this->env->getExtension("native_profiler");
        $__internal_46f1f2d68b5d1cde0ad53c0ca50695cdde931287ea7c703e745e32023bf729db->enter($__internal_46f1f2d68b5d1cde0ad53c0ca50695cdde931287ea7c703e745e32023bf729db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_46f1f2d68b5d1cde0ad53c0ca50695cdde931287ea7c703e745e32023bf729db->leave($__internal_46f1f2d68b5d1cde0ad53c0ca50695cdde931287ea7c703e745e32023bf729db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6cd25efe5dfc87cc95d864e7cce84bc2dc37a40eb2bd4c74575f3e4774f2b839 = $this->env->getExtension("native_profiler");
        $__internal_6cd25efe5dfc87cc95d864e7cce84bc2dc37a40eb2bd4c74575f3e4774f2b839->enter($__internal_6cd25efe5dfc87cc95d864e7cce84bc2dc37a40eb2bd4c74575f3e4774f2b839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6cd25efe5dfc87cc95d864e7cce84bc2dc37a40eb2bd4c74575f3e4774f2b839->leave($__internal_6cd25efe5dfc87cc95d864e7cce84bc2dc37a40eb2bd4c74575f3e4774f2b839_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8305b177fffa4e0625ddf295c19d65f3f7bb4adbcaaf4bbcfa7750fc4c0256e2 = $this->env->getExtension("native_profiler");
        $__internal_8305b177fffa4e0625ddf295c19d65f3f7bb4adbcaaf4bbcfa7750fc4c0256e2->enter($__internal_8305b177fffa4e0625ddf295c19d65f3f7bb4adbcaaf4bbcfa7750fc4c0256e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8305b177fffa4e0625ddf295c19d65f3f7bb4adbcaaf4bbcfa7750fc4c0256e2->leave($__internal_8305b177fffa4e0625ddf295c19d65f3f7bb4adbcaaf4bbcfa7750fc4c0256e2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
