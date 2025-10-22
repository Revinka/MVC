<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffeef4 0%, #fff9fb 50%, #f5f8ff 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(255, 170, 185, 0.25);
      padding: 40px 50px;
      width: 380px;
      animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      color: #e6738f;
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
      font-size: 22px;
      letter-spacing: 0.3px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #a94c68;
      font-weight: 500;
      font-size: 14px;
    }

    input, select {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ffd1dc;
      border-radius: 10px;
      background-color: #fff;
      font-size: 14px;
      color: #444;
      outline: none;
      transition: 0.3s ease;
    }

    input:focus, select:focus {
      border-color: #f5a5b2;
      box-shadow: 0 0 8px rgba(245, 165, 178, 0.4);
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #f7a1b5, #f68ca4);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      margin-top: 18px;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #f58ea5, #f1708f);
      box-shadow: 0 5px 15px rgba(242, 139, 160, 0.3);
      transform: translateY(-1px);
    }

    .footer {
      text-align: center;
      color: #a07282;
      font-size: 13px;
      margin-top: 18px;
    }

    @media (max-width: 480px) {
      .card {
        width: 85%;
        padding: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>🌸Form Input Produk</h2>
    <form action="/kirim-produk" method="POST">
      @csrf

      <label for="nama">Nama Produk</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama produk" required>

      <br><br>
      <label for="harga">Harga Produk</label>
      <input type="number" id="harga" name="harga" placeholder="Masukkan harga produk" required>

      <br><br>
      <label for="kategori">Kategori</label>
      <select id="kategori" name="kategori" required>
        <option value="">Pilih kategori</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Elektronik">Elektronik</option>
      </select>

      <button type="submit">Kirim</button>
    </form>
    <div class="footer">© 2025 sheyla</div>
  </div>
</body>
</html>
