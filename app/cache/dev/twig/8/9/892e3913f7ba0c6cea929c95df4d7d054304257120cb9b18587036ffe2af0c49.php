<?php

/* base.html.twig */
class __TwigTemplate_3ac37802274495ac069f71be0fe391d3ce4561477aa4738d5f1d8e61a01764a4 extends Twig_Template
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
        $__internal_97c76a75164fc26492837e49c699946f8ea57fefe64e80e282778154d726aa56 = $this->env->getExtension("native_profiler");
        $__internal_97c76a75164fc26492837e49c699946f8ea57fefe64e80e282778154d726aa56->enter($__internal_97c76a75164fc26492837e49c699946f8ea57fefe64e80e282778154d726aa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_97c76a75164fc26492837e49c699946f8ea57fefe64e80e282778154d726aa56->leave($__internal_97c76a75164fc26492837e49c699946f8ea57fefe64e80e282778154d726aa56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af01fa94cfd0d30a2566f2af10b109a4878f7effc8945476cc4509a3e91a9345 = $this->env->getExtension("native_profiler");
        $__internal_af01fa94cfd0d30a2566f2af10b109a4878f7effc8945476cc4509a3e91a9345->enter($__internal_af01fa94cfd0d30a2566f2af10b109a4878f7effc8945476cc4509a3e91a9345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af01fa94cfd0d30a2566f2af10b109a4878f7effc8945476cc4509a3e91a9345->leave($__internal_af01fa94cfd0d30a2566f2af10b109a4878f7effc8945476cc4509a3e91a9345_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bf432413a8d96afcf5d3cacf55ad6ba892db0b1d62cef6df5bf78ea83187759 = $this->env->getExtension("native_profiler");
        $__internal_3bf432413a8d96afcf5d3cacf55ad6ba892db0b1d62cef6df5bf78ea83187759->enter($__internal_3bf432413a8d96afcf5d3cacf55ad6ba892db0b1d62cef6df5bf78ea83187759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3bf432413a8d96afcf5d3cacf55ad6ba892db0b1d62cef6df5bf78ea83187759->leave($__internal_3bf432413a8d96afcf5d3cacf55ad6ba892db0b1d62cef6df5bf78ea83187759_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae3cd4d340dbd8176166efc08dba41b7faa331478ec65292e87292b1e2988fb2 = $this->env->getExtension("native_profiler");
        $__internal_ae3cd4d340dbd8176166efc08dba41b7faa331478ec65292e87292b1e2988fb2->enter($__internal_ae3cd4d340dbd8176166efc08dba41b7faa331478ec65292e87292b1e2988fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae3cd4d340dbd8176166efc08dba41b7faa331478ec65292e87292b1e2988fb2->leave($__internal_ae3cd4d340dbd8176166efc08dba41b7faa331478ec65292e87292b1e2988fb2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1eaea0212df4309690e8fa04657e03bb031b54b3e8740364a5031e3161b4f738 = $this->env->getExtension("native_profiler");
        $__internal_1eaea0212df4309690e8fa04657e03bb031b54b3e8740364a5031e3161b4f738->enter($__internal_1eaea0212df4309690e8fa04657e03bb031b54b3e8740364a5031e3161b4f738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1eaea0212df4309690e8fa04657e03bb031b54b3e8740364a5031e3161b4f738->leave($__internal_1eaea0212df4309690e8fa04657e03bb031b54b3e8740364a5031e3161b4f738_prof);

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
