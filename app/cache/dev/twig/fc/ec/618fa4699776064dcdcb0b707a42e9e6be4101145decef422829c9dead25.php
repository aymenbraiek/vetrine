<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fcec618fa4699776064dcdcb0b707a42e9e6be4101145decef422829c9dead25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo " ";
        // line 5
        echo "    <div class=\"bkg-content-top\"></div>
    <div class=\"bkg-content\">
      <h1 class=\"title\">Connectez-vous: <span>Déposez vos annonces</span></h1>
      <div class=\"cb\"></div>
      <div class=\"separator2\"></div>
      <div class=\"bloc\">
       
        <div class=\"cb\"></div>
        <div id=\"inscrire\">
          <h2>Entrez vos informations ci-dessous </h2>
          <p class=\"error\">
          ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            echo " 
          <div>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 19
        echo "\t\t  </p>
       
          
          
         



<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"form\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t
\t
\t<div class=\"input\">
    <label for=\"username\">Pseudo</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t    <div class=\"cb\" ></div>
    </div class=\"input\">
    
    <div class=\"input\">        
    <label for=\"password\">Mot de passe</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t<div class=\"cb\" ></div>
    </div class=\"input\">
    
    <div class=\"input\">
    <label for=\"remember_me\">Garder ma session active</label>
    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" style=\"margin-left: 100px; margin-top:10px;\"  />
    
\t<div class=\"cb\" ></div>
    </div class=\"input\">
    <div class=\"input\">
    <input type=\"submit\" id=\"btninscrire\" name=\"_submit\" value=\"Connecté\"  />
    </div>
</form>
        </div>
      </div>
    </div>
    <div class=\"bkg-content-bottom\"></div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  77 => 28,  73 => 27,  63 => 19,  58 => 17,  54 => 16,  41 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
