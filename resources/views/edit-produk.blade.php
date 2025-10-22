<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #fff6f9 0%, #fff9fb 50%, #f8faff 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(255, 180, 190, 0.25);
      padding: 40px 50px;
      width: 360px;
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

    .saved {
      text-align: center;
      color: #e6738f;
      font-size: 22px;
      font-weight: 600;
      animation: fadeIn 1s ease-in-out;
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
  @if (request()->isMethod('post') || request()->isMethod('put'))
    <div class="saved">Tersimpan.</div>
  @else
    <div class="card">
      <h2>Edit Data Produk</h2>

      <form action="" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label>
        <input type="text" name="nama" value="Laptop Lama">

        <br><br>
        <label>Harga Produk:</label>
        <input type="number" name="harga" value="5000000">

        <br><br>
        <label>Kategori:</label>
        <select name="kategori">
          <option value="Elektronik" selected>Elektronik</option>
          <option value="Makanan">Makanan</option>
          <option value="Minuman">Minuman</option>
        </select>

        <button type="submit">Perbarui Data</button>
      </form>

      <div class="footer">© 2025 Sheyla</div>
    </div>
  @endif
</body>
</html>
