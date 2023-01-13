<!DOCTYPE html>
<html>
<head>
  <title>Tentang Kami</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #eeeeee;
    }
    h1 {
      text-align: center;
      text-transform: uppercase;
      color: #4caf50;
      animation: pulse 5s infinite;
    }
    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.1);
      }
      100% {
        transform: scale(1);
      }
    }
    h2 {
      margin-top: 50px;
      text-align: center;
      color: #2196f3;
    }
    h3 {
      margin-top: 20px;
      color: #9c27b0;
    }
    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    li {
      margin-bottom: 10px;
      font-size: 16px;
      animation: fadeIn 1s;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>

</head>
<body>
  <h1>Tentang Kami</h1>
  <p>Kami adalah perusahaan yang bergerak di bidang teknologi informasi. Kami menyediakan layanan pengembangan web dan aplikasi untuk memenuhi kebutuhan bisnis Anda.</p>
  <h2>Visi dan Misi</h2>
  <p><strong>Visi:</strong> Menjadi perusahaan teknologi informasi terkemuka di Indonesia</p>
  <p><strong>Misi:</strong> Menyediakan layanan berkualitas tinggi dan terjangkau bagi pelanggan kami</p>
  <h2>Tim</h2>
  <h3>Dewan Pengurus</h3>
  <ul>
    <li>Taufik Hidayat (Presiden Direktur)</li>
    <li>Sari Dewi (Wakil Presiden Direktur)</li>
    <li>Bambang Prasetyo (Direktur Keuangan)</li>
  </ul>
  <h3>Departemen Teknologi</h3>
  <ul>
    <li>Yusuf Ahmad (Kepala Departemen)</li>
    <li>Nur Hasan (Manager Proyek)</li>
    <li>Rina Susanti (Staff Pengembangan)</li>
    <li>Adi Pratama (Staff Pengembangan)</li>
  </ul>
  <h3>Departemen Pemasaran</h3>
  <ul>
    <li>Ridwan Rahman (Kepala Departemen)</li>
    <li>Fita Novianti (Manager Pemasaran)</li>
    <li>Budi Santoso (Staff Pemasaran)</li>
    <li>Wulan Purnamasari (Staff Pemasaran)</li>
  </ul>
  <script>
    function hideTim() {
      var tim = document.getElementsByTagName('h3');
      for (var i = 0; i < tim.length; i++) {
        tim[i].style.display = 'none';
      }
    }
    function showTim() {
      var tim = document.getElementsByTagName('h3');
      for (var i = 0; i < tim.length; i++) {
        tim[i].style.display = 'block';
      }
    }
  </script>
  <button onclick="hideTim()">Sembunyikan Tim</button>
  <button onclick="showTim()">Tampilkan Tim</button>
</body>
</html>