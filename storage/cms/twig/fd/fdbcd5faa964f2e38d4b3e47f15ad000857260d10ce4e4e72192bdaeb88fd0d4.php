<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm */
class __TwigTemplate_027878c3e42ced9b4d32c0b46df8f8359a636c1ba7bca1ad1e22408ab962e4a2 extends Twig_Template
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
        echo "<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t";
        // line 4
        $context['__placeholder_jumbotron_default_contents'] = null;        ob_start();        // line 5
        echo "\t\t\t<h1 class=\"display-3\">Welcome to Mini Job MGT</h1>
\t\t\t<p class=\"lead\">Simply look for a vacant job that might interest you and click apply</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>Or go to your Profile Setting.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\" role=\"button\">Settings</a>
\t\t\t</p>
\t\t\t";
        $context['__placeholder_jumbotron_default_contents'] = ob_get_clean();        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('jumbotron', $context['__placeholder_jumbotron_default_contents']);
        unset($context['__placeholder_jumbotron_default_contents']);        // line 13
        echo "\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  41 => 4,  36 => 10,  29 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"jumbotron\" class=\"m-t-3\">
\t<div class=\"jumbotron\">
\t\t<div class=\"container text-xs-center\">
\t\t\t{% placeholder jumbotron default %}
\t\t\t<h1 class=\"display-3\">Welcome to Mini Job MGT</h1>
\t\t\t<p class=\"lead\">Simply look for a vacant job that might interest you and click apply</p>
\t\t\t<hr class=\"m-y-2\">
\t\t\t<p>Or go to your Profile Setting.</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-lg\" href=\"{{ 'login'|page }}\" role=\"button\">Settings</a>
\t\t\t</p>
\t\t\t{% endplaceholder %}
\t\t</div>
\t</div>
</section>", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/jumbotron.htm", "");
    }
}
