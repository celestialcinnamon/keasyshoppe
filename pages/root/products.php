<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products &middot; KeasyShoppe Online Shopping Center</title>
    <link rel="stylesheet" href="../../css/materialize.css">
    <link rel="stylesheet" href="../../css/materialdesignicons.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .sad-white-gradient {
            background-image: -moz-linear-gradient(top, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1), rgb(255, 255, 255));
            background-image: linear-gradient(top, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))
        }

    </style>
</head>
<body>
    <!-- Navbar -->
        <!-- Fix the navbar to the top of the browser -->
        <div class="navbar-fixed">
            <!-- Actual navbar -->
            <nav class="sad-crimson">
                <div class="nav-wrapper">
                    <!-- Hamburger menu for mobile -->
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>

                    <!-- Logo sa Navigation Bar -->
                    <span class="brand-logo">Products</span>
                    <ul class="right">
                        <li>
                            <a href="#!" class="waves-effect"><i class="material-icons">refresh</i></a>
                        </li>
                        <li>
                            <a href="#!" class="waves-effect dropdown-button" data-activates="more" data-hover="false" data-belowOrigin="true"><i class="material-icons">more_vert</i></a>
                        </li>
                    </ul>
                    <form id="search" class="container hide-on-med-and-down">
                        <div class="input-field sad-search-on-nav" style="margin-left: 65px;">
                            <input class="sad-search-on-nav" style="margin: 0 !important;" placeholder="Search for a product" autocomplete="" id="search"
                                type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons grey-text">search</i></label>
                        </div>
                    </form>
                </div>
            </nav>
            <ul id="more" class="dropdown-content black-text">
                <li>
                    <a href="#!" class="black-text waves-effect">Settings</a>
                </li>
            </ul>
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

            <!-- Link to dashboard -->
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
                <a class="waves-effect" href="../../index.html"><i class="material-icons">store</i>See the store</a>
            </li>
            <li>
                <a class="waves-effect" href="settings.html"><i class="material-icons">settings</i>Customize the site</a>
            </li>

        </ul>
        <!-- /Navbar -->

    <div class="row section" id="empty-state">
        <div class="center">
                    <h5 class="grey-text">You haven't added some products yet.</h5>
                    <button class="btn-ghost waves-effect" id="empty-state-button">Add a product</button>
                </div>
        
    </div>
    <div class="row section" id="my-shuffle-container"></div>
    <div class="row section" id="add-products">
        <div class="col s12 m5 l3" id="imageEme">
            <div class="card hoverable">
                <div class="card-image sad-image-filter-contrast waves-effect waves-block" onclick="$('#uploadMainImage').click()">
                    <img src="" id="imageMain" width="32" height="300" style="background: rgba(33, 33, 33, .5)" alt="">
                    <span class="card-title" style="z-index:1">Insert your product's primary image</span>
                </div>
                <div class="card-content">
                    <code id="imagePath"></code>
                </div>
            </div>
            <div class="col s12">
                <div id="secondaryImages" class="sad-cards-container"></div>
            </div>
            <button onclick="$('#secondaryImageGetter').click()" class="btn-flat blue-text waves-effect center col s12">
                <i class="mdi mdi-image-multiple left"></i> Add more images
            </button>
            <div id="error" class="col s12">

            </div>
        </div>
        <form method="POST" action="image-upload.php" enctype="multipart/form-data">
            <input type="file" name="uploadMainImage" id="uploadMainImage" accept="image/*" style="display:none;" onchange="openMainImage(this.files)">
            <input type="file" multiple accept="image/*" style="display:none;" id="secondaryImageGetter" onchange="openSecondaryImages(this.files)" name="uploadSecondaryImages">
            <input id="submitImages" type="submit" value="Upload Image" name="submit">
        </form>

        <form action="./insertdata.php" method="POST">
            <div class="col 12 m7 l9">
                    <div class="row">
                        <div class="col s12 l8">
                            <div class="input-field">
                                <input type="text" id="prodName" name="Name" placeholder="Enter this product's name">
                                <label for="Name">Product Name</label>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <div class="input-field">
                                <i class="mdi prefix">P</i>
                                <input id="prodPrice" name="price" type="number" placeholder="How much?">
                                <label for="">Price</label>
                            </div>
                        </div>

                        <div class="col s12">
                            <div class="input-field">
                                <textarea name="prodDesc" id="prodDesc" cols="30" class="materialize-textarea" placeholder="Give this product a nice introduction."
                                    rows="10"></textarea>
                                <label for="">Product Description</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <div class="input-field">
                                <select name="prodCategory" id="prodCategory">
                                    <option value="1">Cat</option>
                                </select>
                                <label for="">Category</label>
                            </div>
                        </div>
                        <div class="col s12 m6 l9">
                            <div class="input-field">
                                <div class="chips" id="prodKeywords"></div>
                                <!-- <label for="">Keywords</label> -->
                            </div>
                        </div>                    
                    </div>
                </div>
                    
            <div class="col s12 sad-white-gradient" style="position: fixed; bottom:0; left:0; right:0; z-index:1;">
                <div class="row">
                    <div class="col s6 offset-m8 m2 offset-l10 l1">
                        <button id="cancel-add" class="btn-flat waves-effect light-blue-text left">Cancel</button>
                    </div>
                    <div class="col s6 m2 l1">
                        <button type="submit" class="btn sad-crimson waves-effect right">Save</button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
    <div id="loader_log" style="height:500px;" class="modal transparent z-depth-0">
      <div class="modal-content">
        <div class="center">
          <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-red-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
          <p class="flow-text white-text">Adding your product...</p>
        </div>

      </div>
    </div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/materialize.min.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/shuffle.js"></script>
    <script>
        $(document).ready(()=>{
            $('#my-shuffle-container').hide();
            $('#add-products').hide();
        });
        $('#empty-state-button').click(()=>{
            console.log("I've been clicked.");
            $('#empty-state').slideToggle(300);
            $('#add-products').slideToggle(300);
        });
        $('#cancel-add').click(()=>{
            $('#empty-state').slideToggle(300);
            $('#add-products').slideToggle(300);
        });
        function saveNewProduct() {
            //TODO: format data
            //TODO: send data
            //TODO: notify user of success or failure
            $('#loader_log').modal('open');
            var prodName = $('#prodName').val();
            var prodPrice = $('#prodPrice').val();
            var prodDesc = $('#prodDesc').val();
            var prodCategory = $('#prodCategory').val();
            var prodKeywords = $('#prodKeywords').material_chip('data');
            var prodMainImage = document.getElementById('uploadMainImage').files[0].name;
            var prodSecondaryImages = "{";
            var filesSecondary =document.getElementById('secondaryImageGetter').files;
            for (var index = 0; index < filesSecondary.length; index++) {
                var element = document.getElementById().files[index].name;
                prodSecondaryImages += element;
                if (!(index == filesSecondary.length - 1)) {
                    prodSecondaryImages += ',';
                }
            }

            var keywords = '{';
            for (var index = 0; index < prodKeywords.length; index++) {
                var element = prodKeywords[index];
                keywords += element.tag;
                if (!(index == prodKeywords.length - 1)) {
                    keywords += ',';
                }
            }
            keywords += "}";
            $.ajax({
                async: false,
                url: "./insertdata.php",
                data: 
                    "?Name=" + prodName + 
                    "&prodDesc=" + prodDesc + 
                    "&prodCategory=" + prodCategory +
                    "&keywords=" + JSON.stringify(keywords) +
                    "&prodPrice=" + prodPrice +
                    "&mainImage=" + prodMainImage +
                    "&secondaryImages="+ prodSecondaryImages,
                dataType: 'json',
                method: "POST",
                success: function (data) {
                    Materialize.toast("New product added", 4000);
                    $('#submitImages').click();
                },
                error: function (error) {
                    var error = JSON.stringify(error);   
                    if(error.status == 200) Materialize.toast("Item successfully added", 4000);
                    // else $('#error').html("ERROR: "+JSON.stringify(error), 4000);
                }
            });
        }

        function FileUpload(img, file) {
            var reader = new FileReader();
            this.ctrl = createThrobber(img);
            //Ito ang mag-a-upload ng picture sa folder ng web site sa htdocs
            var xhr = new XMLHttpRequest();
            this.xhr = xhr;
            var self = this;
            //Magsa-start ng request sa localhost para ma-access iyong image-upload.php
            xhr.open("POST", "./image-upload.php");
            //Ise-set iyong file type ng mga image
            xhr.overrideMimeType('text/plain; charset=x-user-defined-binary');
            //Kapag nag-load na iyong file-reader (kapag ni-click iyong 'Save')
            reader.onload = function (evt) {
                //ise-send na iyong data sa localhost
                xhr.send(evt.target.result);
            }
            //iko-convert sa binary iyong mga image
            reader.readAsBinaryString(file);
        }

        function openSecondaryImages(files) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /^image\//;
                if (!imageType.test(file.type)) continue;
                var img = document.createElement('img');
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function (aImg) {
                    return function (e) {
                        aImg.src = e.target.result;
                    }
                })(img);
                reader.readAsDataURL(file);
                var itemId = Date.now();
                $('#secondaryImages').append(
                    '<div class="">' +
                    '<div class="card">' +
                    '<div class="card-image" id="cardImage' + itemId + '"></div>' +
                    '</div>' +
                    '</div>'
                );
                $('#cardImage' + itemId).append($(img));
            }
        }

        function openMainImage(files) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var imageType = /^image\//;
                if (!imageType.test(file.type))
                    continue;
                var img = document.getElementById('imageMain');
                console.log(img);
                img.file = file;
                var reader = new FileReader();
                reader.onload = (function (aImg) {
                    return function (e) {
                        aImg.src = e.target.result;
                    };
                })(img);
                reader.readAsDataURL(file);
                $('#imagePath').html(file.name);
                $('#imagePath').removeClass('card-title')
                console.log(window.URL.createObjectURL(file));
            }
        }
        $('.chips-placeholder').material_chip({
            // placeholder: 'Enter category',
            // secondaryPlaceholder: 'Enter category',
            // autocompleteOptions: {
            //     data: {
            //         'All': null,
            //         'Accessories': null,
            //         'Devices': null,
            //         'Clothing': null,
            //         'Food': null,
            //         'Pets': null
            //     },
            //     limit: Infinity,
            //     minLength: 1
            // }
        });
    </script>
</body>
</html>
