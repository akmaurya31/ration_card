<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>The Pricing Table</title>
	<!-- <link href=
"https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
		rel="stylesheet"> -->
        <!-- <script src="path/to/tw-elements.js"></script> -->
</head>



<body class="bg-gray-100">


<?php 


require_once("header.php");

 

?>


	<div class="container mx-auto py-12">
		<h2 class="text-3xl font-bold 
				text-center text-blue-900 mb-6">
			Select Your Plan
		</h2>
		<h3 class="text-xl text-center text-blue-900 mb-8">
			C Programming Course: Beginner to Advance
		</h3>
		<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
			<div
				class="price-col border border-gray-200 
					rounded-lg p-8 flex flex-col items-center 
					justify-center text-center shadow-lg transform 
					hover:scale-105 transition-transform duration-300">
				<p class="text-lg text-blue-500 font-semibold mb-4">
					Basic
				</p>
				<hr class="w-12 border border-blue-500 mb-6">
				<h3 class="text-3xl font-bold text-blue-900 mb-6">
					₹ 360/<span class="text-lg">month</span>
				</h3>
				<ul class="text-lg text-blue-900 mb-6">
					<li>Live Online Classes</li>
					<li>Hands on Project</li>
					<li>Live Doubt Session</li>
					<li>Certificate on Completion</li>
				</ul>
				<!-- <button
					class="buy-btn bg-blue-500 hover:bg-blue-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out">Buy Now
				</button> -->
                <button type="button" 
                class="buy-btn bg-blue-500 hover:bg-blue-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal">Pay Now</button>
			</div>
			<div
				class="price-col border border-yellow-400 
					rounded-lg p-8 flex flex-col items-center 
					justify-center text-center shadow-lg transform 
					hover:scale-105 transition-transform duration-300">
				<p class="text-lg text-yellow-400 font-semibold mb-4">
					Standard*
				</p>
				<hr class="w-12 border border-yellow-400 mb-6">
				<h3 class="text-3xl font-bold text-yellow-400 mb-6">
					₹ 850/-<span class="text-lg"> for 2 month</span>
				</h3>
				<ul class="text-lg text-yellow-400 mb-6">
					<li>All Basic Features</li>
					<li>Data Structure and Algorithms</li>
					<li>Memory Management in C</li>
					<li>Limit upto 2 users</li>
				</ul>
				

                <button type="button" 
                class="buy-btn bg-yellow-400 hover:bg-yellow-500 
						text-blue-900 font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal">Pay Now</button>
			</div>



			<div
				class="price-col border border-red-500 rounded-lg p-8 
					flex flex-col items-center justify-center text-center 
					shadow-lg transform hover:scale-105 
					transition-transform duration-300">
				<p class="text-lg text-red-500 font-semibold mb-4">
					Premium
				</p>
				<hr class="w-12 border border-red-500 mb-6">
				<h3 class="text-3xl font-bold text-red-500 mb-6">
					₹ 1500/-<span class="text-lg">for 3 month</span>
				</h3>
				<ul class="text-lg text-red-500 mb-6">
					<li>All standard Features</li>
					<li>Recorded Lectures</li>
					<li>Placement Assistance</li>
					<li>Limit upto 4 users</li>
				</ul>
				

                <button type="button" 
                class="buy-btn bg-red-500 hover:bg-red-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal">Pay Now</button>
			</div>

            <div
				class="price-col border border-green-500 rounded-lg p-8 
					flex flex-col items-center justify-center text-center 
					shadow-lg transform hover:scale-105 
					transition-transform duration-300">
				<p class="text-lg text-green-500 font-semibold mb-4">
					Premium
				</p>
				<hr class="w-12 border border-green-500 mb-6">
				<h3 class="text-3xl font-bold text-green-500 mb-6">
					₹ 2500/<span class="text-lg">for 4 month</span>
				</h3>
				<ul class="text-lg text-green-500 mb-6">
					<li>All standard Features</li>
					<li>Recorded Lectures</li>
					<li>Placement Assistance</li>
					<li>Limit upto 4 users</li>
				</ul>
				

                <button type="button" 
                class="buy-btn bg-green-500 hover:bg-green-600 
						text-white font-semibold py-2 px-6 rounded-lg 
						transition duration-300 ease-in-out"
                         data-toggle="modal" data-target="#myModal">Pay Now</button>
			</div>
		</div>
	</div>
	<div id="message" class="hidden fixed bottom-0 left-0 right-0 
							bg-green-500 text-white text-center py-4">
		Plan purchased successfully!
	</div>

    













<!-- Bootstrap JavaScript (optional if you don't use any Bootstrap components requiring JavaScript) -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>








    <?php 


require_once("footer.php");

?>









<!-- Button trigger modal -->


<!-- Modal -->
<div
  data-twe-modal-init
  class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    data-twe-modal-dialog-ref
    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
    <div
      class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-4 outline-none dark:bg-surface-dark">
      <div
        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 p-4 dark:border-white/10">
        <h5
          class="text-xl font-medium leading-normal text-surface dark:text-white"
          id="exampleModalLabel">
          Modal title
        </h5>
        <button
          type="button"
          class="box-content rounded-none border-none text-neutral-500 hover:text-neutral-800 hover:no-underline focus:text-neutral-800 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
          data-twe-modal-dismiss
          aria-label="Close">
          <span class="[&>svg]:h-6 [&>svg]:w-6">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </button>
      </div>

     

      <!-- Modal footer -->
      <div
        class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
        <button
          type="button"
          class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400"
          data-twe-modal-dismiss
          data-twe-ripple-init
          data-twe-ripple-color="light">
          Close
        </button>
        <button
          type="button"
          class="ms-1 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
          data-twe-ripple-init
          data-twe-ripple-color="light">
          Save changes
        </button>
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
  <h2>Modal Example</h2>

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
