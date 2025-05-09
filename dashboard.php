<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include 'koneksi.php';

$query = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$totalUsers = $row['total_users'];
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
          <li class="flex items-center px-4 py-2 hover:bg-gray-800 bg-gray-700 rounded-lg">
            <span class="material-icons mr-4">dashboard</span>
            <span class="sidebar-text">Dashboard</span>
          </li>
          <li class="flex items-center px-4 py-2 hover:bg-gray-800">
            <span class="material-icons mr-4">person</span>
            <a href="table.php"><span class="sidebar-text">Table User</span></a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="px-4 py-4 bg-gray-800 flex items-center">
      <div class="sidebar-text">
        <a href="login.php" class="text-red-500 hover:underline ml-4">Logout</a>
      </div>
    </div>
  </aside>

  <div class="flex-1 text-center p-3">
    <main class="p-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition duration-300 ease-in-out transform hover:scale-105">
          <h2 class="text-lg font-semibold text-gray-800">Jumlah User</h2>
          <p class="text-4xl font-bold text-indigo-600"><?php echo $totalUsers; ?></p>
        </div>
        
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
