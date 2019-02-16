<?php

/* @Event/Default/index.html.twig */
class __TwigTemplate_b16bd2f0864f0fb7123c783fd174f45261ba1fe9b9bf12a417396f74bf427405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Event/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_home' => array($this, 'block_menu_home'),
            'css' => array($this, 'block_css'),
            'current_page' => array($this, 'block_current_page'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " <title>Tech-Events</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_menu_home($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_home"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_home"));

        echo " class=\"active\" ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 9
        echo "    <div class=\"home_content_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"home_content\">
                        <div class=\"home_date\">August 25, 2018</div>
                        <div class=\"home_title\">2018 Public Policy Conference</div>
                        <div class=\"home_location\">Miami Marina Bay, FL</div>
                        <div class=\"home_text\">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                        <div class=\"home_buttons\">
                            <div class=\"button home_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                            <div class=\"button home_button\"><a href=\"#\">Find out more</a></div>
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

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "<div class=\"intro\">
    <div class=\"intro_content d-flex flex-row flex-wrap align-items-start justify-content-between\">

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Conference Program</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Supersessions</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_3.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">The Speakers</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_4.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Explore Sessions</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_5.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Directory</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/intro_6.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Speakers Schedule</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

    </div>
</div>

<!-- Pricing -->

<div class=\"pricing\">
    <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/pricing.jpg\" data-speed=\"0.8\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <div class=\"pricing_section_title\">Choose a plan</div>
            </div>
        </div>
        <div class=\"row pricing_row\">

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">Beginner</div>
                        <div class=\"pricing_price\">Free</div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item pricing_item_mid\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">recommended</div>
                        <div class=\"pricing_price\">\$29<span>90</span></div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">Professional</div>
                        <div class=\"pricing_price\">\$59<span>90</span></div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Calendar -->

<div class=\"calendar\">
    <div class=\"container reset_container\">
        <div class=\"row\">
            <div class=\"col-xl-6 calendar_col\">
                <div class=\"calendar_container\">
                    <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                        <div><div class=\"calendar_icon\"><img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/calendar.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                        <div class=\"calendar_title\">22 april events calendar</div>
                    </div>
                    <div class=\"calendar_items\">

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_1.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>14:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Business 101</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_2.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>15:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>About technology</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_3.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>17:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Conference calls</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_4.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>20:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Drinks and dinner</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"col-xl-6 calendar_col\">
                <div class=\"calendar_container\">
                    <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                        <div><div class=\"calendar_icon\"><img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/calendar.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                        <div class=\"calendar_title\">23 april events calendar</div>
                    </div>
                    <div class=\"calendar_items\">

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_5.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>14:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Business 101</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_6.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>15:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>About technology</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_7.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>17:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Conference calls</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/event_8.jpg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>20:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Drinks and dinner</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
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

    public function getTemplateName()
    {
        return "@Event/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 292,  441 => 278,  424 => 264,  407 => 250,  397 => 243,  375 => 224,  358 => 210,  341 => 196,  324 => 182,  314 => 175,  215 => 79,  203 => 70,  191 => 61,  179 => 52,  167 => 43,  155 => 34,  148 => 29,  139 => 28,  111 => 9,  102 => 8,  89 => 5,  80 => 4,  62 => 3,  44 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %} <title>Tech-Events</title> {% endblock title %}
{% block menu_home %} class=\"active\" {% endblock menu_home %}
{%block css%}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset ('styles/main_styles.css') }}\">
{%endblock css%}

{% block current_page %}
    <div class=\"home_content_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"home_content\">
                        <div class=\"home_date\">August 25, 2018</div>
                        <div class=\"home_title\">2018 Public Policy Conference</div>
                        <div class=\"home_location\">Miami Marina Bay, FL</div>
                        <div class=\"home_text\">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</div>
                        <div class=\"home_buttons\">
                            <div class=\"button home_button\"><a href=\"#\">Buy Tickets Now!</a></div>
                            <div class=\"button home_button\"><a href=\"#\">Find out more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock current_page %}
{% block content %}
<div class=\"intro\">
    <div class=\"intro_content d-flex flex-row flex-wrap align-items-start justify-content-between\">

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_1.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Conference Program</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_2.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Supersessions</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_3.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">The Speakers</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_4.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Explore Sessions</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_5.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Directory</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

        <!-- Intro Item -->
        <div class=\"intro_item\">
            <div class=\"intro_image\"><img src=\"{{ asset('images/intro_6.jpg') }}\" alt=\"\"></div>
            <div class=\"intro_body\">
                <div class=\"intro_title\"><a href=\"#\">Speakers Schedule</a></div>
                <div class=\"intro_subtitle\">Donec quis metus ac arcu luctus accumsan.</div>
            </div>
        </div>

    </div>
</div>

<!-- Pricing -->

<div class=\"pricing\">
    <div class=\"parallax_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/pricing.jpg\" data-speed=\"0.8\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col text-center\">
                <div class=\"pricing_section_title\">Choose a plan</div>
            </div>
        </div>
        <div class=\"row pricing_row\">

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">Beginner</div>
                        <div class=\"pricing_price\">Free</div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item pricing_item_mid\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">recommended</div>
                        <div class=\"pricing_price\">\$29<span>90</span></div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>

            <!-- Pricing Item -->
            <div class=\"col-lg-4 pricing_col\">
                <div class=\"pricing_item\">
                    <div class=\"pricing_item_content\">
                        <div class=\"pricing_level\">Professional</div>
                        <div class=\"pricing_price\">\$59<span>90</span></div>
                        <ul class=\"pricing_list\">
                            <li>3 Conference Tickets</li>
                            <li>Vip Table</li>
                            <li>Drinks</li>
                            <li>Special PASS</li>
                            <li>VIP Dinner</li>
                        </ul>
                        <div class=\"pricing_info\">
                            <a href=\"#\">i</a>
                        </div>
                        <div class=\"button pricing_button\"><a href=\"#\">Order plan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Calendar -->

<div class=\"calendar\">
    <div class=\"container reset_container\">
        <div class=\"row\">
            <div class=\"col-xl-6 calendar_col\">
                <div class=\"calendar_container\">
                    <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                        <div><div class=\"calendar_icon\"><img src=\"{{ asset('images/calendar.svg') }}\" alt=\"\"></div></div>
                        <div class=\"calendar_title\">22 april events calendar</div>
                    </div>
                    <div class=\"calendar_items\">

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_1.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>14:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Business 101</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_2.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>15:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>About technology</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_3.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>17:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Conference calls</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_4.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>20:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Drinks and dinner</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"col-xl-6 calendar_col\">
                <div class=\"calendar_container\">
                    <div class=\"calendar_title_bar d-flex flex-row align-items-center justify-content-start\">
                        <div><div class=\"calendar_icon\"><img src=\"{{ asset('images/calendar.svg') }}\" alt=\"\"></div></div>
                        <div class=\"calendar_title\">23 april events calendar</div>
                    </div>
                    <div class=\"calendar_items\">

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_5.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>14:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Business 101</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_6.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>15:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>About technology</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_7.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>17:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Conference calls</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                        <!-- Calendar Item -->
                        <div class=\"calendar_item d-flex flex-row align-items-center justify-content-start\">
                            <div><div class=\"calendar_item_image\"><img src=\"{{ asset('images/event_8.jpg') }}\" alt=\"\"></div></div>
                            <div class=\"calendar_item_time\">
                                <div>20:00</div>
                                <div>Auditorium</div>
                            </div>
                            <div class=\"calendar_item_text\">
                                <div>Drinks and dinner</div>
                                <div>08 AM - 04 PM</div>
                                <div>Speaker: Daniel Hill</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{% endblock content %}", "@Event/Default/index.html.twig", "C:\\xampp\\htdocs\\GitHub\\TeamOnePidev\\PI3A16\\src\\EventBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
