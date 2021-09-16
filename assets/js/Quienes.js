function seleccionLugar(encabezado)
{
    limpiarMenus2();
    encabezado.style.backgroundColor="rgb(35, 153, 207)";
    limpiarSeleccion2();
    lugarSeleccionado(encabezado.id);
}
function lugarSeleccionado(id)
{
    var seccion=document.getElementsByClassName(id)[0]; 
    seccion.style.display="flex";
    seccion.style.visibility="visible";
}
function limpiarSeleccion2()
{
    var secciones=document.querySelectorAll(".seleccionLugar")
    secciones.forEach(element => {
        element.style.display="none";
        element.style.visibility="hidden";
    });
}
function limpiarMenus2()
{
    var encabezados=document.querySelectorAll(".Locaciones div");
    encabezados.forEach(element => {
        element.style.backgroundColor="gray";
    });
}