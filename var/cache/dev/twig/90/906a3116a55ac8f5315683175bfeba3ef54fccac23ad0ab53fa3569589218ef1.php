<?php

/* base.html.twig */
class __TwigTemplate_3a71d70fac4af969a3db59b8c0d583ac946f18aa85dcf1aa200483597e05c875 extends Twig_Template
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
        $__internal_88a9e6437c39fa9aea163e7a3568fc48f8843396228820cc5adffca29a854519 = $this->env->getExtension("native_profiler");
        $__internal_88a9e6437c39fa9aea163e7a3568fc48f8843396228820cc5adffca29a854519->enter($__internal_88a9e6437c39fa9aea163e7a3568fc48f8843396228820cc5adffca29a854519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_88a9e6437c39fa9aea163e7a3568fc48f8843396228820cc5adffca29a854519->leave($__internal_88a9e6437c39fa9aea163e7a3568fc48f8843396228820cc5adffca29a854519_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47d39b357f0e4a670a8f5730e4df2964f76c88958526dba2f5f6dffd1e3b2ce6 = $this->env->getExtension("native_profiler");
        $__internal_47d39b357f0e4a670a8f5730e4df2964f76c88958526dba2f5f6dffd1e3b2ce6->enter($__internal_47d39b357f0e4a670a8f5730e4df2964f76c88958526dba2f5f6dffd1e3b2ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47d39b357f0e4a670a8f5730e4df2964f76c88958526dba2f5f6dffd1e3b2ce6->leave($__internal_47d39b357f0e4a670a8f5730e4df2964f76c88958526dba2f5f6dffd1e3b2ce6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2123342c46a4d7976f953381589ebeae9aab8406d998b2896883e7baf71edfa = $this->env->getExtension("native_profiler");
        $__internal_f2123342c46a4d7976f953381589ebeae9aab8406d998b2896883e7baf71edfa->enter($__internal_f2123342c46a4d7976f953381589ebeae9aab8406d998b2896883e7baf71edfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
        ";
        
        $__internal_f2123342c46a4d7976f953381589ebeae9aab8406d998b2896883e7baf71edfa->leave($__internal_f2123342c46a4d7976f953381589ebeae9aab8406d998b2896883e7baf71edfa_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_10dcf177295449acd1f9376a57cdd7dc1e5b101e7ab32cea0a08355bd13ba536 = $this->env->getExtension("native_profiler");
        $__internal_10dcf177295449acd1f9376a57cdd7dc1e5b101e7ab32cea0a08355bd13ba536->enter($__internal_10dcf177295449acd1f9376a57cdd7dc1e5b101e7ab32cea0a08355bd13ba536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10dcf177295449acd1f9376a57cdd7dc1e5b101e7ab32cea0a08355bd13ba536->leave($__internal_10dcf177295449acd1f9376a57cdd7dc1e5b101e7ab32cea0a08355bd13ba536_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a10bb2eafbde1a65e46f2c2bbd7f43e21185b72d612826ab78eccbdd1006d3e0 = $this->env->getExtension("native_profiler");
        $__internal_a10bb2eafbde1a65e46f2c2bbd7f43e21185b72d612826ab78eccbdd1006d3e0->enter($__internal_a10bb2eafbde1a65e46f2c2bbd7f43e21185b72d612826ab78eccbdd1006d3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_a10bb2eafbde1a65e46f2c2bbd7f43e21185b72d612826ab78eccbdd1006d3e0->leave($__internal_a10bb2eafbde1a65e46f2c2bbd7f43e21185b72d612826ab78eccbdd1006d3e0_prof);

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
