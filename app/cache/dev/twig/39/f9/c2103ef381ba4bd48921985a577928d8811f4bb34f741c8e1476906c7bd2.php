<?php

/* GPSTrackerBundle:Utilisateur:form_appareil.html.twig */
class __TwigTemplate_39f9c2103ef381ba4bd48921985a577928d8811f4bb34f741c8e1476906c7bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"addAppareil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addAppareil\" style=\"color:black;\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            <h2 class=\"modal-title text-info text-center\" id=\"myModalLabel\">Ajout d'un appareil</h2>
          </div>
          <div class=\"modal-body col-md-10 col-md-offset-1\">
              <form id=\"form1\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("user_accueil");
        echo "\">
                  <div class=\"form-group\">
                      ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomAppareil"), 'label', array("label_attr" => array("for" => "nomAppareil", "class" => "control-label"), "label" => "Nom"));
        echo "
                      <strong class=\"text text-danger\">*</strong>
                      ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomAppareil"), 'widget', array("attr" => array("id" => "nomAppareil", "required" => "required", "class" => "form-control")));
        echo "
                  </div>
                  <div class=\"form-group\">
                      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeAppareil"), 'label', array("label_attr" => array("for" => "code", "class" => "control-label"), "label" => "Code"));
        echo "
                      <strong class=\"text text-danger\">*</strong>
                      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codeAppareil"), 'widget', array("attr" => array("id" => "code", "required" => "required", "class" => "form-control")));
        echo "
                  </div>
                  <div class=\"form-group\">
                      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAppareil"), 'label', array("label_attr" => array("for" => "typeApp", "class" => "control-label"), "label" => "Type"));
        echo "
                      <strong class=\"text text-danger\">*</strong>
                      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeAppareil"), 'widget', array("attr" => array("id" => "typeApp", "required" => "required", "class" => "form-control")));
        echo "
                  </div>
                  <div class=\"form-group\">
                      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descAppareil"), 'label', array("label_attr" => array("for" => "descAppareil", "class" => "control-label"), "label" => "Description"));
        echo "
                      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descAppareil"), 'widget', array("attr" => array("id" => "descAppareil", "class" => "form-control")));
        echo "
                  </div>
              </form>
          </div>
          <div class=\"modal-footer\">
              <button type=\"reset\" form=\"form1\" class=\"btn btn-warning\" data-dismiss=\"modal\">Annuler</button>
              <button type=\"submit\" form=\"form1\" class=\"btn btn-success\">Enregistrer</button>
          </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "GPSTrackerBundle:Utilisateur:form_appareil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  61 => 23,  50 => 18,  45 => 16,  34 => 11,  29 => 9,  19 => 1,  160 => 76,  128 => 48,  125 => 47,  120 => 8,  106 => 35,  97 => 32,  93 => 30,  89 => 29,  81 => 23,  72 => 20,  67 => 26,  63 => 18,  60 => 17,  56 => 21,  54 => 14,  49 => 11,  46 => 9,  44 => 8,  39 => 13,  36 => 5,  33 => 4,  30 => 3,);
    }
}
