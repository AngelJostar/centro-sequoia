$(document).ready(function() {

    (function() {
        setTimeout(function() {
            $('#ventana-modal').modal()
        }, 35000);
    }());

    $(function() { $(".toggle-nav").click(function() { $("#site-wrapper").hasClass("show-nav") ? ($("#site-wrapper").removeClass("show-nav"), $("#top-header").removeClass("mover-header"), $("#mid-image").removeClass("blur"), $("#contenedor-principal").removeClass("blur"), $("#top-header").removeClass("blur")) : ($("#site-wrapper").addClass("show-nav"), $("#top-header").addClass("mover-header"), $("#mid-image").addClass("blur"), $("#contenedor-principal").addClass("blur"), $("#top-header").addClass("blur")) }) }), $("ul.tabs li a:first").addClass("active"), $(".secciones article").hide(), $(".secciones article:first").show(), $("ul.tabs li a").click(function() { $("ul.tabs li a").removeClass("active"), $(this).addClass("active"), $(".secciones article").hide(); var e = $(this).attr("href"); return $(e).show(), !1 });
    document.getElementById("myHeader");

    const e = document.querySelectorAll(".accordion button");

    function a() { const a = this.getAttribute("aria-expanded"); for (i = 0; i < e.length; i++) e[i].setAttribute("aria-expanded", "false"); "false" == a && this.setAttribute("aria-expanded", "true") }

    function t() {
        var e = document.createElement("iframe");
        e.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0"), e.setAttribute("frameborder", "0"), e.setAttribute("id", "youtube-iframe"), this.parentNode.replaceChild(e, this)
    }
    e.forEach(e => e.addEventListener("click", a)),
        function() {
            for (var e = document.getElementsByClassName("reproductor"), a = 0; a < e.length; a++) {
                var i = document.createElement("div");
                i.innerHTML = '<img class="imagen-previa" alt="vista previa del video" src="//i.ytimg.com/vi/' + e[a].dataset.id + '/hqdefault.jpg"><div class="youtube-play"></div>', i.onclick = t, e[a].appendChild(i)
            }
        }(),
        function() {
            for (var e = document.getElementsByClassName("reproductor-rectangular"), a = 0; a < e.length; a++) {
                var i = document.createElement("div");
                i.innerHTML = '<img class="imagen-previa-rectangular" alt="vista previa del video" src="//i.ytimg.com/vi/' + e[a].dataset.id + '/hqdefault.jpg"><div class="youtube-play"></div>', i.onclick = t, e[a].appendChild(i)
            }
        }()

});