<?php include 'views/layout/header.php'; ?>

<div class="page-header">
    <h2>Daftar Mahasiswa</h2>
    <a href="index.php?action=create" class="btn btn-primary">Tambah Mahasiswa Baru</a>
</div>

<?php if(isset($_GET['success'])): ?>
    <div class="alert alert-success">Data mahasiswa berhasil ditambahkan!</div>
<?php endif; ?>

<?php if(isset($_GET['updated'])): ?>
    <div class="alert alert-success">Data mahasiswa berhasil diperbarui!</div>
<?php endif; ?>

<?php if(isset($_GET['deleted'])): ?>
    <div class="alert alert-success">Data mahasiswa berhasil dihapus!</div>
<?php endif; ?>

<?php if(isset($_GET['error'])): ?>
    <div class="alert alert-error">Terjadi kesalahan dalam memproses data!</div>
<?php endif; ?>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Fakultas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($mahasiswa_arr)): ?>
                <?php foreach($mahasiswa_arr as $mahasiswa): ?>
                <tr>
                    <td><?php echo htmlspecialchars($mahasiswa['nim']); ?></td>
                    <td><?php echo htmlspecialchars($mahasiswa['nama']); ?></td>
                    <td><?php echo htmlspecialchars($mahasiswa['email']); ?></td>
                    <td><?php echo htmlspecialchars($mahasiswa['jurusan']); ?></td>
                    <td><?php echo htmlspecialchars($mahasiswa['fakultas']); ?></td>
                    <td class="actions">
                        <a href="index.php?action=show&id=<?php echo $mahasiswa['id']; ?>" class="btn btn-info">Lihat</a>
                        <a href="index.php?action=edit&id=<?php echo $mahasiswa['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?action=delete&id=<?php echo $mahasiswa['id']; ?>" 
                           class="btn btn-danger" 
                           onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data mahasiswa</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php include 'views/layout/footer.php'; ?>
