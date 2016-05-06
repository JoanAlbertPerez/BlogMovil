<h1 class="titulo"><?php echo $title; ?></h1>
<div id="content">
<?php foreach ($news as $news_item): ?>

  <div class="noticia">
    <h3><?php echo $news_item['title']; ?></h3>
    <div class="main">
      <?php echo $news_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>
  </div>
<?php endforeach; ?>
</div>
