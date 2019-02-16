<?php

/* @Event/Default/reclamation.html.twig */
class __TwigTemplate_b8f5a6bfe34488a4dfb4f601dfa213d46f3bec3b36ecf8e4e4399410472246fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Event/Default/reclamation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu_reclamation' => array($this, 'block_menu_reclamation'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/reclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Event/Default/reclamation.html.twig"));

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

        echo " <title>Reclamation</title> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_menu_reclamation($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reclamation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_reclamation"));

        echo " class=\"active\" ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_current_page($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "current_page"));

        // line 5
        echo "    <div class=\"home_content_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"home_content d-flex flex-row align-items-end justify-content-start\">
                        <div class=\"current_page\">Contact</div>
                        <div class=\"breadcrumbs ml-auto\">
                            <ul>
                                <li><a href=\"index.html\">Home</a></li>
                                <li>Contact</li>
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

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "
    <div class=\"contact\">
        <div class=\"contact_map_background\">

            <!-- Contact Map -->
            <div class=\"contact_map\">

                <!-- Google Map -->
                <div class=\"map\">
                    <div id=\"google_map\" class=\"google_map\">
                        <div class=\"map_container\">
                            <div id=\"map\"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"contact_form_container\">
                        <div class=\"contact_form_title\">Get in touch</div>
                        <form action=\"#\" class=\"contact_form\" id=\"contact_form\">
                            <input type=\"text\" class=\"contact_input\" placeholder=\"Name\" required=\"required\">
                            <input type=\"email\" class=\"contact_input\" placeholder=\"E-mail\" required=\"required\">
                            <input type=\"text\" class=\"contact_input\" placeholder=\"Subject\" required=\"required\">
                            <textarea name=\"contact_textarea\" id=\"contact_textarea\" class=\"contact_textarea contact_input\" placeholder=\"Message\" required=\"required\"></textarea>
                            <button class=\"button contact_button\"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"contact_info_container\">
                        <div>
                            <a href=\"#\">
                                <div class=\"logo_container d-flex flex-row align-items-start justify-content-start\">
                                    <div class=\"logo_image\"><div><img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"logo_content\">
                                        <div id=\"logo_text\" class=\"logo_text logo_text_not_ie\">The Conference</div>
                                        <div class=\"logo_sub\">August 25, 2018 - Miami Marina Bay</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class=\"contact_info_list_container\">
                            <ul class=\"contact_info_list\">
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/contact_1.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">Blvd Libertad, 34 m05200 Los Angeles, CA</div>
                                </li>
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/contact_2.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">0034 37483 2445 322</div>
                                </li>
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/contact_3.png"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">hello@company.com</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"contact_info_pin\"><div></div></div>
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
        return "@Event/Default/reclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 80,  184 => 76,  177 => 72,  163 => 61,  124 => 24,  115 => 23,  88 => 5,  79 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
{% block title %} <title>Reclamation</title> {% endblock title %}
{% block menu_reclamation %} class=\"active\" {% endblock menu_reclamation %}
{% block current_page %}
    <div class=\"home_content_container\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"home_content d-flex flex-row align-items-end justify-content-start\">
                        <div class=\"current_page\">Contact</div>
                        <div class=\"breadcrumbs ml-auto\">
                            <ul>
                                <li><a href=\"index.html\">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock current_page %}
{% block content %}

    <div class=\"contact\">
        <div class=\"contact_map_background\">

            <!-- Contact Map -->
            <div class=\"contact_map\">

                <!-- Google Map -->
                <div class=\"map\">
                    <div id=\"google_map\" class=\"google_map\">
                        <div class=\"map_container\">
                            <div id=\"map\"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"contact_form_container\">
                        <div class=\"contact_form_title\">Get in touch</div>
                        <form action=\"#\" class=\"contact_form\" id=\"contact_form\">
                            <input type=\"text\" class=\"contact_input\" placeholder=\"Name\" required=\"required\">
                            <input type=\"email\" class=\"contact_input\" placeholder=\"E-mail\" required=\"required\">
                            <input type=\"text\" class=\"contact_input\" placeholder=\"Subject\" required=\"required\">
                            <textarea name=\"contact_textarea\" id=\"contact_textarea\" class=\"contact_textarea contact_input\" placeholder=\"Message\" required=\"required\"></textarea>
                            <button class=\"button contact_button\"><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-5 offset-lg-1\">
                    <div class=\"contact_info_container\">
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
                        <div class=\"contact_info_list_container\">
                            <ul class=\"contact_info_list\">
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"{{ asset('images/contact_1.png') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">Blvd Libertad, 34 m05200 Los Angeles, CA</div>
                                </li>
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"{{ asset('images/contact_2.png') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">0034 37483 2445 322</div>
                                </li>
                                <li class=\"d-flex flex-row align-items-start justify-content-start\">
                                    <div><div class=\"contact_info_icon text-center\"><img src=\"{{ asset('images/contact_3.png') }}\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">hello@company.com</div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"contact_info_pin\"><div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock content %}", "@Event/Default/reclamation.html.twig", "C:\\xampp\\htdocs\\GitHub\\TeamOnePidev\\PI3A16\\src\\EventBundle\\Resources\\views\\Default\\reclamation.html.twig");
    }
}
