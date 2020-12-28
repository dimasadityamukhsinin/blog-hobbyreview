<?php
class Pengguna_model extends Model{

    public function __construct()
    {
        $this->db = $this->database();
    }

    public function author()
    {
        $query = '  SELECT 
                        id,
                        nama,
                        email,
                        role  
                    FROM pengguna
                    WHERE role="Author"
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

    public function admin()
    {
        $query = '  SELECT 
                        id,
                        nama,
                        email,
                        role  
                    FROM pengguna
                    WHERE role="Admin"
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

    public function login($email, $password)
    {
        $query = '  SELECT
                        id,
                        nama,
                        email,
                        role
                    FROM pengguna
                    WHERE email="'.$email.'" 
                    AND password="'.md5($password).'"
                ';
        $data = $this->db->query($query);
        $result = $data->fetch_assoc();
        return $result;
    }

    public function hitungAdmin()
    {
        $query = '  SELECT 
                        *
                    FROM pengguna
                    WHERE role="Admin"
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

    public function hitungAuthor()
    {
        $query = '  SELECT 
                        *
                    FROM pengguna
                    WHERE role="Author"
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
                    FROM pengguna
                    WHERE email="'.$data['email'].'"
                ';
        $sql = $this->db->query($query);
        $result = $sql->fetch_assoc();
        
        if(!$result) {
            $query = '   INSERT INTO pengguna 
                        (
                            nama,
                            email,
                            password,
                            role
                        )
                        VALUES
                        (
                            "'.$data['nama'].'",
                            "'.$data['email'].'",
                            "'.md5($data['password']).'",
                            "'.$data['role'].'"
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
                    FROM pengguna
                    WHERE id="'.$id.'"
                ';
        $data = $this->db->query($query);
        $result = $data->fetch_assoc();
        return $result;
    }

    public function edit($data)
    {
        $query = '  UPDATE pengguna 
                    SET
                        nama="'.$data['nama'].'",
                        email="'.$data['email'].'"
                    WHERE id="'.$data['id'].'"
                ';
        $result = $this->db->query($query);

        if(!$result) {
            return false;
        }else{
            return true;
        }
    }

    public function ganti_password($data)
    {
        $query = '  UPDATE pengguna 
                    SET
                        password="'.md5($data['password']).'"
                    WHERE id="'.$data['id'].'"
                ';
        $this->db->query($query);
        return true;
    }

    public function delete($id)
    {
        $query = '  SELECT
                        *
                    FROM pengguna
                    WHERE id="'.$id.'"
                ';
        $sql = $this->db->query($query);
        $result = $sql->fetch_assoc();
        
        if($result) {
            $query = '  DELETE
                        FROM pengguna
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