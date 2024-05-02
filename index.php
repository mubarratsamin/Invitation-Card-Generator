<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Registration</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #330000; /* Dark Red */
      margin: 0;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    form {
      background-color: #800000; /* Maroon */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      color: #fff;
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #fff;
      border-radius: 4px;
    }

    select {
      background-color: #fff;
      color: #800000; /* Maroon */
    }

    button {
      background-color: #fff;
      color: #800000; /* Maroon */
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #800000; /* Maroon */
      color: #fff;
    }
  </style>
</head>
<body>

  <form id="registrationForm" action="invitation.php" method="GET">
    <label for="eventName">Event Name</label>
    <select id="eventName" name="eventName" required>
      <option value="wedding">Wedding</option>
      <option value="houseParty">House Party</option>
      <option value="eid">Eid</option>
      <option value="puja">Puja</option>
      <option value="christmas">Christmas</option>
    </select>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="venue">Venue</label>
    <input type="text" id="venue" name="venue" required>

    <label for="contactNumber">Contact Number</label>
    <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{11}" required>

    <label for="date">Date</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Time</label>
    <input type="time" id="time" name="time" required>

    <button type="submit" name="genarateInvition">Genarate Invitation</button>
  </form>

</body>
</html>
