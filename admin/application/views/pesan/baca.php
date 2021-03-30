<div class="container">
  <div class="row">
    <div class="col-lg-4" style="margin-top: 1em;">
      <ul class="list-group">
        <a href="<?php echo base_url();?>pesan_belum_terbaca">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Pesan belum terbaca
            <span class="badge badge-danger badge-pill"><?php echo $jumlah_pesan_belum_terbaca;?></span>
          </li>
        </a>
      </ul>
    </div>
    <div class="col-lg-4" style="margin-top: 1em;">
      <ul class="list-group">
        <a href="<?php echo base_url();?>semua_pesan">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Semua pesan
            <span class="badge badge-success badge-pill"><?php echo $jumlah_semua_pesan;?></span>
          </li>
        </a>
      </ul>
    </div>
  </div>

  <div class="row" style="margin-top: 1em; border-bottom: 1px solid black">
    <div class="col-lg-6">
      <h3><?php echo $pesan['nama_perusahaan']?></h3>
    </div>
    <div class="col-lg-6">
      <p class="float-right"><?php echo $pesan['alamat_perusahaan']?></p>
    </div>
    <div class="col-lg-8">
      <h5><?php echo $pesan['nama']?></h5>
    </div>
    <div class="col-lg-2">
      <p class="float-right"><?php echo $pesan['no_telepon']?></p>
    </div>
    <div class="col-lg-2">
      <p class="float-right"><?php echo $pesan['email']?></p>
    </div>
  </div>

  <div class="row" style="margin-top: 1em;">
    <div class="col-lg-12">
      <p><?php echo $pesan['pesan']?></p>
    </div>
  </div>

  <div class="row" style="margin-top: 1em;">
    <div class="col-lg-12">
      <a class="btn btn-danger" href="<?php echo base_url();?>pesan/hapus/<?php echo $pesan['id'];?>">Hapus</a>
    </div>
  </div>
</div>
