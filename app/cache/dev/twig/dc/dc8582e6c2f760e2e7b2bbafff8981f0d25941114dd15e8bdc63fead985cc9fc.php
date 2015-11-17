<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_10a202c49895cbdc2224ac142a66e826f3d9557271c5564d33ba9b21f56c2c2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac8fca3c21be0b2df43d450ef33e2c74716d5f4d97e564b7ad3e6a1af360c04e = $this->env->getExtension("native_profiler");
        $__internal_ac8fca3c21be0b2df43d450ef33e2c74716d5f4d97e564b7ad3e6a1af360c04e->enter($__internal_ac8fca3c21be0b2df43d450ef33e2c74716d5f4d97e564b7ad3e6a1af360c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac8fca3c21be0b2df43d450ef33e2c74716d5f4d97e564b7ad3e6a1af360c04e->leave($__internal_ac8fca3c21be0b2df43d450ef33e2c74716d5f4d97e564b7ad3e6a1af360c04e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebbaa54470abd9c70d99c9143f1f9b196e20eba81d12f6616bfe3a2f75e4f0c4 = $this->env->getExtension("native_profiler");
        $__internal_ebbaa54470abd9c70d99c9143f1f9b196e20eba81d12f6616bfe3a2f75e4f0c4->enter($__internal_ebbaa54470abd9c70d99c9143f1f9b196e20eba81d12f6616bfe3a2f75e4f0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebbaa54470abd9c70d99c9143f1f9b196e20eba81d12f6616bfe3a2f75e4f0c4->leave($__internal_ebbaa54470abd9c70d99c9143f1f9b196e20eba81d12f6616bfe3a2f75e4f0c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b32c7090223463b79164bad57ae9eac9a6fbe94fc414716f1b4d55353efa1450 = $this->env->getExtension("native_profiler");
        $__internal_b32c7090223463b79164bad57ae9eac9a6fbe94fc414716f1b4d55353efa1450->enter($__internal_b32c7090223463b79164bad57ae9eac9a6fbe94fc414716f1b4d55353efa1450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b32c7090223463b79164bad57ae9eac9a6fbe94fc414716f1b4d55353efa1450->leave($__internal_b32c7090223463b79164bad57ae9eac9a6fbe94fc414716f1b4d55353efa1450_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdf30dbcb66a5efb060143724f311d58f39730b8d34c5c318dd79099fc22c148 = $this->env->getExtension("native_profiler");
        $__internal_bdf30dbcb66a5efb060143724f311d58f39730b8d34c5c318dd79099fc22c148->enter($__internal_bdf30dbcb66a5efb060143724f311d58f39730b8d34c5c318dd79099fc22c148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bdf30dbcb66a5efb060143724f311d58f39730b8d34c5c318dd79099fc22c148->leave($__internal_bdf30dbcb66a5efb060143724f311d58f39730b8d34c5c318dd79099fc22c148_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
