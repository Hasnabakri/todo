<?php

/* tpexamBundle:Default:listtaches.html.twig */
class __TwigTemplate_a553ade7bc7a12d3440965c0901a415a61f0d689ffe2103d695433ee3a0f2ecc extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<meta name=\"viewport\" content=\"width=device-width, user-scalable=yes\" />

<style>
.ss{
     \twidth: 250px;
\tmargin: 50px  10px 40px 150px;
\tbackground: #fff;
\tpadding: 20px;
\tborder-radius: 15px;
\t-moz-border-radius: 15px;
\t-webkit-border-radius: 15px;
\tbox-shadow: 0 0 15px #0066CC;
\t-moz-box-shadow: 0 0 15px #0066CC;
\t-webkit-box-shadow: 0 0 15px #0066CC;
}

@media screen and (max-width:1000px) {
    #bar1,
    #bar2 {
        width: 39%;
    }
    
    .sidebar {
        float: left;
        margin: 0 0 20px 1%;
        padding: 0;
    }
}
@media screen and (max-width:540px) {
    #bar1,
    #bar2 {
        clear: both;
        width: 100%;
    }
    
    .sidebar {
        float: left;
        margin: 0 0 20px 1%;
        padding: 0;
    }
    
    #content {
        clear: both;
        width: 100%;
    }
    
    #content .bloc {
        margin: 0;
    }
}

</style>

<div class=\"ss\">
<p><h2>TODO.COM</h2>

<p><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("ajoutertache");
        echo "\"><h2>+</h2></a><p>
A faire :
<ul> 
";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tache"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 65
            echo "  
  <li>  <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("listune", array("id" => $this->getAttribute($this->getContext($context, "p"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "intitule"), "html", null, true);
            echo " </a></br>


 ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "\tAucune tâche n'a été trouvée.
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
 <h2>copyright..</h2>

</div>
";
    }

    public function getTemplateName()
    {
        return "tpexamBundle:Default:listtaches.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 72,  114 => 70,  103 => 66,  100 => 65,  95 => 64,  89 => 61,  31 => 5,  28 => 4,);
    }
}
