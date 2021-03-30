<!DOCTYPE html>
<html>
	<head>
		<title>BPS Logistik | Corporate Website</title>
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/icon.ico" />

		<!-- bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<!-- fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	</head>
	<body data-spy="scroll" data-target=".navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
			<a class="navbar-brand" href="#beranda"><img src="<?php echo base_url();?>assets/images/logo_warna.png" width="100"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
	    			
				</ul>
				<ul class="nav navbar-nav navbar-right" id="navright">
			      	<li class="nav-item">
	    				<a class="nav-link" id="navberanda" href="#beranda" style="cursor: pointer;">BERANDA <span class="sr-only">(current)</span></a>
	    			</li>
		    		<li class="nav-item">
		    			<a class="nav-link" href="#berita" id="navberita" style="cursor: pointer;">BERITA</a>
		    		</li>
			      	<li class="nav-item ">
	    				<a class="nav-link" id="navtentang" href="#tentang">TENTANG</a>
	    			</li>
		    		<li class="nav-item">
		    			<a class="nav-link" id="navbod" href="#bod">BOD</a>
		    		</li>
			      	<li class="nav-item">
	    				<a class="nav-link" id="navlayanan" href="#layanan">LAYANAN</a>
	    			</li>
		    		<li class="nav-item">
		    			<a class="nav-link" id="navfasilitas" href="#fasilitas">FASILITAS</a>
		    		</li>
			      	<li class="nav-item">
	    				<a class="nav-link" id="navcustomer" href="#customer">CUSTOMER</a>
	    			</li>
		    		<li class="nav-item">
		    			<a class="nav-link" id="navkontak" href="#kontak">KONTAK</a>
		    		</li>
			    </ul>
	  		</div>
		</nav>
		<div id="beranda" class="row">
			<div class="container">
				<div class="wrapper">
					<img id="berandaimg" src="<?php echo base_url();?>assets/images/logo_putih.png" width="500">
					<h1>PT. BONAPASOGIT SEMESTA</h1>
					<img src="<?php echo base_url();?>assets/images/line_beranda.png">
					<h4>Perusahaan bidang transportasi yang siap melayani dan memenuhi kebutuhan customer dengan rasa aman , pasti dan terpercaya.</h4>
				</div>
			</div>
		</div>
		
		<?php if(sizeof($semua_berita) > 0):?>
		<div id="berita" class="row">
			<div class="container" style="margin-top: 70px;">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3>BERITA</h3>
					</div>
					<div class="col-lg-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birumuda.png">
					</div>
					<div class="col-lg-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div id="carouselExampleIndicators" class="carousel slide row" data-ride="carousel" style="margin-bottom: 30px;">
					<ol class="carousel-indicators">
						<?php 
							$i=0;
							foreach($semua_berita as $berita):
						?>
							<?php if($i == 0):?>
								<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="active"></li>
							<?php else:?>
								<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>"></li>
							<?php endif;?>
						<?php $i++;endforeach;?>
					</ol>
					<div class="carousel-inner">
						<?php 
							$i=0;
							foreach($semua_berita as $berita):
						?>
							<?php if($i == 0):?>
								<div class="carousel-item active" data-toggle="modal" data-target="#modal_berita<?php echo $berita['id'];?>">
				  					<img class="d-block w-100" src="<?php echo base_url();?>assets/images/<?php echo $berita['gambar']?>" alt="Image" height="450">
				  					<div class="carousel-caption d-none d-md-block">
										<h5><strong><?php echo $berita['judul']?></strong></h5>
										<p><?php echo $berita['isi']?></p>
									</div>
								</div>
							<?php else:?>
								<div class="carousel-item" data-toggle="modal" data-target="#modal_berita<?php echo $berita['id'];?>">
									<img class="d-block w-100" src="<?php echo base_url();?>assets/images/<?php echo $berita['gambar']?>" alt="Image" height="450">
				  					<div class="carousel-caption d-none d-md-block">
										<h5><strong><?php echo $berita['judul']?></strong></h5>
										<p><?php echo $berita['isi']?></p>
									</div>
								</div>
							<?php endif;?>
						<?php $i++;endforeach;?>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only" style="color: blue;">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only" style="color: blue;">Next</span>
					</a>
				</div>
				<?php foreach($semua_berita as $berita):?>
					<div id="modal_berita<?php echo $berita['id']?>" class="modal fade" role="dialog">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><?php echo $berita['judul']?></h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<div class="text-center">
										<img src="<?php echo base_url();?>assets/images/<?php echo $berita['gambar']?>" width="600">
									</div>
									<div class="text-justify" style="margin-top: 20px;">
										<p><?php echo $berita['isi']?></p>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
		<?php endif;?>

		<div id="tentang" class="row">
			<div class="container" style="margin-top: 70px;">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3>TENTANG</h3>
					</div>
					<div class="col-lg-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birutua.png">
					</div>
					<div class="col-lg-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-3">
								<div class="col-lg-12 text-center" height="144">
									<img src="<?php echo base_url();?>assets/images/visi.png" width="100">
								</div>
								<div class="col-lg-12 text-center">
									<p class="tentang_judul_section">Visi</p>
								</div>
							</div>
							<div class="col-lg-12 col-md-9">
								<div class="col-lg-12">
									<p class="tentang_isi_section">Perusahaan bidang transportasi yang siap melayani dan memenuhi kebutuhan customer dengan rasa aman , pasti dan terpercaya.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 25px;">
						<div class="row">
							<div class="col-lg-12 col-md-3">
								<div class="col-lg-12 text-center">
									<img src="<?php echo base_url();?>assets/images/misi.png" width="100">
								</div>
								<div class="col-md-12 text-center">
									<p class="tentang_judul_section">Misi</p>
								</div>
							</div>
							<div class="col-lg-12 col-md-9">
								<div class="col-md-12">	
 									<p class="tentang_isi_section">Memberikan terobosan baru dalam dunia transportasi logistik</p>
 									<p class="tentang_isi_section">Memperkenalkan kepada pasar akan transportasi logistik modern yang lebih ekonomis dan efisien</p>
 									<p class="tentang_isi_section">Mempermudah pengiriman logistik dengan pemanfaatan pembaharuan infrastruktur</p>
 									<p class="tentang_isi_section">Menjadi perusahaan go-public agar masyarakat dapat turut memberikan kontribusi kepada kami</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-3">
								<div class="col-lg-12 text-center" height="144">
									<img src="<?php echo base_url();?>assets/images/mutu.png" width="100">
								</div>
								<div class="col-lg-12 text-center">
									<p class="tentang_judul_section">Mutu</p>
								</div>
							</div>
							<div class="col-lg-12 col-md-9">
								<div class="col-lg-12">
									<p class="tentang_isi_section">Jujur, Teguh, dan Berdoa.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="bod" class="row">
			<div class="container"  style="margin-top: 70px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>BOD & BOC</h3>
					</div>
					<div class="col-md-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birumuda.png">
					</div>
					<div class="col-md-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row" style="margin-top: 25px; margin-bottom: 15px;">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="col-md-12">
							<h4 class="nama_bod">Maidin Hutahayan</h4>
						</div>	
						<div class="col-md-12">
							<h6 class="jabatan_bod">Komisaris Utama</h6>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<p class="deskripsi_bod">Menjabat sebagai Komisaris Utama sejak 2013. Beliau meraih gelar Sarjana dan Magister di Universitas Sumatera Utara. Sebelum menjabat sebagai Komisaris PT Bonapasogit Semesta , sejak tahun 2008 sampai 2011 beliau  menjabat sebagai Komisaris Utama PT Axido Mekar Sahata  Perusahaan yang bergerak dibidang jasa pengiriman barang (Cargo) dan PT Axido Multi Sarana, Perusahaan Supplier batu bara dan cangkang sawit di Sumatera.</p>
						</div>	
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 text-center" style="margin-top: 15px;">
						<div class="col-md-12">
							<h4 class="nama_bod">Mayen Rilen Sitompul</h4>
						</div>	
						<div class="col-md-12">
							<h6 class="jabatan_bod">Direktur Utama</h6>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<p class="deskripsi_bod"> Menjabat sebagai Direktur Utama di PT Bonapasogit Semesta sejak tahun 2014. Beliau menimba ilmu di Universitas Sumatera Utara, Fakultas Ekonomi Jurusan Manajemen dan meraih gelar Magister pada tahun 2005.Sebelum menjabat sebagai direktur utama,beliau memegang jabatan sebagai komisaris PT Axido Mekar Sahata sejak tahun 2008 dan sebagai direktur utama CV. Artha Bona, perusahaan jasa yang bergerak di bidang ekspedisi sejak tahun 2015 hingga saat ini. </p>
						</div>	
					</div>
				</div>
			</div>
		</div>

		<div id="layanan" class="row">
			<div class="container"  style="margin-top: 70px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>LAYANAN</h3>
					</div>
					<div class="col-md-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birumuda.png">
					</div>
					<div class="col-md-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<h6>TRUST TRUCKING</h6>
					</div>
					<!-- Long Flat Bed -->
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center overlay_container" data-toggle="modal" data-target="#modal_long_flat_bed">
							<img src="<?php echo base_url();?>assets/images/baru_putih.jpg" width="350">
							<div class="overlay">
								<div class="overlay_text">Long Flat Bed</div>
							</div>
						</div>
					</div>
					<div id="modal_long_flat_bed" class="modal fade" role="dialog">
					  	<div class="modal-dialog modal-md">

					    	<!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        	<h4 class="modal-title">Long Flat Bed.</h4>
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					      	</div>
					      	<div class="modal-body">
					      		<div class="text-center">
					      			<img src="<?php echo base_url();?>assets/images/baru_putih.jpg" width="300">
					      		</div>
					      		<div class="text-justify" style="margin-top: 20px;">
					      			<p>Nama : Long Flat Bed</p>
					      			<p>Dimensi : 12M x 2,5M x 2,5M (PxLxT) - 3 Axle</p>
					      			<p>Head : 6 x 2</p>
					      			<p>Daya muat : 25 – 30 Ton</p>
					      			<p>Segmentasi : Besi & Baja , Cement , Wood , Curah</p>
					        	</div>
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      	</div>
					    	</div>

					 	 </div>
					</div>
					<!-- Short Flat Bed -->
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center overlay_container" data-toggle="modal" data-target="#modal_short_flat_bed">
							<img src="<?php echo base_url();?>assets/images/baru_putih.jpg" width="350">
							<div class="overlay">
								<div class="overlay_text">Short Flat Bed</div>
							</div>
						</div>
					</div>
					<div id="modal_short_flat_bed" class="modal fade" role="dialog">
					  	<div class="modal-dialog modal-md">

					    	<!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        	<h4 class="modal-title">Short Flat Bed.</h4>
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					      	</div>
					      	<div class="modal-body">
					      		<div class="text-center">
					      			<img src="<?php echo base_url();?>assets/images/baru_putih.jpg" width="300" >
					      		</div>
					      		<div class="text-justify" style="margin-top: 20px;">
					      			<p>Nama : Short Flat Bed</p>
					      			<p>Dimensi : 6M x 2,5M x 2,5M (PxLxT) - 2 Axle</p>
					      			<p>Head : 6 x 2</p>
					      			<p>Daya muat : 10 – 26 Ton</p>
					      			<p>Segmentasi : Besi & Baja , Cement , Wood , Curah, Gas, Pupuk</p>
					        	</div>
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      	</div>
					    	</div>

					 	 </div>
					</div>
					<!-- Short Trailer -->
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center overlay_container" data-toggle="modal" data-target="#modal_short_trailer">
							<img src="<?php echo base_url();?>assets/images/baru_hijau.jpg" width="350">
							<div class="overlay">
								<div class="overlay_text">Short Trailer</div>
							</div>
						</div>
					</div>
					<div id="modal_short_trailer" class="modal fade" role="dialog">
					  	<div class="modal-dialog modal-md">

					    	<!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        	<h4 class="modal-title">Short Trailer (20ft).</h4>
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					      	</div>
					      	<div class="modal-body">
					      		<div class="text-center">
					      			<img src="<?php echo base_url();?>assets/images/baru_hijau.jpg" width="300">
					      		</div>
					      		<div class="text-justify" style="margin-top: 20px;">
					      			<p>Nama : Short Trailer</p>
					      			<p>Dimensi : 6M x 2,5M x 2,5M (PxLxT) - 2 Axle</p>
					      			<p>Head : 6 x 2</p>
					      			<p>Daya muat : <25 ton</p>
					      			<p>Segmentasi : Peti Kemas (Container)</p>
					        	</div>
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      	</div>
					    	</div>

					 	 </div>
					</div>
					<!-- Long Trailer -->
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center overlay_container" data-toggle="modal" data-target="#modal_long_trailer">
							<img src="<?php echo base_url();?>assets/images/baru_hijau.jpg" width="350">
							<div class="overlay">
								<div class="overlay_text">Long Trailer</div>
							</div>
						</div>
					</div>
					<div id="modal_long_trailer" class="modal fade" role="dialog">
					  	<div class="modal-dialog modal-md">

					    	<!-- Modal content-->
					    	<div class="modal-content">
					      		<div class="modal-header">
					        	<h4 class="modal-title">Long Trailer.</h4>
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					      	</div>
					      	<div class="modal-body">
					      		<div class="text-center">
					      			<img src="<?php echo base_url();?>assets/images/baru_hijau.jpg" width="300">
					      		</div>
					      		<div class="text-justify" style="margin-top: 20px;">
					      			<p>Nama : Long Trailer</p>
					      			<p>Dimensi : 12M x 2,5M x 2,5M (PxLxT) - 3 Axle</p>
					      			<p>Head : 6 x 2</p>
					      			<p>Daya muat : 25 - 30 ton</p>
					      			<p>Segmentasi : Peti Kemas (Container)</p>
					        	</div>
					      	</div>
					      	<div class="modal-footer">
					        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      	</div>
					    	</div>

					 	 </div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center">
							<img src="<?php echo base_url();?>assets/images/emkl.png" width="200">
						</div>
						<div class="col-md-12 text-center">
							<h6>EMKL</h6>
							<p>Melayani jasa pengurusan dokumen ekspor - impor</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12" style="margin: 15px auto;">
						<div class="col-md-12 text-center">
							<img src="<?php echo base_url();?>assets/images/warehouse.png"width="200">
						</div>
						<div class="col-md-12 text-center">
							<h6>Logistik & Warehouse</h6>
							<p>Melayani jasa angkutan dan pendistribusian barang,bongkar muat kapal dan pergudangan.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fasilitas" class="row">
			<div class="container"  style="margin-top: 70px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>FASILITAS</h3>
					</div>
					<div class="col-md-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birutua.png">
					</div>
					<div class="col-md-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row"  style="margin-top: 20px;">
					<div class="col-md-4 col-sm-12 col-xs-12 text-center">
						<img src="<?php echo base_url();?>assets/images/armada.png" width="200">
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="col-md-12">
							<h4 class="nama_bod">Armada</h4>
						</div>
						<div class="col-md-12">
							<p class="deskripsi_bod">PT. Bonapasogit Semesta Semarang mengoperasikan 30 armada truk tractor head. Untuk memaksimalkan kegiatan operasi perusahaan dan kepentingan para pelanggan, kami menggunakan armada dengan usia kendaraan yang tidak lebih dari 6 tahun dan terus melakukan peremajaan armada. Dengan berbagai jenis trailer yg tersedia, kami siap melayani berbagai macam muatan hingga 30 Ton.</p>
						</div>
					</div>
				</div>
				<div class="row"  style="margin-top: 20px;">
					<div class="col-md-4 col-sm-12 col-xs-12 text-center">
						<img src="<?php echo base_url();?>assets/images/gps.png" height="140">
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="col-md-12">
							<h4 class="nama_bod">Sistem GPS</h4>
						</div>
						<div class="col-md-12">
							<p class="deskripsi_bod">Semua Armada dilengkapi dengan sistem GPS, sehingga setiap pengiriman dapat dimonitor secara langsung baik oleh petugas maupun oleh pelanggan secara langsung sehingga target waktu pengiriman barang yang ditetapkan dapat dicapai sesuai yang telah dijadwalkan.</p>
						</div>
					</div>
				</div>
				<div class="row"  style="margin-top: 20px; margin-bottom: 20px">
					<div class="col-md-4 col-sm-12 col-xs-12 text-center">
						<img src="<?php echo base_url();?>assets/images/computer.png" height="140">
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="col-md-12">
							<h4 class="nama_bod">Komputerisasi</h4>
						</div>
						<div class="col-md-12">
							<p class="deskripsi_bod">Perusahaan memaksimalkan penggunaan sistem komputer mencakup seluruh bidang operasional perusahaan,mulai dari data karyawan, persediaan suku cadang , data customer serta penerapan TMS (Tyre Management System) yang memungkinkan perusahaan menjalankan kegiatan operasional dengan lebih efisien.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="customer" class="row">
			<div class="container"  style="margin-top: 70px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>CUSTOMER</h3>
					</div>
					<div class="col-md-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birumuda.png">
					</div>
					<div class="col-md-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
						<img src="<?php echo base_url();?>assets/images/ipc.png">
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
						<img src="<?php echo base_url();?>assets/images/sandimas.png">
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
						<img src="<?php echo base_url();?>assets/images/sritex.png">
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 text-center">
						<img src="<?php echo base_url();?>assets/images/summit.png">
					</div>
				</div>
			</div>
		</div>
		<div id="kontak" class="row">
			<div class="container"  style="margin-top: 70px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h3>KONTAK KAMI</h3>
					</div>
					<div class="col-md-12 text-center">
						<img src="<?php echo base_url();?>assets/images/line_birumuda.png">
					</div>
					<div class="col-md-12 text-center">
						<h6>Mengintegerasikan Indonesia</h6>
					</div>
				</div>
				<div class="row">
					<form class="col-md-12"  action="<?php echo base_url();?>pesan_masuk" method="post">
						<div class="form-row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="nama" placeholder="Nama" required>
								</div>
								<div class="form-group">
									<label>Nama Perusahaan</label>
									<input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
								</div>
								<div class="form-group">
									<label>Alamat Perusahaan</label>
									<input type="text" class="form-control" name="alamat_perusahaan" placeholder="Alamat Perusahaan" required>
								</div>
								<div class="form-group">
									<label>Nomor Telepon</label>
									<input type="text" class="form-control" name="no_telepon" placeholder="Nomor Telepon" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="Email" required>
								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Pesan</label>
									<textarea style="height: 150px;" class="form-control" name="pesan" placeholder="Tulis pesan anda" required></textarea> 
								</div>
								<input id="kontak_btn" type="submit" class="btn btn-primary float-right" value="Kirim Pesan">
							</div>
						</div>
					</form>
				</div>
				<div class="row text-center" >
					<div class="col-md-12" style="margin-bottom: 10px; margin-top: 20px;">
						<img class="backto_home_btn" src="<?php echo base_url();?>assets/images/arrow_up.png" width="40">
					</div>
					<div class="col-md-12" style="margin-bottom: 10px;">
						<img class="backto_home_btn" src="<?php echo base_url();?>assets/images/logo_warna.png" width="100">
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="row">
			<div class="container"  style="margin-top: 20px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<h6><i class='fas fa-building'></i> KANTOR PUSAT .  JL Lodan Raya , Kompleks Pergudangan Ciptaniaga Blok D no 7,Semarang 50144 jawa tengah Indonesia</h6>
						<p><i class="fas fa-phone"></i> TEL . (024) 3519006</p>
						<p><i class="fas fa-fax"></i> FAX . (024) 3519007</p>
						<p><i class="fas fa-copyright"></i>2019 <strong>PT Bonapasogit Semesta</strong>. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>

		<!-- bootstrap js -->
		<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
	</body>
</html>