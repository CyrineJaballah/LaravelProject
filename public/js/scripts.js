var currentUrl = window.location.href;

var navLinks = document.querySelectorAll(".nav-link");

for (var i = 0; i < navLinks.length; i++) {
    var href = navLinks[i].getAttribute("href");

    var cleanCurrentUrl = currentUrl.replace(/\/+$/, "").split("?")[0];
    var cleanHref = href.replace(/\/+$/, "").split("?")[0];

    if (cleanHref === cleanCurrentUrl) {
        navLinks[i].closest(".nav-item").classList.add("active");
    }
}
