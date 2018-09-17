<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_8327f2d1fb33b9e2d751cbfa2af531a53b094523ad2c780c7743af71616b05a0 extends Twig_Template
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
        echo "<section id=\"navbar\" class=\"m-b-3\" >
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\" >
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Mini Job Mgt</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "home")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "about")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 12
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "contact")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact Us</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item";
        // line 16
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()) == "login")) ? (" active") : (""));
        echo "\" style=\"margin-right:5px\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">
\t\t\t\t\t";
        // line 18
        if ( !($context["user"] ?? null)) {
            // line 19
            echo "\t\t\t\t\t    login
\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t    My Profile
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t            ";
        // line 26
        if (($context["user"] ?? null)) {
            echo "  
\t\t            ";
            // line 27
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 28
            echo "\t\t\t\t        <button class=\"btn btn-primary \" type=\"submit\"  data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</button>
\t\t\t\t    ";
        }
        // line 30
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  92 => 28,  88 => 27,  84 => 26,  79 => 23,  75 => 21,  71 => 19,  69 => 18,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3\" >
\t<nav class=\"navbar navbar-dark bg-inverse navbar-fixed-top\" >
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Mini Job Mgt</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'home' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'about' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'about'|page }}\">About</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'contact' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact Us</a>
\t\t\t\t</li>
\t\t\t\t
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'login' ? ' active' }}\" style=\"margin-right:5px\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'login'|page }}\">
\t\t\t\t\t{% if not user %}
\t\t\t\t\t    login
\t\t\t\t\t{% else %}
\t\t\t\t\t    My Profile
\t\t\t\t\t{% endif %}
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t
\t\t            {% if user %}  
\t\t            {% component 'session' %}
\t\t\t\t        <button class=\"btn btn-primary \" type=\"submit\"  data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</button>
\t\t\t\t    {% endif %}
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
