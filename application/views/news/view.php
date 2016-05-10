<div id="content">
  <div class="noticia">
    <?php
    echo '<div class="jumbotron"><h2 id="title-entry">'.$news_item["title"].'</h2>';
    echo "<div class='container-fluid'>".$news_item['text'];
    ?>
    <?php
    if ($this->session->userdata('logueado')) {?>
      <form class="element-entry" action="<?php echo site_url('news/delete'); ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $news_item['id'] ?>">
        <input type="submit" name="delete" value="delete">
      </form>
      <?php
    }
    ?>
    </div></div>
  </div>
</div>
