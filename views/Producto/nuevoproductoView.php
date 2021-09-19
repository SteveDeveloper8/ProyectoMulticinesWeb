<?php require_once 'views/partials/encabezadoAdmin.php';  ?>

<div class="container" style= "margin-top:200px;">
    <div class="card card-body">
    <h1 style="text-align:center;"><b>Agregar Producto<b></h1>
        <form enctype="multipart/form-data" action="index.php?c=Snack&a=agregar" method="POST" name="formProductoNuevo" id="formProductoNuevo">
            <div class="form-row">
                
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre producto" required>
                </div>     

                <div class="form-group col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion"  name="descripcion" class="form-control" rows="2"></textarea>
                </div>
                <div class="form-group col-sm-6">
                <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo" onfocus="llenarTipos();">
                    <option  selected="true" value="0">Seleccione..</option>
                    </select>
                </div>    
                <div class="form-group col-sm-6">
                    <label for="descripcion">Clasificacion</label>
                    <input type="text" name="clasificacion" id="clasificacion" class="form-control" placeholder="clasificacion" required>
                </div>     
                <div class="form-group col-sm-6">
                    <label for="imagen">Imagen</label>
                    <input type="file" name="image" id="image"  class="form-control">
                </div>  
                <div class="form-group col-sm-6">
                    <label for="descripcion">precio</label>
                    <input type="number" step="0.01" name="precio" id="precio" class="form-control" placeholder="precio" required>
                </div>  
              
                
                <div class="form-group col-sm-6">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="index.php?c=snack&a=agregar" class="btn btn-primary">Cancelar</a>
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

