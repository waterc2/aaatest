<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e25d1ae91d4c5e4c161aa27ad7e491a559c0940df8f30f89f94fb9917dd29d7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d35f75d374a1706b8e4f0076ed80d9649d8985be454012a2d06a9796966327c5 = $this->env->getExtension("native_profiler");
        $__internal_d35f75d374a1706b8e4f0076ed80d9649d8985be454012a2d06a9796966327c5->enter($__internal_d35f75d374a1706b8e4f0076ed80d9649d8985be454012a2d06a9796966327c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35f75d374a1706b8e4f0076ed80d9649d8985be454012a2d06a9796966327c5->leave($__internal_d35f75d374a1706b8e4f0076ed80d9649d8985be454012a2d06a9796966327c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26bcdf1ac6c49ccc97baeb3ed7f889c096cb284943eef15c6ae34d1e3db8a80f = $this->env->getExtension("native_profiler");
        $__internal_26bcdf1ac6c49ccc97baeb3ed7f889c096cb284943eef15c6ae34d1e3db8a80f->enter($__internal_26bcdf1ac6c49ccc97baeb3ed7f889c096cb284943eef15c6ae34d1e3db8a80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26bcdf1ac6c49ccc97baeb3ed7f889c096cb284943eef15c6ae34d1e3db8a80f->leave($__internal_26bcdf1ac6c49ccc97baeb3ed7f889c096cb284943eef15c6ae34d1e3db8a80f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e179500b58caf9f8c5ad81edf3a16b50b81947a0c24d40911870cc75f6715a0b = $this->env->getExtension("native_profiler");
        $__internal_e179500b58caf9f8c5ad81edf3a16b50b81947a0c24d40911870cc75f6715a0b->enter($__internal_e179500b58caf9f8c5ad81edf3a16b50b81947a0c24d40911870cc75f6715a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e179500b58caf9f8c5ad81edf3a16b50b81947a0c24d40911870cc75f6715a0b->leave($__internal_e179500b58caf9f8c5ad81edf3a16b50b81947a0c24d40911870cc75f6715a0b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae7ea5d974dffc5ade4146b3f00f50d2f32145788da1f57ec3f3257f7f44d057 = $this->env->getExtension("native_profiler");
        $__internal_ae7ea5d974dffc5ade4146b3f00f50d2f32145788da1f57ec3f3257f7f44d057->enter($__internal_ae7ea5d974dffc5ade4146b3f00f50d2f32145788da1f57ec3f3257f7f44d057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ae7ea5d974dffc5ade4146b3f00f50d2f32145788da1f57ec3f3257f7f44d057->leave($__internal_ae7ea5d974dffc5ade4146b3f00f50d2f32145788da1f57ec3f3257f7f44d057_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
