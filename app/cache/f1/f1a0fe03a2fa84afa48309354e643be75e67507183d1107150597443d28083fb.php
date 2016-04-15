<?php

/* _footer.twig */
class __TwigTemplate_d0823ab103e9883fe4990f0e31adb10b519b93e67dc76e8edf9b263420af9a81 extends Twig_Template
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
        // line 1
        echo "
<!-- Footer -->
        <footer class=\"large-12 columns\">
            <hr />
            <div class=\"large-6 columns\">
                <p>";
        // line 6
        echo $this->env->getExtension('Bolt')->trans("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.", array("%url%" => "http://bolt.cm"));
        echo "
                </p>
            </div>
            <div class=\"large-6 columns\">
                <ul class=\"inline-list\">
                    ";
        // line 11
        echo $this->env->getExtension('Bolt')->menu($this->env);
        echo "
                </ul>
            </div>
        </footer>
    </div>
</div>

    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/foundation.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/modernizr.js\"></script>

    ";
        // line 23
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/jquery.magnific-popup.min.js\"></script>

    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "theme", array()), "html", null, true);
        echo "javascripts/app.js\" async defer></script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 25,  53 => 23,  48 => 19,  44 => 18,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* */
/* <!-- Footer -->*/
/*         <footer class="large-12 columns">*/
/*             <hr />*/
/*             <div class="large-6 columns">*/
/*                 <p>{{ __("This website is <a href='%url%' target='_blank' title='Sophisticated, lightweight & simple CMS'>Built with Bolt</a>.",{'%url%':'http://bolt.cm'}) }}*/
/*                 </p>*/
/*             </div>*/
/*             <div class="large-6 columns">*/
/*                 <ul class="inline-list">*/
/*                     {{ menu() }}*/
/*                 </ul>*/
/*             </div>*/
/*         </footer>*/
/*     </div>*/
/* </div>*/
/* */
/*     <script src="{{ paths.theme }}javascripts/foundation.min.js"></script>*/
/*     <script src="{{ paths.theme }}javascripts/modernizr.js"></script>*/
/* */
/*     {# Bolt comes with Magnific Popup, as it's used in the backend. We can use it here, or you can*/
/*        just swap it out for the image-viewing script of your choice. Or delete it altogether. #}*/
/*     <script src="{{ paths.theme }}javascripts/jquery.magnific-popup.min.js"></script>*/
/* */
/*     <script src="{{ paths.theme }}javascripts/app.js" async defer></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
