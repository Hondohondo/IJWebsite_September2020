$(document).ready(function () {

 /*   $('.inside-nav').click(function () {
        $(this).css('background-color','#ff0000');
    })*/

    //From WayPoints
 /*   var waypoints = $('#handler-first').waypoint(function(direction) {
        notify(this.element.id + ' hit 25% from top of window')
    }, {
        offset: '25%'
    })*/

    //direction - determines if a user scrolls down or up
    //this failed to implement maybe because the div already had a class
    $('.section-inside-content').waypoint(function(direction) {
        if(direction == "down") {
            $('.section-inside-header').addClass('sticky');
        } else {
            $('.section-inside-header').removeClass('sticky');
        }
    });

});