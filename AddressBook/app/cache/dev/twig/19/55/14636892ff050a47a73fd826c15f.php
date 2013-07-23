<?php

/* AcmeAddressBookBundle:Default:index.html.twig */
class __TwigTemplate_195514636892ff050a47a73fd826c15f extends Twig_Template
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

    // line 4
    public function block_main_container($context, array $blocks = array())
    {
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashmessage"]) {
            // line 6
            echo "    <div>
        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["flashmessage"]) ? $context["flashmessage"] : $this->getContext($context, "flashmessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashmessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<div>
    <span> Address Book Entries:</span>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeAddressBookBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  38 => 7,  35 => 6,  31 => 5,  28 => 4,);
    }
}
