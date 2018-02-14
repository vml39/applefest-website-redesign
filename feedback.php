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

<body id="feedback">
  <?php
  include "includes/navigation.php";
  ?>

  <div id="form">
    <h1>Contact Us!</h1>

    <p>Contact us with any questions or feedback you have about our event. We're glad you had the opportunity to visit us at the 35th Annual Apple Harvest Festival and hope to see you again next year!</p>

    <form id="feedbackForm" action="feedback-response.php" method="post" novalidate>
      Name: <input id="name" name="name" type="text" required>
      <span class="errorContainer hiddenError" id="nameError">
            Name is required.
      </span><br/>

      Email: <input id="email" name="email" type="email" required>
      <span class="errorContainer hiddenError" id="emailError">
            A valid email is required.
      </span><br/>

      <input id="formguest" type="radio" name="participant" value="guest" checked> Guest
      <input id="formvendor1" type="radio" name="participant" value="vendor"> Vendor
      <input id="formvendor2" name="vendor" type="text"> <!-- if they click vendor then open a new text box for which vendor, same with performer -->
      <input id="formperformer1" type="radio" name="participant" value="performer"> Performer
      <input id="formperformer2" name="performer" type="text"><br/>

      <input type="checkbox" name="firsttime" value="Yes"> Is this your first time at the annual Ithaca Apple Harvest Festival?<br/>

      Comments<br/>
      <textarea name="comments" id="comments" required></textarea><span class="errorContainer hiddenError" id="messageError">
            A message is required.
      </span><br/>

      <input type="reset" value="Reset">
      <input type="submit" value="Submit">
    </form>

  </div>

  <?php
  include "includes/footer.php";
  ?>

</body>

</html>
