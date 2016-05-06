<h2 class="titulo"><?php echo $title; ?></h2>
<div id="content">
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class="noticia">
<label for="title">Title</label>
<input type="input" name="title"><br/>

<label for="text">Text</label>
<textarea name="text"></textarea><br/>
<input type="submit" name="submit" value="Create new item">
</div>
</form>
</div>
