<?php

/* GPSTrackerBundle:Utilisateur:index.html.twig */
class __TwigTemplate_b569816c3d006cc9c68206877489a24ecb9884462151f86ecb8d3fc1a9793822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GPSTrackerBundle:Utilisateur:connexion.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'error_connect' => array($this, 'block_error_connect'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GPSTrackerBundle:Utilisateur:connexion.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 6
        $this->displayBlock('error_connect', $context, $blocks);
        // line 14
        echo "
";
    }

    // line 6
    public function block_error_connect($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "error_connect"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <strong>";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</strong>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
    }

    public function getTemplateName()
    {
        return "GPSTrackerBundle:Utilisateur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  56 => 10,  52 => 8,  47 => 7,  44 => 6,  39 => 14,  37 => 6,  32 => 5,  29 => 4,);
    }
}
