<?php

/* ::base.html.twig */
class __TwigTemplate_55999c4137cd82362c809c634c84bc7fa468f8422d9d77bfcb06bb47277ea9c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
\t\t    
                    ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 46
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 49
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "            </div>
        </section>

        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "AhoyCiné";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Accueil</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_critiques");
        echo "\">Critiques</a></li>
\t\t\t\t";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_new");
            echo "\">Nouvelle critique</a></li>
                                ";
        }
        // line 29
        echo "                                <!-- <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li> -->    <!-- Non implémenté -->
\t\t\t\t";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                                    </a></li>
                                ";
        } else {
            // line 33
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                                ";
        }
        // line 35
        echo "                                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 36
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                                    <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Déconnexion", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                    </a></li>
                                ";
        } else {
            // line 41
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connexion", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                ";
        }
        // line 43
        echo "                            </ul>
                        </nav>
                    ";
    }

    // line 49
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">AhoyCiné</a>";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "                  BOUVIER Manuel, CHAILLOU Valentin & JOUSSE Wilfried
                ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 67,  208 => 62,  205 => 61,  200 => 57,  195 => 54,  187 => 49,  181 => 43,  173 => 41,  167 => 38,  163 => 37,  158 => 36,  155 => 35,  149 => 33,  145 => 31,  143 => 30,  138 => 29,  132 => 27,  130 => 26,  126 => 25,  122 => 24,  118 => 22,  115 => 21,  109 => 12,  105 => 10,  102 => 9,  96 => 5,  90 => 68,  88 => 67,  83 => 64,  81 => 61,  76 => 58,  74 => 57,  70 => 55,  68 => 54,  60 => 49,  55 => 46,  53 => 21,  42 => 14,  40 => 9,  33 => 5,  27 => 1,);
    }
}
