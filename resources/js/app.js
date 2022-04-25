require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

//window.$ = window.jQuery = require("jquery");
import jQuery from 'jquery';
window.jQuery = window.$ = jQuery

import VueTelInput from 'vue-tel-input';
import 'vue-tel-input/dist/vue-tel-input.css';
import Select2 from 'vue3-select2-component';
import LaravelVuePagination from 'laravel-vue-pagination';
//import { createI18n } from 'vue-i18n'


//const i18n = createI18n({
  // something vue-i18n options here ...
//})

/*import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {dom, library} from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons';
import { far } from '@fortawesome/free-regular-svg-icons';
import {faLock, faEnvelope} from '@fortawesome/free-solid-svg-icons';
import {faFacebook, faGooglePlus} from '@fortawesome/free-brands-svg-icons';*/


//import "../../node_modules/admin-lte/plugins/select2/js/select2.full.min.js"

/*import "../../node_modules/admin-lte/dist/js/adminlte.min.js"
import "../../node_modules/admin-lte/plugins/select2/js/select2.full.min.js"
import "../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"
import "../../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"
//import "../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"
//import "../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"
import "../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"
//mport "../../node_modules/admin-lte/plugins/moment/moment.min.js"
import "../../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"
//import "../../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"
//import "../../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"
import "../../node_modules/admin-lte/plugins/sparklines/sparkline.js"
//import "../../node_modules/admin-lte/plugins/chart.js/Chart.min.js"
import "../../node_modules/admin-lte/plugins/jquery/jquery.min.js"
import "../../node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"
import "../../node_modules/admin-lte/plugins/inputmask/jquery.inputmask.min.js"
//import "../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"
import "../../node_modules/admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
import "../../node_modules/admin-lte/plugins/bs-stepper/js/bs-stepper.min.js"
import "../../node_modules/admin-lte/plugins/dropzone/min/dropzone.min.js"


//import adminlte styles
import '../../node_modules/admin-lte/dist/css/adminlte.min.css'
import "../../node_modules/admin-lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
import "../../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.css"
import "../../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css"
import "../../node_modules/admin-lte/plugins/jqvmap/jqvmap.min.css"
import "../../node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css"
import "../../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
import "../../node_modules/admin-lte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"
import "../../node_modules/admin-lte/plugins/bs-stepper/css/bs-stepper.min.css"
import "../../node_modules/admin-lte/plugins/dropzone/min/dropzone.min.css"*/

//library.add(fas, fab, far, faLock, faEnvelope, faFacebook, faGooglePlus);
//dom.watch()

//app

//.contact-form .agree-label label { margin-left: unset !important;}label{ display: unset !important}


//Vue.mixin(require('./base'))
!function($) {
    "use strict";
    $.fn.meanmenu = function(e) {
        var n = {
            meanMenuTarget: jQuery(this),
            meanMenuContainer: ".mobile-responsive-menu",
            meanMenuClose: "X",
            meanMenuCloseSize: "18px",
            meanMenuOpen: "<span /><span /><span />",
            meanRevealPosition: "right",
            meanRevealPositionDistance: "0",
            meanRevealColour: "",
            meanScreenWidth: "480",
            meanNavPush: "",
            meanShowChildren: !0,
            meanExpandableChildren: !0,
            meanExpand: "+",
            meanContract: "-",
            meanRemoveAttrs: !1,
            onePage: !1,
            meanDisplay: "block",
            removeElements: ""
        };
        e = $.extend(n, e);
        var a = window.innerWidth || document.documentElement.clientWidth;
        return this.each(function() {
            var n = e.meanMenuTarget,
                t = e.meanMenuContainer,
                r = e.meanMenuClose,
                i = e.meanMenuCloseSize,
                s = e.meanMenuOpen,
                u = e.meanRevealPosition,
                m = e.meanRevealPositionDistance,
                l = e.meanRevealColour,
                o = e.meanScreenWidth,
                c = e.meanNavPush,
                v = ".meanmenu-reveal",
                h = e.meanShowChildren,
                d = e.meanExpandableChildren,
                y = e.meanExpand,
                j = e.meanContract,
                Q = e.meanRemoveAttrs,
                f = e.onePage,
                g = e.meanDisplay,
                p = e.removeElements,
                C = !1;
            (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Blackberry/i) || navigator.userAgent.match(/Windows Phone/i)) && (C = !0), (navigator.userAgent.match(/MSIE 8/i) || navigator.userAgent.match(/MSIE 7/i)) && jQuery("html").css("overflow-y", "scroll");
            var w = "",
                x = function() {
                    if ("center" === u) {
                        var e = window.innerWidth || document.documentElement.clientWidth,
                            n = e / 2 - 22 + "px";
                        w = "left:" + n + ";right:auto;", C ? jQuery(".meanmenu-reveal").animate({
                            left: n
                        }) : jQuery(".meanmenu-reveal").css("left", n)
                    }
                },
                A = !1,
                E = !1;
            "right" === u && (w = "right:" + m + ";left:auto;"), "left" === u && (w = "left:" + m + ";right:auto;"), x();
            var M = "",
                P = function() {
                    M.html(jQuery(M).is(".meanmenu-reveal.meanclose") ? r : s)
                },
                W = function() {
                    jQuery(".mean-bar,.mean-push").remove(), jQuery(t).removeClass("mean-container"), jQuery(n).css("display", g), A = !1, E = !1, jQuery(p).removeClass("mean-remove")
                },
                b = function() {
                    var e = "background:" + l + ";color:" + l + ";" + w;
                    
                    if (o >= a) {
                        jQuery(p).addClass("mean-remove"), E = !0, jQuery(t).addClass("mean-container"), jQuery(".mean-container").prepend('<div class="mean-bar"><a href="#nav" class="meanmenu-reveal" style="' + e + '">Show Navigation</a><nav class="mean-nav"></nav></div>');
                        var r = jQuery(n).html();
                        jQuery(".mean-nav").html(r), Q && jQuery("nav.mean-nav ul, nav.mean-nav ul *").each(function() {
                            jQuery(this).is(".mean-remove") ? jQuery(this).attr("class", "mean-remove") : jQuery(this).removeAttr("class"), jQuery(this).removeAttr("id")
                        }), jQuery(n).before('<div class="mean-push" />'), jQuery(".mean-push").css("margin-top", c), jQuery(n).hide(), jQuery(".meanmenu-reveal").show(), jQuery(v).html(s), M = jQuery(v), jQuery(".mean-nav ul").hide(), h ? d ? (jQuery(".mean-nav ul ul").each(function() {
                            jQuery(this).children().length && jQuery(this, "li:first").parent().append('<a class="mean-expand" href="#" style="font-size: ' + i + '">' + y + "</a>")
                        }), jQuery(".mean-expand").on("click", function(e) {
                            e.preventDefault(), jQuery(this).hasClass("mean-clicked") ? (jQuery(this).text(y), jQuery(this).prev("ul").slideUp(300, function() {})) : (jQuery(this).text(j), jQuery(this).prev("ul").slideDown(300, function() {})), jQuery(this).toggleClass("mean-clicked")
                        })) : jQuery(".mean-nav ul ul").show() : jQuery(".mean-nav ul ul").hide(), jQuery(".mean-nav ul li").last().addClass("mean-last"), M.removeClass("meanclose"), jQuery(M).click(function(e) {
                            e.preventDefault(), A === !1 ? (M.css("text-align", "center"), M.css("text-indent", "0"), M.css("font-size", i), jQuery(".mean-nav ul:first").slideDown(), A = !0) : (jQuery(".mean-nav ul:first").slideUp(), A = !1), M.toggleClass("meanclose"), P(), jQuery(p).addClass("mean-remove")
                        }), f && jQuery(".mean-nav ul > li > a:first-child").on("click", function() {
                            jQuery(".mean-nav ul:first").slideUp(), A = !1, jQuery(M).toggleClass("meanclose").html(s)
                        })
                    } else W()
                };
            C || jQuery(window).resize(function() {
                a = window.innerWidth || document.documentElement.clientWidth, a > o, W(), o >= a ? (b(), x()) : W()
            }), jQuery(window).resize(function() {
                a = window.innerWidth || document.documentElement.clientWidth, C ? (x(), o >= a ? E === !1 && b() : W()) : (W(), o >= a && (b(), x()))
            }), b()
        })
    }
}(jQuery);

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            //.component("font-awesome-icon", FontAwesomeIcon)
            .use(plugin)
            .directive("dropmenu", {
				  mounted(el, binding) {
					  
					    //console.log($('.mean-menu'));
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					    //$(document).ready(function(){ 
						   
						    $(".side-nav-responsive .dot-menu").on("click", function(){
		                       $(".side-nav-responsive .container .container").toggleClass("active");
                            });
						    
						    
					    //});
					 
					    
				    
				  },
				  updated(el, binding){
					  
					    
					  
					    /*$('.mean-menu').meanmenu({ 
					            //meanMenuContainer: '.mobile-menu-area', 
					            meanScreenWidth: "991", 
					            //meanRevealPosition: "right"
					    });*/
					  
				  },
				  beforeUpdate(el, binding){
					  
					  //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					  
					  
				  },
				  beforeMount(el, binding){
					  
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					    //alert('');
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					   
	                 
				    //el.style.fontSize = 20 + "px";
				 },
            })
            .directive("mainmenu", {
				  mounted(el, binding) {
					  
					    console.log($('.mean-menu'));
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					    $(document).ready(function(){ 
						    $(el).meanmenu({ 
						            //meanMenuContainer: '.mobile-menu-area', 
						            meanScreenWidth: "991", 
						            //meanRevealPosition: "right"
						    });
						    
						    /*$(".side-nav-responsive .dot-menu").on("click", function(){
							    console.log($(".side-nav-responsive .container .container"));
							    if($(".side-nav-responsive .container .container").hasClass('active')) {
								    alert("");
								    $(".side-nav-responsive .container .container").removeClass("active");
								}
								$(".side-nav-responsive .container .container").addClass("active");
						    });*/
						    
					    });
					 
					    
				    
				  },
				  updated(el, binding){
					  
					    
					  
					    /*$('.mean-menu').meanmenu({ 
					            //meanMenuContainer: '.mobile-menu-area', 
					            meanScreenWidth: "991", 
					            //meanRevealPosition: "right"
					    });*/
					  
				  },
				  beforeUpdate(el, binding){
					  
					  //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					  
					  
				  },
				  beforeMount(el, binding){
					  
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					    //alert('');
					    //$("#ledu-area").html('<div class="mobile-responsive-nav"><div class="container"><div class="mobile-responsive-menu"><div class="logo"><a href="#"><img src="/img/LG-RIDD@2x.png" class="logo-two" alt="logo" style="width: 60px;"/><img src="/img/LG-RIDD@2x.png" class="logo-one" alt="logo" style="width: 60px;"/></a></div></div></div>');
					    
					   
	                 
				    //el.style.fontSize = 20 + "px";
				 },
            })
            .use(VueTelInput)
            .component('Select2', Select2)
            .component('Pagination', LaravelVuePagination)
            .mixin({ methods: { route } })
             .mixin(require('./base'))
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
