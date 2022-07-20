<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>

  {{-- css --}}
  <link rel="stylesheet" href="./css/p4.css">
  {{-- ] --}}
</head>

<body>

  <div class="wrapper" id="booknow">
    <div class="title">
      Book now
    </div>
    <div class="form">

      <div class="inputfield">
        <label>Name</label>
        <input type="text" class="input" name="name">
      </div>

      <div class="inputfield">
        <label>Email</label>
        <input type="email" class="input" name="email">
      </div>
      <div class="inputfield">
        <label>Phone</label>
        <input type="tel" class="input" name="phone">
      </div>

      <div class="inputfield">
        <label>City</label>
        <div class="custom_select">
          <select>
            <option value="">Select</option>
            <option value="ksamil">Ksamil</option>
            <option value="berat">Berat</option>
            <option value="theth">Theth</option>
            <option value="shkoder">Shkoder</option>
            <option value="tirane">Tirane</option>
            <option value="tropoje">Tropoje</option>
          </select>
        </div>
      </div>

      <div class="inputfield">
        <label>Apartment</label>
        <div class="custom_select">
          <select>
            <option value="">Select</option>
            <option value="1-room">1 Room</option>
            <option value="2-room">2 Rooms</option>
            <option value="3-room">3 Rooms</option>
          </select>
        </div>
      </div>

      <div class="inputfield">
        <label>Check-in</label>
        <input type="date" class="input" name="check-in">
      </div>

      <div class="inputfield">
        <label>Check-out</label>
        <input type="date" class="input" name="check-out">
      </div>

      <div class="inputfield">
        <label>Adults (+18)</label>
        <input type="number" class="input" name="adults">
      </div>

      <div class="inputfield">
        <label>Children (0-17)</label>
        <input type="number" class="input" name="children">
      </div>

      <div class="inputfield terms">
        <label class="check">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <p>Agreed to terms and conditions</p>
      </div>
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </div>
  </div>

</body>

</html>