<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/components/sidebar/sidebar.hbs */
class __TwigTemplate_28e87143283413a3a3e982422e3f5a2ac1f59e0b3d7cb0fa9ddb8b4b869d3c53 extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"mailpoet_region mailpoet_content_region mailpoet_sidebar_region postbox\"></div>
<div class=\"mailpoet_region mailpoet_layout_region mailpoet_sidebar_region postbox closed\"></div>
<div class=\"mailpoet_region mailpoet_styles_region mailpoet_sidebar_region postbox closed\"></div>
<div class=\"mailpoet_region mailpoet_preview_region mailpoet_sidebar_region postbox closed\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/sidebar/sidebar.hbs";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/sidebar/sidebar.hbs", "C:\\Users\\GEN-002\\Documents\\Projets\\wordpress\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\components\\sidebar\\sidebar.hbs");
    }
}
