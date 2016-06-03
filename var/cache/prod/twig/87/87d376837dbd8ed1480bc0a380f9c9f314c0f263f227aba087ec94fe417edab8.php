<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_670e26c056d52b33ff82fbd233b3b6ee8932c5cd13df6c5c2831f4a95bc1401a extends Twig_Template
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
        $__internal_d1479d0555f0fe08ffece8c57fe45ed52936a06869e89211738204c521400f58 = $this->env->getExtension("native_profiler");
        $__internal_d1479d0555f0fe08ffece8c57fe45ed52936a06869e89211738204c521400f58->enter($__internal_d1479d0555f0fe08ffece8c57fe45ed52936a06869e89211738204c521400f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1479d0555f0fe08ffece8c57fe45ed52936a06869e89211738204c521400f58->leave($__internal_d1479d0555f0fe08ffece8c57fe45ed52936a06869e89211738204c521400f58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41cc619d01ee061b1d2685f06589b238199e8113f00204e4747056c47705f13c = $this->env->getExtension("native_profiler");
        $__internal_41cc619d01ee061b1d2685f06589b238199e8113f00204e4747056c47705f13c->enter($__internal_41cc619d01ee061b1d2685f06589b238199e8113f00204e4747056c47705f13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_41cc619d01ee061b1d2685f06589b238199e8113f00204e4747056c47705f13c->leave($__internal_41cc619d01ee061b1d2685f06589b238199e8113f00204e4747056c47705f13c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed998171d2f3aa6664745760773229ba5f4e5f708d8158e6450f50357b7f7749 = $this->env->getExtension("native_profiler");
        $__internal_ed998171d2f3aa6664745760773229ba5f4e5f708d8158e6450f50357b7f7749->enter($__internal_ed998171d2f3aa6664745760773229ba5f4e5f708d8158e6450f50357b7f7749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed998171d2f3aa6664745760773229ba5f4e5f708d8158e6450f50357b7f7749->leave($__internal_ed998171d2f3aa6664745760773229ba5f4e5f708d8158e6450f50357b7f7749_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e995dfb8163cd53afb892ec944b1b0fb139b52dbdd5103cc023fef88b7b767d = $this->env->getExtension("native_profiler");
        $__internal_6e995dfb8163cd53afb892ec944b1b0fb139b52dbdd5103cc023fef88b7b767d->enter($__internal_6e995dfb8163cd53afb892ec944b1b0fb139b52dbdd5103cc023fef88b7b767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6e995dfb8163cd53afb892ec944b1b0fb139b52dbdd5103cc023fef88b7b767d->leave($__internal_6e995dfb8163cd53afb892ec944b1b0fb139b52dbdd5103cc023fef88b7b767d_prof);

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
