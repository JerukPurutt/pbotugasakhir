<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Reservasi - Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <?php include 'views/include/navbar.php'; ?>
        <div class="flex">
            <?php include 'views/include/sidebar.php'; ?>
                <div class="container mx-auto py-8 px-4">
<main class="flex-1 p-8 ml-40">
         <!-- Tabel reservasi -->
         <div class="container mx-auto mt-40 px-4">
    <div class="bg-white shadow-md rounded-lg my-6 overflow-hidden">
        <form method="POST" action="index.php?modul=approve&fitur=update">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Id Reservasi</th>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Nama Paket</th>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Harga Paket</th>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Kode Unik</th>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Status</th>
                        <th class="py-3 px-6 text-center uppercase font-semibold text-sm">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <?php if (!empty($reservasi)): ?>
                    <?php foreach ($reservasi as $Reservasi): ?>
                        <tr>
                            <td class="py-4 px-6 text-center"><?php echo htmlspecialchars($Reservasi['id_reservasi']); ?></td>
                            <td class="py-4 px-6 text-center"><?php echo htmlspecialchars($Reservasi['nama_paket']); ?></td>
                            <td class="py-4 px-6 text-center">Rp <?php echo htmlspecialchars($Reservasi['harga_paket']); ?></td>
                            <td class="py-4 px-6 text-center"><?php echo htmlspecialchars($Reservasi['kode_unik']); ?></td>
                            <td class="py-4 px-6 text-center">
                                <select name="status[<?php echo $Reservasi['id_reservasi']; ?>]" class="rounded border-gray-300">
                                    <option value="0" <?= $Reservasi['status'] == 0 ? 'selected' : '' ?>>Menunggu persetujuan</option>
                                    <option value="1" <?= $Reservasi['status'] == 1 ? 'selected' : '' ?>>Disetujui</option>
                                    <option value="2" <?= $Reservasi['status'] == 2 ? 'selected' : '' ?>>Ditolak</option>
                                </select>
                            </td>
                            <td class="py-4 px-6 text-center" >
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Simpan
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="py-4 px-6 text-center text-gray-500">No data available.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </form>
    </div>
</div>
</main>
</body>
</html>
