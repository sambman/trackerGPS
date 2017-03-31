<?php

/* ::base.html.twig */
class __TwigTemplate_102ae4e6b526c0d8f9995e1e79e4e1a884cb8769066ebdb7d2d210c62cf6405d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body id=\"coprs\" style=\"background-color: #1F558A;color: white;\">
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "GPSTracker";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/css/myStyle.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "            <script type=\"text/javascript\" src = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Inclusion de l'API Google MAPS -->
            <!-- Le paramètre \"sensor\" indique si cette application utilise détecteur pour déterminer la position de l'utilisateur -->
            <script type=\"text/javascript\"
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB0FbpO84oKxzSYXTqYkfzlyXLRLHtLn3A&libraries=drawing,places\">
            </script>

        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  78 => 14,  64 => 7,  61 => 6,  55 => 5,  49 => 27,  42 => 13,  35 => 10,  23 => 1,  189 => 101,  186 => 100,  162 => 77,  154 => 72,  145 => 66,  131 => 54,  128 => 53,  118 => 43,  111 => 39,  99 => 29,  96 => 28,  85 => 17,  82 => 16,  75 => 13,  73 => 28,  67 => 17,  53 => 5,  50 => 4,  45 => 97,  43 => 53,  33 => 6,  239 => 104,  234 => 103,  231 => 102,  226 => 49,  219 => 29,  216 => 28,  211 => 21,  205 => 22,  200 => 21,  197 => 20,  177 => 85,  173 => 84,  164 => 78,  160 => 77,  151 => 71,  147 => 70,  138 => 64,  134 => 63,  129 => 61,  114 => 49,  98 => 36,  91 => 31,  89 => 28,  83 => 24,  81 => 20,  77 => 18,  74 => 17,  69 => 8,  62 => 13,  57 => 11,  36 => 4,  65 => 13,  56 => 10,  52 => 9,  47 => 16,  44 => 15,  39 => 51,  37 => 6,  32 => 5,  29 => 5,);
    }
}
