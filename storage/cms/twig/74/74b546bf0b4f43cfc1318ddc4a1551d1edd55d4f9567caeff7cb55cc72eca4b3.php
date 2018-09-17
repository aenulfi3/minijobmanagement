<?php

/* C:\xampp\htdocs\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/user-update.htm */
class __TwigTemplate_d0855032e32d1171a8a92530fe121a997f4cf575d1991735d21eb2413d5c91a4 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), array("ajax", "onUpdate"));
        echo "

    <h1>Welcome back ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo " !</h1>


    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label> 
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <div class=\"form-group\">
        <label>Facebook Name</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label>Bio</label>
        <textarea name=\"bio\" type=\"text\" class=\"form-control\" >";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bio", array()), "html", null, true);
        echo "</textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 38
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/user-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 38,  70 => 33,  62 => 28,  44 => 13,  36 => 8,  28 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate') }}

    <h1>Welcome back {{ user.name }} !</h1>


    <div class=\"form-group\">
        <label for=\"accountName\">Full Name</label>
        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label> 
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPassword\">New Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountPasswordConfirm\">Confirm New Password</label>
        <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
    </div>

    <div class=\"form-group\">
        <label>Facebook Name</label>
        <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
    </div>

    <div class=\"form-group\">
        <label>Bio</label>
        <textarea name=\"bio\" type=\"text\" class=\"form-control\" >{{ user.bio }}</textarea>
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}", "C:\\xampp\\htdocs\\minijobmanagement/themes/hambern-hambern-blank-bootstrap-4/partials/user-update.htm", "");
    }
}
