<div class="container">
	<div class="row" style="margin-top: 1em;">
		<a href="<?php echo base_url();?>tambah" class="btn btn-primary">Tambah Berita</a>
	</div>
	<div class="row" style="margin-top: 1em;">
		<?php foreach($semua_berita as $berita):?>
			<h4><?php echo $berita['judul']?></h4>
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100%" src="http://bpslogistik.co.id/assets/images/<?php echo $berita['gambar']?>">
				</div>
				<div class="col-md-9">
					<small class="post-date">
						Posted on: <?php echo $berita['tanggal']?>
					</small>
					<br />
						<?php echo $berita['isi']?>
					<br /><br />
					<p><a class="btn btn-secondary" href="<?php echo base_url();?>berita/baca/<?php echo $berita['id']?>">Baca Selengkapnya</a></p>
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>