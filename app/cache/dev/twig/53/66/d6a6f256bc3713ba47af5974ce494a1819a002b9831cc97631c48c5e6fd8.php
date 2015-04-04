<?php

/* SmartAnnonceBundle:Front:index.html.twig */
class __TwigTemplate_5366d6a6f256bc3713ba47af5974ce494a1819a002b9831cc97631c48c5e6fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SmartAnnonceBundle::layout_front.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_body' => array($this, 'block_page_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmartAnnonceBundle::layout_front.html.twig";
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
    public function block_page_body($context, array $blocks = array())
    {
        // line 6
        echo "


    <div class=\"separator\"></div>
    
    
    
    
     
   
    <div class=\"bkg-content-top\"></div>
    <div class=\"bkg-content\">
      <h1 class=\"title\">Annonces gratuites à la une</h1>
      <div class=\"cb\"></div>
      <div class=\"separator2\"></div>
      
      
      <div class=\"slider-content\">
        <div id=\"slider1\">
          <?php while(\$slides = mysql_fetch_array(\$slide)) {?>
          <div>
            <div class=\"slide-img\">
              <a href=\"fiche-anno.php?id=<?php echo \$slides['id']; ?>\"><img src=\"img/img_anno/250x255/<?php echo \$slides['photoA']; ?>\" alt=\"\" style=\"width:230px;height:164px\"></a>
            </div>
            <div class=\"infos\">
              <p><?php echo \$slides['titre']; ?></p>
              <p><?php echo \$slides['prix']; ?> DNT</p>
              <p><?php echo \$slides['ville']; ?></p>
              <p><?php echo \$slides['tel']; ?></p>
            </div>
          </div>
          
          
          <?php } ?>
        </div>
      </div>
    </div>
    <div class=\"bkg-content-bottom\"></div>
    <div class=\"bkg-content-top\"></div>
    <div class=\"bkg-content\">
      <h1 class=\"title\">Les annonces par thème</h1>
      <h1 class=\"title last\">Les annonces de votre région</h1>
      <div class=\"cb\"></div>

      <div class=\"separator2\"></div>
      <!-- Les annonces par thème -->
      <div class=\"annos\">

      <div class=\"anno\">
        <a href=\"par-theme/Vehicules.php\"><img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/auto.png"), "html", null, true);
        echo "\" alt=\"Auto-moto\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Vehicules.php\" title=\"\">Véhicules</a>(<?php echo \$nbr_Auto['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Voiture</li>
            <li>» Camion</li>
            <li>» Moto</li> 
            <li>» Bateaux - Nautisme</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/immobilier.php\"><img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/immobilier.png"), "html", null, true);
        echo "\" alt=\"Immobilier\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/immobilier.php\" title=\"\">Immobilier</a> (<?php echo \$nbr_Auto['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Terrains</li>
            <li>» Commerces</li>
            <li>» Maison</li>
            <li>» Appartements</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Gsm images & Son.php\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/iPhone.png"), "html", null, true);
        echo "\" alt=\"Gsm images & Son\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Gsm images & Son.php\" title=\"\">Gsm images & Son </a> (<?php echo \$nbr_Gsm['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» GSM</a></li>
            <li>» DVD</li>
            <li>» Télévisions</li>
            <li>» Appareil photos et caméscope</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Informatique.php\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/imac wave reflet.png"), "html", null, true);
        echo "\" alt=\"Informatique\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Informatique.php\" title=\"\">Informatique</a> (<?php echo \$nbr_Informatique['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Portables</li>
            <li>» PC de bureau</li>
            <li>» Composantes</li>
            <li>» Périphériques et Logiciels</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Emploi & Stages.php\"><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/emploi_imagelarge.png"), "html", null, true);
        echo "\" alt=\"Emploi & Stages\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Emploi & Stages.php\" title=\"\">Emploi & Stages</a> (<?php echo \$nbr_Emploi['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Offres d'emploi</li>
            <li>» Recherche d'emploi</li>
            <li>» Stages</li>
            <li>» Formations</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Vetement.php\"><img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/00W027676A.png"), "html", null, true);
        echo "\" alt=\"Vêtement\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Vetement.php\" title=\"\">Vêtement</a> (<?php echo \$nbr_Vetement['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Hommes</li>
            <li>» Femmes</li>
            <li>» Enfants</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Cours.php\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/pile-de-livres.png"), "html", null, true);
        echo "\" alt=\"Cours\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Cours.php\" title=\"\">Cours</a> (<?php echo \$nbr_Cours['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Cours de Langue</li>
            <li>» Cours particuliers</li>
            <li>» Cours Informatique</li>
            <li>» Musique - Théâtre - Danse</li>
          </ul>
        </div>
      </div>

      <div class=\"anno\">
        <a href=\"par-theme/Animaux.php\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/noir-chien-sirius-icone-7310-64.png"), "html", null, true);
        echo "\" alt=\"Animaux\"></a>
        <div class=\"sous-anno\">
          <h2 class=\"title-anno\"><a href=\"par-theme/Animaux.php\" title=\"\">Animaux </a>(<?php echo \$nbr_Animaux['nbr']; ?>)</h2>
          <ul class=\"listeAnno\">
            <li>» Chiens</li>
            <li>» Chats</li>
            <li>» Chevaux ...</li>
          </ul>
        </div>
      </div>
      
      </div>

      <!--carte-tunisie-->
      <div class=\"map\">
        <img alt=\"carte-tunisie\" usemap=\"#carte-tunisie\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/void.png"), "html", null, true);
        echo "\">
        <map id=\"carte-tunisie\" name=\"carte-tunisie\">
        <area alt=\"Bizert\" href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 4));
        echo "\"  shape=\"poly\" coords=\"110,28,115,26,117,23,119,21,124,23,129,22,133,19,137,19,140,17,145,16,150,16,153,14,155,15,156,16,159,15,161,16,163,19,166,20,171,21,173,19,174,20,175,22,178,22,182,24,184,25,181,27,178,27,178,29,175,32,168,46,166,44,159,42,156,43,152,46,141,51,137,54,134,59,131,59,128,56,130,51,127,49,125,47,123,45,120,40,118,36,113,36,111,34,111,31,111,29,110,29\">
        <area alt=\"béja\" href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 2));
        echo "\"  shape=\"poly\" coords=\"140,52,134,60,129,58,129,55,131,51,129,49,126,48,119,36,113,36,112,33,112,29,109,29,101,38,103,41,102,42,104,45,106,50,103,51,102,54,104,57,107,58,108,58,109,62,110,66,111,71,110,75,109,79,107,79,114,85,117,83,125,85,127,87,131,80,140,80,143,83,149,80,153,80,157,75,161,70,157,64,151,59,147,57,141,52,140,52\">
        <area alt=\"Jendouba\" href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 7));
        echo "\"  shape=\"poly\" coords=\"99,38,93,42,89,42,84,42,83,47,86,50,85,53,80,55,73,56,74,59,74,62,72,66,65,70,61,73,55,75,54,76,55,78,59,78,63,79,68,80,69,83,68,86,68,88,77,83,92,82,100,80,104,79,107,79,109,76,110,71,108,65,107,58,103,56,101,54,103,51,104,49,103,46,102,43,102,40,101,39,99,38\">
        <area alt=\"Kef\" href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 11));
        echo "\"  shape=\"poly\" coords=\"67,137,60,130,60,127,61,119,63,114,63,108,65,104,65,100,65,97,66,94,66,91,68,88,77,83,92,82,96,81,99,80,101,80,104,85,104,91,107,97,109,103,116,107,113,116,107,127,107,134,102,132,89,128,84,128,83,131,81,137,76,138,72,136,69,137,67,140,67,137\">
        <area alt=\"Siliana\" href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 19));
        echo "\"  shape=\"poly\" coords=\"151,80,145,81,142,82,139,80,130,80,128,83,126,86,124,85,121,84,118,84,115,84,113,85,110,82,107,80,104,79,101,80,104,85,103,90,108,97,108,102,113,105,115,107,115,112,113,116,110,122,107,126,107,132,109,137,112,140,114,140,117,142,120,144,125,146,126,150,131,148,134,148,133,145,129,141,124,135,123,132,126,132,130,134,133,133,136,131,138,131,138,130,137,127,137,124,138,118,145,112,151,107,153,107,153,105,154,103,153,99,148,98,143,95,145,93,151,88,153,84,153,82,151,80\">
        <area alt=\"Zaghouan\" href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 24));
        echo "\"  shape=\"poly\" coords=\"152,106,154,103,154,99,151,98,146,97,144,95,143,93,145,92,148,90,151,88,152,85,153,82,152,79,156,73,161,70,163,68,165,65,167,65,169,67,171,69,174,69,178,72,180,75,183,75,184,78,185,80,187,79,190,78,190,81,191,85,193,86,191,91,192,93,190,94,186,95,186,97,185,100,181,102,178,103,177,105,174,106,173,110,171,111,164,107,161,106,159,107,156,107,153,107,152,106,152,106,152,106\">
        <area alt=\"manouba\" href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 13));
        echo "\"  shape=\"poly\" coords=\"166,44,161,42,156,43,153,46,147,48,141,51,144,54,149,58,153,59,157,64,160,68,161,70,165,65,167,65,170,63,173,59,171,57,171,55,171,51,169,49,167,47,167,45,166,44\">
        <area alt=\"Tunis\" href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 23));
        echo "\"  shape=\"poly\" coords=\"178,30,175,32,169,43,168,47,169,49,172,51,172,54,172,55,178,56,183,54,187,50,190,50,189,47,185,43,182,40,181,37,181,35,183,32,181,31,180,30,178,30\">
        <area alt=\"Ben Arous\" href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 3));
        echo "\"  shape=\"poly\" coords=\"193,59,190,57,189,52,188,50,184,54,180,56,174,56,171,55,173,59,171,62,167,66,171,68,174,69,179,72,180,75,182,76,184,78,186,80,188,78,190,78,191,76,192,72,192,68,193,66,194,62,194,60,193,59\">
        <area alt=\"Nabeul\" href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 16));
        echo "\"  shape=\"poly\" coords=\"191,78,192,73,193,70,192,68,193,65,196,60,201,57,204,54,207,48,212,47,219,45,226,39,227,35,231,34,235,33,236,36,238,40,240,46,239,50,235,54,229,61,223,72,221,79,218,79,214,79,212,81,207,82,204,82,203,84,198,84,193,84,191,85,191,82,191,79\">
        <area alt=\"Monastir\" href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 15));
        echo "\"  shape=\"poly\" coords=\"233,138,224,134,222,132,222,129,223,128,220,127,217,128,214,128,211,128,210,132,210,135,210,137,208,140,205,141,200,143,199,143,204,146,212,150,214,151,219,151,222,151,224,148,233,144,234,142,235,140,234,139,233,138\">
        <area alt=\"Sousse\" href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 20));
        echo "\"  shape=\"poly\" coords=\"201,84,199,85,198,85,197,85,194,84,193,85,193,88,191,91,193,93,193,94,189,94,187,95,186,99,181,103,180,107,185,110,185,115,182,121,180,125,188,141,189,142,199,143,207,140,210,138,209,133,211,129,213,126,207,119,203,112,200,107,199,96,201,91,203,86,202,84\">
        <area alt=\"Kairouan\" href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 8));
        echo "\"  shape=\"poly\" coords=\"173,110,174,105,176,106,178,104,180,103,181,104,180,107,182,108,184,109,185,111,184,116,182,121,180,125,184,134,187,139,188,142,187,143,185,144,185,146,184,150,181,157,181,160,181,162,182,168,185,171,184,173,180,175,172,184,170,175,168,174,164,174,158,173,153,172,149,169,145,164,141,163,139,161,136,157,136,151,134,147,127,138,124,134,124,132,126,132,129,134,133,134,136,131,138,131,137,128,137,127,137,125,137,123,138,118,142,115,152,107,159,107,163,107,170,110,171,111,173,111,173,110\">
        <area alt=\"Kasserine\" href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 9));
        echo "\"  shape=\"poly\" coords=\"96,202,107,196,109,194,108,192,110,188,112,185,118,184,122,182,123,178,122,169,117,167,116,165,117,162,120,160,122,156,125,154,126,151,125,146,120,145,118,144,116,140,112,139,107,134,102,134,90,129,86,128,84,130,82,132,81,136,80,138,76,138,72,136,69,138,67,141,67,148,68,150,65,152,64,160,65,163,68,165,74,166,71,169,70,172,68,176,65,180,64,186,62,190,60,193,61,196,61,200,64,203,64,205,77,211,80,207,86,205,96,202\">
        <area alt=\"Gafsa\" href=\"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 6));
        echo "\"  shape=\"poly\" coords=\"51,220,56,216,58,213,60,211,59,206,63,205,66,206,70,207,77,211,81,207,92,204,95,203,104,206,110,206,116,208,122,210,125,210,123,214,124,218,130,222,138,227,141,230,142,238,138,241,134,242,129,240,126,240,123,243,116,243,110,244,105,250,98,249,94,251,85,250,79,251,65,250,62,245,57,243,55,243,51,240,46,234,47,231,50,229,51,228,49,226,50,221,51,220\">
        <area alt=\"Tozeur\" href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 22));
        echo "\"  shape=\"poly\" coords=\"49,221,43,225,35,229,34,235,32,242,26,243,20,244,19,247,20,253,16,253,15,263,15,267,16,273,18,279,19,286,28,299,52,283,59,277,73,267,80,260,85,250,80,251,65,250,65,247,61,244,55,243,50,239,45,234,46,230,51,229,49,225,50,221\">
        <area alt=\"Tataouine\" href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 21));
        echo "\"  shape=\"poly\" coords=\"167,355,165,350,165,343,168,339,166,334,167,333,167,330,164,325,173,324,180,319,185,321,197,314,208,312,210,315,207,315,215,318,234,327,236,332,241,338,239,343,240,354,244,357,255,366,260,367,256,371,249,376,245,382,234,387,224,394,221,400,216,404,210,404,210,411,203,421,198,423,193,422,182,434,177,442,187,469,188,484,182,496,175,506,170,510,165,520,156,524,144,530,143,528,117,417,114,398,68,367,68,366,67,363,85,360,104,356,120,356,137,351,147,345,151,344,156,348,166,356,167,355,167,356\">
        <area alt=\"Mednine\" href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 14));
        echo "\"  shape=\"poly\" coords=\"246,381,255,379,266,374,268,364,264,357,264,340,265,329,267,320,263,317,256,318,244,315,241,310,243,305,239,301,240,303,233,304,229,306,223,301,232,299,239,297,240,290,234,284,229,285,229,289,219,296,213,292,215,288,216,280,218,277,222,276,225,279,227,279,233,274,235,273,235,270,231,268,228,266,223,266,219,264,216,267,216,273,216,277,212,279,208,282,207,284,199,284,194,287,188,297,184,298,177,303,175,305,170,307,165,309,158,309,154,310,158,314,164,314,165,323,165,324,172,324,179,319,184,320,198,313,209,312,209,316,233,326,241,337,239,348,240,354,255,366,260,367,248,377,246,381,246,381,246,381\">
        <area alt=\"Gabés\" href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 5));
        echo "\"  shape=\"poly\" coords=\"153,309,144,297,140,294,143,289,142,286,138,283,135,282,132,280,126,273,125,267,123,262,123,253,127,250,128,248,126,246,123,243,126,240,130,240,134,242,138,241,144,237,148,237,151,239,154,242,160,241,166,247,168,243,170,244,171,255,178,267,191,279,197,283,198,284,193,288,188,297,180,301,170,307,156,309,153,309,153,309,153,309\">
        <area alt=\"Kebili\" href=\"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 10));
        echo "\"  shape=\"poly\" coords=\"66,362,65,357,64,345,51,322,47,322,35,315,33,317,31,317,30,314,28,312,27,305,29,299,51,284,55,281,59,277,73,267,80,260,85,250,94,251,99,249,104,250,105,250,110,245,117,244,123,244,127,248,123,254,124,265,128,275,134,282,141,285,143,289,140,294,158,314,164,314,165,323,164,327,167,329,168,332,166,334,168,339,165,344,167,355,165,355,153,345,148,344,136,351,121,354,118,355,103,355,79,361,69,363,66,361\">
        <area alt=\"Mehdia\" href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 12));
        echo "\"  shape=\"poly\" coords=\"234,177,235,175,236,172,239,171,239,168,241,166,237,163,235,160,235,154,236,147,234,144,229,146,224,148,222,151,219,151,214,151,208,148,201,145,198,143,189,143,188,144,185,144,185,147,185,149,182,154,180,160,182,163,182,168,185,172,185,173,191,175,195,177,198,175,202,171,205,170,207,168,210,166,213,168,216,168,218,165,221,167,221,172,223,174,226,172,228,174,229,176,230,177,232,177,234,176\">
        <area alt=\"Sfax\" href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 17));
        echo "\"  shape=\"poly\" coords=\"174,182,180,176,185,174,193,176,196,177,201,172,204,170,207,171,209,167,212,168,216,168,218,165,221,167,221,171,222,173,225,174,226,173,228,175,232,177,234,179,231,185,228,187,228,190,228,193,226,195,225,197,224,199,221,200,218,203,216,207,216,210,214,210,213,211,209,211,207,214,208,217,207,218,200,218,198,220,196,223,194,225,192,226,189,227,188,227,188,229,184,231,182,231,180,233,176,236,171,243,170,244,168,243,167,245,166,246,164,245,160,241,155,242,155,239,152,234,154,233,160,228,162,229,163,227,167,226,171,223,173,220,171,217,165,215,159,214,159,208,171,185,174,182\">
        <area alt=\"Sidi Bouzid\" href=\"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("front_annonce_region", array("id" => 18));
        echo "\"  shape=\"poly\" coords=\"127,150,130,148,134,148,137,152,136,158,139,162,145,164,149,169,154,173,159,173,164,174,169,173,171,178,172,184,166,196,160,206,158,212,159,215,163,215,166,215,169,216,172,218,173,221,166,227,162,229,156,231,151,234,154,238,155,241,154,241,149,237,143,237,142,238,141,230,135,226,125,218,123,214,125,210,121,210,112,207,103,207,96,203,97,201,109,194,108,192,109,189,112,185,116,184,118,184,121,183,122,181,123,178,123,171,121,169,117,168,116,166,116,163,120,160,122,157,124,154,126,151,127,150\">
        </map>
      </div>
      <div class=\"cb\"></div>
      <div class=\"separator2\"></div>
      <h1 class=\"title\">Les dernières annonces</h1>
      <div class=\"cb\"></div>
      <div class=\"separator2\"></div>
     ";
        // line 192
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) ? $context["annonces"] : $this->getContext($context, "annonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 193
            echo "      <div class=\"new-anno\">
        ";
            // line 194
            if (($this->getAttribute($context["annonce"], "image", array()) == null)) {
                // line 195
                echo "         <a href=\"\" class=\"img-new-anno\">
          <img src=\"";
                // line 196
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/no-avatar.jpg"), "html", null, true);
                echo "\" alt=\"\" >
        </a>
        ";
            } else {
                // line 199
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["annonce"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" class=\"img-new-anno\" width=\"151\" height=\"106\">
          <img src=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["annonce"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"\" width=\"151\" height=\"106\" >
        </a>
        ";
            }
            // line 203
            echo "        <div class=\"desc-new-anno\">
          <h1>               <span>";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "titre", array()), "html", null, true);
            echo "</span></h1>
          <h4>
            <span class=\"date\">";
            // line 206
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annonce"], "dateinsert", array()), "d,m,Y"), "html", null, true);
            echo "</span>
            <span class=\"membre\">publié par ";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["annonce"], "user", array()), "username", array()), "html", null, true);
            echo "</a></span>
            
            <span class=\"comment\"> nbr commentaires</span>
          </h4>
          <div class=\"cb\"></div>
          <h2>
             ";
            // line 213
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["annonce"], "description", array())), 0, 400), "html", null, true);
            echo " <a href=\"\">Lire la suite...</a>Lire la suite...</a>
            <?php } ?>
          </h2>
        </div>
        
          <div class=\"prix\"><span></span><p>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute($context["annonce"], "prix", array()), "html", null, true);
            echo " DNT</p></div>
     
        <a href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("front_annonce_detail", array("token" => $this->getAttribute($context["annonce"], "token", array()))), "html", null, true);
            echo "\" class=\"details\">Voir annonce »</a>
      </div>
      <div class=\"separator-anno\"></div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "      <div class=\"pagination\">
             ";
        // line 225
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nombrePage"]) ? $context["nombrePage"] : $this->getContext($context, "nombrePage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 226
            echo "             \t";
            if (($context["p"] != 0)) {
                // line 227
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage_front", array("page" => $context["p"])), "html", null, true);
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
            } elseif (((            // line 228
$context["p"] == 1) || ($context["p"] == 0))) {
                // line 229
                echo "\t\t
\t\t";
            }
            // line 231
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "            </div> 
      <div class=\"cb\"></div>
    </div>
    <div class=\"bkg-content-bottom\"></div>
";
    }

    public function getTemplateName()
    {
        return "SmartAnnonceBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 232,  432 => 231,  428 => 229,  426 => 228,  413 => 227,  410 => 226,  406 => 225,  403 => 224,  393 => 220,  388 => 218,  380 => 213,  371 => 207,  367 => 206,  362 => 204,  359 => 203,  353 => 200,  348 => 199,  342 => 196,  339 => 195,  337 => 194,  334 => 193,  330 => 192,  319 => 184,  315 => 183,  311 => 182,  307 => 181,  303 => 180,  299 => 179,  295 => 178,  291 => 177,  287 => 176,  283 => 175,  279 => 174,  275 => 173,  271 => 172,  267 => 171,  263 => 170,  259 => 169,  255 => 168,  251 => 167,  247 => 166,  243 => 165,  239 => 164,  235 => 163,  231 => 162,  226 => 160,  208 => 145,  192 => 132,  177 => 120,  161 => 107,  145 => 94,  129 => 81,  113 => 68,  97 => 55,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
