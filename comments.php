<?php include './header.php' ?>
<!-- Page breadcrumbs -->
<div class="breadcrumbs">
  <img class="breadcrumbs__img" src="./assets/boat.jpg" alt="" />
  <div class="breadcrumbs__title">
    <h2>Comments</h2>
  </div>
</div>
<main>
  <body>
    <div class="comment-page">
    <script>
      function validateForm() {
        let x = document.getElementById("name").value;
        let y = document.getElementById("message").value;
        if (x == "") {
          alert("You must enter a name!");
          return false;
        } else if (y == "") {
          alert("You must enter a message!");
          return false;
        }
      }
    </script>

    <h4>Leave us a comment!</h4>
    <!-- comment form -->
    <form action="" method="post" class="comment-form" onsubmit="return validateForm()">
      <input name="name" id="name" placeholder="Your Name" type="text" />
      <input id="message" name="message" placeholder="Your Message" style="height: 150px" type="text" />
      <!-- recaptcha -->
       <div class="g-recaptcha" data-sitekey="6LdQ5LQfAAAAAOU39S_jSGTfeLb8cI1wu2Mxng9X"></div>
      <br/>
      <div id="error"></div>
      <input name="submit" type="submit" class="featured__btn" />
    </form>
    <br />
    <br />

    <?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

    //connect to the database
	$db="localhost";       // database host name
	$dbUsername="mpi7253";        // database username
	$dbPassword="Dandruff3+pardon";   // database password
  $dbName = "mpi7253";

    $conn = new mysqli($db,$dbUsername,$dbPassword,$dbName);

    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }

	// get data from form
    if (isset($_POST['submit'])) {
    $uName = $_POST['name'];
    $uMsg = $_POST['message'];
    // sanitize data
    $uMsgClean = strip_tags($uMsg);
    echo "<p>Thank You For Your Feedback!</p><br/><br/>";
  }

	// insert into db
$sql = "INSERT INTO finalComments (username, comment)
VALUES ('$uName', '$uMsgClean')";

// check if data was inserted
if ($conn->query($sql) === TRUE) {
} else {
  echo "<p><b>Error: " . $sql . "</b><br></p>" . $conn->error;
}

//run our query
$sql = ("SELECT id, username, comment, last_modified_date FROM finalComments");

$result = $conn->query($sql);

echo "<h4>Past Comments</h4>";

// output data
 while($row = $result->fetch_assoc()) {
     echo "<p><b><br/>" . $row['username'] . " says: <br/></b>" . $row['comment'] . "<br/>Posted on " . $row['last_modified_date'] . "<br/><hr/></p>";
 }

//close our db connection
$conn->close();
?>
      </div>
    </main>
  </body>
</html>