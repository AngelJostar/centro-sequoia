    // Initialize All Required DOM Element
    const burgerMenu = document.getElementById("burger");
    const navbarMenu = document.getElementById("menu");

    // Initialize Responsive Navbar Menu
    burgerMenu.addEventListener("click", () => {
        burgerMenu.classList.toggle("active");
        navbarMenu.classList.toggle("active");

        if (navbarMenu.classList.contains("active")) {
            navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";
        } else {
            navbarMenu.removeAttribute("style");
        }
    });


    $(document).ready(function() {

        (function() {
            setTimeout(function() {
                $('#ventana-modal').modal()
            }, 35000);
        }());

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