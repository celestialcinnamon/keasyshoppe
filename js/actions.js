/**
 * Ito ang function na matatawag sa loading ng Web page.
 * Aayusin nito iyong filters sa picture (gradient na black to transparent)
 * para puwedeng iba-iba ang picture.
 */
function fixImageFilters() {
    $('.filtered-image').addClass('.hide');
    $('.image-filter').toggleClass('.image-filter');
    $('#c').toggleClass('.image-filter');
}

$(document).ready(function () {
    fixImageFilters();
});

/**
 * Categories ng products (to be transferred sa external JSON file)
 */
var categories = [{
    "name": "Food and Drinks",
    "image": "images/products/01.jpg",
    "icon": "search"
},
{
    "name": "Lifestyle",
    "image": "images/products/vtc_4-orig.jpg",
    "icon": "people"
}
];

/**
 * Function ito na magdaragdag ng categories
 * sa homepage mula sa JSON file.
 */
function fetchCategories() {
    //I-hide ang button at ipakita ang loading spinner.
    //toggleClass() --> idadagdag niya sa classes ng button or div iyong class na .hide
    //.hide --> class sa Materialize na magha-hide ng object sa HTML para hindi makita.


    $('#categoryButton').toggleClass('hide');
    $('#categorySpinner').toggleClass('hide');
    // var categories = JSON.parse(data);

    for (var index = 0; index < categories.length; index++) {

        var categoryCardFormat = '<div class="card"><div class="card-image valign-wrapper"><img src = "' + categories[index].image + '" class = "sad-image-filter-contrast" alt = ""><span class = "card-title"><i class = "material-icons small" > ' + categories[index].icon + ' </i> ' + categories[index].name + '</span></div> </div>';
        console.log(categoryCardFormat);

        $("#category-cards").append(categoryCardFormat);
    }

    $('#categoryButton').toggleClass('hide');
    $('#categorySpinner').toggleClass('hide');
}

var productDetails;

/**
 * A Function that fetches product details and displays them to the
 * DOM of the Web page.
 */
function fetchProductDetails() {
    console.log('Calling fetchJsonByAjax("../resources/products.json")...')
    fetchJsonByAjax("../resources/products.json");
    console.log('Fetching finished');
    // alert(productDetails[0].name);
    console.log(productDetails[0].name);
}

/**
 * A function that will get the contents
 * of an external JSON file by using
 * AJAX
 */
function fetchJsonByAjax(url) {
    console.log('Creating XMLHttpRequest...');
    var AJAX_req = new XMLHttpRequest();

    console.log('Opening url...')
    AJAX_req.open("GET", url, true);

    console.log('Setting request header...')
    AJAX_req.setRequestHeader("Content-type", "application/json");

    AJAX_req.onreadystatechange = function () {
        console.log('AJAX_req.readystate = ' + AJAX_req.readyState);
        console.log('AJAX_req.status = ' + AJAX_req.status);
        if (AJAX_req.readyState == 4 && AJAX_req.status == 200) {
            productDetails = JSON.parse(AJAX_req.responseText);
            // console.log('productDetails = ' + productDetails);
        }

        console.log("Sending AJAX request...");
        AJAX_req.send();
    }
}