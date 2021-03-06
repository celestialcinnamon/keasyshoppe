<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <title>Casey's Histories &middot; Casey's Online Shop</title>

    <link rel="stylesheet" href="../../css/materialize.css">
    <link rel="stylesheet" href="../../css/style.css">

    <style>
      #filterul {
        width: 250px;
      }

      #filterli {
        display: inline-block;
        width: 88px;
      }

      img {
        max-width: 100%;
        max-height: 100%;
      }

      .resizer {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        overflow: hidden;
        margin: 10px 30%;
      }

      .resizer-parent {
        padding: 10px 0;
      }

    </style>

  </head>

  <body onload="fetchProductDetails()">

    <!-- Navbar -->
    <!-- Fix the navbar to the top of the browser -->
    <div class="navbar-fixed">
      <!-- Actual navbar -->
      <nav class="sad-crimson nav-extended">
        <div class="nav-wrapper">
          <!-- Hamburger menu for mobile -->
          <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

          <!-- Logo sa Navigation Bar -->
          <a href="dashboard.html" data-tooltip="Back to Home" class="tooltipped brand-logo">
            <img src="../../images/keasy_logo_white.png" style="width:35%" alt="">
          </a>
          <ul class="right">
            <li>
              <a href="#!" class="waves-effect waves-block"><i class="material-icons">refresh</i></a>
            </li>
          </ul>
          <form id="search" class="container hide-on-med-and-down">
            <div class="input-field sad-search-on-nav" style="margin-left: 65px;">
              <input class="sad-search-on-nav" style="margin: 0 !important;" placeholder="Search for something..." autocomplete="" id="search"
                type="search" required>
              <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
            </div>
          </form>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab">
              <a href="#accounts" class="waves-effect">Accounts</a>
            </li>
            <li class="tab">
              <a href="#items" class="waves-effect">Items</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

    <!-- Navigation on mobile -->
    <ul id="slide-out" class="side-nav">
      <li>
        <!-- Profile Banner -->
        <div class="user-view">

          <!-- Cover Photo -->
          <div class="background">
            <img src="../../images/bg.jpg">
          </div>

          <!-- Profile Picture -->
          <a href="#!user"><img class="circle" src="../../images/test_dp.jpg"></a>

          <!-- User Full name -->
          <a href="#!name">
            <span class="white-text name">Caseymars Carriedo</span>
          </a>

          <!-- User type -->
          <a href="#!email">
            <span class="white-text email">Administrator</span>
          </a>
        </div>
      </li>

      <!--Link to Dashboard-->
      <li>
        <a href="dashboard.html" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a>
      </li>

      <!-- Link to Messages -->
      <li>
        <a href="messages.html" class="waves-effect">
          <span id="message-count" class="new badge sad-crimson">3</span><i class="material-icons">messages</i>Messages</a>
      </li>

      <!-- Link to Products -->
      <li>
        <a href="products.html" class="waves-effect"><i class="material-icons">shop</i>Products</a>
      </li>

      <!-- Dropdown to Customers -->
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect">Customers<i class="material-icons">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li>
                  <a href="transactions.html" class="waves-effect">Transactions</a>
                </li>
                <li>
                  <a href="meetups.html" class="waves-effect">
                    <span id="meetup-count" class="sad-crimson new badge" data-badge-caption="meetups today">4</span>Meetups</a>
                </li>
                <li>
                  <a href="orders.html" class="waves-effect">
                    <span id="meetup-count" class="sad-crimson new badge" data-badge-caption="new orders">4</span>Orders</a>
                </li>
                <li>
                  <a href="complaints.html" class="waves-effect">Complaints</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <div class="divider"></div>
      </li>
      <li>
        <a class="subheader">FOR YOUR CUSTOMERS</a>
      </li>
      <li>
        <a class="waves-effect" href="../../users/products.html"><i class="material-icons">store</i>See the store</a>
      </li>
      <li>
        <a class="waves-effect" href="settings.html"><i class="material-icons">settings</i>Customize the site</a>
      </li>

    </ul>
    <main style="margin-top:65px;">
      <div class="row">

        <!--Top row-->
        <div class="row">
          <div class="col s12 m12 l4">
            <h3 class="sad-roboto-thin">Transaction Histories</h3>
          </div>

        </div>

        <!--/Top row-->

        <div class="row" id="accounts">

          <div class="row col hide-on-med-and-down l3">
            <div class="col hide-on-med-and-down l12">
              <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                <li>
                  <div class="collapsible-header active"><i class="material-icons">short_text</i>Account Name</div>
                  <div class="collapsible-body">
                    <!--Filters-->
                    <ul id="filterul">
                      <li id="filterli">
                        <input type="checkbox" id="A" />
                        <label for="A">A</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="N" />
                        <label for="N">N</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="B" />
                        <label for="B">B</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="O" />
                        <label for="O">O</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="C" />
                        <label for="C">C</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="P" />
                        <label for="P">P</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="D" />
                        <label for="D">D</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="Q" />
                        <label for="Q">Q</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="E" />
                        <label for="E">E</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="R" />
                        <label for="R">R</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="F" />
                        <label for="F">F</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="S" />
                        <label for="S">S</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="G" />
                        <label for="G">G</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="T" />
                        <label for="T">T</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="H" />
                        <label for="H">H</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="U" />
                        <label for="U">U</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="I" />
                        <label for="I">I</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="V" />
                        <label for="V">V</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="J" />
                        <label for="J">J</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="W" />
                        <label for="W">W</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="K" />
                        <label for="K">K</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="X" />
                        <label for="X">X</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="L" />
                        <label for="L">L</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="Y" />
                        <label for="Y">Y</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="M" />
                        <label for="M">M</label>
                      </li>
                      <li id="filterli">
                        <input type="checkbox" id="Z" />
                        <label for="Z">Z</label>
                      </li>

                    </ul>
                    <!--/Filters-->
                  </div>
                </li>
              </ul>
            </div>

          </div>

          <div id="accountsgrid" class="hide col s12 m12 l9">
            <div class="row">
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
              <div class="col s12 m12 l3">
                <div class="card hoverable">
                  <div class="card-image resizer-parent">
                    <div class="resizer">
                      <a href="#YunaNc" data-accno="1" id="AccProf" class="modal-trigger">
                        <img src="../../images/test_dp.jpg" alt="Account Profile">
                      </a>
                    </div>
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><i class="material-icons right responsive-img tooltipped" data-tooltip="Click or tap on the image for details"
                        data-position="top" data-delay="50">more_vert</i>YunaNc</span>
                  </div>
                  <div class="card-reveal">

                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span> Yuna Nocturnal
                    <p><b>Age :</b> 26 yrs old</p>
                    <p><b>Gender :</b> Female</p>
                    <p><b>Address :</b> Westnyak N.Y</p>

                  </div>
                </div>
              </div>
            </div>

            <!--Pagination-->
            <div class="row">
              <div class="center">
                <ul class="pagination">
                  <li class="disabled">
                    <a href="#!"><i class="material-icons">chevron_left</i></a>
                  </li>
                  <li class="active">
                    <a href="#!">1</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">2</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">3</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">4</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">5</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">6</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">7</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">8</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!"><i class="material-icons">chevron_right</i></a>
                  </li>
                </ul>
              </div>
            </div>
            <!--/Pagination-->
          </div>

          <div id="accountsHint" class="sad-roboto-regular grey-text center col s12 m12 l9">
            There's nothing to see here (yet)
          </div>
        </div>

      </div>
      <!-- </div>   -->
      <!--<br>-->
      <!-- <div style="display:none;"> -->
      <div id="items" class="row">
        <div class="row col hide-on-med-and-down l3">
          <div>
            <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
              <li>
                <div class="collapsible-header active"><i class="material-icons">attach_money</i>Price Range</div>
                <div class="collapsible-body">
                  <span>

                  </span>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">short_text</i>Item Name</div>
                <div class="collapsible-body">
                  <ul id="filterul">
                    <li id="filterli">
                      <input type="checkbox" id="A" />
                      <label for="A">A</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="N" />
                      <label for="N">N</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="B" />
                      <label for="B">B</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="O" />
                      <label for="O">O</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="C" />
                      <label for="C">C</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="P" />
                      <label for="P">P</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="D" />
                      <label for="D">D</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="Q" />
                      <label for="Q">Q</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="E" />
                      <label for="E">E</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="R" />
                      <label for="R">R</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="F" />
                      <label for="F">F</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="S" />
                      <label for="S">S</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="G" />
                      <label for="G">G</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="T" />
                      <label for="T">T</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="H" />
                      <label for="H">H</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="U" />
                      <label for="U">U</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="I" />
                      <label for="I">I</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="V" />
                      <label for="V">V</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="J" />
                      <label for="J">J</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="W" />
                      <label for="W">W</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="K" />
                      <label for="K">K</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="X" />
                      <label for="X">X</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="L" />
                      <label for="L">L</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="Y" />
                      <label for="Y">Y</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="M" />
                      <label for="M">M</label>
                    </li>
                    <li id="filterli">
                      <input type="checkbox" id="Z" />
                      <label for="Z">Z</label>
                    </li>

                  </ul>
                </div>
              </li>
              <li>
                <div class="collapsible-header"><i class="material-icons">library_books</i>Categories</div>
                <div class="collapsible-body">
                  <ul>
                    <li>
                      <input type="checkbox" id="Baby & Toddler" />
                      <label for="Baby & Toddler">Baby & Toddler</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Devices" />
                      <label for="Devices">Devices</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Fashion" />
                      <label for="Fashion">Fashion</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Food & Drinks" />
                      <label for="Food & Drinks">Food & Drinks</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Health & Beauty" />
                      <label for="Health & Beauty">Health & Beauty</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Home & Living" />
                      <label for="Home & Living">Home & Living</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Pets" />
                      <label for="Pets">Pets</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Sports & Outdoors" />
                      <label for="Sports & Outdoors">Sports & Outdoors</label>
                    </li>
                    <li>
                      <input type="checkbox" id="Toys & Games" />
                      <label for="Toys & Games">Toys & Games</label>
                    </li>

                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="col s2 m3 l9 container">
          <div class="row">
            <table style="overflow-x: visible;" class="bordered striped highlight">
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Date Sold</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>09923</td>
                  <td>Kipling Bag (Red)</td>
                  <td>22 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>
                <tr>
                  <td>09924</td>
                  <td>Kipling Bag (Red)</td>
                  <td>43 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>
                <tr>
                  <td>09925</td>
                  <td>Kipling Bag (Red)</td>
                  <td>35 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>
                <tr>
                  <td>09926</td>
                  <td>Kipling Bag (Red)</td>
                  <td>126 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>
                <tr>
                  <td>09927</td>
                  <td>Kipling Bag (Red)</td>
                  <td>2 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>
                <tr>
                  <td>09928</td>
                  <td>Kipling Bag (Red)</td>
                  <td>2 pcs.</td>
                  <td>P 2,800</td>
                  <td>Aug. 07, 2017</td>
                </tr>

              </tbody>
            </table>
            <div class="col s12 center">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#!"><i class="material-icons">chevron_left</i></a>
                </li>
                <li class="active">
                  <a href="#!">1</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">2</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">3</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">4</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">5</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">6</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">7</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">8</a>
                </li>
                <li class="waves-effect">
                  <a href="#!"><i class="material-icons">chevron_right</i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </main>

    <?php include '../../includes/views/footer.html' ?>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/actions.js"></script>
  </body>

</html>
