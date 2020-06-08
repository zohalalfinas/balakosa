<?php

class Promo_model {

    private $table = "country";
    private $db;

    public function __construct () {
        $this ->db = new Database;
    }

    public function insertPromo($data)
    {
        $query = "INSERT INTO promos 
					VALUES 
                    ( '' , :url , :bounty , '' , :target , :description, :reward, :begin, :store, :id_user )";
        
        $this->db->query($query);
        $this->db->bind('url', $data['url']);
        $this->db->bind('bounty', $data['bounty']);
        $this->db->bind('target', $data['target']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('reward', $data['reward']);
        $this->db->bind('begin', $data['tanggal']);
        $this->db->bind('store', $data['store']);
        $this->db->bind('id_user', $_SESSION['id_user']);
        
        $this->db->execute();
        return $this->db->rowCount();
                    
    }

    public function getById($id)
    {
        $query = "SELECT * FROM promos WHERE id_user = :id_user";
		$this->db->query($query);
		$this->db->bind('id_user', $id);
		return $this->db->resultSet();
    }

    public function getPromoById($id)
    {
        $query = "SELECT * FROM promos WHERE id_promo = :id_promo";

        $this->db->query($query);
        $this->db->bind('id_promo', $id);
        return $this->db->single();
    }

    public function deletePromo($id)
    {
        $query = "DELETE FROM promos WHERE id_promo = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePromo($data)
    {
        $query = "UPDATE promos SET url = :url, bounty = :bounty, target = :target, description = :description, reward = :reward, store = :store WHERE id_promo = :id";

        $this->db->query($query);
        $this->db->bind('url', $data['url']);
        $this->db->bind('bounty', $data['bounty']);
        $this->db->bind('target', $data['target']);
        $this->db->bind('description', $data['description']);
        $this->db->bind('reward', $data['reward']);
        $this->db->bind('store', $data['store']);
        $this->db->bind('id', $data['id_promo']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    

}