<?php

class Words_model {

    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahKata($data)
    {
        $id_koleksi = $data;
        $query =   "INSERT INTO Moji VALUES('', :Kata);
                        SET @moji_id = LAST_INSERT_ID();
                    INSERT INTO indeks (ID_Kata, ID_Koleksi)
                        VALUES (@moji_id, " . $data . ");
                    INSERT INTO Kategori VALUES (@moji_id, :Kategori_Kata);
                    INSERT INTO Translate_Moji VALUES(@moji_id, :Arti_Kata);
                    INSERT INTO Bun VALUES ('', @moji_id, :Kalimat);
                        SET @bun_id = LAST_INSERT_ID();
                    INSERT INTO Translate_Bun VALUES (@bun_id, :Pola_Kalimat);
                    INSERT INTO Pola_Kalimat VALUES (@bun_id, :Arti_Kalimat);";
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