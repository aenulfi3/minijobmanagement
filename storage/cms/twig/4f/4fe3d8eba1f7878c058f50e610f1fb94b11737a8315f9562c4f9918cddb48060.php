<?php

/* C:\xampp\htdocs\minijobmanagement/plugins/offline/sitesearch/components/searchresults/pagination.htm */
class __TwigTemplate_6f5b2b34c5602ee44d23ef7f852d2a8dae22909134a525b46fd4b179fe5b9020 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "hasPages", array())) {
            // line 2
            echo "    ";
            echo ($context["results"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/plugins/offline/sitesearch/components/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if results.hasPages %}
    {{ results | raw }}
{% endif %}

", "C:\\xampp\\htdocs\\minijobmanagement/plugins/offline/sitesearch/components/searchresults/pagination.htm", "");
    }
}
