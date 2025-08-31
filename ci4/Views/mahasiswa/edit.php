<h2>Edit Data Mahasiswa</h2>

<form action="/mahasiswa/update/<?= $mhs['id']; ?>" method="post">
    <p>Nama: <input type="text" name="nama" value="<?= $mhs['nama']; ?>" required></p>
    <p>NIM: <input type="text" name="nim" value="<?= $mhs['nim']; ?>" required></p>
    <p>Jurusan: <input type="text" name="jurusan" value="<?= $mhs['jurusan']; ?>" required></p>
    <button type="submit">Update</button>
</form>

<a href="/mahasiswa">Kembali</a>
