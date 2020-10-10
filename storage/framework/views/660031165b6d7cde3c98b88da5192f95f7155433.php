<?php $__env->startSection('content'); ?>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

	<script>
		$(document).ready( function () {
			$('#list-file').DataTable();
		} );
	</script>

	<body>
	  <br>
	  <br>
	  <br>
	  <br>
      <div class="container ">
		<h1> Selamat Datang di DropBix <?php echo e(Auth::user()->name); ?>! </h1>

		<br>
		<br>
		<div class ="col col-lg-8 ">
		<h3>Berikut adalah dokumen kamu telah upload</h3>
			<br>
		<br>
		 <table id="list-file" class="display">
			<thead>
			  <tr>
				<th>Nama File</th>
				<th>Tanggal Perubahan Terakhir</th>
				<th>Detail</th>
			  </tr>
			</thead>
			<tbody>
			<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
				<td><?php echo e($file->name); ?></td>
				<td><?php echo e($file->updated_at); ?></td>
				<td> <a href="<?php echo e(route(('detail-file'), $file->id)); ?>"><button type="submit">Detail</button></a></td>
			  </tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		  </table>

		</div>

	  </div>

	  <br>
	  <br>
	  <br>
	  <br>
	</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>