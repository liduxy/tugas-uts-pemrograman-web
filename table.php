<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

// Ambil data user dari database
$query = "SELECT id, name, email, role FROM users";
$result = $conn->query($query);

// Hapus user jika delete_id dikirimkan
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $delete_id);
    if ($stmt->execute()) {
        echo "<script>alert('User berhasil dihapus'); window.location.href='table.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus user'); window.location.href='table.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard Sidebar</title>
  <style>
    .sidebar-collapsed .sidebar-text {
      display: none;
    }
    /* Menambahkan gaya khusus untuk tabel dengan sisi lengkung */
    .table-rounded th, .table-rounded td {
      border-radius: 8px;
    }
  </style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="flex bg-gradient-to-br from-indigo-100 to-purple-200 min-h-screen">

  <aside id="sidebar" class="bg-gray-900 text-white transition-all duration-300 flex flex-col justify-between overflow-hidden">
    <div>
      <div class="flex items-center justify-between px-4 py-4">
        <h1 class="text-xl font-bold sidebar-text">
          <?php echo isset($_SESSION['name']) ? "Selamat Datang " . $_SESSION['name'] : "Selamat Datang"; ?>
        </h1>
        <button id="toggleBtn" class="text-white focus:outline-none ml-3">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"/>
          </svg>
        </button>
      </div>

      <nav class="mt-4">
        <ul>
          <li class="flex items-center px-4 py-2 hover:bg-gray-800">
            <span class="material-icons mr-4">dashboard</span>
            <a href="dashboard.php" class=""><span class="sidebar-text">Dashboard</span></a>
          </li>
          <li class="flex items-center px-4 py-2 hover:bg-gray-800 bg-gray-700 rounded-lg">
            <span class="material-icons mr-4">person</span>
            <a href="table.php"><span class="sidebar-text">Table User</span></a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Admin Profile -->
    <div class="px-4 py-4 bg-gray-800 flex items-center">
      <div class="sidebar-text">
        <a href="login.php" class="text-red-500 hover:underline ml-4">Logout</a>
      </div>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 text-center p-3">
    <main class="p-6">
      <!-- Tabel Pengguna -->
      <div class="overflow-x-auto mt-8 bg-white p-6 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Daftar Pengguna</h2>
        <table class="min-w-full table-auto text-left table-rounded">
          <thead class="bg-gray-800 text-white">
            <tr>
              <th class="px-4 py-2 rounded-l-lg">ID</th>
              <th class="px-4 py-2">Nama</th>
              <th class="px-4 py-2">Email</th>
              <th class="px-4 py-2">Role</th>
              <th class="px-4 py-2 rounded-r-lg">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr class="border-b hover:bg-gray-100">
              <td class="px-4 py-2"><?php echo $row['id']; ?></td>
              <td class="px-4 py-2"><?php echo $row['name']; ?></td>
              <td class="px-4 py-2"><?php echo $row['email']; ?></td>
              <td class="px-4 py-2"><?php echo $row['role']; ?></td>
              <td class="px-4 py-2">
                <!-- Tombol Hapus -->
                <a href="?delete_id=<?php echo $row['id']; ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Hapus</a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>

  <script>
    const toggleBtn = document.getElementById('toggleBtn');
    const sidebar = document.getElementById('sidebar');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('sidebar-collapsed');
    });
  </script>

</body>
</html>
