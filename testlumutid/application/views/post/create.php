<h2 class="heading"><?=$title;?></h2>
 <?=$alert;?> 
<?=form_open_multipart($action, array());?>

	<div class="form-group">
		<label for="username">Title</label>
		<input autocomplete="off" required autofocus type="text" id="title" name="title" placeholder="title" value="<?=$query['title'];?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<textarea autocomplete="off" required autofocus id="content" name="content" class="form-control"><?=(set_value('content')) ? set_value('content') : $query['content']?></textarea>
	</div>
	
	</br>
	<div class="form group">
		<button type="submit" class="btn btn-primary"><?=$button;?></button>
		<a href="<?=site_url('post');?>" class="btn btn-success">BACK</a>
	</div>
</form>
