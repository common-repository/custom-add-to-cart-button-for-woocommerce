!function(t){var e=window.bc_uatc_settings||{};function a(){var a=t(document).find(".bc-uatc-custom-qty-container .quantity .qty");for(let c=0;c<a.length;c++){let n=a.eq(c);if(n.hasClass("bc-atc-qty")&&n.hasClass("bc-atc-qty-input")||(n.addClass("bc-atc-qty bc-atc-qty-input"),void 0!==e&&"true"===e.hideQtyInputArrows&&n.addClass("bc-atc-text-input")),"true"===e.displayAddMinus&&0==n.siblings(".bc-atc-qty").length){n.wrap('<div style="display: flex; align-items: center;" class="bc-atc-qty-container"></div>');let e=bc_uatc_current_page?"bc-atc-qty-increase-"+bc_uatc_current_page:"",a=bc_uatc_current_page?"bc-atc-qty-decrease-"+bc_uatc_current_page:"";t('<span class="bc-atc-qty bc-atc-qty-changer '+a+' bc-atc-qty-decrease">-</span>').insertBefore(n),t('<span class="bc-atc-qty bc-atc-qty-changer '+e+' bc-atc-qty-increase">+</span>').insertAfter(n)}n.parent().css("display","flex")}}t(function(){a(),t(document.body).on("updated_cart_totals",function(){a()});let c=".single-product .single_add_to_cart_button, .product .single_add_to_cart_button";e&&e.additionalAjaxSelector&&""!==e.additionalAjaxSelector&&(c+=", "+e.additionalAjaxSelector),t(document).on("click",".bc-atc-qty-decrease-checkout, .bc-atc-qty-increase-checkout",function(e){e.preventDefault();var a=t(this).closest(".product-quantity").find(".quantity input.qty"),c=t(this).hasClass("bc-atc-qty-increase")?1:-1;let n=0;0!==a.length&&(c+(n=parseInt(a.val()))<0||(a.val(c+n),a.trigger("input")))}),t(document).on("click",".bc-atc-qty-decrease-cart, .bc-atc-qty-increase-cart",function(a){if("true"===e.updateCartOnIncreaseDecreaseClick){a.preventDefault();var c=t(this).closest(".product-quantity").find(".quantity input.qty");0===c.length&&(c=t(this).parent().find(".bc-atc-qty-input"));let e=0;if(0===c.length)return;if(e=c.val(),isNaN(e)||0==e)return;var n=t(this).hasClass("bc-atc-qty-increase")?1:-1;let s={update_cart:"Update Cart","woocommerce-cart-nonce":t(this).closest("form").find("#woocommerce-cart-nonce").first().attr("value")};s[c.attr("name")]=n+parseInt(e),t.post("#",s,function(e){t(document.body).trigger("wc_fragment_refresh")})}}),t(document).on("click",c,function(a){if("true"===e.enableAjaxProductPage){a.preventDefault();let c=0;const n=parseInt(t(this).attr("value"));isNaN(n)||0==n?(c=parseInt(t(this).closest("form").find("input[name=variation_id]").val())||parseInt(t(this).closest("form").find("input[name=add-to-cart]").val())||parseInt(t(this).closest(".product").find("[data-product_id]").first().attr("data-product_id")))||t(this).closest("form").submit():c=n;let s=t(this).closest("form").find(".quantity input.qty");0===s.length&&(s=t(this).parent().find(".bc-atc-qty-input"));let r=0;if(r=0===s.length?1:s.val(),isNaN(r)||0===r)return;const i=t(this);i.addClass("loading");const o=t(this).closest("form").find('input[name="nyp"]');if(o.length>0){const a=window.location.href.split("?")[0]+"?wc-ajax=add_to_cart",n={"add-to-cart":c,quantity:r,nyp:o.val()};console.log("url",a,"data",n),t.post(a,n,function(a){i.removeClass("loading"),i.addClass("added"),t(document.body).trigger("wc_fragment_refresh"),e&&"true"!==e.keepAddedIcon&&(console.log("removing added class"),setTimeout(function(){i.removeClass("added")},1e3))})}else t.post(e.ajaxurl,{action:"bc_atc_add_product",product_id:c,quantity:r},function(a){i.removeClass("loading"),i.addClass("added"),t(document.body).trigger("wc_fragment_refresh"),e&&"true"!==e.keepAddedIcon&&(console.log("removing added class"),setTimeout(function(){i.removeClass("added")},1e3))})}}),t(document).on("blur",".bc-atc-qty-decrease+input",function(){console.log("you left me");const e=parseInt(t(this).val()),a=t(this);a.val(e),a.attr("value",e),a.trigger("change")}),t(document).on("click",".bc-atc-qty-decrease",function(){let e=t(this).closest(".quantity").find(".bc-atc-qty-input").first(),a=isNaN(parseInt(e.val()))?0:parseInt(e.val());if(e.val()>1){var c=a-1;e.val(c),e.attr("value",c)}e.trigger("change")}),t(document).on("click",".bc-atc-qty-increase",function(){let e=t(this).closest(".quantity").find(".bc-atc-qty-input").first(),a=isNaN(parseInt(e.val()))?0:parseInt(e.val()),c=parseInt(e.attr("max"));if(Number.isInteger(c)&&a>=c)return void console.log("max count reached!",a,c);const n=a+1;e.val(n),e.attr("value",n),e.trigger("change")})})}(jQuery);
//# sourceMappingURL=frontend-bundle.js.map