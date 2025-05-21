
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Kirim Paket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<style>
  /* Styling sidebar dan main content */
  .sidebar {
    height: 100vh; width: 250px; background-color: #2B221E; color: white; position: fixed;
    display: flex; flex-direction: column; padding-top: 20px; padding-bottom: 20px;
  }
  .menu-item {
    margin-bottom: 25px; border-bottom: 1px solid #495057;
  }
  .menu-item a {
    color: white; text-decoration: none; padding: 20px 15px; font-size: 1.6rem;
    display: flex; align-items: center;
  }
  .menu-item:hover {
    background-color: #495057; border-radius: 6px;
  }
  .logout {
    margin-top: auto; padding: 20px 15px; font-size: 1.6rem;
  }
  .logout a {
    color: white; text-decoration: none; display: flex; align-items: center;
  }
  .logout a:hover {
    background-color: #495057; border-radius: 6px;
  }
  .main-content {
    margin-left: 270px; padding: 20px;
  }
  #send-package-form { display: none; }
  table th, table td { text-align: center; }
</style>
</head>
<body>
<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar col-md-2">
    <ul class="nav flex-column ms-2 mb-2">
      <li class="nav-item menu-item"><a href="dashboard.php"><i class="fas fa-home me-2"></i>Dashboard</a></li>
      <li class="nav-item menu-item"><a href="orders.php"><i class="fas fa-cart-plus me-2"></i>Orders</a></li>
      <li class="nav-item menu-item"><a href="data_akun.php"><i class="fas fa-users me-2"></i>Data Akun</a></li>
      <li class="nav-item menu-item"><a href="kurir.php"><i class="fas fa-truck me-2"></i>Pesanan Kurir</a></li>
    </ul>
    <div class="logout">
      <a href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content w-100">
    <h3>Selamat Datang,!</h3>
    <div class="d-flex justify-content-between my-3">
      <input type="text" class="form-control w-25" placeholder="Cari pesanan..." id="searchInput" />
      <button class="btn btn-primary" id="send-package-btn">Kirim Paket</button>
    </div>

    <!-- Form Kirim Paket -->
    <div id="send-package-form" class="mb-4">
      <form action="buat_order.php" method="POST" class="row g-3">
        <div class="col-md-6">
          <label for="pengirim" class="form-label">Pengirim</label>
          <input type="text" class="form-control" id="pengirim" name="pengirim">
        </div>
        <div class="col-md-6">
          <label for="nomorpengirim" class="form-label">Nomor Pengirim</label>
          <input type="number" class="form-control" id="nomorpengirim" name="nomorpengirim">
        </div>
        <div class="col-md-6">
          <label for="alamatpengirim" class="form-label">Alamat Pengirim</label>
          <input type="text" class="form-control" id="alamatpengirim" name="alamatpengirim" required />
        </div>
        <div class="col-md-6">
          <label for="penerima" class="form-label">Penerima</label>
          <input type="text" class="form-control" id="penerima" name="penerima" required />
        </div>
        <div class="col-md-6">
          <label for="nomorpenerima" class="form-label">Nomor Penerima</label>
          <input type="number" class="form-control" id="nomorpenerima" name="nomorpenerima" required />
        </div>
        <div class="col-md-6">
          <label for="alamatpenerima" class="form-label">Alamat Penerima</label>
          <input type="text" class="form-control" id="alamatpenerima" name="alamatpenerima" required />
        </div>
        <div class="col-md-6">
          <label for="beratbarang" class="form-label">Berat Barang (kg)</label>
          <input type="number" class="form-control" id="beratbarang" name="beratbarang" required />
        </div>
        <div class="col-md-6">
          <label for="layanan" class="form-label">Layanan</label>
          <select class="form-control" id="layanan" name="layanan" required>
            <option value="normal">Normal</option>
            <option value="hemat">Hemat (Pengiriman lebih lambat)</option>
            <option value="express">Express (Pengiriman lebih cepat)</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" readonly required />
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-success">Kirim</button>
        </div>
      </form>
    </div>

    <!-- Tabel Pesanan -->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>NO</th>
          <th>PENGIRIM</th>
          <th>NO PENGIRIM</th>
          <th>ALAMAT PENGIRIM</th>
          <th>PENERIMA</th>
          <th>NO PENERIMA</th>
          <th>ALAMAT PENERIMA</th>
          <th>LAYANAN</th>
          <th>KURIR</th>
          <th>HARGA</th>
          <th>STATUS</th>
<th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "
          SELECT o.*, COALESCE(u1.name, 'Belum Ditentukan') AS pengirim, COALESCE(u2.name, 'Belum Ditentukan') AS kurir 
          FROM orders o
          LEFT JOIN users u1 ON o.pengirim = u1.id
          LEFT JOIN users u2 ON o.kurir = u2.id
        ";
        
         
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Edit Status -->
<div class="modal fade" id="editStatusModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <form action="update_status.php" method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Status Pesanan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="Diproses">Diproses</option>
          <option value="Dikirim">Dikirim</option>
          <option value="Diterima">Diterima</option>
        </select>
        <input type="hidden" id="order-id" name="order_id" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const hargaPerKg = 5000;
  const layananHarga = { hemat: 0.8, normal: 1, express: 2 };

  function hitungHarga() {
    const berat = parseFloat(document.getElementById('beratbarang').value) || 0;
    const layanan = document.getElementById('layanan').value;
    const harga = berat * hargaPerKg * layananHarga[layanan];
    document.getElementById('harga').value = harga.toFixed(0);
  }

  document.getElementById('send-package-btn').addEventListener('click', () => {
    const form = document.getElementById('send-package-form');
    form.style.display = form.style.display === 'none' ? 'block' : 'none';
  });

  document.getElementById('beratbarang').addEventListener('input', hitungHarga);
  document.getElementById('layanan').addEventListener('change', hitungHarga);

  // Edit Status modal
  const editStatusModal = new bootstrap.Modal(document.getElementById('editStatusModal'));
  document.querySelectorAll('.edit-status-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = btn.getAttribute('data-id');
      const status = btn.getAttribute('data-status');
      document.getElementById('order-id').value = id;
      document.getElementById('status').value = status;
      editStatusModal.show();
    });
  });

  // Search filter tabel
  document.getElementById('searchInput').addEventListener('input', function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    rows.forEach(row => {
      row.style.display = row.textContent.toLowerCase().includes(filter) ? '' : 'none';
    });
  });
</script>
</body>
</html>
