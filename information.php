<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Include Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
<script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>

<?php 


require_once("header.php");

// session_start();
// print_r($_SESSION);
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    // echo "SFASDF";
}else{
  // echo "SF1111111ASDF";
  // Redirect to login page
  header("Location: dashboard.php");
  exit();
}
?>


<form action="addInformation.php" method="post" name="add">

<div class="h-[900px] mt-4 w-[700px ]">
  <div class="bg-gray-200 p-4 overflow-auto  flex flex-col mx-auto gap-y-5 h-[800px] w-[650px]">
    
          <div class="flex flex-row justify-center  p-4">
            <div class="text-xl font-bold text-center underline underline-offset-4">
              Create New Form
            </div>
          </div>

          <div class="flex flex-row items-center justify-between mt-4 gap-x-3">
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">
                Rashan Card No.
              </span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Your Rashan Card No. "
               name="ration_no"
              />
            </div>
            <div>
              <span class="font-bold text-gray-500 w-44">Town </span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Your Home Town "
                name="town"
              />
            </div>
          </div>





          <div class="flex flex-row items-center justify-between mt-2 gap-x-3">
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">Mukhiya :</span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Your Mukhiya Name "
                name="mukhiya"
              />
            </div>
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">
                Father/Husbend Name :
              </span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Name "
                name="father"
              />
            </div>
          </div>



          <div class="flex flex-row items-center justify-between mt-2 gap-x-3">
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">Jati :</span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Your Jati "
                name="cast_certificate"
              />
            </div>
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">
                Adhar/Enrollment No. :
              </span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Number "
               name="adhar"
              />
            </div>
          </div>



          <div class="flex flex-row items-center justify-between mt-2 gap-x-3">
            <div class="w-[100%]">
              <span class="font-bold text-gray-500 w-44">
                Full Address :
              </span>
              <textarea
                type="text "
                rows={3}
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Your Jati "
               name="address"
              ></textarea>

            </div>
          </div>

          <div class="flex flex-row items-center justify-between mt-2 gap-x-3">
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">
                Gas Family Connection No. :
              </span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Number "
               name="gas_connection_no"
              />
            </div>
            <div class="w-[50%]">
              <span class="font-bold text-gray-500 w-44">Dukan No. :</span>
              <input
                type="text "
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md"
                placeholder="Enter Number "
               name="dukan_no"
              />
            </div>


          </div>





          <div class="mt-2">
            <span class="font-bold text-gray-500 w-44">Unit No.</span>
            <div>
              <input
                type="number"
                class="w-full p-2 px-4 mt-1 border border-gray-500 rounded-md "
                name="unit"
               />
            </div>
          </div>
          <div class="mt-3">
            <button
              type="submit"
              class="!bg-green-500 p-2 rounded-lg !text-white !font-bold !w-full"
            >
              Save
            </button>
          </div>


















</div>


</div>



</form>




<?php require_once("footer.php"); ?>

</body>
</html>
