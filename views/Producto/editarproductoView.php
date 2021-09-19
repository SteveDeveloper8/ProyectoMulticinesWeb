<?php require_once 'views/partials/encabezadoAdmin.php';  ?>

<div class="container" style= "margin-top:200px;">
    <div class="card card-body">
    <h1 style="text-align:center;"><b>Editar Producto<b></h1>
        <form enctype="multipart/form-data" action="index.php?c=Snack&a=editar" method="POST" name="formProductoNuevo" id="formProductoNuevo">
        <input type="hidden" name="id" id="id" value="<?php echo $snack['prod_id']; ?>"/>    
        <div class="form-row">
                
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $snack['prod_nombre'] ;?>" class="form-control" placeholder="nombre producto" required>
                </div>     

                <div class="form-group col-sm-12">
                    <label for="descripcion">Descripcion</label>
                    <textarea id="descripcion"   name="descripcion" class="form-control" rows="2"><?php echo $snack['prod_descripcion'] ;?></textarea>
                </div>
                <div class="form-group col-sm-6">
                    <label for="tipo">Tipo</label>
                    <select class="form-control" name="tipo" id="tipo" onfocus="llenarTipos();">
                    <option  selected="true" value="<?php echo $snack['tipo_id'] ;?>"><?php echo $snack['descripcion'] ;?></option>
                    </select>
                </div>  
                <div class="form-group col-sm-6">
                    <label for="descripcion">Clasificacion</label>
                    <input type="text" name="clasificacion" id="clasificacion" value="<?php echo $snack['prod_clasificacion'] ;?>" class="form-control" placeholder="clasificacion" required>
                </div>     
                <div class="form-group col-sm-6">
                    <label for="descripcion">Imagen</label>
                    <input type="file" name="image" id="image"  class="form-control">
                    <input type="hidden" name="imagen" id="imagen" value="<?php echo $peli['prod_dir_imagen']; ?>"/>
                </div>  
                <div class="form-group col-sm-6">
                    <label for="descripcion">precio</label>
                    <input type="number" step="0.01" name="precio" id="precio" value="<?php echo $snack['prod_precio'] ;?>" class="form-control" placeholder="precio" required>
                </div>  
                <div class="form-group col-sm-6">
                    <button type="submit" class="btn btn-primary" onclick="if (!confirm('Esta seguro de modificar el producto')) return false;" >Guardar</button>
                    <a href="index.php?c=snack&a=index" class="btn btn-primary">Cancelar</a>
                </div>
                <div class="form-group col-sm-6">
                    <input type="checkbox" id="estado" name="estado" value="<?php echo $snack['prod_estado'] ;?>" <?php echo ($snack['prod_estado'] == 1)?'checked="checked"':''; ?>>
                    <label for="estado">Activo</label>
                </div>
                
               
            </div>  
        </form>


    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/footer.php'; ?>
