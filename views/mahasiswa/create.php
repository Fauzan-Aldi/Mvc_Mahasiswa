<?php include 'views/layout/header.php'; ?>

<div class="page-header">
    <h2>Tambah Mahasiswa Baru</h2>
    <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
</div>

<div class="form-container">
    <form action="index.php?action=store" method="POST" class="form">
        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <select id="jurusan" name="jurusan" required>
                <option value="">Pilih Jurusan</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fakultas">Fakultas:</label>
            <select id="fakultas" name="fakultas" required>
                <option value="">Pilih Fakultas</option>
                <option value="Fakultas Teknik">Fakultas Teknik</option>
                <option value="Fakultas Ekonomi">Fakultas Ekonomi</option>
                <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                <option value="Fakultas Sains">Fakultas Sains</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

<?php include 'views/layout/footer.php'; ?>
