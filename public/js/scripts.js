window.onscroll = function() {
    navbar();
    topb();
}
window.onload = function()
{
    
    gettime();
    setInterval(function(){gettime()}, 1);
}
/*  top button  */

function topb() {
    let topbutton = document.querySelector("#top");

    if (document.body.scrollTop > height || document.documentElement.scrollTop > height)
        topbutton.style.display = "block";
    else
        topbutton.style.display = "none";
}

/*  Navbar stickness  */
function navbar() {
    if (window.pageYOffset > height) {
        nav.classList.add("sticky");
        managebar.style.marginTop=nav.offsetHeight;
    } else {
        nav.classList.remove("sticky");
        managebar.style.marginTop="0px";
    }                                                                                                      
}

function gettime(){
    const date=new Date();
    let day = date.getDay();
    let hour = date.getHours();
    let minute = date.getMinutes();
    let seconds = date.getSeconds();
    let time;
    if (minute<10) {
        time = hour + ":" + "0" + minute;
    }
    else{
        time = hour + ":" + minute;
    }
    let currTime = document.getElementById("crnt-time");
    let currDate = document.getElementById("date");
    if (currTime  == null)
    {
     return 0;  
    }
    let info = document.getElementById("office-state");
    currTime.innerHTML = "Aktuálny čas: "+time+":"+seconds;
    if (day == 2){
        if((hour >= 9) && (hour < 14)){
            info.innerHTML = "Otvorené";
            info.style.backgroundColor = "green";
        }
        else{
            info.innerHTML = "Zatvorené";
            info.style.backgroundColor = "red";
        }
    }
    else if(day == 3){
        if(hour >=8 && hour<12 && hour >=13  && hour <17){
            info.innerHTML = "Otvorené";
            info.style.backgroundColor = "green";
        }
        else{
            info.innerHTML = "Zatvorené";
            info.style.backgroundColor="red";
        }
    }
    else{
        info.innerHTML = "Zatvorené";
        info.style.backgroundColor="red";
    }
    if ((hour > 23 )&& (date.getMinutes >59) ) 
    {
        getDate();
    }

}

function getDate()
{
    const date=new Date();
    let month,day; 
    let year = date.getFullYear();
    let currDate = document.querySelector("#date");
    let months = ["Február","Marec","Apríl","Máj","Jún","Júl","August","September","Október","November","December","Január"];
    let days = ["Pondelok","Utorok","Streda","Štvrtok","Piatok","Sobota","Nedela"];
    for (let i = 0; i < date.getDay() ; i++) 
    {
        day = days[i];
    }

    for (let i = 0; i < date.getMonth() ; i++) 
    {
        month = months[i];
    }
    currDate.innerHTML = day +" "+ date.getDate()+". " + month + " "+ year; 
}

