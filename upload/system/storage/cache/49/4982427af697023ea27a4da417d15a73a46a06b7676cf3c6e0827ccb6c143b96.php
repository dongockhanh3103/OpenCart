<?php

/* extension/payment/paytm.twig */
class __TwigTemplate_40f97c857bd505b2bf53be0e56954a8b1dee27de73b4214c554aa1f43261cc5d extends Twig_Template
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"tab-content\">   

\t\t\t<div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"input-merchant-id\"><span data-toggle=\"tooltip\" title=\"";
        // line 31
        echo (isset($context["entry_merchant_help"]) ? $context["entry_merchant_help"] : null);
        echo "\">";
        echo (isset($context["entry_merchant"]) ? $context["entry_merchant"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\"><input type=\"text\" name=\"payment_paytm_merchant\" value=\"";
        // line 32
        echo (isset($context["payment_paytm_merchant"]) ? $context["payment_paytm_merchant"] : null);
        echo "\" class=\"form-control\"/>
                     ";
        // line 33
        if ((isset($context["error_merchant"]) ? $context["error_merchant"] : null)) {
            // line 34
            echo "                     <span class=\"error\">";
            echo (isset($context["error_merchant"]) ? $context["error_merchant"] : null);
            echo "</span>
                     ";
        }
        // line 36
        echo "                  </div>
               </div>
\t\t\t   
\t\t\t   
\t\t\t   <div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"input-merchant-id\"><span data-toggle=\"tooltip\" title=\"";
        // line 41
        echo (isset($context["entry_merchant_private_key"]) ? $context["entry_merchant_private_key"] : null);
        echo "\">";
        echo (isset($context["entry_merchantkey"]) ? $context["entry_merchantkey"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\"><input type=\"text\" name=\"payment_paytm_merchant2\" value=\"";
        // line 42
        echo (isset($context["payment_paytm_merchant2"]) ? $context["payment_paytm_merchant2"] : null);
        echo "\" class=\"form-control\"/>
                     ";
        // line 43
        if ((isset($context["error_merchant"]) ? $context["error_merchant"] : null)) {
            // line 44
            echo "                     <span class=\"error\">";
            echo (isset($context["error_merchant"]) ? $context["error_merchant"] : null);
            echo "</span>
                     ";
        }
        // line 46
        echo "                  </div>
               </div>
\t\t\t   
\t\t\t   
\t\t\t   
\t\t\t   
                <!--<div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_key\"><span data-toggle=\"tooltip\" title=\"";
        // line 53
        echo (isset($context["entry_merchant_private_key"]) ? $context["entry_merchant_private_key"] : null);
        echo "\">";
        echo (isset($context["entry_merchantkey"]) ? $context["entry_merchantkey"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\"><input type=\"text\" name=\"payment_paytm_key\" value=\"";
        // line 54
        echo (isset($context["payment_paytm_key"]) ? $context["payment_paytm_key"] : null);
        echo "\" class=\"form-control\"/>              
                     ";
        // line 55
        if ((isset($context["error_key"]) ? $context["error_key"] : null)) {
            // line 56
            echo "                     <span class=\"error\">";
            echo (isset($context["error_key"]) ? $context["error_key"] : null);
            echo "</span>
                     ";
        }
        // line 58
        echo "                  </div>
               </div>-->
\t\t\t   
\t\t\t   <div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_environment\"><span data-toggle=\"tooltip\" title=\"";
        // line 62
        echo (isset($context["entry_environment_help"]) ? $context["entry_environment_help"] : null);
        echo "\">";
        echo (isset($context["entry_environment"]) ? $context["entry_environment"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                     <select name=\"payment_paytm_environment\" class=\"form-control\">
                        ";
        // line 65
        if (((isset($context["payment_paytm_environment"]) ? $context["payment_paytm_environment"] : null) == "P")) {
            // line 66
            echo "                        <option value=\"P\" selected=\"selected\">";
            echo (isset($context["text_env_production"]) ? $context["text_env_production"] : null);
            echo "</option>
                        <option value=\"T\">";
            // line 67
            echo (isset($context["text_env_test"]) ? $context["text_env_test"] : null);
            echo "</option>
                        ";
        } else {
            // line 69
            echo "                        <option value=\"P\">";
            echo (isset($context["text_env_production"]) ? $context["text_env_production"] : null);
            echo "</option>
                        <option value=\"T\" selected=\"selected\">";
            // line 70
            echo (isset($context["text_env_test"]) ? $context["text_env_test"] : null);
            echo "</option>
                        ";
        }
        // line 72
        echo "                     </select>
                  </div>
               </div>
\t\t\t   
\t\t\t   <div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_website\"><span data-toggle=\"tooltip\" title=\"";
        // line 77
        echo (isset($context["entry_website_help"]) ? $context["entry_website_help"] : null);
        echo "\">";
        echo (isset($context["entry_website"]) ? $context["entry_website"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\"><input type=\"text\" name=\"payment_paytm_website\" value=\"";
        // line 78
        echo (isset($context["payment_paytm_website"]) ? $context["payment_paytm_website"] : null);
        echo "\" class=\"form-control\"/>
                     ";
        // line 79
        if ((isset($context["error_website"]) ? $context["error_website"] : null)) {
            // line 80
            echo "                     <span class=\"error\">";
            echo (isset($context["error_website"]) ? $context["error_website"] : null);
            echo "</span>
                     ";
        }
        // line 82
        echo "                  </div>
               </div>
\t\t\t   
\t\t\t   <div class=\"form-group\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_order_status_id\">";
        // line 86
        echo (isset($context["entry_order_status"]) ? $context["entry_order_status"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                     <select name=\"payment_paytm_order_status_id\" class=\"form-control\">
                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 90
            echo "                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_paytm_order_status_id"]) ? $context["payment_paytm_order_status_id"] : null))) {
                // line 91
                echo "                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo " </option>
                        ";
            } else {
                // line 93
                echo "                        <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                        ";
            }
            // line 95
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                     </select>
                  </div>
               </div>
            
            <div class=\"form-group\">
              <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 101
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-9\">
                <select name=\"payment_paytm_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 104
        if ((isset($context["payment_paytm_status"]) ? $context["payment_paytm_status"] : null)) {
            // line 105
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 106
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 108
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 109
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 111
        echo "                </select>
              </div>
            </div>
\t\t\t
\t\t\t<div class=\"form-group required\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_industry\"><span data-toggle=\"tooltip\" title=\"";
        // line 116
        echo (isset($context["entry_industry_help"]) ? $context["entry_industry_help"] : null);
        echo "\">";
        echo (isset($context["entry_industry"]) ? $context["entry_industry"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\"><input type=\"text\" name=\"payment_paytm_industry\" value=\"";
        // line 117
        echo (isset($context["payment_paytm_industry"]) ? $context["payment_paytm_industry"] : null);
        echo "\" class=\"form-control\"/>
                     ";
        // line 118
        if ((isset($context["error_industry"]) ? $context["error_industry"] : null)) {
            echo "              
                     <span class=\"error\">";
            // line 119
            echo (isset($context["error_industry"]) ? $context["error_industry"] : null);
            echo "</span>
                     ";
        }
        // line 121
        echo "                  </div>
               </div>
\t\t\t   
\t\t\t   
\t\t\t   <div class=\"form-group\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_callbackurl\">";
        // line 126
        echo (isset($context["callbackurl_status"]) ? $context["callbackurl_status"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                     <select name=\"payment_paytm_callbackurl\" class=\"form-control\">
                        ";
        // line 129
        if ((isset($context["payment_paytm_callbackurl"]) ? $context["payment_paytm_callbackurl"] : null)) {
            // line 130
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 131
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        } else {
            // line 133
            echo "                        <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 134
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        }
        // line 136
        echo "                     </select>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"control-label col-sm-3\" for=\"payment_paytm_checkstatus\"><span data-toggle=\"tooltip\" title=\"";
        // line 140
        echo (isset($context["entry_checkstatus_help"]) ? $context["entry_checkstatus_help"] : null);
        echo "\">";
        echo (isset($context["entry_checkstatus"]) ? $context["entry_checkstatus"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                     <select name=\"payment_paytm_checkstatus\" class=\"form-control\">
                        ";
        // line 143
        if ((isset($context["payment_paytm_checkstatus"]) ? $context["payment_paytm_checkstatus"] : null)) {
            // line 144
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\">";
            // line 145
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        } else {
            // line 147
            echo "                        <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 148
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                        ";
        }
        // line 150
        echo "                     </select>
                  </div>
               </div>
\t\t\t   
\t\t\t   <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
                  <div class=\"col-sm-9\">
                     <input type=\"text\" name=\"payment_paytm_total\" value=\"";
        // line 157
        echo (isset($context["payment_paytm_total"]) ? $context["payment_paytm_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-geo-zone\">";
        // line 161
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                     <select name=\"payment_paytm_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                        <option value=\"0\">";
        // line 164
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                        ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 166
            echo "                        ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_paytm_geo_zone_id"]) ? $context["payment_paytm_geo_zone_id"] : null))) {
                // line 167
                echo "                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                        ";
            } else {
                // line 169
                echo "                        <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                        ";
            }
            // line 171
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                     </select>
                  </div>
               </div>
               <div class=\"form-group\">
                  <label class=\"col-sm-3 control-label\" for=\"input-sort-order\">";
        // line 176
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                  <div class=\"col-sm-9\">
                     <input type=\"text\" name=\"payment_paytm_sort_order\" value=\"";
        // line 178
        echo (isset($context["payment_paytm_sort_order"]) ? $context["payment_paytm_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                  </div>
               </div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t

          </div>
        </form>        
      </div>
    </div>
  </div>
</div>
";
        // line 192
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/paytm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 192,  468 => 178,  463 => 176,  457 => 172,  451 => 171,  443 => 169,  435 => 167,  432 => 166,  428 => 165,  424 => 164,  418 => 161,  409 => 157,  402 => 155,  395 => 150,  390 => 148,  385 => 147,  380 => 145,  375 => 144,  373 => 143,  365 => 140,  359 => 136,  354 => 134,  349 => 133,  344 => 131,  339 => 130,  337 => 129,  331 => 126,  324 => 121,  319 => 119,  315 => 118,  311 => 117,  305 => 116,  298 => 111,  293 => 109,  288 => 108,  283 => 106,  278 => 105,  276 => 104,  270 => 101,  263 => 96,  257 => 95,  249 => 93,  241 => 91,  238 => 90,  234 => 89,  228 => 86,  222 => 82,  216 => 80,  214 => 79,  210 => 78,  204 => 77,  197 => 72,  192 => 70,  187 => 69,  182 => 67,  177 => 66,  175 => 65,  167 => 62,  161 => 58,  155 => 56,  153 => 55,  149 => 54,  143 => 53,  134 => 46,  128 => 44,  126 => 43,  122 => 42,  116 => 41,  109 => 36,  103 => 34,  101 => 33,  97 => 32,  91 => 31,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
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
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
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
/*           <div class="tab-content">   */
/* */
/* 			<div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="input-merchant-id"><span data-toggle="tooltip" title="{{ entry_merchant_help }}">{{ entry_merchant }}</span></label>*/
/*                   <div class="col-sm-9"><input type="text" name="payment_paytm_merchant" value="{{ payment_paytm_merchant }}" class="form-control"/>*/
/*                      {% if error_merchant %}*/
/*                      <span class="error">{{ error_merchant }}</span>*/
/*                      {% endif %}*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   */
/* 			   <div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="input-merchant-id"><span data-toggle="tooltip" title="{{ entry_merchant_private_key }}">{{ entry_merchantkey }}</span></label>*/
/*                   <div class="col-sm-9"><input type="text" name="payment_paytm_merchant2" value="{{ payment_paytm_merchant2 }}" class="form-control"/>*/
/*                      {% if error_merchant %}*/
/*                      <span class="error">{{ error_merchant }}</span>*/
/*                      {% endif %}*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   */
/* 			   */
/* 			   */
/*                 <!--<div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_key"><span data-toggle="tooltip" title="{{ entry_merchant_private_key }}">{{ entry_merchantkey }}</span></label>*/
/*                   <div class="col-sm-9"><input type="text" name="payment_paytm_key" value="{{ payment_paytm_key }}" class="form-control"/>              */
/*                      {% if error_key %}*/
/*                      <span class="error">{{ error_key }}</span>*/
/*                      {% endif %}*/
/*                   </div>*/
/*                </div>-->*/
/* 			   */
/* 			   <div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_environment"><span data-toggle="tooltip" title="{{ entry_environment_help}}">{{ entry_environment }}</span></label>*/
/*                   <div class="col-sm-9">*/
/*                      <select name="payment_paytm_environment" class="form-control">*/
/*                         {% if payment_paytm_environment == "P" %}*/
/*                         <option value="P" selected="selected">{{ text_env_production }}</option>*/
/*                         <option value="T">{{ text_env_test }}</option>*/
/*                         {% else %}*/
/*                         <option value="P">{{ text_env_production }}</option>*/
/*                         <option value="T" selected="selected">{{ text_env_test }}</option>*/
/*                         {% endif %}*/
/*                      </select>*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   <div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_website"><span data-toggle="tooltip" title="{{ entry_website_help }}">{{ entry_website }}</span></label>*/
/*                   <div class="col-sm-9"><input type="text" name="payment_paytm_website" value="{{ payment_paytm_website }}" class="form-control"/>*/
/*                      {% if error_website %}*/
/*                      <span class="error">{{ error_website }}</span>*/
/*                      {% endif %}*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   <div class="form-group">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_order_status_id">{{ entry_order_status }}</label>*/
/*                   <div class="col-sm-9">*/
/*                      <select name="payment_paytm_order_status_id" class="form-control">*/
/*                         {% for order_status in order_statuses %}*/
/*                         {% if order_status.order_status_id == payment_paytm_order_status_id %}*/
/*                         <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }} </option>*/
/*                         {% else %}*/
/*                         <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                      </select>*/
/*                   </div>*/
/*                </div>*/
/*             */
/*             <div class="form-group">*/
/*               <label class="col-sm-3 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-9">*/
/*                 <select name="payment_paytm_status" id="input-status" class="form-control">*/
/*                   {% if payment_paytm_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/* 			*/
/* 			<div class="form-group required">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_industry"><span data-toggle="tooltip" title="{{ entry_industry_help }}">{{ entry_industry }}</span></label>*/
/*                   <div class="col-sm-9"><input type="text" name="payment_paytm_industry" value="{{ payment_paytm_industry }}" class="form-control"/>*/
/*                      {% if error_industry %}              */
/*                      <span class="error">{{ error_industry }}</span>*/
/*                      {% endif %}*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   */
/* 			   <div class="form-group">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_callbackurl">{{ callbackurl_status }}</label>*/
/*                   <div class="col-sm-9">*/
/*                      <select name="payment_paytm_callbackurl" class="form-control">*/
/*                         {% if payment_paytm_callbackurl %}*/
/*                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                         <option value="0">{{ text_disabled }}</option>*/
/*                         {% else %}*/
/*                         <option value="1">{{ text_enabled }}</option>*/
/*                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                         {% endif %}*/
/*                      </select>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="form-group">*/
/*                   <label class="control-label col-sm-3" for="payment_paytm_checkstatus"><span data-toggle="tooltip" title="{{ entry_checkstatus_help}}">{{ entry_checkstatus }}</span></label>*/
/*                   <div class="col-sm-9">*/
/*                      <select name="payment_paytm_checkstatus" class="form-control">*/
/*                         {% if payment_paytm_checkstatus %}*/
/*                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                         <option value="0">{{ text_disabled }}</option>*/
/*                         {% else %}*/
/*                         <option value="1">{{ text_enabled }}</option>*/
/*                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                         {% endif %}*/
/*                      </select>*/
/*                   </div>*/
/*                </div>*/
/* 			   */
/* 			   <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*                   <div class="col-sm-9">*/
/*                      <input type="text" name="payment_paytm_total" value="{{ payment_paytm_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*                   </div>*/
/*                </div>*/
/*                <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*                   <div class="col-sm-9">*/
/*                      <select name="payment_paytm_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                         <option value="0">{{ text_all_zones }}</option>*/
/*                         {% for geo_zone in geo_zones %}*/
/*                         {% if geo_zone.geo_zone_id == payment_paytm_geo_zone_id %}*/
/*                         <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                      </select>*/
/*                   </div>*/
/*                </div>*/
/*                <div class="form-group">*/
/*                   <label class="col-sm-3 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                   <div class="col-sm-9">*/
/*                      <input type="text" name="payment_paytm_sort_order" value="{{ payment_paytm_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                   </div>*/
/*                </div>*/
/* 			*/
/* 			*/
/* 			*/
/* 			*/
/* */
/*           </div>*/
/*         </form>        */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
