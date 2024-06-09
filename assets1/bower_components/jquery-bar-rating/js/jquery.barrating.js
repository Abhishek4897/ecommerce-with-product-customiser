!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(b){var a=(t.prototype.init=function(t,e){return this.$elem=b(e),this.options=b.extend({},b.fn.barrating.defaults,t),this.options},t);function t(){function u(t){return b.isNumeric(t)&&(t=Math.floor(t)),b('option[value="'+t+'"]',v.$elem)}function l(t){var e=v.$elem.data("barrating");return void 0!==t?e[t]:e}function d(t,e){null!==e&&"object"==typeof e?v.$elem.data("barrating",e):v.$elem.data("barrating")[t]=e}function e(){var t,e,n=(t=v.options.initialRating)?u(t):b("option:selected",v.$elem),a=!(e=v.$elem.find('option[value="'+v.options.emptyValue+'"]')).length&&v.options.allowEmpty?(e=b("<option />",{value:v.options.emptyValue})).prependTo(v.$elem):e,i=n.val(),r=n.data("html")?n.data("html"):n.text(),o=null!==v.options.allowEmpty?v.options.allowEmpty:!!a.length,l=a.length?a.val():null,s=a.length?a.text():null;d(null,{userOptions:v.options,ratingValue:i,ratingText:r,originalRatingValue:i,originalRatingText:r,allowEmpty:o,emptyRatingValue:l,emptyRatingText:s,readOnly:v.options.readonly,ratingMade:!1})}function o(){return l("ratingText")}function s(){return l("ratingValue")}function c(){return l("userOptions").reverse?"nextAll":"prevAll"}function g(t){u(t).prop("selected",!0),v.$elem.change()}function p(t){(t=t||o())==l("emptyRatingText")&&(t=""),v.options.showSelectedRating&&v.$elem.parent().find(".br-current-rating").text(t)}function f(){v.$widget.find("a").removeClass(function(t,e){return(e.match(/(^|\s)br-\S+/g)||[]).join(" ")})}function h(){var t,e,n,a=v.$widget.find('a[data-rating-value="'+s()+'"]'),i=l("userOptions").initialRating,r=b.isNumeric(s())?s():0,o=(t=i,Math.round(Math.floor(10*t)/10%1*100));if(f(),a.addClass("br-selected br-current")[c()]().addClass("br-selected"),!l("ratingMade")&&b.isNumeric(i)){if(i<=r||!o)return;e=v.$widget.find("a"),(n=a.length?a[l("userOptions").reverse?"prev":"next"]():e[l("userOptions").reverse?"last":"first"]()).addClass("br-fractional"),n.addClass("br-fractional-"+o)}}function n(t){t.on("click.barrating",function(t){var e,n,a,i=b(this),r=l("userOptions");return t.preventDefault(),e=i.attr("data-rating-value"),n=i.attr("data-rating-text"),a=i,l("allowEmpty")&&l("userOptions").deselectable&&s()==a.attr("data-rating-value")&&(e=l("emptyRatingValue"),n=l("emptyRatingText")),d("ratingValue",e),d("ratingText",n),d("ratingMade",!0),g(e),p(n),h(),r.onSelect.call(v,s(),o(),t),!1})}function a(t){t.on("touchstart.barrating",function(t){t.preventDefault(),t.stopPropagation(),b(this).click()})}function i(t){n(t),v.options.hoverState&&(t.on("mouseenter.barrating",function(){var t=b(this);f(),t.addClass("br-active")[c()]().addClass("br-active"),p(t.attr("data-rating-text"))}),v.$widget.on("mouseleave.barrating blur.barrating",function(){p(),h()}))}function r(t){t.off(".barrating")}function m(t){var e=v.$widget.find("a");a(e),t?(r(e),e.on("click.barrating",function(t){t.preventDefault()})):i(e)}var v=this;this.show=function(){var t,i;l()||(t=["br-wrapper"],""!==v.options.theme&&t.push("br-theme-"+v.options.theme),v.$elem.wrap(b("<div />",{class:t.join(" ")})),e(),v.$widget=(i=b("<div />",{class:"br-widget"}),v.$elem.find("option").each(function(){var t,e,n,a=b(this).val();a!==l("emptyRatingValue")&&(t=b(this).text(),(e=b(this).data("html"))&&(t=e),n=b("<a />",{href:"#","data-rating-value":a,"data-rating-text":t,html:v.options.showValues?t:""}),i.append(n))}),v.options.showSelectedRating&&i.append(b("<div />",{text:"",class:"br-current-rating"})),v.options.reverse&&i.addClass("br-reverse"),v.options.readonly&&i.addClass("br-readonly"),i),v.$widget.insertAfter(v.$elem),h(),p(),m(v.options.readonly),v.$elem.hide())},this.readonly=function(t){"boolean"==typeof t&&l("readOnly")!=t&&(m(t),d("readOnly",t),v.$widget.toggleClass("br-readonly"))},this.set=function(t){var e=l("userOptions");0!==v.$elem.find('option[value="'+t+'"]').length&&(d("ratingValue",t),d("ratingText",v.$elem.find('option[value="'+t+'"]').text()),d("ratingMade",!0),g(s()),p(o()),h(),e.silent||e.onSelect.call(this,s(),o()))},this.clear=function(){var t=l("userOptions");d("ratingValue",l("originalRatingValue")),d("ratingText",l("originalRatingText")),d("ratingMade",!1),b("option",v.$elem).prop("selected",function(){return this.defaultSelected}),v.$elem.change(),p(o()),h(),t.onClear.call(this,s(),o())},this.destroy=function(){var t=s(),e=o(),n=l("userOptions");r(v.$widget.find("a")),v.$widget.remove(),v.$elem.removeData("barrating"),v.$elem.unwrap(),v.$elem.show(),n.onDestroy.call(this,t,e)}}b.fn.barrating=function(e,n){return this.each(function(){var t=new a;if(b(this).is("select")||b.error("Sorry, this plugin only works with select fields."),t.hasOwnProperty(e)){if(t.init(n,this),"show"===e)return t.show(n);if(t.$elem.data("barrating"))return t.$widget=b(this).next(".br-widget"),t[e](n)}else{if("object"==typeof e||!e)return n=e,t.init(n,this),t.show();b.error("Method "+e+" does not exist on jQuery.barrating")}})},b.fn.barrating.defaults={theme:"",initialRating:null,allowEmpty:null,emptyValue:"",showValues:!1,showSelectedRating:!0,deselectable:!0,reverse:!1,readonly:!1,fastClicks:!0,hoverState:!0,silent:!1,onSelect:function(t,e,n){},onClear:function(t,e){},onDestroy:function(t,e){}},b.fn.barrating.BarRating=a});