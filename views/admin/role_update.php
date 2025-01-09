<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Role</title>
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
            <!-- Form Update Role -->
            <div class="m-20 max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update Role</h2>
                <form action="index.php?modul=role&fitur=update" method="POST">
                    <input type="hidden" id="role_id" name="role_id" value="<?php echo htmlspecialchars($role['role_id']); ?>">
                    <!-- Nama Role -->
                    <div class="mb-4">
                        <label for="role_name" class="block text-gray-700 text-sm font-bold mb-2">Role:</label>
                        <input type="text" id="role_name" name="role_name" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            required value="<?php echo htmlspecialchars($role['role_name']); ?>">
                    </div>

                    <!-- Status Role -->
                    <div class="mb-4">
                        <label for="role_status" class="block text-gray-700 text-sm font-bold mb-2">Status Role:</label>
                        <select id="role_status" name="role_status" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                            <option value="1" <?php echo $role['role_status'] == 1 ? 'selected' : ''; ?>>Aktif</option>
                            <option value="0" <?php echo $role['role_status'] == 0 ? 'selected' : ''; ?>>Nonaktif</option>
                        </select>
                    </div>
                    <!-- Tombol Submit -->
                    <div class="flex items-center justify-between">
                        <button type="submit" 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>