<?php

/* AcmeAddressBookBundle:Default:addaddress.html.twig */
class __TwigTemplate_dfe03f9b82b5484ce228adcaa758e68e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeAddressBookBundle:Default:layout.html.twig");

        $this->blocks = array(
            'main_container' => array($this, 'block_main_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeAddressBookBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_container($context, array $blocks = array())
    {
        // line 4
        echo "<div>
  
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("acme_address_book_addaddress");
        echo "\" method=\"POST\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "firstName"), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "lastName"), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "companyName"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "street"), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "housenumber"), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "postcode"), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "city"), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["oForm"]) ? $context["oForm"] : $this->getContext($context, "oForm")), "country"), 'row');
        echo "
        <input type=\"submit\" value=\"send\">
    </form>  
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeAddressBookBundle:Default:addaddress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
