<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Framework MVC Sederhana</title>
    <style>
        style>body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .navbar {
            background-color: #007bff;
            padding: 15px 30px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 30px;
            max-width: 900px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        h1 {
            color: #007bff;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }

        h2 {
            color: #28a745;
            margin-top: 5px;
            font-size: 1.5em;
        }

        p {
            margin: 15px 0;
            line-height: 1.6;
        }

        .info-box {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 8px;
            margin-top: 25px;
            border-left: 5px solid #007bff;
            text-align: left;
        }

        .info-box strong {
            color: #dc3545;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            background-color: #e9ecef;
            border-top: 1px solid #dee2e6;
            padding: 15px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <span class="logo">Simple MVC App</span>
        <div>
            <a href="#">Home</a>
            <a href="#">About</a>
        </div>
    </div>

    <div class="container">
        <h1><?php echo isset($judul) ? htmlspecialchars($judul) : 'Selamat Datang!'; ?></h1>
        <h2>Framework MVC Lokal Anda</h2>
        <p>Aplikasi ini dijalankan oleh **Controller Home** melalui **Metode index()**.</p>

        <?php if (isset($nama)) : ?>
            <div class="info-box">
                <p>Data dinamis berhasil dikirimkan dari Controller:</p>
                <p>Halo, nama saya adalah <strong><?php echo htmlspecialchars($nama); ?></strong>.</p>
            </div>
        <?php endif; ?>

        <p>Lanjutkan ke Modul 9 untuk integrasi Model dan data yang sesungguhnya!</p>
    </div>

    <footer>
        <p>© 2025 Framework MVC Sederhana | Modul 9 View</p>
    </footer>

    <!-- Script JavaScript bisa dimuat di sini -->
    <script>
        // Contoh script
        console.log("Footer dimuat.");
    </script>
</body>

</html>