jQuery(document).foundation();

jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })


    var project = jQuery('#main-port').find('.portfolio_projects');

    project.on('mouseover', function() {
        jQuery(this).addClass('hover-img');
    });

    project.on('mouseout', function() {
        jQuery(this).removeClass('hover-img');
    });
});
