<?php

/* {# inline_template_start #}
<div class="col-sm-4">
  <div class="single-service">
   <div class="service-img">
    <a href="vistaporcategoria/{{ tid__value }}" >
         {{ field_tx_imagen_categoria }}
    </a>
    </div>
	<div class="service-info">
<h3><a href="vistaporcategoria/{{ tid__value }}">{{ name }}</a></h3>
<p>{{ description__value }}</p>
<p><a href="vistaporcategoria/{{ tid__value }}" >Ver cátalogo</a></p>
</div>
</div>
</div> */
class __TwigTemplate_577d85c962b20829ca9e0368910168c7f7e782695a927560bc3b5a9ff2a0852e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 2
        echo "<div class=\"col-sm-4\">
  <div class=\"single-service\">
   <div class=\"service-img\">
    <a href=\"vistaporcategoria/";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid__value"] ?? null), "html", null, true));
        echo "\" >
         ";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_tx_imagen_categoria"] ?? null), "html", null, true));
        echo "
    </a>
    </div>
\t<div class=\"service-info\">
<h3><a href=\"vistaporcategoria/";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid__value"] ?? null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
        echo "</a></h3>
<p>";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["description__value"] ?? null), "html", null, true));
        echo "</p>
<p><a href=\"vistaporcategoria/";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tid__value"] ?? null), "html", null, true));
        echo "\" >Ver cátalogo</a></p>
</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}
<div class=\"col-sm-4\">
  <div class=\"single-service\">
   <div class=\"service-img\">
    <a href=\"vistaporcategoria/{{ tid__value }}\" >
         {{ field_tx_imagen_categoria }}
    </a>
    </div>
\t<div class=\"service-info\">
<h3><a href=\"vistaporcategoria/{{ tid__value }}\">{{ name }}</a></h3>
<p>{{ description__value }}</p>
<p><a href=\"vistaporcategoria/{{ tid__value }}\" >Ver cátalogo</a></p>
</div>
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 12,  79 => 11,  73 => 10,  66 => 6,  62 => 5,  57 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}
<div class=\"col-sm-4\">
  <div class=\"single-service\">
   <div class=\"service-img\">
    <a href=\"vistaporcategoria/{{ tid__value }}\" >
         {{ field_tx_imagen_categoria }}
    </a>
    </div>
\t<div class=\"service-info\">
<h3><a href=\"vistaporcategoria/{{ tid__value }}\">{{ name }}</a></h3>
<p>{{ description__value }}</p>
<p><a href=\"vistaporcategoria/{{ tid__value }}\" >Ver cátalogo</a></p>
</div>
</div>
</div>", "");
    }
}
