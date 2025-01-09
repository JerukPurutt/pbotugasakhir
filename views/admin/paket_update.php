<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <?php include "views/include/navbar.php"; ?>

    <!-- Main container -->
    <div class="flex">
        <!-- Sidebar -->
        <?php include "views/include/sidebar.php"; ?>

        <!-- Main Content -->
        <div class="flex-1 p-8 ">
            <!-- Formulir Update Barang -->
            <div class="m-20 max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update Paket</h2>
                <form action="index.php?modul=paket&fitur=update" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="id_paket" name="id_paket" value="<?php echo htmlspecialchars(isset($paket['id_paket']) ? $paket['id_paket'] : '', ENT_QUOTES, 'UTF-8'); ?>">


                    <!-- Nama Barang -->
                    <div class="mb-4">
                        <label for="nama_paket" class="block text-gray-700 text-sm font-bold mb-2">Nama Paket:</label>
                        <input type="text" id="nama_paket" name="nama_paket"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required
                            value="<?php echo isset($paket['nama_paket']) ? htmlspecialchars($paket['nama_paket']) : ''; ?>"
                            placeholder="Masukkan Nama Paket">
                    </div>

                    <!-- Stok -->
                    <div class="mb-4">
                        <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok:</label>
                        <input type="number" id="stok" name="stok"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required
                            value="<?php echo isset($paket['stok']) ? htmlspecialchars($paket['stok']) : ''; ?>"
                            placeholder="Masukkan Stok">
                    </div>

                    <!-- Harga -->
                    <div class="mb-4">
                        <label for="harga_paket" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                        <input type="number" id="harga_paket" name="harga_paket"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required
                            value="<?php echo isset($paket['harga_paket']) ? htmlspecialchars($paket['harga_paket']) : ''; ?>"
                            placeholder="Masukkan Harga">
                    </div>

                    <!-- Durasi -->
                    <div class="mb-4">
                        <label for="durasi" class="block text-gray-700 text-sm font-bold mb-2">Durasi :</label>
                        <input type="number" id="durasi" name="durasi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            required
                            value="<?php echo isset($paket['durasi']) ? htmlspecialchars($paket['durasi']) : ''; ?>"
                            placeholder="Masukkan Harga">
                    </div>

                    <div class="mb-4">
                        <label for="gambar_paket" class="block text-gray-700 text-sm font-bold mb-2">Upload Gambar:</label>
                        <input type="file" id="gambar_paket" name="gambar_paket" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            accept="imgBarang/">
                        <?php if (!empty($paket['gambar_paket'])): ?>
                            <img src="gambar/<?php echo htmlspecialchars($paket['gambar_paket']); ?>" alt="gambar_barang" class="mt-2 w-32 h-32 object-cover">
                        <?php endif; ?>
                    </div>
                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>