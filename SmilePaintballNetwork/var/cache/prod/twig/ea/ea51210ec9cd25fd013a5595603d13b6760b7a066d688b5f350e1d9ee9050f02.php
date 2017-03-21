<?php

/* @SmilePlatform/Default/form/createTeam.html.twig */
class __TwigTemplate_d0207477f6eff9232ceb87fe5bb9d8fde09926850fbbb2b66c4e27641669b332 extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formCreateTeam"] ?? null), 'form_start', array("attr" => array("class" => "formCreateTeam")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formCreateTeam"] ?? null), 'errors');
        echo "
    <div class=\"form-group text-center\">
        ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? null), "name", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Team name", "maxlength" => "255")));
        echo "
    </div>
    <div class=\"form-group text-center\">
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? null), "teamPicture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Team logo:"));
        echo "<br/>
        <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formCreateTeam"] ?? null), "teamPicture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
    </div>

    <div class=\"form-group\">
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formCreateTeam"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right formCreateTeamSubmit", "onclick" => "submitNewTeam()")));
        echo "
    </div>

    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formCreateTeam"] ?? null), 'rest');
        echo "
";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formCreateTeam"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/form/createTeam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 17,  52 => 16,  46 => 13,  39 => 9,  34 => 7,  28 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmilePlatform/Default/form/createTeam.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle\\Resources\\views\\Default\\form\\createTeam.html.twig");
    }
}
