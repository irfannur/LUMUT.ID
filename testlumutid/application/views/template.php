<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title;?></title>

	<link href="<?=base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=base_url('asset/css/dataTables/dataTables.bootstrap4.min.css');?>">
	<link href="<?=base_url('asset/css/sidebar.css');?>" rel="stylesheet">
	<link href="<?=base_url('asset/css/style.css');?>" rel="stylesheet">
 </head>

<body>

	<?php $this->load->view('navhead');?>

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<?php $this->load->view($mainView);?>
	</main>

	</br></br>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="<?=base_url('asset/js/jquery-slim.min.js');?>"><\/script>')</script>
	<script src="<?=base_url('asset/js/popper.min.js');?>"></script>
	<script src="<?=base_url('asset/js/bootstrap.min.js');?>"></script>
	<script src="<?=base_url('asset/js/util.js');?>" type="text/javascript"></script>

	<!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <script src="<?=base_url('asset/js/plugins.library.js');?>" type="text/javascript"></script>		

	<script type="text/javascript" src="<?=base_url('asset/js/datatables/jquery.dataTables.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('asset/js/datatables/dataTables.bootstrap4.min.js');?>"></script>
	<script type="text/javascript">
	  $(document).ready( function () {
	      $('#table_id').DataTable();
	  } );
	</script>
	<script type="text/javascript">
	  $(document).ready( function () {
	      $('#table_nafar').DataTable();
	  } );
	</script>
</body>

</html>