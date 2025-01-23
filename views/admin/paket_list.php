<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <?php include 'views/include/navbar.php'; ?>
        <div class="flex">
            <?php include 'views/include/sidebar.php'; ?>
             <main class="flex-1 p-8 ml-40">
                <div class="m-20 container mx-auto ml-40 max-w-4xl">
                <div class="mb-4">
                <button 
                    onclick="window.location.href='index.php?modul=paket&fitur=input'"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Insert New Paket
                </button>
                </div>
                <!-- Barang Table -->
                <div class="bg-white shadow-md rounded my-6 overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="py-3 px-1 text-center uppercase font-semibold text-sm">Id Paket</th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Nama Paket</th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Stok </th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Harga </th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Durasi </th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Gambar </th>
                                <th class="py-3 px-4 text-center uppercase font-semibold text-sm">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                        <?php if (!empty($pakets)) {
                            foreach ($pakets as $barangs) { ?>  
                                    <tr class="text-center hover:bg-gray-100">                                                                                                                  
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barangs['id_paket']); ?></td>
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barangs['nama_paket'], ENT_QUOTES, 'UTF-8'); ?></td>
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barangs['stok']); ?></td>
                                        <td class="py-3 px-4">Rp. <?php echo htmlspecialchars($barangs['harga_paket']); ?></td>
                                        <td class="py-3 px-4"><?php echo htmlspecialchars($barangs['durasi']); ?> Hari</td>
                                        <div class="">
                                            <td class="py-3 px-4 h-10 w-10"><img src="gambar/<?php echo htmlspecialchars($barangs['gambar_paket']); ?>" alt="<?php echo htmlspecialchars($barangs['nama_paket']); ?>" class="h-25 w-25 object-cover rounded">
                                            </td>
                                        </div>
                                        <td class="py-3 px-4">
                                            <!-- Edit Button -->
                                            <form action="index.php?modul=paket&fitur=edit&id_paket=<?= $barangs['id_paket'] ?>" method="POST" class="inline">
                                                <button>
                                                    <svg class="w-[34px] h-[34px] text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                            <!-- Delete Button -->
                                            <form action="index.php?modul=paket&fitur=delete&id_paket=<?= $barangs['id_paket'] ?>" method="POST" class="inline">
                                                <button class="p-0 border-none bg-transparent">
                                                    <svg class="w-[34px] h-[34px] text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="6" class="text-center py-4">Tidak ada data paket</td>
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