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
    <!-- TODO: Navbar here -->

    <div class="row section" id="empty-state">
        <button class="btn-ghost waves-effect" id="empty-state-button">Add a product</button>
    </div>
    <div class="row section" id="my-shuffle-container"></div>
    <div class="row section" id="add-products"><div class="col s12 m5 l3" id="imageEme">
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
                    <input type="file" multiple accept="image/*" style="display:none;" id="secondaryImageGetter" onchange="openSecondaryImages(this.files)">
                    <input type="submit" value="Upload Image" name="submit">
                </form>

                <div class="col 12 m7 l9">
                    <div class="row">
                        <div class="col s12 l8">
                            <div class="input-field">
                                <input type="text" id="prodName" name="prodName" placeholder="Enter this product's name">
                                <label for="">Product Name</label>
                            </div>
                        </div>
                        <div class="col s12 l4">
                            <div class="input-field">
                                <i class="mdi prefix">P</i>
                                <input id="prodPrice" name="prodPrice" type="number" placeholder="How much?">
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
                        <span class="flow-text col s6">Add custom specs to your item</span>
                        <div class="col s12 m12 l12">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Spec</th>
                                        <th>Value</th>
                                        <th>
                                            <button class="right blue-text btn-flat waves-effect" onclick="addCustomSpecs()"><i class="mdi mdi-plus"></i></button>
                                            <script>
                                                function addCustomSpecs() {
                                                    $('#customSpecs').append(
                                                        '<tr>' +
                                                        ' <td>' +
                                                        '<div class="input-field">' +
                                                        '<input type="text" placeholder="E.g. Dimension, height, weight...">' +
                                                        '</div>' +
                                                        '</td>' +
                                                        '<td colspan="2">' +
                                                        '<div class="input-field">' +
                                                        '<input type="text" placeholder="E.g. 10x4, 4ft.11in., 9kg">' +
                                                        '</div>' +
                                                        '</td>' +
                                                        '</tr>'
                                                    );
                                                }

                                                function addVariants() {
                                                    $('#variants').append(
                                                        '<tr>' +
                                                        '<td>' +
                                                        '<div class="input-field">' +
                                                        '<input type="text" placeholder="E.g. Dimension, height, weight...">' +
                                                        '</div>' +
                                                        '</td>' +
                                                        '<td colspan="2">' +
                                                        '<div class="input-field">' +
                                                        '<div class="chips-placeholder chips" data-secondaryPlaceholder="Enter a variant"></div>' +
                                                        '</div>' +
                                                        '</td>' +
                                                        '</tr>'
                                                    );
                                                }

                                            </script>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="customSpecs">
                                    <tr>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" placeholder="E.g. Dimension, height, weight...">
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="input-field">
                                                <input type="text" placeholder="E.g. 10x4, 4ft.11in., 9kg">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="flow-text col s6">Add item variants</span>
                        <p class="container col s12">Variants are the different versions of the same product, like a bag that comes in either red, green,
                            or blue. Your customers can choose from these different versions.</p>
                        <div class="col s12 m12 l12">

                            <table>
                                <thead>
                                    <tr>
                                        <th>Spec</th>
                                        <th>Value</th>
                                        <th>
                                            <button class="right blue-text btn-flat waves-effect" onclick="addVariants()"><i class="mdi mdi-plus"></i></button>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="variants">
                                    <tr>
                                        <td>
                                            <div class="input-field">
                                                <input type="text" placeholder="E.g. Dimension, height, weight...">
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="input-field">
                                                <div class="chips-placeholder chips" data-secondaryPlaceholder="Enter a variant"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col s12 sad-white-gradient" style="position: fixed; bottom:0; left:0; right:0; z-index:1;">
                    <div class="row">
                        <div class="col s6 offset-m8 m2 offset-l10 l1">
                            <button id="cancel-add" class="btn-flat waves-effect light-blue-text left">Cancel</button>
                        </div>
                        <div class="col s6 m2 l1">
                            <button class="btn sad-crimson waves-effect right" onclick="saveNewProduct()">Save</button>
                        </div>
                    </div>
                </div></div>

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
            var prodName = $('#prodName').val();
            var prodPrice = $('#prodPrice').val();
            var prodDesc = $('#prodDesc').val();
            var prodCategory = $('#prodCategory').val();
            var prodKeywords = $('#prodKeywords').material_chip('data');
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
                url: "./insertdata.php",
                data: "Name=" + prodName + "&prodDesc=" + prodDesc + "&prodCategory=" +
                    prodCategory + "&keywords=" + JSON.stringify(keywords) + "&prodPrice=" +
                    prodPrice,
                dataType: 'json',
                method: "POST",
                success: function (data) {
                    Materialize.toast("New product added", 4000);
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
