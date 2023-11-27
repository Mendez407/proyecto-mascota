window.addEventListener("load", function(){
    document.getElementById("logo").classList.toggle("logo2")

})

const click =document.querySelector(".contenedor_menu");
const icon=document.getElementById("menu");
function cambiar(){
    click.style.display="block"
    icon.style.display="none"
}
function mostrar(){
    click.style.display="none"
    icon.style.display="block"
}

window.addEventListener("click", function(){
    document.getElementById("menu").classList.toggle("menu_list2")

})



