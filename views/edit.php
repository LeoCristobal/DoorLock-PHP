<?php require("partials/head.php") ?>
<?php require("partials/banner.php") ?>

<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <form action="/editUser" method="POST" class="space-y-4">
        <?php foreach ($users as $user): ?>
            <!-- Hidden input to send user_id -->
            <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">

            <!-- Hidden input to send id since disabled fields are not submitted -->
            <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

            <div>
                <label class="block font-medium text-gray-700">UID (RFID Tag)</label>
                <input type="text" value="<?= htmlspecialchars($user['id']) ?>"
                    class="w-full bg-gray-100 border border-gray-300 p-2 rounded text-gray-700 cursor-not-allowed hover:border-red-500"
                    disabled readonly>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-white text-gray-700">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Gender</label>
                <select name="gender" class="w-full border border-gray-300 p-2 rounded bg-white text-gray-700" required>
                    <option value="Male" <?= $user['gender'] === 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $user['gender'] === 'Female' ? 'selected' : '' ?>>Female</option>
                    <option value="Other" <?= $user['gender'] === 'Other' ? 'selected' : '' ?>>Other</option>
                </select>
            </div>

            <div>
                <label class="block font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-white text-gray-700">
            </div>

            <div>
                <label class="block font-medium text-gray-700">Phone Number</label>
                <input type="text" name="mobile" value="<?= htmlspecialchars($user['mobile']) ?>"
                    class="w-full border border-gray-300 p-2 rounded bg-white text-gray-700">
            </div>

            <div class="text-center pt-4">
                <button type="submit"
                    class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600">
                    Save Changes
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

