<?php require("partials/head.php") ?>
<?php require("partials/banner.php") ?>

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <form action="/deleteUser" method="POST" class="space-y-4">
        <?php foreach ($users as $user): ?>
            <!-- Hidden input to send user_id -->
            <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">

            <div>
                <label class="block font-medium text-gray-700">UID (RFID Tag)</label>
                <input type="text" value="<?= htmlspecialchars($user['id']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100 text-gray-700" readonly disabled>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Name</label>
                <input type="text" value="<?= htmlspecialchars($user['name']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100 text-gray-700" readonly disabled>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Gender</label>
                <input type="text" value="<?= htmlspecialchars($user['gender']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100 text-gray-700" readonly disabled>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Email Address</label>
                <input type="email" value="<?= htmlspecialchars($user['email']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100 text-gray-700" readonly disabled>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Phone Number</label>
                <input type="text" value="<?= htmlspecialchars($user['mobile']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-gray-100 text-gray-700" readonly disabled>
            </div>

            <div class="text-center pt-4">
                <button type="submit"
                    class="bg-red-500 text-white py-2 px-6 rounded hover:bg-red-600">
                    Confirm Delete
                </button>
                <a href="/UserData"
                    class="ml-4 bg-gray-500 text-white py-2 px-6 rounded hover:bg-gray-600">
                    Cancel
                </a>
            </div>
        <?php endforeach; ?>
    </form>
</div>

<?php require("partials/footer.php") ?>
