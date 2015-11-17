<?php

/* ::base.html.twig */
class __TwigTemplate_8ccc33cac9438a82b1576c498362a8cf516f750c14c2339113393c19cb06decf extends Twig_Template
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
        $__internal_856bdcb2cfc40298dad3e6045c8968ba0b0a283372377a12a2a0ac96156c23af = $this->env->getExtension("native_profiler");
        $__internal_856bdcb2cfc40298dad3e6045c8968ba0b0a283372377a12a2a0ac96156c23af->enter($__internal_856bdcb2cfc40298dad3e6045c8968ba0b0a283372377a12a2a0ac96156c23af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_856bdcb2cfc40298dad3e6045c8968ba0b0a283372377a12a2a0ac96156c23af->leave($__internal_856bdcb2cfc40298dad3e6045c8968ba0b0a283372377a12a2a0ac96156c23af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf7e231f9cd8f02683fb0d4c51db2df395ca0ac37252f8707de0a84ab1821532 = $this->env->getExtension("native_profiler");
        $__internal_cf7e231f9cd8f02683fb0d4c51db2df395ca0ac37252f8707de0a84ab1821532->enter($__internal_cf7e231f9cd8f02683fb0d4c51db2df395ca0ac37252f8707de0a84ab1821532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cf7e231f9cd8f02683fb0d4c51db2df395ca0ac37252f8707de0a84ab1821532->leave($__internal_cf7e231f9cd8f02683fb0d4c51db2df395ca0ac37252f8707de0a84ab1821532_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b24115c7369cde39b361a8a3b0d9c8b280dff0db565cc66dd209621ffb9bb03e = $this->env->getExtension("native_profiler");
        $__internal_b24115c7369cde39b361a8a3b0d9c8b280dff0db565cc66dd209621ffb9bb03e->enter($__internal_b24115c7369cde39b361a8a3b0d9c8b280dff0db565cc66dd209621ffb9bb03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" type=\"text/css\" />
        ";
        
        $__internal_b24115c7369cde39b361a8a3b0d9c8b280dff0db565cc66dd209621ffb9bb03e->leave($__internal_b24115c7369cde39b361a8a3b0d9c8b280dff0db565cc66dd209621ffb9bb03e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5db6d0b6e206ba8304c87435f3d16a259c112e2e425c0000559906915d02c08b = $this->env->getExtension("native_profiler");
        $__internal_5db6d0b6e206ba8304c87435f3d16a259c112e2e425c0000559906915d02c08b->enter($__internal_5db6d0b6e206ba8304c87435f3d16a259c112e2e425c0000559906915d02c08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5db6d0b6e206ba8304c87435f3d16a259c112e2e425c0000559906915d02c08b->leave($__internal_5db6d0b6e206ba8304c87435f3d16a259c112e2e425c0000559906915d02c08b_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eebf307af54c1d0e5452039cf675fc7ad2153de4496dac3a1f4d8bf72e8ba0f6 = $this->env->getExtension("native_profiler");
        $__internal_eebf307af54c1d0e5452039cf675fc7ad2153de4496dac3a1f4d8bf72e8ba0f6->enter($__internal_eebf307af54c1d0e5452039cf675fc7ad2153de4496dac3a1f4d8bf72e8ba0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "        <script src=\"https://code.jquery.com/jquery-git2.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_eebf307af54c1d0e5452039cf675fc7ad2153de4496dac3a1f4d8bf72e8ba0f6->leave($__internal_eebf307af54c1d0e5452039cf675fc7ad2153de4496dac3a1f4d8bf72e8ba0f6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  96 => 13,  85 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 17,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <script src="https://code.jquery.com/jquery-git2.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
