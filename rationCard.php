<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Ration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div id="root"></div> <!-- This is where your React component will be rendered -->
  <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
  <script src="login.js"></script> <!-- Include your compiled JavaScript file -->


  <?php require_once("header.php"); 
//   print_r($_SESSION)
  ?>

  <div class="h-[600px] w-[350px] mx-auto flex items-center align-middle">
  <form action="addNewRationCard.php" method="post" name="add">
  <div class="p-6 rounded shadow shadow-gray-500">
    <div class="font-serif text-xl font-bold text-center text-red-700">
      Request Ration Card
    </div>
    <div class="flex flex-col my-5 gap-y-3 ">
      <div>
        <span class="my-2 font-bold text-gray-600">Candidate  Name :</span>
        <br />
        <input
        name="name"
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter name "
          type="text"
        />
      </div>
      <div>
        <span class="my-2 font-bold text-gray-600">Adhar Card No. :</span>
        <br />
        <input
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter adhar no. "
          type="number"
          name="adhar"
        />
      </div>
      <div>
        <span class="my-2 font-bold text-gray-600">Ration No. :</span>
        <br />
        <input
          class="p-2 px-3 border border-gray-400 rounded shadow w-96"
          placeholder="Enter ration "
          type="number"
          name="ration"
        />
      </div>
      
    </div>
    <button class="w-full p-2 text-lg font-bold text-white bg-green-500 rounded-lg shadow">
      submit
    </button>
  </div>
  </form>

</div>



<?php require_once("footer.php"); 
//   print_r($_SESSION)
  ?>
</body>
</html>
