/**
 * 
 * 
 * Menu Burger
 * 
 * 
 */
const open = document.getElementById("open");         //1element//
const burger = document.getElementById("burger");     //2element//
const ul = document.querySelector("ul");              //3element//

open.addEventListener("click", function(event) {
    event.preventDefault()
    ul.classList.toggle("open")
});
