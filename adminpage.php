<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script>
    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>

<link rel="stylesheet" href="style/admin.css">
</head>
<body>



    


<div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="par">

<main>
  
  <h1> Welcome <?php
session_start();
  
  echo $_SESSION['FirstName'];
 

?>  </h1>
  <input id="radio1" type="radio" name="css-tabs" checked>
  <input id="radio2" type="radio" name="css-tabs">
  <input id="radio3" type="radio" name="css-tabs">
  <input id="radio4" type="radio" name="css-tabs">
  <input id="radio5" type="radio" name="css-tabs">
  <input id="radio6" type="radio" name="css-tabs">
  <div id="tabs">
    <label id="tab1" for="radio1">Home</label>
    <label id="tab2" for="radio2">Communications</label>
    <label id="tab3" for="radio3">Pay</label>
    <label id="tab4" for="radio4">Administration</label>
     <label id="tab5" for="radio5">Services</label>
      <label id="tab6" for="radio6">Profile</label>
  </div>
  <div id="content">
    <section id="content1">
      <h3>Based on this Dribbble</h3>
      <p>
        <a href="https://dribbble.com/shots/509024-Tabbed-Menu">
          https://dribbble.com/shots/509024-Tabbed-Menu
        </a>
      </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis adipiscing risus, porttitor viverra urna condimentum et. Donec vestibulum lacus vel dolor dictum pellentesque. Aliquam sodales sem quis urna condimentum, sit amet elementum magna semper.</p>
    </section>
    <section id="content2">
      flat info,
      members,
      chat,
      announcement

    </section>
    

    <section id="content3">
    

     Responsive Checkout Form
    

    </section>
    


    <section id="content4">
<Select id="colorselector">
   <option value="red">Total income</option>
   <option value="yellow">Outcome list</option>
   <option value="blue">Who paid</option>
   <option value="red">pay rate </option>
   <option value="yellow"> add masraf</option>
   <option value="blue">üye ekle</option>
   <option value="red">üye çıkar </option>
   <option value="yellow"> gelenler</option>
   <option value="blue"> gidenler</option>

</Select>
<div id="red" class="colors" style="display:none"> red... </div>
<div id="yellow" class="colors" style="display:none"> yellow.. </div>
<div id="blue" class="colors" style="display:none"> blue.. </div>


        <h1>Aparment admin:</h1>
        <h1> </h1>
        <h1>Total outcome</h1>
        <h1>Outcome list</h1>
        <h1>Who paid</h1>
         pay rate 
        
       add masraf
        üye ekle
        üye çıkar
      gelenler
        gidenler

    </section>
    <section id="content5">
        <h1>Here, you can get reservation for services.</h1>

        <h1>Choose a service</h1>
        <form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select id="cars" name="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
  </select>
  <input type="submit">
</form>

  <form action="/action_page.php">
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday">
  <input type="submit">
</form>

<input type="time" id="appt" name="appt"
       min="09:00" max="18:00" required>






    </section>
    <section id="content6">
      <h3>Member Informationn</h3>
      <pre>
        Name:
        Surname:
        e-mail:
        Phone:
        Flat:
        Number:


      </pre>
       
        

      
    </section>
  </div>
  </div>
  </div>
</div>
<div class="overlay"></div>
  <footer>
    Apartment Management Website by Beytullah Aksoy
  </footer>
</main>
</body>
</html>