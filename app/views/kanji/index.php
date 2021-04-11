<div class="p-5 mb-2 bg-light rounded-3">

    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Koleksi kanji</h1>
        <!-- Button-->
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#Tambah">Tambah Kanji</button>
    </div>


    <div class="card">
        <div class="card-body">
            <table class="table table-theme table-row v-middle">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kanji</th>
                        <th scope="col">Romaji</th>
                        <th scope="col">Arti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['kanji'] as $kanji) : ?>
                        <tr>
                            <th scope="row"><?= $kanji['ID'] ?></th>
                            <td><?= $kanji['Tulisan'] ?></td>
                            <td><?= $kanji['Kata'] ?></td>
                            <td><?= $kanji['Arti_Kata'] ?></td>
                            <td>
                                <a href="<?= BASEURL; ?>/kanji/hapus/<?= $kanji['ID'] ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus kanji ini?')">Hapus</a>
                                <a href="<?= BASEURL; ?>/kanji/ubah/<?= $kanji['ID'] ?>" class="btn btn-primary">Ubah</a>
                            <td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Tambah Kanji -->
<div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kanji</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/kanji/tambah" method="post">
                    <div class="mb-3">
                        <label for="Tulisan" class="form-label">Kanji</label>
                        <input type="text" class="form-control" id="Tulisan" name="Tulisan" placeholder="日本語">
                    </div>
                    <div class="mb-3">
                        <label for="Kata" class="form-label">Romaji</label>
                        <input type="text" class="form-control" id="Kata" name="Kata" placeholder="Nihongo">
                    </div>
                    <div class="mb-3">
                        <label for="Arti_Kata" class="form-label">Arti</label>
                        <input type="text" class="form-control" id="Arti Kata" name="Arti_Kata" placeholder="Bahasa Jepang">
                    </div>
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama Koleksi</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" placeholder="">
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