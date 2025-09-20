<?php include 'views/layout/header.php'; ?>

<div class="page-header">
    <h2>Detail Mahasiswa</h2>
    <a href="index.php" class="btn btn-secondary">Kembali ke Daftar</a>
</div>

<div class="detail-container">
    <div class="detail-card">
        <h3><?php echo htmlspecialchars($this->mahasiswa->nama); ?></h3>
        
        <div class="detail-row">
            <label>NIM:</label>
            <span><?php echo htmlspecialchars($this->mahasiswa->nim); ?></span>
        </div>

        <div class="detail-row">
            <label>Email:</label>
            <span><?php echo htmlspecialchars($this->mahasiswa->email); ?></span>
        </div>

        <div class="detail-row">
            <label>Jurusan:</label>
            <span><?php echo htmlspecialchars($this->mahasiswa->jurusan); ?></span>
        </div>

        <div class="detail-row">
            <label>Fakultas:</label>
            <span><?php echo htmlspecialchars($this->mahasiswa->fakultas); ?></span>
        </div>

        <div class="detail-actions">
            <a href="index.php?action=edit&id=<?php echo $this->mahasiswa->id; ?>" class="btn btn-warning">Edit</a>
            <a href="index.php?action=delete&id=<?php echo $this->mahasiswa->id; ?>" 
               class="btn btn-danger" 
               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
        </div>
    </div>
</div>

<?php include 'views/layout/footer.php'; ?>
