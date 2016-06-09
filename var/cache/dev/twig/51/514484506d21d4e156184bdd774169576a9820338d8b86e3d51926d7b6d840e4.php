<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fdfaebc6b454807ec57852726a74adf16272665647118be155edeb1458327024 extends Twig_Template
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
        $__internal_29c7b2e1d7f238d0d57b92cab41dbe1f9046ea0b80f6a60ef69aa17864bd5a05 = $this->env->getExtension("native_profiler");
        $__internal_29c7b2e1d7f238d0d57b92cab41dbe1f9046ea0b80f6a60ef69aa17864bd5a05->enter($__internal_29c7b2e1d7f238d0d57b92cab41dbe1f9046ea0b80f6a60ef69aa17864bd5a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c7b2e1d7f238d0d57b92cab41dbe1f9046ea0b80f6a60ef69aa17864bd5a05->leave($__internal_29c7b2e1d7f238d0d57b92cab41dbe1f9046ea0b80f6a60ef69aa17864bd5a05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_058b7e81482d8fbf4ffb60fd6278b62ea08c1335098aba52e8812ecf22c295cc = $this->env->getExtension("native_profiler");
        $__internal_058b7e81482d8fbf4ffb60fd6278b62ea08c1335098aba52e8812ecf22c295cc->enter($__internal_058b7e81482d8fbf4ffb60fd6278b62ea08c1335098aba52e8812ecf22c295cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_058b7e81482d8fbf4ffb60fd6278b62ea08c1335098aba52e8812ecf22c295cc->leave($__internal_058b7e81482d8fbf4ffb60fd6278b62ea08c1335098aba52e8812ecf22c295cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a667d78c2273fd8a07d177fe212dff57d0b4034020b06b98e713a6ce745ae157 = $this->env->getExtension("native_profiler");
        $__internal_a667d78c2273fd8a07d177fe212dff57d0b4034020b06b98e713a6ce745ae157->enter($__internal_a667d78c2273fd8a07d177fe212dff57d0b4034020b06b98e713a6ce745ae157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a667d78c2273fd8a07d177fe212dff57d0b4034020b06b98e713a6ce745ae157->leave($__internal_a667d78c2273fd8a07d177fe212dff57d0b4034020b06b98e713a6ce745ae157_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f0823f9b0b5ebe69a76e783a427e6e0e711731b80ba7800c17d0717b24b7ba9 = $this->env->getExtension("native_profiler");
        $__internal_8f0823f9b0b5ebe69a76e783a427e6e0e711731b80ba7800c17d0717b24b7ba9->enter($__internal_8f0823f9b0b5ebe69a76e783a427e6e0e711731b80ba7800c17d0717b24b7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f0823f9b0b5ebe69a76e783a427e6e0e711731b80ba7800c17d0717b24b7ba9->leave($__internal_8f0823f9b0b5ebe69a76e783a427e6e0e711731b80ba7800c17d0717b24b7ba9_prof);

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
