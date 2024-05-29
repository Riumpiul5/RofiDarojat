<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data - CV PORTOFOLIO</title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], input[type="date"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Ubah Data</h2>

    <?php if ($users): ?>
    <form action="<?= base_url('/#') ?>" method="POST">
        <?= csrf_field() ?>
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Masukkan Nama" value="<?=$users['name']?>" required>
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?=$users['tanggal_lahir']?>" required>
        </div>
        <div>
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan Alamat" value="<?=$users['alamat']?>" required></textarea>
        </div>
        <div>
            <label for="hoby">Hoby</label>
            <input type="text" id="hoby" name="hoby" placeholder="Masukkan Hoby" value="<?=$users['hoby']?>" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan Email" value="<?=$users['email']?>" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Masukkan Phone" value="<?=$users['phone']?>" required>
        </div>
        <div>
            <input type="submit"  name="update" value="update">
            <button style="background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                <a href="<?= base_url() ?>" style="color: white; text-decoration: none;">Batal</a>
            </button>

        </div>
    </form>
    <?php else: ?>
    <p>Data pengguna tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
