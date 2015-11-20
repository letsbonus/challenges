<?php

/* ImportBundle:Default:list.html.twig */
class __TwigTemplate_34b1780d861bf4221b4d5749c0864d448c5e06a3ddec6fa0ae46800e078797d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ImportBundle:Default:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1>Listado de productos y comerciantes</h1>
            </div>
            <div>
                <table style=\"width: 100%\">
                <tr><td></td><td style=\"text-aling: center;\">Lista Comercial</td><td></td>
                <tr><td>Nombre comercial</td><td></td><td>Total de Productos</td>
                <tr></tr>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["merchants"]) ? $context["merchants"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["merchant"]) {
            // line 15
            echo "                    <tr>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["merchant"], "name", array()), "html", null, true);
            echo "</td>
                        <td></td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productsMerchant"]) ? $context["productsMerchant"] : null), $this->getAttribute($context["merchant"], "id", array()), array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['merchant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </table>
            </div>
            <div>
                <table style=\"width: 100%\">
                <tr><td></td><td>Lista Productos</td><td></td></tr>
                <tr>
                <td>Fecha</td><td></td><td>Total productos</td>
                </tr>
                <tr></tr>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productCount"]) ? $context["productCount"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 31
            echo "                    <tr>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
                    <td></td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["product"]), "html", null, true);
            echo "</td>
                    <tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </table>
            </div>
        </div>
        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("import_homepage");
        echo "\">HOME</a>
    </div>
";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 45
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "ImportBundle:Default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  109 => 44,  102 => 40,  97 => 37,  88 => 34,  83 => 32,  80 => 31,  76 => 30,  65 => 21,  56 => 18,  51 => 16,  48 => 15,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1>Listado de productos y comerciantes</h1>*/
/*             </div>*/
/*             <div>*/
/*                 <table style="width: 100%">*/
/*                 <tr><td></td><td style="text-aling: center;">Lista Comercial</td><td></td>*/
/*                 <tr><td>Nombre comercial</td><td></td><td>Total de Productos</td>*/
/*                 <tr></tr>*/
/*                 {% for merchant in merchants %}*/
/*                     <tr>*/
/*                         <td>{{ merchant.name }}</td>*/
/*                         <td></td>*/
/*                         <td>{{productsMerchant[merchant.id]}}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*             <div>*/
/*                 <table style="width: 100%">*/
/*                 <tr><td></td><td>Lista Productos</td><td></td></tr>*/
/*                 <tr>*/
/*                 <td>Fecha</td><td></td><td>Total productos</td>*/
/*                 </tr>*/
/*                 <tr></tr>*/
/*                 {% for key, product in productCount %}*/
/*                     <tr>*/
/*                     <td>{{key}}</td>*/
/*                     <td></td>*/
/*                     <td>{{product|length}}</td>*/
/*                     <tr>*/
/*                 {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*         <a href="{{ path('import_homepage') }}">HOME</a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
