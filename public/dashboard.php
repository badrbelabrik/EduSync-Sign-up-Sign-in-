<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include '../includes/header.php'; ?>
<main class="min-h-screen px-6 py-12 flex flex-col items-center">

    <!-- Welcome -->
    <h1 class="text-3xl font-bold text-blue-500 mb-4">
        Welcome, <?php echo htmlspecialchars($_SESSION['firstname']); ?> 👋
    </h1>

    <p class="text-gray-600 mb-10">
        This is your personal dashboard. You are successfully logged in.
    </p>

    <!-- User Info Card -->
    <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md mb-8">
        <h2 class="text-xl font-semibold mb-4 text-gray-800">Your Information</h2>
        
        <p><span class="font-medium">User ID:</span> <?php echo $_SESSION['userid']; ?></p>
        <p><span class="font-medium">Name:</span> <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?></p>
        <p><span class="font-medium">Email:</span> <?php echo $_SESSION['email']; ?></p>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">

        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Profile</h3>
            <p class="text-gray-500 text-sm">Manage your personal info</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Settings</h3>
            <p class="text-gray-500 text-sm">Update your preferences</p>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="font-semibold text-lg mb-2">Support</h3>
            <p class="text-gray-500 text-sm">Get help and contact us</p>
        </div>

    </div>

</main>
<?php include '../includes/footer.php'; ?>