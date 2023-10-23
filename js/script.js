let navbarDiv = document.querySelector('.navbar');
window.addEventListener('scroll', ()=>{
    if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
        navbarDiv.classList.add('navbar-cng');
    }
    else{
        navbarDiv.classList.remove('navbar-cng');
    }
});

const navbarColapseDiv = document.getElementById('navbar-collapse');
const navbarShownBtn = document.getElementById('navbar-show-btn');
const navbarCloseBtn = document.getElementById('navbar-close-btn');

//show navbar
navbarShownBtn.addEventListener('click', ()=>{
    navbarColapseDiv.classList.add('navbar-collapse-rmw');
});

//hide side bar
navbarCloseBtn.addEventListener('click',()=>{
    navbarColapseDiv.classList.remove('navbar-collapse-rmw');
});

document.addEventListener('click', (e) =>{
    if(e.target.id != "navbar-collapse" && e.target.id !="navbar-show-btn"
    && e.target.parentElement.id != "navbar-show-btn"){
        navbarColapseDiv.classList.remove('navbar-collapse-rmw');
    }
});

//stop transition and animation during window resizing

let resizizeTimer;
window.addEventListener('resize',()=>{
    document.body.classList.add("resize-animation-stopper");
    clearTimeout(resizizeTimer);
    resizizeTimer = setTimeout(()=>{
        document.body.classList.remove
        ("resize-animation-stopper");

    }, 400);
});

