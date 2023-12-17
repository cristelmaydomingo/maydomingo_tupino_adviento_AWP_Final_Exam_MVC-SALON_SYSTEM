<?php
class ClientModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Create a new client
    public function createClient($name, $email, $phone, $address) {
        $stmt = $this->db->prepare("INSERT INTO clients (name, email, phone, address) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $address);
        return $stmt->execute();
    }

    // Read all clients
    public function getAllClients() {
        $result = $this->db->query("SELECT * FROM clients");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Update client details
    public function updateClient($id, $name, $email, $phone, $address) {
        $stmt = $this->db->prepare("UPDATE clients SET name=?, email=?, phone=?, address=? WHERE id=?");
        $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);
        return $stmt->execute();
    }

    // Delete a client
    public function deleteClient($id) {
        $stmt = $this->db->prepare("DELETE FROM clients WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
