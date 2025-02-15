<!DOCTYPE html>
<html>
<head>
  <title>Add Offer</title>
  <style>
    
    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom:   
 5px;
    }

    input, select {
      width: 100%;
      padding:   
 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    span {
      display: block;
      margin-top: 5px;
      font-size: 12px;
    }

    button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form id="offerForm" action="./Verfication.php" method="POST">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <span id="titleError"></span>

    <label for="destination">Destination:</label>
    <input type="text" id="destination" name="destination">
    <span id="destinationError"></span>

    <label for="departureDate">Departure Date:</label>
    <input type="date" id="departureDate" name="departureDate">
    <span id="departureDateError"></span>

    <label for="returnDate">Return Date:</label>
    <input type="date" id="returnDate" name="returnDate">
    <span id="returnDateError"></span>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price">
    <span id="priceError"></span>

    <label for="availability">Availability:</label>
    <input type="checkbox" id="availability" name="availability">
    <span id="checkboxError"></span>

    <label for="category">Category:</label>
    <select id="category" name="category">
      <option value="Adventure">Adventure</option>
      <option value="Family">Family</option>
      <option value="Couple">Couple</option>
      </select>

    <button id = "button" type="submit">Add Offer</button>
  </form>

</body>
</html>

