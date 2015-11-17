<?php

/* AppBundle:Default:form.html.twig */
class __TwigTemplate_dc4c3db473153e7c9ef8249d6c4691c1dab744b50af7980bdc4fbb9d324d6590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Default:form.html.twig", 2);
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
        $__internal_1550bafe610cddc96a1cc0e2dc7e74c160a8043db57c68ad9593b5b675410119 = $this->env->getExtension("native_profiler");
        $__internal_1550bafe610cddc96a1cc0e2dc7e74c160a8043db57c68ad9593b5b675410119->enter($__internal_1550bafe610cddc96a1cc0e2dc7e74c160a8043db57c68ad9593b5b675410119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1550bafe610cddc96a1cc0e2dc7e74c160a8043db57c68ad9593b5b675410119->leave($__internal_1550bafe610cddc96a1cc0e2dc7e74c160a8043db57c68ad9593b5b675410119_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce83b1e5eeaf83f4dcabf2bb659e15bf16ed24b8fc639e716260ab8fda70cc4e = $this->env->getExtension("native_profiler");
        $__internal_ce83b1e5eeaf83f4dcabf2bb659e15bf16ed24b8fc639e716260ab8fda70cc4e->enter($__internal_ce83b1e5eeaf83f4dcabf2bb659e15bf16ed24b8fc639e716260ab8fda70cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"form-group col-md-12\">
\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t    <input style=\"margin-top: 10px;\" class=\"btn btn-success\" type=\"submit\" />
\t</form>
</div>
<div class=\"col-md-12\">
\t";
        // line 12
        if (array_key_exists("productsPerMonth", $context)) {
            // line 13
            echo "\t<ul class=\"col-md-6\">
\t<b>Count per month:</b>
\t";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsPerMonth"]) ? $context["productsPerMonth"] : $this->getContext($context, "productsPerMonth")));
            foreach ($context['_seq'] as $context["_key"] => $context["productMonth"]) {
                // line 16
                echo "\t\t<li class=\"col-md-12\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env, (("2015-" . $this->getAttribute($context["productMonth"], "initMonth", array())) . "-01")), "M"), "html", null, true);
                echo " - Count: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productMonth"], "productCount", array()), "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productMonth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t";
        }
        // line 19
        echo "\t</ul>

\t";
        // line 21
        if (array_key_exists("productsPerMerchant", $context)) {
            // line 22
            echo "\t<ul class=\"col-md-6\">
\t<b>Count per merchant:</b>
\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsPerMerchant"]) ? $context["productsPerMerchant"] : $this->getContext($context, "productsPerMerchant")));
            foreach ($context['_seq'] as $context["_key"] => $context["productMerchant"]) {
                // line 25
                echo "\t\t<li class=\"col-md-12\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productMerchant"], "merchantName", array()), "html", null, true);
                echo " - Count: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["productMerchant"], "productCount", array()), "html", null, true);
                echo "</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productMerchant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t";
        }
        // line 28
        echo "\t</ul>
</div>
";
        
        $__internal_ce83b1e5eeaf83f4dcabf2bb659e15bf16ed24b8fc639e716260ab8fda70cc4e->leave($__internal_ce83b1e5eeaf83f4dcabf2bb659e15bf16ed24b8fc639e716260ab8fda70cc4e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  106 => 27,  95 => 25,  91 => 24,  87 => 22,  85 => 21,  81 => 19,  78 => 18,  67 => 16,  63 => 15,  59 => 13,  57 => 12,  49 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="form-group col-md-12">*/
/* 	<form action="{{path('homepage')}}" method="post" {{ form_enctype(form) }}>*/
/* 	    {{ form_widget(form) }}*/
/* 	    <input style="margin-top: 10px;" class="btn btn-success" type="submit" />*/
/* 	</form>*/
/* </div>*/
/* <div class="col-md-12">*/
/* 	{% if productsPerMonth is defined %}*/
/* 	<ul class="col-md-6">*/
/* 	<b>Count per month:</b>*/
/* 	{% for productMonth in productsPerMonth %}*/
/* 		<li class="col-md-12">{{date('2015-'~productMonth.initMonth~'-01')|date('M')}} - Count: {{productMonth.productCount}}</li>*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* 	</ul>*/
/* */
/* 	{% if productsPerMerchant is defined %}*/
/* 	<ul class="col-md-6">*/
/* 	<b>Count per merchant:</b>*/
/* 	{% for productMerchant in productsPerMerchant %}*/
/* 		<li class="col-md-12">{{ productMerchant.merchantName }} - Count: {{productMerchant.productCount}}</li>*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* 	</ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
