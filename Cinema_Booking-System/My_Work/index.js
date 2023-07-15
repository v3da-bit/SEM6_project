       let a = 0
        
        // value.id = 0-10,22-27 movieData
        //value.id= 11-21 carousel data
        //value.id= 28-30 home data

        let z = [{
                title: "Money-Heist",
                img: "imgs_movies/img/movie-6.jpg",
                id: 1,
                type: "Adventure",
                click:false
            }, {
                title: "Johnny English:Strikes Again",
                img: "imgs_movies/img/movie-8.jpg",
                id: 2,
                type: "Comedy",
                click:false
            }, {
                title: "SpiderMan: No Way Home",
                img: "imgs_movies/img/popular-movie-1.jpg",
                id: 3,
                type: "Action,Marvel",
                click:false
            }, {
                title: "Jungle Cruise",
                img: "imgs_movies/img/popular-movie-2.jpg",
                id: 4,
                type: "Adventure",
                click:false
            }, {
                title: "Loki",
                img: "imgs_movies/img/popular-movie-3.jpg",
                id: 5,
                type: "Action,Marvel",
                click:false
            }, {
                title: "Squid Game",
                img: "imgs_movies/img/popular-movie-4.jpg",
                id: 6,
                type: "Thrill,Adventure",
                click:false
            }, {
                title: "The Falcon And The Winter Soldier",
                img: "imgs_movies/img/popular-movie-5.jpg",
                id: 7,
                type: "Marvel",
                click:false
            }, {
                title: "Hawkeye",
                img: "imgs_movies/img/popular-movie-6.jpg",
                id: 8,
                type: "Marvel",
                click:false
            }, {
                title: "Agents Of S.H.I.E.L.D.",
                img: "imgs_movies/img/popular-movie-7.jpg",
                id: 9,
                type: "Action,Marvel",
                click:false
            }, {
                title: "AVATAR: The Way Of Water",
                img: "imgs_movies/img/avatar2.jpg",
                id: 10,
                type: "Adventure",
                click:false
            },{
                title: "Jumanji: Welcome To The Jungle",
                img: "imgs_movies/img/movie-1.jpg",
                id: 11,
                type: "Adventure",
                click:false
            },{
                title: "Avengers: End Game",
                img: "imgs_movies/img/avengersEndGame.jpg",
                id: 12,
                type: "Action,Marvel",
                click:false
            },{
                title: "Sang-Chi And The Legend Of Ten Rings",
                img: "imgs_movies/img/movie-3.jpg",
                id: 13,
                type: "Action,Marvel",
                click:false
            },{
                title: "Eternels",
                img: "imgs_movies/img/movie-4.jpg",
                id: 14,
                type: "Action",
                click:false
            },{
                title: "Spectre",
                img: "imgs_movies/img/movie-5.jpg",
                id: 15,
                type: "Adventure",
                click:false
            },{
                title: "The Wolverine",
                img: "imgs_movies/img/movie-7.jpg",
                id: 16,
                type: "Action",
                click:false
            },{
                title: "Justice League",
                img: "imgs_movies/img/justice_league.jpg",
                id: 17,
                type: "Action",
                click:false
            },{
                title: "Fast X",
                img: "imgs_movies/fastx.jpg",
                id: 18,
                type: "Adventure,Action",
                click:false
            },{
                title:"Hitman's wife's Bodyguard",
                img:"imgs_movies/img/movie-2.jpg",
                id:30,
                type:"Action",
                click:false
            }];
            let fav=[{
                title: "Money-Heist",
                img: "imgs_movies/img/movie-6.jpg",
                id: 1,
                type: "Adventure",
                click:false
            }, {
                title: "Johnny English:Strikes Again",
                img: "imgs_movies/img/movie-8.jpg",
                id: 2,
                type: "Comedy",
                click:false
            }, {
                title: "SpiderMan: No Way Home",
                img: "imgs_movies/img/popular-movie-1.jpg",
                id: 3,
                type: "Action,Marvel",
                click:false
            }]
            let homeData=[
                {
                    title:"Hitman's <br> wife's <br> Bodyguard",
                    img:"imgs_movies/img/movie-2.jpg",
                    ReleaseDate:"Releasing 10 April",
                    id:30,
                    type:"Action",
                    click:false
                }

            ]
            // fetch("movieData.json").then(res=>res.json()).then(data=>{})
            console.log("hello  world")
            localStorage.setItem("MoviesData",JSON.stringify(z)) //imp To change localStorage Data
            localStorage.setItem("favourite",JSON.stringify(fav))
            localStorage.setItem("HomeData",JSON.stringify(homeData))

            // Array.prototype.remove = function(index) {
            //     comsole.log(this);
            //     this.splice(index, 1);
            //     //console.log(this)
            // }
            
            
            // const favourite=document.getElementById("favourite")
            const favSec1 = document.getElementById("MainDiv1")
            // const favDiv=document.getElementById("favourite")
            let count=0
            // let fav=[]
            //  let favourite1=JSON.parse(localStorage.getItem("favourite"))
            // favourite1.forEach(value=>{
            //     fav.push(value.id)
            // })
            
            // function remove1 (index) {
            //     //console.log(this, index)
            //     let arr = this.map(item => {
            //         if(item.id != index.id) {
            //             return item;
            //         }
            //     })
            //     this = arr;
            // }
            let favourite1=JSON.parse(localStorage.getItem("favourite"))
            
            
        
            function favourite(id) {

                let normalMovie=JSON.parse(localStorage.getItem("MoviesData"))
                // console.log(id)
                let fav=[]
                let f1=JSON.parse(localStorage.getItem("favourite"))
                f1.forEach(value=>{
                    fav.push(value.id)
                })
                // console.log(fav)

                
                
                // favourite1=[]
                ////console.log(id)
                if (fav.includes(id)) {
                    let del=JSON.parse(localStorage.getItem("favourite"))
                    // let favourite1=JSON.parse(localStorage.getItem("favourite"))
                    let try1=[]
                    // let newDel=[]
                    del.forEach(value=>{
                        if(value.id!=id){
                            // fav.push(value.id)
                            // //console.log(value)
                            // favourite1.remove1(value)
                            // newDel.push(value)
                            try1.push(value)


                        }
                    })
                    localStorage.setItem("favourite",JSON.stringify(try1))
                

                    // //console.log(favourite1)
                
                    // count=count-1
                    $(`.heart${id}`).html("&#9825;");
                    $(`.heart${id}`).css("color", "white");
                    $(`.m${id}`).remove();
                    // let new1=[]

                    // fav.forEach(val=>{
                    //     if (val!=id) {
                    //         new1.push(val)

                    //     }
                    // })
                    count=count-1
                    // fav=new1
                    //console.log(count)
                    //console.log(fav)
                    

                }else{
                    let favourite1=JSON.parse(localStorage.getItem("favourite"))
                    
                    //console.log(fav)
                    normalMovie.forEach(value=>{
                        if(value.id==id){
                            favourite1.push(value)
                            value.click=true
                            
                            // fav.push(value.id)
                            // $(`.heart${value.id}`).html("&#10084;");
                            // $(`.heart${value.id}`).css("color", "red");
                            
                            
                        }
                    })
                    localStorage.setItem("favourite",JSON.stringify(favourite1))
                    
                    //console.log(favourite1)
                    // favourite1=[]
                    // localStorage.setItem("favourite",JSON.stringify(favourite1))
                    let favData=JSON.parse(localStorage.getItem("favourite"))
                    
                
                    
                    if (count<=4 && !fav.includes(id)) {
                        let fd1=[]
                        favData.forEach(value=>{
                            fd1.push(value.id)

                        })
                    

                    
                    favData.forEach(value=>{
                        // console.log(favData)
                        
                        if(!fav.includes(value.id)){

                            console.log(value)
                        value.click=true
                        
                            // if (a == 0) {

                            // a = 1
                            // count = count + 1
                            if (value.id==2 || value.id==3 || value.id==7 || value.id==10 || value.id==30 ||value.id==13 || value.id==11 ) {
                                //console.log(value.id)
                                count = count + 1
                                //console.log(count)

                            $(`.heart${value.id}`).html("&#10084;");
                            $(`.heart${value.id}`).css("color", "red");
                            const inDiv1 = document.createElement("div")
                            inDiv1.className = `m${value.id} p-2 movieItems`
                            inDiv1.innerHTML = `
                            <img class="d-block showsImg" src="${value.img}">
                            <div class="box-text w-100 "><br>
                                <h2 class="movie-title">${value.title}</h2>
                                <span class="movie-type">${value.type}</span>
                            <br>
                        </div><br><br>
                        <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                                class="showsBook btn-primary">Book
                                Now</button></a>
                            
                    `;
                    ////console.log(a)
                    favSec1.appendChild(inDiv1)
                        }
                        else{
                            //console.log(value.id)
                            console.log(`.heart${value.id}`)

                            count = count + 1
                            //console.log(count)
                            $(`.heart${value.id}`).html("&#10084;");
                            $(`.heart${value.id}`).css("color", "red");
                            const inDiv2 = document.createElement("div")
                            inDiv2.className = `m${value.id} p-2 movieItems`
                            inDiv2.innerHTML = `
                            <img class="d-block showsImg" src="${value.img}">
                            <div class="box-text w-100 "><br>
                                <h2 class="movie-title">${value.title}</h2>
                                <span class="movie-type">${value.type}</span>
                            <br>
                        </div><br><br><br>
                        <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                                class="showsBook btn-primary">Book
                                Now</button></a>


                        
                    `;
                   // //console.log(a)
                    favSec1.appendChild(inDiv2)
                        
                        }
                    }
                    

            })
            ////console.log(id)
            // fav.push(id)
            //console.log(fav)
            }
            else if(count>4 && !fav.includes(id)){
                value.click=true
                const favSec2 = document.getElementById("MainDiv2")
                let fd2=[]
                        favData.forEach(value=>{
                            fd2.push(value.id)

                        })
                    
            
                favData.forEach(value=>{
                    if(!fav.includes(value.id)){

                    
                        // if (a == 0) {

                        // a = 1
                        // count = count + 1
                        if (value.id==2 || value.id==3 || value.id==7 || value.id==10 || value.id==13 || value.id==30) {
                            //console.log(value.id)
                            count = count + 1
                            //console.log(count)

                        $(`.heart${value.id}`).html("&#10084;");
                        $(`.heart${value.id}`).css("color", "red");
                        const inDiv3 = document.createElement("div")
                        inDiv3.className = `m${value.id} p-2 movieItems`
                        inDiv3.innerHTML = `
                        <img class="d-block showsImg" src="${value.img}">
                        <div class="box-text w-100 "><br>
                            <h2 class="movie-title">${value.title}</h2>
                            <span class="movie-type">${value.type}</span>
                        <br>
                    </div><br><br>
                    <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>


                        
                `;
                ////console.log(a)
                favSec2.appendChild(inDiv3)
                    }
                    else{
                        console.log(`.heart${value.id}`)
                        //console.log(value.id)
                        count = count + 1
                        //console.log(count)
                        $(`.heart${value.id}`).html("&#10084;");
                        $(`.heart${value.id}`).css("color", "red");
                        const inDiv4 = document.createElement("div")
                        inDiv4.className = `m${value.id} p-2 movieItems`
                        inDiv4.innerHTML = `
                        <img class="d-block showsImg" src="${value.img}">
                        <div class="box-text w-100 "><br>
                            <h2 class="movie-title">${value.title}</h2>
                            <span class="movie-type">${value.type}</span>
                        <br>
                    </div><br><br><br>
                    <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>


                    
                `;
               // //console.log(a)
                favSec2.appendChild(inDiv4)
                    
                    }
                    // fav.push(id)
                    //console.log(fav)
                }
            
                

        })
    
        //console.log(id)
        // fav.push(id)
        //console.log(fav)
            }
                // alert("hi")
               
            // } else {
            //     a = 0
            //     //console.log(a)
            //     count = count - 1
            
            // }
            


        }  
        let fav1=JSON.parse(localStorage.getItem("favourite"))

        if (fav1.length == 0) {
            //console.log(fav1)
            // alert(count)
            // //console.log(count)
            $("#favInstruction").css("display", "block");


        }
        else if (fav1.length > 0) {
            //console.log(fav1.length)

            // alert(count)
            // //console.log(count)
            $("#favInstruction").css("display", "none");

        }
        
        let xhr = new XMLHttpRequest();
            let url = "dynamicData.json" 
            let localData=JSON.parse(localStorage.getItem("favourite"));
       
            // open a connection
            xhr.open("POST", url, true);
 
            // Set the request header i.e. which type of content you are sending
            xhr.setRequestHeader("Content-Type", "application/json");
 
            // Create a state change callback
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
 
                    // Print received data from server
                    result.innerHTML = this.responseText;
 
                }
            };
 
            // Converting JSON data to string
            var data = JSON.stringify(localData);
 
            // Sending data with the request
            xhr.send(data);
    
                     
                   
        }
        function searchMovie(movies,key) {
            const outDiv=document.getElementById("mainSearch")
      outDiv.innerHTML="";
      movies.forEach(value=> {
          if(key===""||value.title.toLowerCase().includes(key.toLowerCase())|| value.type.toLowerCase().includes(key.toLowerCase())){
        const inDiv2 = document.createElement("div")
            inDiv2.className = "div2 p-2 movieItems"
            inDiv2.innerHTML = `
                    <img class="d-block showsImg" src="${value.img}">
                    <div class="box-text w-100 "><br>
                        <h2 class="movie-title">${value.title}</h2>
                        <span class="movie-type">${value.type}</span>
                    <br>
                </div><br><br><br>
                <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                        class="showsBook btn-primary">Book
                        Now</button></a>`
            outDiv.appendChild(inDiv2)
        console.log(value)
          }
    })
            
        }    
        function search() {
            $(".search").show();
            // console.log("search")
            $("#home").hide();
            $("#popular").hide();
            $("#movies").hide();
            $("#favourite").hide();
            // const userCardTemplate = document.querySelector("[data-user-template]")
            // const userCardContainer = document.querySelector("[data-user-cards-container]")
            const searchInput = document.querySelector("[data-search]")
            
            
        let movies = []
    
    searchInput.addEventListener("input", e => {
    //$("#mainSearch").remove()
      const key = e.target.value.toLowerCase()
    // console.log(movies)
    searchMovie(movies,key)
      
    })
    fetch("movieData.json")
    .then(res=>res.json())
    .then(data=>{
        movies = data
        searchMovie(movies,"")
      
    })
            
    $("#closeSearch").click(function () { 
        
        $(".search").hide();
            // console.log("search")
            $("#home").show();
            $("#popular").show();
            $("#movies").show();
            $("#favourite").show();
            
        
    });        
        }  
            
            
        $("#searchIndex").click(function () {
    
                //alert("hi")
                $("#search-input").focus();
                search()
                
            });
              
                 
        
            function loadData() {
                console.log("load data")
                
                $(".search").hide();
                document.getElementById("loading").style.display="none"
        


    // console.log(favouriteData)

    // favouriteData.forEach(value=>{
    //     fav.push(value.id)
    // })
    //console.log("fn")

let i=0
let j=0
let carouselData=JSON.parse(localStorage.getItem("MoviesData"))
let favouriteData3=JSON.parse(localStorage.getItem("favourite"))
let f3=[]
favouriteData3.forEach(value=>{
    f3.push(value.id)
})
console.log(f3)
carouselData.forEach(value=>{
    if (value.id>=11 && value.id<=21) {
        const ol=document.getElementById("carousel-indicator")
        if (i==0) {
            //console.log(i)
            const li=document.createElement("li")
            li.className=`c${value.id}`
            li.setAttribute("data-target","#carouselExampleIndicators")
            li.setAttribute("data-slide-to",`${i}`)
            li.innerHTML=""
            // `<li data-target="#carouselExampleIndicators" class="c${value.id}"  data-slide-to="${i}" class="active"></li>`
            ol.appendChild(li)
            i=i+1
        }else{
            //console.log(i)
            const li=document.createElement("li")
            li.className=`c${value.id}`
            li.setAttribute("data-target","#carouselExampleIndicators")
            li.setAttribute("data-slide-to",`${i}`)
            li.innerHTML=""
            // `<li data-target="#carouselExampleIndicators" class="c${value.id}"  data-slide-to="${i}" class="active"></li>`
            ol.appendChild(li)
            i=i+1
            
        }
        if (j==0) {
            const outDiv=document.getElementById("outDiv")
            const indiv=document.createElement("div")
            indiv.className=`carousel-item active imgDiv movie-box c${value.id}`
            if(f3.includes(value.id)) {
                

            indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            <button class="btn SlideLike1"
                                    onclick="favourite(${value.id})">
                                    <h2 class="heart${value.id} LikeBtn" style="color:red">&#10084;</h2>
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
            </div>`
            }else{
                indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            <button class="btn SlideLike1"
                                    onclick="favourite(${value.id})">
                                    
                <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
               
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
            </div>`
            
            }
        outDiv.appendChild(indiv)

            j=j+1
            
        }else{

            const outDiv=document.getElementById("outDiv")
            const indiv=document.createElement("div")
            indiv.className=`carousel-item imgDiv movie-box c${value.id}`
            
            if(f3.includes(value.id)) {
            indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            <button class="btn SlideLike1"
                                    onclick="favourite(${value.id})">
                                    <h2 class="heart${value.id} LikeBtn" style="color:red">&#10084;</h2>
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
            </div>`
            }else{
                indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            <button class="btn SlideLike1"
                                    onclick="favourite(${value.id})">
                <h2 class="heart${value.id} LikeBtn">&#9825;</h2>
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
            </div>`
            

            }
        outDiv.appendChild(indiv)

            j=j+1
            
        }
        
    }
})

            const sec1 = document.getElementById("movie-container1")

            const sec2 = document.getElementById("movie-container2")
            let MovieData= JSON.parse(localStorage.getItem("MoviesData"))
            let counter=1
           
let favouriteData1= JSON.parse(localStorage.getItem("favourite"))
MovieData.forEach(value => {

    
                //console.log(value.id)
                if(value.id<=10 || (value.id>=22 && value.id<=27)){
                     //console.log("if1")
                // //console.log(value.id)
                if (counter<=5) {
                     //console.log("if2")
                    //console.log(value.id)
            
                if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                     //console.log("if3")
                counter=counter+1
                const inDiv1 = document.createElement("div")
                inDiv1.className = "div1 p-2 movieItems"
                //console.log(favouriteData, value.id)
                console.log(favouriteData1.includes(value.id))
                
                if(favouriteData1.includes(value.id)) {
                    console.log("fav")
                    inDiv1.innerHTML = `
                     <img class="d-block showsImg" src="${value.img}">
                        <div class="box-text w-100 "><br>
                            <h2 class="movie-title">${value.title}</h2>
                            <span class="movie-type">${value.type}</span>
                            <button class="btn like8" onclick="favourite(${value.id})">
    
                        <h2 class="heart${value.id}" style="color: red">&#10084;</h2>
                        </button><br>
                        </div><br><br>
                        <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>                        
                    `;
                } else {
                    console.log(value.id)
                    inDiv1.innerHTML = `
                     <img class="d-block showsImg" src="${value.img}">
                        <div class="box-text w-100 "><br>
                            <h2 class="movie-title">${value.title}</h2>
                            <span class="movie-type">${value.type}</span>
                            <button class="btn like8" onclick="favourite(${value.id})">
    
                        <h2 class="heart${value.id}">&#9825;</h2>
                        </button><br>
                        </div><br><br>
                        <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                            class="showsBook btn-primary">Book
                            Now</button></a>                        
                    `;
                }


                sec1.appendChild(inDiv1)
            }
            else{
                counter=counter+1
                const inDiv2 = document.createElement("div")
                inDiv2.className = "div2 p-2 movieItems"
                if(favouriteData1.includes(value.id)) {
                    console.log("fav")
                    inDiv2.innerHTML = `
                    <img class="d-block showsImg" src="${value.img}">
                       <div class="box-text w-100 "><br>
                           <h2 class="movie-title">${value.title}</h2>
                           <span class="movie-type">${value.type}</span>
                           <button class="btn like8" onclick="favourite(${value.id})">
   
   
                       <h2 class="heart${value.id}" style="color: red">&#10084;</h2>
                       </button><br>
                       </div><br><br><br>
                       <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                           class="showsBook btn-primary">Book
                           Now</button></a>
   
   
                           
                   `;
                } else {
                    console.log(value.id)

                    inDiv2.innerHTML = `
                    <img class="d-block showsImg" src="${value.img}">
                       <div class="box-text w-100 "><br>
                           <h2 class="movie-title">${value.title}</h2>
                           <span class="movie-type">${value.type}</span>
                           <button class="btn like8" onclick="favourite(${value.id})">
   
   
                       <h2 class="heart${value.id}">&#9825;</h2>
                       </button><br>
                       </div><br><br><br>
                       <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                           class="showsBook btn-primary">Book
                           Now</button></a>
   
   
                           
                   `;
                }
                ////console.log(value.id)
                
                sec1.appendChild(inDiv2)
                
            }
                
                
            }else{
                counter=counter+1
                //console.log(value.title)
                if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                    
                
                    const inDiv1 = document.createElement("div")
                    inDiv1.className = "div1 p-2 movieItems"
                    if(favouriteData1.includes(value.id)) {
                        console.log("fav")
                        inDiv1.innerHTML = `
                         <img class="d-block showsImg" src="${value.img}">
                            <div class="box-text w-100 "><br>
                                <h2 class="movie-title">${value.title}</h2>
                                <span class="movie-type">${value.type}</span>
                                <button class="btn like8" onclick="favourite(${value.id})">
        
                            <h2 class="heart${value.id}" style="color: red">&#10084;</h2>
                            </button><br>
                            </div><br><br>
                            <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                                class="showsBook btn-primary">Book
                                Now</button></a>                        
                        `;
                    } else {
                        console.log(value.id)

                        inDiv1.innerHTML = `
                         <img class="d-block showsImg" src="${value.img}">
                            <div class="box-text w-100 "><br>
                                <h2 class="movie-title">${value.title}</h2>
                                <span class="movie-type">${value.type}</span>
                                <button class="btn like8" onclick="favourite(${value.id})">
        
                            <h2 class="heart${value.id}">&#9825;</h2>
                            </button><br>
                            </div><br><br>
                            <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                                class="showsBook btn-primary">Book
                                Now</button></a>                        
                        `;
                    }
    
                    sec2.appendChild(inDiv1)
                }
                else{
                    ////console.log(value.id)
                    const inDiv2 = document.createElement("div")
                    inDiv2.className = "div2 p-2 movieItems"
                    if(favouriteData1.includes(value.id)) {
                        console.log("fav")

                        inDiv2.innerHTML = `
                        <img class="d-block showsImg" src="${value.img}">
                           <div class="box-text w-100 "><br>
                               <h2 class="movie-title">${value.title}</h2>
                               <span class="movie-type">${value.type}</span>
                               <button class="btn like8" onclick="favourite(${value.id})">
       
       
                           <h2 class="heart${value.id}" style="color: red">&#10084;</h2>
                           </button><br>
                           </div><br><br><br>
                           <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                               class="showsBook btn-primary">Book
                               Now</button></a>
       
       
                               
                       `;
                    } else {
                        console.log(value.id)

                        inDiv2.innerHTML = `
                        <img class="d-block showsImg" src="${value.img}">
                           <div class="box-text w-100 "><br>
                               <h2 class="movie-title">${value.title}</h2>
                               <span class="movie-type">${value.type}</span>
                               <button class="btn like8" onclick="favourite(${value.id})">
       
       
                           <h2 class="heart${value.id}">&#9825;</h2>
                           </button><br>
                           </div><br><br><br>
                           <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                               class="showsBook btn-primary">Book
                               Now</button></a>
       
       
                               
                       `;
                    }
                    sec2.appendChild(inDiv2)
                    
                }

            }
                

        }   
        })

        let count=0
        let favouriteData2=JSON.parse(localStorage.getItem("favourite"))
if (count<=4) {
            favouriteData2.forEach(value=>{

                    
                
                    // if (a == 0) {

                    // a = 1
                    // count = count + 1
                    if (value.id==2 || value.id==3 || value.id==7 || value.id==10 || value.id==30 ||value.id==13 || value.id==11 ) {
                        console.log(value.id)
                        count = count + 1
                        //console.log(count)

                    $(`.heart${value.id}`).html("&#10084;");
                     $(`.heart${value.id}`).css("color", "red");
                    const inDiv1 = document.createElement("div")
                    inDiv1.className = `m${value.id} p-2 movieItems`
                    inDiv1.innerHTML = `
                    <img class="d-block showsImg" src="${value.img}">
                    <div class="box-text w-100 "><br>
                        <h2 class="movie-title">${value.title}</h2>
                        <span class="movie-type">${value.type}</span>
                    <br>
                </div><br><br>
                <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                        class="showsBook btn-primary">Book
                        Now</button></a>
                    
            `;
            ////console.log(a)
            favSec1.appendChild(inDiv1)
                }
                else{
                    //console.log(value.id)
                    count = count + 1
                    //console.log(count)
                    $(`.heart${value.id}`).html("&#10084;");
                     $(`.heart${value.id}`).css("color", "red");
                    const inDiv2 = document.createElement("div")
                    inDiv2.className = `m${value.id} p-2 movieItems`
                    inDiv2.innerHTML = `
                    <img class="d-block showsImg" src="${value.img}">
                    <div class="box-text w-100 "><br>
                        <h2 class="movie-title">${value.title}</h2>
                        <span class="movie-type">${value.type}</span>
                    <br>
                </div><br><br><br>
                <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                        class="showsBook btn-primary">Book
                        Now</button></a>


                
             `;
           // //console.log(a)
            favSec1.appendChild(inDiv2)
                
                }
            

    })
    ////console.log(id)
    }
    else if(count>4){
        const favSec2 = document.getElementById("MainDiv2")
    
        favouriteData2.forEach(value=>{
            
                // if (a == 0) {

                // a = 1
                // count = count + 1
                if (value.id==2 || value.id==3 || value.id==7 || value.id==10 || value.id==13 || value.id==30) {
                    //console.log(value.id)
                    count = count + 1
                    //console.log(count)

                $(`.heart${value.id}`).html("&#10084;");
                 $(`.heart${value.id}`).css("color", "red");
                const inDiv3 = document.createElement("div")
                inDiv3.className = `m${value.id} p-2 movieItems`
                inDiv3.innerHTML = `
                <img class="d-block showsImg" src="${value.img}">
                <div class="box-text w-100 "><br>
                    <h2 class="movie-title">${value.title}</h2>
                    <span class="movie-type">${value.type}</span>
                <br>
            </div><br><br>
            <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                    class="showsBook btn-primary">Book
                    Now</button></a>


                
        `;
        ////console.log(a)
        favSec2.appendChild(inDiv3)
            }
            else{
                //console.log(value.id)
                count = count + 1
                //console.log(count)
                 $(`.heart${value.id}`).html("&#10084;");
                 $(`.heart${value.id}`).css("color", "red");
                const inDiv4 = document.createElement("div")
                inDiv4.className = `m${value.id} p-2 movieItems`
                inDiv4.innerHTML = `
                <img class="d-block showsImg" src="${value.img}">
                <div class="box-text w-100 "><br>
                    <h2 class="movie-title">${value.title}</h2>
                    <span class="movie-type">${value.type}</span>
                <br>
            </div><br><br><br>
            <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
                    class="showsBook btn-primary">Book
                    Now</button></a>


            
        `;
       // //console.log(a)
        favSec2.appendChild(inDiv4)
            
            }
            // fav.push(id)
            //console.log(fav)
    
        

})
//console.log(id)
        
    }
    if (favouriteData2.length == 0) {
        //console.log(favouriteData2.length)
        // alert(count)
        // //console.log(count)
        $("#favInstruction").css("display", "block");


    }
    else {
        //console.log(favouriteData2.length)

        // alert(count)
        // //console.log(count)
        $("#favInstruction").css("display", "none");

    }

    
        }
    let home=JSON.parse(localStorage.getItem("HomeData"))
home.forEach(value=>{
    let homeText=document.getElementById('home-text')
    let h1=document.createElement('h1')
    h1.className="home-title"
    h1.id="homeTopic"
    h1.innerHTML=value.title
    homeText.appendChild(h1)
    let p=document.createElement('p')
    p.id="release"
    p.innerHTML=value.ReleaseDate
    homeText.appendChild(p)
    let a=document.createElement("a")
    a.href="#"
    a.className="watch-btn"
    a.innerHTML=`<i class='bx bx-right-arrow'></i>
    <span>Watch the trailer</span>`
    homeText.appendChild(a)
    $("#br1").css("display", "block");
    // homeText.appendChild("<br>")
    let a1=document.createElement('a')
    a1.href="Movie_Reservation\hitman\hitman_seats.html"
    a1.innerHTML=`<button class="hitmanBook btn-primary">Book Now</button>`
    homeText.appendChild(a1)
    $("#br2").css("display", "block");
    // homeText.appendChild("<br>")
    // homeText.appendChild("<br>")
    let btn=document.createElement('button')
    btn.className="btn SlideLike1"
    btn.setAttribute("onclick",`favourite(${value.id})`)
    btn.innerHTML= `<h2 class="heart${value.id} HomeLikeBtn">&#9825;</h2> `;
    homeText.appendChild(btn)
    let output=document.getElementById("home")
    let image=document.createElement('img')
    image.className="home-img"
    image.id="home-img"
    image.src=value.img
    image.alt="image not found"
    output.appendChild(image)
})

            
        // localStorage.setItem("MoviesData",JSON.stringify(z))

        

        
        // function favourite1() {
        //     let child1
        //     if (a == 0) {

        //         a = 1
        //         count = count + 1
        //         // alert("hi")
        //         $(".heart1").html("&#10084;");
        //         $(".heart1").css("color", "red");
        //         const inDiv1 = document.createElement("div")
        //         inDiv1.className = "m1 p-2 movieItems"
        //         inDiv1.innerHTML = `
        //             <img class="d-block showsImg" src="imgs_movies/img/movie-6.jpg">
        //             <div class="box-text w-100 "><br>
        //                 <h2 class="movie-title">Money-Heist</h2>
        //                 <span class="movie-type">Adventure</span>
        //                 <br>
        //             </div><br><br>
        //             <a href="Movie_Reservation/moneyHeist/MoneyHeist_seats.html"><button
        //                     class="showsBook btn-primary">Book
        //                     Now</button></a>


                
        //         `;
        //         sec1.appendChild(inDiv1)

        //     } else {
        //         a = 0
        //         count = count - 1
        //         $(".heart1").html("&#9825;");
        //         $(".heart1").css("color", "white");
        //         $(".m1").remove();

        //     }
        //     if (count == 0) {
        //         // alert(count)
        //         //console.log(count)
        //         $("#favInstruction").css("display", "block");


        //     }
        //     else if (count > 0) {
        //         // alert(count)
        //         //console.log(count)
        //         $("#favInstruction").css("display", "none");

        //     }

        // }
       