/**
 * Script file for UI-related JavaScript
 */

$('.carousel.carousel-slider').carousel({
    fullWidth: true
});
autoplay()

function autoplay() {
    $('.carousel.autoplay').carousel('next');
    $('.slider.autoplay').slider('next');
    setTimeout(autoplay, 4500);
}

$(document).ready(function () {
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });


    $('.collapsible').collapsible();
    $('.tooltipped').tooltip({
        delay: 50
    });
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('.parallax').parallax();
    $('select').material_select();
    $('.slider').slider();
    $('.carousel').carousel();

    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 10, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    });

    $(".button-collapse").sideNav();

});


$(document).on('scroll', function (e) {
    updateColor();

});

function updateColor() {
    var o = $(document).scrollTop() / 500;
    if (o > 1.000) {
        o = 1;
    }
    console.log(o);
    var e = $('nav.sad-nav-transparency');
    var currentColor = e.css('background-color');
    var rgb = currentColor.replace(/^(rgb|rgba)\(/, '').replace(/\)$/, '').replace(/\s/g, '').split(',');
    var newColor = 'rgba(' + rgb[0] + ',' + rgb[1] + ',' + rgb[2] + ',' + o + ')';
    e.attr('style', 'background-color: ' + newColor + ' !important');

    if (($(document).scrollTop() / 500) >= 0.8) {
        $('nav.sad-nav-transparency').removeClass('z-depth-0');
        $('#modal-trigger').addClass('z-depth-0');
    } else {
        $('nav.sad-nav-transparency').addClass('z-depth-0');
        $('#modal-trigger').removeClass('z-depth-0');
    }

}

updateColor();

/**
 * Shuffle initializer
 */

var Shuffle = window.Shuffle;
var element = document.querySelector('.my-shuffle-container');
Demo = new Demo(element);
var sizer = element.querySelector('.my-sizer-element');
var shuffleInstance = new Shuffle(element, {
    buffer: 0, // Useful for percentage based heights when they might not always be exactly the same (in pixels).
    columnThreshold: 0.01, // Reading the width of elements isn't precise enough and can cause columns to jump between values.
    columnWidth: 0, // A static number or function that returns a number which tells the plugin how wide the columns are (in pixels).
    delimeter: null, // If your group is not json, and is comma delimeted, you could set delimeter to ','.
    easing: 'cubic-bezier(0.4, 0.0, 0.2, 1)', // CSS easing function to use.
    filterMode: Shuffle.FilterMode.ANY, // When using an array with filter(), the element passes the test if any of its groups are in the array. With "all", the element only passes if all groups are in the array.
    group: Shuffle.ALL_ITEMS, // Initial filter group.
    gutterWidth: 0, // A static number or function that tells the plugin how wide the gutters between columns are (in pixels).
    initialSort: null, // Shuffle can be initialized with a sort object. It is the same object given to the sort method.
    isCentered: false, // Attempt to center grid items in each row.
    itemSelector: '*', // e.g. '.picture-item'.
    roundTransforms: true, // Whether to round pixel values used in translate(x, y). This usually avoids blurriness.
    sizer: null, // Element or selector string. Use an element to determine the size of columns and gutters.
    speed: 250, // Transition/animation speed (milliseconds).
    staggerAmount: 15, // Transition delay offset for each item in milliseconds.
    staggerAmountMax: 150, // Maximum stagger delay in milliseconds.
    throttle: throttle, // By default, shuffle will throttle resize events. This can be changed or removed.
    throttleTime: 300, // How often shuffle can be called on resize (in milliseconds).
    useTransforms: true, // Whether to use transforms or absolute positioning.
});

//Ktapusan ng shuffle initializer

var ACCOUNT_EXCEPTIONS = {
    PASSWORD_DOES_NOT_MATCH: 20001,
    USERNAME_DOES_NOT_EXIST: 20002,
    USERNAME_PASSWORD_EMPTY: 20003,
    USERNAME_EXISTS: 20004
}

function keasy_post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for (var key in params) {
        if (params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}

function keasy_getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    } else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}