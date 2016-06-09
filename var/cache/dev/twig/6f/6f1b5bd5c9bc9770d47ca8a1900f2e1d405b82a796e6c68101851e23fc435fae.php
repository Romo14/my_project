<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_63e1982f210d6458a4414247f0f0c24408d30c53bd596dfab2c5a1821e9174fb extends Twig_Template
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
        $__internal_60f46008f94709d4483127c5ce52dd2b49af2a3ef3cd29f2b61a353cf1bfdeef = $this->env->getExtension("native_profiler");
        $__internal_60f46008f94709d4483127c5ce52dd2b49af2a3ef3cd29f2b61a353cf1bfdeef->enter($__internal_60f46008f94709d4483127c5ce52dd2b49af2a3ef3cd29f2b61a353cf1bfdeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f46008f94709d4483127c5ce52dd2b49af2a3ef3cd29f2b61a353cf1bfdeef->leave($__internal_60f46008f94709d4483127c5ce52dd2b49af2a3ef3cd29f2b61a353cf1bfdeef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b1280c464836321381aebf616ceade290fb15a2728b3aa390fe5810764447ed = $this->env->getExtension("native_profiler");
        $__internal_5b1280c464836321381aebf616ceade290fb15a2728b3aa390fe5810764447ed->enter($__internal_5b1280c464836321381aebf616ceade290fb15a2728b3aa390fe5810764447ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b1280c464836321381aebf616ceade290fb15a2728b3aa390fe5810764447ed->leave($__internal_5b1280c464836321381aebf616ceade290fb15a2728b3aa390fe5810764447ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c841cab1d84de38e300027d31721f3c1bec9f3625164fa3adbbf905094507b4 = $this->env->getExtension("native_profiler");
        $__internal_1c841cab1d84de38e300027d31721f3c1bec9f3625164fa3adbbf905094507b4->enter($__internal_1c841cab1d84de38e300027d31721f3c1bec9f3625164fa3adbbf905094507b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c841cab1d84de38e300027d31721f3c1bec9f3625164fa3adbbf905094507b4->leave($__internal_1c841cab1d84de38e300027d31721f3c1bec9f3625164fa3adbbf905094507b4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fecc77bf9a64866d4560bb65e131084f4272f2eb0184446020f4bc7131ca640a = $this->env->getExtension("native_profiler");
        $__internal_fecc77bf9a64866d4560bb65e131084f4272f2eb0184446020f4bc7131ca640a->enter($__internal_fecc77bf9a64866d4560bb65e131084f4272f2eb0184446020f4bc7131ca640a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fecc77bf9a64866d4560bb65e131084f4272f2eb0184446020f4bc7131ca640a->leave($__internal_fecc77bf9a64866d4560bb65e131084f4272f2eb0184446020f4bc7131ca640a_prof);

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
