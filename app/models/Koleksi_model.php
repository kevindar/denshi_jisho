<?php

class Koleksi_model {

    private $table = 'koleksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKoleksi() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKoleksiById($id)
    {   
        $this->db->query('
        SELECT 
            Koleksi.Nama,
            Moji.Kata,
            Translate_Moji.Arti_Kata,
            Kategori.Kategori_Kata,
            Bun.Kalimat,
            Translate_Bun.Arti_Kalimat,
            Pola_Kalimat.Pola
        FROM ' . $this->table . '
            JOIN Indeks ON Koleksi.ID = Indeks.ID_Koleksi
            JOIN Moji ON Moji.ID = Indeks.ID_Kata
            JOIN Translate_Moji ON Translate_Moji.ID_Kata = Moji.ID
            JOIN Kategori ON Kategori.ID_Kata = Moji.ID
            JOIN Bun ON Bun.ID_Kata = Moji.ID
            JOIN Pola_Kalimat ON Pola_Kalimat.ID_Kalimat = Bun.ID
            JOIN Translate_Bun ON  Translate_Bun.ID_Kalimat = Bun.ID
        WHERE  Koleksi.ID = ' . $id
        );
        // $this->db->bind('dudu', $id);
        return $this->db->resultSet();
    }
}

?>