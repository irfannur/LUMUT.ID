<h2 class="heading"><?=$title;?></h2>
 <?=$alert;?> 
<div class="pt-4 border-top"></div>
<a href="<?=site_url('user/create');?>" class="btn btn-success">Tambah</a>
<br></br>
<div class="pt-4 border-top"></div>


<div class="block-content">

<table id="table_id" class="table table-striped">
<thead class="thead-dark">
<tr>
	<td>No</td>
	<td>Username</td>
	<td>Level</td>
	<td>Action</td>
</tr>
</thead>

<tbody>

<?php $no = $this->uri->segment(3) + 1 ;
foreach ($query->result() as $isi) { ?>
	
<tr>
	<td><?=$no;?></td>
	<td><?=$isi->username;?></td>
	<td><?=$isi->role;?></td>
	<td>
		<a href="<?=site_url('user/update/'.$isi->ID);?>" class="btn btn-outline-primary btn-sm" >UPDATE</a>
		<a href="<?=site_url('user/delete/'.$isi->ID);?>" class="btn btn-outline-danger btn-sm" >DELETE</a>
	</td>
</tr>

<?php $no ++ ; }?>

</tbody>
</table>

</div>


</div>