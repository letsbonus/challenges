<?php

/* base.html.twig */
class __TwigTemplate_8edec4610e8f9129c5a78da890ccc7642b8487dc4e24c5f66092cdf8598262e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e265dbd9205dcc9f2d18839b395b2e0935f8139aa35dd27d106e6629fa757b = $this->env->getExtension("native_profiler");
        $__internal_28e265dbd9205dcc9f2d18839b395b2e0935f8139aa35dd27d106e6629fa757b->enter($__internal_28e265dbd9205dcc9f2d18839b395b2e0935f8139aa35dd27d106e6629fa757b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_28e265dbd9205dcc9f2d18839b395b2e0935f8139aa35dd27d106e6629fa757b->leave($__internal_28e265dbd9205dcc9f2d18839b395b2e0935f8139aa35dd27d106e6629fa757b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89011b807e1443f23a3ca1cece1f7eb5b375f006369c979f9d420057ed54f9ad = $this->env->getExtension("native_profiler");
        $__internal_89011b807e1443f23a3ca1cece1f7eb5b375f006369c979f9d420057ed54f9ad->enter($__internal_89011b807e1443f23a3ca1cece1f7eb5b375f006369c979f9d420057ed54f9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89011b807e1443f23a3ca1cece1f7eb5b375f006369c979f9d420057ed54f9ad->leave($__internal_89011b807e1443f23a3ca1cece1f7eb5b375f006369c979f9d420057ed54f9ad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6f1dbf7a90f1d00021c77bd7c6d1caeb43f901aef671642f04642b9462592ce = $this->env->getExtension("native_profiler");
        $__internal_d6f1dbf7a90f1d00021c77bd7c6d1caeb43f901aef671642f04642b9462592ce->enter($__internal_d6f1dbf7a90f1d00021c77bd7c6d1caeb43f901aef671642f04642b9462592ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6f1dbf7a90f1d00021c77bd7c6d1caeb43f901aef671642f04642b9462592ce->leave($__internal_d6f1dbf7a90f1d00021c77bd7c6d1caeb43f901aef671642f04642b9462592ce_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ca0f112757a540c674f98f52d5b07449dffb0bcdf2982cd9f71ce4ebd2c89c5 = $this->env->getExtension("native_profiler");
        $__internal_3ca0f112757a540c674f98f52d5b07449dffb0bcdf2982cd9f71ce4ebd2c89c5->enter($__internal_3ca0f112757a540c674f98f52d5b07449dffb0bcdf2982cd9f71ce4ebd2c89c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ca0f112757a540c674f98f52d5b07449dffb0bcdf2982cd9f71ce4ebd2c89c5->leave($__internal_3ca0f112757a540c674f98f52d5b07449dffb0bcdf2982cd9f71ce4ebd2c89c5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48953909b22ebbc3c9b0e61638d4f72fa98b591f09ba04da7d31aa2a70f6365a = $this->env->getExtension("native_profiler");
        $__internal_48953909b22ebbc3c9b0e61638d4f72fa98b591f09ba04da7d31aa2a70f6365a->enter($__internal_48953909b22ebbc3c9b0e61638d4f72fa98b591f09ba04da7d31aa2a70f6365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_48953909b22ebbc3c9b0e61638d4f72fa98b591f09ba04da7d31aa2a70f6365a->leave($__internal_48953909b22ebbc3c9b0e61638d4f72fa98b591f09ba04da7d31aa2a70f6365a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
