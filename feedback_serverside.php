<?php
  // Stores the name of the class for hidden error messages
  $HIDDEN_ERROR_CLASS = "hiddenError";

  // request all of the variables
  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
  $participant = $_REQUEST["participant"];
  $firsttime = $_REQUEST["firsttime"];
  $comments = $_REQUEST["comments"];
  $submit = $_REQUEST["submit"];

  if (isset($submit)) {

    // validating each field
    $nameValid = !empty($name);
    $emailValid = !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    $commentsValid = !empty($comments);

    $formValid = $nameValid && $emailValid && $commentsValid;

    if ($formValid) {
      session_start();
      $_SESSION['name'] = $name;
      $_SESSION['email'] = $email;
      $_SESSION["participant"] = $participant;
      $_SESSION["firsttime"] = $firsttime;
      $_SESSION['comments'] = $comments;

      // redirect to feedback-response.php
      header("Location: feedback-response_serverside.php");
      return;
    }
  } else {
    // no form submitted, default behavior
    $nameValid = true;
    $emailValid = true;
    $commentsValid = true;
  }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Ithaca Apple Harvest 2017</title>
  <link rel="stylesheet" type ="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type ="text/css" href="styles/feedback.css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Yrsa" rel="stylesheet">
</head>

<body id="feedback">
  <?php
  include "includes/navigation.php";
  ?>

  <div id="form">
    <h1>Contact Us!</h1>

    <p>Contact us with any questions or feedback you have about our event. We're glad you had the opportunity to visit us at the 35th Annual Apple Harvest Festival and hope to see you again next year!</p>

    <form id="feedbackForm" method="post" action="feedback_serverside.php" novalidate>
      Name: <input id="name" name="name" type="text" value="<?php echo($name);?>" required>
      <span class="errorContainer <?php if ($nameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
        Name is required.
      </span><br/>

      Email: <input id="email" name="email" type="email" value="<?php echo($email);?>" required>
      <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">
        A valid email is required.
      </span><br/>

      <input id="formguest" type="radio" name="participant" value="guest" checked> Guest
      <input id="formvendor1" type="radio" name="participant" value="vendor"> Vendor
      <input id="formperformer1" type="radio" name="participant" value="performer"> Performer<br/>

      <input type="checkbox" name="firsttime" value="Yes"> Is this your first time at the annual Ithaca Apple Harvest Festival?<br/>

      Comments<br/>
      <textarea name="comments" id="comments" required><?php echo($comments);?></textarea><span class="errorContainer <?php if ($commentsValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="messageError">
        A message is required.
      </span><br/>

      <button name="reset" type="reset" class="reset">Reset</button>
      <button name="submit" type="submit" class="submit">Submit</button>
    </form>

  </div>

  <?php
  include "includes/footer.php";
  ?>

</body>

</html>
