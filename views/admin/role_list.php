<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Role</title>
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
    <div class="flex-1 p-8 ml-40">
        <div class="m-20 container mx-auto ml-40 max-w-4xl">
            <!-- Button to Insert New Role -->
            <div class="mb-4">
                <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    <a href="index.php?modul=role&fitur=input">Insert New Role</a>
                </button>
            </div>
            <!-- Barang Table -->
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/12 py-3 px-4 uppercase font-semibold text-sm">Id Role</th>
                            <th class="w-1/5 py-3 px-4 uppercase font-semibold text-sm">Role</th>
                            <th class="w-1/4 py-3 px-4 uppercase font-semibold text-sm">Status</th>
                            <th class="w-1/6 py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <!-- Dynamic Rows -->
                        <?php if (!empty($roles)): ?>
                            <?php foreach ($roles as $role): ?>
                                <tr class="text-center">
                                    <td class="py-3 px-4 text-blue-600"><?php echo htmlspecialchars($role['role_id']); ?></td>
                                    <td class="py-3 px-4"><?php echo htmlspecialchars($role['role_name']); ?></td>
                                    <td class="py-3 px-4"><?php echo $role['role_status'] == 1 ? "active" : "inactive"; ?></td>
                                    <td class="py-3 px-4">
                                        <!-- edit -->
                                        <form action="index.php?modul=role&fitur=edit&role_id=<?php echo $role['role_id']; ?>" method="POST" class="inline">
                                            <button>
                                                <svg class="w-[34px] h-[34px] text-blue-600 dark:black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                </svg>
                                            </button> 
                                        </form>
                                        <!-- hapus -->
                                        <form action="index.php?modul=role&fitur=delete&role_id=<?php echo $role['role_id']; ?>" method="POST" class="inline">
                                            <button class="p-0 border-none bg-transparent">
                                                <svg class="w-[34px] h-[34px] text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>   
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center py-4">No data available.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>