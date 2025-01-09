<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <!-- Navbar -->
    <?php include 'views/include/navbar.php'; ?>
    <!-- Main container -->
    <div class="flex">
        <!-- Sidebar -->
        <?php include 'views/include/sidebar.php'; ?>
        <!-- Main Content -->
        <div class="flex-1 p-8">
            <!-- Formulir Input Barang -->
            <div class="m-20 max-w-lg mx-auto bg-white p-9 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Input Paket</h2>
                <form action="index.php?modul=paket&fitur=input" method="POST" enctype="multipart/form-data">
                    <!-- Nama Paket -->
                    <div class="mb-4">
                        <label for="nama_paket" class="block text-gray-700 text-sm font-bold mb-2">Nama Paket:</label>
                        <input type="text" id="nama_paket" name="nama_paket" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-200 ease-in-out hover:border-blue-500" placeholder="Masukkan Nama PAket" required>
                    </div>
                    <!-- Stok -->
                    <div class="mb-4">
                        <label for="stok" class="block text-gray-700 text-sm font-bold mb-2">Stok:</label>
                        <input type="number" id="stok" name="stok" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-200 ease-in-out hover:border-blue-500" placeholder="Masukkan Stok" required>
                    </div>
                    <!-- Harga Paket-->
                    <div class="mb-4">
                        <label for="harga_paket" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                        <input type="number" id="harga_paket" name="harga_paket" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-200 ease-in-out hover:border-blue-500" placeholder="Masukkan Harga" required>
                    </div>
                    <!-- Durasi -->
                    <div class="mb-4">
                        <label for="durasi" class="block text-gray-700 text-sm font-bold mb-2">Durasi:</label>
                        <input type="number" id="durasi" name="durasi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-200 ease-in-out hover:border-blue-500" placeholder="Masukkan Durasi" required>
                    </div>
                    <!-- Gambar -->
                    <div class="mb-4">
                        <label for="gambar_paket" class="block text-gray-700 text-sm font-bold mb-2">Gambar:</label>
                        <input type="file" id="gambar_paket" name="gambar_paket" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline transition duration-200 ease-in-out hover:border-blue-500" placeholder="Masukkan Gambar" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>