<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- + -->

  <!-- Bootstrap -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <!-- Bootstrap -->

  <title>albT</title>

</head>

<body>

  {{-- -navbar- --}}
  <nav class="navbar">
    <div class="brand-title">Albania Through Our Eyes</div>
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#booknow">Book Now</a></li>
        <li><a href="#booknow">Contact</a></li>
      </ul>
    </div>
  </nav>
  {{-- -end-of-na vbar- --}}


  {{-- mainSlideShow --}}
  <section class="intro" id="home">
    <div class="slideshow">

      <div class="slideshow-item">
        <img src="./img/ksamil.jpg" alt="">
        <div class="slideshow-item-text">
          <h1>Ksamil</h1>
        </div>
      </div>
      <div class="slideshow-item">
        <img src="./img/berat.jpg" alt="">
        <div class="slideshow-item-text">
          <h1>Berat</h1>
        </div>
      </div>
      <div class="slideshow-item">
        <img src="./img/shkoder.jpg" alt="">
        <div class="slideshow-item-text">
          <h1>Shkoder</h1>
        </div>
      </div>
      <div class="slideshow-item">
        <img src="./img/theth.jpg" alt="">
        <div class="slideshow-item-text">
          <h1>Theth</h1>
        </div>
      </div>
  </section>
  {{-- endOfMainSlideShow --}}

  <br>
  <br>
  <br>
  <br>

<!-- slideShow -->
  <main class="container" id="tours">
    <h1><span>Main destinations</span></h1>

    <br>
    <br>

    <section class="card" data-aos="fade-right">
      <img src="./img/berat.jpg" alt="" />
      <div>
        <h3>Berat</h3>
        <p>
          Berat is a city on the Osum
          River, in central Albania. It's known for
          its white Ottoman houses.
        </p>
        <br>
        <button id="button" href="#">
          <div class="left"></div>
          <a href="#booknow"> Book now</a>
          <div class="right"></div>
        </button>
      </div>
    </section>

    <section class="card" data-aos="fade-left">
      <img src="./img/ksamil.jpg" alt="" />
      <div>
        <h3>Ksamil</h3>
        <p>
          Ksamil is a village and a former
          municipality in the riviera of Southern Albania, and part of
          Butrint National Park.
        </p>
        <br>
        <button id="button" href="#booknow">
          <div class="left"></div>
          <a href="#booknow"> Book now</a>
          <div class="right"></div>
        </button>
      </div>
    </section>

    <section class="card" data-aos="fade-right">
      <img src="./img/shkoder.jpg" alt="" />
      <div>
        <h3>Shkodër</h3>
        <p>
          Shkodër is the fifth-most-populous city of the Republic of Albania and the seat of Shkodër County and Shkodër Municipality. 
          The city sprawls across the Plain of Mbishkodra between the southern part of Lake Shkodër and the foothills of the Albanian Alps on the banks of Buna, Drin and Kir.
          Due to its proximity to the Adriatic Sea, Shkodër is affected by a seasonal Mediterranean climate with continental influences.
        </p>
        <br>
        <button id="button" href="#">
          <div class="left"></div>
          <a href="#booknow"> Book now</a>
          <div class="right"></div>
        </button>
      </div>
    </section>

    <section class="card" data-aos="fade-left">
      <img src="./img/theth.jpg" alt="" />
      <div class="cardInf">
        <h3>Theth</h3>
        <p>
          Theth is a small village within Shkodër County, Albania.
        </p>
        <br>
        <button id="button" href="#">
          <div class="left"></div>
          <a href="#booknow"> Book now</a>
          <div class="right"></div>
        </button>
      </div>
    </section>

    <section class="card" data-aos="fade-right">
      <img src="./img/tropoje.jpg" alt="" />
      <div>
        <h3>Tropojë</h3>
        <p>
          Tropojëis a municipality and town in Kukës County,northeastern Albania, within the historical ethnographic region of the Gjakova Highlands.
          Tropojë Municipality is located on the bank of Valbonë River between the Albanian Alps in northeastern Albania bordering Montenegro to the northwest and Kosovo to the northeast and east.
          The area is known for its massive chestnuts forests and the river Valbonë, as well a rich folk culture.
        </p>
        <br>
        <button id="button" href="#">
          <div class="left"></div>
          <a href="#booknow"> Book now</a>
          <div class="right"></div>
        </button>
      </div>
    </section>
  </main>
  <!--  endOfCards  -->


  
  <!-- book now -->
  <section id="booknow">
    <form action="{{ url('insert-data') }}" method="POST">
      {{ csrf_field() }}
  <div class="wrapper">
    <div class="title">
      Book now
    </div>
    <div class="form"  >

      <div class="inputfield">
        <label>Name</label>
        <input type="text" class="input" name="name" required>
      </div>

      <div class="inputfield">
        <label>Email</label>
        <input type="email" class="input" name="email" required>
      </div>
      <div class="inputfield">
        <label>Phone</label>
        <input type="tel" class="input" name="phone" required>
      </div>

      <div class="inputfield">
        <label>City</label>
        <div class="custom_select">
          <select name="city" required>
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
        <label>Rooms</label>
        <div class="custom_select">
          <select name="rooms" required>
            <option value="">Select</option>
            <option value="1-room">1 Room</option>
            <option value="2-room">2 Rooms</option>
            <option value="3-room">3 Rooms</option>
          </select>
        </div>
      </div>

      <div class="inputfield">
        <label>Check-in</label>
        <input type="date" class="input" name="checkIn" required>
      </div>

      <div class="inputfield">
        <label>Check-out</label>
        <input type="date" class="input" name="checkOut" required>
      </div>

      <div class="inputfield">
        <label>Adults (+18)</label>
        <input type="number" class="input" name="adults" required>
      </div>

      <div class="inputfield">
        <label>Children (0-17)</label>
        <input type="number" class="input" name="children" required>
      </div>

      <div class="inputfield terms">
        <label class="check">
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
        <p>Agreed to terms and conditions</p>
      </div>
      <div class="inputfield">
        <input type="submit" value="Book" class="btn" name="btn">
      </div>
    </div>
  </div>
</form>
</section>
  <!-- endBooking -->


  <!-- services -->
  @include('index')
  <!-- endOfServices -->
<br><br>




  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="./js/script.js"></script>
  <script>
    AOS.init({
      offset: 400,
      delay: 0,
      duration: 1000
    });
  </script>
</body>


</html>