<?php

/* extension/payment/nochex.twig */
class __TwigTemplate_ad9c6c3c5e46599e068917420032f933a0fa405bd0b04c082a9043ddd9aede01 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 28
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_nochex_email\" value=\"";
        // line 30
        echo (isset($context["payment_nochex_email"]) ? $context["payment_nochex_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 31
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 32
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 33
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 36
        echo (isset($context["entry_account"]) ? $context["entry_account"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_nochex_account\" id=\"input-account\" class=\"form-control\">
                
                ";
        // line 40
        if (((isset($context["payment_nochex_account"]) ? $context["payment_nochex_account"] : null) == "seller")) {
            // line 41
            echo "                
                <option value=\"seller\" selected=\"selected\">";
            // line 42
            echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
            echo "</option>
                
                ";
        } else {
            // line 45
            echo "                
                <option value=\"seller\">";
            // line 46
            echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
            echo "</option>
                
                ";
        }
        // line 49
        echo "                ";
        if (((isset($context["payment_nochex_account"]) ? $context["payment_nochex_account"] : null) == "merchant")) {
            // line 50
            echo "                
                <option value=\"merchant\" selected=\"selected\">";
            // line 51
            echo (isset($context["text_merchant"]) ? $context["text_merchant"] : null);
            echo "</option>
                
                ";
        } else {
            // line 54
            echo "                
                <option value=\"merchant\">";
            // line 55
            echo (isset($context["text_merchant"]) ? $context["text_merchant"] : null);
            echo "</option>
                
                ";
        }
        // line 58
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-merchant\">";
        // line 63
        echo (isset($context["entry_merchant"]) ? $context["entry_merchant"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_nochex_merchant\" value=\"";
        // line 65
        echo (isset($context["payment_nochex_merchant"]) ? $context["payment_nochex_merchant"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_merchant"]) ? $context["entry_merchant"] : null);
        echo "\" id=\"input-merchant\" class=\"form-control\" />
              ";
        // line 66
        if ((isset($context["error_merchant"]) ? $context["error_merchant"] : null)) {
            // line 67
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_merchant"]) ? $context["error_merchant"] : null);
            echo "</div>
              ";
        }
        // line 68
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 71
        echo (isset($context["entry_template"]) ? $context["entry_template"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 73
        if ((isset($context["payment_nochex_template"]) ? $context["payment_nochex_template"] : null)) {
            // line 74
            echo "                <input type=\"radio\" name=\"payment_nochex_template\" value=\"1\" checked=\"checked\" />
                ";
            // line 75
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 77
            echo "                <input type=\"radio\" name=\"payment_nochex_template\" value=\"1\" />
                ";
            // line 78
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 79
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 80
        if ( !(isset($context["payment_nochex_template"]) ? $context["payment_nochex_template"] : null)) {
            // line 81
            echo "                <input type=\"radio\" name=\"payment_nochex_template\" value=\"0\" checked=\"checked\" />
                ";
            // line 82
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 84
            echo "                <input type=\"radio\" name=\"payment_nochex_template\" value=\"0\" />
                ";
            // line 85
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 86
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 90
        echo (isset($context["entry_test"]) ? $context["entry_test"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 92
        if ((isset($context["payment_nochex_test"]) ? $context["payment_nochex_test"] : null)) {
            // line 93
            echo "                <input type=\"radio\" name=\"payment_nochex_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 94
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        } else {
            // line 96
            echo "                <input type=\"radio\" name=\"payment_nochex_test\" value=\"1\" />
                ";
            // line 97
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                ";
        }
        // line 98
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 99
        if ( !(isset($context["payment_nochex_test"]) ? $context["payment_nochex_test"] : null)) {
            // line 100
            echo "                <input type=\"radio\" name=\"payment_nochex_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 101
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        } else {
            // line 103
            echo "                <input type=\"radio\" name=\"payment_nochex_test\" value=\"0\" />
                ";
            // line 104
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                ";
        }
        // line 105
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_nochex_total\" value=\"";
        // line 111
        echo (isset($context["payment_nochex_total"]) ? $context["payment_nochex_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 115
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_nochex_order_status_id\" id=\"input-order-status\" class=\"form-control\">
                
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 120
            echo "                ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_nochex_order_status_id"]) ? $context["payment_nochex_order_status_id"] : null))) {
                // line 121
                echo "                
                <option value=\"";
                // line 122
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                
                ";
            } else {
                // line 125
                echo "                
                <option value=\"";
                // line 126
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                
                ";
            }
            // line 129
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 135
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_nochex_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 138
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 141
            echo "                ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_nochex_geo_zone_id"]) ? $context["payment_nochex_geo_zone_id"] : null))) {
                // line 142
                echo "                
                <option value=\"";
                // line 143
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                
                ";
            } else {
                // line 146
                echo "                
                <option value=\"";
                // line 147
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                
                ";
            }
            // line 150
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 156
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"payment_nochex_status\" id=\"input-status\" class=\"form-control\">
                
                ";
        // line 160
        if ((isset($context["payment_nochex_status"]) ? $context["payment_nochex_status"] : null)) {
            // line 161
            echo "                
                <option value=\"1\" selected=\"selected\">";
            // line 162
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 163
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                ";
        } else {
            // line 166
            echo "                
                <option value=\"1\">";
            // line 167
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 168
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                ";
        }
        // line 171
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 176
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"payment_nochex_sort_order\" value=\"";
        // line 178
        echo (isset($context["payment_nochex_sort_order"]) ? $context["payment_nochex_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 186
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/payment/nochex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 186,  456 => 178,  451 => 176,  444 => 171,  438 => 168,  434 => 167,  431 => 166,  425 => 163,  421 => 162,  418 => 161,  416 => 160,  409 => 156,  402 => 151,  396 => 150,  388 => 147,  385 => 146,  377 => 143,  374 => 142,  371 => 141,  367 => 140,  362 => 138,  356 => 135,  349 => 130,  343 => 129,  335 => 126,  332 => 125,  324 => 122,  321 => 121,  318 => 120,  314 => 119,  307 => 115,  298 => 111,  291 => 109,  285 => 105,  280 => 104,  277 => 103,  272 => 101,  269 => 100,  267 => 99,  264 => 98,  259 => 97,  256 => 96,  251 => 94,  248 => 93,  246 => 92,  241 => 90,  235 => 86,  230 => 85,  227 => 84,  222 => 82,  219 => 81,  217 => 80,  214 => 79,  209 => 78,  206 => 77,  201 => 75,  198 => 74,  196 => 73,  191 => 71,  186 => 68,  180 => 67,  178 => 66,  172 => 65,  167 => 63,  160 => 58,  154 => 55,  151 => 54,  145 => 51,  142 => 50,  139 => 49,  133 => 46,  130 => 45,  124 => 42,  121 => 41,  119 => 40,  112 => 36,  107 => 33,  101 => 32,  99 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_nochex_email" value="{{ payment_nochex_email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-account">{{ entry_account }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_nochex_account" id="input-account" class="form-control">*/
/*                 */
/*                 {% if payment_nochex_account == 'seller' %}*/
/*                 */
/*                 <option value="seller" selected="selected">{{ text_seller }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="seller">{{ text_seller }}</option>*/
/*                 */
/*                 {% endif %}*/
/*                 {% if payment_nochex_account == 'merchant' %}*/
/*                 */
/*                 <option value="merchant" selected="selected">{{ text_merchant }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="merchant">{{ text_merchant }}</option>*/
/*                 */
/*                 {% endif %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-merchant">{{ entry_merchant }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_nochex_merchant" value="{{ payment_nochex_merchant }}" placeholder="{{ entry_merchant }}" id="input-merchant" class="form-control" />*/
/*               {% if error_merchant %}*/
/*               <div class="text-danger">{{ error_merchant }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_template }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if payment_nochex_template %}*/
/*                 <input type="radio" name="payment_nochex_template" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="payment_nochex_template" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if not payment_nochex_template %}*/
/*                 <input type="radio" name="payment_nochex_template" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="payment_nochex_template" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %} </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label">{{ entry_test }}</label>*/
/*             <div class="col-sm-10">*/
/*               <label class="radio-inline"> {% if payment_nochex_test %}*/
/*                 <input type="radio" name="payment_nochex_test" value="1" checked="checked" />*/
/*                 {{ text_yes }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="payment_nochex_test" value="1" />*/
/*                 {{ text_yes }}*/
/*                 {% endif %} </label>*/
/*               <label class="radio-inline"> {% if not payment_nochex_test %}*/
/*                 <input type="radio" name="payment_nochex_test" value="0" checked="checked" />*/
/*                 {{ text_no }}*/
/*                 {% else %}*/
/*                 <input type="radio" name="payment_nochex_test" value="0" />*/
/*                 {{ text_no }}*/
/*                 {% endif %} </label>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_nochex_total" value="{{ payment_nochex_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-order-status">{{ entry_order_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_nochex_order_status_id" id="input-order-status" class="form-control">*/
/*                 */
/*                 {% for order_status in order_statuses %}*/
/*                 {% if order_status.order_status_id == payment_nochex_order_status_id %}*/
/*                 */
/*                 <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                 */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_nochex_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                 <option value="0">{{ text_all_zones }}</option>*/
/*                 */
/*                 {% for geo_zone in geo_zones %}*/
/*                 {% if geo_zone.geo_zone_id == payment_nochex_geo_zone_id %}*/
/*                 */
/*                 <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                 */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="payment_nochex_status" id="input-status" class="form-control">*/
/*                 */
/*                 {% if payment_nochex_status %}*/
/*                 */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 */
/*                 {% else %}*/
/*                 */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 */
/*                 {% endif %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="payment_nochex_sort_order" value="{{ payment_nochex_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
