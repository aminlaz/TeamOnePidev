<?php

/* base.html.twig */
class __TwigTemplate_521fff656666dcea933f9654d4063238a98d58fb83a56106cf6841e8084af8b0 extends Twig_Template
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
            'events' => array($this, 'block_events'),
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
        // line 7
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 20
        echo "</head>



<body>

<div class=\"super_container\">

    <!-- Menu -->
    ";
        // line 29
        $this->displayBlock('menu', $context, $blocks);
        // line 67
        echo "    <!-- Home -->
    ";
        // line 68
        $this->displayBlock('home', $context, $blocks);
        // line 172
        echo "    <!-- Events -->
    ";
        // line 173
        $this->displayBlock('events', $context, $blocks);
        // line 345
        echo "    <!-- Call to action -->
    ";
        // line 346
        $this->displayBlock('getyourticket', $context, $blocks);
        // line 361
        echo "    <!-- Footer -->
    ";
        // line 362
        $this->displayBlock('footer', $context, $blocks);
        // line 468
        echo "</div>

";
        // line 470
        $this->displayBlock('js', $context, $blocks);
        // line 479
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

        echo " <title>Events</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/events.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/events_responsive.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "
        <div class=\"menu trans_500\">
            <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
                <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
                <div class=\"logo menu_logo\">
                    <a href=\"#\">
                        <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                            <div class=\"logo_image\"><div><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"logo_content\">
                                <div class=\"logo_text logo_text_not_ie\">The Conference</div>
                                <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class=\"menu_item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"menu_item\"><a href=\"#\">About us</a></li>
                    <li class=\"menu_item\"><a href=\"#\">Speakers</a></li>
                    <li class=\"menu_item\"><a href=\"#\">Tickets</a></li>
                    <li class=\"menu_item\"><a href=\"news.html\">News</a></li>
                    <li class=\"menu_item\"><a href=\"contact.html\">Contact</a></li>
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

    // line 68
    public function block_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "home"));

        // line 69
        echo "        <div class=\"home\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 70
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                                    <div class=\"logo_content\">
                                                        <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                        <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
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
                                                        <li><a href=\"index.html\">Home</a></li>
                                                        <li><a href=\"#\">About Us</a></li>
                                                        <li><a href=\"speakers.html\">Speakers</a></li>
                                                        <li class=\"active\"><a href=\"#\">Events</a></li>
                                                        <li><a href=\"news.html\">News</a></li>
                                                        <li><a href=\"contact.html\">Contact</a></li>
                                                    </ul>
                                                </nav>
                                                <div class=\"header_extra ml-auto\">
                                                    <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
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
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 173
    public function block_events($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "events"));

        // line 174
        echo "        <div class=\"events\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_9.jpg"), "html", null, true);
        echo ")\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Marketing Sollutions in 2018</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_speaker_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_speaker_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(images/event_10.jpg)\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Blockchain technology</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_1.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(images/event_11.jpg)\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Internet of things</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_1.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"pagination\">
                            <ul>
                                <li class=\"active\"><a href=\"#\">01.</a></li>
                                <li><a href=\"#\">02.</a></li>
                                <li><a href=\"#\">03.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 346
    public function block_getyourticket($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "getyourticket"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "getyourticket"));

        // line 347
        echo "        <div class=\"cta\">
            <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"";
        // line 348
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

    // line 362
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 363
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
                                            <div class=\"logo_image\"><div><img src=\"images/logo.png\" alt=\"\"></div></div>
                                            <div class=\"logo_content\">
                                                <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
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

    // line 470
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 471
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/events.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  739 => 477,  735 => 476,  731 => 475,  727 => 474,  723 => 473,  719 => 472,  714 => 471,  705 => 470,  591 => 363,  582 => 362,  559 => 348,  556 => 347,  547 => 346,  405 => 213,  394 => 205,  370 => 184,  358 => 174,  349 => 173,  251 => 84,  234 => 70,  231 => 69,  222 => 68,  182 => 37,  173 => 30,  164 => 29,  152 => 18,  148 => 17,  144 => 16,  140 => 15,  136 => 14,  132 => 13,  127 => 12,  118 => 11,  100 => 6,  89 => 479,  87 => 470,  83 => 468,  81 => 362,  78 => 361,  76 => 346,  73 => 345,  71 => 173,  68 => 172,  66 => 68,  63 => 67,  61 => 29,  50 => 20,  48 => 11,  42 => 7,  40 => 6,  33 => 1,);
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
    {% block title %} <title>Events</title> {% endblock title %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Conference project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block css %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{asset ('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\" {{ asset ('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/events.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/events_responsive.css') }}\">
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
                                <div class=\"logo_text logo_text_not_ie\">The Conference</div>
                                <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class=\"menu_item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"menu_item\"><a href=\"#\">About us</a></li>
                    <li class=\"menu_item\"><a href=\"#\">Speakers</a></li>
                    <li class=\"menu_item\"><a href=\"#\">Tickets</a></li>
                    <li class=\"menu_item\"><a href=\"news.html\">News</a></li>
                    <li class=\"menu_item\"><a href=\"contact.html\">Contact</a></li>
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
                                                        <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                        <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
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
                                                        <li><a href=\"index.html\">Home</a></li>
                                                        <li><a href=\"#\">About Us</a></li>
                                                        <li><a href=\"speakers.html\">Speakers</a></li>
                                                        <li class=\"active\"><a href=\"#\">Events</a></li>
                                                        <li><a href=\"news.html\">News</a></li>
                                                        <li><a href=\"contact.html\">Contact</a></li>
                                                    </ul>
                                                </nav>
                                                <div class=\"header_extra ml-auto\">
                                                    <div class=\"header_search\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></div>
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
        </div>
    {% endblock home %}
    <!-- Events -->
    {% block events %}
        <div class=\"events\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url({{ asset('images/event_9.jpg') }})\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Marketing Sollutions in 2018</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"{{ asset('images/event_speaker_1.jpg') }}\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"{{ asset('images/event_speaker_2.jpg') }}\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(images/event_10.jpg)\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Blockchain technology</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_1.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Event -->
                        <div class=\"event\">
                            <div class=\"row row-lg-eq-height\">
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_image_container\">
                                        <div class=\"background_image\" style=\"background-image:url(images/event_11.jpg)\"></div>
                                        <div class=\"date_container\">
                                            <a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date_content d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_day\">15</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"date_month\">May</div>
\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 event_col\">
                                    <div class=\"event_content\">
                                        <div class=\"event_title\">Internet of things</div>
                                        <div class=\"event_location\">@ Miami Auditorium</div>
                                        <div class=\"event_text\">
                                            <p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
                                        </div>
                                        <div class=\"event_speakers\">
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_1.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Michael Smith</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                            <!-- Event Speaker -->
                                            <div class=\"event_speaker d-flex flex-row align-items-center justify-content-start\">
                                                <div><div class=\"event_speaker_image\"><img src=\"images/event_speaker_2.jpg\" alt=\"\"></div></div>
                                                <div class=\"event_speaker_content\">
                                                    <div class=\"event_speaker_name\">Jessica Williams</div>
                                                    <div class=\"event_speaker_title\">Marketing Specialist</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"event_buttons\">
                                            <div class=\"button event_button event_button_1\"><a href=\"#\">Buy Tickets Now!</a></div>
                                            <div class=\"button_2 event_button event_button_2\"><a href=\"#\">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <div class=\"pagination\">
                            <ul>
                                <li class=\"active\"><a href=\"#\">01.</a></li>
                                <li><a href=\"#\">02.</a></li>
                                <li><a href=\"#\">03.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endblock events %}
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
                                            <div class=\"logo_image\"><div><img src=\"images/logo.png\" alt=\"\"></div></div>
                                            <div class=\"logo_content\">
                                                <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                                <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
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
{% endblock js %}
</body>
</html>", "base.html.twig", "C:\\wamp64\\www\\PI3A16\\app\\Resources\\views\\base.html.twig");
    }
}
