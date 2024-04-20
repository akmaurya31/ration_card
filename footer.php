

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">



<footer class="bg-gray-900 text-gray-200 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Column 1: Map -->
            <div>
                <h2 class="text-xl font-bold mb-4">Location</h2>
                <!-- Replace the iframe src attribute with your map embed code -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.384927421843!2d-77.03686958511879!3d38.89767678032906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bcdecbb1df%3A0x715969b74d3d27a9!2sWhite%20House!5e0!3m2!1sen!2sus!4v1615232874133!5m2!1sen!2sus" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <!-- Column 2: Address -->
            <div>
                <h2 class="text-xl font-bold mb-4">Address</h2>
                <p>123 Main Street,</p>
                <p>City, State, Zip Code</p>
            </div>
            <!-- Column 3: Contact Form -->
            <div>
                <h2 class="text-xl font-bold mb-4">Contact Us</h2>
                <!-- Replace the form fields and submit button with your contact form -->
                <form action="#" method="post">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 p-2 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 p-2 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 p-2 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200"></textarea>
                    </div>
                    <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600">Send</button>
                </form>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
