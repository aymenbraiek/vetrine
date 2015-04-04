<?php

/* SmartAnnonceBundle::layout_front.html.twig */
class __TwigTemplate_3907d5956417d54676a01739b659c4496d7d519483096e7d2da9e6dd54c67947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout_front.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'titre' => array($this, 'block_titre'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_front.html.twig";
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

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxSlider.min.js"), "html", null, true);
        echo "\" ></script>

<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxSlider.js"), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectBox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoombox.js"), "html", null, true);
        echo "\"></script>


<script type=\"text/javascript\">
// thread id
var fos_comment_thread_id = 'foo';
 
// api base url to use for initial requests
var fos_comment_thread_api_base_url = 'vetrine/web/app_dev.php/api/threads';
 
// Snippet for asynchronously loading the comments
(function() {
    var fos_comment_script = document.createElement('script');
    fos_comment_script.async = true;
    fos_comment_script.src = 'vetrine/web/app_dev.php/js/35a8e64_comments_1.js';
    fos_comment_script.type = 'text/javascript';
 
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(fos_comment_script);
})();
</script>

<script type=\"text/javascript\">
  \$(document).ready( function() {
    \$(\"SELECT\").selectBox();
  });
</script>
";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "

";
        // line 47
        $this->displayBlock('titre', $context, $blocks);
        // line 50
        echo "

";
        // line 52
        $this->displayBlock('page_body', $context, $blocks);
        // line 61
        echo "

";
    }

    // line 47
    public function block_titre($context, array $blocks = array())
    {
        // line 48
        echo "
";
    }

    // line 52
    public function block_page_body($context, array $blocks = array())
    {
        // line 53
        echo "<div id=\"fos_comment_thread\"></div>

 




";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle::layout_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  139 => 52,  134 => 48,  131 => 47,  125 => 61,  123 => 52,  119 => 50,  117 => 47,  113 => 45,  110 => 44,  79 => 15,  75 => 14,  71 => 13,  67 => 12,  63 => 11,  58 => 9,  54 => 8,  49 => 7,  46 => 6,  40 => 3,  11 => 1,);
    }
}
