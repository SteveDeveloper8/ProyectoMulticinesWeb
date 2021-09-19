<?php require_once 'views/partials/encabezado.php';
?>

<div class="container" style="margin-top: 200px;">
    <div class="card card-body">
        <form enctype="multipart/form-data" action="index.php?c=Pelicula&a=editar" method="POST" name="formPeliNuevo" id="formPeliNuevo">
        <h1 style="text-align:center;"><b>Editar Pelicula<b></h1>
            <input type="hidden" name="id" id="id" value="<?php echo $peli['peli_id']; ?>"/>
            <div class="form-row">
                
                <div class="form-group col-sm-6">
                    
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $peli['peli_nombre'] ;?>"  class="form-control">
                </div>     

                <div class="form-group col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion"  name="descripcion" class="form-control" rows="2"><?php echo $peli['peli_descripcion'] ;?></textarea>
                </div>
                <div class="form-group col-sm-6">
                    <label for="genero">Género</label>
                    <select class="form-control" name="genero" id="genero" onfocus="llenarGeneros();">
                    <option  selected="true" value="<?php echo $peli['gen_id'] ;?>"><?php echo $peli['gen_descripcion'] ;?></option>
                    </select>
                </div>     
                <div class="form-group col-sm-6">
                    <label for="descripcion">clasificacion por edad</label>
                    <input type="text" name="clasificacion_edad" id="clasificacion_edad" value="<?php echo $peli['peli_clasificacion_edad'] ;?>" class="form-control" placeholder="clasifiacion_edad" required>
                </div>  
                <div class="form-group col-sm-6">
                    <label for="descripcion">duracion</label>
                    <input type="text" name="duracion" id="duracion" value="<?php echo $peli['peli_duracion'] ;?>"  class="form-control" placeholder="duracion" required>
                </div>  
        
                <div class="form-group col-sm-6">
                    <label for="descripcion">imagen</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <input type="hidden" name="imagen" id="imagen" value="<?php echo $peli['peli_imagen']; ?>"/>
                </div> 
                <div class="form-group col-sm-6">
                    <button type="submit" id="btn-guarda" class="btn btn-primary" onclick="if (!confirm('Esta seguro de modificar el productos')) return false;" >Guardar</button>
                    <a href="index.php?c=pelicula&a=index" id="btn-cancela" class="btn btn-primary">Cancelar</a>
                </div>
                <div class="form-group col-sm-6">
                    <input type="checkbox" id="estado" name="estado" value="<?php echo $peli['peli_estado'] ;?>" <?php echo ($peli['peli_estado'] == 1)?'checked="checked"':''; ?>>
                    <label for="estado">Activo</label>
                </div>
                    
            </div>  
        </form>
    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/footer.php'; ?>
