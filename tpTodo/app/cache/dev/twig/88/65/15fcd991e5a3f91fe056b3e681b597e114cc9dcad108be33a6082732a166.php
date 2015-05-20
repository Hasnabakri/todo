<?php

/* tpexamBundle:Default:addUtilisateur.html.twig */
class __TwigTemplate_886515fcd991e5a3f91fe056b3e681b597e114cc9dcad108be33a6082732a166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
ID=";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "utilisateur"), "id"), "html", null, true);
        echo " <br/>
Nom=";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "utilisateur"), "nom"), "html", null, true);
        echo "<br/>
Prenom=";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "utilisateur"), "prenom"), "html", null, true);
        echo "<br/>
password=";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "utilisateur"), "password"), "html", null, true);
        echo "<br/>

";
    }

    public function getTemplateName()
    {
        return "tpexamBundle:Default:addUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  42 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
