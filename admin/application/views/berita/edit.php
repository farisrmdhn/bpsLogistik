<div class="container">
  <h2>Edit Berita</h2>

  <?php echo validation_errors(); ?>

  <?php echo form_open_multipart('berita/update'); ?>
    <div class="form-group">
      <label>Judul Berita</label>
      <input type="text" class="form-control" name="judul" placeholder="Add Title" value="<?php echo $berita['judul']; ?>">
    </div>
    <div class="form-group">
      <label>Isi Berita</label>
      <textarea id="editor" class="form-control" name="isi" placeholder="Add Body"><?php echo $berita['isi']; ?></textarea>
    </div>
    <div class="form-group">
      <label>Upload Image</label>
      <br />
      <input type="file" name="gambar" size="20">
    </div>
    <input type="hidden" name="gambar_asli" value="<?php echo $berita['gambar']; ?>">
    <input type="hidden" name="id" value="<?php echo $berita['id']; ?>">
    <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
</div>