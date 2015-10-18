<?php

/* ::layout_letsbonus.html.twig */
class __TwigTemplate_3b4ec5bd182e61b5c9599e6e14133ffccf738256385045acd519ee657ea1d948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout_letsbonus.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6cf2ab7c7f2b2bf4bced4d97d4982444113ff9478b7bbd64b39b4a4dd5a2e90 = $this->env->getExtension("native_profiler");
        $__internal_d6cf2ab7c7f2b2bf4bced4d97d4982444113ff9478b7bbd64b39b4a4dd5a2e90->enter($__internal_d6cf2ab7c7f2b2bf4bced4d97d4982444113ff9478b7bbd64b39b4a4dd5a2e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout_letsbonus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cf2ab7c7f2b2bf4bced4d97d4982444113ff9478b7bbd64b39b4a4dd5a2e90->leave($__internal_d6cf2ab7c7f2b2bf4bced4d97d4982444113ff9478b7bbd64b39b4a4dd5a2e90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_805acbc3384f27c09621d68335a0b6a0eff63440de97eb223579de7777c5a0a7 = $this->env->getExtension("native_profiler");
        $__internal_805acbc3384f27c09621d68335a0b6a0eff63440de97eb223579de7777c5a0a7->enter($__internal_805acbc3384f27c09621d68335a0b6a0eff63440de97eb223579de7777c5a0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 27
        echo "
";
        
        $__internal_805acbc3384f27c09621d68335a0b6a0eff63440de97eb223579de7777c5a0a7->leave($__internal_805acbc3384f27c09621d68335a0b6a0eff63440de97eb223579de7777c5a0a7_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_9b5ffd7c1bac3130af7a41f4caaa579c7830ee3c141680faa36a3d110e9bfbd1 = $this->env->getExtension("native_profiler");
        $__internal_9b5ffd7c1bac3130af7a41f4caaa579c7830ee3c141680faa36a3d110e9bfbd1->enter($__internal_9b5ffd7c1bac3130af7a41f4caaa579c7830ee3c141680faa36a3d110e9bfbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "        <div id=\"wrapper_header\">
            <div id=\"container\">
                <div id=\"welcome\">
                    <h1><span>Welcome to \"Challenge for LETSBONUS\"</span> </h1>
                </div>
            </div>
        </div>
    ";
        
        $__internal_9b5ffd7c1bac3130af7a41f4caaa579c7830ee3c141680faa36a3d110e9bfbd1->leave($__internal_9b5ffd7c1bac3130af7a41f4caaa579c7830ee3c141680faa36a3d110e9bfbd1_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_044c0db6c6bfe901bf7fda32dc4d1ccd38b85419dbc2eb9e077e5b175f97a67e = $this->env->getExtension("native_profiler");
        $__internal_044c0db6c6bfe901bf7fda32dc4d1ccd38b85419dbc2eb9e077e5b175f97a67e->enter($__internal_044c0db6c6bfe901bf7fda32dc4d1ccd38b85419dbc2eb9e077e5b175f97a67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    ";
        
        $__internal_044c0db6c6bfe901bf7fda32dc4d1ccd38b85419dbc2eb9e077e5b175f97a67e->leave($__internal_044c0db6c6bfe901bf7fda32dc4d1ccd38b85419dbc2eb9e077e5b175f97a67e_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c40ff90a1cbcca544c17713340174ef94c9903eccf892e2f5403682cbcb46103 = $this->env->getExtension("native_profiler");
        $__internal_c40ff90a1cbcca544c17713340174ef94c9903eccf892e2f5403682cbcb46103->enter($__internal_c40ff90a1cbcca544c17713340174ef94c9903eccf892e2f5403682cbcb46103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "        <div id=\"wrapper_footer\">
            <div id=\"container\">
                <div id=\"footer\">
                    <h5><span>Roger Guasch Rion</span> </h5>
                </div>
            </div>
        </div>
    ";
        
        $__internal_c40ff90a1cbcca544c17713340174ef94c9903eccf892e2f5403682cbcb46103->leave($__internal_c40ff90a1cbcca544c17713340174ef94c9903eccf892e2f5403682cbcb46103_prof);

    }

    public function getTemplateName()
    {
        return "::layout_letsbonus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 19,  99 => 18,  92 => 16,  86 => 15,  72 => 6,  66 => 5,  58 => 27,  56 => 18,  53 => 17,  51 => 15,  48 => 14,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% block header %}*/
/*         <div id="wrapper_header">*/
/*             <div id="container">*/
/*                 <div id="welcome">*/
/*                     <h1><span>Welcome to "Challenge for LETSBONUS"</span> </h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     {% endblock %}*/
/* */
/*     {% block footer %}*/
/*         <div id="wrapper_footer">*/
/*             <div id="container">*/
/*                 <div id="footer">*/
/*                     <h5><span>Roger Guasch Rion</span> </h5>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
