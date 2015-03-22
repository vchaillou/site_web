<?php

/* BloggerBlogBundle:Page:connexion.html.twig */
class __TwigTemplate_1db699a4b995b1dc75a9dbcec5d97d5e068c9ddd3f5a26457bbff496576e53ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Connexion à AhoyCiné</h1>
    </header>

    <p>Se connecter avec son compte. Pas encore inscrit ? Inscrivez-vous <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_inscription");
        echo "\">ici</a></p>
    
    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_connexion");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Se connecter\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  63 => 14,  57 => 13,  52 => 11,  46 => 7,  43 => 6,  37 => 4,  11 => 2,);
    }
}
