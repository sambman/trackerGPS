<?php

/* GPSTrackerBundle::layout.html.twig */
class __TwigTemplate_82c34ea065c9c50506cafd722f720ed99228f5bb8c0d5fca088c744e2dd9574f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'userMenu' => array($this, 'block_userMenu'),
            'menuDeroulant' => array($this, 'block_menuDeroulant'),
            'carousel' => array($this, 'block_carousel'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('menu', $context, $blocks);
        // line 51
        echo "
    <div class=\"row\" style=\"margin-top:60px;\">
    ";
        // line 53
        $this->displayBlock('carousel', $context, $blocks);
        // line 97
        echo "    </div>
";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "    <nav class=\"navbar navbar-inverse  navbar-fixed-top\" role=\"navigation\" id=\"enteteUser\">
        <div class=\"navbar-header pull-right\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navig\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navig\">
            <a class=\"navbar-brand\">GPSTracker</a>
            ";
        // line 17
        $this->displayBlock('userMenu', $context, $blocks);
        // line 26
        echo "
            <!--Menu deroulant-->
            ";
        // line 28
        $this->displayBlock('menuDeroulant', $context, $blocks);
        // line 47
        echo "        </div>

    </nav>
    ";
    }

    // line 17
    public function block_userMenu($context, array $blocks = array())
    {
        // line 18
        echo "                <ul class=\"nav navbar-nav\">
                     <li>
                         <a href=\"#\">
                             <span class=\"glyphicon glyphicon-pencil\" data-toggle=\"modal\" data-target=\"#addAppareil\">AddAppareil</span>
                         </a>
                     </li>
                </ul>    
            ";
    }

    // line 28
    public function block_menuDeroulant($context, array $blocks = array())
    {
        // line 29
        echo "                <div class=\"col-md-offset-10\">
                    <ul class=\"nav navbar-nav navbar-left\">
                        <li class=\"dropdown\">
                          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                              <span class=\"caret\"></span>
                              <span class=\"glyphicon glyphicon-user\"></span>
                          </a>
                          <ul class=\"dropdown-menu\">
                            <li><a href=\"#\"><span class=\"glyphicon glyphicon-cog info\"> Configuration</span></a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("gps_tracker_homepage");
        echo "\">D&eacute;connexion</a></li>
                          </ul>
                        </li>
                        <!--Infos sur l'utilisateur connecté-->
                        <span class=\"text text-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"), "prenom"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method"), "nom"), "html", null, true);
        echo "</span>
                     </ul>
                </div>
             ";
    }

    // line 53
    public function block_carousel($context, array $blocks = array())
    {
        // line 54
        echo "        <!--Carousel pour l'accueil de la page de connexion-->
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    \t  <!-- Indicators -->
    \t  <ol class=\"carousel-indicators\">
    \t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    \t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
    \t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
    \t  </ol>

    \t  <!-- Wrapper for slides -->
    \t  <div class=\"carousel-inner\" role=\"listbox\">
    \t\t<div class=\"item active col-md-offset-3\">
    \t\t  <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/images/img1.jpeg"), "html", null, true);
        echo "\">
    \t\t  <div class=\"carousel-caption\">
    \t\t </div>
    \t\t</div>

    \t\t<div class=\"item col-md-offset-3\">
    \t\t  <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/images/img2.jpg"), "html", null, true);
        echo "\">
    \t\t  <div class=\"carousel-caption\">
    \t\t  </div>
    \t\t</div>
    \t\t<div class=\"item\">
    \t\t  <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/gpstracker/images/img3.jpg"), "html", null, true);
        echo "\">
    \t\t  <div class=\"carousel-caption\">
    \t\t  </div>
    \t\t</div>


    \t  </div>

    \t  <!-- Controls -->
    \t  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    \t\t<span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    \t\t<span class=\"sr-only\">Previous</span>
    \t  </a>
    \t  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    \t\t<span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    \t\t<span class=\"sr-only\">Next</span>
    \t  </a>
    \t</div>

    ";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <!--Inclusion du code qui demarre le carousel-->
    <script type=\"text/javascript\">
        \$('.carousel').carousel({
            interval: 4000
        });
     </script>
";
    }

    public function getTemplateName()
    {
        return "GPSTrackerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 101,  186 => 100,  162 => 77,  154 => 72,  145 => 66,  131 => 54,  128 => 53,  118 => 43,  111 => 39,  99 => 29,  96 => 28,  85 => 18,  82 => 17,  75 => 47,  73 => 28,  67 => 17,  53 => 5,  50 => 4,  45 => 97,  43 => 53,  33 => 3,  239 => 104,  234 => 103,  231 => 102,  226 => 49,  219 => 29,  216 => 28,  211 => 21,  205 => 22,  200 => 21,  197 => 20,  177 => 85,  173 => 84,  164 => 78,  160 => 77,  151 => 71,  147 => 70,  138 => 64,  134 => 63,  129 => 61,  114 => 49,  98 => 36,  91 => 31,  89 => 28,  83 => 24,  81 => 20,  77 => 18,  74 => 17,  69 => 26,  62 => 13,  57 => 11,  36 => 4,  65 => 13,  56 => 10,  52 => 9,  47 => 8,  44 => 7,  39 => 51,  37 => 6,  32 => 5,  29 => 4,);
    }
}
