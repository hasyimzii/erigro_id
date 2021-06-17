<?php 
    include '../app/views/main/app.php';
?>

<?= template_landing('Home') ?>
<video playsinline autoplay muted loop style="object-fit: cover; width: 100vw; height: 100vh; position: fixed; top: 0; left: 0;">
  <source src="<?= BASEURL; ?>/vendors/video/background.mp4" type="video/mp4">
</video>

<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModalCenter" style="position: absolute; top: 450px; left: 44%; right: 44%;">
Mulai Pengajuan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Pengajuan Tanam Bibit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/home/storePengajuan" method="post"> 
        <input type="hidden" name="idUser" value="<?= decrypt($_SESSION['id']); ?>">
        <div class="form-group">
									<label>Bibit</label>
									<select class="custom-select2 form-control" name="idBibit" style="width: 100%; height: 38px;">
										<optgroup label="Pilih bibit">
                      <?php foreach($data as $d): ?>
											  <option value="<?= $d['idBibit']; ?>"><?= $d['bibit']; ?></option>
                      <?php endforeach; ?>
										</optgroup>
									</select>
								</div>
        <div class="form-group">
            <label>Tujuan Pengajuan Donasi</label>
            <textarea name="tujuan" class="form-control"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Jumlah Bibit</label>
                    <input name="jumlahPengajuan" type="number" class="form-control" value="0">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label>Luas Lahan (hektar)</label>
                    <input name="luasLahan" type="number" class="form-control" placeholder="Luas Lahan Tanam">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<?= template_footer() ?>