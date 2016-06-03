<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ace6564e5d8da1efbecef7cb07e52b07190ce99623f1524ac787c75b278d95d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8882243ffd0f67d38d8b34a32154e2465f927df9e879d07f332cd31f5b558dfa = $this->env->getExtension("native_profiler");
        $__internal_8882243ffd0f67d38d8b34a32154e2465f927df9e879d07f332cd31f5b558dfa->enter($__internal_8882243ffd0f67d38d8b34a32154e2465f927df9e879d07f332cd31f5b558dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8882243ffd0f67d38d8b34a32154e2465f927df9e879d07f332cd31f5b558dfa->leave($__internal_8882243ffd0f67d38d8b34a32154e2465f927df9e879d07f332cd31f5b558dfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eff161277ed21ce1a7caedf45e0fbc50f4063dfe0f67e1acb81612f42c2c8b55 = $this->env->getExtension("native_profiler");
        $__internal_eff161277ed21ce1a7caedf45e0fbc50f4063dfe0f67e1acb81612f42c2c8b55->enter($__internal_eff161277ed21ce1a7caedf45e0fbc50f4063dfe0f67e1acb81612f42c2c8b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eff161277ed21ce1a7caedf45e0fbc50f4063dfe0f67e1acb81612f42c2c8b55->leave($__internal_eff161277ed21ce1a7caedf45e0fbc50f4063dfe0f67e1acb81612f42c2c8b55_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d6bb08df1fce3c0ad630a11fa79857af66f826c6aec2634fc39bdf4bbb40dda = $this->env->getExtension("native_profiler");
        $__internal_4d6bb08df1fce3c0ad630a11fa79857af66f826c6aec2634fc39bdf4bbb40dda->enter($__internal_4d6bb08df1fce3c0ad630a11fa79857af66f826c6aec2634fc39bdf4bbb40dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4d6bb08df1fce3c0ad630a11fa79857af66f826c6aec2634fc39bdf4bbb40dda->leave($__internal_4d6bb08df1fce3c0ad630a11fa79857af66f826c6aec2634fc39bdf4bbb40dda_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a954c5f7e2c3d4b8ea735f01c72552f500557713ea34468b8e4ed80e74d906aa = $this->env->getExtension("native_profiler");
        $__internal_a954c5f7e2c3d4b8ea735f01c72552f500557713ea34468b8e4ed80e74d906aa->enter($__internal_a954c5f7e2c3d4b8ea735f01c72552f500557713ea34468b8e4ed80e74d906aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a954c5f7e2c3d4b8ea735f01c72552f500557713ea34468b8e4ed80e74d906aa->leave($__internal_a954c5f7e2c3d4b8ea735f01c72552f500557713ea34468b8e4ed80e74d906aa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
