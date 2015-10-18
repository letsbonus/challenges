<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2ce8e50b4ee8d765f9a52b4057351dbf0664e05a7a3dbcfb4ffbaa66d00aa2bb extends Twig_Template
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
        $__internal_8aa80199761a827c1b98c1934727f1e496161d869a96589dfebe0c6845bbd5a1 = $this->env->getExtension("native_profiler");
        $__internal_8aa80199761a827c1b98c1934727f1e496161d869a96589dfebe0c6845bbd5a1->enter($__internal_8aa80199761a827c1b98c1934727f1e496161d869a96589dfebe0c6845bbd5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa80199761a827c1b98c1934727f1e496161d869a96589dfebe0c6845bbd5a1->leave($__internal_8aa80199761a827c1b98c1934727f1e496161d869a96589dfebe0c6845bbd5a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a780a276cc2098133ddcbc2e4864a50a1d92a5d118f58579cf5a1153d7a884c8 = $this->env->getExtension("native_profiler");
        $__internal_a780a276cc2098133ddcbc2e4864a50a1d92a5d118f58579cf5a1153d7a884c8->enter($__internal_a780a276cc2098133ddcbc2e4864a50a1d92a5d118f58579cf5a1153d7a884c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a780a276cc2098133ddcbc2e4864a50a1d92a5d118f58579cf5a1153d7a884c8->leave($__internal_a780a276cc2098133ddcbc2e4864a50a1d92a5d118f58579cf5a1153d7a884c8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbfe21e2677731f1f44668343749e528a5bf60bc32426ba0efce03b794e7d079 = $this->env->getExtension("native_profiler");
        $__internal_fbfe21e2677731f1f44668343749e528a5bf60bc32426ba0efce03b794e7d079->enter($__internal_fbfe21e2677731f1f44668343749e528a5bf60bc32426ba0efce03b794e7d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fbfe21e2677731f1f44668343749e528a5bf60bc32426ba0efce03b794e7d079->leave($__internal_fbfe21e2677731f1f44668343749e528a5bf60bc32426ba0efce03b794e7d079_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b922208446956f68b028ef1ff14808f5a05513b2a65ac86c6288570e7cbb017 = $this->env->getExtension("native_profiler");
        $__internal_0b922208446956f68b028ef1ff14808f5a05513b2a65ac86c6288570e7cbb017->enter($__internal_0b922208446956f68b028ef1ff14808f5a05513b2a65ac86c6288570e7cbb017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0b922208446956f68b028ef1ff14808f5a05513b2a65ac86c6288570e7cbb017->leave($__internal_0b922208446956f68b028ef1ff14808f5a05513b2a65ac86c6288570e7cbb017_prof);

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
