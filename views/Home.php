<?php require("partials/head.php") ?>
<?php require("partials/banner.php") ?>
<?php require("partials/nav.php") ?>

<form class="space-y-6 bg-white p-6 border-2 border-gray-200 rounded-lg shadow-lg max-w-md mx-auto mt-10" method="POST">
    <div class="flex flex-col">
        <i class="fas fa-wifi"> <label class="text-lg text-#517891">Wifi Name</label> </i>
        <input id="wifi-name" type="text" placeholder="" class="border-2 border-gray-300 p-2 rounded-md" required>
    </div>
    <div class="flex flex-col">
        <i class="fas fa-lock"> <label class="text-lg text-#517891">Password</label> </i>
        <input id="wifi-password" type="password" placeholder="••••••••" class="border-2 border-gray-300 p-2 rounded-md" required>
    </div>

    <div class="flex justify-end mt-4">
        <button id="save-wifi" type="submit" class="text-black py-2 px-4 rounded-lg shadow-md hover:bg-#90D5FF transition duration-300" style="background-color: #57B9FF;">
            Save
        </button>
    </div>
</form>

<?php require("partials/footer.php") ?>
