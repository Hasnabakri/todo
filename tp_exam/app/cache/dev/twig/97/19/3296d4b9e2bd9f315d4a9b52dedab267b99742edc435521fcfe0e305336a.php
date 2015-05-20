<?php

/* tpexamBundle:Default:newtache.html.twig */
class __TwigTemplate_97193296d4b9e2bd9f315d4a9b52dedab267b99742edc435521fcfe0e305336a extends Twig_Template
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

<table>
<tr>
<td><h3>
TODO.COM
</h3>
</td>
</tr>
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "<br>
<tr>
<td> Ajouter une chose à faire :</td>
</tr>
<tr>
<td> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intitule"), 'widget');
        echo "</td>
<td> ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "intitule"), 'errors');
        echo "</td>
</tr>
<tr>
<td> Description de la chose à faire:</td>
</tr>
<tr>
<td> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'widget');
        echo "</td>
<td> ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "description"), 'errors');
        echo "</td>
</tr>
<tr>
<td> Faire au plus tard:</td>
</tr>
<tr>
<td> ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget');
        echo "</td>
<td> ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "</td>
</tr>
<tr>
<td> ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Valider"), 'widget');
        echo "
<a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("list");
        echo "\">";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Retour"), 'widget');
        echo "</a></td>

</tr>
</table>


";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "tpexamBundle:Default:newtache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  105 => 51,  101 => 50,  95 => 47,  91 => 46,  82 => 40,  78 => 39,  69 => 33,  65 => 32,  57 => 27,  31 => 3,  28 => 2,);
    }
}
