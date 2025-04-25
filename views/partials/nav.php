<div class="flex justify-center mt-6">
    <nav class="flex overflow-hidden bg-green-500 rounded-md text-white font-medium text-sm">
        <a href="/" class="<?= urlIs('/') ? 'bg-gray-800' : 'hover:bg-green-600' ?> px-4 py-3 block cursor-pointer rounded-l-md">Home</a>
        <a href="/UserData" class="<?= urlIs('/UserData') ? 'bg-gray-800' : 'hover:bg-green-600' ?> px-4 py-3 block cursor-pointer">User Data</a>
        <a href="/Registration" class="<?= urlIs('/Registration') ? 'bg-gray-800' : 'hover:bg-green-600' ?> px-4 py-3 block cursor-pointer">Registration</a>
	<a href="/ReadID" class="<?= urlIs('/ReadID') ? 'bg-gray-800' : 'hover:bg-green-600' ?> px-4 py-3 block cursor-pointer rounded-r-md">Read Tag UID</a>
        <a href="/History" class="<?= urlIs('/History') ? 'bg-gray-800' : 'hover:bg-green-600' ?> px-4 py-3 block cursor-pointer rounded-r-md">History</a>
    </nav>
</div>
