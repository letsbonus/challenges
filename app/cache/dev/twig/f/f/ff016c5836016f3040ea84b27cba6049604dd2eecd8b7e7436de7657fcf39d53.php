<?php

/* ::layout_letsbonus.html.twig */
class __TwigTemplate_9af99abe23d2b8b7b46ab6c6d60a85d9757dd6690b7e95adc1581f60d4f36031 extends Twig_Template
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
        $__internal_1070a79fc7960e4d5c6686ee84e6de55d6a7ee469c6c890805c32129d0a9c57e = $this->env->getExtension("native_profiler");
        $__internal_1070a79fc7960e4d5c6686ee84e6de55d6a7ee469c6c890805c32129d0a9c57e->enter($__internal_1070a79fc7960e4d5c6686ee84e6de55d6a7ee469c6c890805c32129d0a9c57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout_letsbonus.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1070a79fc7960e4d5c6686ee84e6de55d6a7ee469c6c890805c32129d0a9c57e->leave($__internal_1070a79fc7960e4d5c6686ee84e6de55d6a7ee469c6c890805c32129d0a9c57e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5ed96a34b3026fd1fa7aa9652fddc9f9e55ab6be2b29b1115d4c11eca464001 = $this->env->getExtension("native_profiler");
        $__internal_d5ed96a34b3026fd1fa7aa9652fddc9f9e55ab6be2b29b1115d4c11eca464001->enter($__internal_d5ed96a34b3026fd1fa7aa9652fddc9f9e55ab6be2b29b1115d4c11eca464001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d5ed96a34b3026fd1fa7aa9652fddc9f9e55ab6be2b29b1115d4c11eca464001->leave($__internal_d5ed96a34b3026fd1fa7aa9652fddc9f9e55ab6be2b29b1115d4c11eca464001_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebc81e1460d0c2b47120f48715048e7496f10a693616ae361fe91bf9470db9a8 = $this->env->getExtension("native_profiler");
        $__internal_ebc81e1460d0c2b47120f48715048e7496f10a693616ae361fe91bf9470db9a8->enter($__internal_ebc81e1460d0c2b47120f48715048e7496f10a693616ae361fe91bf9470db9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "        <div id=\"wrapper_header\">
            <div id=\"container\">
                <div id=\"welcome\">
                    <h1><span>Welcome to \"Challenge for LETSBONUS\"</span> </h1>
                </div>
            </div>
        </div>
    ";
        
        $__internal_ebc81e1460d0c2b47120f48715048e7496f10a693616ae361fe91bf9470db9a8->leave($__internal_ebc81e1460d0c2b47120f48715048e7496f10a693616ae361fe91bf9470db9a8_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_b960bf4a3e87eb52dbd4fb5dfbc8fd8b3307188f80558ef1a41b2f4034bd8432 = $this->env->getExtension("native_profiler");
        $__internal_b960bf4a3e87eb52dbd4fb5dfbc8fd8b3307188f80558ef1a41b2f4034bd8432->enter($__internal_b960bf4a3e87eb52dbd4fb5dfbc8fd8b3307188f80558ef1a41b2f4034bd8432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    ";
        
        $__internal_b960bf4a3e87eb52dbd4fb5dfbc8fd8b3307188f80558ef1a41b2f4034bd8432->leave($__internal_b960bf4a3e87eb52dbd4fb5dfbc8fd8b3307188f80558ef1a41b2f4034bd8432_prof);

    }

    // line 18
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b25cd5714bffd83a5f617f2e22bab144b31ed8cac73d9e751ca006359d6e4e2d = $this->env->getExtension("native_profiler");
        $__internal_b25cd5714bffd83a5f617f2e22bab144b31ed8cac73d9e751ca006359d6e4e2d->enter($__internal_b25cd5714bffd83a5f617f2e22bab144b31ed8cac73d9e751ca006359d6e4e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 19
        echo "        <div id=\"wrapper_footer\">
            <div id=\"container\">
                <div id=\"footer\">
                    <h5><span>Roger Guasch Rion</span> </h5>
                </div>
            </div>
        </div>
    ";
        
        $__internal_b25cd5714bffd83a5f617f2e22bab144b31ed8cac73d9e751ca006359d6e4e2d->leave($__internal_b25cd5714bffd83a5f617f2e22bab144b31ed8cac73d9e751ca006359d6e4e2d_prof);

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
