<?php

/* base.html.twig */
class __TwigTemplate_fb6fc1d3ee3a003b840c467e269db6d171762ad57486be2eb03c7ab0d401dca1 extends Twig_Template
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
        $__internal_cc92dc80e66350f6eb90772f4ff9022876d0a408ee06823ccf95964559f1e193 = $this->env->getExtension("native_profiler");
        $__internal_cc92dc80e66350f6eb90772f4ff9022876d0a408ee06823ccf95964559f1e193->enter($__internal_cc92dc80e66350f6eb90772f4ff9022876d0a408ee06823ccf95964559f1e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cc92dc80e66350f6eb90772f4ff9022876d0a408ee06823ccf95964559f1e193->leave($__internal_cc92dc80e66350f6eb90772f4ff9022876d0a408ee06823ccf95964559f1e193_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26b5f51b01b5697b6bded4035f833d9b5385de0a101dd4565d10c422dbbdb8b3 = $this->env->getExtension("native_profiler");
        $__internal_26b5f51b01b5697b6bded4035f833d9b5385de0a101dd4565d10c422dbbdb8b3->enter($__internal_26b5f51b01b5697b6bded4035f833d9b5385de0a101dd4565d10c422dbbdb8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26b5f51b01b5697b6bded4035f833d9b5385de0a101dd4565d10c422dbbdb8b3->leave($__internal_26b5f51b01b5697b6bded4035f833d9b5385de0a101dd4565d10c422dbbdb8b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2fec39e32aa632f694b18454449c3bb9daf800f9f08fb1e9244583c1ef68bfb = $this->env->getExtension("native_profiler");
        $__internal_c2fec39e32aa632f694b18454449c3bb9daf800f9f08fb1e9244583c1ef68bfb->enter($__internal_c2fec39e32aa632f694b18454449c3bb9daf800f9f08fb1e9244583c1ef68bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c2fec39e32aa632f694b18454449c3bb9daf800f9f08fb1e9244583c1ef68bfb->leave($__internal_c2fec39e32aa632f694b18454449c3bb9daf800f9f08fb1e9244583c1ef68bfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee835643ea52132b8de5f01a509bcc9aa5aef3f6ce88178ff289757ed7fdb8a1 = $this->env->getExtension("native_profiler");
        $__internal_ee835643ea52132b8de5f01a509bcc9aa5aef3f6ce88178ff289757ed7fdb8a1->enter($__internal_ee835643ea52132b8de5f01a509bcc9aa5aef3f6ce88178ff289757ed7fdb8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee835643ea52132b8de5f01a509bcc9aa5aef3f6ce88178ff289757ed7fdb8a1->leave($__internal_ee835643ea52132b8de5f01a509bcc9aa5aef3f6ce88178ff289757ed7fdb8a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d29d7826cd2bf1d4d8269af2a349f375f39778c3509417feb7f2f9eae470175 = $this->env->getExtension("native_profiler");
        $__internal_6d29d7826cd2bf1d4d8269af2a349f375f39778c3509417feb7f2f9eae470175->enter($__internal_6d29d7826cd2bf1d4d8269af2a349f375f39778c3509417feb7f2f9eae470175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d29d7826cd2bf1d4d8269af2a349f375f39778c3509417feb7f2f9eae470175->leave($__internal_6d29d7826cd2bf1d4d8269af2a349f375f39778c3509417feb7f2f9eae470175_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
