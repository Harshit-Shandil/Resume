<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <div class="sidebar sidebargo">
        <nav>
            <ul>
            <li> <a href="/Portfolio/index.php">Home</a></li>
                <li> <a href="/Portfolio/intro.php">My Intro</a></li>
                <li> <a href="/Portfolio/cv.php">CV</a></li>
                <li> <a href="/Portfolio/contact.php">Contact Me</a></li>
        </nav>
    </div>

    <div class="main">
      <div class="hamb">
        <img class="ham" src="ham.png" alt="" width="20px">
        <img  class="cross" src="cross.png" alt="" width="22px">
    </div>
        <div class="contactform">
            <h1>Contact me for work/general enquiries</h1>
            <form action="server.php" method="post">
                <div class="Name">
                    <label for="clientname" class="form-label">Name </label>
                    <input type="name" class="form-control" id="clientname" name="name"  placeholder="Enter your name">
                   
                  </div>
                <div class="form-group">
                  <label for="clientmail" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="clientmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="mb3">
                  <label for="clientphone" class="form-check-label">Phone</label>
                  <input type="text" class="form-control" id="clientphone" placeholder="Phone" name="phone">
                </div>
                <div class="enquiries">
                    <label for="clientenquiry" class="form-label">Enquiry</label>
                    <input type="text" class="form-control" id="clientenquiry"  placeholder="Enter your enquiry" name="enquiry">
                    
                  </div>
                <div class="mb-3" id="form-check">
                  <input type="checkbox" class="form-check-label" id="isclient">
                  <label class="form-check-label" for="isclient">I want you to work on a property with me</label>
                </div>
                
                  <button type="submit" class="btn btn-sm">Submit</button>
               
              </form>


           
        </div>

    </div>

</div>
<script src="script.js"></script>
</body>
</html>