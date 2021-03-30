<div class="container">
	<p style="margin-top: 1em"><a href="<?php echo base_url();?>berita/index">&#8592; kembali</a></p>
	<h2><?php echo $berita['judul'];?></h2>
	<small class="post-date"><?php echo $berita['tanggal'];?></small><br />
	<div style="text-align: center; margin-bottom: 20px;">
		<img style="width: 30%" src="http://bpslogistik.co.id/assets/images/<?php echo $berita['gambar'];?>">
	</div>
	<div class="post-body">
		<?php echo $berita['isi'];?>
	</div>
	<hr />
	<a class="btn btn-secondary" href="<?php echo base_url();?>edit/<?php echo $berita['id'];?>">Edit</a>
	<a class="btn btn-danger" href="<?php echo base_url();?>hapus/<?php echo $berita['id'];?>">Hapus</a>
</div>