<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="">


<?php 
    require_once("dbConnection.php");

require_once("header.php"); 
  ?>


<div class="">

<div class="flex flex-row justify-between">
<button type="button" 
                class="buy-btn bg-blue-500 hover:bg-blue-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal">Recharge</button>
			</div>

<div class="bg-red-500 w-44 flex justify-end p-3">Current Ballance : 
    
    <?php
        echo $_SESSION['current_balance']
        ?>
</div>
</div>

    <div class="container  bg-gray-300 mx-auto">
        <div class="flex flex-row justify-between">
        <h1 class="text-2xl text-center font-bold p-2 pt-4 rounded-lg m-3 ">Wallet History</h1>
        <h1 class="text-2xl text-center font-bold p-2 pt-4 rounded-lg m-3 ">
        <button type="button" 
                class="buy-btn bg-blue-500 hover:bg-blue-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal2">Recharge Admin</button>
			</div>
        </h1>
        </div>
        
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        id
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        user id
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Date
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                      Pre Ballance
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Recharge
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Used BAllance
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Current BAllance
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <!-- <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        John Doe
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        john@example.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        123-456-7890
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        123-456-7890
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        Jane Smith
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        jane@example.com
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        987-654-3210
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        123-456-7890
                    </td>
                </tr> -->



                <?php
                // Connect to your MySQL database
                // require_once("dbConnection.php");
// session_start();

                if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
                $sql = "SELECT * FROM wallet";

                }else{
                $sql = "SELECT * FROM wallet WHERE user_id='" . $_SESSION['idd'] . "'";

                }

                // SQL query to fetch all users

                // $sql = "SELECT * FROM wallet WHERE user_id='" . $_SESSION['idd'] . "'";
                $result = $mysqli->query($sql);

                // Check if any rows were returned
                if ($result->num_rows > 0) {
                    // Loop through rows and populate table rows
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['id'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['user_id'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['date'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['prev_balance'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['recharge'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['used'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['current_balance'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='px-6 py-4 text-center'>No users found</td></tr>";
                }

                // Close database connection
                $mysqli->close();
                ?>



            </tbody>
        </table>
    </div>


    <div>


    <?php require_once("footer.php"); 
  ?>
</body>

</html>












<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="   ">QR Code</h4>
        </div>
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <img src="images/payment.jpeg" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
















<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="font-bold text-center text-black  ">
            Wallet Create
          </h4>
        </div>
        <div class="modal-body">
          
        <div class="form-group">
            <label for="status">Users</label>
                <select class="form-control" id="status" name="status">
                    <?php
                        $sql = "SELECT * FROM users";
                        $result = $mysqli->query($sql);
                        print_r($result);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                        } else {
                            echo "<option>No users found</option>";
                        }
                    ?>
                    <option value="350">user 1</option>
                    <option value="850">user 2</option>
                </select>
        </div>


        <div class="form-group">
            <label for="amount">Pay Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" />
        </div>
        








        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>