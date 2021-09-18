<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container" style= "margin-top:150px;">
  
    <div class="table-responsive mt-2">
    <h1 style="text-align:center;"><b>Listar Peliculas<b></h1>
         <div id="botonNuevo">
            <form action="" method="POST">
                    <input type="text" name="busqueda" id="busqueda"  placeholder="buscar..."/>
                    <button type="submit" id="buscar"><i class="fas fa-search"></i>    Buscar</button>
            </form>
            <a href="index.php?c=pelicula&a=nuevo"> 
                <button type="button" id="nuevo"><i class="fas fa-plus"></i>    `Nuevo</button>
            </a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <th>Nombre</th>
            <th>Descripcion </th>
            <th>Genero </th>
            <th>Clasificacion por edad </th>
            <th>Duracion </th>
            <th>Estado </th>
            <th>Imagen </th>
            <th>Acciones </th>
            </thead>
            <tbody class="tabladatos">
                <?php 
                
                foreach ($resultados as $fila) {
                  ?>
                <tr>
                    <td><?php echo $fila['peli_nombre'];?></td>
                    <td><?php echo $fila['peli_descripcion'];?></td>
                    <td><?php echo $fila['gen_descripcion'];?></td>
                    <td><?php echo $fila['peli_clasificacion_edad'];?></td>
                    <td><?php echo $fila['peli_duracion'];?></td>
                    <td><?php echo $fila['peli_estado'];?></td>
                    <td><?php echo $fila['peli_imagen'];?></td>
                    <td><a class="btn btn-primary" id="btn-editar" href="index.php?c=pelicula&a=vistaEditar&id=<?php echo  $fila['peli_id']; ?>"><i class="fas fa-marker"></i></a>
                        <a class="btn btn-danger"  onclick="if(!confirm('Esta seguro de eliminar la pelicula?'))return false;"  href="index.php?c=pelicula&a=eliminar&id=<?php echo  $fila['peli_id']; ?>"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php  }?>
            </tbody>
        </table>
    </div>

</div>
<?php require_once 'views/partials/footer.php'; ?>
