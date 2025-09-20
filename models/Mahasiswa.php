<?php
class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public $id;
    public $nim;
    public $nama;
    public $email;
    public $jurusan;
    public $fakultas;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Read all mahasiswa
    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY nama ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Read single mahasiswa
    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($row) {
            $this->nim = $row['nim'];
            $this->nama = $row['nama'];
            $this->email = $row['email'];
            $this->jurusan = $row['jurusan'];
            $this->fakultas = $row['fakultas'];
            return true;
        }
        return false;
    }

    // Create mahasiswa
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                SET nim=:nim, nama=:nama, email=:email, jurusan=:jurusan, fakultas=:fakultas";
        
        $stmt = $this->conn->prepare($query);
        
        // Sanitize
        $this->nim = htmlspecialchars(strip_tags($this->nim));
        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));
        $this->fakultas = htmlspecialchars(strip_tags($this->fakultas));
        
        // Bind values
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":fakultas", $this->fakultas);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Update mahasiswa
    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                SET nim=:nim, nama=:nama, email=:email, jurusan=:jurusan, fakultas=:fakultas
                WHERE id=:id";
        
        $stmt = $this->conn->prepare($query);
        
        // Sanitize
        $this->nim = htmlspecialchars(strip_tags($this->nim));
        $this->nama = htmlspecialchars(strip_tags($this->nama));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->jurusan = htmlspecialchars(strip_tags($this->jurusan));
        $this->fakultas = htmlspecialchars(strip_tags($this->fakultas));
        $this->id = htmlspecialchars(strip_tags($this->id));
        
        // Bind values
        $stmt->bindParam(":nim", $this->nim);
        $stmt->bindParam(":nama", $this->nama);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":jurusan", $this->jurusan);
        $stmt->bindParam(":fakultas", $this->fakultas);
        $stmt->bindParam(":id", $this->id);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete mahasiswa
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
