<div class="p-5 mb-2 bg-light rounded-3">

  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash() ?>
    </div>
  </div>

  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Kamus Jepang milikmu!</h1>
    <p class="col-md-8 fs-4">Dengan Denshi Jisho 「電子辞書」website database personal, buat kamus jepang yang dipersonalisasi sesuai level pembelajaran dengan contoh kalimatmu sendiri.</p>
    <!-- Button-->
    <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#Tambah">Buat Koleksi</button>
  </div>

  <div class="container">
    <h3>Daftar Koleksi</h3>
    <div class="row row-cols-2 row-cols-md-3 g-4">
      <?php foreach ($data['koleksi'] as $koleksi) : ?>
        <div class="col">
          <div class="card h-100">
            <img src="..\public\img\<?= $koleksi['Nama'] ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?= $koleksi['Nama'] ?> </h5>
              <p class="card-text">Dipelajari dalam Buku Marugoto <?= $koleksi['Buku'] ?> Bab <?= $koleksi['Bab'] ?></p>

              <div class="card-footer">
                <a href="<?= BASEURL; ?>/koleksi/detail/<?= $koleksi['ID'] ?>" class="btn btn-primary">Lihat</a>
                <a href="<?= BASEURL; ?>/koleksi/hapus/<?= $koleksi['ID'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus koleksi?')">Hapus</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
</div>


<!-- Modal Tambah koleksi -->
<div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Koleksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/koleksi/tambah" method="post">
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama Koleksi</label>
            <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Kehidupan sehari-hari">
          </div>
          <div class="mb-3">
            <label for="Buku" class="form-label">Buku Referensi</label>
            <select class="form-select" aria-label="Buku" id="Buku" name="Buku">
              <option selected>Pilih jilid Marugoto</option>
              <option value="A1">A1</option>
              <option value="A2-1">A2-1</option>
              <option value="A2-2">A2-2</option>
              <option value="lainnya">lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="Nama" class="form-label">Bab</label>
            <input type="number" class="form-control" id="Bab" name="Bab">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>