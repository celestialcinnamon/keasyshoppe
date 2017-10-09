<?php
if (!isset($_COOKIE["accUsername"])) {
    if (isset($_POST['u'])) {
        setcookie("accUsername", $_POST["u"], time() + (86400 * 30), "/");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile</title>
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

            nav ul li.dropdown {
                display: inline;
                position: relative;
            }

            nav ul li.dropdown div.clearfix {
                position: absolute;
                top: -9999px;
                right: -225%;
                opacity: 0;
                transition: top 700ms;
            }

            nav ul li.dropdown:hover div {
                top: 65px;
                transition: top 700ms, opacity 500ms;
                opacity: 1;
            }

            nav ul li.dropdown ul li {
                display: list-item;
                list-style: none;
                margin: 0;
                padding: 0;
                width: 100%;
            }

            #cover {
                background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75))
                <?php
                if(isset($_POST["userdata"])){
                    $userdata = json_decode($_POST["userdata"]);
                    echo ", url(".$userdata["imagepath"].")";
                } else {
                    echo ", url('../../../images/bg.jpg');";
                }
                ?>

                filter: grayscale(100%) brightness(50%) saturate(0%);

            }

            .quote {
                margin-top: 250px;
            }

            .waves-effect.waves-blue .waves-ripple {

                background-color: rgba(66, 133, 244, 0.65);
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
                            <img style="width:35%; display:block;" src="../../../images/keasy_logo_white.png">

                        </div>
                    </a>
                    <a href="#" class="brand-logo hide-on-large-only hide-on-small-only">
                        <!--Medium devices-->
                        <div class="center">
                            <img class="img-responsive" width="45%" src="../../../images/keasy_logo_white.png">

                        </div>
                    </a>

                    <a href="#" class="brand-logo hide-on-med-and-up">
                        <!--Small devices-->
                        <div class="center">
                            <img class="img-responsive" width="60%" src="../../../images/keasy_logo_white.png">

                        </div>
                    </a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul class="right hide-on-med-and-down z-depth-0">
                        <li class="active">
                            <a href="#" class="waves-effect waves-light">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="waves-effect waves-light"><i class="material-icons bt right">arrow_drop_down</i>Categories</a>
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
                            <a href="../../../pages/u/shop-now" class="waves-effect waves-light">Shop Now</a>
                        </li>

                        <li class="hide">
                            <a href="#signupModal" class="modal-trigger waves-effect waves-light">Log in</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-light" id="notification_button"><i class="material-icons hide">notifications</i>
                                <div class="chip light-blue white-text hide">4</div>
                                <img class="white circle" width="25" src=
                                <?
                                    if(isset($_POST["userdata"])){
                                            $userdata = json_decode($_POST["userdata"]);
                                            echo '"'.$userdata["dpPath"].'"';
                                        } else {
                                            echo '"http://localhost/keasyshoppe/images/user-offline-symbolic.svg"';
                                        }
                                ?>
                                >
                            </a>
                            <div class="card black-text" style="position: absolute; right: 10px; border-radius: 5px; display:none;" id="notification_dropdown">
                                <div class="card-content" style="border-radius: 5px 5px 0px 0px; height: 150px; background-image: url('../../../images/bg.jpg'); no-repeat; background-size: cover; border: none;">
                                    <div class="center">
                                        <img class="circle" src="../../../images/test_dp.jpg" style="width: 50px; margin: 0 !important; ">
                                        <ul>
                                            <li>New User</li>
                                            <li>
                                                <button class="btn-flat light-blue-text waves-effect sad-waves-light-blue">Log out</button>
                                            </li>   
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-tabs">
                                    <ul class="tabs tabs-transparent sad-crimson ">
                                        <li class="tab">
                                            <a href="#notification_panel"><i class="mdi mdi-account-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-content">
                                    <div id="account_panel">

                                    </div>
                                    <div id="notification_panel">
                                        <p class="hide">You have no notifications.</p>
                                        <ul class="collection" style="margin:0;">
                                            <li class="collection-item avatar dismissable">
                                                <img src="../../../images/test_dp.jpg" class="circle" width="25">
                                                <span class="title">Yuna K. joined Keasyshoppe</span>
                                                <p>a few minutes ago</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="message_panel">

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-large waves-effect waves-light light-blue" style="background-color: crimson !important;" id="modal-trigger"
                                href="#modal1"><i class="material-icons">shopping_cart</i>
                                <div class="chip">4</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="parallax-container" style="margin-top: -70px">
            <div class="parallax" id="cover">

            </div>
            <div class="row" style="margin-top:70px;">
                <div class="col m6 s12">
                    <div class="card transparent white-text z-depth-0">
                        <div class="card-content">
                            <div class="left" style="margin-left: 100px;">
                                <div class="center">
                                    <img src=<?
                                        if(isset($_POST["userdata"])){
                                            $userdata = json_decode($_POST["userdata"]);
                                            echo '"'.$userdata["dpPath"].'"';
                                        } else {
                                            echo '"http://localhost/keasyshoppe/images/user-offline-symbolic.svg" style="padding: 10px;"';
                                        }
                                    ?>
                                     class="circle responsive-img black"  width="100">
                                    <p id="edit-p" class="flow-text sad-roboto-medium">
                                    <?
                                        if(isset($_POST["userdata"])){
                                            echo $userdata["fullName"];
                                            if($userdata["accountType"]=="ADMIN"){
                                                echo '<i class="mdi mdi-coffee yellow-text text-darken-3"></i>';
                                            }
                                        } else {
                                            echo "New User";
                                        }
                                    ?>
                                    </p>
                                    <button class="btn-flat waves-effect waves-blue blue-text"><i class="left mdi mdi-pencil"></i> edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m6 s12">
                    <div class="card transparent white-text z-depth-0">
                        <div class="card-content quote">
                            <div class="right">
                                <p class="flow-text right-align" style="font-size: 18pt !important">
                                    <?
                                    if(isset($_POST["userdata"])){
                                        if(isset($userdata["motto"])){
                                            echo $userdata["motto"];
                                        } else {
                                            echo "The power to enact, persuade, and be is within you and only you alone. What matters is not how strong that power is, but what you do with it.";
                                        }
                                    } else {
                                        echo "The power to enact, persuade, and be is within you and only you alone. What matters is not how strong that power is, but what you do with it.";
                                    }
                                    ?>
                                </p>
                                <a class="right btn-flat waves-effect blue-text" target="_blank" href="https://www.facebook.com/gregantares"><i class="mdi mdi-facebook-box mdi-36px left"></i> FOLLOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--div class="card-content ">
            <div class="row profile-overlay">
                <div class="col m6">

                    <div class="card-images resizer-parent ">
                        <div class="resizer-profile">
                            <img width="100" height="100" src="./images/test_dp.jpg" alt="Account Profile">

                        </div>
                    </div>

                    <p class="center sad-roboto-bold" style="font-size:18px;margin:0px !important"> Caysey Mars Carriedo</p>
                    <p class="white-text center" style="margin-top:0px !important">Customer</p>
                    <p class=" white-text center" style="padding-bottom:25px">Attitude is a little thing that makes a big difference.</p>
                </div>
                <div class="col m6">
                    <p class="center" style="color:crimson;margin-top:0px !important"><i class="mdi mdi-phone mdi-36px "></i>321-3461</p>
                    <p class="center" style="color:crimson;margin-top:0px !important"><i class="mdi mdi-location mdi-36px "></i>321-3461</p>
                    <p class="center" style="color:crimson;margin-top:0px !important"><i class="mdi mdi-facebook mdi-36px "></i>Eme@facebook.com</p>

                </div>
            </div>
        </div>

        </div> -->

        <h4 class="right">Past Transaction</h4>
        <div class="col m8">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th colspan="2">Price</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>

                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>

                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>

                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="page-footer grey darken-4">
            <div class="container">
                <div class="row">
                    <div class="col l4 s12">
                        <h4 class="grey-text sad-roboto-light">
                            <span style="background:rgba(255, 255, 255, .1); border-radius:50%; padding: .5px 10px" class="grey-text center-align">K</span>easyhoppe</h4>
                        <p class="grey-text"><i class="mdi mdi-email mdi-18px "></i> Caseymars@keasyshoppe.com</p>
                        <p class="grey-text"><i class="mdi mdi-phone mdi-18px "></i> 321-3461</p>
                    </div>

                    <div class="col l4 s12">
                        <h4 class="white-text sad-roboto-light">On this website</h4>
                        <p>
                            <a class="grey-text" href="#!">About us</a>
                        </p>
                        <a class="grey-text" href="#!">Shop now</a>

                    </div>

                    <div class="col l4 s12">
                        <h4 class="white-text sad-roboto-light">About</h4>
                        <p class="grey-text">From cellphone accessories to your pet's dinner, we've got 'em. </p>
                        <p class="grey-text">Through our long list of categories, we give you only the best and affordable items. We accept cash
                            on delivery as a mode of payment, and we deliver your items.We also accept
                            <a href="#!" class="light-blue-text text-lighten-3">resellers</a>, and they receive ₱20.00 discount per item.</p>
                    </div>

                </div>

            </div>
            <div class="footer-copyright container row">
                <div class="col s3">
                    © 2014 Copyright Text
                </div>
                <div class=" col l4 offset-l5">
                    <i class=" mdi mdi-facebook-box blue-text text-darken-2 mdi-36px "></i>
                    <i class=" mdi mdi-gmail  red-text text-darken-2 mdi-36px "></i>
                    <i class=" mdi mdi-twitter-box blue-text text-darken-2 mdi-36px "></i>

                </div>
            </div>
        </footer>

        <script src="../../../js/jquery.min.js"></script>
        <script src="../../../js/materialize.min.js"></script>
        <script src="../../../js/script.js"></script>
        <script>
            $(document).ready(() => {
                $('#notification_button').on('click', (e) => {
                    $('#notification_dropdown').slideToggle();
                });
                $('*').on('click', () => {
                    e.stopPropagation();
                    $('#notification_dropdown').slideUp();
                });
            });

        </script>
    </body>

</html>
