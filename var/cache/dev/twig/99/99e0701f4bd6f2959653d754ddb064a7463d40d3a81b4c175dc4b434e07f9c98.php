<?php

/* search/search.html.twig */
class __TwigTemplate_e484afe735a36d9988ae2d94b4f6b740e224a325b8b31d7f867e702c039d7b2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "search/search.html.twig", 1);
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
        $__internal_5d84370ba16f420cdfd0dd39fbb0952bc922562fde8a7b1e2f971d12d2769152 = $this->env->getExtension("native_profiler");
        $__internal_5d84370ba16f420cdfd0dd39fbb0952bc922562fde8a7b1e2f971d12d2769152->enter($__internal_5d84370ba16f420cdfd0dd39fbb0952bc922562fde8a7b1e2f971d12d2769152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d84370ba16f420cdfd0dd39fbb0952bc922562fde8a7b1e2f971d12d2769152->leave($__internal_5d84370ba16f420cdfd0dd39fbb0952bc922562fde8a7b1e2f971d12d2769152_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f253cb56d6e0bda6834db3e44659eb233354ac6ad0e9409c38e4715564127e = $this->env->getExtension("native_profiler");
        $__internal_d9f253cb56d6e0bda6834db3e44659eb233354ac6ad0e9409c38e4715564127e->enter($__internal_d9f253cb56d6e0bda6834db3e44659eb233354ac6ad0e9409c38e4715564127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-lg-offset-4\">
\t\t<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_search");
        echo "\" method=\"get\">
\t\t\t<div class=\"input-group col-lg-6 \">
\t\t\t\t<input type=\"text\" name=\"k\" id=\"keyword\" class=\"form-control input-lg\" placeholder=\"search twitter\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
        echo "\" />
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-info btn-lg\" type=\"submit\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</span>
\t\t\t</div>
\t\t</form>
</div>
<div class=\"col-lg-offset-1\">
\t<div class=\"col-lg-7\">
";
        // line 18
        if (((isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")) != "")) {
            // line 19
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span>";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " result(s)</span>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<ul class = \"list-group\">
\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")));
            foreach ($context['_seq'] as $context["_key"] => $context["twitter"]) {
                // line 26
                echo "\t\t\t\t\t\t<li class = \"list-group-item\"><b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["twitter"], "user", array()), "name", array()), "html", null, true);
                echo "</b>: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["twitter"], "text", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["twitter"], "id_str", array()), "html", null, true);
                echo "</li>\t\t\t\t
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['twitter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t\t</ul>

\t\t\t\t\t<span class=\"pull-right\"> 
\t\t\t\t\t\t\t<ul class=\"pager\">
\t\t\t\t\t\t\t\t<li><a ";
            // line 32
            if (((isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")) != 0)) {
                echo "href=\"";
                echo $this->env->getExtension('routing')->getPath("_search");
                echo "?k=";
                echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
                echo "&prev=";
                echo twig_escape_filter($this->env, (isset($context["prev"]) ? $context["prev"] : $this->getContext($context, "prev")), "html", null, true);
                echo "\"";
            }
            echo " rel=\"prev\">&laquo;</a></li>
\t\t\t\t\t\t\t\t<li><a ";
            // line 33
            if (((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")) != 0)) {
                echo "href=\"";
                echo $this->env->getExtension('routing')->getPath("_search");
                echo "?k=";
                echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : $this->getContext($context, "keyword")), "html", null, true);
                echo "&next=";
                echo twig_escape_filter($this->env, (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "html", null, true);
                echo "\"";
            }
            echo " rel=\"next\">&raquo;</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
";
        }
        // line 39
        echo "\t</div>
\t<div class=\"col-lg-3\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<span>Search history</span>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<ul class = \"list-group\">
\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchlog"]) ? $context["searchlog"] : $this->getContext($context, "searchlog")));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 48
            echo "\t\t\t\t\t\t<li class = \"list-group-item\">";
            echo twig_escape_filter($this->env, $context["term"], "html", null, true);
            echo "</li>\t\t\t\t
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_d9f253cb56d6e0bda6834db3e44659eb233354ac6ad0e9409c38e4715564127e->leave($__internal_d9f253cb56d6e0bda6834db3e44659eb233354ac6ad0e9409c38e4715564127e_prof);

    }

    public function getTemplateName()
    {
        return "search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  141 => 48,  137 => 47,  127 => 39,  110 => 33,  98 => 32,  92 => 28,  79 => 26,  75 => 25,  68 => 21,  64 => 19,  62 => 18,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="col-lg-offset-4">*/
/* 		<form action="{{path('_search')}}" method="get">*/
/* 			<div class="input-group col-lg-6 ">*/
/* 				<input type="text" name="k" id="keyword" class="form-control input-lg" placeholder="search twitter" value="{{keyword}}" />*/
/* 				<span class="input-group-btn">*/
/* 					<button class="btn btn-info btn-lg" type="submit">*/
/* 						<i class="glyphicon glyphicon-search"></i>*/
/* 					</button>*/
/* 				</span>*/
/* 			</div>*/
/* 		</form>*/
/* </div>*/
/* <div class="col-lg-offset-1">*/
/* 	<div class="col-lg-7">*/
/* {% if keyword!='' %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 					<span>{{count}} result(s)</span>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 					<ul class = "list-group">*/
/* 					{% for twitter in result %}*/
/* 						<li class = "list-group-item"><b>{{ twitter.user.name }}</b>: {{ twitter.text }} {{ twitter.id_str }}</li>				*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* */
/* 					<span class="pull-right"> */
/* 							<ul class="pager">*/
/* 								<li><a {% if prev!=0 %}href="{{path('_search')}}?k={{keyword}}&prev={{prev}}"{%endif%} rel="prev">&laquo;</a></li>*/
/* 								<li><a {% if next!=0 %}href="{{path('_search')}}?k={{keyword}}&next={{next}}"{%endif%} rel="next">&raquo;</a></li>*/
/* 							</ul>*/
/* 					</span>*/
/* 			</div>*/
/* 		</div>*/
/* {% endif %}*/
/* 	</div>*/
/* 	<div class="col-lg-3">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 					<span>Search history</span>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 					<ul class = "list-group">*/
/* 					{% for term in searchlog %}*/
/* 						<li class = "list-group-item">{{term}}</li>				*/
/* 					{% endfor %}*/
/* 					</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
