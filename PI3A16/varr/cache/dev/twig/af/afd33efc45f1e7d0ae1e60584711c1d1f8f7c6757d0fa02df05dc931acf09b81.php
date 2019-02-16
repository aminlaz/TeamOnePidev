<?php

/* @Event/Default/event.html.twig */
class __TwigTemplate_31adf9e82f3168ff9b23677585b08ed3670ca676a1e5d673f6695ab55b3f5ee6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@Event/Default/event.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_events' => array($this, 'block_menu_events'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/event.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/event.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 4
    public function block_menu_events($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_events"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_events"));

        echo " class=\"active\" ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 6
        echo "    <div class=\"home_content_container\">
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

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    <div class=\"events\">
    <div class=\"container\">
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
                    <div class=\"event_image_container\">
                        <div class=\"background_image\" style=\"background-image:url(";
        // line 31
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
        // line 55
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
        // line 63
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
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
                    <div class=\"event_image_container\">
                        <div class=\"background_image\" style=\"background-image:url(";
        // line 82
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
        // line 106
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
        // line 114
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
    <div class=\"event\">
        <div class=\"row row-lg-eq-height\">
            <div class=\"col-lg-6 \">
                <div class=\"event_image_container\">
                    <div class=\"background_image\" style=\"background-image:url(";
        // line 133
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
        // line 157
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
        // line 165
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
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
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
        // line 208
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
        // line 216
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
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Event/Default/event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 216,  339 => 208,  312 => 184,  290 => 165,  279 => 157,  252 => 133,  230 => 114,  219 => 106,  192 => 82,  170 => 63,  159 => 55,  132 => 31,  124 => 25,  115 => 24,  88 => 6,  79 => 5,  61 => 4,  43 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}
{% block title %} <title>Events</title> {% endblock title %}
{% block menu_events %} class=\"active\" {% endblock menu_events %}
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
{% block content %}
    <div class=\"events\">
    <div class=\"container\">
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
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
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
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
    <div class=\"event\">
        <div class=\"row row-lg-eq-height\">
            <div class=\"col-lg-6 \">
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
        <div class=\"event\">
            <div class=\"row row-lg-eq-height\">
                <div class=\"col-lg-6 \">
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
    </div>
    </div>
{% endblock content %}", "@Event/Default/event.html.twig", "C:\\xampp\\htdocs\\GitHub\\TeamOnePidev\\PI3A16\\src\\EventBundle\\Resources\\views\\Default\\event.html.twig");
    }
}
