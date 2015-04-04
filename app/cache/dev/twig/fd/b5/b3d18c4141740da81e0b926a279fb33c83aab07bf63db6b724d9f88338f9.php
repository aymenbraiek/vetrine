<?php

/* SmartAnnonceBundle:Annonce:index.html.twig */
class __TwigTemplate_fdb5b3d18c4141740da81e0b926a279fb33c83aab07bf63db6b724d9f88338f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SmartAnnonceBundle::layout_annonce.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre' => array($this, 'block_titre'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartAnnonceBundle::layout_annonce.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "SmartAnnonceBundle:Categorie:index";
    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Gestion d'annonces</h1>
     
";
    }

    // line 8
    public function block_page_body($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 11
            echo "        
        <div class=\"new-anno\">
              
              
              <a href=\"\" class=\"img-new-anno\">
              ";
            // line 16
            if (($this->getAttribute($context["annonce"], "image", array()) == null)) {
                // line 17
                echo "              
                <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/no-avatar.jpg"), "html", null, true);
                echo "\" alt=\"\" width=\"151\" height=\"106\" >
              ";
            } else {
                // line 20
                echo "              <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["annonce"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "image", array()), "alt", array()), "html", null, true);
                echo " \" width=\"151\" height=\"106\" >
              ";
            }
            // line 21
            echo "  
              </a>
              
              <div class=\"desc-new-anno\">
                <h1>Titre d'annonce: <span>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</span></h1>
                <h4>
                  <span class=\"date\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateinsert", array()), "Y,m,d"), "html", null, true);
            echo "</span>
                  <span class=\"membre\">publié par: ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "user", array()), "nom", array()), "html", null, true);
            echo " </span>
                 
                  <span class=\"comment\"> 0 commentaires</span>
                </h4>
                <div class=\"cb\"></div>
                <p>
                   ";
            // line 34
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["annonce"], "description", array())), 0, 400), "html", null, true);
            echo " <a href=\"\">Lire la suite...</a>
                </p>
              </div>
              <a href=\"\" id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "\" class=\"gere supprimer\" title=\"Supprimer\">Supprimer</a>
              
              <a href=\"\" id=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "id", array()), "html", null, true);
            echo "\" class=\"a_la_une vert\" title=\"à la une\">à la une</a>
              
              <div class=\"prix\"><span></span><p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " DNT</p></div>
             
              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_annonce", array("token" => $this->getAttribute($context["annonce"], "token", array()))), "html", null, true);
            echo "\"  class=\"modifier\">Modifier annonce »</a>  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chow_annonce", array("token" => $this->getAttribute($context["annonce"], "token", array()))), "html", null, true);
            echo "\" class=\"details\">Voir annonce »</a>
            </div>
            
            <div class=\"separator-anno\"></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      
            <div class=\"pagination\">
             ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 51
            echo "             \t";
            if (($context["p"] != 0)) {
                // line 52
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_annonce", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo " class=\"pag active\"";
                } else {
                    echo " class=\"pag\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
             ";
            } elseif (((            // line 53
$context["p"] == 1) || ($context["p"] == 0))) {
                // line 54
                echo "\t\t
\t\t";
            }
            // line 56
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "            </div> 
            
               
<script src=\"http://code.jquery.com/jquery-1.7.2.js\" type=\"application/javascript\"></script>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script> 

<script type=\"text/javascript\">
\$(function() {


\$(\"a.gere.supprimer\").click(function(){
var element = \$(this);
var info = element.attr(\"id\");
var id_cat =  info;
 if(confirm(id_cat))
      {

 \$.ajax({
   type: \"POST\",
   url: \"/vetrine/web/app_dev.php/Admin/Annonce/delete\",
   data: {'id': id_cat},
   dataType: 'json',
   success: function(){
   
   
   }
 });
    
\$(this).parents(\".new-anno\").animate({ backgroundColor: \"#fbc7c7\" }, \"fast\")
    .animate({ opacity: \"hide\" }, \"slow\");
 }

return false;

});

});
</script> 
            
";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle:Annonce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 57,  176 => 56,  172 => 54,  170 => 53,  157 => 52,  154 => 51,  150 => 50,  146 => 48,  133 => 43,  128 => 41,  123 => 39,  118 => 37,  112 => 34,  103 => 28,  99 => 27,  94 => 25,  88 => 21,  80 => 20,  75 => 18,  72 => 17,  70 => 16,  63 => 11,  59 => 10,  56 => 9,  53 => 8,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
