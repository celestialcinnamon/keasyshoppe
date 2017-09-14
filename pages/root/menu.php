                <!-- Navbar -->
        <!-- Fix the navbar to the top of the browser -->
        <div class="navbar-fixed">
            <!-- Actual navbar -->
            <nav class="white">
                <div class="nav-wrapper">
                    <!-- Hamburger menu for mobile -->
                    <a href="#" data-activates="slide-out" class="grey-text text-darken-3 button-collapse show-on-large"><i class="material-icons">menu</i></a>

                    <!-- Logo sa Navigation Bar -->
                    <a href="dashboard.html" data-tooltip="Back to Home" class="sad-roboto-light tooltipped text-darken-3 grey-text brand-logo"><i class="material-icons">shopping_cart</i> Casey's Online Shop</a>
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
                    <a href="#!name"><span class="white-text name">Caseymars Carriedo</span></a>

                    <!-- User type -->
                    <a href="#!email"><span class="white-text email">Administrator</span></a>
                </div>
            </li>

            <!--Link to Dashboard-->
            <li><a href="dashboard.html" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>

            <!-- Link to Messages -->
            <li><a href="messages.html" class="waves-effect"><span id="message-count" class="new badge sad-crimson">3</span><i class="material-icons">messages</i>Messages</a></li>

            <!-- Link to Products -->
            <li><a href="products.html" class="waves-effect"><i class="material-icons">shop</i>Products</a></li>

            <!-- Dropdown to Customers -->
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header waves-effect">Customers<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="transactions.html" class="waves-effect">Transactions</a></li>
                                <li><a href="meetups.html" class="waves-effect"><span id="meetup-count" class="sad-crimson new badge" data-badge-caption="meetups today">4</span>Meetups</a></li>
                                <li><a href="orders.html" class="waves-effect"><span id="meetup-count" class="sad-crimson new badge" data-badge-caption="new orders">4</span>Orders</a></li>
                                <li><a href="complaints.html" class="waves-effect">Complaints</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <div class="divider"></div>
            <li><a class="subheader">FOR YOUR CUSTOMERS</a></li>
            <li><a class="waves-effect" href="../users/products.html"><i class="material-icons">store</i>See the store</a></li>
            <li><a class="waves-effect" href="settings.html"><i class="material-icons">settings</i>Customize the site</a></li>

        </ul>
        <!-- /Navbar -->