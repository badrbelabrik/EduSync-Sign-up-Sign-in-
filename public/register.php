<?php include '../includes/header.php'; ?>
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create an account</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="../scripts/authprocess.php" method="POST" class="space-y-6">
      <!-- firstname -->
            <div>
        <label for="firstname" class="block text-sm/6 font-medium text-gray-900">First name</label>
        <div class="mt-2">
          <input id="firstname" type="text" name="firstname" required autocomplete="firstname" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-400 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>
      <!-- lastname -->
            <div>
        <label for="lastname" class="block text-sm/6 font-medium text-gray-900">Last name</label>
        <div class="mt-2">
          <input id="lastname" type="text" name="lastname" required autocomplete="lastname" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-400 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>
      <!-- email -->
      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input id="email" type="email" name="email" required autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border border-gray-400 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>
    <!-- password -->
      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input id="password" type="password" name="password" required placeholder="••••••••" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 -outline-offset-1 border border-gray-400 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>
    <!-- confirm password -->
        <div>
        <div class="flex items-center justify-between">
          <label for="confirm-password" class="block text-sm/6 font-medium text-gray-900">Confirm Password</label>
        </div>
        <div class="mt-2">
          <input id="confirm-password" type="password" name="confirm-password" required placeholder="••••••••" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900  -outline-offset-1 border border-gray-400 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>
      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-blue-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm/6 text-gray-500">
      Already have an account?
      <a href="./login.php" class="font-semibold text-blue-600 hover:text-blue-300">Login</a>
    </p>
  </div>
</div>
<?php include '../includes/footer.php'; ?>