<?php

/* letsbonus/show_results.html.twig */
class __TwigTemplate_ab347a38502b07b1ee174d66b63a990501a8e62235a535a9c5229d63824af26a extends Twig_Template
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
        $__internal_1cee9a926da58f2efc310dbaa7a766c1e54a5b1a655c45706018e1455f69f514 = $this->env->getExtension("native_profiler");
        $__internal_1cee9a926da58f2efc310dbaa7a766c1e54a5b1a655c45706018e1455f69f514->enter($__internal_1cee9a926da58f2efc310dbaa7a766c1e54a5b1a655c45706018e1455f69f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "letsbonus/show_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cee9a926da58f2efc310dbaa7a766c1e54a5b1a655c45706018e1455f69f514->leave($__internal_1cee9a926da58f2efc310dbaa7a766c1e54a5b1a655c45706018e1455f69f514_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_747f489c8e54cbd87f79c11439d6e2b87108a83d85a4f41d252f3458d8e5c4df = $this->env->getExtension("native_profiler");
        $__internal_747f489c8e54cbd87f79c11439d6e2b87108a83d85a4f41d252f3458d8e5c4df->enter($__internal_747f489c8e54cbd87f79c11439d6e2b87108a83d85a4f41d252f3458d8e5c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_747f489c8e54cbd87f79c11439d6e2b87108a83d85a4f41d252f3458d8e5c4df->leave($__internal_747f489c8e54cbd87f79c11439d6e2b87108a83d85a4f41d252f3458d8e5c4df_prof);

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
