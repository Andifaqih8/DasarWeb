$(document).ready(function () {
    
    $(".navbar input[type='checkbox']").click(function () {
        $(".navbar .menu-items").toggleClass("active");
        $(".navbar-container .hamburger-lines .line1").toggleClass("rotate1");
        $(".navbar-container .hamburger-lines .line2").toggleClass("disappear");
        $(".navbar-container .hamburger-lines .line3").toggleClass("rotate2");
    });
});