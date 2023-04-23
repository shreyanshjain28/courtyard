
//navbar = document.querySelector ('.header .section .nav_links');

 
//document.querySelector('.menu').onclick = () =>{

  //  navbar.ClassList.toggle('active');

/*const menuBtn = document.querySelector('.menu');
const navLinks = document.querySelector('.header .section .nav_links');
const logos = document.querySelector('.logos')

menuBtn.onclick = () => {
    console.log("button was clicked");
    navLinks.classList.toggle('active');
    

};      */


const profile = document.querySelector('.profile');
const profile_btn = document.querySelector('.profile_btn');

profile_btn.onclick = () => {
    console.log("button was clicked");
    profile.classList.toggle('active');
    

};


window.onscroll = () =>{
    navbar.classList.remove('active')
    profile.classList.remove('active')
}

