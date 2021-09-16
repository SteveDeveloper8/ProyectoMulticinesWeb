<!-- incluimos  Encabezado -->
<?php require_once 'views/partials/encabezado.php'; ?>

<div class="container" style="margin-top: 200px;">
    
    <div class="card card-body">
        <form action="index.php?c=login&a=autenticar" method="POST" name="formLogin" id="formLogin">
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="codigo">Usuario</label>
                    <input type="text"  name="user" id="codigo" class="form-control" placeholder="usuario" autofocus="" required/>
                </div>
                <div class="form-group col-sm-6">
                    <label for="nombre">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="clave" required>
                </div>

              <div class="form-group mx-auto">
                    <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                    <a href="index.php?c=producto&a=index" class="btn btn-primary">Cancelar</a>
                </div>
            </div>  
        </form>


    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/footer.php'; ?>