<?php

/* SmartAnnonceBundle::layout_annonce.html.twig */
class __TwigTemplate_905a29365f9f853c50a594e89abc4aaed371374322661f10e38cea8568d4f493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout_admin.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'titre' => array($this, 'block_titre'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_admin.html.twig";
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        // line 9
        echo "<div class=\"separ\"></div>
            <div class=\"liens anno\">
              <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("new_annonce");
        echo "\" title=\"\" class=\"ajouAnno\">Ajouter une annonce</a><h3>Ajouter une annonce</h3>
              <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("index_annonce");
        echo "\" title=\"\" class=\"ajouAnno list\">Liste des annonces</a><h3>Liste des annonces</h3>
             
              <div class=\"cb\"></div>
   </div>
";
        // line 16
        $this->displayBlock('page_body', $context, $blocks);
    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    // line 16
    public function block_page_body($context, array $blocks = array())
    {
        // line 17
        echo "

";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle::layout_annonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  77 => 16,  72 => 7,  69 => 6,  65 => 16,  58 => 12,  54 => 11,  50 => 9,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
