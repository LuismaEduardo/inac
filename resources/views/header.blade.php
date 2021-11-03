<!DOCTYPE html>
<html lang="en-US" class="no-js">

 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">

    <title>Instituto Nacional de Aviación Civil </title>

    <link rel='stylesheet' href='plugins/goodlayers-core/plugins/combine/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/goodlayers-core/include/css/page-builder.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/revslider/public/assets/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-core.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/inacedu-style-custom.css' type='text/css' media='all' />

    <link href="" rel="stylesheet" property="stylesheet" type="text/css" media="all">
    <link rel='stylesheet' href='' type='text/css' media='all' />

</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js inacedu-body inacedu-body-front inacedu-full  inacedu-with-sticky-navigation  inacedu-blockquote-style-1 gdlr-core-link-to-lightbox">
    
    <div class="inacedu-body-outer-wrapper ">
        <div class="inacedu-body-wrapper clearfix  inacedu-with-frame">
            <div class="inacedu-top-bar">
                <div class="inacedu-top-bar-background"></div>
            </div>
            <header class="inacedu-header-wrap inacedu-header-style-plain  inacedu-style-menu-right inacedu-sticky-navigation inacedu-style-fixed" data-navigation-offset="75px">
                <div class="inacedu-header-background"></div>
                <div class="inacedu-header-container  inacedu-container">
                    <div class="inacedu-header-container-inner clearfix">
                        <div class="inacedu-logo  inacedu-item-pdlr">
                            <div class="inacedu-logo-inner">
                                <a class="" href="index.html"><img src="images/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="inacedu-navigation inacedu-item-pdlr clearfix ">
                            <div class="inacedu-main-menu" id="inacedu-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item inacedu-normal-menu"><a href="{{ route('inicio') }}" class="sf-with-ul-pre">Inicio</a></li>
                                    <li class="menu-item menu-item-has-children inacedu-normal-menu"><a class="sf-with-ul-pre">Nosotros</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="{{ route('nosotros') }}">Misión y Visión</a></li>
                                            <li class="menu-item" data-size="60"><a href="{{ route('organigrama') }}">Organigrama</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children inacedu-mega-menu"><a class="sf-with-ul-pre">Carreras</a>
                                        <div class="sf-mega sf-mega-full megaimg">
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children" data-size="15"><a class="sf-with-ul-pre" a href="{{ route('atc') }}">Control de Tránsito Aéreo</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="{{ route('atc051') }}">Instrucción Básica</a></li>
                                                        <li class="menu-item"><a href="{{ route('atc052') }}">Control de  Aeródromo</a></li>
                                                        <li class="menu-item"><a href="{{ route('atc053') }}">Control de Aproximación por Procedimientos</a></li>
                                                        <li class="menu-item"><a href="{{ route('atc054a') }}">Control de Aproximación por Vigilancia ATS</a></li>
                                                        <li class="menu-item"><a href="{{ route('atc055') }}">Control de Área por Procedimientos</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('met') }}" class="sf-with-ul-pre">Meteorología Aeronáutica</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="{{ route('metiv') }}">Meteorología Aeronáutica Clase IV</a></li>
                                                        <li class="menu-item"><a href="{{ route('metii') }}">Meteorología Aeronáutica Clase II</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('piloto') }}" class="sf-with-ul-pre">Piloto</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="{{ route('pilotop') }}">Piloto Privado</a></li>
                                                        <li class="menu-item"><a href="{{ route('pilotoc') }}">Piloto Comercial</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="mas-cursos.html" class="sf-with-ul-pre">Más Cursos</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="foi.html">Tecnicas de Instrucción FOI</a></li>
                                                        <li class="menu-item"><a href="sms.html">Seguridad Operacional SMS</a></li>
                                                        <li class="menu-item"><a href="otros.html">Otros</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15">
                                                    <a href="{{ route('tripulante') }}" class="sf-with-ul-pre">Tripulante de Cabina</a>
                                                </li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('ais') }}" class="sf-with-ul-pre">Servicio de Información Aeronautica</a></li>
                                                <li class="menu-item menu-item-has-children" data-size="15"><a href="{{ route('dv') }}" class="sf-with-ul-pre">Despachador de Vuelo</a></li>  
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children inacedu-normal-menu"><a class="sf-with-ul-pre">Estudiante</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="#">Admisión</a></li>
                                            <li class="menu-item" data-size="60"><a href="#">Campus Virtual</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item inacedu-normal-menu"><a href="{{ route('oma') }}"class="sf-with-ul-pre">OMA</a></li>
                                    <li class="menu-item inacedu-normal-menu"><a href="{{ route('noticias') }}" class="sf-with-ul-pre">Noticias</a></li>
                                    <li class="menu-item inacedu-normal-menu"><a href="{{ route('freq') }}">Preguntas Frecuentes</a></li>
                                </ul>
                                <div class="inacedu-navigation-slide-bar" id="inacedu-navigation-slide-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
    
    @yield('contenido')
    
    <footer>
                <div class="inacedu-footer-wrapper ">
                    <div class="inacedu-footer-container inacedu-container clearfix">
                        <div class="inacedu-footer-column inacedu-item-pdlr inacedu-column-15">
                            <div id="text-2" class="widget widget_text inacedu-widget">
                                <div class="textwidget">
                                    <p><img src="imagenes/footer-logo.png" alt="" /></p>
                                    <p><img src="imagenes/footer2-logo.png" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                    </p>    
                                </div>
                            </div>
                        </div>
                        <div class="inacedu-footer-column inacedu-item-pdlr inacedu-column-15">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget inacedu-widget">
                                <h3 class="inacedu-widget-title">Campus Cochabamba</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                           Final Ayopaya Nº 1308
                                    <br /> Esquina Teniente Monasterios
                                    <br /> Zona Jaihuayco</p>
                                    <p><span style="font-size: 15px; color: #ffffff;">info@inac.edu.bo</span>
                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                    <p><span style="font-size: 15px; color: #ffffff;"> (4) 4594874 -  (4) 4594875</span>
                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="inacedu-footer-column inacedu-item-pdlr inacedu-column-15">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget inacedu-widget">
                                <h3 class="inacedu-widget-title">Campus La Paz</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                           Avenida Busch Nº 1262
                                           <br /> Estación Busch, Linea Blanca
                                           <br /> Mi Teleferico</p>
                                    <p><span style="font-size: 15px; color: #ffffff;">info@inac.edu.bo</span>
                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                    <p><span style="font-size: 15px; color: #ffffff;"> (2) 2444450</span>
                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -20px ;"></span>
                                        
                                </div>
                            </div>
                        </div>
                        <div class="inacedu-footer-column inacedu-item-pdlr inacedu-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget inacedu-widget">
                                <h3 >&nbsp</h3><span class="clear"></span>
                                <h3 >&nbsp</h3><span class="clear"></span>
                                <div class="inacedu-copyright-right inacedu-item-pdlr">
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
                                        <a href="https://www.facebook.com/Instituto-Nacional-de-Aviación-Civil-INAC-194362307289088/" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                                            <i class="fa fa-facebook" ></i>
                                        </a>
                                        <!-- <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus">
                                            <i class="fa fa-google-plus" ></i>
                                        </a>
                                        <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
                                            <i class="fa fa-linkedin" ></i>
                                        </a> -->
                                        <!-- <a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype">
                                            <i class="fa fa-skype" ></i>
                                        </a> -->
                                        <a href="https://twitter.com/INAC_BOLIVIA" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                                            <i class="fa fa-twitter" ></i>
                                        </a>
                                        <a href="https://www.instagram.com/explore/locations/194362307289088/instituto-nacional-de-aviacion-civil-inac/" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                                            <i class="fa fa-instagram" ></i>
                                        </a>
                                    </div>
                                </div>
                                <div Align="right" class="inacedu-copyright-left inacedu-item-pdlr" >Todos los derechos reservados 2021 Instituto Nacional de Aviación Civil</div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </footer>
        </div>
    </div>


	<script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script type="text/javascript">
        /*<![CDATA[*/
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }; /*]]>*/
    </script>
    <script>
        (function(body) {
            'use strict';
            body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
        })(document.body);
    </script>
    <script>
        var tribe_l10n_datatables = {
            "aria": {
                "sort_ascending": ": activate to sort column ascending",
                "sort_descending": ": activate to sort column descending"
            },
            "length_menu": "Show _MENU_ entries",
            "empty_table": "No data available in table",
            "info": "Showing _START_ to _END_ of _TOTAL_ entries",
            "info_empty": "Showing 0 to 0 of 0 entries",
            "info_filtered": "(filtered from _MAX_ total entries)",
            "zero_records": "No matching records found",
            "search": "Search:",
            "all_selected_text": "All items on this page were selected. ",
            "select_all_link": "Select all pages",
            "clear_selection": "Clear Selection.",
            "pagination": {
                "all": "All",
                "next": "Next",
                "previous": "Previous"
            },
            "select": {
                "rows": {
                    "0": "",
                    "_": ": Selected %d rows",
                    "1": ": Selected 1 row"
                }
            },
            "datepicker": {
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                "nextText": "Next",
                "prevText": "Prev",
                "currentText": "Today",
                "closeText": "Done",
                "today": "Today",
                "clear": "Clear"
            }
        };
        var tribe_system_info = {
            "sysinfo_optin_nonce": "a32c675aaa",
            "clipboard_btn_text": "Copy to clipboard",
            "clipboard_copied_text": "System info copied",
            "clipboard_fail_text": "Press \"Cmd + C\" to copy"
        };
    </script>

    <script type="text/javascript">
        /*<![CDATA[*/
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        } /*]]>*/
    </script>

    <script type='text/javascript' src='plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript'>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "https:\/\/demo.goodlayers.com\/inacedu\/wp-admin\/admin-ajax.php"
        };
    </script>
    <script type='text/javascript' src='plugins/goodlayers-core/include/js/page-builder.js'></script>



    <script type='text/javascript' src='js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript'>
        var inacedu_script_core = {
            "home_url": "https:\/\/demo.goodlayers.com\/inacedu\/"
        };
    </script>
    <script type='text/javascript' src='js/plugins.min.js'></script>
	<script>
	    /*<![CDATA[*/
	    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
	    var htmlDivCss = "";
	    if (htmlDiv) {
	        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
	    } else {
	        var htmlDiv = document.createElement("div");
	        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
	        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
	    } /*]]>*/
	</script>
	<script type="text/javascript">
	    /*<![CDATA[*/
	    if (setREVStartSize !== undefined) setREVStartSize({
	        c: '#rev_slider_1_1',
	        gridwidth: [1380],
	        gridheight: [713],
	        sliderLayout: 'auto'
	    });
	    var revapi1, tpj;
	    (function() {
	        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
	        else onLoad();

	        function onLoad() {
	            if (tpj === undefined) {
	                tpj = jQuery;
	                if ("off" == "on") tpj.noConflict();
	            }
	            if (tpj("#rev_slider_1_1").revolution == undefined) {
	                revslider_showDoubleJqueryError("#rev_slider_1_1");
	            } else {
	                revapi1 = tpj("#rev_slider_1_1").show().revolution({
	                    sliderType: "standard",
	                    jsFileLocation: "//demo.goodlayers.com/inacedu/wp-content/plugins/revslider/public/assets/js/",
	                    sliderLayout: "auto",
	                    dottedOverlay: "none",
	                    delay: 9000,
	                    navigation: {
	                        keyboardNavigation: "off",
	                        keyboard_direction: "horizontal",
	                        mouseScrollNavigation: "off",
	                        mouseScrollReverse: "default",
	                        onHoverStop: "off",
	                        touch: {
	                            touchenabled: "on",
	                            touchOnDesktop: "off",
	                            swipe_threshold: 75,
	                            swipe_min_touches: 1,
	                            swipe_direction: "horizontal",
	                            drag_block_vertical: false
	                        },
	                        arrows: {
	                            style: "uranus",
	                            enable: true,
	                            hide_onmobile: true,
	                            hide_under: 1500,
	                            hide_onleave: true,
	                            hide_delay: 200,
	                            hide_delay_mobile: 1200,
	                            tmp: '',
	                            left: {
	                                h_align: "left",
	                                v_align: "center",
	                                h_offset: 20,
	                                v_offset: 0
	                            },
	                            right: {
	                                h_align: "right",
	                                v_align: "center",
	                                h_offset: 20,
	                                v_offset: 0
	                            }
	                        },
	                        bullets: {
	                            enable: true,
	                            hide_onmobile: false,
	                            hide_over: 1499,
	                            style: "uranus",
	                            hide_onleave: true,
	                            hide_delay: 200,
	                            hide_delay_mobile: 1200,
	                            direction: "horizontal",
	                            h_align: "center",
	                            v_align: "bottom",
	                            h_offset: 0,
	                            v_offset: 30,
	                            space: 7,
	                            tmp: '<span class="tp-bullet-inner"></span>'
	                        }
	                    },
	                    visibilityLevels: [1240, 1024, 778, 480],
	                    gridwidth: 1380,
	                    gridheight: 713,
	                    lazyType: "none",
	                    shadow: 0,
	                    spinner: "off",
	                    stopLoop: "off",
	                    stopAfterLoops: -1,
	                    stopAtSlide: -1,
	                    shuffle: "off",
	                    autoHeight: "off",
	                    disableProgressBar: "on",
	                    hideThumbsOnMobile: "off",
	                    hideSliderAtLimit: 0,
	                    hideCaptionAtLimit: 0,
	                    hideAllCaptionAtLilmit: 0,
	                    debugMode: false,
	                    fallbacks: {
	                        simplifyAll: "off",
	                        nextSlideOnWindowFocus: "off",
	                        disableFocusListener: false,
	                    }
	                });
	            };
	        };
	    }()); /*]]>*/
	</script>
	<script>
	    /*<![CDATA[*/
	    var htmlDivCss = unescape("%23rev_slider_1_1%20.uranus.tparrows%20%7B%0A%20%20width%3A50px%3B%0A%20%20height%3A50px%3B%0A%20%20background%3Argba%28255%2C255%2C255%2C0%29%3B%0A%20%7D%0A%20%23rev_slider_1_1%20.uranus.tparrows%3Abefore%20%7B%0A%20width%3A50px%3B%0A%20height%3A50px%3B%0A%20line-height%3A50px%3B%0A%20font-size%3A40px%3B%0A%20transition%3Aall%200.3s%3B%0A-webkit-transition%3Aall%200.3s%3B%0A%20%7D%0A%20%0A%20%20%23rev_slider_1_1%20.uranus.tparrows%3Ahover%3Abefore%20%7B%0A%20%20%20%20opacity%3A0.75%3B%0A%20%20%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_1_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_1_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A");
	    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
	    if (htmlDiv) {
	        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
	    } else {
	        var htmlDiv = document.createElement('div');
	        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
	        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
	    } /*]]>*/
	</script>
    </body>


</html>
