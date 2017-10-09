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
    <title>Edit account &middot; Keasyshoppe</title>
    <link rel="stylesheet" type="text/css" href="../../css/materialize.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/materialdesignicons.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
</head>

<body>
    <div class="navbar-fixed">
        <nav class="transparent z-depth-0">
            <div class="nav-content">
                <ul>
                    <li>
                        <img src="../../images/keasy_logo.png" width="200">
                    </li>
                </ul>
                <ul class="right">
                    <li>
                        <a class="grey-text" href="../../pages/u">
                            <i class="mdi mdi-home"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <form method="POST" action="uploadimage.php" enctype="multipart/form-data">
        <main class="row">
        <div class="col s12 m3 l3">
            <div class="card hoverable" >
                <div class="card-image waves-effect waves-block" onclick="$('#profilepic').click();">
                    <img id="profImg" height="300" src="../../images/user-offline-symbolic.svg" />
                    <span class="card-title" style="background:linear-gradient(0deg, rgba(0,0,0,0.75), rgba(0,0,0,0)); width: 100%;">
                        <i class="right mdi mdi-48px mdi-image"></i>
                        Click to add your profile picture
                    </span>
                </div>
                <input type="text" placeholder="You have no image yet" id="pic_path" class="white-text browser-default grey darken-3" style="padding: 5px; border: none; width: 100%; font-family: Inconsolata, monospace" />
            </div>
            <div class="row">
                <div class=" center">
                    <input class="col s12 m12 l12 btn btn-large waves-effect sad-crimson" name="submit" type="submit" value="Save details">
                </div>
            </div>
        </div>
        <div class="col s12 m9 l9">
            <p class="flow-text">Edit your account</p>
            <p>We'll use these information to contact you once you buy your items from our website. We'll never share private information, and your privacy is safe. And you can always edit it later.</p>
            <p class="grey-text">Fields marked with an asterisk (*) are required</p>
            <div class="row">
                <div class="col s4 m4 l4">
                    <div class="input-field">
                        <input type="text" name="name_first" required id="name_first">
                        <label for="name_first">First Name*</label>
                    </div>
                </div>
                <div class="col s4 m4 l4">
                    <div class="input-field">
                        <input type="text" name="name_mid" id="name_mid">
                        <label for="name_first">Middle Name</label>
                    </div>
                </div>
                <div class="col s4 m4 l4">
                    <div class="input-field">
                        <input type="text" name="name_last" required id="name_last">
                        <label for="name_last">Last Name*</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field">
                        <textarea name="address" id="address" cols="30" rows="10" class="materialize-textarea" required></textarea> 
                        <label for="address">Address*</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="input-field">
                        <input type="tel" name="telephone" id="telephone" required> 
                        <label for="address">Telephone*</label>
                    </div>
                </div>
            </div>
        </div>
        <input onchange="picSelected(this.files)" type="file" name="profilepic" id="profilepic" hidden>
    </main>
    </form>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/script.js"></script>
    <script>
        function picSelected(files){
            for(var i = 0; i<files.length;i++){
                var file = files[i];
                var imageType = /^image\//;
                if(!imageType.test(file.type)) continue;
                var img = document.getElementById('profImg');
                img.file = file;
                var reader = new FileReader();
                reader.onload=((aimg)=>{
                    return function (e){
                        aimg.src = e.target.result;
                    }
                })(img);
                reader.readAsDataURL(file);
                $('#pic_path').val(file.name);
            }
        }
    </script>
</body>

</html>
