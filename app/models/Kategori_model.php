<?php
class Kategori_model extends Model{

    public function __construct()
    {
        $this->db = $this->database();
    }

    public function listing()
    {
        $query = '  SELECT 
                        *
                    FROM kategori
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

    public function hitungKategori()
    {
        $query = '  SELECT 
                        *
                    FROM kategori
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

    public function tambah($data)
    {
        $query = '  SELECT
                        *
                    FROM kategori
                    WHERE kategori="'.$data['kategori'].'"
                ';
        $sql = $this->db->query($query);
        $result = $sql->fetch_assoc();
        
        if(!$result) {
            $query = '   INSERT INTO kategori 
                        (
                            kategori
                        )
                        VALUES
                        (
                            "'.$data['kategori'].'"
                        )
                    ';
            $this->db->query($query);
            return true;
        }else {
            return false;
        }
    }

    public function detail($id)
    {
        $query = '  SELECT
                        *
                    FROM kategori
                    WHERE id="'.$id.'"
                ';
        $data = $this->db->query($query);
        $result = $data->fetch_assoc();
        return $result;
    }

    public function edit($data)
    {
        $query = '  UPDATE kategori 
                    SET
                        kategori="'.$data['kategori'].'"
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
        $query = '  SELECT
                        *
                    FROM kategori
                    WHERE id="'.$id.'"
                ';
        $sql = $this->db->query($query);
        $result = $sql->fetch_assoc();
        
        if($result) {
            $query = '  DELETE
                        FROM kategori
                        WHERE id="'.$id.'"
                    ';
            $this->db->query($query);
            return true;
        }else {
            return false;
        }
    }
}
?>