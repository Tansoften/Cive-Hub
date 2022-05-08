
window.onload = function(){
    var navOptions = document.getElementsByClassName("nav-option");
    
    //These lines will make sure navigation options are collapsed on start
    navOptions[0].style.display = "none";//For users management navigations
    navOptions[1].style.display = "none";//For categories management navigations
    navOptions[2].style.display = "none";//For rooms management navigations
}

var addRoomsFormShow = true;

function changeAddRoomsForm(){
    var toggleAddRoomsBtn = document.getElementById("addrooms");
    var roomsNameLabel = document.getElementById("roomsNameLabel");
    var addRoomsForm = document.getElementById("addRoomsForm");

    //Transitions smoothness
    addRoomsForm.style.transition = "all 1s";
    addRoomsFormBody.style.transition = "all 1s";

    if(addRoomsFormShow){
        addRoomsForm.style.height = "6%";
        addRoomsFormBody.style.height = "0%";
        addRoomsFormTop.style.height = "0%";
        addRoomsForm.style.backgroundColor = "white";

        roomsNameLabel.style.opacity = "0";
    } else {
        addRoomsForm.style.height = "55%";
        addRoomsForm.style.backgroundColor = "#138086"
        addRoomsFormBody.style.height = "85%";
        addRoomsFormTop.style.height = "12%";
    }

    addRoomsFormShow = !addRoomsFormShow;
}

var navOptions = document.getElementsByClassName("nav-option");
var sideMenuShow = true;

function toggleSideMenu(){
    var sideNav = document.getElementById("side-nav");
    var navOptions = document.getElementsByClassName("nav-text");
    var sideIcons = document.getElementsByClassName("side-nav-icons");
    
    if(sideMenuShow){//When it's showing
        sideNav.style.transition = "width 2s";
        sideNav.style.width = 60+"px";
        navOptions[0].innerHTML = "...";
        navOptions[1].innerHTML = "...";
        navOptions[2].innerHTML = "...";
        navOptions[3].innerHTML = "...";
    }else{//When it's not showing
        sideNav.style.transition = "width 1s";
        sideNav.style.width = 15+"%";

        navOptions[0].innerHTML = "Home";
        navOptions[1].innerHTML = "Users";
        navOptions[2].innerHTML = "Categories";
        navOptions[3].innerHTML = "Rooms";
    }
    sideMenuShow = !sideMenuShow;
}

function users(){
    if(navOptions[0].style.display == "none"){
        navOptions[0].style.display = "block";
    } else {
        navOptions[0].style.display = "none";
    }
}

function categories(){
    
    if(navOptions[1].style.display == "none"){
        navOptions[1].style.display = "block";
    } else {
        navOptions[1].style.display = "none";
    }
}

function rooms(){
    
    if(navOptions[2].style.display == "none"){
        navOptions[2].style.display = "block";
    } else {
        navOptions[2].style.display = "none";
    }
}