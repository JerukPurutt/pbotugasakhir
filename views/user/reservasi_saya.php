<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Gamer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'light-blue': '#60A5FA',
                        'lighter-blue': '#93C5FD',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center p-4">
<!-- Navbar -->
    <nav class="fixed top-0 w-full bg-white border-gray-200 dark:bg-gray-900 z-50 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sangym</span>
            </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="index.php?modul=login&fitur=logout"  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log out</a>
                </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-row space-x-8">
                    <li><a href="index.php?modul=login&fitur=dashboard" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Home</a></li>
                    <li><a href="index.php?modul=reservasi&fitur=list" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Reservasi Saya</a></li>
                    <li><a href="#about" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">About</a></li>
                    <li><a href="#footer" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Card -->
    <div class="mt-40 bg-white p-8 rounded-2xl shadow-lg max-w-full w-full relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-32 dark:bg-gray-800"></div>
        <div class="relative z-10 flex flex-col items-center">
            <img src="https://api.dicebear.com/6.x/micah/svg?seed=Gamer" alt="Avatar" class="w-32 h-32 rounded-full border-4 border-white shadow-lg mb-4">
            <h1 class="text-2xl font-bold text-gray-800 mb-1">
                <?= $_SESSION['user']['username'] ?>
            </h1>
            <p class="text-light-blue font-medium mb-6">
                 <?= $_SESSION['user']['email'] ?>
            </p>
        </div>
        <div class="space-y-4 mb-8">
            <div class="flex justify-between items-center">
            </div>
        </div>
        <!-- Tabel reservasi -->
        <div class="mb-8">
            <?php if (!empty($reservasi)): ?>
                <?php foreach ($reservasi as $Reservasi): ?>
                    <div class="bg-white shadow-md rounded-lg border border-gray-200 mb-6 p-4">
                        <div class="flex flex-col space-y-2">
                            <div>
                                <strong>ID Reservasi:</strong> 
                                <span class="text-blue-600"><?php echo htmlspecialchars($Reservasi['id_reservasi']); ?></span>
                            </div>
                            <div>
                                <strong>Nama Paket:</strong> 
                                <span><?php echo htmlspecialchars($Reservasi['nama_paket']); ?></span>
                            </div>
                            <div>
                                <strong>Harga Paket:</strong> 
                                <span>Rp <?php echo htmlspecialchars($Reservasi['harga_paket']); ?></span>
                            </div>
                            <div>
                                <strong>Kode Unik:</strong> 
                                <span><?php echo htmlspecialchars($Reservasi['kode_unik']); ?></span>
                            </div>
                            <div>
                                <strong>Status:</strong> 
                                <span class="<?= $Reservasi['status'] == 0 ? 'text-yellow-600' : ($Reservasi['status'] == 1 ? 'text-green-600' : 'text-red-600') ?>">
                                    <?php 
                                        if ($Reservasi['status'] == 0) echo 'Menunggu persetujuan';
                                        else if ($Reservasi['status'] == 1) echo 'Disetujui';
                                        else echo 'Dibatalkan';
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="text-center py-4">
                    <p class="text-gray-500">No data available.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</body>
</html>