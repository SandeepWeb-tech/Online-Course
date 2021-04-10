var addcourse = document.getElementById("add-course");
var viewcourse = document.getElementById("view-courses");
var home = document.getElementById("home");
var about = document.getElementById("about");
var contact = document.getElementById("contact");


function getAdd(){
    addcourse.style.display= "block";
    home.style.display = "none";
    viewcourse.style.display = "none";
    about.style.display = "none";
    contact.style.display = "none";
}
function getView(){
    addcourse.style.display= "none";
    home.style.display = "none";
    viewcourse.style.display = "block";
    about.style.display = "none";
    contact.style.display = "none";

}
function getContact(){
    addcourse.style.display= "none";
    home.style.display = "none";
    viewcourse.style.display = "none";
    about.style.display = "none";
    contact.style.display = "block";

}
function getHome(){
    addcourse.style.display= "none";
    home.style.display = "block";
    viewcourse.style.display = "none";
    about.style.display = "none";
    contact.style.display = "none";
}
function getAbout(){
    addcourse.style.display= "none";
    home.style.display = "none";
    viewcourse.style.display = "none";
    about.style.display = "block";
    contact.style.display = "none";
}