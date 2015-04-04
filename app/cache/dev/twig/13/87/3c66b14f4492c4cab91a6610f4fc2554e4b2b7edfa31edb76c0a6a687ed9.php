<?php

/* SmartAnnonceBundle:Categorie:index.html.twig */
class __TwigTemplate_13873c66b14f4492c4cab91a6610f4fc2554e4b2b7edfa31edb76c0a6a687ed9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SmartAnnonceBundle::layout_categorie.html.twig");
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
        return "SmartAnnonceBundle::layout_categorie.html.twig";
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
        echo "<h1>Gestion Categorie</h1>
";
    }

    // line 7
    public function block_page_body($context, array $blocks = array())
    {
        // line 8
        echo "    
            <table>
              <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Intitulé </th>
                <th scope=\"col\">etat</th>
                <th scope=\"col\">action</th>
              </tr>
              ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "               <tr class=\"tr\">
               <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</td>
               ";
            // line 20
            if (($this->getAttribute($context["categorie"], "etat", array()) == 0)) {
                // line 21
                echo "               <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/rejected.png"), "html", null, true);
                echo "\" alt=\"\" /></td>
               ";
            } else {
                // line 23
                echo "               <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/check.png"), "html", null, true);
                echo "\" alt=\"\" /></td>
               ";
            }
            // line 25
            echo "               <td>
                  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_categorie", array("token" => $this->getAttribute($context["categorie"], "token", array()))), "html", null, true);
            echo "\" class=\"\">modifie</a>
                  <a href=\"#\" id=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "id", array()), "html", null, true);
            echo "\" class=\"supp\" style=\"margin-left:20px;\">supprimer</a>
                </td>
               </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              </table>

<script src=\"http://code.jquery.com/jquery-1.7.2.js\" type=\"application/javascript\"></script>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script> 

<script type=\"text/javascript\">
\$(function() {


\$(\".supp\").click(function(){
var element = \$(this);
var info = element.attr(\"id\");
var id_cat =  info;
 if(confirm(\"Supprimer cet categories ?\"))
      {

 \$.ajax({
   type: \"POST\",
   url: \"/vetrine/web/app_dev.php/Admin/Categorie/delete\",
   data: {'id': id_cat},
   dataType: 'json',
   success: function(){
   
   
   }
 });
    
\$(this).parents(\".tr\").animate({ backgroundColor: \"#fbc7c7\" }, \"fast\")
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
        return "SmartAnnonceBundle:Categorie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 31,  101 => 27,  97 => 26,  94 => 25,  88 => 23,  82 => 21,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  65 => 16,  55 => 8,  52 => 7,  47 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
