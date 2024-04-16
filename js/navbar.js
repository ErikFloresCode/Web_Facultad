window.onscroll = function () {
    const nav = document.getElementById('mainNav');
    if (window.pageYOffset > 0) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
};
