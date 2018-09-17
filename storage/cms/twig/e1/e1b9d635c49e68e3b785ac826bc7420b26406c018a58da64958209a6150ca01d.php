<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/login.htm */
class __TwigTemplate_1dbda68a5369ba9701098934da89aa64d27804d3febc7b06715163d14198512f extends Twig_Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "

\t<div class=\"row\">

\t\t<div class=\"col-md-6\">
\t\t\t<h3>Sign in</h3>
\t\t\t";
            // line 8
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "\t\t</div>

\t\t<div class=\"col-md-6\">
\t\t\t";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "\t\t</div>

\t</div>

";
        } else {
            // line 18
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "<h4>Upload Your Profile Pic</h4>
";
            // line 20
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("imageUploader"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("user-update"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  64 => 21,  60 => 20,  57 => 19,  53 => 18,  46 => 13,  42 => 12,  37 => 9,  33 => 8,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}


\t<div class=\"row\">

\t\t<div class=\"col-md-6\">
\t\t\t<h3>Sign in</h3>
\t\t\t{% partial account~ '::signin' %}
\t\t</div>

\t\t<div class=\"col-md-6\">
\t\t\t{% partial account~ '::register' %}
\t\t</div>

\t</div>

{% else %}
{% partial account ~ '::activation_check' %}
<h4>Upload Your Profile Pic</h4>
{% component 'imageUploader'%}
{% partial 'user-update' %}
{% partial account ~ '::deactivate_link' %}
{% endif %}", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/login.htm", "");
    }
}
