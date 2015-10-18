<?php

/* letsbonus/index.html.twig */
class __TwigTemplate_84ffe60431f82f42bf215b08fa552bbe7f1c0650db64e384d92b9e5ae29a2316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout_letsbonus.html.twig", "letsbonus/index.html.twig", 1);
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
        $__internal_688ba6a87ccaac53dd7516266b5ff4717245e73d970b7adb00267dbf4c4533f4 = $this->env->getExtension("native_profiler");
        $__internal_688ba6a87ccaac53dd7516266b5ff4717245e73d970b7adb00267dbf4c4533f4->enter($__internal_688ba6a87ccaac53dd7516266b5ff4717245e73d970b7adb00267dbf4c4533f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "letsbonus/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_688ba6a87ccaac53dd7516266b5ff4717245e73d970b7adb00267dbf4c4533f4->leave($__internal_688ba6a87ccaac53dd7516266b5ff4717245e73d970b7adb00267dbf4c4533f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1020fa840bc35651ee31f002ba4054c9ba1c608fde9e04b6dfbcbc43314f5eb2 = $this->env->getExtension("native_profiler");
        $__internal_1020fa840bc35651ee31f002ba4054c9ba1c608fde9e04b6dfbcbc43314f5eb2->enter($__internal_1020fa840bc35651ee31f002ba4054c9ba1c608fde9e04b6dfbcbc43314f5eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <form method=\"POST\" ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " enctype=\"multipart/form-data\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <input type=\"submit\" value=\"Upload\" class=\"btn btn-default pull-right\" />
            </form>
        </div>
    </div>
";
        
        $__internal_1020fa840bc35651ee31f002ba4054c9ba1c608fde9e04b6dfbcbc43314f5eb2->leave($__internal_1020fa840bc35651ee31f002ba4054c9ba1c608fde9e04b6dfbcbc43314f5eb2_prof);

    }

    public function getTemplateName()
    {
        return "letsbonus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout_letsbonus.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <form method="POST" {{ form_enctype(form) }} enctype="multipart/form-data">*/
/*                 {{ form_widget(form) }}*/
/*                 <input type="submit" value="Upload" class="btn btn-default pull-right" />*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
