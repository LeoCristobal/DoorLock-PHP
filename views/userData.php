<?php require("partials/head.php") ?>
<?php require("partials/banner.php") ?>
<?php require("partials/nav.php") ?>

<div class="container mx-auto p-4">
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse shadow-lg mx-auto">
            <thead class="bg-[#10a0c5] text-white border-b-1 border-gray-300">
                <tr>
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="padding: 0.5rem;">Name</th>
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="padding: 0.5rem;">UID</th>
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="padding: 0.5rem;">Gender</th>
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="padding: 0.5rem;">Email</th>
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="padding: 0.5rem;">Mobile Number</th>
                    <th class="py-2 px-4 text-center" style="padding: 0.5rem;">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php foreach ($users as $user): ?>
                    <tr class="hover:bg-gray-100">

                        <td style="padding: 0.5rem;"><?=     $user['name'] ?>
                        </td>

                        <td style="padding: 0.5rem;"><?= $user['id'] ?>
                        </td>

                        <td style="padding: 0.5rem;"><?= $user['gender'] ?></td>

                        <td style="padding: 0.5rem;"><?= $user['email'] ?></td>
                        <td style="padding: 0.5rem;"><?= $user['mobile'] ?></td>

                        <td class="py-2 px-4 text-center" style="padding: 0.5rem;">
                          
                            <a href="/editUser?user_id=<?= $user['user_id'] ?>" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-[#90D5FF]">Edit</a>
                            
                            <a href="/deleteUser?user_id=<?= $user['user_id'] ?>"
                                class="bg-red-500 text-white py-1 px-3 rounded ml-2 hover:bg-red-400">
                                Delete
                            </a>
                            
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require("partials/footer.php") ?>
