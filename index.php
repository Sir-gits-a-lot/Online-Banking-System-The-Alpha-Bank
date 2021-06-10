<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>ONLINE BANK MANAGEMENT SYSTEM</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>THE FAITH BANK</h1>
                 <span>
                  <p id="desc"> We at The Faith Bank live upto our name and ensure that each and every one of our
                  customer who has bestowed their trust onto us has the smoothest experience of banking whilst also
                  maintaining their security and never comprising with the speed in this fast paced and much rapidly
                  growing industry. As soon as you join us, you are a member of our large family which is still growing
                  as you are reading this and we @The Faith Bank don't conceal any important information from our family
                  members. Our employees work very hard to replicate the trust you out on us.
                  
                  You have brought the first hand but we will always watch your 6'. 
                  <hr>
                  Because Customer satisfaction is our motto which we follow in toto.
                  </p>
                  </span> 
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2" width="300" height="800">
              </div>
              <span>
              <script>
              $(document).ready(function(){
                 $("#contact").click(function(){
                   $(document).scrollTop(870)
              } );

              } );


          </script>
          <button id="contact" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Contact
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 50 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
            </span>
            </div>
<hr>
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid" width="150" height="180">
                    <br>
                    <a href="createuser.php"><button>Create a new User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid" width="270" height="300">
                    <br>
                    <a href="transfermoney.php"><button>Send/Receive Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid" width="150" height="180">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <hr>
      <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><b>Type in to enquire and our team will get in touch with you</b></p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Send Query</button>
              </div>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a class="text-green-500">help@thefaithbank.com</a>
                <p class="leading-normal my-5">The Financial Hub, Building No. 56, BSE Plaza
                  <br>Chembur, Mumbai,MH-400071
                </p>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021, Made by <b>UTKARSH MISHRA</b> <br>#GRIPJUNE2021 INTERN @The Sparks Foundation</p>
        <div>
        <marquee width="60%" direction="right" height="100px" style="color:green" scrollamount="12" >
This Webpage is just for learning purposes designed by UTKARSH MISHRA for Internship project under THE SPARKS FOUNDATION Pvt. Ltd.All Rights Reserved.
</marquee>
         </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>