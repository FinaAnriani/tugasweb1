<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Pecinta Alam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pecinta Alam</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="visi_misi.php">Visi & Misi</a></li>
            <li><a href="struktur.php">Struktur Organisasi</a></li>
            <li><a href="about.php">Tentang Kami</a></li>
            <li><a href="registrasi.php">Registrasi</a></li>
        </ul>
    </nav>

    <main>
        <section class="form-registrasi">
            <h2>Form Registrasi</h2>
            <form action="proses.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" required size="30" maxlength="50" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required size="30" maxlength="50" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="minat">Bidang Minat:</label>
                    <input type="text" id="minat" name="minat" required size="30" maxlength="50" placeholder="Masukkan bidang minat">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-submit">Submit</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Pecinta Alam</p>
    </footer>
</body>
</html>