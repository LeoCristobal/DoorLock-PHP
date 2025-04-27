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
                    <th class="py-2 px-4 text-center border-r-2 border-gray-300" style="width: 100px; padding: 0.5rem;">
                      Date
                    </th>
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
                          Closed
                        </td>
                        <td style="width: 100px; padding: 0.5rem;">
                          27-04-2025
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require("partials/footer.php") ?>
