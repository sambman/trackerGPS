<?php

/* GPSTrackerBundle:Utilisateur:connexion.html.twig */
class __TwigTemplate_1c74449d2a649ac706bd0a4d70dd344ddfabd1a0e4c6e5690856bc2fe4345f22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GPSTrackerBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menuDeroulant' => array($this, 'block_menuDeroulant'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'userMenu' => array($this, 'block_userMenu'),
            'carousel' => array($this, 'block_carousel'),
            'error_connect' => array($this, 'block_error_connect'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GPSTrackerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Connexion-utilisateur
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 9
        $this->displayBlock('menuDeroulant', $context, $blocks);
        echo "<!--Redefinition du menu deroulant sans modification-->

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/css/connReset.css"), "html", null, true);
        echo "\">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/css/connexion.css"), "html", null, true);
        echo "\">

";
    }

    // line 9
    public function block_menuDeroulant($context, array $blocks = array())
    {
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        ";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 24
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-md-7\">
            ";
        // line 28
        $this->displayBlock('carousel', $context, $blocks);
        // line 31
        echo "        </div>
        <div class=\"containerConn col-md-2\">
          <div class=\"card\"></div>
          <div class=\"card\">
            <h1 class=\"title text-center\">Connexion</h1>
            <form method=\"POST\" action=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">
              <div class=\"input-container\">
                <input type=\"text\" id=\"Login\" required=\"required\" name=\"login\"/>
                <label for=\"Login\">Login</label>

                <div class=\"bar\"></div>
              </div>
              <div class=\"input-container\">
                <input type=\"password\" id=\"Password\" required=\"required\" name=\"password\"/>
                <label for=\"Password\">Password</label>
                <div class=\"bar\"></div>
              </div>

              ";
        // line 49
        $this->displayBlock('error_connect', $context, $blocks);
        echo "<!--block qui contient l'erreur de connexion-->

              <div class=\"button-container\">
                <button type=\"submit\"><span>OK</span></button>
              </div>
            </form>
          </div>
          <div class=\"card alt\">
            <div class=\"toggle\"></div>
            <h1 class=\"title\">Inscription
              <div class=\"close\"></div>
            </h1>
            <form method=\"POST\" action=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("user_inscription");
        echo "\">
              <div class=\"input-container\">
                  ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("id" => "Prenom", "required" => "required")));
        echo "
                  ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', array("label_attr" => array("for" => "Prenom"), "label" => "Prenom"));
        echo "
                <!--<input type=\"text\" id=\"Prenom\" required=\"required\"/>
                <label for=\"Prenom\">Prenom</label>-->
                <div class=\"bar\"></div>
              </div>
              <div class=\"input-container\">
                  ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("id" => "Nom", "required" => "required")));
        echo "
                  ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', array("label_attr" => array("for" => "Nom"), "label" => "Nom"));
        echo "
                <!--<input type=\"text\" id=\"Nom\" required=\"required\"/>
                <label for=\"Nom\">Nom</label>-->
                <div class=\"bar\"></div>
              </div>
              <div class=\"input-container\">
                  ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'widget', array("attr" => array("id" => "Login", "required" => "required")));
        echo "
                  ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login"), 'label', array("label_attr" => array("for" => "Login"), "label" => "Login"));
        echo "
                <!--<input type=\"text\" id=\"Login\" required=\"required\"/>
                <label for=\"Login\">Login</label>-->
                <div class=\"bar\"></div>
              </div>
              <div class=\"input-container\">
                  ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("id" => "Password", "required" => "required", "type" => "password")));
        echo "
                  ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'label', array("label_attr" => array("for" => "Password"), "label" => "Password"));
        echo "
                <!--<input type=\"password\" id=\"Password\" required=\"required\"/>
                <label for=\"Password\">Password</label>-->
                <div class=\"bar\"></div>
              </div>
              <div class=\"button-container\">
                <button type=\"submit\" ><span>Next</span></button>
              </div>
            </form>
          </div>
        </div>
    </div>

</div>

";
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        $this->displayBlock('userMenu', $context, $blocks);
        echo "<!--Redefinition sans implementation du block userMenu-->
            ";
        // line 22
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
        ";
    }

    // line 21
    public function block_userMenu($context, array $blocks = array())
    {
    }

    // line 28
    public function block_carousel($context, array $blocks = array())
    {
        // line 29
        echo "                ";
        $this->displayParentBlock("carousel", $context, $blocks);
        echo "
            ";
    }

    // line 49
    public function block_error_connect($context, array $blocks = array())
    {
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        // line 103
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/js/connexion.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "GPSTrackerBundle:Utilisateur:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 104,  234 => 103,  231 => 102,  226 => 49,  219 => 29,  216 => 28,  211 => 21,  205 => 22,  200 => 21,  197 => 20,  177 => 85,  173 => 84,  164 => 78,  160 => 77,  151 => 71,  147 => 70,  138 => 64,  134 => 63,  129 => 61,  114 => 49,  98 => 36,  91 => 31,  89 => 28,  83 => 24,  81 => 20,  77 => 18,  74 => 17,  69 => 9,  62 => 13,  57 => 11,  36 => 3,  65 => 13,  56 => 10,  52 => 9,  47 => 8,  44 => 7,  39 => 4,  37 => 6,  32 => 5,  29 => 4,);
    }
}
