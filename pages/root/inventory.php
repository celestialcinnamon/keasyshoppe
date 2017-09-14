<!-- DASHBOARD FOR ADMINISTRATORS -->

<!-- Declare request for HTML5 technologies -->
<!DOCTYPE html>
<html lang="en">
    <!-- Declare English as the page's language -->

    <head>
        <!-- Notify browser that the page is responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Declare the page's encoding as Unicode -->
        <meta charset="utf-8">

        <title>Casey's Dashboard &middot; Casey's Online Shop</title>

        <!-- Link the stylesheets -->
        <link rel="stylesheet" href="../../css/materialize.css">
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <body>
                        <!-- Navbar -->
        <!-- Fix the navbar to the top of the browser -->
        <div class="navbar-fixed">
            <!-- Actual navbar -->
            <nav class="sad-crimson">
                <div class="nav-wrapper" style="outline:1px ssolid yellow;">
                    <!-- Hamburger menu for mobile -->
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

                    <ul class="right">
                        <li>
                            <a href="#!" class="waves-effect"><i class="material-icons">refresh</i></a>
                        </li>
                        <li>
                            <a href="#!" class="waves-effect"><i class="material-icons">more_vert</i></a>
                        </li>
                    </ul>
                    <!-- Logo sa Navigation Bar -->
                    <a href="dashboard.html" data-tooltip="Back to Home" class="sad-roboto-light tooltipped brand-logo"><i class="material-icons">shopping_cart</i> Inventory</a>


                    <!-- Search bar -->
                    <form id="search" class="container hide-on-med-and-down">
                        <div class="input-field sad-search-on-nav" style="margin-left: 65px;">
                            <input class="sad-search-on-nav" style="margin: 0 !important;" placeholder="Search for something..." autocomplete="" id="search"
                                type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
                        </div>
                    </form>
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



        <main class="container">
            <div class="card">
                <div class="card-content">
                    <table class="center bordered highlight">
                        <thead>
                            <th>Product Name</th>
                            <th>Items left</th>
                            <th>Price</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                            $dbHost = 'localhost';
                            $dbuser = 'admin';
                            $dbpass = 'keasyshoppe';
                            $db = 'db_testKeasy2';
                            $connection = mysqli_connect($dbHost, $dbuser, $dbpass, "db_testKeasy2");

                                // mysqli_select_db($connection, "db_testKeasy2");

                            if (!$connection) {
                                die("Unable to connect to MySQL database server.\n" . mysqli_error($connection));
                            }

                            $sql = "SELECT * FROM tblTest";
                            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr data-prodID='{$row["prodID"]}'>" .
                                        "<td><span class='sad-row-content_name'>{$row['prodName']}</span><input value='{$row["prodName"]}' class='hide sad-row-content_name-editor' type='text'></td>" .
                                        "<td><span class='sad-row-content_qty'>{$row['prodQty']}</span><input type='text' value='{$row["prodQty"]}' class='sad-row-content_qty-editor hide'></td>" .
                                        "<td><span class='sad-row-content_price'>{$row['prodPrice']}</span><input type='text' value='{$row['prodPrice']}' class='sad-row-content_price-editor hide'></td>" .
                                        "<td style='padding: 0 !important;'><button onclick='showRowEditors({$row["prodID"]});var btnSave = this;' class='right btn-flat waves-effect sad-btn_showEditors'><i class='material-icons'>edit</i></button>" .
                                        "<button onclick='showRowEditors({$row["prodID"]});' class='right hide btn-flat waves-effect sad-btn_showEditors'><i class='material-icons'>close</i></button>" .
                                        "<button onclick='showRowEditors({$row["prodID"]});saveEdits({$row["prodID"]})' class='right btn-flat waves-effect sad-btn_saveEdits hide'><i class='material-icons'>save</i></button></td>" .
                                        '</tr>';
                                }
                            }
                            else {
                                echo "0 results";
                            }

                            mysqli_close($connection);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
                <!-- Script files -->
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/materialize.min.js"></script>
        <script src="../../js/actions.js"></script>
        <script src="../../js/script.js"></script>
        <script>
            function startAnims() {
                Materialize.showStaggeredList('#staggered-test');
                Materialize.fadeInImage('#fadeBtn');
            }
            var $toastContent = $('<span>I am toast content</span><button class="btn-flat toast-action">Undo</button>');

            function showRowEditors(prodID){
                var rowForEdit = $('tr[data-prodID="' + prodID + '"]');
                var name = rowForEdit.find('.sad-row-content_name');
                var qty = rowForEdit.find('.sad-row-content_qty');
                var price = rowForEdit.find('.sad-row-content_price');
                var nameEditor = rowForEdit.find('.sad-row-content_name-editor');
                var qtyEditor = rowForEdit.find('.sad-row-content_qty-editor');
                var priceEditor = rowForEdit.find('.sad-row-content_price-editor');
                var btnShowEditors = rowForEdit.find('.sad-btn_showEditors');
                var btnSave = rowForEdit.find('.sad-btn_saveEdits');

                name.toggleClass('hide');
                qty.toggleClass('hide');
                price.toggleClass('hide');
                // btnShowEditors.toggleClass('hide');

                nameEditor.toggleClass('hide');
                qtyEditor.toggleClass('hide');
                priceEditor.toggleClass('hide');
                console.log(btnSave);
                
                btnShowEditors.toggleClass('hide');
                console.log(btnShowEditors);

                btnSave.toggleClass('hide');
                
            }

            function saveEdits(prodID){
                var rowForEdit = $('tr[data-prodID="' + prodID + '"]');
                var nameEdit = rowForEdit.find('.sad-row-content_name-editor').val();
                var qtyEdit = rowForEdit.find('.sad-row-content_qty-editor').val();
                var priceEdit = rowForEdit.find('.sad-row-content_price-editor').val();
                rowForEdit.attr("id","currentRow")
                Materialize.toast("Saving your changes...", 4000);
                

                $.ajax({
                    url: '../../resources/update.php',
                    data: 'table=tblTest'+'&id='+$('tr#currentRow').attr('data-prodID')+'&prodName='+nameEdit+'&prodQty='+qtyEdit+
                          '&prodPrice='+priceEdit+'&refresh=true',
                          dataType: 'json',
                          success: function(data){
                              var dataJSON = JSON.parse(JSON.stringify(data));
                              var row = $('tr#currentRow');
                              row.find('.sad-row-content_name').html(dataJSON['prodName']);
                              row.find('.sad-row-content_qty').html(dataJSON['prodQty']);
                              row.find('.sad-row-content_price').html(dataJSON['prodPrice']);
                              Materialize.toast("Changes saved.", 4000);
                              
                          }
                });
            }
        
        </script>
        <!-- /Script files -->
    </body>
</html>