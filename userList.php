<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">


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


<div>

    <div class="container bg-light mb-4">
        <h3 class="text-center underline">All User List</h3>
        <table class="table">
        <thead class="bg-dark text-white">

                <tr>
                    <th scope="col">
                        No.
                    </th>
                    <th scope="col">
                        Name
                    </th>
                    <th scope="col">
                        User Name
                    </th>
                    <th scope="col">
                       
                        Email
                    </th>
                    <th scope="col"
                        >
                        Contact Name
                    </th>
                    <th scope="col"
                        >
                        Password
                    </th>
                    <th scope="col"
                        >
                        <button>Paid/Unpaid</button>
                    </th>
                    <th scope="col"
                        >
                        <button>
                            Date
                                <input type="date" id="edate" class="text-dark" />


                        </button>
                    </th>
                    <th scope="col"
                        >
                        <button>Edit</button>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                



                <?php
                // Connect to your MySQL database
                require_once("dbConnection.php");

                // SQL query to fetch all users

                    $filter_date = "";
                    // $filter_date = "2024-04-20";

                    $sql = "SELECT * FROM users";
                    // $sql = "SELECT * FROM users WHERE pay_date = '$filter_date'";


                $result = $mysqli->query($sql);
                // $user_id=1;
                // Check if any rows were returned
                if ($result->num_rows > 0) {
                    // Loop through rows and populate table rows
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['id'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['name'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['username'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['email'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['contact_number'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['password'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['pay'] . "</td>";
                        echo "<td class='px-6 py-2 pb-0 whitespace-nowrap'>" . $row['pay_date'] . "</td>";
 ?>
 
 <td class='px-6 py-2 pb-0 whitespace-nowrap'>
    <button class='neditButton btn btn-success py-1 text-white' data-toggle='modal' data-target='#myModal' data-userid='<?php echo $row['id']; ?>'>Edit</button>
</td>

 <?php                



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
  <title>user edit</title>
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
          <h4 class=" ">Update User</h4>
        </div>
        

        <div class="modal-body">
    <form id="userForm">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="nname" name="name" />
            <input type="hidden" class="form-control" id="nuid" name="uid" />
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="nemail" name="email" />
        </div>
        <div class="form-group">
            <label for="contactDetail">Contact Detail</label>
            <input type="text" class="form-control" id="ncontactDetail" name="contactDetail" />
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" />
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="350">350 for 1 month</option>
                <option value="850">850 for 2 month</option>
                <option value="1500">1500 for 3 month</option>
                <option value="2500">2500 for 4 month</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pay_date">Date</label>
            <input type="date" class="form-control" id="pay_date" name="pay_date" />
        </div>
        <button type="submit" name="s1" id="s1" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

  
</div>

</body>
</html>

<script>
// Wait for the DOM to be fully loaded
// document.addEventListener('DOMContentLoaded', function() {
    // Get the edit button element
    // var editButton = document.getElementById('editButton');

    // // Add onclick event listener to the edit button
    // editButton.onclick = function() {
    //     // Get the value of the userid attribute
    //     var userId = editButton.getAttribute('data-userid');

    //     // Now you can use userId as needed
    //     // console.log(userId,"ADSDF");





    // };



    // Add onclick event listener to the edit button
$('.neditButton').click(function() {
    // Get the value of the userid attribute
    var userId = $(this).data('userid');
    // Make an AJAX request to fetch the userId from the server
    // alert(userId,"dfjksh")
        $.ajax({
            url: 'getUser.php',
            method: 'POST',
            data: { uid: userId },
            success: function(response1) {
                // If the request is successful, response contains the user data from the server
                console.log('Fetched user data from the server:', response1);
                var response = JSON.parse(response1);
                
                // Set the values of fields based on the response
                $('#nname').val(response.name);
                $('#nuid').val(userId);
                $('#username').val(response.username);
                $('#password').val(response.password);
                $('#nemail').val(response.email);
                $('#ncontactDetail').val(response.contact_number);
                $('#pay_date').val(response.pay_date);

                // Set the value of the status field as a selected option in the dropdown
                var status = response.pay;
                $('#status').val(status);

                // Set the contact details field
                $('#contactDetail').val(response.contactDetail);
            },
            error: function(xhr, status, error) {
                // Handle any errors here
                console.error('Failed to fetch userId from the server:', error);
            }
        });
    });

// });




</script>


<script>
$(document).ready(function() {
    $('#userForm').submit(function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get form data
        var formData = $(this).serialize();
        // console.log(formData,"formDataformDataformData")

        // Make API request
        $.ajax({
            type: 'POST',
            url: 'jqeditUser.php',
            data: formData,
            success: function(response) {
                console.log('API Response:', response);
                // Handle success response here
                swal("Success!", "Your request was successful.", "success");
            },
                        error: function(xhr, status, error) {
                console.error('Error:', error);
                // Handle error here
            }
        });
    });
});
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>











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
  <h2>Recharge</h2>

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

