let a = 0
let fav=[]
let child=[]
// use Reload to add movie
// value.id = 0-10,22-27 movieData
//value.id= 11-21 carousel data
//value.id= 28-30 home data
const sec1 = document.getElementById("movie-container1")
const sec2 = document.getElementById("movie-container2")
const sec3=document.getElementById("movie-container3")
    
let z = [{
        title: "Money-Heist",
        img: "imgs_movies/img/movie-6.jpg",
        id: 1,
        type: "Adventure",
        
    }, {
        title: "Johnny English:Strikes Again",
        img: "imgs_movies/img/movie-8.jpg",
        id: 2,
        type: "Comedy"
    }, {
        title: "SpiderMan: No Way Home",
        img: "imgs_movies/img/popular-movie-1.jpg",
        id: 3,
        type: "Action,Marvel"
    }, {
        title: "Jungle Cruise",
        img: "imgs_movies/img/popular-movie-2.jpg",
        id: 4,
        type: "Adventure"
    }, {
        title: "Loki",
        img: "imgs_movies/img/popular-movie-3.jpg",
        id: 5,
        type: "Action,Marvel"
    }, {
        title: "Squid Game",
        img: "imgs_movies/img/popular-movie-4.jpg",
        id: 6,
        type: "Thrill,Adventure"
    }, {
        title: "The Falcon And The Winter Soldier",
        img: "imgs_movies/img/popular-movie-5.jpg",
        id: 7,
        type: "Marvel"
    }, {
        title: "Hawkeye",
        img: "imgs_movies/img/popular-movie-6.jpg",
        id: 8,
        type: "Marvel"
    }, {
        title: "Agents Of S.H.I.E.L.D.",
        img: "imgs_movies/img/popular-movie-7.jpg",
        id: 9,
        type: "Action,Marvel"
    }, {
        title: "AVATAR: The Way Of Water",
        img: "imgs_movies/img/avatar2.jpg",
        id: 10,
        type: "Adventure"
    },{
        title: "Jumanji: Welcome To The Jungle",
        img: "imgs_movies/img/movie-1.jpg",
        id: 11,
        type: "Adventure"
    },{
        title: "Avengers: End Game",
        img: "imgs_movies/img/avengersEndGame.jpg",
        id: 12,
        type: "Action,Marvel"
    },{
        title: "Sang-Chi And The Legend Of Ten Rings",
        img: "imgs_movies/img/movie-3.jpg",
        id: 13,
        type: "Action,Marvel"
    },{
        title: "Eternels",
        img: "imgs_movies/img/movie-4.jpg",
        id: 14,
        type: "Action"
    },{
        title: "Spectre",
        img: "imgs_movies/img/movie-5.jpg",
        id: 15,
        type: "Adventure"
    },{
        title: "The Wolverine",
        img: "imgs_movies/img/movie-7.jpg",
        id: 16,
        type: "Action"
    },{
        title: "Justice League",
        img: "imgs_movies/img/justice_league.jpg",
        id: 17,
        type: "Action"
    },{
        title: "Fast X",
        img: "imgs_movies/fastx.jpg",
        id: 18,
        type: "Adventure,Action"
    },{
        title:"Hitman's wife's Bodyguard",
        img:"imgs_movies/img/movie-2.jpg",
        id:30,
        type:"Action"
    }];
let HomeData=[{
    id:30,
    title:"Hitman's <br> wife's<br>Bodyguard",
    ReleaseDate:"Releasing 10 April",
    img:"imgs_movies/img/home-background.png"
}]
// localStorage.setItem("MoviesData",JSON.stringify(z)) //imp To change localStorage Data
localStorage.setItem("HomeData",JSON.stringify(HomeData)) //imp To change localStorage Data

    // const favourite=document.getElementById("favourite")
    const favSec1 = document.getElementById("MainDiv1")
    // const favDiv=document.getElementById("favourite")
    let count=0
$("#searchIndex").click(function () {
    //alert("hi")
    $("#search-input").focus();

});

// let common=[]
// z.forEach(value=>{
//     common.push(value.id)
// })
// localStorage.setItem("ArrayMovie",JSON.stringify(common))

const addInSlideMovie=()=>{
    
    $("#carouselMovie").css("position", "relative");

    $("#carouselMovie").css("visibility", "visible");
    $("#closeMsgBox2").click(function () { 
        $("#carouselMovie").css("visibility", "hidden");
        $("#carouselMovie").css("position", "absolute");
        
    });

}   
const addMovie=()=>{
    $("#messageMovie").css("visibility", "visible");
    $("#closeMsgBox1").click(function () { 
        $("#messageMovie").css("visibility", "hidden");
        
    });
}

const deleteMovie=()=>{
    
    $(".delete").css("visibility", "visible");

}
let slide=[]
z.forEach(value=>{
    slide.push(value.id)
})

Array.prototype.remove = function(index) {
    this.splice(index, 1);
}

function deleteInSlide(id){
    console.log(id)
    
    // let changeInSlide=[]
    let n=id
    $(`.c${n}`).removeClass("active");
    $(`.c${n}`).remove();
    for(let i=11;i<=18;i++){
        if($('.imgDiv').hasClass(`c${i}`)){
            console.log($('.imgDiv').hasClass(`c${i}`))
            id=i
            console.log(id+"yep")
            break;
            
        }
    }
    console.log(n+"yoo")
    $(`.c${id}`).addClass("active");
    // let slide=JSON.parse(localStorage.getItem("ArrayMovie"))
    let slideMovie=JSON.parse(localStorage.getItem("MoviesData"))
    let a=[]
    slide.forEach(value=>{
        if(value==n){
            // console.log(value)
            slide.remove(n-1)
        }
    })
    slideMovie.forEach(value=>{
        if (value.id!=n) {
            // slideMovie.remove(value)
            a.push(value)
            console.log(value)
        }

    })
    console.log(slide)
    localStorage.setItem("ArrayMovie",JSON.stringify(slide))
    localStorage.setItem("MoviesData",JSON.stringify(a))


    // z.forEach(value=>{
    //         if(value.id!=n)
    //         // slide.push(value.id)
    //         changeInSlide.push(value)
    //     })
        // console.log(changeInSlide)
        


        

    
}
let counter=0
console.log(z)
// let normal=[]
// z.forEach(value=>{
//     normal.push(value.id)
// })

function movieRemove(id){
    console.log(id)
    $(`.d${id}`).remove();
    // let changed=[]
    // z.forEach(value=>{
    //     if(value.id!=id)
    //     // normal.push(value.id)
    //     changed.push(value)
    // })
    // let normal=JSON.parse(localStorage.getItem("ArrayMovie"))
    let normalMovie=JSON.parse(localStorage.getItem("MoviesData"))
    let b=[]
    console.log(normalMovie)
    normalMovie.forEach(value=>{
        if(value.id!=id) {
            // slideMovie.remove(value)
            b.push(value)
            console.log(value)
        }
    })
    // localStorage.setItem("ArrayMovie",JSON.stringify(normal))
    localStorage.setItem("MoviesData",JSON.stringify(b))



    
}


const hideBtn=()=>{
    
    $(".delete").css("visibility", "hidden");

}

const deleteInSlideMovie=()=>{
    $(".deleteInSlide").css("visibility", "visible");

}
const hideInSlideBtn=()=>{
    $(".deleteInSlide").css("visibility", "hidden");
}
      
    

function loadData() {
let i=0
let j=0
let carouselData=JSON.parse(localStorage.getItem("MoviesData"))
carouselData.forEach(value=>{
    if (value.id>=11 && value.id<=21) {
        const ol=document.getElementById("carousel-indicator")
        if (i==0) {
            console.log(i)
            const li=document.createElement("li")
            li.className=`c${value.id}`
            li.setAttribute("data-target","#carouselExampleIndicators")
            li.setAttribute("data-slide-to",`${i}`)
            li.innerHTML=""
            // `<li data-target="#carouselExampleIndicators" class="c${value.id}"  data-slide-to="${i}" class="active"></li>`
            ol.appendChild(li)
            i=i+1
        }else{
            console.log(i)
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

            indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            </span>


            <button class="btn book deleteInSlide" onclick="deleteInSlide(${value.id})"
                style=" background-color: transparent; color: red;">
                <h3><i class="fa-solid fa-circle-minus"></i></h3>
            </button>

        </div>`
        outDiv.appendChild(indiv)

            j=j+1
            
        }else{

            const outDiv=document.getElementById("outDiv")
            const indiv=document.createElement("div")
            indiv.className=`carousel-item imgDiv movie-box c${value.id}`

            indiv.innerHTML=`<img class="d-block h-100 w-100 movie-box imgBlock" src="${value.img}"
            alt="First slide">
        <div class=" box-text h-25 w-100 ">
            <h2 class="movie-title">${value.title}</h2>
            <span class="movie-type">${value.type}
            
            </span>


            <button class="btn book deleteInSlide" onclick="deleteInSlide(${value.id})"
                style=" background-color: transparent; color: red;">
                <h3><i class="fa-solid fa-circle-minus"></i></h3>
            </button>

        </div>`
        outDiv.appendChild(indiv)

            j=j+1
           
        }
        
    }
})

    let MovieData= JSON.parse(localStorage.getItem("MoviesData"))
            
    let counter=0
    MovieData.forEach(value => {
        if(value.id<=10 || (value.id>=22 && value.id<=27)){
        // console.log(value.id)
        if ( counter<=4) {
            counter=counter+1
            console.log(value.id)
    
        if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
            
        
        const inDiv1 = document.createElement("div")
        inDiv1.className = `div1 d${value.id} p-2 movieItems`
        inDiv1.innerHTML = `
         <img class="d-block showsImg" src="${value.img}">
            <div class="box-text w-100 "><br>
                <h2 class="movie-title">${value.title}</h2>
                <span class="movie-type">${value.type}</span><br>
                <button class="btn delete ${value.id}" onclick="movieRemove(${value.id})" style=" background-color: transparent; color: red;">
                                <h4><i class="fa-solid fa-circle-minus"></i></h4>
                             </button>
                            <br>
            </div>

                
        `;
        child.push({inDiv1})
        sec1.appendChild(inDiv1)
    }
    else{
        //console.log(value.id)
        const inDiv2 = document.createElement("div")
        inDiv2.className = `div2 d${value.id} p-2 movieItems`
        inDiv2.innerHTML = `
         <img class="d-block showsImg" src="${value.img}">
            <div class="box-text w-100 "><br>
                <h2 class="movie-title">${value.title}</h2>
                <span class="movie-type">${value.type}</span><br>
                <button class="btn delete ${value.id}" onclick="movieRemove(${value.id})" style=" background-color: transparent; color: red;">
                                <h4><i class="fa-solid fa-circle-minus"></i></h4>
                             </button>
                            <br>
            </div>

                
        `;
        child.push({inDiv2})
        sec1.appendChild(inDiv2)
        
    }
    
        
        
        }else if(counter>4 && counter<=9){
        counter=counter+1
        console.log(value.title)
        if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
            
        
            const inDiv1 = document.createElement("div")
            inDiv1.className = `div1 d${value.id} p-2 movieItems`
            inDiv1.innerHTML = `
             <img class="d-block showsImg" src="${value.img}">
                <div class="box-text w-100 "><br>
                    <h2 class="movie-title">${value.title}</h2>
                    <span class="movie-type">${value.type}</span><br>
                    <button class="btn delete ${value.id}" onclick="movieRemove(${value.id})" style=" background-color: transparent; color: red;">
                                <h4><i class="fa-solid fa-circle-minus"></i></h4>
                             </button>
                            <br>
                </div>

                    
            `;
            child.push({inDiv1})
            sec2.appendChild(inDiv1)
        }
        else{
            //console.log(value.id)
            const inDiv2 = document.createElement("div")
            inDiv2.className = `div2 d${value.id} p-2 movieItems`
            inDiv2.innerHTML = `
             <img class="d-block showsImg" src="${value.img}">
                <div class="box-text w-100 "><br>
                    <h2 class="movie-title">${value.title}</h2>
                    <span class="movie-type">${value.type}</span><br>
                    <button class="btn delete " onclick="movieRemove(${value.id})" style=" background-color: transparent; color: red;">
                                <h4><i class="fa-solid fa-circle-minus"></i></h4>
                             </button>
                    
                            <br>
                </div>

                    
            `;
            child.push({inDiv2})
            sec2.appendChild(inDiv2)
            
        }

        }else{
        counter=counter+1
        const inDiv3 = document.createElement("div")
        inDiv3.className = `div2 d${value.id} p-2 movieItems`
        inDiv3.innerHTML = `
         <img class="d-block showsImg" src="${value.img}">
            <div class="box-text w-100 "><br>
                <h2 class="movie-title">${value.title}</h2>
                <span class="movie-type">${value.type}</span><br>
                <button class="btn delete " onclick="movieRemove(${value.id})" style=" background-color: transparent; color: red;">
                            <h4><i class="fa-solid fa-circle-minus"></i></h4>
                         </button>
                
                        <br>
            </div>

                
        `;
        child.push({inDiv3})
        sec3.appendChild(inDiv3)
       
        }
        

}   
})
}
function selection(){
const option=document.getElementById("seatsReservation")
const valueOpt=option.options[option.selectedIndex].value
console.log(valueOpt)
if(valueOpt==`m1`){
    window.location="Admin_movie_reservation/moneyHeist/MoneyHeist_seats.html";
}

//console.log(child)
}

const editHome=()=>{
    $("#messagehome").css("visibility", "visible");
    $("#closeMsgBox").click(function () { 
        
    $("#messagehome").css("visibility", "hidden");

    });
    


}
let Hdata=HomeData
const insertData=()=>{
    // console.log()
    let Mid=document.getElementById("Mid").value
    let movieName=document.getElementById("MovieName").value
    let releaseDate=document.getElementById("releaseDate").value
    // let HomeImage=document.getElementById("HomeImg").value
    console.log("insertData hi"+Mid+movieName+releaseDate)
    
        // title:movieName,
        // ReleaseDate:releaseDate,
    
        // Hdata.push(title=movieName)
        // Hdata.push(ReleaseDate=releaseDate)
        // console.log(Hdata)
        if(Mid=="" && movieName=="" && releaseDate==""){
            alert("not empty")
        }
    else{
        Hdata.forEach(value=>{
            document.getElementById("homeTopic").innerHTML=movieName
            document.getElementById("release").innerHTML=releaseDate        
            value.id=Mid,
            value.title=movieName,
            value.ReleaseDate=releaseDate
        })
        localStorage.setItem("HomeData",JSON.stringify(Hdata))

        $("#messagehome").css("visibility", "visible");
    
    }

    
    // let p=document.getElementById("outputV")
    // console.log(movieName+" "+releaseDate+" "+HomeImage)
    
}
let carouselImg
const carouselInsert=()=>{
    C_Data=JSON.parse(localStorage.getItem("MoviesData"))
    let Mid=document.getElementById("Mid2").value
    let movieName=document.getElementById("MovieName2").value
    let movieType=document.getElementById("MovieType2").value
    if(Mid=="" && movieName==""){
        alert("not empty")
    }
    else{
        
        // document.getElementsByClassName("movie-title").innerHTML=movieName
        // document.getElementById("movie-type").innerHTML=movieType      
        C_Data.push({
        id:Mid,
        img: carouselImg,
        title:movieName,
        type:movieType
    })
    console.log(C_Data)
    localStorage.setItem("MoviesData",JSON.stringify(C_Data))
    location.reload();

    $("#carouselMovie").css("visibility", "visible");

}
    

}

let image
const movieInsert=()=>{
    M_Data=JSON.parse(localStorage.getItem("MoviesData"))
    let Mid=document.getElementById("Mid1").value
    let movieName=document.getElementById("MovieName1").value
    let movieType=document.getElementById("MovieType1").value
    if(Mid=="" && movieName==""){
        alert("not empty")
    }
    else{
        
        // document.getElementsByClassName("movie-title").innerHTML=movieName
        // document.getElementById("movie-type").innerHTML=movieType      
        M_Data.push({
        id:Mid,
        img: image,
        title:movieName,
        type:movieType
    })
    console.log(M_Data)
    localStorage.setItem("MoviesData",JSON.stringify(M_Data))
    location.reload();

    $("#carouselMovie").css("visibility", "visible");

}
    

}
$("#carouselImg").change(function (e) {
    if (window.File && window.FileReader && window.FileList) {
        console.log("hi")
        var files = e.target.files;
        // console.log(files)
        // $("#movieImg").remove();
        // const output = document.querySelector("#home")
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

                // output.innerHTML = `<div style='background-image:url("${picFile.result}");' class="user-img"  id="UserImg" name="UIMG"></div>`
                //src="${picFile.result}" title=${picFile.name}
                // output.appendChild(div)
                // document.getElementById("drop").appendChild(dragDiv)
                // a = a + 1;
                //console.log(a + " in this")
                //div=document.getElementById("show").innerHTML=`<img class="op" src="${picFile.result}">`
                // const data = picFile.result
              carouselImg=picFile.result
               
            });
            // document.cookie='selected_item='+picFile.result;

            picReader.readAsDataURL(files[i])

        }
        
    }
})


$("#movieImg").change(function (e) {
    if (window.File && window.FileReader && window.FileList) {
        console.log("hi")
        var files = e.target.files;
        // console.log(files)
        // $("#movieImg").remove();
        const output = document.querySelector("#home")
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

                // output.innerHTML = `<div style='background-image:url("${picFile.result}");' class="user-img"  id="UserImg" name="UIMG"></div>`
                //src="${picFile.result}" title=${picFile.name}
                // output.appendChild(div)
                // document.getElementById("drop").appendChild(dragDiv)
                // a = a + 1;
                //console.log(a + " in this")
                //div=document.getElementById("show").innerHTML=`<img class="op" src="${picFile.result}">`
                // const data = picFile.result
              image=picFile.result
               
            });
            // document.cookie='selected_item='+picFile.result;

            picReader.readAsDataURL(files[i])

        }
        
    }
})


$("#homeImg").change(function (e) { //outer fun
    // $("#Submit").css("visibility", "visible");
    console.log(e)
    // alert("hi")
    // $("#home-img").remove();



    
    if (window.File && window.FileReader && window.FileList) {
        console.log("hi")
        var files = e.target.files;
        // console.log(files)
        $("#home-img").remove();
        const output = document.querySelector("#home")
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

                // output.innerHTML = `<div style='background-image:url("${picFile.result}");' class="user-img"  id="UserImg" name="UIMG"></div>`
                //src="${picFile.result}" title=${picFile.name}
                // output.appendChild(div)
                // document.getElementById("drop").appendChild(dragDiv)
                // a = a + 1;
                //console.log(a + " in this")
                //div=document.getElementById("show").innerHTML=`<img class="op" src="${picFile.result}">`
                // const data = picFile.result
               let img=document.createElement("img")
               img.className="home-img"
               img.id="home-img"
               img.src=`${picFile.result}`
               img.alt="image not found"
               output.appendChild(img)
            //    Hdata.push(img=picFile.result)
            Hdata.forEach(value=>{
                value.img=picFile.result
            })
               
            });
            // document.cookie='selected_item='+picFile.result;

            picReader.readAsDataURL(files[i])

        }

    }

})
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
    let btn=document.createElement('button')
    btn.className="btn hitmanBook btn-light"
    btn.id="editHome"
    btn.setAttribute("onclick","editHome()")
    btn.innerHTML= `<i class="fa-solid fa-pen-to-square"></i>Edit
`;
homeText.appendChild(btn)
let output=document.getElementById("home")
let image=document.createElement('img')
image.className="home-img"
image.id="home-img"
image.src=value.img
image.alt="image not found"
output.appendChild(image)
})

        // p.innerHTML=movieName

    



