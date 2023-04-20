<!DOCTYPE html>
<html lang="en">
<?php
include "./Profile/Conn.php";
                
session_start();
$userEmail = $_SESSION['Email'];
echo "$userEmail";
// echo $_SESSION['Email'];
// echo "<script>
// alert($userEmail);
// </script>";
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghost Cinema</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="swiper_bundle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css" integrity="sha512-jxGmKjC/OykrTklkNK2NgnhNtKtUAADFY+rvSi3nA7dbaPRfjrSXYxHqX8iq5N6WTOntqEQZrEwW3L84sirfKQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="shorcut icon" href="img/fav-icon.png" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="fix" onload="loadData(),favLoad()">
    <div id="loading" style="visibility:hidden"></div>
    <header>
        <div class="navv containerr">
            <a href="index.html" class="logo">
                POP<span>CORN</span>
            </a>
            <div class="search-box">
                <input type="search" name="searchIndex" id="search-input" placeholder="search Movie" onfocus="search()" data-search>
                <i class='bx bx-search'></i>
            </div>
            <a href="profile/profile.php" class="user">
                <?php
                $emailquery="SELECT `UserImg` FROM login WHERE email='vasu@gmail.com'";
                $sql=mysqli_query($conn,$emailquery);
                
                //  echo strval($sql);
                
                if($sql->num_rows > 0){ ?> 
                     
                        <?php while($row = $sql->fetch_assoc()){ ?> 
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['UserImg']); ?>" alt="" class="user-img"/> 
                        <?php } ?> 
                     
                <?php }else{ ?> 
                    <p class="status error">Image(s) not found...</p> 
                <?php } ?>    


                
                <?php
               
                    ?>
                    <!-- <img src="imgs_movies/img/user.jpg" alt="" class="user-img"> -->
                <?php
                
                ?>
                
  


                
                
                

            </a>
            <div class="navbarr">
                <a href="#home" class="nav-linkk">
                    <i class='bx bx-home'></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#popular-content" class="nav-linkk">
                    <i class='bx bxs-hot'></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#" id="searchIndex" class="nav-linkk">

                    <i class='bx bx-compass'></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="#movie" class="nav-linkk">
                    <i class='bx bx-tv'></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#favourite" class="nav-linkk">
                    <i class='bx bx-heart'></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
                <a href="./ContactUs/Contact.html" class="nav-linkk">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span class="nav-link-title">Contact Us</span>
                </a>
            </div>
        </div>
    </header>



    <section class="search containerr" id="search">

        <div class="user-cards containerr" data-user-cards-container>
            <div class="form-style-9 position-relative">
                <button class="btn top-0 end-0 position-absolute" id="closeSearch"><i class="fa fa-times" aria-hidden="true" style="color: white;"></i>
                </button>
            </div>
            <!-- <template data-user-template> -->
            <div class="container" id="mainSearch">

            </div>

            <!-- </template> -->
        </div>
    </section>

    <section class="home containerr" id="home">
        <!-- <img src="imgs_movies/img/home-background.png" alt="" class="home-img"> -->
        <div class="home-text" id="home-text">
            <!-- <h1 class="home-title">Hitman's wife's<br>Bodyguard</h1>
            <p>Releasing 10 April</p>
            <a href="#" class="watch-btn">
                <i class='bx bx-right-arrow'></i>
                <span>Watch the trailer</span>
            </a>
            <br>
            <a href="Movie_Reservation\hitman\hitman_seats.html"><button class="hitmanBook btn-primary">Book
                    Now</button></a>
            <br><br>
            <button class="btn SlideLike1" onclick="favourite(18)">


                <h2 class="heart${value.id} HomeLikeBtn">&#9825;</h2> 
            </button>-->
            <br id="br1">
            <br id="br2"><br id="br2">
        </div>
    </section>

    <section class="popular containerr" id="popular">
        <div class="heading">
            <h2 class="heading-title">Popular Movies</h2>
        </div>

        <div class="popular-content myStyle swiper" id="popular-content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="carousel-indicator">
                    <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li> -->
                </ol>
                <div class="carousel-inner outerdiv" id="outDiv">
                    <!-- <div class="carousel-item active imgDiv movie-box">
                        <img class="d-block h-100 w-100 movie-box imgBlock" src="imgs_movies/img/movie-1.jpg"
                            alt="First slide">
                        <div class=" box-text h-25 w-100 ">
                            <h2 class="movie-title">Jumanji: Welcome To The Jungle</h2>
                            <span class="movie-type">Adventure 
                                <button class="btn SlideLike1"
                                    onclick="favourite(11)">


                                    <h2 class="heart11 LikeBtn">&#9825;</h2>
                                </button>
                            </span>

                            <div id="buttonsDiv">

                                <a href="Movie_Reservation\jumanji\jumanji_seat.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="https://www.youtube.com/watch?v=i8YoTevvkks" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 movie-box imgBlock" src="imgs_movies/img/avengersEndGame.jpg"
                            alt="Second slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">Avengers: End Game</h2>
                            <span class="movie-type">Action,Marvel 
                                <button class="btn SlideLike1"
                                    onclick="favourite(12)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/avengers/avengers_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/img/movie-3.jpg" alt="Third slide">
                        <div class="box-text h-25 w-100  ">
                            <h2 class="movie-title">Sang-Chi And The Legend Of Ten Rings</h2>
                            <span class="movie-type">Action,Marvel <button class="btn SlideLike1"
                                    onclick="favourite(13)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/sanghChi/sanghChi_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/img/movie-4.jpg" alt="Fourth slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">Eternels</h2>
                            <span class="movie-type">Action <button class="btn SlideLike1"
                                    onclick="favourite(14)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/eternals/eternals_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/img/movie-5.jpg" alt="Fifth slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">Spectre</h2>
                            <span class="movie-type">Adventure <button class="btn SlideLike1"
                                    onclick="favourite(15)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/spectre/spectre_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/img/movie-7.jpg" alt="Seventh slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">The Wolverine</h2>
                            <span class="movie-type">Action <button class="btn SlideLike1"
                                    onclick="favourite(16)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/wolverine/wolverine_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/img/justice_league.jpg"
                            alt="Eight slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">Justice League</h2>
                            <span class="movie-type">Action <button class="btn SlideLike1"
                                    onclick="favourite(17)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/justiceLeague/justiceLeague_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item imgDiv movie-box">
                        <img class="d-block h-100 w-100 imgBlock" src="imgs_movies/fastx.jpg" alt="Sixth slide">
                        <div class="box-text h-25 w-100 ">
                            <h2 class="movie-title">Fast X</h2>
                            <span class="movie-type">Adventure,Action <button class="btn SlideLike1"
                                    onclick="favourite(18)">


                                    <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
                                </button></span>
                            <div>
                                <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                                        class="book btn-primary">Book
                                        Now</button></a>
                                <a href="#" class="watch-btn play-btn w-25">
                                    <i class="bx bx-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div> -->

                </div>

                <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="swiper-button-prev"></span>
                    <span class="sr-only">Previous</span> </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="swiper-button-next"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        </div>
    </section>
    <section class="movies " id="movies">
        <div id="movie" class="container">
            <div class="heading" style="margin-left: 10px;">
                <h2 class="heading-title">Movie And Shows</h2>
            </div>
            <div class="d-flex" id="movie-container1">
                <!-- <div class=" p-2 movieItems">
                    <img class="d-block showsImg" src="imgs_movies/img/movie-6.jpg">
                    <div class="box-text w-100 "><br>
                        <h2 class="movie-title">Money-Heist</h2>
                        <span class="movie-type">Adventure</span>
                        <button class="btn like1" onclick="favourite1()">


                            <h2 class="heart1">&#9825;</h2>
                        </button>
                        <br>
                    </div><br><br>
                    <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>


                </div>
                 -->
            </div>
            <br>
            <div class="d-flex" id="movie-container2">
                <!-- <div class=" p-2 movieItems">
                    <img class="d-block showsImg" src="imgs_movies/img/popular-movie-4.jpg">
                    <div class="box-text w-100 "><br>
                        <h2 class="movie-title">Squid Game</h2>
                        <span class="movie-type">Thrill,Adventure</span><button class="btn like6"
                            onclick="favourite6()">


                            <h2 class="heart6">&#9825;</h2>
                        </button>
                        <br>
                    </div><br><br>
                    <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>


                </div>
                
 -->

            </div>
            <br>
            <div class="d-flex" id="movie-container3">

            </div>




        </div>
    </section>
    <section class="favourite" id="favourite">
        <div id="favourite" class="container">
            <div class="heading">
                <h2 class="heading-title">Favourite Movies</h2>
            </div>
            <div class="d-flex " id="MainDiv1">

                <div class="container favInstruction" id="favInstruction" style="text-align: center; height: 100px;">
                    <h2 style="color: white;">Please Select your Favourite Movies You want using '&#9825;' Button</h2>
                </div>
            </div><br>
            <div class="d-flex " id="MainDiv2">


            </div>
        </div>




    </section>



    <script src="./index.js">
    </script>
    <script>
        let email = "<?php echo $userEmail; ?>";
        let movie=JSON.parse(localStorage.getItem("favourite"))
// function emailLoad(){
    let arr=[]
    //  console.log(movie)
// const xhr=new XMLHttpRequest();
// xhr.open("GET","movieData.json",true)
// xhr.setRequestHeader("content-type","application/json")
// xhr.onload = function () {
//     //this.response
//     let data=JSON.parse(this.response)
//     // console.log(data)
//     movie.forEach(value => {
//         data.forEach(obj=>{
//             if(value.id==obj.id){
//                 console.log(obj)
//                 arr.push(obj.title)
                
//             }
//         })
        
//     });
//     // console.log(this.response)
//  }
// xhr.send()
function favLoad(){

    fetch("http://localhost:3000/mail", {
  method: "post",
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json'
  },

  //make sure to serialize your JSON body
  body: JSON.stringify({
    name: arr,
    email:email
  })
})
.then( (response) => { 
    console.log(response)
   //do something awesome that makes the world a better place
});
//     console.log("hello world",$(".logo"))
// $.post("http://localhost:3000/mail", JSON.stringify(arr),
//     function (data, textStatus) {    
//         console.log(data)
//         console.log(textStatus)

        
//     });
}
// export default arr;
// const http=new XMLHttpRequest()
//                 http.open("POST","favMovie.json",true)
//                 http.send(JSON.stringify(arr))
//                 // console.log(http.send(JSON.stringify(arr)))


// }
// export default movie
        

        // function emailLoad() {
            // getText("");

            // async function getText(file) {
            //     let x = await fetch(file);
            //     let y = await x.text();
            //     document.getElementById("demo").innerHTML = y;
            // }
            // console.log("hello")

        // }

        // console.log(email)
        // function favourite(id){
        //     console.log(email)

        // }
        // $(".SlideLike1, .like8").click(function () { 
        //     // e.preventDefault();
        //    alert("ji")

        // });
    </script>
    <script  src="swiper-bundlemin.js"></script>
    <script src="main.js"></script>
    <!-- <script type="module" src="./smtp/smtp/send.js"></script> -->
    <script  src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- <script type="module" src="./smtp/smtp/index.js"></script> -->


</body>

</html>