<?php

/* SmartAnnonceBundle:Annonce:new.html.twig */
class __TwigTemplate_087dca5d3b17f69f04831cc5c89bd82eb67849e6ec714d34122ac6e3f96b0f70 extends Twig_Template
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
        echo "<h1>Gestion d'annonces:<span> Nouveau Annonce </span></h1>
";
    }

    // line 7
    public function block_page_body($context, array $blocks = array())
    {
        // line 8
        echo "       ";
        $this->env->loadTemplate("SmartAnnonceBundle:Annonce:form.html.twig")->display($context);
        // line 9
        echo "           
";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle:Annonce:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 8,  52 => 7,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
