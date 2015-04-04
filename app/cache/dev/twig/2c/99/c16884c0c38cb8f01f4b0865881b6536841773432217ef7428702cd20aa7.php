<?php

/* ::layout_front.html.twig */
class __TwigTemplate_2c99c16884c0c38cb8f01f4b0865881b6536841773432217ef7428702cd20aa7 extends Twig_Template
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
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "</head>
<body>
<div id=\"entete\">
  <div id=\"top-head\">
    <div class=\"wrapp\">
      <div id=\"menu\"> 
        <ul id=\"nav\">
          <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("homepage_front");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("front_annonce_offre");
        echo "\">Offres</a></li>
          ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 94
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("index_membre");
            echo "\">Mon compte</a></li>
          <li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">Administration</a></li>
          ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_MEMBRE")) {
            // line 97
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("index_membre");
            echo "\">Mon compte</a></li>
          
          <li><a href=\"\">Contact</a></li>
           ";
        }
        // line 101
        echo "           
         
          
         
         </ul>
      
      <!-- Login Starts Here -->
      ";
        // line 108
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 109
            echo "        <h1 id=\"laBienvenue\">Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " !</h1> 
        
        <a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" id=\"deconnexion\">Déconnexion</a>
        
      ";
        } else {
            // line 114
            echo "            
            <div id=\"loginContainer\">
                <a href=\"";
            // line 116
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" id=\"loginButton\"><span>Se connecter</span></a>
                <div style=\"clear:both\"></div>
               <!-- <div id=\"loginBox\">                
                    <form action=\"<?php echo \$_SERVER['PHP_SELF']; ?>\" method=\"post\" id=\"loginForm\">
                        <fieldset id=\"body\">
                            <fieldset>
                                <label for=\"email\">Pseudo</label>
                                <input type=\"text\" name=\"login\" id=\"Pseudo\" required>
                            </fieldset>
                            <fieldset>
                                <label for=\"password\">Mot de passe</label>
                                <input type=\"password\" name=\"pass\" id=\"password\" required>
                            </fieldset>
                            <input type=\"submit\" id=\"login\" name=\"connexion\" value=\"Connexion\" />
                        </fieldset>
                    </form>
                </div>-->
            </div>
            <!-- Login Ends Here -->
            <a href=\"";
            // line 135
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" id=\"creecompte\">Créer un compte </a>
         ";
        }
        // line 137
        echo "      </div>
      ";
        // line 138
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 139
            echo "      <a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\" title=\"\" class=\"admin\">Panel Admin »</a>
      ";
        } else {
            // line 141
            echo "      
    ";
        }
        // line 143
        echo "    </div>
  </div>
  <div class=\"wrapp\">
    <div id=\"head\">
      <div class=\"intro\">
        <p></p>
        <h1>Déposez des annonces</h1>
        <ul>
          <li> Mise en ligne simple et rapide !</li>
          <li> Ajouter vos photo !</li>
          <li> Géolocalisation des annonces !</li>
        </ul>
      </div>
      <div class=\"intro last\">
        <h1>Consultez les annonces </h1>
        <ul>
          <li> 100% GRATUIT !</li>
          <li> Recherche avancée !</li>
          <li> Contact Direct Vendeur</li>
        </ul>
      </div>
      <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("new_annonce_membre");
        echo "\" class=\"btnanno\"></a>
    </div>
  </div>
</div>
<div class=\"wrapp\">
  <div id=\"contenaire\">
    <h2 class=\"nbr_membre\">Plus de <span>15</span> membres !</h2>
    <h2 class=\"nbr_connecte\">Il y a actuellement <span>1</span> visiteur</h2>
    <div class=\"cb\"></div>
    <div class=\"cb\"></div>
    <div class=\"separator\"></div>
    <div style=\"\">
    \t";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        // line 179
        echo "    \t
    </div>
    

    
  </div>
</div>
<!-- #entete -->
<div id=\"footer\">
      <div class=\"wrapp\">
        
      </div>
</div>
<!-- /#entete -->
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/map.css"), "html", null, true);
        echo "\" type=\"text/css\" >
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/FormValid.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/selectbox.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/zoombox.css"), "html", null, true);
        echo "\">
";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "48ed673_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673_comments_1.css");
            // line 16
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        } else {
            // asset "48ed673"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_48ed673") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/48ed673.css");
            echo "<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
";
        }
        unset($context["asset_url"]);
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "<!-- js javascript -->
<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.bxSlider.min.js"), "html", null, true);
        echo "\" ></script>

<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxSlider.js"), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nav.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.selectBox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/zoombox.js"), "html", null, true);
        echo "\"></script>



<!-- js javascript interne selectBox -->
<script type=\"text/javascript\">
  \$(document).ready( function() {
    \$(\"SELECT\").selectBox();
  });
</script> 
<!-- js javascript interne zoombox -->
<script type=\"text/javascript\">
  jQuery(function(\$){
      \$('a.zoombox').zoombox();
  });
</script>
<script type=\"text/javascript\">
    \$(document).ready( function() {
      \$(\".bkg-content-top.search\").hide();
      \$(\".bkg-content-bottom.search\").hide();
      \$('.bkg-content.search').html(''); 
        \$('#ajax-loader').remove(); 
      \$('#q').keyup( function(){
        \$mot = \$(this);
        if( \$mot.val().length > 1 )
        {
        \$.ajax({
        type : 'GET', 
        url : 'recherche.php' , 
        data : 'q='+\$(this).val() , 
        beforeSend : function() { 
        \$mot.after('<img src=\"img/ajax-loader.gif\" alt=\"loader\" id=\"ajax-loader\" style=\"float:left; margin-top:15px;\"/>'); 
        },
        success : function(data){ 
        \$('#ajax-loader').remove(); 
        \$(\".bkg-content-top.search\").show();
        
        \$('.bkg-content.search').html(data); 

        \$(\".bkg-content-bottom.search\").show();
        }
        });
        }   
      });
    });
</script>
<script type=\"text/javascript\">
function myBlur(element){
   if (element.value == ''){
    element.value = element.defaultValue; 
    }
  }
</script>

";
    }

    // line 176
    public function block_body($context, array $blocks = array())
    {
        // line 177
        echo "    \t
    \t";
    }

    public function getTemplateName()
    {
        return "::layout_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 177,  355 => 176,  296 => 29,  292 => 28,  288 => 27,  284 => 26,  280 => 25,  275 => 23,  271 => 22,  268 => 21,  265 => 20,  249 => 16,  245 => 15,  241 => 14,  237 => 13,  233 => 12,  229 => 11,  225 => 10,  221 => 9,  216 => 8,  213 => 7,  207 => 4,  187 => 179,  185 => 176,  170 => 164,  147 => 143,  143 => 141,  137 => 139,  135 => 138,  132 => 137,  127 => 135,  105 => 116,  101 => 114,  95 => 111,  89 => 109,  87 => 108,  78 => 101,  70 => 97,  65 => 95,  60 => 94,  58 => 93,  54 => 92,  50 => 91,  41 => 84,  39 => 20,  36 => 19,  34 => 7,  28 => 4,  23 => 1,);
    }
}
