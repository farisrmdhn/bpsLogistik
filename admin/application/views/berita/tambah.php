<div class="container">
  <h2>Tambah Berita</h2>

  <div style="color:red;"><?php echo validation_errors(); ?></div>

  <?php echo form_open_multipart('berita/tambah'); ?>
    <div class="form-group">
      <label>Judul</label>
      <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
    </div>
    <div class="form-group">
      <label>Isi</label>
      <textarea id="editor" class="form-control" name="isi" placeholder="Isi Berita"></textarea>
    </div>
    <div class="form-group">
    	<label>Upload Image</label>
    	<br />
    	<input type="file" name="gambar" size="20">
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
</div>