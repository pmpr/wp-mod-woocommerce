(()=>{"use strict";var t={n:e=>{var n=e&&e.__esModule?()=>e.default:()=>e;return t.d(n,{a:n}),n},d:(e,n)=>{for(var a in n)t.o(n,a)&&!t.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:n[a]})},o:(t,e)=>Object.prototype.hasOwnProperty.call(t,e)};const e=jQuery;var n=t.n(e);!function(t){let e=function(e,n){this.delay,this.$element=t(e),this.options=t.extend({},this.defaults(),n),this.render()};e.VERSION="1.0.0",e.DEFAULTS={min:0,max:"",step:1,locale:"en-US",autodelay:500,buttononly:!0,autointerval:50},e.prototype.defaults=function(){return{min:this.$element.attr("min")||e.DEFAULTS.min,max:this.$element.attr("max")||e.DEFAULTS.max,step:this.$element.attr("step")||e.DEFAULTS.step,locale:this.$element.attr("data-locale")||e.DEFAULTS.locale,autodelay:this.$element.attr("data-autodelay")||e.DEFAULTS.autodelay,buttononly:this.$element.attr("data-buttononly")||e.DEFAULTS.buttononly,autointerval:this.$element.attr("data-autointerval")||e.DEFAULTS.autointerval}},e.prototype.render=function(){let e=this.$element.parent(),n=e.find(".btn-increase"),a=e.find(".btn-decrease"),i=t('<span style="font-weight: 500; font-size:1rem; line-height: 1.6rem; border: none; background-color: transparent; margin: auto"></span>');this.$element.addClass("loaded"),this.$element.hide(),i.insertAfter(this.$element),t.extend(this,{$parent:e,$preview:i,$increaseBtn:n,$decreaseBtn:a}),this.listener(n,!0),this.listener(a,!1),this.preview()},e.prototype.listener=function(t,e=!0){let n=this;t.on("click",(function(){clearTimeout(n.delay),n.update(e,!0)&&(n.delay=setTimeout((()=>{n.trigger(!1)}),n.options.autodelay))}))},e.prototype.increase=function(){this.update(!0)},e.prototype.decrease=function(){this.update(!1)},e.prototype.preview=function(){this.$preview.html(this.translate(this.$element.val(),this.options.locale))},e.prototype.update=function(t,e){let n=this.options.min,a=this.options.max,i=Math.abs(this.options.step),r=this.$element.val(),o=!0;return r=parseInt(r)+(t?i:-1*i),this.$decreaseBtn.prop("disabled",!1),this.$increaseBtn.prop("disabled",!1),n&&r<parseInt(n)?(r=n,o=!1,this.$decreaseBtn.prop("disabled",!0)):a&&r>parseInt(a)&&(r=a,o=!1,this.$increaseBtn.prop("disabled",!0)),isNaN(r)||(r=this.translate(r)),this.$element.val(r),this.trigger(e||!o),this.preview(),o},e.prototype.trigger=function(t){t||(this.$element.change(),this.$element.trigger("change.pr.quantity"))},e.prototype.translate=function(t,e="en-US"){let n=new Intl.NumberFormat(e),a=n.format(11111).replace(/1/g,"")||".",i=n.format(1.1).replace(/1/g,"");return n.format(parseFloat(t.toString().replace(new RegExp(" ","g"),"").replace(new RegExp("\\"+a,"g"),"").replace(new RegExp("\\"+i),".")))};t.fn.prQuantity;t.fn.prQuantity=function(n){return this.each((function(){let a=t(this),i=a.data("pr.quantity"),r="object"==typeof n&&n;i||a.data("pr.quantity",i=new e(this,r)),"string"==typeof n&&i[n]&&i[n]()}))},t.fn.prQuantity.Constructor=e}(n());const a="input.increment-input[type=number]:not(.loaded)";n()(document).on("DOMContentLoaded",(function(){n()(a).prQuantity(),n()(document).on("change.pr.quantity",(()=>{let t=n()('.woocommerce-cart-form :input[name="update_cart"]');t.length>0&&!0===t.prop("disabled")&&t.prop("disabled",!1).attr("aria-disabled",!1),t.trigger("click"),n()(document).on("updated_wc_div",(()=>{n()(a).prQuantity()}))}))}))})();