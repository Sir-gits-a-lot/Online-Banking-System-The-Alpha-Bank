<!-- navbar --> 
<script>
        $(document).ready(function() {
              $("#logo").click(function(event)  {
                  alert("Hi Folks, Welcome TO THE FAITH BANK :), Upon clicking OK, you'll be redirected to the homepage") ; 
              } );
              } );
    </script>

      <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a id="logo" class="navbar-brand" href="index.php">
           <img src="img/icon.jpg" width="80" height="80" > 
          </a>
          <span class="ml-3 text-xl"><b>THE FAITH BANK</b> - MORE THAN A BANK</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createuser.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>
