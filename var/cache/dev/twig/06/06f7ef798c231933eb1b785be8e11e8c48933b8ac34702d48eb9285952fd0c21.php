<?php

/* security/login.html.twig */
class __TwigTemplate_c0dbc439aa9568f230036db4572c9dafba7cdd4d8b4664570547703133d45c52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca352638174e3f5464d068e37e195a4351aac93ac324531ed85a344c2e7e929b = $this->env->getExtension("native_profiler");
        $__internal_ca352638174e3f5464d068e37e195a4351aac93ac324531ed85a344c2e7e929b->enter($__internal_ca352638174e3f5464d068e37e195a4351aac93ac324531ed85a344c2e7e929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca352638174e3f5464d068e37e195a4351aac93ac324531ed85a344c2e7e929b->leave($__internal_ca352638174e3f5464d068e37e195a4351aac93ac324531ed85a344c2e7e929b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45551d65f6194cc098ce737eee699d0f440a503ed6de749089e162e34298d18c = $this->env->getExtension("native_profiler");
        $__internal_45551d65f6194cc098ce737eee699d0f440a503ed6de749089e162e34298d18c->enter($__internal_45551d65f6194cc098ce737eee699d0f440a503ed6de749089e162e34298d18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >
    <button type=\"submit\">login</button>
</form>
";
        
        $__internal_45551d65f6194cc098ce737eee699d0f440a503ed6de749089e162e34298d18c->leave($__internal_45551d65f6194cc098ce737eee699d0f440a503ed6de749089e162e34298d18c_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  59 => 11,  54 => 9,  51 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <input type="hidden" name="_csrf_token"*/
/*         value="{{ csrf_token('authenticate') }}"*/
/*     >*/
/*     <button type="submit">login</button>*/
/* </form>*/
/* {% endblock %}*/
