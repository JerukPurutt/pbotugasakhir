<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Konfirmasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <?php include '../include/navbar.php'; ?>
    <div class="flex">
        <!-- Sidebar -->
        <?php include '../include/sidebar.php'; ?>
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="m-20 container mx-auto max-w-4xl">
                <!-- Konfirmasi Table -->
                <div class="bg-white shadow-md rounded my-6 overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="py-3 px-2 text-center uppercase font-semibold text-sm">Id Reservasi</th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Nama Paket</th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Harga</th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php if (!empty($Barangs)) {
                                foreach ($Barangs as $barang) { ?>  
                                    <tr class="text-center hover:bg-gray-100">                                                                                                                  
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barang->id_brg); ?></td>
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barang->nama_brg ?? '', ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td class="py-3 px-4">Rp. <?php echo htmlspecialchars($barang->harga_brg); ?></td>
                                        <td class="py-3 px-4">
                                            <form action="index.php?modul=barang&fitur=edit&id_brg=<?= $barang->id_brg ?>" method="POST" class="inline">
                                                <button>
                                                    <svg class="w-8 h-8 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.3 4.8l2.9 2.9M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5M20.4 3.1a2 2 0 0 1 0 2.8L13.6 12.8 8 14l.7-3.6L15.5 4.5a2 2 0 0 1 2.9 0Z"/>
                                                    </svg>
                                                </button>
                                            </form>

                                            <form action="index.php?modul=barang&fitur=delete" method="POST" class="inline">
                                                <input type="hidden" name="id_brg" value="<?php echo $barang->id_brg; ?>">
                                                <button class="p-0 border-none bg-transparent">
                                                    <svg class="w-8 h-8 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="4" class="text-center py-4">Tidak ada data konfirmasi</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
