<h2>Data Mahasiswa</h2>

<form action="/mahasiswa" method="get">
    <input type="text" name="keyword" placeholder="Cari nama...">
    <button type="submit">Cari</button>
</form>

<a href="/mahasiswa/create">+ Tambah Data</a>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['jurusan']; ?></td>
        <td>
            <a href="/mahasiswa/detail/<?= $m['id']; ?>">Detail</a> |
            <a href="/mahasiswa/edit/<?= $m['id']; ?>">Edit</a> |
            <a href="/mahasiswa/delete/<?= $m['id']; ?>" onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
