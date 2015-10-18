<?php

/* letsbonus/show_results.html.twig */
class __TwigTemplate_5ad519cca3dda1ab879da022e6575581d0db47624ddfc546b865c8b5a174758e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_letsbonus.html.twig", "letsbonus/show_results.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout_letsbonus.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d3bc0519a0241f256de4c213b2a88253c129aeebba942604a3cf6128c1fba2f = $this->env->getExtension("native_profiler");
        $__internal_1d3bc0519a0241f256de4c213b2a88253c129aeebba942604a3cf6128c1fba2f->enter($__internal_1d3bc0519a0241f256de4c213b2a88253c129aeebba942604a3cf6128c1fba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "letsbonus/show_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3bc0519a0241f256de4c213b2a88253c129aeebba942604a3cf6128c1fba2f->leave($__internal_1d3bc0519a0241f256de4c213b2a88253c129aeebba942604a3cf6128c1fba2f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f55e152276ee624bbda2157340a6d427f0165430fe131a765b7e18fa83fa780f = $this->env->getExtension("native_profiler");
        $__internal_f55e152276ee624bbda2157340a6d427f0165430fe131a765b7e18fa83fa780f->enter($__internal_f55e152276ee624bbda2157340a6d427f0165430fe131a765b7e18fa83fa780f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
                
            Product for month:<br>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_by_month"]) ? $context["products_by_month"] : $this->getContext($context, "products_by_month")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "                El ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["product"], "date", array()), "m-d-Y"), "html", null, true);
            echo " have ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "number", array()), "html", null, true);
            echo " products.<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            
            <hr>
            
            Product for merchant:<br>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products_by_merchant"]) ? $context["products_by_merchant"] : $this->getContext($context, "products_by_merchant")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "merchant_name", array()), "html", null, true);
            echo " have ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "number", array()), "html", null, true);
            echo " products.<br>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            
        </div>
    </div>
";
        
        $__internal_f55e152276ee624bbda2157340a6d427f0165430fe131a765b7e18fa83fa780f->leave($__internal_f55e152276ee624bbda2157340a6d427f0165430fe131a765b7e18fa83fa780f_prof);

    }

    public function getTemplateName()
    {
        return "letsbonus/show_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  71 => 16,  67 => 15,  61 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout_letsbonus.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*                 */
/*             Product for month:<br>*/
/*             {% for product in products_by_month %}*/
/*                 El {{ product.date |date("m-d-Y") }} have {{ product.number }} products.<br>*/
/*             {% endfor %}*/
/*             */
/*             <hr>*/
/*             */
/*             Product for merchant:<br>*/
/*             {% for product in products_by_merchant %}*/
/*                 {{ product.merchant_name }} have {{ product.number }} products.<br>*/
/*             {% endfor %}*/
/*             */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
