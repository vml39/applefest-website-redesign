<?php
 session_start();
 $name = $_REQUEST["name"];
 $email = $_REQUEST["email"];
 $participant = $_REQUEST["participant"];
 if($_REQUEST["participant"] == "guest") {$participant = "Guest";};
 if($_REQUEST["participant"] == "vendor") {$participant = "Vendor";};
 if($_REQUEST["participant"] == "performer") {$participant = "Performer";};

 $firsttime = $_REQUEST["firsttime"];
 if (!isset($_REQUEST["firsttime"])){
   $firsttime = "No";
 };
 $comments = $_REQUEST["comments"];
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ithaca Apple Harvest 2017</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/feedback.css" media="all"/>

  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/form.js" type="text/javascript"></script>

</head>

<body>
  <?php
  include "includes/navigation.php";
  ?>

  <div id="feedbackresponse">
    <p>Thank you for your comments, <?php echo( htmlspecialchars($name) ); ?>! Your feedback is valuable to us and we'll use all the comments we get to create an even better experience for you at the 36th Annual Apple Harvest Festival in 2018. If you submitted a question, we'll get back to you at <?php echo( htmlspecialchars($email) ); ?> as soon as possible. We hope to see you again!</p>

    <p>Your submission:<br/>
    Name: <?php echo( htmlspecialchars($name) ); ?><br/>
    Email: <?php echo( htmlspecialchars($email) ); ?><br/>
    Participant: <?php echo($participant); ?><br/>
    Is this your first time? <?php echo($firsttime); ?><br/>
    Comments: <?php echo( htmlspecialchars($comments) ); ?></p>

    <img alt="feedback" src="images/feedback.JPG">
  </div>

  <?php
  include "includes/footer.php";
  ?>

  </body>

</html>
