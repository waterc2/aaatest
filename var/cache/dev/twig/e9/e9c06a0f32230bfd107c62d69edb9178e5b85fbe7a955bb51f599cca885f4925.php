<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ade8cba2e0b68934a6eea48e2dba6b810d1bde70e07eed02f20b70138c404f7b extends Twig_Template
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
        $__internal_145f79fe6c3c15ccdd445c62ad2ee02ac9b95b7b174d57f1ae1d6119ae947e4a = $this->env->getExtension("native_profiler");
        $__internal_145f79fe6c3c15ccdd445c62ad2ee02ac9b95b7b174d57f1ae1d6119ae947e4a->enter($__internal_145f79fe6c3c15ccdd445c62ad2ee02ac9b95b7b174d57f1ae1d6119ae947e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_145f79fe6c3c15ccdd445c62ad2ee02ac9b95b7b174d57f1ae1d6119ae947e4a->leave($__internal_145f79fe6c3c15ccdd445c62ad2ee02ac9b95b7b174d57f1ae1d6119ae947e4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
