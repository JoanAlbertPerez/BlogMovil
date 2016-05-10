<div class="jumbotron formulario-login">
  <div class="container-fluid" id="log">
    <h1> Iniciar sesión </h1>
    <form class="form-horizontal" role="form" method="post" action="<?php echo site_url("users/iniciar_sesion_post") ?>">
      <div class="form-group">
        <div class="col-sm-offset-8 col-sm-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
          <input type="text" name="nombre" value="" placeholder="Nombre usuario" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-8 col-sm-2 col-md-4 col-md-offset-4">
          <input type="password" name="contrasena" value="" placeholder="Contraseña" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-8 col-sm-2 col-md-4 col-md-offset-4">
          <input type="submit" value="Iniciar sesión" />
        </div>
      </div>
    </form>
  </div>
</div>
