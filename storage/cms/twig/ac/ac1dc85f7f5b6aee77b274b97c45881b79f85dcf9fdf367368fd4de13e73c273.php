<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_d29d71502c54261238082a16bb7aefae41f9fd547e2a7313efefd6ee96290f95 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", array());
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", array());
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 7
        echo "
<form action=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("search");
        echo "\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
</form>
<br>

<p>Job list</p>
<br>

";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "

        <div class=\"record-list\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 22
            echo "               
                    ";
            // line 24
            echo "                    <h3>
                    ";
            // line 25
            ob_start();
            // line 26
            echo "                        ";
            if (($context["detailsPage"] ?? null)) {
                // line 27
                echo "                            <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                        ";
            }
            // line 29
            echo "        
                        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "job_title", array()), "html", null, true);
            echo "
        
                        ";
            // line 32
            if (($context["detailsPage"] ?? null)) {
                // line 33
                echo "                            </a>
                        ";
            }
            // line 35
            echo "                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 36
            echo "                    </h3>
                    
                     ";
            // line 38
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->source, $context["record"], "description", array()), 150));
            echo "
                
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                <div class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </div>
        
        
        
        
       
        
        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 51
            echo "            <div class=\"pagination\">
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 53
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a>
                ";
            }
            // line 55
            echo "        
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 57
                echo "                    <div class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                       <a href=\"";
                // line 58
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        
                ";
            // line 62
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()))) {
                // line 63
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a>
                ";
            }
            // line 65
            echo "            </div>
        ";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 65,  169 => 63,  167 => 62,  164 => 61,  153 => 58,  148 => 57,  144 => 56,  141 => 55,  135 => 53,  133 => 52,  130 => 51,  128 => 50,  119 => 43,  110 => 41,  102 => 38,  98 => 36,  95 => 35,  91 => 33,  89 => 32,  84 => 30,  81 => 29,  75 => 27,  72 => 26,  70 => 25,  67 => 24,  64 => 22,  59 => 21,  54 => 18,  50 => 17,  38 => 8,  35 => 7,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<form action=\"{{ 'search' | page }}\" method=\"get\">
    <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" autocomplete=\"off\">
    <button type=\"submit\">Search</button>
</form>
<br>

<p>Job list</p>
<br>

{% component 'session' %}


        <div class=\"record-list\">
            {% for record in records %}
               
                    {# Use spaceless tag to remove spaces inside the A tag. #}
                    <h3>
                    {% spaceless %}
                        {% if detailsPage %}
                            <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                        {% endif %}
        
                        {{ record.job_title }}
        
                        {% if detailsPage %}
                            </a>
                        {% endif %}
                    {% endspaceless %}
                    </h3>
                    
                     {{ html_limit(record.description, 150)|raw }}
                
            {% else %}
                <div class=\"no-data\">{{ noRecordsMessage }}</div>
            {% endfor %}
        </div>
        
        
        
        
       
        
        {% if records.lastPage > 1 %}
            <div class=\"pagination\">
                {% if records.currentPage > 1 %}
                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a>
                {% endif %}
        
                {% for page in 1..records.lastPage %}
                    <div class=\"{{ records.currentPage == page ? 'active' : null }}\">
                       <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
                    </div>
                {% endfor %}
        
                {% if records.lastPage > records.currentPage %}
                    <a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a>
                {% endif %}
            </div>
        {% endif %}", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
