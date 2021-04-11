<?php

class Kanji_model {

    private $table = 'kanji';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKanji() 
    {
        $this->db->query('
        SELECT 
            Kanji.ID,
            Kanji.Tulisan,
            Moji.Kata,
            Translate_Moji.Arti_Kata,
            Kategori.Kategori_Kata
        FROM ' . $this->table .'
            JOIN Moji ON Moji.ID = Kanji.ID_Kata
            JOIN Translate_Moji ON Translate_Moji.ID_Kata = Moji.ID
            JOIN Kategori ON Kategori.ID_Kata = Moji.ID
            ');
        return $this->db->resultSet();
    }


    public function tambahKanji($data)
    {
        $query =   "INSERT INTO kanji
                    SELECT * FROM (
                        SELECT ID FROM koleksi WHERE Nama=':Nama'
                    ) AS fk1
                    SELECT * FROM (
                        SELECT ID FROM moji WHERE Kata=':Tulisan'
                    ) AS fk2
                    VALUES ('', fk1, fk2, :Tulisan)
                    ";
        $this->db->query($query);
        $this->db->bind('Tulisan', $data['Tulisan']);
        $this->db->bind('Nama', $data['Nama']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusKanji($id)
    {
        $query = "DELETE FROM kanji WHERE ID = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>