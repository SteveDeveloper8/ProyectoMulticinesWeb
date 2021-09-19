function llenarGeneros(){
    var url = 'index.php?c=Pelicula&a=listarGeneros';
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var respuesta = xmlh.responseText;
            var objJson = JSON.parse(respuesta);
            resultados = '';
            console.log(objJson);
            resultados='<option selected="true" value="0">Seleccione..</option>'
            for (var i = 0; i < objJson.length; i++) {
                resultados += '<option value=' + objJson[i].gen_id + '>' + objJson[i].gen_descripcion + '</option>';
            }
            document.getElementById('genero').innerHTML = resultados;
        }
    };
}
function llenarProductos(){

}
function llenarTipos(){
    var url = 'index.php?c=Snack&a=listarTipos';
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var respuesta = xmlh.responseText;
            var objJson = JSON.parse(respuesta);
            resultados = '';
            console.log(objJson);
            resultados='<option selected="true" value="0">Seleccione..</option>'
            for (var i = 0; i < objJson.length; i++) {
                resultados += '<option value=' + objJson[i].tipo_id + '>' + objJson[i].descripcion + '</option>';
            }
            document.getElementById('tipo').innerHTML = resultados;
        }
    };
}
function llenarMenuTipos(){
    var url = 'index.php?c=Snack&a=listarTipos';
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var respuesta = xmlh.responseText;
            var objJson = JSON.parse(respuesta);
            resultados = '';
            console.log(objJson);
            for (var i = 0; i < objJson.length; i++) {
                resultados += '<div id="'+objJson[i].tipo_id+'" onclick="cargarProductos(this);">'+objJson[i].descripcion+'</div>';
            }
            document.getElementById('menu-tipos').innerHTML = resultados;
        }
    };
}
function cargarProductos(elemento) {
    //limpia los demás
    var encabezados=document.querySelectorAll(".bar-menu div");
    encabezados.forEach(element => {
        element.style.backgroundColor="gray";
    });
    // hacer la peticion
    elemento.style.backgroundColor="rgb(207, 27, 111)";
    
    var tipo=elemento.id;
    var url = 'index.php?c=Snack&a=listarProdxTipo&p='+tipo;
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    // leer la respuesta
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // obtener respuesta del servidor
            var respuesta = xmlh.responseText;
            var objJson = JSON.parse(respuesta);
            resultados = '';
            console.log(objJson);
            for (var i = 0; i < objJson.length; i++) {
                resultados += '<div class="'+objJson[i].prod_nombre+'"><img src="'+objJson[i].prod_dir_imagen+'" alt="'+objJson[i].prod_nombre+'"><p>'+objJson[i].prod_nombre+'</p><p><b>$'+objJson[i].prod_precio+'</b></p></div>';
            }
            document.getElementById('primera-seccion').innerHTML = resultados;
        }
    };
}
function cargarProductosIni() {
   
    // hacer la peticion
    //document.getElementById('Combos').style.backgroundColor="rgb(207, 27, 111)";
    
    var url = 'index.php?c=Snack&a=listarProdxTipo&p='+1;
    var xmlh = new XMLHttpRequest();
    xmlh.open('GET', url, true);
    xmlh.send();
    // leer la respuesta
    xmlh.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // obtener respuesta del servidor
            var respuesta = xmlh.responseText;
            var objJson = JSON.parse(respuesta);
            resultados = '';
            console.log(objJson);
            for (var i = 0; i < objJson.length; i++) {
                resultados += '<div class="'+objJson[i].prod_nombre+'"><img src="'+objJson[i].prod_dir_imagen+'" alt="'+objJson[i].prod_nombre+'"><p>'+objJson[i].prod_nombre+'</p><p><b>$'+objJson[i].prod_precio+'</b></p></div>';
            }
            document.getElementById('primera-seccion').innerHTML = resultados;
        }
    };
}
