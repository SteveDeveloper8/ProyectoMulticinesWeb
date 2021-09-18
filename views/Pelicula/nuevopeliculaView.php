<?php require_once 'views/partials/encabezado.php'; ?>
<div class="container" style= "margin-top:200px;">
    <div class="card card-body">
    <h1 style="text-align:center;"><b>Agregar Pelicula<b></h1>
        <form action="index.php?c=Pelicula&a=agregar" method="POST" name="formPeliNuevo" id="formPeliNuevo">
            <div class="form-row">
                
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre pelicula" required>
                </div>     

                <div class="form-group col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion"  name="descripcion" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group col-sm-6">
                    <label for="genero">genero</label>
                    <input type="text" name="genero" id="genero" class="form-control" placeholder="genero" required>
                </div>     
                <div class="form-group col-sm-6">
                    <label for="clasificacion_edad">clasificacion por edad</label>
                    <input type="text" name="clasificacion_edad" id="clasificacion_edad" class="form-control" placeholder="clasifiacion_edad" required>
                </div>  
                <div class="form-group col-sm-6">
                    <label for="duracion">duracion</label>
                    <input type="text" name="duracion" id="duracion" class="form-control" placeholder="duracion" required>
                </div>  
               
                <div class="form-group col-sm-6">
                    <label for="imagen">imagen</label>
                    <input type="text" name="imagen" id="imagen" class="form-control" placeholder="imagen" required>
                </div> 
                <div class="form-group col-sm-6">
                    <button type="submit" id="btn-guarda" class="btn btn-primary">Guardar</button>
                    <a href="index.php?c=pelicula&a=agregar" id="btn-cancela" class="btn btn-primary">Cancelar</a>
                </div>
                <div class="form-group col-sm-6">
                    <input type="checkbox" id="estado" name="estado" >
                    <label for="estado">Activo</label>
                </div>
               
            </div>  
        </form>


    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/footer.php'; ?>
