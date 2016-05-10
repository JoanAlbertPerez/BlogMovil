<?php echo validation_errors(); ?>
<div class="jumbotron formulario_create">
  <div class="container-fluid">
    <h1><?php echo $title; ?></h1>
    <form class="form-horizontal" role="form" method="post" action="<?php echo site_url("news/create") ?>">
      <div class="form-group">
        <div class="col-sm-offset-8 col-sm-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
          <input type="input" name="title" placeholder="Titulo"><br/>
        </div>
      </div>
      <div class="form-group">
        <textarea name="text" placeholder="Texto"></textarea><br/>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-8 col-sm-2 col-md-4 col-md-offset-4">
          <input type="submit" name="submit" value="Create new item">
        </div>
      </form>
    </div>
  </div>
</div>
