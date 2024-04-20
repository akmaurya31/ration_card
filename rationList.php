<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">


<?php require_once("header.php"); 
  ?>


<div class="">

    <div class="container my-4 mx-auto">
        <h1 class="text-2xl text-center bg-info text-white py-2 rounded font-bold ">All Request List</h1>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Adhar No.
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Ration No
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Action
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                        Download
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
                require_once("dbConnection.php");

                // SQL query to fetch all users
                $sql = "SELECT * FROM ration_req WHERE user_id='" . $_SESSION['idd'] . "'";
                $result = $mysqli->query($sql);

                // Check if any rows were returned
                if ($result->num_rows > 0) {
                    // Loop through rows and populate table rows
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['user_id'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['name'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['adhar'] . "</td>";
                        ?>            
 
 <td class='px-6 py-4 whitespace-nowrap'>
 <button class='neditButton' data-toggle='modal' data-target='#myModal' data-userid='<?php echo $row['id']; ?>'>Pending</button>
</td>

<?php 
                        echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['ration'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='px-6 py-4 text-center'>No users found</td></tr>";
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
