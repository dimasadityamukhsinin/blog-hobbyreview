<?php
class Artikel_model extends Model{

    public function __construct()
    {
        $this->db = $this->database();
    }

    public function listing()
    {
        $query = '  SELECT 
                        artikel.*,
                        pengguna.nama,
                        kategori.kategori  
                    FROM artikel
                    INNER JOIN pengguna ON artikel.pengguna_id = pengguna.id
                    INNER JOIN kategori ON artikel.kategori_id = kategori.id
                ';
        $data = $this->db->query($query);

        $count = $data->num_rows;
        if($count > 0) {
            while ($results = $data->fetch_assoc()){
                $result[] = $results;
            }
            return $result;
        }else {
            return $data->fetch_all();
        }
    }

    public function listingAuthor()
    {
        $query = '  SELECT 
                        artikel.*,
                        pengguna.nama,
                        kategori.kategori  
                    FROM artikel
                    INNER JOIN pengguna ON artikel.pengguna_id = pengguna.id
                    INNER JOIN kategori ON artikel.kategori_id = kategori.id
                    WHERE pengguna.id="'.$_SESSION['pengguna']['id'].'"
                ';
        $data = $this->db->query($query);
        $count = $data->num_rows;
        if($count > 0) {
            while ($results = $data->fetch_assoc()){
                $result[] = $results;
            }
            return $result;
        }else {
            return $data->fetch_all();
        }
    }

    public function terbit()
    {
        $query = '    SELECT 
                        artikel.*,
                        pengguna.nama,
                        kategori.kategori  
                    FROM artikel
                    INNER JOIN pengguna ON artikel.pengguna_id = pengguna.id
                    INNER JOIN kategori ON artikel.kategori_id = kategori.id
                    WHERE diterbitkan=1
                ';
        $data = $this->db->query($query);

        $count = $data->num_rows;
        if($count > 0) {
            while ($results = $data->fetch_assoc()){
                $result[] = $results;
            }
            return $result;
        }else {
            return $data->fetch_all();
        }
    }

    public function slug($slug)
    {
        $query ='    SELECT 
                        artikel.*,
                        pengguna.nama,
                        kategori.kategori  
                    FROM artikel
                    INNER JOIN pengguna ON artikel.pengguna_id = pengguna.id
                    INNER JOIN kategori ON artikel.kategori_id = kategori.id
                    WHERE slug="'.$slug.'"
                    AND diterbitkan=1
                ';
        $data = $this->db->query($query);
        $result = $data->fetch_assoc();
        return $result;
    }

    public function kategori($kategori)
    {
        $query ='    SELECT 
                        artikel.*,
                        pengguna.nama,
                        kategori.kategori  
                    FROM artikel
                    INNER JOIN pengguna ON artikel.pengguna_id = pengguna.id
                    INNER JOIN kategori ON artikel.kategori_id = kategori.id
                    WHERE kategori="'.$kategori.'" AND diterbitkan=1
                ';
        $data = $this->db->query($query);

        $count = $data->num_rows;
        if($count > 0) {
            while ($results = $data->fetch_assoc()){
                $result[] = $results;
            }
            return $result;
        }else {
            return $data->fetch_all();
        }
    }

    public function tambah($data)
    {   
        $query = '   INSERT INTO artikel 
                    (
                        pengguna_id,
                        kategori_id,
                        judul,
                        slug,
                        gambar,
                        deskripsi,
                        tanggal,
                        diterbitkan
                    )
                    VALUES
                    (
                        "'.$data['pengguna_id'].'",
                        "'.$data['kategori_id'].'",
                        "'.$data['judul'].'",
                        "'.$data['slug'].'",
                        "'.$data['gambar'].'",
                        "'.$data['deskripsi'].'",
                        "'.$data['tanggal'].'",
                        "'.$data['diterbitkan'].'"
                    )
                ';
        $this->db->query($query);
    }

    public function detail($id)
    {
        $query = '  SELECT
                        *
                    FROM artikel
                    WHERE id="'.$id.'"
                ';
        $data = $this->db->query($query);
        $result = $data->fetch_assoc();
        return $result;
    }

    public function edit($data)
    {
        $query = '  UPDATE artikel 
                    SET
                        judul="'.$data['judul'].'",
                        slug="'.preg_replace('/[^A-Za-z0-9-]+/', '-', $data['judul']).'",
                        deskripsi="'.$data['deskripsi'].'",
                        kategori_id="'.$data['kategori_id'].'",
                        tanggal="'.$data['tanggal'].'",
                        diterbitkan="'.$data['diterbitkan'].'"
                    WHERE id="'.$data['id'].'"
                ';
        $result = $this->db->query($query);

        if(!$result) {
            return false;
        }else{
            return true;
        }
    }

    public function delete($id)
    {
        $query = '  DELETE
                    FROM artikel
                    WHERE id="'.$id.'"
                ';
        $this->db->query($query);
        return true;
    }

    public function cekSlug($slug)
    {
        $query = '  SELECT
                        *
                    FROM artikel
                    WHERE slug="'.preg_replace('/[^A-Za-z0-9-]+/', '-', $slug).'"
                ';
        $sql = $this->db->query($query);
        $result = $sql->fetch_assoc();
        if(!$result) {
            return true;
        }else {
            return false;
        }
    }

    public function hitungArtikel()
    {
        $query = '  SELECT 
                        *
                    FROM artikel
                ';
        $data = $this->db->query($query);

        $count = $data->num_rows;
        if($count > 0) {
            while ($results = $data->fetch_assoc()){
                $result[] = $results;
            }
            return count($result);
        }else {
            return count($data->fetch_all());
        }
    }
}
?>