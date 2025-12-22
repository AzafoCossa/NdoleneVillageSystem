import "./bootstrap";
import flatpickr from "flatpickr";
import "flowbite";
import Swal from "sweetalert2";
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
});

window.Toast = Toast;

const menuToggle = document.querySelector("#menu-toggler");
const menuClose = document.querySelector("#menu-remover");
const menuCTA = document.querySelector("#menu-cta");

menuToggle.addEventListener("click", () => {
    const menu = document.querySelector("#nav-links");
    menu.classList.remove("hidden");
    menuCTA.classList.remove("hidden");
    menu.classList.add("flex");
    menuToggle.classList.add("hidden");
    menuClose.classList.remove("hidden");
});

menuClose.addEventListener("click", () => {
    const menu = document.querySelector("#nav-links");
    menu.classList.remove("flex");
    menu.classList.add("hidden");
    menuCTA.classList.add("hidden");
    menuToggle.classList.remove("hidden");
    menuClose.classList.add("hidden");
});
