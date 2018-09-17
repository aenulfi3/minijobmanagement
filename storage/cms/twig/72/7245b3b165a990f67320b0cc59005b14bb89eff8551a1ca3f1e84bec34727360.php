<?php

/* C:\xampp\htdocs\minijobmanagement/plugins/netsti/uploader/components/imageuploader/default.htm */
class __TwigTemplate_5d6363999cfca6edd4b591ee4669c17dd147a17956ab3ee5492865e0e75d8e3f extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isMulti", array())) {
            // line 2
            echo "
    ";
            // line 3
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::image-multi")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "
";
        } else {
            // line 6
            echo "
    ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::image-single")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/plugins/netsti/uploader/components/imageuploader/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if __SELF__.isMulti %}

    {% partial __SELF__ ~ '::image-multi' %}

{% else %}

    {% partial __SELF__ ~ '::image-single' %}

{% endif %}", "C:\\xampp\\htdocs\\minijobmanagement/plugins/netsti/uploader/components/imageuploader/default.htm", "");
    }
}
