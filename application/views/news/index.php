<div class="jumbotron">
  <h1><?php echo $title; ?></h1>
</div>
<div>
  <?php foreach ($news as $news_item): ?>

    <div class="jumbotron">
      <h3 id="title-entry"><?php echo $news_item['title']; ?></h3>
      <div class="container-fluid">
        <?php
        $sub = substr($news_item['text'], 0, 200);
         echo $sub."..."; ?>
      </div>
      <p class="element-entry"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
      <?php
      if ($this->session->userdata('logueado')) {?>
        <form class="element-entry" action="<?php echo site_url('news/delete'); ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $news_item['id'] ?>">
          <input type="submit" name="delete" value="delete">
        </form>
        <?php
      }
      ?>
    </div>
  <?php endforeach; ?>
</div>
