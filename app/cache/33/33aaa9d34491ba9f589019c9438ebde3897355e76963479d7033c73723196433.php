<?php

/* nav/_macros.twig */
class __TwigTemplate_c05d17da02c50457759ccb309542842ed2621d7a8a18632f82cee2d2fd3948a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        echo "

";
        // line 76
        echo "

";
        // line 95
        echo "

";
        // line 111
        echo "

";
        // line 126
        echo "

";
    }

    // line 4
    public function getheading($__title__ = null, $__icon__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "icon" => $__icon__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    ";
            $context["__internal_e1e9eb93cc7abe63099569cd5bef2f16bd8c6222d4d570528a7012b369f3ed2a"] = $this;
            // line 6
            echo "    <li class=\"divider\">
        <em>";
            // line 7
            echo $context["__internal_e1e9eb93cc7abe63099569cd5bef2f16bd8c6222d4d570528a7012b369f3ed2a"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["title"]) ? $context["title"] : null));
            echo "</em>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function getsubmenu($__icon__ = null, $__label__ = null, $__popoveritems__ = null, $__active__ = null, $__wide__ = null, $__subitems__ = null, $__force_submenu__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "popoveritems" => $__popoveritems__,
            "active" => $__active__,
            "wide" => $__wide__,
            "subitems" => $__subitems__,
            "force_submenu" => $__force_submenu__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "
    ";
            // line 24
            $context["__internal_e19dd6eb20d09f97ae9e20ae554c5fb0887d07c5d8185195d0b8784a54d7633a"] = $this;
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty((isset($context["subitems"]) ? $context["subitems"] : null))) {
                // line 27
                echo "        ";
                $context["subitems"] = (isset($context["popoveritems"]) ? $context["popoveritems"] : null);
                // line 28
                echo "    ";
            }
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $context["allowedany"] = false;
            // line 32
            echo "    ";
            $context["allowedamount"] = 0;
            // line 33
            echo "    ";
            $context["allowedsingle"] = "";
            // line 34
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subitems"]) ? $context["subitems"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "        ";
                if ((($context["item"] != "-") && $this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard"))))) {
                    // line 36
                    echo "            ";
                    $context["allowedany"] = true;
                    // line 37
                    echo "            ";
                    $context["allowedamount"] = ((isset($context["allowedamount"]) ? $context["allowedamount"] : null) + 1);
                    // line 38
                    echo "            ";
                    $context["allowedsingle"] = $context["item"];
                    // line 39
                    echo "        ";
                }
                // line 40
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
    ";
            // line 42
            $context["class"] = trim(((((isset($context["wide"]) ? $context["wide"] : null)) ? (" menu-pop-wide") : ("")) . (((isset($context["active"]) ? $context["active"] : null)) ? (" active") : (""))));
            // line 43
            echo "
    ";
            // line 45
            echo "    ";
            if ((isset($context["allowedany"]) ? $context["allowedany"] : null)) {
                // line 46
                echo "        <li";
                if ((isset($context["class"]) ? $context["class"] : null)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 47
                if ((((isset($context["allowedamount"]) ? $context["allowedamount"] : null) == 1) &&  !((array_key_exists("force_submenu", $context)) ? (_twig_default_filter((isset($context["force_submenu"]) ? $context["force_submenu"] : null), false)) : (false)))) {
                    // line 48
                    echo "                ";
                    $context["item"] = (isset($context["allowedsingle"]) ? $context["allowedsingle"] : null);
                    // line 49
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "link", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 50
                    echo $context["__internal_e19dd6eb20d09f97ae9e20ae554c5fb0887d07c5d8185195d0b8784a54d7633a"]->geticon($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "icon", array()), "icon");
                    echo (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                    echo "
                </a>
            ";
                } else {
                    // line 53
                    echo "                <a  href=\"";
                    if ((isset($context["popoveritems"]) ? $context["popoveritems"] : null)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["popoveritems"]) ? $context["popoveritems"] : null), 0, array()), "link", array()), "html", null, true);
                    } else {
                        echo "#";
                    }
                    echo "\" class=\"menu-pop\">
                    ";
                    // line 54
                    echo $context["__internal_e19dd6eb20d09f97ae9e20ae554c5fb0887d07c5d8185195d0b8784a54d7633a"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
                    echo "
                </a>
                <ul class=\"nav submenu\">
                    ";
                    // line 57
                    $context["divider"] = false;
                    // line 58
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoveritems"]) ? $context["popoveritems"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 59
                        echo "                        ";
                        if (($context["item"] == "-")) {
                            // line 60
                            echo "                            ";
                            $context["divider"] = true;
                            // line 61
                            echo "                        ";
                        } elseif ($this->env->getExtension('Bolt')->isAllowed((($this->getAttribute($context["item"], "isallowed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "isallowed", array()), "dashboard")) : ("dashboard")))) {
                            // line 62
                            echo "                            <li";
                            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                                echo " class=\"subdivider\"";
                            }
                            echo ">
                                <a href=\"";
                            // line 63
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
                            echo "\">
                                    ";
                            // line 64
                            echo $context["__internal_e19dd6eb20d09f97ae9e20ae554c5fb0887d07c5d8185195d0b8784a54d7633a"]->geticon($this->getAttribute($context["item"], "icon", array()));
                            echo (($this->getAttribute($context["item"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "label", array()), (("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>"))) : ((("<em>(" . $this->env->getExtension('Bolt')->trans("no content …")) . ")</em>")));
                            echo "
                                </a>
                            </li>
                            ";
                            // line 67
                            $context["divider"] = false;
                            // line 68
                            echo "                        ";
                        }
                        // line 69
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    echo "                </ul>
            ";
                }
                // line 72
                echo "        </li>
    ";
            }
            // line 74
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 81
    public function getcollapse()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 82
            echo "    ";
            $context["__internal_b56ec79c97153e7c456c728d9890c4609cf98fa3ba7e5f6824aa9ce06b247a3a"] = $this;
            // line 83
            echo "
    <li class=\"nav-secondary-collapse\">
        <a href=\"#\">
            ";
            // line 86
            echo $context["__internal_b56ec79c97153e7c456c728d9890c4609cf98fa3ba7e5f6824aa9ce06b247a3a"]->getlabel("fa:compress", $this->env->getExtension('Bolt')->trans("Collapse sidebar"));
            echo "
        </a>
    </li>
    <li class=\"nav-secondary-expand\">
        <a href=\"#\">
            ";
            // line 91
            echo $context["__internal_b56ec79c97153e7c456c728d9890c4609cf98fa3ba7e5f6824aa9ce06b247a3a"]->getlabel("fa:expand", $this->env->getExtension('Bolt')->trans("Expand sidebar"));
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getlink($__icon__ = null, $__label__ = null, $__pathname__ = null, $__active__ = null, $__divider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "pathname" => $__pathname__,
            "active" => $__active__,
            "divider" => $__divider__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    ";
            $context["__internal_28b59aa528040e827c9143988cb076f148a24e954a67420beaaec7a91b7617a6"] = $this;
            // line 102
            echo "    ";
            $context["class"] = "";
            // line 103
            echo "    ";
            if (((isset($context["pathname"]) ? $context["pathname"] : null) == "dashboard")) {
                $context["class"] = "nav-secondary-dashboard";
            }
            // line 104
            echo "    ";
            if ((isset($context["active"]) ? $context["active"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " active");
            }
            // line 105
            echo "    ";
            if ((isset($context["divider"]) ? $context["divider"] : null)) {
                $context["class"] = ((isset($context["class"]) ? $context["class"] : null) . " divider");
            }
            // line 106
            echo "
    <li";
            // line 107
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, trim((isset($context["class"]) ? $context["class"] : null)), "html", null, true);
                echo "\" ";
            }
            echo ">
        <a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath((isset($context["pathname"]) ? $context["pathname"] : null));
            echo "\">";
            echo $context["__internal_28b59aa528040e827c9143988cb076f148a24e954a67420beaaec7a91b7617a6"]->getlabel((isset($context["icon"]) ? $context["icon"] : null), (isset($context["label"]) ? $context["label"] : null));
            echo "</a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function getlabel($__icon__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 117
            echo "    ";
            $context["__internal_400c85e52b2f547808019be6ebe8cdc74e0882e7091811330513a2ae6aac1e88"] = $this;
            // line 118
            echo "
    ";
            // line 119
            if (twig_test_empty((isset($context["icon"]) ? $context["icon"] : null))) {
                // line 120
                echo "        <i class=\"icon\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["label"]) ? $context["label"] : null), 0, 1), "html", null, true);
                echo "</i>
    ";
            } elseif ((            // line 121
(isset($context["icon"]) ? $context["icon"] : null) != "-")) {
                // line 122
                echo "        ";
                echo $context["__internal_400c85e52b2f547808019be6ebe8cdc74e0882e7091811330513a2ae6aac1e88"]->geticon((isset($context["icon"]) ? $context["icon"] : null), true);
                echo "
    ";
            }
            // line 124
            echo "    ";
            echo (isset($context["label"]) ? $context["label"] : null);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function geticon($__icon__ = null, $__box__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "icon" => $__icon__,
            "box" => $__box__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 132
            echo "    ";
            $context["class"] = ((((array_key_exists("box", $context)) ? (_twig_default_filter((isset($context["box"]) ? $context["box"] : null), false)) : (false))) ? ("icon") : ("fa-fw"));
            // line 133
            echo "    ";
            // line 134
            echo "    ";
            if ((twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 0, 3) == "fa:")) {
                // line 135
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["icon"]) ? $context["icon"] : null), 3), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"></i>
    ";
                // line 137
                echo "    ";
            } else {
                // line 138
                echo "        <i class=\"fa fa-question-circle ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "nav/_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 138,  445 => 137,  438 => 135,  435 => 134,  433 => 133,  430 => 132,  417 => 131,  403 => 124,  397 => 122,  395 => 121,  390 => 120,  388 => 119,  385 => 118,  382 => 117,  369 => 116,  353 => 108,  345 => 107,  342 => 106,  337 => 105,  332 => 104,  327 => 103,  324 => 102,  321 => 101,  305 => 100,  290 => 91,  282 => 86,  277 => 83,  274 => 82,  263 => 81,  251 => 74,  247 => 72,  243 => 70,  237 => 69,  234 => 68,  232 => 67,  225 => 64,  221 => 63,  214 => 62,  211 => 61,  208 => 60,  205 => 59,  200 => 58,  198 => 57,  192 => 54,  183 => 53,  176 => 50,  171 => 49,  168 => 48,  166 => 47,  157 => 46,  154 => 45,  151 => 43,  149 => 42,  146 => 41,  140 => 40,  137 => 39,  134 => 38,  131 => 37,  128 => 36,  125 => 35,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  108 => 29,  105 => 28,  102 => 27,  100 => 26,  97 => 25,  95 => 24,  92 => 23,  74 => 22,  60 => 7,  57 => 6,  54 => 5,  41 => 4,  35 => 126,  31 => 111,  27 => 95,  23 => 76,  19 => 10,);
    }
}
/* {##*/
/*  # Sidebar-menu heading*/
/*  #}*/
/* {% macro heading(title, icon) %}*/
/*     {% from _self import label %}*/
/*     <li class="divider">*/
/*         <em>{{ label(icon, title) }}</em>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu blocks with links, popover (for desktop) and touch-to-show (for mobile)*/
/*  #*/
/*  # @param string  icon*/
/*  # @param string  label (default: slug())*/
/*  # @param array   popoveritems*/
/*  # @param bool    active*/
/*  # @param bool    wide*/
/*  # @param array   subitems*/
/*  #}*/
/* {% macro submenu(icon, label, popoveritems, active, wide, subitems, force_submenu) %}*/
/* */
/*     {% from _self import label, icon %}*/
/* */
/*     {% if subitems is empty %}*/
/*         {% set subitems = popoveritems %}*/
/*     {% endif %}*/
/* */
/*     {# Only display the 'root' option, if any of the subitems are allowed to be shown. #}*/
/*     {% set allowedany = false %}*/
/*     {% set allowedamount = 0 %}*/
/*     {% set allowedsingle = "" %}*/
/*     {% for item in subitems %}*/
/*         {% if item != '-' and isallowed(item.isallowed|default('dashboard')) %}*/
/*             {% set allowedany = true %}*/
/*             {% set allowedamount = allowedamount + 1 %}*/
/*             {% set allowedsingle = item %}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     {% set class = ((wide ? ' menu-pop-wide' : '') ~ (active ? ' active' : ''))|trim %}*/
/* */
/*     {# Show stuff! #}*/
/*     {% if allowedany %}*/
/*         <li{% if class %} class="{{ class }}"{% endif %}>*/
/*             {% if allowedamount == 1 and not force_submenu|default(false) %}*/
/*                 {% set item = allowedsingle %}*/
/*                 <a href="{{ item.link }}">*/
/*                     {{ icon(item.icon, "icon") }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a  href="{% if popoveritems %}{{ popoveritems.0.link }}{% else %}#{% endif %}" class="menu-pop">*/
/*                     {{ label(icon, label) }}*/
/*                 </a>*/
/*                 <ul class="nav submenu">*/
/*                     {% set divider = false %}*/
/*                     {% for item in popoveritems %}*/
/*                         {% if item == '-' %}*/
/*                             {% set divider = true %}*/
/*                         {% elseif isallowed(item.isallowed|default('dashboard')) %}*/
/*                             <li{% if divider %} class="subdivider"{% endif %}>*/
/*                                 <a href="{{ item.link }}">*/
/*                                     {{ icon(item.icon) }}{{ item.label|default("<em>(" ~ __("no content …") ~ ")</em>")|raw }}*/
/*                                 </a>*/
/*                             </li>*/
/*                             {% set divider = false %}*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endif %}*/
/* */
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu collapse/expand*/
/*  #}*/
/* {% macro collapse() %}*/
/*     {% from _self import label %}*/
/* */
/*     <li class="nav-secondary-collapse">*/
/*         <a href="#">*/
/*             {{ label('fa:compress', __('Collapse sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/*     <li class="nav-secondary-expand">*/
/*         <a href="#">*/
/*             {{ label('fa:expand', __('Expand sidebar')) }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu link*/
/*  #}*/
/* {% macro link(icon, label, pathname, active, divider) %}*/
/*     {% from _self import label %}*/
/*     {% set class = '' %}*/
/*     {% if pathname == 'dashboard' %}{% set class = 'nav-secondary-dashboard' %}{% endif %}*/
/*     {% if active %}{% set class = class ~ ' active' %}{% endif %}*/
/*     {% if divider %}{% set class = class ~ ' divider' %}{% endif %}*/
/* */
/*     <li{% if class %} class="{{ class|trim }}" {% endif %}>*/
/*         <a href="{{ path(pathname) }}">{{ label(icon, label) }}</a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Sidebar-menu label*/
/*  #}*/
/* {% macro label(icon, label) %}*/
/*     {% from _self import icon %}*/
/* */
/*     {% if icon is empty %}*/
/*         <i class="icon">{{ label|slice(0, 1) }}</i>*/
/*     {% elseif icon != '-' %}*/
/*         {{ icon(icon, true) }}*/
/*     {% endif %}*/
/*     {{ label|raw }}*/
/* {% endmacro %}*/
/* */
/* */
/* {##*/
/*  # Icon*/
/*  #}*/
/* {% macro icon(icon, box) %}*/
/*     {% set class = box|default(false) ? 'icon' : 'fa-fw' %}*/
/*     {# Font Awsome #}*/
/*     {% if icon|slice(0,3) == 'fa:' %}*/
/*         <i class="fa fa-{{ icon|slice(3) }} {{ class }}"></i>*/
/*     {# Defaults to (?) #}*/
/*     {% else %}*/
/*         <i class="fa fa-question-circle {{ class }}" title="{{ icon }}"></i>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
