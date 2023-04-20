<!DOCTYPE html>
<?php
// include "../../signup.php";
include "./Conn.php";
// include "./Login-Signup-form-master/login.php";
    session_start();
    // $_SESSION['fName']=$fullname;
// $_SESSION['Email']=$email;
// $_SESSION['user']=$uname;

// echo"$email";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ProfileStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body class="fix">

    <div class="container">
        <a href="../index.php"><button class="btn btn-primary">Home</button></a>
    </div>
    <div class="container">
        <br><br>
        <h5 style="color: white;">Change Profile Pic : <button class="btn btn-success" id="change">Change</button>
        <form action="upload.php" method="post" enctype="multipart/form-data">

                <input class="link-primary" type="file" name="image" id="img" value="Upload" accept="image/jpeg, image/png,image/jpg" style="visibility: hidden;" />
                <!-- <input type="file" name="image" id="img" value="Upload" /> -->

            </h5>
            <div class="container  imgUser" id="imgUser">
                <div style="background-image:url(../imgs_movies/img/user.jpg) ;" class="user-img" id="UserImg"></div>
            </div><br>
            <input class="btn btn-outline-primary" type="submit" value="Upload" id="Submit" name="submit" style="visibility: hidden;" />
            <!-- <button class="btn btn-outline-primary" name="submit" id="Submit" style="visibility: hidden;">Upload</button> -->
        </form>
    </div>

    <div class="container main">
        <h1 class="details">Full Name:
            <?php
            echo $_SESSION['fName'];
            ?>
        </h1><br>
        <h1 class="details">Email:
            <?php
            echo $_SESSION['Email'];
            ?>
        </h1><br>
        <h1 class="details">User Name:
            <?php
            echo $_SESSION['uName'];
            ?>
        </h1><br>




    </div>
    <script type="text/javascript">
        $("#change").click(function() {
            $("#change").hide();
            $("#img").css("visibility", "visible");
            
            $("#img").change(function abc(e) { //outer fun
                $("#Submit").css("visibility", "visible");
                // alert("hi")
                console.log(e)




                //     if (window.File && window.FileReader && window.FileList) {My_Work/profile/profile.php
                //         var files = e.target.files;
                //         const output = document.querySelector("#imgUser")
                //         $(".user-img").remove();
                //         for (let i = 0; i < files.length; i++) {
                //             console.log(files.length)

                //         var picReader = new FileReader()
                //         console.log(picReader)
                //         picReader.addEventListener("load", function load(event) { 
                //             alert("hello")//inner fun
                //             var picFile = event.target
                //             console.log(picFile.result)
                //             const img = document.createElement("div")
                //             img.className="container"
                //             img.innerHTML = `<div style="background-image:url("${picFile.result}");" class="user-img"  id="UserImg"></div>`
                //             output.appendChild(img)
                //         })

                //     }
                // }else{
                //         alert("window not suppoerted")
                //     }




                if (window.File && window.FileReader && window.FileList) {
                    var files = e.target.files;
                    // console.log(files)
                    $(".user-img").remove();
                    const output = document.querySelector("#imgUser")
                    for (let i = 0; i < files.length; i++) {
                        var picReader = new FileReader()
                        // console.log(picReader)
                        picReader.addEventListener("load", function load(event) { //inner fun
                            var picFile = event.target
                            console.log(picFile)
                            // const div = document.createElement("div")
                            // const dragDiv = document.createElement("div")
                            // const opDiv=document.
                            // div.className = "conatiner"
                            // dragDiv.className = "outDiv"

                            output.innerHTML = `<div style='background-image:url("${picFile.result}");' class="user-img"  id="UserImg" name="UIMG"></div>`
                            //src="${picFile.result}" title=${picFile.name}
                            // output.appendChild(div)
                            // document.getElementById("drop").appendChild(dragDiv)
                            // a = a + 1;
                            //console.log(a + " in this")
                            //div=document.getElementById("show").innerHTML=`<img class="op" src="${picFile.result}">`
                            const data = picFile.result
                            $.ajax({
                                type: "post",
                                url: "data.php",
                                data: {
                                    user: JSON.stringify(data)
                                },
                                success: function(response) {
                                    // alert(response)
                                    console.log(response)

                                }
                            });
                        });
                        // document.cookie='selected_item='+picFile.result;

                        picReader.readAsDataURL(files[i])

                    }

                }
            });
        });
        $("#Submit").click(function() {
                $("#img").css("visibility", "hidden");
                $("#change").show();
                $("#Submit").css("visibility", "hidden");
            });
    </script>
   

</body>

</html>