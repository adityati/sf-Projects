<?php

/* AcmeAddressBookBundle:Default:layout.html.twig */
class __TwigTemplate_5d916361d57692a8588d2557a5336a35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'navigation' => array($this, 'block_navigation'),
            'main_container' => array($this, 'block_main_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "AddressBook";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('content_header', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 28
        echo "
   
    <section class=\"main-container\">
    ";
        // line 31
        $this->displayBlock('main_container', $context, $blocks);
        // line 32
        echo "   
    </section>
    
  
";
    }

    // line 12
    public function block_content_header($context, array $blocks = array())
    {
        // line 13
        echo "       <h2>Address Book</h2> 
    ";
    }

    // line 16
    public function block_navigation($context, array $blocks = array())
    {
        // line 17
        echo "       <section id=\"navigation\">
            <ul>
                <li>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("acme_address_book_homepage");
        echo "\">Index</a>
                </li>
                <li>
                   <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("acme_address_book_addaddress");
        echo "\">Add Address to Book</a>
                </li>
            </ul>
       </section>
    ";
    }

    // line 31
    public function block_main_container($context, array $blocks = array())
    {
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AcmeAddressBookBundle:Default:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  120 => 31,  111 => 23,  105 => 20,  100 => 17,  97 => 16,  92 => 13,  89 => 12,  81 => 32,  79 => 31,  74 => 28,  72 => 16,  69 => 15,  67 => 12,  64 => 11,  61 => 10,  55 => 8,  49 => 5,  46 => 4,  43 => 3,  39 => 10,  36 => 9,  34 => 8,  31 => 7,  29 => 3,  25 => 1,);
    }
}
