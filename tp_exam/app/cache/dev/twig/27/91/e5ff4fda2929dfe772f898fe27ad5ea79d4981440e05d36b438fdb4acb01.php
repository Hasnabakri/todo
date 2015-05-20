<?php

/* tpexamBundle:Default:listunetache.html.twig */
class __TwigTemplate_2791e5ff4fda2929dfe772f898fe27ad5ea79d4981440e05d36b438fdb4acb01 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<style>
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

</style>

<div class=\"ss\">
    <h2>TODO.COM</h2>
<p><ul>
 <h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tache"), "intitule"), "html", null, true);
        echo " : </h3> <br>
<li>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tache"), "description"), "html", null, true);
        echo " <br>
<li>A faire avant le <br/>
\t";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "tache"), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo " <br>
  <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("list");
        echo "\">Retour</a></br>
  <h2>copyright..</h2>
</p>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "tpexamBundle:Default:listunetache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  61 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,);
    }
}
