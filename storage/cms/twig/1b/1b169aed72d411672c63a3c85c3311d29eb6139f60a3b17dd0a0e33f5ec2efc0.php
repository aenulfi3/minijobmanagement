<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/search.htm */
class __TwigTemplate_8ae1d923c3568a6580da1192cc7eabceebb7bfd4e39c2268fb2881058fb878cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchResults"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'searchResults' %}", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/search.htm", "");
    }
}
