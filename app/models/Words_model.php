<?php

class Words_model {

    private $id_koleksi;
    private $db;
    private $id_moji;
    private $id_bun;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahKata($data)
    {
        $id_koleksi = $data;
        $query =   "START TRANSACTION;
                        INSERT INTO Moji VALUES('', :Kata);
                    SELECT @moji_id:=MAX(ID_Moji) FROM Moji;
                    INSERT INTO indeks (ID_Kata, ID_Koleksi)
                        VALUES (@moji_id, " . $this->id_koleksi . ");
                        INSERT INTO Kategori VALUES (@moji_id, :Kategori_Kata);
                        INSERT INTO Translate_Moji VALUES(@moji_id, :Arti_Kata);
                        INSERT INTO Bun VALUES ('', @moji_id, :Kalimat);
                    SELECT @bun_id:=MAX(ID_Bun) FROM Bun;
                        INSERT INTO Translate_Bun VALUES (@bun_id, :Pola_Kalimat);
                        INSERT INTO Pola_Kalimat VALUES (@bun_id, :Arti_Kalimat);
                    COMMIT;";
                    $this->db->query($query);

        $this->db->bind('Kata', $data['Kata']);
        $this->db->bind('Kategori_Kata', $data['Kategori_Kata']);
        $this->db->bind('Arti_Kata', $data['Arti_Kata']);
        $this->db->bind('Kalimat', $data['Kalimat']);
        $this->db->bind('Pola_Kalimat', $data['Pola_Kalimat']);
        $this->db->bind('Arti_Kalimat', $data['Arti_Kalimat']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>