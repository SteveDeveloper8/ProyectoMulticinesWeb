<!-- incluimos  Encabezado -->
<?php require_once 'views/partials/encabezado.php'; ?>
<div style="text-align:center;">
<h1 style="text-align:center; margin-top:170px; display:inline-block;"><b>Login<b></h1>
</div>

<div class="container">

    <div class="card card-body">
 
        <form action="index.php?c=sesion&a=autenticar" method="POST" name="formLogin" id="formLogin">
            <div style=" display: flex;   flex-direction: column; justify-content: center; align-items:center;">
                <div style="width:30%;">
                    <label for="codigo">Corrreo</label>
                    <input type="text"  name="user" id="codigo" class="form-control" placeholder="usuario" autofocus="" required/>
                </div>
                <div style="width:30%; margin-top:10px;">
                    <label for="nombre">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="clave" required>
                </div>

    
                    <button type="submit" style="margin-bottom:10px; margin-top:25px;" class="btn btn-primary">Iniciar sesion</button>
                    <a href="index.php?c=producto&a=index" class="btn btn-primary">Cancelar</a>
           
            </div>  
        </form>


    </div>
</div>

<!-- incluimos  pie de pagina -->
<?php require_once 'views/partials/footer.php'; ?>