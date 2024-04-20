<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div id="root"></div> <!-- This is where your React component will be rendered -->
  <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
  <script src="login.js"></script> <!-- Include your compiled JavaScript file -->


  <div class="h-[400px] w-[350px] mx-auto flex">
  <form action="addNewUser.php" method="post" name="add">
  <div class="p-6 mt-8 rounded shadow shadow-gray-500">
    <div class="font-serif text-xl font-bold text-center text-red-700">
      User Signup Form
    </div>
    <div class="flex flex-col my-5 gap-y-3 ">
     
    <div>
        <span class="my-2 font-bold text-gray-600">Name :</span>
        <br />
        <input
          name="name"
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter name "
          type="text"
        />
      </div>

      <div>
        <span class="my-2 font-bold text-gray-600">Email :</span>
        <br />
        <input
          name="email"
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter name "
          type="email"
        />
      </div>
      <div>
        <span class="my-2 font-bold text-gray-600">Contact Number :</span>
        <br />
        <input
          name="contact_number"
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter name "
          type="number"
        />  
      </div>


      <div>
        <span class="my-2 font-bold text-gray-600">Password :</span>
        <br />
        <input
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter password "
          type="password"
          name="password"
        />
      </div>
      <div class="flex flex-row items-center gap-x-2">
        <input type="checkbox" class="w-5 h-5 p-3" /><span class="my-2 font-bold text-gray-600">Remember</span>
      </div>
    </div>
    <button class="w-full p-2 text-lg font-bold text-white bg-green-500 rounded-lg shadow">
      Login
    </button>

    <div class="float-right py-2 mb-4 underline text-blue-500">
      <a href="login.php">Login</a>

    </div>
  </div>
  </form>

</div>

</body>
</html>
