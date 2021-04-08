<div class="container py-5">
    <h3>Tambahkan Kata</h3>

    <form action="<?= BASEURL; ?>/konten/tambahkata" method="post">
        <div class="form-group mb-2">
            <label for="Form_Kata" class="sr-only">Ayo tambahkan kata dan kalimat baru!</label>
        </div>
        <br>
        <div class="form-group mx-sm-2 mb-2">
            <div class="row">
                <div class="col-sm">
                    <label for="Kata" class="sr-only">Kata baru</label>
                </div>
                <div class="col-sm">
                    <input type="text" class="form-control" id="Kata" name="Kata">
                </div>
                <!--
                <div class="col-sm">
                    <button type="submit" class="btn btn-primary mb-2">Cek kata</button>
                </div>
                -->
            </div>
        </div>
        <div class="form-group">
            <label for="Arti_Kata" class="form-label">Arti Kata</label>
            <input type="text" class="form-control" id="Arti_Kata" name="Arti_Kata" aria-describedby="Arti_Kata_help">
            <div id="Arti_Kata_Help" class="form-text">Masukkan arti kata, sesuai pemahamanmu, kita tidak terikat Kamus</div>
        </div>
        <br>
        <div class="form-group">
            <label for="Kategori_Kata">Kategori Kata</label>
            <select class="form-control" id="Kategori_Kata" name="Kateogri_Kata">
                <option>-</option>
                <option>Verba</option>
                <option>Adjektiva-NA</option>
                <option>Adjektiva-I</option>
                <option>Nomina</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="Kalimat">Contoh Kalimat</label>
            <textarea class="form-control" id="Kalimat" name="Kalimat" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="Arti_Kalimat">Arti Kalimat</label>
            <textarea class="form-control" id="Arti_Kalimat" name="Arti_Kalimat" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="Pola_Kalimat" class="form-label">Pola Kalimat</label>
            <input type="text" class="form-control" id="Pola_Kalimat" name="Pola_Kalimat" aria-describedby="Pola_Kalimat_help">
            <div id="Pola_Kalimat_Help" class="form-text">Masukkan pola kalimat, sesuai Buku Marugoto lebih baik</div>
        </div>
        <br>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</div>