<?php

/* front.php */
class __TwigTemplate_4c34a73a03615bf3dbb422d6e572310a extends Twig_Template
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
        $this->env->loadTemplate("a.php")->display($context);
        // line 2
        if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
        echo twig_escape_filter($this->env, $_a_, "html", null, true);
    }

    public function getTemplateName()
    {
        return "front.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,  17 => 1,);
    }
}
