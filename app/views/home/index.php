<div class="p-5 mb-2 bg-light rounded-3">
    <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Kamus Jepang milikmu!</h1>
    <p class="col-md-8 fs-4">Dengan Denshi Jisho 「電子辞書」website database personal, buat kamus jepang yang dipersonalisasi sesuai level pembelajaran dengan contoh kalimatmu sendiri.</p>
    <button class="btn btn-primary btn-lg" type="button">Buat Koleksi</button>
    </div>

    <div class="container">
        <h3>Daftar Koleksi</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <?php foreach($data['koleksi'] as $koleksi) : ?>
                        <img src="..\public\img\<?= $koleksi['Nama']?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $koleksi['Nama']?> </h5>
                            <p class="card-text">Dipelajari dalam Buku Marugoto <?= $koleksi['Buku']?> Bab <?= $koleksi['Bab']?></p>
                            <a href="<?= BASEURL;?>/koleksi/detail/<?= $koleksi['ID']?>" class="badge rounded-pill bg-primary">Lihat</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                </div>
            </div>
        </div>
    </div>
 </div>


