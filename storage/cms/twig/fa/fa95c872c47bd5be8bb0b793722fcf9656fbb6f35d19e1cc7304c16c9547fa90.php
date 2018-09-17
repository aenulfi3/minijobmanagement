<?php

/* C:\xampp\htdocs\minijobmanagement/plugins/offline/sitesearch/components/searchresults/no-results.htm */
class __TwigTemplate_fdfad46258721b27229ebdfdb0b7fb53271b3bd845fc3f5664fcbea7194b5d26 extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "noResultsMessage", array()), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/plugins/offline/sitesearch/components/searchresults/no-results.htm";
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
        return new Twig_Source("<p>{{ __SELF__.noResultsMessage }}</p>", "C:\\xampp\\htdocs\\minijobmanagement/plugins/offline/sitesearch/components/searchresults/no-results.htm", "");
    }
}
