<!DOCTYPE html>
<?php
/*
if (!isset($_COOKIE["accUsername"])) {
    if (isset($_POST['u'])) {
        setcookie("accUsername", $_POST["u"], time() + (86400 * 30), "/");
    }
}
*/
if(!isset($_COOKIE["userdata"])){
    if(isset($_POST["userdata"])){
        setcookie("userdata", $_POST["userdata"], time()+(86400 * 30), "/");
#        print_r($_COOKIE["userdata"]);
    }
}
?>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <title>KeasyShoppe &middot; Online Shopping Center</title>
        <link rel="stylesheet" href="../../css/materialdesignicons.css">
        <link rel="stylesheet" href="../../css/materialize.css">
        <link rel="stylesheet" href="../../css/style.css">
        <style>
            #top-level-group {
                width: 600%;
                background: white;
                display: table-row;
                column-count: 3;
            }

            #top-level-group ul {
                float: left;
                display: table-cell;
            }

            .clearfix:before,
            .clearfix:after {
                content: '\0020';
                display: block;
                overflow: hidden;
                visibility: hidden;
                width: 0;
                height: 0;
            }

            .clearfix:after {
                clear: both;
            }

            .clearfix {
                zoom: 1;
            }

            nav ul li {
                display: inline;
                position: relative;
            }

            nav ul li div.clearfix {
                position: absolute;
                top: -9999px;
                right: -225%;
                opacity: 0;
                transition: top 700ms;
            }

            nav ul li:hover div {
                /* left: 0; */
                top: 65px;
                transition: top 700ms, opacity 500ms;
                opacity: 1;
            }

            nav ul li ul li {
                display: list-item;
                list-style: none;
                margin: 0;
                padding: 0;
                width: 100%;
            }

        </style>
    </head>

    <body>
        <div class="navbar-fixed">
            <nav class="sad-nav-transparency sad-crimson">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo hide-on-med-and-down">
                        <!--Large devices-->
                        <div class="center">
                            <img style="width:35%; display:block;" src="../../images/keasy_logo_white.png">

                        </div>
                    </a>
                    <a href="#" class="brand-logo hide-on-large-only hide-on-small-only">
                        <!--Medium devices-->
                        <div class="center">
                            <img class="img-responsive" width="45%" src="../../images/keasy_logo_white.png">

                        </div>
                    </a>

                    <a href="#" class="brand-logo hide-on-med-and-up">
                        <!--Small devices-->
                        <div class="center">
                            <img class="img-responsive" width="60%" src="../../images/keasy_logo_white.png">

                        </div>
                    </a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down z-depth-0">
                        <li class="active">
                            <a href="#" class="waves-effect waves-light">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#!" class="waves-effect waves-light"><i class="material-icons bt right">arrow_drop_down</i>Categories</a>
                            <div id="top-level-group" class="clearfix z-depth-1">

                                <ul>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">child_friendly</i>Baby & Toddler</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">devices</i>Devices</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">spa</i>Fashion</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">local_dining</i>Food & Drinks</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">fitness_center</i>Health & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">hotel</i>Home & Living</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">pets</i>Pets</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">beach_access</i>Sports & Outdoors</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="materialize-red-text"><i class="material-icons left">toys</i>Toys & Games</a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                        <li>
                            <a href="./shop-now/" class="waves-effect waves-light">Shop Now</a>
                        </li>

                        <li>
                            <a href="#signupModal" class="modal-trigger waves-effect waves-light">Log in</a>
                        </li>
                        <a class="btn btn-large waves-effect waves-light light-blue" style="background-color: crimson !important;" id="modal-trigger"
                            href="#modal1"><i class="material-icons">shopping_cart</i>
                            <div class="chip">4</div>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
        <ul id="mobile-demo" class="side-nav">

        </ul>

        <main style="margin-top:-65px;">

            <div class="parallax-container sad-image-filter-contrast" style="padding-top:65px;">
                <div class="parallax">
                    <img src="../../images/Shopping.jpg" class="" alt="">
                </div>
                <div class="section white-text">
                    <div class="row container center">
                        <img src="../../images/keasy_logo_white.png" class="responsive-img" alt="">
                        <p class="flow-text">Just the best products at the most affordable price. <em>Para ka lang namalengke sa mall.</em> </p>
                        <a href="#signupModal" class="waves-effect waves-light btn-ghost-large btn-ghost ghost-invert modal-trigger">Sign Up for an account</a>
                        <a href="../../pages/u/products.html" class="waves-effect waves-light btn-ghost-large btn-ghost ghost-invert"><strong>See our store</strong></a>
                    </div>
                </div>
            </div>

            <div class="row container section">
                <div class="col s12 m6 l4 center">
                    <i class="mdi mdi-48px mdi-flash"></i>
                    <p class="flow-text">Fast</p>
                    <p>
                        Shopping with us is fast. You set the date and time when you want us to deliver, and we always get there, on time.
                    </p>
                </div>
                <div class="col s12 m6 l4 center">
                    <i class="mdi mdi-48px mdi-wrench"></i>
                    <p class="flow-text">Customizable</p>
                    <p>
                        Most of the products we offer come in all shapes and sizes. Select from various colors and we'll make sure that your item
                        never gets out of style.
                    </p>
                </div>
                <div class="col s12 m12 l4 center">
                    <i class="mdi mdi-48px mdi-diamond"></i>
                    <p class="flow-text">Affordable</p>
                    <p>
                        You'll never look at cheap products like you did before ever again. Shopping with us is so affordable, you'll think it's
                        sorcery! (No, it's not, just in case you really thought it was.)
                    </p>
                </div>

            </div>
            <div class="divider"></div>
            <div class="row section">
                <div class="col s12">
                    <h5>This month's features</h5>
                    <p class="flow-text">For this month, we selected items we think you'll love.</p>

                </div>
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text">₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text"> ₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text"> ₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text"> ₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row section">
                <div class="col s12">
                    <h5>August's Finest</h5>
                    <p class="flow-text">August's finest item is a stylish bag that many people liked. Give it up for the Kiplings!</p>
                </div>
                <div class="col s12">

                    <div class="card horizontal">

                        <div class="card-image">
                            <img src="../../images/clothes.jpg">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">

                                <span><i class="material-icons yellow-text">star star star star_half star_border</i></span>
                                <p class="sad-roboto" style="font-size:25px;padding-bottom:15px">₱ 4 9 9 . 5 0</p>
                                <p class="sad-roboto" style="padding-bottom:20px;font-size:20px">K I P L I N G&nbsp;&nbsp;&nbsp; B A G</p>
                                <p class="sad-roboto" style="padding-bottom:20px">DESCRIPTION</p>
                                <p class="sad-roboto" style="padding-bottom:20px">Description is a rhetorical strategy using sensory details to portray a person, place, or
                                    thing. Description is used in many different types of nonfiction, including essays, biographies,
                                    memoirs, nature writing, profiles, sports writing, and travel writing.</p>
                                <a href="#!" class="chip waves-effect">CLOTHES</a>
                                <a href="#!" class="chip waves-effect">ACCESSORIES</a>
                                <br>
                                <div style="padding-top:20px">
                                    <a href="#!" class="waves-effect waves-light btn-large red modal-trigger" style="background-color:crimson !important; filter: brightness(1.25)"><strong>BUY</strong></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row section">
                <div class="col s12 right-align">
                    <h5>The Augustine Editorial Pick</h5>
                    <p class="flow-text">This month's Editor's Pick are these cutesy little trolley bags!</p>
                </div>

                <div class="col s12">

                    <div class="card horizontal">

                        <div class="card-stacked">
                            <div class="card-content">

                                <span><i class="material-icons yellow-text">star star star star_half star_border</i></span>
                                <p class="sad-roboto" style="font-size:25px;padding-bottom:15px">₱ 4 9 9 . 5 0</p>
                                <p class="sad-roboto" style="padding-bottom:20px;font-size:20px">K I P L I N G&nbsp;&nbsp;&nbsp; B A G</p>
                                <p class="sad-roboto" style="padding-bottom:20px">DESCRIPTION</p>
                                <p class="sad-roboto" style="padding-bottom:20px">Description is a rhetorical strategy using sensory details to portray a person, place, or
                                    thing. Description is used in many different types of nonfiction, including essays, biographies,
                                    memoirs, nature writing, profiles, sports writing, and travel writing.</p>
                                <a href="#!" class="chip waves-effect">CLOTHES</a>
                                <a href="#!" class="chip waves-effect">ACCESSORIES</a>
                                <br>
                                <div style="padding-top:20px">
                                    <a href="#!" class="waves-effect waves-light btn-large red modal-trigger" style="background-color:crimson !important; filter: brightness(1.25)"><strong>BUY</strong></a>
                                </div>
                            </div>

                        </div>
                        <div class="card-image">
                            <img src="../../images/clothes.jpg">
                        </div>
                    </div>
                </div>

            </div>

            <div class="row section">

                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text">₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text"> ₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6">
                    <div class="card-panel sad-crimson">
                        <h2 class="sad-roboto light">S A L E</h2>
                        <h1 class="sad-roboto-black">up to 50% off</h1>

                        <p class="white-text">I am a very simple card. I am good at containing small bits of information. I am convenient because
                            I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6">
                    <div class="card-panel sad-crimson">
                        <h5 class="sad-roboto">Become a reseller and get a ₱20 discount for each item.</h5>
                        <p class="white-text">I am a very simple card. I am good at containing small bits of information. I am convenient because
                            I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
                        </p>

                        <div style="padding-top:20px">
                            <a href="#!" class="waves-effect waves-light btn-large red modal-trigger" style="background-color:crimson !important; filter: brightness(1.25)"><strong>SHOP NOW</strong></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text">₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col s12 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>

                            <span class="card-title">Kipling Bag</span>

                        </div>
                        <div class="card-content valign-wrapper">
                            <div>

                                <span><i class="material-icons tiny yellow-text">star star star star_half star_border</i></span>
                                <p class="blue-text"> ₱280</p>
                            </div>
                            <div style="padding-left:15px" class="product-chips container">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </main>
        <?php include '../../includes/views/footer.html' ?>

        <!--Bottom Sheet for Shopping Cart-->
        <dialog class="modal bottom-sheet" id="modal1">
            <div class="navbar-fixed">
                <nav class="grey darken-4">
                    <div class="nav-wrapper">
                        <ul class="left">
                            <li>
                                <span class="col s6 brand-logo"><i class="material-icons left">shopping_cart</i> Shopping Cart</span>

                            </li>
                        </ul>
                        <ul class="right">
                            <li>
                                <a href="#" class="waves-effect waves-light dropdown-button" data-hover="false" data-belowOrigin="true" data-activates="cart-dropdown"
                                    data-gutter="50" data-alignment="right"><i class="mdi mdi-dots-vertical"></i></a>
                                <ul id='cart-dropdown' class='dropdown-content'>
                                    <li>
                                        <a class="black-text waves-effect" href="#!"><i class="material-icons">delete</i>Clear all</a>
                                    </li>
                                    <li>
                                        <a class="black-text waves-effect" href="#!">two</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col s12 m3" style="position: fixed;">
                    <p class="sad-roboto-medium">TOTAL PRICE:
                        <span class="green-text">P 1,500.00</span>
                    </p>
                    <div class="input-field section">
                        <label for="" class="sad-roboto-medium">BUDGET</label>
                        <input type="number" step="10" placeholder="Enter your budget...">
                    </div>
                    <p class="sad-roboto-medium">BALANCE LEFT:
                        <span class="red-text">- P 200.00</span>
                    </p>
                    <p class="grey-text text-darken-2">You seem to have exceeded your planned budget. Sure you're not overspending?</p>
                </div>
                <div id="empty-state" class="col offset-m3 s12 m9" style="margin-bottom: 200%; padding-top: 65px;">
                    <div class="center">
                        <span class="grey-text">You have nothing on your cart yet.</span>
                    </div>
                </div>
                <div id="cart-items" class="col offset-m3 s12 m9 hide">
                    <div class="row">
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>
                        <div class="col m3 s6">
                            <div class="card">
                                <div class="card-image">
                                    <img src="../../images/products/01.jpg" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Kipling Bag</span>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </dialog>
        <!--/Bottom Sheet for Shopping Cart-->

        <!--Dialog for Sign Up-->
        <dialog id="signupModal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h2>Sign Up for an Account</h2>
                <p>Connect to your existing social media accounts and get the latest items. We won't post without your permission.
                </p>
                <div class="row">
                    <button class="col m12 waves-effect waves-light btn-large blue darken-2 sad-connect" onclick="FB.login(function(response) {  if (response.status == 'connected') {  } else { alert('Failed.') }});"><i class="glyphicon glyphicon-retweet"></i> Connect to Facebook</button>
                    <a href="#!" class="waves-effect waves-light btn-large light-blue col m12 sad-connect">Connect to Twitter</a>
                    <a href="#!" class="waves-effect waves-light btn-large red col m12 sad-connect">Connect to Google+</a>

                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="waves-effect waves-teal light-blue-text btn-flat" onclick="destroyCookies()">Log out</a>

                <a href="../../includes/views/sign_up.html" class="waves-effect waves-teal light-blue-text btn-flat">I don't have these accounts</a>
            </div>
        </dialog>
        <!--Dialog for Sign Up-->

        <script src="../../js/jquery.min.js "></script>
        <script src="../../js/materialize.min.js "></script>
        <script src="../../js/script.js"></script>
        <script src="../../js/actions.js"></script>
        <script src="../../resources/categories.js"></script>
        <script>
            function destroyCookies(){
                // document.cookie = 'accUsername=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=./;'; 
                window.location.replace('./logout.php');
            }
            function FBLogin() {
                FB.login(function (response) {
                    // Handle the response object, like in statusChangeCallback() in our demo
                    // code.
                });
            }
            var dcookie = ((keasy_getCookie('userdata')));
            var urlDecoded = decodeURIComponent(dcookie);
            var userdata = JSON.parse(urlDecoded)["userdata"];
            userdata = JSON.parse(userdata);
            if(!(dcookie==null)){
                Materialize.toast('Welcome back, '+(userdata["firstName"]||userdata["username"]), 4000);
            }
        </script>
    </body>

</html>
