//Navbar
$(window).scroll(function() {
    $('#navbg').toggleClass('scrolled', $(this).scrollTop() > 179);
});
//Fix navbar after scroll
if($(window).width() > 992) {
    $(window).scroll(function() {
        if($(this).scrollTop() > 179) {
            $('#navbg').addClass("fixed-top");
            // add padding top to show content behind navbar
            $('body').css('padding-top', $('#navbg').outerHeight() + 'px');
            document.getElementById("logo").style.display = 'none';
            document.getElementById("Header").style.display = 'none';
            // $('#navbg').addClass("bg-danger");
        } else {
            $('#navbg').removeClass("fixed-top");
            document.getElementById("logo").style.display = 'block';
            document.getElementById("Header").style.display = 'block';
            // $('#navbg').removeClass("bg-danger");
            // remove padding top from body
            $('body').css('padding-top', '0');
        }
    });
}
//Sidebar
$('.menu1').on('click', function(e) {
    e.preventDefault();
    $('#sidebar1').addClass('active');
    $('.collapse.show').toggleClass('show');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});
$('.dismiss').on('click', function() {
    $('#sidebar1').removeClass('active');
});