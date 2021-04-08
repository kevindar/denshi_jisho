<div class="container mt-5">
    <h3><?= $data['koleksi'][0]['Nama']?></h3>
    <?php foreach($data['koleksi'] as $koleksi) : ?>
        <div class="accordion">
            <div class="open">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="Nama">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Kata
                    </button>
                    </h2>
                    <div id="headingNama" class="accordion-collapse collapse show" aria-labelledby="headingNama" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong><?= $koleksi['Kata']?></strong> 
                        <p>Arti kata : <?= $koleksi['Arti_Kata']?></p>
                        <p>Kategori kata : <?= $koleksi['Kategori_Kata']?></p>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Kalimat
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body"> 
                        <p>Contoh kalimat : <?= $koleksi['Kalimat']?></p>
                        <p>Arti kalimat : <?= $koleksi['Arti_Kalimat']?></p>
                        <p>Pola Kalimat <?= $koleksi['Pola']?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php endforeach; ?>
</div>