<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container" style= "margin-top:150px;">
   
    <div class="table-responsive mt-2">
    <h1 style="text-align:center;"><b>Listar Productos<b></h1>
  
        <div id="botonNuevo">
            <form action="" method="POST">
                <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                <button type="submit"   id="buscar"><i class="fas fa-search"></i>Buscar</button>
            </form>
            <a href="index.php?c=snack&a=nuevo"> 
                <button type="button" id="nuevo" ><i class="fas fa-plus"></i> Nuevo</button>
            </a>       
        </div>

        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <th>Nombre</th>
            <th>Descripcion </th>
            <th>tipo </th>
            <th>Clasificacion </th>
            <th>Imagen</th>
            <th>precio </th>
            <th>Estado </th>
            <th>Acciones </th>
            </thead>
            <tbody class="tabladatos">
                <?php 
                
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['prod_nombre'];?></td>
                    <td><?php echo $fila['prod_descripcion'];?></td>
                    <td><?php echo $fila['prod_tipo_id'];?></td>
                    <td><?php echo $fila['prod_clasificacion'];?></td>
                    <td>
                        <img style="width:100px;height:160px;"src="<?php echo $fila['prod_dir_imagen'];?>" alt="poster">
                    </td>
                    <td><?php echo $fila['prod_precio'];?></td>
                    <td><?php echo $fila['prod_estado'];?></td>     
                    <td><a class="btn btn-primary" href="index.php?c=snack&a=vistaEditar&id=<?php echo  $fila['prod_id']; ?>"><i class="fas fa-marker"></i></a>
                        <a class="btn btn-danger" onclick="if(!confirm('Esta seguro de eliminar la pelicula?'))return false;"  href="index.php?c=snack&a=eliminar&id=<?php echo  $fila['prod_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once 'views/partials/footer.php'; ?>


