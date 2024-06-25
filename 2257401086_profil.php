<h2>Form Profil</h2>

<?php
/**
* NIM : 123456
* Nama : Abdullah 'Alim
* Kelas : MI22AB
*/
?>

<form action="" method="POST">
    <div>
        <label>Nim</label> <br>
        <input name="nim" type="nim" placeholder="Masukkan nim">
    </div>
    <div>
        <label>Nama</label> <br>
        <input name="nama" type="nama" placeholder="Masukan nam">
    </div>
    <div>
        <label>Kelas</label> <br>
        <input name="kelas" type="kelas" placeholder="Masukkan kelas">
    </div>
    <div>
        <label>Email</label> <br>
        <input name="email" type="email" placeholder="Masukkan email">
    </div>
    <div>
        <label>Phone</label> <br>
        <input name="phone" type="phone" placeholder="Masukkan phone">
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
<?php 

$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$kelas = @$_POST['kelas'];
$email = @$_POST['email'];
$phone = @$_POST['phone'];

if ($nim) {
    echo "<strong>Nim:</strong> {$nim} <br>";
}

if ($nama) {
    echo "<strong>nama:</strong> {$nama} <br>";
}

if ($kelas) {
    echo "<strong>Kelas:</strong> {$kelas} <br>";
}

if ($email) {
    echo "<strong>Email:</strong> {$email} <br>";
}

if ($phone) {
    echo "<strong>phone:</strong> {$phone} <br>";
}
?>