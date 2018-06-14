/*!
 * FormValidation (http://formvalidation.io)
 * The best jQuery plugin to validate form fields. Support Bootstrap, Foundation, Pure, SemanticUI, UIKit and custom frameworks
 *
 * @version     v0.6.2-dev, built on 2015-03-13 8:15:46 AM
 * @author      https://twitter.com/nghuuphuoc
 * @copyright   (c) 2013 - 2015 Nguyen Huu Phuoc
 * @license     http://formvalidation.io/license/
 */
!function(a){FormValidation.Framework.Foundation=function(b,c){c=a.extend(!0,{button:{selector:'[type="submit"]',disabled:"disabled"},err:{clazz:"error",parent:"^.*((small|medium|large)-[0-9]+)\\s.*(columns).*$"},icon:{valid:null,invalid:null,validating:null,feedback:"fv-control-feedback"},row:{selector:".row",valid:"fv-has-success",invalid:"error",feedback:"fv-has-feedback"}},c),FormValidation.Base.apply(this,[b,c])},FormValidation.Framework.Foundation.prototype=a.extend({},FormValidation.Base.prototype,{_fixIcon:function(a,b){var c=this._namespace,d=a.attr("type"),e=a.attr("data-"+c+"-field"),f=this.options.fields[e].row||this.options.row.selector,g=a.closest(f);if("checkbox"===d||"radio"===d){var h=b.next();h.is("label")&&b.insertAfter(h)}0===g.find("label").length&&b.addClass("fv-icon-no-label")},_createTooltip:function(a,b,c){var d=this,e=a.data("fv.icon");e&&(e.attr("title",b).css({cursor:"pointer"}).off("mouseenter.container.fv focusin.container.fv").on("mouseenter.container.fv",function(){d._showTooltip(a,c)}).off("mouseleave.container.fv focusout.container.fv").on("mouseleave.container.fv focusout.container.fv",function(){d._hideTooltip(a,c)}),Foundation.libs.tooltip.create(e),e.data("fv.foundation.tooltip",e))},_destroyTooltip:function(a){var b=a.data("fv.icon");if(b){b.css({cursor:""});var c=b.data("fv.foundation.tooltip");c&&(c.off(".fndtn.tooltip"),Foundation.libs.tooltip.hide(c),b.removeData("fv.foundation.tooltip"))}},_hideTooltip:function(a){var b=a.data("fv.icon");if(b){b.css({cursor:""});var c=b.data("fv.foundation.tooltip");c&&Foundation.libs.tooltip.hide(c)}},_showTooltip:function(a){var b=a.data("fv.icon");if(b){var c=b.data("fv.foundation.tooltip");c&&(b.css({cursor:"pointer"}),Foundation.libs.tooltip.show(c))}}})}(jQuery);