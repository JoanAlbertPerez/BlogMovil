<div class="jumbotron">
  <div class="container">
    <table id="datatable" class="display" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Texto</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <?php foreach ($news as $new): ?>
        <tr>
          <td>
            <?php echo $new['id']; ?>
          </td>
          <td>
            <?php echo $new['title']; ?>
          </td>
          <td>
            <?php $sub = substr($new['text'], 0, 20); echo $sub; ?>
          </td>
          <td>
            <form class="element-entry" action="<?php echo site_url('News/delete_datatable'); ?>" method="post">
              <input type="hidden" name="id" value="<?php echo $new['id'] ?>">
              <input type="submit" name="delete" value="delete">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>

      <tfoot>
        <tr>
          <th>ID</th>
          <th>Titulo</th>
          <th>Texto</th>
          <th>Borrar</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
