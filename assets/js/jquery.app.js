function executeFunctionByName(a, b) {
    for (var c = [].slice.call(arguments).splice(2), d = a.split("."), e = d.pop(), f = 0; f < d.length; f++) b = b[d[f]];
    return b[e].apply(this, c)
}

function resizeitems() {
    if ($.isArray(resizefunc))
        for (i = 0; i < resizefunc.length; i++) window[resizefunc[i]]()
}

function initscrolls() {
    jQuery.browser.mobile !== !0 && ($(".slimscroller").slimscroll({
        height: "auto",
        size: "5px"
    }), $(".slimscrollleft").slimScroll({
        height: "auto",
        position: "right",
        size: "5px",
        color: "#dcdcdc",
        wheelStep: 5
    }))
}

function toggle_slimscroll(a) {
    $("#wrapper").hasClass("enlarged") ? ($(a).css("overflow", "inherit").parent().css("overflow", "inherit"), $(a).siblings(".slimScrollBar").css("visibility", "hidden")) : ($(a).css("overflow", "hidden").parent().css("overflow", "hidden"), $(a).siblings(".slimScrollBar").css("visibility", "visible"))
}! function(a) {
    "use strict";
    var b = function() {
        this.$body = a("body"), this.$openLeftBtn = a(".open-left"), this.$menuItem = a("#sidebar-menu a")
    };
    b.prototype.openLeftBar = function() {
        a("#wrapper").toggleClass("enlarged"), a("#wrapper").addClass("forced"), a("#wrapper").hasClass("enlarged") && a("body").hasClass("fixed-left") ? a("body").removeClass("fixed-left").addClass("fixed-left-void") : !a("#wrapper").hasClass("enlarged") && a("body").hasClass("fixed-left-void") && a("body").removeClass("fixed-left-void").addClass("fixed-left"), a("#wrapper").hasClass("enlarged") ? a(".left ul").removeAttr("style") : a(".subdrop").siblings("ul:first").show(), toggle_slimscroll(".slimscrollleft"), a("body").trigger("resize")
    }, b.prototype.menuItemClick = function(b) {
        a("#wrapper").hasClass("enlarged") || (a(this).parent().hasClass("has_sub") && b.preventDefault(), a(this).hasClass("subdrop") ? a(this).hasClass("subdrop") && (a(this).removeClass("subdrop"), a(this).next("ul").slideUp(350), a(".pull-right i", a(this).parent()).removeClass("md-remove").addClass("md-add")) : (a("ul", a(this).parents("ul:first")).slideUp(350), a("a", a(this).parents("ul:first")).removeClass("subdrop"), a("#sidebar-menu .pull-right i").removeClass("md-remove").addClass("md-add"), a(this).next("ul").slideDown(350), a(this).addClass("subdrop"), a(".pull-right i", a(this).parents(".has_sub:last")).removeClass("md-add").addClass("md-remove"), a(".pull-right i", a(this).siblings("ul")).removeClass("md-remove").addClass("md-add")))
    }, b.prototype.init = function() {
        var b = this;
        a(".open-left").click(function(a) {
            a.stopPropagation(), b.openLeftBar()
        }), b.$menuItem.on("click", b.menuItemClick), a("#sidebar-menu ul li.has_sub a.active").parents("li:last").children("a:first").addClass("active").trigger("click")
    }, a.Sidemenu = new b, a.Sidemenu.Constructor = b
}(window.jQuery),
function(a) {
    "use strict";
    var b = function() {
        this.$body = a("body"), this.$fullscreenBtn = a("#btn-fullscreen")
    };
    b.prototype.launchFullscreen = function(a) {
        a.requestFullscreen ? a.requestFullscreen() : a.mozRequestFullScreen ? a.mozRequestFullScreen() : a.webkitRequestFullscreen ? a.webkitRequestFullscreen() : a.msRequestFullscreen && a.msRequestFullscreen()
    }, b.prototype.exitFullscreen = function() {
        document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()
    }, b.prototype.toggle_fullscreen = function() {
        var a = this,
            b = document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled;
        b && (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement ? a.exitFullscreen() : a.launchFullscreen(document.documentElement))
    }, b.prototype.init = function() {
        var a = this;
        a.$fullscreenBtn.on("click", function() {
            a.toggle_fullscreen()
        })
    }, a.FullScreen = new b, a.FullScreen.Constructor = b
}(window.jQuery),
function(a) {
    "use strict";
    var b = function() {
        this.VERSION = "1.1.0", this.AUTHOR = "Coderthemes", this.SUPPORT = "coderthemes@gmail.com", this.pageScrollElement = "html, body", this.$body = a("body")
    };
    b.prototype.onDocReady = function(b) {
        FastClick.attach(document.body), resizefunc.push("initscrolls"), resizefunc.push("changeptype"), a(".animate-number").each(function() {
            a(this).animateNumbers(a(this).attr("data-value"), !0, parseInt(a(this).attr("data-duration")))
        }), a(window).resize(debounce(resizeitems, 100)), a("body").trigger("resize"), a(".right-bar-toggle").on("click", function(b) {
            b.preventDefault(), a("#wrapper").toggleClass("right-bar-enabled")
        })
    }, b.prototype.init = function() {
        var b = this;
        a(document).ready(b.onDocReady), a.Sidemenu.init(), a.FullScreen.init()
    }, a.App = new b, a.App.Constructor = b
}(window.jQuery),
function(a) {
    "use strict";
    a.App.init()
}(window.jQuery);
var toggle_fullscreen = function() {},
    w, h, dw, dh, changeptype = function() {
        w = $(window).width(), h = $(window).height(), dw = $(document).width(), dh = $(document).height(), jQuery.browser.mobile === !0 && $("body").addClass("mobile").removeClass("fixed-left"), $("#wrapper").hasClass("forced") || (w > 990 ? ($("body").removeClass("smallscreen").addClass("widescreen"), $("#wrapper").removeClass("enlarged")) : ($("body").removeClass("widescreen").addClass("smallscreen"), $("#wrapper").addClass("enlarged"), $(".left ul").removeAttr("style")), $("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left") ? $("body").removeClass("fixed-left").addClass("fixed-left-void") : !$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void") && $("body").removeClass("fixed-left-void").addClass("fixed-left")), toggle_slimscroll(".slimscrollleft")
    },
    debounce = function(a, b, c) {
        var d, e;
        return function() {
            var f = this,
                g = arguments,
                h = function() {
                    d = null, c || (e = a.apply(f, g))
                },
                i = c && !d;
            return clearTimeout(d), d = setTimeout(h, b), i && (e = a.apply(f, g)), e
        }
    },
    wow = new WOW({
        boxClass: "wow",
        animateClass: "animated",
        offset: 50,
        mobile: !1
    });
wow.init();
