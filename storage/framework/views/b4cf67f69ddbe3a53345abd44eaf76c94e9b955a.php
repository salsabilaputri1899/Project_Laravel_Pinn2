<?php $__env->startSection('content'); ?>



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
		<h3>Berikut adalah Detail Dokumen Tugas Skripsi</h3>
			<br>
		<br>
		<form id="form-add-course" role="form" method="post" action="<?php echo e(route('update')); ?>" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo e($file->id); ?>">
			<?php echo e(csrf_field()); ?>


		  <div class="form-group">
			<label for="exampleInputEmail1">Nama File</label>
			<input type="text" class="form-control" placeholder="Masukkan nama file" name="nama_file" value = "<?php echo e($file->name); ?>">
		  </div>
		  <p>Tanggal Perubahan Terakhir: "<?php echo e($file->updated_at); ?>" </p>
			<p>Download File: <a href="<?php echo e(URL::asset('file/'.$file->url)); ?>" target="_blank"><?php echo e($file->name); ?></a> </p>

         <section class="jumbotron text-center">
			<div class="container">


				<div class="file-upload-wrapper" data-text="Pilih File Kamu!">
				  <input name="file" type="file" class="file-upload-field" value="">
				</div>

			</div>
		 </section>
		 <button type="submit" id="buttonUpload" name="submit" value="update" class="btn btn-warning">Update</button>
		 <button type="submit" id="buttonUpload" name="submit" value="delete" class="btn btn-danger">Delete</button>

		</form>
		</div>

	  </div>

	  <br>
	  <br>
	  <br>
	  <br>
	</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>