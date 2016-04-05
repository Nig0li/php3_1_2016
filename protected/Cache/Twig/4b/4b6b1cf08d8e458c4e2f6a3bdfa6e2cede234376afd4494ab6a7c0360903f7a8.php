<?php

/* Default.html */
class __TwigTemplate_a19a9c8ac3ac2db61dd44aae1aad3725fd99797e725c035d7228c6a95f8583d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Index.html", "Default.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Добро пожаловать на ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "domain", array()), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "Default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'Index.html' %}*/
/* */
/* {% block content %}*/
/*     <h1>Добро пожаловать на {{ app.config.domain }}</h1>*/
/* {% endblock %}*/
