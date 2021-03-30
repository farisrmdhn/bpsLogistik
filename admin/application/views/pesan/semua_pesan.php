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
          <li class="list-group-item d-flex justify-content-between align-items-center active">
            Semua pesan
            <span class="badge badge-success badge-pill"><?php echo $jumlah_semua_pesan;?></span>
          </li>
        </a>
      </ul>
    </div>
  </div>

  <div class="row" style="margin-top: 1em;">
    <div class="col-lg-12">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col" class="col-lg-2">Nama</th>
            <th scope="col" class="col-lg-2">Nama Perusahaan</th>
            <th scope="col" class="col-lg-2">Email</th>
            <th scope="col" class="col-lg-3">Pesan</th>
            <th scope="col" class="col-lg-1">Tanggal</th>
            <th scope="col" class="col-lg-2"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($semua_pesan as $pesan) : ?>
            <?php if($pesan['terbaca'] == 0):?>
              <tr style="font-weight: bold;">
            <?php else:?>
              <tr>
            <?php endif;?>
              <td><?php echo $pesan['nama']?></td>
              <td><?php echo $pesan['nama_perusahaan']?></td>
              <td><?php echo $pesan['email']?></td>
              <td><?php echo $pesan['pesan']?></td>
              <td><?php echo $pesan['tanggal']?></td>
              <td>
                <a class="btn btn-primary" style="margin-right: 0.5em" href="<?php echo base_url();?>baca/<?php echo $pesan['id'];?>">Baca</a>
                <a class="btn btn-danger" href="<?php echo base_url();?>pesan/hapus/<?php echo $pesan['id'];?>">Hapus</a>
              </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table> 
    </div>
  </div>

</div>