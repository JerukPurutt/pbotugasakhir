
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
    <?php include 'views/include/navbar.php'; ?>

    <!-- Main container -->
    <div class="flex">
        <!-- Sidebar -->
        <?php include 'views/include/sidebar.php'; ?>

        <!-- Main Content -->
        <div class="flex-1 p-8 m-20">
            <!-- Form Update Barang -->
            <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Update User</h2>
                <form action="index.php?modul=user&fitur=update" method="POST">
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo htmlspecialchars($user['user_id']); ?>">

                    <!-- Nama Barang -->
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">User:</label>
                        <input type="text" id="username" name="username" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            required value="<?php echo htmlspecialchars($user['username']); ?>">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                        <input type="text" id="password" name="password" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            required value="<?php echo htmlspecialchars($user['password']); ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="text" id="email" name="email" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            required value="<?php echo htmlspecialchars($user['email']); ?>">
                    </div>

                    <div class="mb-4">
                        <label for="role_name" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                        <select id="role_name" name="role_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                        <option value="">Pilih Role</option>
                        <?php foreach ($roles as $role) { ?>
                            <option  value="<?php echo htmlspecialchars($role['role_name']); ?>">
                                <?php echo htmlspecialchars($role['role_name']); ?>
                            </option>
                        <?php } ?>
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