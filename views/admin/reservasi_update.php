<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Persetujuan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <?php include 'views/include/navbar.php'; ?>
    <div class="flex">
        <?php include 'views/include/sidebar.php'; ?>

        <main class="flex-1 p-8 ml-40">
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update Persetujuan</h2>
                <form action="index.php?modul=approve&fitur=update" method="POST">
                    <input type="hidden" id="id_transaksi" name="id_transaksi" value="<?php echo htmlspecialchars($transaksi['id_transaksi']); ?>">

                    <!-- Status Barang -->
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-bold mb-2">Status pesanan:</label>
                        <select id="status" name="status" class="select select-bordered w-full" required>
                            <option value="1" <?php echo $transaksi['status'] == 1 ? 'selected' : ''; ?>>Konfirmasi</option>
                            <option value="0" <?php echo $transaksi['status'] == 0 ? 'selected' : ''; ?>>Belum di konfirmasi</option>
                        </select>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="flex items-center justify-between">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
</html>