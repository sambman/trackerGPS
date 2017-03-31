<?php

/* GPSTrackerBundle:Utilisateur:accueil.html.twig */
class __TwigTemplate_4b50b5a0dffac6ee8892610f678bbc1444efa19628d339fb504f47a7a05c2c78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("GPSTrackerBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'carousel' => array($this, 'block_carousel'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->env->loadTemplate("GPSTrackerBundle:Utilisateur:form_appareil.html.twig")->display($context);
        // line 5
        echo "
    ";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        $this->displayBlock('carousel', $context, $blocks);
        // line 9
        echo "
    ";
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils"))) != 0)) {
            // line 15
            echo "                <h3 class=\"text text-default\"><span class=\"glyphicon glyphicon-list\">Appareils</span></h3>
            ";
        }
        // line 17
        echo "            <div class=\"list-group\">
            ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appareils"]) ? $context["appareils"] : $this->getContext($context, "appareils")));
        foreach ($context['_seq'] as $context["_key"] => $context["appareil"]) {
            // line 19
            echo "                <a href=\"#\" class=\"list-group-item indexeur\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "codeAppareil"), "html", null, true);
            echo "\">
                    <span>";
            // line 20
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["appareil"]) ? $context["appareil"] : $this->getContext($context, "appareil")), "nomAppareil")), "html", null, true);
            echo "</span>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appareil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </div>

        </div>
        <div  class=\"col-md-7\">
            <!--Affichage du message de suuces-->
            <div class=\"row\">
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashBag"), "get", array(0 => "addAppSuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 30
            echo "                    <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <strong>";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "</strong>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
            </div>

            <div class=\"row\" id=\"googleMap\">
                <!--place de la carte googleMAP-->
            </div>

        </div>

    </div>
";
    }

    // line 8
    public function block_carousel($context, array $blocks = array())
    {
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">

        var mapCoords;//variable qui contient le mapping
        var chemin;
        var pointsCoords = Array();//trace du chemin dans la carte googleMap
        var map;//variable googleMAP

        function initialize() {
               mapCoords = {
                center:new google.maps.LatLng(14.6820574,-17.466410999999994),
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
            map=new google.maps.Map(document.getElementById(\"googleMap\"),mapCoords);
        }
        google.maps.event.addDomListener(window, 'load', initialize);

        //script pour le suivi d'un appareil GPS
        \$(document).ready(function(){
            \$(\".indexeur\").click(function(){
                //reinitialiser la carte
                if(chemin){
                    chemin.setMap(null);
                    pointsCoords = Array();

                }


                \$(\".indexeur\").removeClass('active glyphicon glyphicon-eye-open');

                \$(this).addClass('active glyphicon glyphicon-eye-open');

                var appareil = \$(\".glyphicon-eye-open\");//variable symbolisant l'appareil dans la partie JS
                console.log(appareil.attr('id'));

                //demarrage de la requete AJAX permettant de faire l'affichage du trajet
                //setInterval(function(){},1500);
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 88
        echo $this->env->getExtension('routing')->getPath("user_accueil");
        echo "',
                    data: {codeApp: appareil.attr('id')},
                    timeout: 10000,
                    dataType: 'json',

                    beforeSend: function(){
                        console.log(\"requete en cours\");
                    },

                    success: function(data){
                        console.log(data);
                        var liste = \$.parseJSON(data);
                        console.log(liste);

                        //transformation des donnees reçues
                        for (var i=0 ; i < liste.length  ; i++){
                            pointsCoords.push({lat : parseFloat(liste[i].lat) , lng : parseFloat(liste[i].lng)});
                        }
                        console.log(pointsCoords);
                        chemin = new google.maps.Polyline({
                          path: pointsCoords,
                          geodesic: true,
                          strokeColor: '#000000',
                          strokeOpacity: 1.0,
                          strokeWeight: 2
                        });

                        chemin.setMap(map);
                    },
                    error: function(xhr,status,error){
                        console.log(\"Erreur de la requete\");
                    }
                });

                }
            );


        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "GPSTrackerBundle:Utilisateur:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 88,  128 => 48,  125 => 47,  120 => 8,  106 => 35,  97 => 32,  93 => 30,  89 => 29,  81 => 23,  72 => 20,  67 => 19,  63 => 18,  60 => 17,  56 => 15,  54 => 14,  49 => 11,  46 => 9,  44 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
