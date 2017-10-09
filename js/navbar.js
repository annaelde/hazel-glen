// Highlights the active nav item.
$(document).ready(function($) {
    // Get filename
    var filename = window.location.href.substr(window.location.href.lastIndexOf('/') + 1)
    // Remove hash from filename
    var filename = filename.replace(window.location.hash, '')
    var navLinks = $('nav a')
    // Iterate through nav links to find the active one
    navLinks.each(function() {
        if ($(this).attr('href') == filename) {
            $(this).addClass('active')
            return false
        } else if (filename == '') {
            $('.nav a[href="index.php"]').addClass('active')
            return false
        }
    })
})
