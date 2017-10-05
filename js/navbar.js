// Highlights the active nav item.
$(document).ready(function($) {
    function markNavActive(){
        var filename = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
        var listLinks = $('nav a');

        listLinks.each(function() {
            if ($(this).attr('href') == filename) {
                $(this).addClass('active');
                return;
            }
            if (filename == "") {
                $('.nav a[href="index.php"]').addClass('active');
                return;
            }
        });
    }
    markNavActive();    
});