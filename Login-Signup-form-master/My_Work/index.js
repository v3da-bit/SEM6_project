        let a = 0
        let fav=[]
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
            },];
            // const favourite=document.getElementById("favourite")
            const favSec1 = document.getElementById("MainDiv1")
            // const favDiv=document.getElementById("favourite")
            let count=0
            function favourite(id) {
                //console.log(id)
                if (fav.includes(id)) {
                    // count=count-1
                    $(`.heart${id}`).html("&#9825;");
                    $(`.heart${id}`).css("color", "white");
                    $(`.m${id}`).remove();
                    let new1=[]

                    fav.forEach(val=>{
                        if (val!=id) {
                            new1.push(val)

                        }
                    })
                    count=count-1
                    fav=new1
                    console.log(count)
                    console.log(fav)


                }else{
                    if (count<=4) {
                        
                    
                    z.forEach(value=>{
                        if (value.id==id) {
                            // if (a == 0) {

                            // a = 1
                            // count = count + 1
                            if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                                count = count + 1
                                console.log(count)

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
                    //console.log(a)
                    favSec1.appendChild(inDiv1)
                        }
                        else{
                            count = count + 1
                            console.log(count)
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
                   // console.log(a)
                    favSec1.appendChild(inDiv2)
                        
                        }
                    }

            })
            //console.log(id)
            fav.push(id)
            console.log(fav)
            }
            else if(count>4){
                const favSec2 = document.getElementById("MainDiv2")
            
                z.forEach(value=>{
                    if (value.id==id) {
                        // if (a == 0) {

                        // a = 1
                        // count = count + 1
                        if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                            count = count + 1
                            console.log(count)

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
                //console.log(a)
                favSec2.appendChild(inDiv3)
                    }
                    else{
                        count = count + 1
                        console.log(count)
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
               // console.log(a)
                favSec2.appendChild(inDiv4)
                    
                    }
                }

        })
        console.log(id)
        fav.push(id)
        console.log(fav)
            }
                // alert("hi")
               
            // } else {
            //     a = 0
            //     console.log(a)
            //     count = count - 1
            
            // }
            


        }  
        if (fav.length == 0) {
            console.log(fav.length)
            // alert(count)
            // console.log(count)
            $("#favInstruction").css("display", "block");


        }
        else if (fav.length > 0) {
            // alert(count)
            // console.log(count)
            $("#favInstruction").css("display", "none");

        }
                     
                   
        }
                
            
        
        function loadData() {
            const sec1 = document.getElementById("movie-container1")

            const sec2 = document.getElementById("movie-container2")
            z.forEach(value => {
                // console.log(value.id)
                if (value.id<=5) {
                    console.log(value.id)
            
                if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                    
                
                const inDiv1 = document.createElement("div")
                inDiv1.className = "div1 p-2 movieItems"
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
                sec1.appendChild(inDiv1)
            }
            else{
                //console.log(value.id)
                const inDiv2 = document.createElement("div")
                inDiv2.className = "div2 p-2 movieItems"
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
                sec1.appendChild(inDiv2)
                
            }
                
                
            }else{
                console.log(value.title)
                if (value.id==2 || value.id==3 || value.id==7 || value.id==10) {
                    
                
                    const inDiv1 = document.createElement("div")
                    inDiv1.className = "div1 p-2 movieItems"
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
                    sec2.appendChild(inDiv1)
                }
                else{
                    //console.log(value.id)
                    const inDiv2 = document.createElement("div")
                    inDiv2.className = "div2 p-2 movieItems"
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
                    sec2.appendChild(inDiv2)
                    
                }

            }
                

            })
        }

        $("#searchIndex").click(function () {
            //alert("hi")
            $("#search-input").focus();

        });
        
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
        //         console.log(count)
        //         $("#favInstruction").css("display", "block");


        //     }
        //     else if (count > 0) {
        //         // alert(count)
        //         console.log(count)
        //         $("#favInstruction").css("display", "none");

        //     }

        // }
       