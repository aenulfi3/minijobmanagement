<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/job-details.htm */
class __TwigTemplate_e9b28c80fd912b189aa646d518169d8949ba5bad31ea7f995360dfeffae50cda extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h4>Job Position:
    <br>
    ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "job_title", array()), "html", null, true);
            echo "</h2>
    <h5>Company: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "company_name", array()), "html", null, true);
            echo "</h5>
    <div class=\"container text-xs-right\">
        <p>Created at ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "created_at", array()), "html", null, true);
            echo "</p>
    </div>
    
    ";
            // line 14
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 15
            echo "    <div class=\"card\" >
        <div class=\"container\" style=\"padding-top:10px\">
          <div class=\"card-body\">
            <h3 class=\"card-title\">Details</h3>
            <p class=\"card-text\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", array());
            echo "</p>
           
            <div class=\"container text-xs-center\">
                ";
            // line 22
            if (($context["user"] ?? null)) {
                // line 23
                echo "                    <div class=\"control-popup modal fade\" id=\"contentBasic\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body text-xs-left\" >
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4>Please send your email and attachments to the employer</h4>
                                    <br>
                                    <p>Company Email: ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "company_email", array()), "html", null, true);
                echo "</p>
                                    <a href=\"mailto:";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "company_email", array()), "html", null, true);
                echo "?subject=Applying for ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "job_title", array()), "html", null, true);
                echo "
                                        &body=Dear Hiring Manager,\">Send an Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <a data-toggle=\"modal\" href=\"#contentBasic\" class=\"btn btn-primary btn-lg\">
                        Apply
                    </a>
                
                     
                
                ";
            } else {
                // line 45
                echo "                    
                    <p class=\"text-danger\">To Apply, please login to your account or register a new account</p>
                ";
            }
            // line 48
            echo "            </div>
          </div>
        </div>
    </div>
   
";
        } else {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/job-details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 54,  108 => 48,  103 => 45,  84 => 31,  80 => 30,  71 => 23,  69 => 22,  63 => 19,  57 => 15,  53 => 14,  47 => 11,  42 => 9,  38 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h4>Job Position:
    <br>
    {{record.job_title}}</h2>
    <h5>Company: {{ record.company_name}}</h5>
    <div class=\"container text-xs-right\">
        <p>Created at {{ record.created_at}}</p>
    </div>
    
    {% component 'session' %}
    <div class=\"card\" >
        <div class=\"container\" style=\"padding-top:10px\">
          <div class=\"card-body\">
            <h3 class=\"card-title\">Details</h3>
            <p class=\"card-text\">{{ record.description|raw}}</p>
           
            <div class=\"container text-xs-center\">
                {% if user %}
                    <div class=\"control-popup modal fade\" id=\"contentBasic\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-body text-xs-left\" >
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                    <h4>Please send your email and attachments to the employer</h4>
                                    <br>
                                    <p>Company Email: {{ record.company_email}}</p>
                                    <a href=\"mailto:{{ record.company_email}}?subject=Applying for {{record.job_title}}
                                        &body=Dear Hiring Manager,\">Send an Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <a data-toggle=\"modal\" href=\"#contentBasic\" class=\"btn btn-primary btn-lg\">
                        Apply
                    </a>
                
                     
                
                {% else %}
                    
                    <p class=\"text-danger\">To Apply, please login to your account or register a new account</p>
                {% endif %}
            </div>
          </div>
        </div>
    </div>
   
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/pages/job-details.htm", "");
    }
}
