<?php

/* SmartAnnonceBundle:Annonce:chow.html.twig */
class __TwigTemplate_e6dd9ec87a21dd94d6f51255f64c5bc765b77b4a7516845e2b88208126e61252 extends Twig_Template
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
        echo "<h1>Gestion d'annonces:<span> Détail Annonce </span></h1>
";
    }

    // line 7
    public function block_page_body($context, array $blocks = array())
    {
        // line 8
        echo "       
             <div class=\"new-anno\">
              
              
              <a href=\"\" class=\"img-new-anno\">
              ";
        // line 13
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "image", array()) == null)) {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/no-avatar.jpg"), "html", null, true);
            echo "\" alt=\"\" >
              ";
        } else {
            // line 16
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "image", array()), "alt", array()), "html", null, true);
            echo " \" width=\"151\" height=\"106\" >
              ";
        }
        // line 17
        echo "  
              </a>
             
              <div class=\"desc-new-anno\">
                <h1>Titre d'annonce: <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre", array()), "html", null, true);
        echo "</span></h1>
                <h4>
                  <span class=\"date\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "dateinsert", array()), "Y,m,d"), "html", null, true);
        echo "</span>
                  <span class=\"membre\">publié par:";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "user", array()), "nom", array()), "html", null, true);
        echo "</span>
                 
                  <span class=\"comment\"> 0 commentaires</span>
                </h4>
                <div class=\"cb\"></div>
                <p>
                   ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description", array()), "html", null, true);
        echo " 
                </p>
              </div>
              <a href=\"\" id=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "\" class=\"gere supprimer\" title=\"Supprimer\">Supprimer</a>
              
              <a href=\"\" id=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id", array()), "html", null, true);
        echo "\" class=\"a_la_une vert\" title=\"à la une\">à la une</a>
              
              <div class=\"prix\"><span></span><p>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix", array()), "html", null, true);
        echo " DNT</p></div>
             
                <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chow_annonce", array("token" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "token", array()))), "html", null, true);
        echo "\" class=\"details\">Voir annonce »</a>
            </div>
            
            <div class=\"separator-anno\"></div>
";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle:Annonce:chow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 37,  113 => 35,  108 => 33,  102 => 30,  93 => 24,  89 => 23,  84 => 21,  78 => 17,  70 => 16,  64 => 14,  62 => 13,  55 => 8,  52 => 7,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
