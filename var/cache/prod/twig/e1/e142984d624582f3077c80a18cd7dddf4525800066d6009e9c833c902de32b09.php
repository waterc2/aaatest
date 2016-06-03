<?php

/* base.html.twig */
class __TwigTemplate_836264a0f04c4487f0371d1a9c367bdae91b1da52fdcb3021f2ce61a77e9052c extends Twig_Template
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
        $__internal_3c34fe6a02ca9ca8c3a30d3b98263c6d480373e54e9ce42b2d18095c396a9cef = $this->env->getExtension("native_profiler");
        $__internal_3c34fe6a02ca9ca8c3a30d3b98263c6d480373e54e9ce42b2d18095c396a9cef->enter($__internal_3c34fe6a02ca9ca8c3a30d3b98263c6d480373e54e9ce42b2d18095c396a9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_3c34fe6a02ca9ca8c3a30d3b98263c6d480373e54e9ce42b2d18095c396a9cef->leave($__internal_3c34fe6a02ca9ca8c3a30d3b98263c6d480373e54e9ce42b2d18095c396a9cef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_27074eee50e60536cd55a3143170df642c0feaa7ed07534074f12b1e415a3b81 = $this->env->getExtension("native_profiler");
        $__internal_27074eee50e60536cd55a3143170df642c0feaa7ed07534074f12b1e415a3b81->enter($__internal_27074eee50e60536cd55a3143170df642c0feaa7ed07534074f12b1e415a3b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_27074eee50e60536cd55a3143170df642c0feaa7ed07534074f12b1e415a3b81->leave($__internal_27074eee50e60536cd55a3143170df642c0feaa7ed07534074f12b1e415a3b81_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d46b3618eb3999dd8bcdca536a9c5282b655a06b899933803fcea976686093b4 = $this->env->getExtension("native_profiler");
        $__internal_d46b3618eb3999dd8bcdca536a9c5282b655a06b899933803fcea976686093b4->enter($__internal_d46b3618eb3999dd8bcdca536a9c5282b655a06b899933803fcea976686093b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
        ";
        
        $__internal_d46b3618eb3999dd8bcdca536a9c5282b655a06b899933803fcea976686093b4->leave($__internal_d46b3618eb3999dd8bcdca536a9c5282b655a06b899933803fcea976686093b4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1c70d86a026dde1dfaf234d86c63623883214998ea85ca987d688bea0dd6e7b = $this->env->getExtension("native_profiler");
        $__internal_c1c70d86a026dde1dfaf234d86c63623883214998ea85ca987d688bea0dd6e7b->enter($__internal_c1c70d86a026dde1dfaf234d86c63623883214998ea85ca987d688bea0dd6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1c70d86a026dde1dfaf234d86c63623883214998ea85ca987d688bea0dd6e7b->leave($__internal_c1c70d86a026dde1dfaf234d86c63623883214998ea85ca987d688bea0dd6e7b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d72c22c77e61f6362a0664939822f5cc90d36b46a5fe67121a3f7e6fb8bbe9fe = $this->env->getExtension("native_profiler");
        $__internal_d72c22c77e61f6362a0664939822f5cc90d36b46a5fe67121a3f7e6fb8bbe9fe->enter($__internal_d72c22c77e61f6362a0664939822f5cc90d36b46a5fe67121a3f7e6fb8bbe9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_d72c22c77e61f6362a0664939822f5cc90d36b46a5fe67121a3f7e6fb8bbe9fe->leave($__internal_d72c22c77e61f6362a0664939822f5cc90d36b46a5fe67121a3f7e6fb8bbe9fe_prof);

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
        return array (  105 => 17,  99 => 16,  88 => 15,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 15,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}        */
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
