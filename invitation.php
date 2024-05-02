<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Invitation</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #330000; /* Dark Red */
      color: #fff;
      text-align: center;
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #invitation {
      background-color: #800000; /* Maroon */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #invitation h1 {
      margin-bottom: 20px;
    }

    #invitation p {
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

  <div id="invitation">
    <h1>Event Invitation</h1>
    <?php
    if(isset($_GET['genarateInvition'])){
      $eventName = $_GET['eventName'];
      $name = $_GET['name'];
      $venue = $_GET['venue'];
      $contactNumber = $_GET['contactNumber'];
      $date = $_GET['date'];
      $time = $_GET['time'];
    ?>
    <p>Hey <?php echo $name; ?>, hope you're good! We're throwing a chill event of <?php echo $eventName; ?> at <?php echo $venue; ?> on <?php echo $date; ?> at <?php echo $time; ?>.</p>
    <p>We'd love to have you there. The contact number is <?php echo $contactNumber; ?>. Super excited to hang out and make some memories!</p>
  </div>
  <?php } ?>
</body>
</html>
