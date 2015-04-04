<?php

/* ::layout_admin.html.twig */
class __TwigTemplate_03ccf0c79b07541ce57489374db339076f9710015c08eeeb2e789e91ef08fe48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<!-- css Style -->
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "<!-- js javascript -->
";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
        echo "</head>
<body>
  <div class=\"entete\">
    <a href=\"\" class=\"retour\">voir site</a>
  </div><!-- / entete-->
  <div class=\"centent\">
    <div class=\"wrapp2\">
      <div class=\"barreMenu\">
        <h1>Administration |</h1>
        <ul class=\"menu\">
          <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" title=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("index_annonce");
        echo "\" title=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Gestion d'annonces</a></li>
          <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("index_categorie");
        echo "\" title=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Gestion categorie</a></li>
          <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("index_user_membre");
        echo "\" title=\"\">Gestion des membres</a></li>
          <li><a href=\"\" title=\"\">Gestion des messages</a></li>
          <li><a href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("index_user_admin");
        echo "\" title=\"\">Administration</a></li>

</ul>
        <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" title=\"\" class=\"logout\">Déconnecté</a><a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" title=\"\" class=\"logout\">Mon profile </a>
      </div>
      <div class=\"left\">
        <div id=\"\" class=\"nav\">
          <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/accueil.png"), "html", null, true);
        echo "\" alt=\"\">
        </div><!-- / nav-->
      </div><!-- / left-->
      <div class=\"right\">
        <div class=\"contenu\">
          <h2>Tableau de bord</h2>
           <div class=\"tab\">
            <ul>
              <li><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("index_annonce");
        echo "\" title=\"\"><span>nbr ann</span>annonces</a></li>
              <li><div id=\"nombre\"></div><a href=\"\" title=\"\"><span>nbr msg</span>messages</a></li>
              <li><a href=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("index_user_membre");
        echo "\" title=\"\"><span>nbr mbr</span>membres</a></li>
              <li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("index_user_admin");
        echo "\" title=\"\"><span>nbr admin</span>admin</a></li>
            </ul>
          </div> 
          <div style=\"min-height:600px;\">
  ";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "           </div>
        </div>
      </div><!-- / right-->
    </div><!-- / wrapp2-->
  </div><!-- / centent-->
</body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil ";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/selectbox.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/FormValid.css"), "html", null, true);
        echo "\">
<link type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/atooltip.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"  media=\"screen\" >

";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectBox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.atooltip.js"), "html", null, true);
        echo "\"></script>
<!-- js javascript interne selectBox -->
<script type=\"text/javascript\">
  \$(document).ready( function() {
    \$(\"SELECT\").selectBox();
  });
</script>
<!-- aToolTip js -->
<script type=\"text/javascript\">
      \$(function(){ 
         \$('a.gere').aToolTip({
            fixed: true
        });
        
      }); 
</script>
<script type=\"text/javascript\">
      \$(function(){ 
         \$('a.a_la_une.gris').aToolTip({
            fixed: true
        });
        
      }); 
</script>

<script type=\"text/javascript\">
  \$(document).ready(function(){
      
      \$('a.a_la_une.gris').click(function(){
        var id = \$(this).attr(\"id\");
        var string = 'id='+ id ;
      \$.ajax({
        type: \"POST\",
        url: 'a_la_une.php',
        data: string,
        cache: false,
        success: function(data)
        {
          
        }
      });
      return false;
      });
        
    });
</script>
<script type=\"text/javascript\">
  \$(document).ready(function(){
      
      \$('a.a_la_une.vert').click(function(){
        var id = \$(this).attr(\"id\");
        var string = 'id='+ id ;
      \$.ajax({
        type: \"POST\",
        url: 'supp_a_la_une.php',
        data: string,
        cache: false,
        success: function(data)
        {
          
        }
      });
      return false;
      });
        
    });
</script>
";
    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        // line 125
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 125,  248 => 124,  176 => 19,  172 => 18,  167 => 17,  164 => 16,  157 => 12,  153 => 11,  149 => 10,  145 => 9,  140 => 8,  137 => 7,  131 => 4,  120 => 126,  118 => 124,  111 => 120,  107 => 119,  102 => 117,  91 => 109,  82 => 105,  76 => 102,  71 => 100,  65 => 99,  59 => 98,  53 => 97,  41 => 87,  39 => 16,  36 => 15,  34 => 7,  28 => 4,  23 => 1,);
    }
}
