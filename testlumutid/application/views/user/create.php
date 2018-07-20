<h2 class="heading"><?=$title;?></h2>
 <?=$alert;?> 
<?=form_open_multipart($action, array());?>

	<div class="form-group">
		<label for="username">Username</label>
		<input autocomplete="off" required autofocus type="text" id="username" name="username" placeholder="username" value="<?=$query['username'];?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input autocomplete="off" required autofocus id="password" name="password" type="text" placeholder="password" class="form-control">
	</div>
  <div class="form-group">
    <label for="name">Nama</label>
    <input autocomplete="off" required autofocus type="text" id="name" name="name" placeholder="name" value="<?=$query['name'];?>" class="form-control">
  </div>
	<div class="form-group">
        <label for="role">Level User</label>
            <div>
               <?php
                $option = array(
                   ''	=>'- Pilih -',
                   'admin'   	=>'Admin',
                   'author'   =>'Author'
                    );
                echo form_dropdown('role', $option, $query['role'], " required class='form-control'");?>
             </div>
     </div>
	
	
	</br>
	<div class="form group">
		<button type="submit" class="btn btn-primary"><?=$button;?></button>
		<a href="<?=site_url('user');?>" class="btn btn-success">BACK</a>
	</div>
</form>