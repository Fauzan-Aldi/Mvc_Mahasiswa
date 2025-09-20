<?php
class MahasiswaController {
    private $db;
    private $mahasiswa;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->mahasiswa = new Mahasiswa($this->db);
    }

    // Display all mahasiswa
    public function index() {
        $stmt = $this->mahasiswa->read();
        $mahasiswa_arr = array();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $mahasiswa_arr[] = $row;
        }
        
        include 'views/mahasiswa/index.php';
    }

    // Show create form
    public function create() {
        include 'views/mahasiswa/create.php';
    }

    // Store new mahasiswa
    public function store() {
        if($_POST) {
            $this->mahasiswa->nim = $_POST['nim'];
            $this->mahasiswa->nama = $_POST['nama'];
            $this->mahasiswa->email = $_POST['email'];
            $this->mahasiswa->jurusan = $_POST['jurusan'];
            $this->mahasiswa->fakultas = $_POST['fakultas'];
            
            if($this->mahasiswa->create()) {
                header("Location: index.php?success=1");
            } else {
                header("Location: index.php?error=1");
            }
        }
    }

    // Show single mahasiswa
    public function show($id) {
        $this->mahasiswa->id = $id;
        $this->mahasiswa->readOne();
        include 'views/mahasiswa/show.php';
    }

    // Show edit form
    public function edit($id) {
        $this->mahasiswa->id = $id;
        $this->mahasiswa->readOne();
        include 'views/mahasiswa/edit.php';
    }

    // Update mahasiswa
    public function update($id) {
        if($_POST) {
            $this->mahasiswa->id = $id;
            $this->mahasiswa->nim = $_POST['nim'];
            $this->mahasiswa->nama = $_POST['nama'];
            $this->mahasiswa->email = $_POST['email'];
            $this->mahasiswa->jurusan = $_POST['jurusan'];
            $this->mahasiswa->fakultas = $_POST['fakultas'];
            
            if($this->mahasiswa->update()) {
                header("Location: index.php?updated=1");
            } else {
                header("Location: index.php?error=1");
            }
        }
    }

    // Delete mahasiswa
    public function delete($id) {
        $this->mahasiswa->id = $id;
        if($this->mahasiswa->delete()) {
            header("Location: index.php?deleted=1");
        } else {
            header("Location: index.php?error=1");
        }
    }
}
?>
