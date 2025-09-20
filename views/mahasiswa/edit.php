<?php include 'views/layout/header.php'; ?>

<div class="page-header">
    <h2>Edit Data Mahasiswa</h2>
    <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
</div>

<div class="form-container">
    <form action="index.php?action=update&id=<?php echo $this->mahasiswa->id; ?>" method="POST" class="form">
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="<?php echo htmlspecialchars($this->mahasiswa->nim); ?>" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($this->mahasiswa->nama); ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($this->mahasiswa->email); ?>" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="Teknik Informatika" <?php echo ($this->mahasiswa->jurusan == 'Teknik Informatika') ? 'selected' : ''; ?>>Teknik Informatika</option>
                <option value="Sistem Informasi" <?php echo ($this->mahasiswa->jurusan == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                <option value="Teknik Komputer" <?php echo ($this->mahasiswa->jurusan == 'Teknik Komputer') ? 'selected' : ''; ?>>Teknik Komputer</option>
                <option value="Manajemen Informatika" <?php echo ($this->mahasiswa->jurusan == 'Manajemen Informatika') ? 'selected' : ''; ?>>Manajemen Informatika</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fakultas">Fakultas:</label>
            <select id="fakultas" name="fakultas" required>
                <option value="">Pilih Fakultas</option>
                <option value="Fakultas Teknik" <?php echo ($this->mahasiswa->fakultas == 'Fakultas Teknik') ? 'selected' : ''; ?>>Fakultas Teknik</option>
                <option value="Fakultas Ekonomi" <?php echo ($this->mahasiswa->fakultas == 'Fakultas Ekonomi') ? 'selected' : ''; ?>>Fakultas Ekonomi</option>
                <option value="Fakultas Ilmu Komputer" <?php echo ($this->mahasiswa->fakultas == 'Fakultas Ilmu Komputer') ? 'selected' : ''; ?>>Fakultas Ilmu Komputer</option>
                <option value="Fakultas Sains" <?php echo ($this->mahasiswa->fakultas == 'Fakultas Sains') ? 'selected' : ''; ?>>Fakultas Sains</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php include 'views/layout/footer.php'; ?>
