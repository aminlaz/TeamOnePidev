<?php

/* base.html.twig */
class __TwigTemplate_412ad17737ebed43c2bf04de2a3193a568ddc7bd1e5f510c3bdef299b3b764c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'menu' => array($this, 'block_menu'),
            'home' => array($this, 'block_home'),
            'menu_home' => array($this, 'block_menu_home'),
            'menu_events' => array($this, 'block_menu_events'),
            'menu_forum' => array($this, 'block_menu_forum'),
            'menu_blog' => array($this, 'block_menu_blog'),
            'menu_reclamation' => array($this, 'block_menu_reclamation'),
            'current_page' => array($this, 'block_current_page'),
            'content' => array($this, 'block_content'),
            'getyourticket' => array($this, 'block_getyourticket'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!-- head -->

<head>
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/events.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/events_responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/elements.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/elements_responsive.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/news.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/news_responsive.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/speakers.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/speakers_responsive.css"), "html", null, true);
        echo "\">
\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/contact_responsive.css"), "html", null, true);
        echo "\">
    ";
        // line 31
        $this->displayBlock('css', $context, $blocks);
        // line 33
        echo "</head>



<body>

<div class=\"super_container\">

    <!-- Menu -->
    ";
        // line 42
        $this->displayBlock('menu', $context, $blocks);
        // line 79
        echo "    <!-- Home -->
    ";
        // line 80
        $this->displayBlock('home', $context, $blocks);
        // line 234
        echo "    <!-- Events -->
    ";
        // line 235
        $this->displayBlock('content', $context, $blocks);
        // line 238
        echo "    <!-- Call to action -->
    ";
        // line 239
        $this->displayBlock('getyourticket', $context, $blocks);
        // line 254
        echo "    <!-- Footer -->
    ";
        // line 255
        $this->displayBlock('footer', $context, $blocks);
        // line 361
        echo "</div>

";
        // line 363
        $this->displayBlock('js', $context, $blocks);
        // line 386
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "        <title>Tech-Events</title>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 32
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "
        <div class=\"menu trans_500\">
            <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
                <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
                <div class=\"logo menu_logo\">
                    <a href=\"#\">
                        <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                            <div class=\"logo_image\"><div><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"logo_content\">
                                <div class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                <div class=\"logo_sub\">For all your technological needs</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class=\"menu_item\"><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum");
        echo "\">Forum</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("events");
        echo "\">Tickets</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Blog</a></li>
                    <li class=\"menu_item\"><a href=\"";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation");
        echo "\">Reclamation</a></li>
                </ul>
            </div>
            <div class=\"menu_social\">
                <div class=\"menu_social_title\">Follow uf on Social Media</div>
                <ul>
                    <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        // line 81
        echo "        <div class=\"home\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/events.jpg"), "html", null, true);
        echo "\" data-speed=\"0.8\"></div>

            <!-- Header -->

            <header class=\"header\" id=\"header\">
                <div>
                    <div class=\"header_top\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"header_top_content d-flex flex-row align-items-center justify-content-start\">
                                        <div>
                                            <a href=\"#\">
                                                <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                                    <div class=\"logo_image\"><div><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                                    <div class=\"logo_content\">
                                                        <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                                        <div class=\"logo_sub\">For all your technological needs</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"header_social ml-auto\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"header_nav\" id=\"header_nav_pin\">
                        <div class=\"header_nav_inner\">
                            <div class=\"header_nav_container\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"header_nav_content d-flex flex-row align-items-center justify-content-start\">

                                                <nav class=\"main_nav\">
                                                    <ul>
                                                        <li ";
        // line 130
        $this->displayBlock('menu_home', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Home</a></li>
                                                        <li ";
        // line 131
        $this->displayBlock('menu_events', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("events");
        echo "\">Events</a></li>
                                                        <li ";
        // line 132
        $this->displayBlock('menu_forum', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum");
        echo "\">Forum</a></li>
                                                        <li ";
        // line 133
        $this->displayBlock('menu_blog', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Blog</a></li>
                                                        <li ";
        // line 134
        $this->displayBlock('menu_reclamation', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reclamation");
        echo "\">Reclamation</a></li>
                                                    </ul>
                                                </nav>
                                                <div class=\"header_extra ml-auto\">
                                                    <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>

                                                    <!-- start login button -->


                                                        <div class=\"text-center\" style=\"display: inline-block;
\t                                                                                vertical-align: middle;
\t                                                                                        padding: 10px;
\t                                                                                        cursor: pointer;\" >
                                                            <a href=\"\" data-toggle=\"modal\" data-target=\"#modalLoginForm\"> Login </a>
                                                        </div>



                                                    <!-- end login button -->
                                                    <div class=\"button header_button\"><a href=\"#\">Buy Tickets Now!</a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search_container\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"search_content d-flex flex-row align-items-center justify-content-end\">
                                                <form action=\"#\" id=\"search_container_form\" class=\"search_container_form\">
                                                    <input type=\"text\" class=\"search_container_input\" placeholder=\"Search\" required=\"required\">
                                                    <button class=\"search_container_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- login popup start -->
            <div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body mx-3\">
                            <div class=\"md-form mb-5\">
                                <i class=\"grey-text text-center\"> Email </i>
                                <input type=\"email\" id=\"defaultForm-email\" class=\"form-control validate\">

                            </div>

                            <div class=\"md-form mb-4\">
                                <i class=\"grey-text text-center \"> Password </i>
                                <input type=\"password\" id=\"defaultForm-pass\" class=\"form-control validate\">
                            </div>

                        </div>
                        <div class=\"modal-footer d-flex justify-content-center\">
                            <button class=\"btn btn-default\">Login</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login popup end -->
            <!-- current page -->
            ";
        // line 211
        $this->displayBlock('current_page', $context, $blocks);
        // line 230
        echo "            <!-- current page -->
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_menu_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_home"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 131
    public function block_menu_events($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_events"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_events"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_menu_forum($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_forum"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_forum"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_menu_blog($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_blog"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_menu_reclamation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reclamation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reclamation"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 212
        echo "            <div class=\"home_content_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"home_content d-flex flex-row align-items-end justify-content-start\">
                                <div class=\"current_page\">Events</div>
                                <div class=\"breadcrumbs ml-auto\">
                                    <ul>
                                        <li><a href=\"index.html\">Home</a></li>
                                        <li>Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 235
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 236
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 239
    public function block_getyourticket($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "getyourticket"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "getyourticket"));

        // line 240
        echo "        <div class=\"cta\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cta_1.jpg"), "html", null, true);
        echo "\" data-speed=\"0.8\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"cta_content text-center\">
                            <div class=\"cta_title\">Get your tickets now!</div>
                            <div class=\"button cta_button\"><a href=\"#\">Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 255
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 256
        echo "        <footer class=\"footer\">
            <div class=\"footer_content\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Footer Column -->
                        <div class=\"col-lg-4 footer_col\">
                            <div class=\"footer_about\">
                                <div>
                                    <a href=\"#\">
                                        <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                            <div class=\"logo_image\"><div><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                            <div class=\"logo_content\">
                                                <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                                <div class=\"logo_sub\">For all your technological needs</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"footer_about_text\">
                                    <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-3 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Services</a></li>
                                    <li><a href=\"#\">Speakers</a></li>
                                    <li><a href=\"#\">Event Dates</a></li>
                                    <li><a href=\"#\">Information</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-3 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">Logistics</a></li>
                                    <li><a href=\"#\">Our Partners</a></li>
                                    <li><a href=\"#\">Testimonials</a></li>
                                    <li><a href=\"#\">Price Plans</a></li>
                                    <li><a href=\"#\">News</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-2 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Services</a></li>
                                    <li><a href=\"#\">Speakers</a></li>
                                    <li><a href=\"#\">Event Dates</a></li>
                                    <li><a href=\"#\">Information</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"footer_extra\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center\">
                                <div class=\"footer_social\">
                                    <div class=\"footer_social_title\">Follow us on Social Media</div>
                                    <ul class=\"footer_social_list\">
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                                <div class=\"footer_extra_right ml-lg-auto text-lg-right\">
                                    <div class=\"footer_extra_links\">
                                        <ul>
                                            <li><a href=\"contact.html\">Contact us</a></li>
                                            <li><a href=\"#\">Sitemap</a></li>
                                            <li><a href=\"#\">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 363
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 364
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/events.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/progressbar/progressbar.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jquery-circle-progress-1.2.2/circle-progress.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/elements.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/news.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/speakers.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
\t<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  855 => 383,  850 => 381,  846 => 380,  842 => 379,  838 => 378,  834 => 377,  830 => 376,  826 => 375,  822 => 374,  818 => 373,  814 => 372,  810 => 371,  806 => 370,  802 => 369,  798 => 368,  794 => 367,  790 => 366,  786 => 365,  781 => 364,  772 => 363,  668 => 267,  655 => 256,  646 => 255,  623 => 241,  620 => 240,  611 => 239,  600 => 236,  591 => 235,  564 => 212,  555 => 211,  538 => 134,  521 => 133,  504 => 132,  487 => 131,  470 => 130,  457 => 230,  455 => 211,  373 => 134,  367 => 133,  361 => 132,  355 => 131,  349 => 130,  312 => 96,  295 => 82,  292 => 81,  283 => 80,  257 => 63,  253 => 62,  249 => 61,  245 => 60,  241 => 59,  229 => 50,  220 => 43,  211 => 42,  201 => 32,  192 => 31,  181 => 7,  172 => 6,  161 => 386,  159 => 363,  155 => 361,  153 => 255,  150 => 254,  148 => 239,  145 => 238,  143 => 235,  140 => 234,  138 => 80,  135 => 79,  133 => 42,  122 => 33,  120 => 31,  116 => 30,  112 => 29,  108 => 28,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  48 => 9,  46 => 6,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<!-- head -->

<head>
    {% block title %}
        <title>Tech-Events</title>
    {% endblock title %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{asset ('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" {{ asset ('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/events.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/events_responsive.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/elements.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/elements_responsive.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/news.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/news_responsive.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/speakers.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/speakers_responsive.css') }}\">
\t\t
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/responsive.css') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/contact.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/contact_responsive.css') }}\">
    {% block css %}
    {% endblock css %}
</head>



<body>

<div class=\"super_container\">

    <!-- Menu -->
    {% block menu %}

        <div class=\"menu trans_500\">
            <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
                <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
                <div class=\"logo menu_logo\">
                    <a href=\"#\">
                        <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                            <div class=\"logo_image\"><div><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"></div></div>
                            <div class=\"logo_content\">
                                <div class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                <div class=\"logo_sub\">For all your technological needs</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class=\"menu_item\"><a href=\"{{ path(\"index\")}}\">Home</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path(\"forum\")}}\">Forum</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path(\"events\")}}\">Tickets</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path(\"blog\")}}\">Blog</a></li>
                    <li class=\"menu_item\"><a href=\"{{ path(\"reclamation\")}}\">Reclamation</a></li>
                </ul>
            </div>
            <div class=\"menu_social\">
                <div class=\"menu_social_title\">Follow uf on Social Media</div>
                <ul>
                    <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                </ul>
            </div>
        </div>
    {% endblock menu %}
    <!-- Home -->
    {% block home  %}
        <div class=\"home\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('images/events.jpg') }}\" data-speed=\"0.8\"></div>

            <!-- Header -->

            <header class=\"header\" id=\"header\">
                <div>
                    <div class=\"header_top\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col\">
                                    <div class=\"header_top_content d-flex flex-row align-items-center justify-content-start\">
                                        <div>
                                            <a href=\"#\">
                                                <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                                    <div class=\"logo_image\"><div><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"></div></div>
                                                    <div class=\"logo_content\">
                                                        <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                                        <div class=\"logo_sub\">For all your technological needs</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class=\"header_social ml-auto\">
                                            <ul>
                                                <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"header_nav\" id=\"header_nav_pin\">
                        <div class=\"header_nav_inner\">
                            <div class=\"header_nav_container\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"header_nav_content d-flex flex-row align-items-center justify-content-start\">

                                                <nav class=\"main_nav\">
                                                    <ul>
                                                        <li {%block menu_home %}{%endblock menu_home %}><a href=\"{{ path(\"index\")}}\">Home</a></li>
                                                        <li {%block menu_events %}{%endblock menu_events %}><a href=\"{{ path(\"events\")}}\">Events</a></li>
                                                        <li {%block menu_forum %}{%endblock menu_forum %}><a href=\"{{ path(\"forum\")}}\">Forum</a></li>
                                                        <li {%block menu_blog %}{%endblock menu_blog %}><a href=\"{{ path(\"blog\")}}\">Blog</a></li>
                                                        <li {%block menu_reclamation %}{%endblock menu_reclamation %}><a href=\"{{ path(\"reclamation\")}}\">Reclamation</a></li>
                                                    </ul>
                                                </nav>
                                                <div class=\"header_extra ml-auto\">
                                                    <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>

                                                    <!-- start login button -->


                                                        <div class=\"text-center\" style=\"display: inline-block;
\t                                                                                vertical-align: middle;
\t                                                                                        padding: 10px;
\t                                                                                        cursor: pointer;\" >
                                                            <a href=\"\" data-toggle=\"modal\" data-target=\"#modalLoginForm\"> Login </a>
                                                        </div>



                                                    <!-- end login button -->
                                                    <div class=\"button header_button\"><a href=\"#\">Buy Tickets Now!</a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"search_container\">
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <div class=\"search_content d-flex flex-row align-items-center justify-content-end\">
                                                <form action=\"#\" id=\"search_container_form\" class=\"search_container_form\">
                                                    <input type=\"text\" class=\"search_container_input\" placeholder=\"Search\" required=\"required\">
                                                    <button class=\"search_container_button\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- login popup start -->
            <div class=\"modal fade\" id=\"modalLoginForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header text-center\">
                            <h4 class=\"modal-title w-100 font-weight-bold\">Sign in</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body mx-3\">
                            <div class=\"md-form mb-5\">
                                <i class=\"grey-text text-center\"> Email </i>
                                <input type=\"email\" id=\"defaultForm-email\" class=\"form-control validate\">

                            </div>

                            <div class=\"md-form mb-4\">
                                <i class=\"grey-text text-center \"> Password </i>
                                <input type=\"password\" id=\"defaultForm-pass\" class=\"form-control validate\">
                            </div>

                        </div>
                        <div class=\"modal-footer d-flex justify-content-center\">
                            <button class=\"btn btn-default\">Login</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login popup end -->
            <!-- current page -->
            {% block current_page %}
            <div class=\"home_content_container\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"home_content d-flex flex-row align-items-end justify-content-start\">
                                <div class=\"current_page\">Events</div>
                                <div class=\"breadcrumbs ml-auto\">
                                    <ul>
                                        <li><a href=\"index.html\">Home</a></li>
                                        <li>Events</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock current_page %}
            <!-- current page -->
        </div>

    {% endblock home %}
    <!-- Events -->
    {% block content %}

    {% endblock content %}
    <!-- Call to action -->
    {% block getyourticket  %}
        <div class=\"cta\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"{{ asset('images/cta_1.jpg') }}\" data-speed=\"0.8\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"cta_content text-center\">
                            <div class=\"cta_title\">Get your tickets now!</div>
                            <div class=\"button cta_button\"><a href=\"#\">Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock getyourticket %}
    <!-- Footer -->
    {% block footer %}
        <footer class=\"footer\">
            <div class=\"footer_content\">
                <div class=\"container\">
                    <div class=\"row\">

                        <!-- Footer Column -->
                        <div class=\"col-lg-4 footer_col\">
                            <div class=\"footer_about\">
                                <div>
                                    <a href=\"#\">
                                        <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                            <div class=\"logo_image\"><div><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"></div></div>
                                            <div class=\"logo_content\">
                                                <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">Tech-Events</div>
                                                <div class=\"logo_sub\">For all your technological needs</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"footer_about_text\">
                                    <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-3 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Services</a></li>
                                    <li><a href=\"#\">Speakers</a></li>
                                    <li><a href=\"#\">Event Dates</a></li>
                                    <li><a href=\"#\">Information</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-3 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">Logistics</a></li>
                                    <li><a href=\"#\">Our Partners</a></li>
                                    <li><a href=\"#\">Testimonials</a></li>
                                    <li><a href=\"#\">Price Plans</a></li>
                                    <li><a href=\"#\">News</a></li>
                                    <li><a href=\"#\">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class=\"col-lg-2 footer_col\">
                            <div class=\"footer_links\">
                                <ul>
                                    <li><a href=\"#\">About Us</a></li>
                                    <li><a href=\"#\">Services</a></li>
                                    <li><a href=\"#\">Speakers</a></li>
                                    <li><a href=\"#\">Event Dates</a></li>
                                    <li><a href=\"#\">Information</a></li>
                                    <li><a href=\"#\">Calendar</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"footer_extra\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center\">
                                <div class=\"footer_social\">
                                    <div class=\"footer_social_title\">Follow us on Social Media</div>
                                    <ul class=\"footer_social_list\">
                                        <li><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                    </ul>
                                </div>
                                <div class=\"footer_extra_right ml-lg-auto text-lg-right\">
                                    <div class=\"footer_extra_links\">
                                        <ul>
                                            <li><a href=\"contact.html\">Contact us</a></li>
                                            <li><a href=\"#\">Sitemap</a></li>
                                            <li><a href=\"#\">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class=\"copyright\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    {% endblock footer %}
</div>

{% block js %}
    <script src=\"{{ asset ('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset ('styles/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset ('styles/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
    <script src=\"{{ asset ('plugins/easing/easing.js') }}\"></script>
    <script src=\"{{ asset ('plugins/parallax-js-master/parallax.min.js') }}\"></script>
    <script src=\"{{ asset ('js/events.js') }}\"></script>
    <script src=\"{{ asset ('plugins/greensock/TweenMax.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/greensock/TimelineMax.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/scrollmagic/ScrollMagic.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/greensock/animation.gsap.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/greensock/ScrollToPlugin.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/progressbar/progressbar.min.js') }}\"></script>
\t<script src=\"{{ asset ('plugins/jquery-circle-progress-1.2.2/circle-progress.js') }}\"></script>
\t<script src=\"{{ asset ('js/elements.js') }}\"></script>
\t<script src=\"{{ asset ('js/news.js') }}\"></script>
\t<script src=\"{{ asset ('js/speakers.js') }}\"></script>
\t<script src=\"{{ asset ('js/custom.js') }}\"></script>
\t<script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
\t<script src=\"{{ asset ('js/contact.js') }}\"></script>

{% endblock js %}
</body>
</html>", "base.html.twig", "C:\\xampp\\htdocs\\GitHub\\TeamOnePidev\\PI3A16\\app\\Resources\\views\\base.html.twig");
    }
}
