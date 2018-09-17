<?php

/* C:\xampp\htdocs\minijobmanagement/plugins/netsti/uploader/components/imageuploader/image-single.htm */
class __TwigTemplate_6a2022dc0afcf571aa1c77e70e072dc6aa73425087912c06a623250dd188f9de extends Twig_Template
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
        $context["file"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "singleFile", array());
        // line 2
        echo "
<div
    class=\"responsiv-uploader-fileupload style-image-single ";
        // line 4
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isPopulated", array(), "method")) ? ("is-populated") : (""));
        echo "\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    data-unique-id=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    data-thumbnail-width=\"";
        // line 8
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageWidth", array())) ? (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageWidth", array())) : ("0")), "html", null, true);
        echo "\"
    data-thumbnail-height=\"";
        // line 9
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageHeight", array())) ? (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "imageHeight", array())) : ("0")), "html", null, true);
        echo "\"
    ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", array())) {
            echo "data-file-types=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", array()), "html", null, true);
            echo "\"";
        }
        // line 11
        echo ">

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "attribute", array()), "html", null, true);
        echo "]\" value=\"\" />

    <!-- Add New Image -->
    <a
        href=\"javascript:;\"
        style=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getCssBlockDimensions", array()), "html", null, true);
        echo "\"
        class=\"upload-button\">
        <i class=\"fa fa-plus\"></i>
    </a>

    <!-- Existing file -->
    <div class=\"upload-files-container\">
        ";
        // line 26
        if (($context["file"] ?? null)) {
            // line 27
            echo "            <div class=\"upload-object is-success\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "id", array()), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "pathUrl", array()), "html", null, true);
            echo "\">
                <div class=\"icon-container image\">
                    <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "thumbUrl", array()), "html", null, true);
            echo "\" alt=\"\" />
                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "title", array())) ? (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "title", array())) : (twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "file_name", array()))), "html", null, true);
            echo "</span>
                        <a
                            href=\"javascript:;\"
                            class=\"upload-remove-button\"
                            data-request=\"";
            // line 37
            echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
            echo "\"
                            data-request-confirm=\"Are you sure?\"
                            data-request-data=\"file_id: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "id", array()), "html", null, true);
            echo "\"
                            >&times;</a>
                    </h4>
                    <p class=\"size\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "sizeToString", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"meta\"></div>
            </div>
        ";
        }
        // line 47
        echo "    </div>

</div>

<!-- Template for new file -->
<script type=\"text/template\" id=\"uploaderTemplate";
        // line 52
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container image\">
            <img data-dz-thumbnail style=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getCssDimensions", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
                <a
                    href=\"javascript:;\"
                    class=\"upload-remove-button\"
                    data-request=\"";
        // line 63
        echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
        echo "\"
                    data-request-confirm=\"Are you sure?\"
                    >&times;</a>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\minijobmanagement/plugins/netsti/uploader/components/imageuploader/image-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 63,  135 => 55,  129 => 52,  122 => 47,  114 => 42,  108 => 39,  103 => 37,  96 => 33,  89 => 29,  81 => 27,  79 => 26,  69 => 19,  61 => 14,  56 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set file = __SELF__.singleFile %}

<div
    class=\"responsiv-uploader-fileupload style-image-single {{ __SELF__.isPopulated() ? 'is-populated' }}\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate{{ __SELF__ }}\"
    data-unique-id=\"{{ __SELF__ }}\"
    data-thumbnail-width=\"{{ __SELF__.imageWidth ?: '0' }}\"
    data-thumbnail-height=\"{{ __SELF__.imageHeight ?: '0' }}\"
    {% if __SELF__.fileTypes %}data-file-types=\"{{ __SELF__.fileTypes }}\"{% endif %}
>

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[{{ __SELF__.attribute }}]\" value=\"\" />

    <!-- Add New Image -->
    <a
        href=\"javascript:;\"
        style=\"{{ __SELF__.getCssBlockDimensions }}\"
        class=\"upload-button\">
        <i class=\"fa fa-plus\"></i>
    </a>

    <!-- Existing file -->
    <div class=\"upload-files-container\">
        {% if file %}
            <div class=\"upload-object is-success\" data-id=\"{{ file.id }}\" data-path=\"{{ file.pathUrl }}\">
                <div class=\"icon-container image\">
                    <img src=\"{{ file.thumbUrl }}\" alt=\"\" />
                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>{{ file.title ?: file.file_name }}</span>
                        <a
                            href=\"javascript:;\"
                            class=\"upload-remove-button\"
                            data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                            data-request-confirm=\"Are you sure?\"
                            data-request-data=\"file_id: {{ file.id }}\"
                            >&times;</a>
                    </h4>
                    <p class=\"size\">{{ file.sizeToString }}</p>
                </div>
                <div class=\"meta\"></div>
            </div>
        {% endif %}
    </div>

</div>

<!-- Template for new file -->
<script type=\"text/template\" id=\"uploaderTemplate{{ __SELF__ }}\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container image\">
            <img data-dz-thumbnail style=\"{{ __SELF__.getCssDimensions }}\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
                <a
                    href=\"javascript:;\"
                    class=\"upload-remove-button\"
                    data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                    data-request-confirm=\"Are you sure?\"
                    >&times;</a>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
", "C:\\xampp\\htdocs\\minijobmanagement/plugins/netsti/uploader/components/imageuploader/image-single.htm", "");
    }
}
