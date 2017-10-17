<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SADism</title>
        <link rel="stylesheet" href="../../../css/materialdesignicons.css">
        <link rel="stylesheet" href="../../../css/materialize.css">
        <link rel="stylesheet" href="../../../css/style.css">
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
            /* nav ul {
            margin: 0;
            padding: 5px;
        } */

            nav ul li {
                display: inline;
                position: relative;
            }

            nav ul li div.clearfix {
                position: absolute;
                top: -9999px;
                right: -225%;
                opacity: 0;
                transition: top 700ms, ;
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
            <nav>
                <div class="nav-wrapper sad-crimson">
                    <a href="#!" class="sad-back-button hide"><i class="material-icons">arrow_back</i></a>
                    <a href="#" class="brand-logo"><img src="" alt=""></a>
                    <ul class="right z-depth-0">
                        <li>
                            <a href="../" class="waves-effect waves-light">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="waves-effect waves-light "><i class="material-icons bt right">arrow_drop_down</i>Categories</a>
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
                        <li class="active">
                            <a href="#" class="waves-effect waves-light">Shop Now</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light">Log in</a>
                        </li>
                        <a class="btn btn-large waves-effect waves-light light-blue" style="background-color: crimson !important;" id="modal-trigger"
                            href="#modal1"><i class="material-icons">shopping_cart</i>
                            <div class="chip">4</div>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>

        <main>
            <div class="row">
                <h3 class="col s12 m12 l4 roboto-light">KeasyShoppe</h3>
                <div class="col hide-on-med-and-down l3">
                    <form>
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input type="search">
                            <label for="">Search for an item...</label>
                        </div>
                    </form>
                </div>
                <div class="col hide-on-med-and-down l3 offset-l2">
                    <div class="input-field">
                        <i class="material-icons prefix">sort</i>
                        <select name="" id="">
                                <option value="" disabled selected>Sort items by...</option>
                                <option value="1">Name</option>
                                <option value="2">Ratings</option>
                                <option value="3">Price</option>
                                <option value="4">Date</option>
                                <option value="5">Number of buyers</option>
                            </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="row col hide-on-med-and-down l3">
                    <div class="col hide-on-med-and-down l12 row">
                        <div class="row">
                            <a href="#!" class="waves-effect waves-light btn-large btn col l12 light-blue">Check Out</a>
                        </div>
                        <div class="row">
                            <a href="#shoppingCart_BottomSheet" class="modal-trigger waves-effect waves-light-blue col l12 btn-flat light-blue-text center-align">Open Shopping Cart</a>
                        </div>
                    </div>
                    <div class="col hide-on-med-and-down l12">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                                <div class="collapsible-body">
                                    <span>Lorem ipsum dolor sit amet.</span>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                                <div class="collapsible-body">
                                    <span>Lorem ipsum dolor sit amet.</span>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                                <div class="collapsible-body">
                                    <span>Lorem ipsum dolor sit amet.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col s12 m12 l9 sad-cards-container">
                    <div class="card hoverable">
                        <div class="card-image">
                            <a href="#details" data-prodID="0" class="modal-trigger">
                                <img src="../../../images/products/01.jpg" class="responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                                    data-position="top" data-delay="50">
                            </a>
                            <a class="btn-floating halfway-fab waves-effect waves-light sad-crimson"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title">Kipling Bag</span>
                            <p>Elegant and stylish, comes in four colors.</p>
                            <div class="roboto-medium">
                                PRICE:
                                <span class="light-blue-text">P3,000.00</span>
                                <s class="grey-text text-lighten-1">
                                    P3,500.00
                                </s>
                            </div>
                            <div class="product-chips">
                                <a href="#!" class="chip waves-effect">Clothing</a>
                                <a href="#!" class="chip waves-effect">Accessories</a>
                                <a href="#!" class="chip waves-effect">...</a>
                            </div>
                        </div>
                        <div class="card-action valign-wrapper">
                            <span><i class="material-icons yellow-text">star</i>4.6/5</span>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <?php include '../../../includes/views/footer.html' ?>

        <!-- Modal Structure -->
        <dialog id="details" class="modal sad-product-details">
            <div class="row sad-strip">
                <div class="col s12 m12 l8 center-align sad-product-image">
                    <div class="sad-product-image-bg">
                        <img src="../../../images/products/01.jpg" class="" alt="">
                    </div>
                </div>
                <div class="col s12 m12 l4 text-flow sad-product-details-section card">
                    <div class="section">
                        <h4>Kipling Bag</h4>

                    </div>
                    <div class="row">
                        <div>
                            <ul id="tabs-swipe-demo" data-swipeable="true" class="tabs">
                                <li class="tab">
                                    <a href="#test-swipe-1">DETAILS</a>
                                </li>
                                <li class="tab">
                                    <a class="active" href="#test-swipe-2">REVIEWS</a>
                                </li>

                            </ul>
                            <div id="test-swipe-1" class="section">
                                <p>Elegant and stylish, comes in four colors. Elegant and stylish, comes in four colors. Elegant
                                    and stylish, comes in four colors. Elegant and stylish, comes in four colors. Elegant
                                    and stylish, comes in four colors.
                                </p>
                                <span class="roboto-medium">PRICE:
                                    <span class="light-blue-text">P1,599.00</span>
                                    <s class="grey-text">P3,999.00</s>
                                </span>
                                <div class="sad-product-chip waves-effects">
                                    <a href="#!" class="chip waves-effect">Clothing</a>
                                    <a href="#!" class="chip waves-effect">Accessories</a>
                                    <a href="#!" class="chip waves-effect">Bags and Shoes</a>
                                </div>
                                <span>
                                    <i class="material-icons yellow-text">star</i>
                                    <span class="text-flow">4.5 out of 5</span>
                                </span>
                            </div>
                            <div id="test-swipe-2">
                                <div class="divider"></div>
                                <div class="section">
                                    <div class="card section">
                                        <div class="card-content center-align">
                                            <img src="../../../images/test_dp.jpg" class="responsive-img circle sad-profile-dp" alt="">
                                            <h5>Yuna K.</h5>
                                            <form action="" class="container">
                                                <p class="range-field">
                                                    <input placeholder="Rate this item" id="rating" type="range" min="1" max="5">
                                                </p>
                                                <label for="rating">Rate this item</label>
                                            </form>
                                            <div class="input-field">
                                                <textarea name="item-review" class="materialize-textarea" data-length="120" id="" cols="30" rows="10"></textarea>
                                                <label for="item-review">Give this item a review...</label>
                                            </div>
                                            <button class="waves-effect waves-light btn blue">Submit review</button>
                                        </div>
                                    </div>
                                    <section class="sad-comments-section section">
                                        <div class="sad-comment container">
                                            <div class="row halign-wrapper">
                                                <a href="#!" class="chip waves-effect"><img src="../../../images/test_dp.jpg" class="responsive_img circle" alt="">Yuna
                                                    K.
                                                </a>
                                            </div>
                                            <span><i class="material-icons yellow-text">star</i> 4 out of 5</span>
                                            <div class="sad-comment-content">
                                                <p>
                                                    This product is really good. I bought the red one, and I really liked it. It has so many compartments and it is really a
                                                    brilliant bag. Now with the recent discount, I am buying four more.
                                                </p>
                                            </div>
                                            <div class="sad-comment-footer">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
        </dialog>
        </div>

        </div>

        <ul id="sad-comment-options" class="dropdown-content">
            <li>
                <a href="#!">Report</a>
            </li>
        </ul>

        <script src="../../../js/jquery.min.js"></script>
        <script src="../../../js/materialize.js"></script>
        <script src="../../../js/script.js"></script>
        <script>
            $(document).ready(()=>{
                $.ajax({
                    url: "products.php",
                    method: "POST",
                    dataType: "JSON",
                    success: (data)=>{
                        alert(JSON.stringify(data));
                    },
                    error: (data)=>{
                        Materialize.toast(JSON.stringify(data));
                    }
                });
            });
        </script>
    </body>

</html>
