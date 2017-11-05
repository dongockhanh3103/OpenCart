<?php

/* default/template/extension/payment/pp_express.twig */
class __TwigTemplate_55bed11c4d728e3112198ece802764e5457a4230b31402f554b5264fa61adac4 extends Twig_Template
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
        if (((isset($context["payment_pp_express_incontext_disable"]) ? $context["payment_pp_express_incontext_disable"] : null) != 1)) {
            // line 2
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <a id=\"button-confirm\" href=\"";
            // line 4
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\"></a>
  </div>
</div>
<script type=\"text/javascript\"><!--
window.paypalCheckoutReady = function () {
  paypal.checkout.setup('";
            // line 9
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "', {
    container: 'button-confirm',
    environment: 'sandbox'
  });
};
//--></script>
<script src=\"//www.paypalobjects.com/api/checkout.js\" async></script>
";
        } else {
            // line 17
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <a href=\"";
            // line 19
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\" id=\"button-confirm\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a>
  </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-confirm').on('click', function() {
        \$('#button-confirm').button('loading');
    });
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/pp_express.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  44 => 17,  33 => 9,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if payment_pp_express_incontext_disable != 1 %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <a id="button-confirm" href="{{ continue }}"></a>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* window.paypalCheckoutReady = function () {*/
/*   paypal.checkout.setup('{{ username }}', {*/
/*     container: 'button-confirm',*/
/*     environment: 'sandbox'*/
/*   });*/
/* };*/
/* //--></script>*/
/* <script src="//www.paypalobjects.com/api/checkout.js" async></script>*/
/* {% else %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <a href="{{ continue }}" class="btn btn-primary" id="button-confirm" data-loading-text="{{ text_loading }}">{{ button_continue }}</a>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*     $('#button-confirm').on('click', function() {*/
/*         $('#button-confirm').button('loading');*/
/*     });*/
/* //--></script>*/
/* {% endif %}*/
/* */
