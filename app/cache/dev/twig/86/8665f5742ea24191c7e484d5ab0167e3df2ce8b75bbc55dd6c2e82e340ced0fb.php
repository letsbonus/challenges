<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_21ade2aa1ce84f17bd232e6d4e0ab6c28a4d1b80b124f5b1858053d5cf711f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e0d74669ecdebe5ed32f60159bc22e11f2a5bafeb76bc7413101cae5f09f8a9 = $this->env->getExtension("native_profiler");
        $__internal_1e0d74669ecdebe5ed32f60159bc22e11f2a5bafeb76bc7413101cae5f09f8a9->enter($__internal_1e0d74669ecdebe5ed32f60159bc22e11f2a5bafeb76bc7413101cae5f09f8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_1e0d74669ecdebe5ed32f60159bc22e11f2a5bafeb76bc7413101cae5f09f8a9->leave($__internal_1e0d74669ecdebe5ed32f60159bc22e11f2a5bafeb76bc7413101cae5f09f8a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
