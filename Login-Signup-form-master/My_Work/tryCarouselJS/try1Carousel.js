let z = [{
    title: "Money-Heist",
    img: "../imgs_movies/img/movie-6.jpg",
    id: 1,
    type: "Adventure",
    
}, {
    title: "Johnny English:Strikes Again",
    img: "../imgs_movies/img/movie-8.jpg",
    id: 2,
    type: "Comedy"
}, {
    title: "SpiderMan: No Way Home",
    img: "../imgs_movies/img/popular-movie-1.jpg",
    id: 3,
    type: "Action,Marvel"
}, {
    title: "Jungle Cruise",
    img: "../imgs_movies/img/popular-movie-2.jpg",
    id: 4,
    type: "Adventure"
}, {
    title: "Loki",
    img: "../imgs_movies/img/popular-movie-3.jpg",
    id: 5,
    type: "Action,Marvel"
}, {
    title: "Squid Game",
    img: "../imgs_movies/img/popular-movie-4.jpg",
    id: 6,
    type: "Thrill,Adventure"
}, {
    title: "The Falcon And The Winter Soldier",
    img: "../imgs_movies/img/popular-movie-5.jpg",
    id: 7,
    type: "Marvel"
}, {
    title: "Hawkeye",
    img: "../imgs_movies/img/popular-movie-6.jpg",
    id: 8,
    type: "Marvel"
}, {
    title: "Agents Of S.H.I.E.L.D.",
    img: "../imgs_movies/img/popular-movie-7.jpg",
    id: 9,
    type: "Action,Marvel"
}, {
    title: "AVATAR: The Way Of Water",
    img: "../imgs_movies/img/avatar2.jpg",
    id: 10,
    type: "Adventure"
},{
    title: "Jumanji: Welcome To The Jungle",
    img: "../imgs_movies/img/movie-1.jpg",
    id: 11,
    type: "Adventure"
},{
    title: "Avengers: End Game",
    img: "../imgs_movies/img/avengersEndGame.jpg",
    id: 12,
    type: "Action,Marvel"
},{
    title: "Sang-Chi And The Legend Of Ten Rings",
    img: "../imgs_movies/img/movie-3.jpg",
    id: 13,
    type: "Action,Marvel"
},{
    title: "Eternels",
    img: "../imgs_movies/img/movie-4.jpg",
    id: 14,
    type: "Action"
},{
    title: "Spectre",
    img: "../imgs_movies/img/movie-5.jpg",
    id: 15,
    type: "Adventure"
},{
    title: "The Wolverine",
    img: "../imgs_movies/img/movie-7.jpg",
    id: 16,
    type: "Action"
},{
    title: "Justice League",
    img: "../imgs_movies/img/justice_league.jpg",
    id: 17,
    type: "Action"
},{
    title: "Fast X",
    img: "../imgs_movies/fastx.jpg",
    id: 18,
    type: "Adventure,Action"
}];
let i=0
let j=0
z.forEach(value=>{
    if (value.id>=11) {
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
