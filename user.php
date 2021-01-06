<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<style type="text/css">
  body {
  background: #f39c12;
}
.center-on-page {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%,-50%);
          transform: translate(-50%,-50%);
}
h1 {
  text-align: center;
}
/* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #2c3e50;
  background-image: none;
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 20em;
  height: 3em;<
  line-height: 3;
  background: #2c3e50;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #34495e;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}
.select::after {
  -webkit-transition: .25s all ease;
  transition: .25s all ease;
}
</style>
  
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


<script>
    $(function() {
        $('#colorselector').change(function(){
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
<title>HomeDo</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->


<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
  background: #555;
  color: #f1f1f1;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
</style>

</head>
<body>




<div class="header" id="myHeader" style="z-index: 10">
 <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#" style="color: white">HomeDo</a></h1>
      <h2>Aparment Management</h2>
    </div>
    
    <nav>
      <ul>
        <li><a href="#container">Home</a></li>
        <li><a href="#homepage">Payment</a></li>
        <li><a href="#admin">Administration</a></li>
        <li><a href="#sekiz">Profile</a></li>
       
      </ul>
    </nav>
  </header>
</div>




<!-- content -->
<div class="wrapper row2">
  <div name = "home" id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
      <figure><img src="images/demo/630x300.jpg" alt="">
        <figcaption>
          <h2> <?php
session_start();
  
  echo $_SESSION['FirstName'];
 

?>  Welcome to user page of our apartment!</h2>
          <p>Here you can do your apartment tasks. </p>
          
        </figcaption>
      </figure>
    </section>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
        <article class="two_quarter">
          <h2>The particulars</h2>
          <pre>Get payment                   
Payment Histories


           </pre>
        </article>
        <!-- article 2 -->
        <article class="two_quarter lastbox">
          <figure>
            <ul class="clear">
              <li><a href="#"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSEhMWFhUVFRUVFRcXGBYXFRYVFRUWFxUXFxYYHSggGh0lHRcVITEhJSkrLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGi0lICYtLzItLy0uLS0vLS0uLTcrLy0tLS0yLS0tLS0tMDctLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOAA4QMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAAAQIEBQcGAwj/xABDEAACAQICBQkGBAQEBgMAAAABAgADEQQSISJRkaEFBhMxQXGBsdEHUmFyweEyQpKyI2KiwhQzQ4JTo7PS8PEVY3P/xAAbAQEAAgMBAQAAAAAAAAAAAAAAAgMBBAUGB//EADIRAQACAQIEAgkEAwEBAQAAAAABAgMEEQUSITFBUUJhcYGRobHB0RMiMvAj4fFSYhT/2gAMAwEAAhEDEQA/AO4wEBAhWvAmAgICAgICAgICAgICAgIEK19MCYCAgICAgICAgICB82aBZIFoCAgICBUmBFvjAsDAmAgICAgIHzZoF16oEFwOswxvELQyQEBAqTAiBYGBMBA+bNAlVgXgICAgICBQfWAgWAgTA+VbEIv4nVe8geczETPZG1617zEMCvziwi9ddD8pzftvLIwZJ9GWrbiGmr3yR7uv0YVXnjhh+HpH+VCP3WlkaXJ4qLcWwR/HefZE/fZh1eevuYdj8zqvleTjSedlFuL/APnHPvmI/LFqc7MQ34UpJtvmY279ElGmpHjKE8Sz27VrHt3n8MGtzgxTGwrAfIij91zLIwY48GtfXam09L7eyI++755cZU/NiWvsLhdy2Ez/AIq+SHLqcnjefj9toa/E4KzFXU5hoNySwPeZbW/TeGtk08RMxaOvze+5n4pqmFXOxZlLISes5WNr+FpztRWK5J2ej4ZktfTxzTvMbx8J/DdyhvkBAosBAsBAmBDCBVVgXgICAgY1fH0U/HVRfmZR5mSitp7Qrvlx0je1oj2ywK/OfCL11lPy3f8AaDLI0+SfBq34lpa+nHu6/Rh1eedAfhSq3coA/qIk40t/HZRbi+GP4xafd+dmFW56MfwYfxZwOAB85ONJ52U24vb0cfxn8bsOpzsxR6hSXwZjxIHCWRpcceai3E9TPaKx8ZYrct4x9HTt3IqDyBMl+jjjwUzq9Vf0590R+N1f8Hi6nX/iGv7zVAOJAmebFXyY/Q1OTvzz7Zn/AE+tHmlXP+ko+Zl+5mJ1NI8U68KyT6Me/wDss+jzOq/mdF7gT9BK51VfCGzThWTxmI/vuZtLmcn5qrH5VA87yE6qfCGxXhVfStP9+LLp81cOOsM3exH7bSudReV1eHYK+c+9mUeRcONPQp4i/neQnLefFfGlwx6MM2nRVfwqB3ADykJmZ7rorWvaFwZhJ4DnXSy4l/5grf0geYM6OnnfHDznEK7Z59ezbcwan8Osmyrm/Wi/9plOrjrE+pt8Ht+y9f8A6+sQ9VNR2CAgQRAAQJgICAgICB4T2icsYpKlOhhi4zIXYoCXbWy2BAuLW7Ns2sFKzEzZyeI581bRTFv18njxyRynX/EmIa//ABCw/wCoRNjnxV8nM/Q1eTvFvf8A7ZnJXMXGFiSqJl0HM4uDYH8t+wiYjVY4lm3B9TavXaN/Ofxu9Fg+YVQEF6yC3uqW87TFtbG20Qnh4Fesxa14+G/4binzPp/mqOe7KPMGUzqreEOjHC6eNp+TMpc2MMOtC3ezfQiQnUXnxXV4dgjw398syjyTQXqpJ+kE7zK5y3nxX102GvasfBlqgHUAO7RILoiI7I6QbRDJn+B3H6wGY7N9vpAa3wG8+kBlO3cPW8CDbtbjbygRq7L+BPGBdT8LboHjee9K1VG2pb9LH/uE3tLP7Zhw+KV/yVn1fT/qvMSpatWT3kRv0sw/uEauP2xKPCbRGa9fOIn4bx93tpou8QEBAQEBAQEBAQNBjGvi8PXSzUxTr06jgiwByFNJOnWUjRLImOSYa96W/WraI6bTE/Zl4nl6ijIt8xd1TVKkguQoJAN7XI6pCK7rcmSKREz5xHx6MqhoqVRtyPvXL/ZIR3lfbrSs+2Pv933zHZvPpeSVmt8BvPpAZTt3W+sCur73H6CAGXZwPnAtmPunhAa3wG8+kBlO3cPW8CGA7W428rQI1e/wLQLA7FPAQFzsG/7QJF+0jd94HmefVPVpNsZl/UAf7ZtaWesw5PFa/trb1/36NNzSq5cYn86VF3Wb+2X6iN8c+1o8Pttqq+uJj7ugznPSEBAQEBAQEBAQEDy/LfJVJTQNGkDbE0+lVQW/hsGDZl06oJU7NEnTbrv5KM/PHLNd/wCUb7eTa4vF4fDoXKgBNJyqAQB1kDRewv1aZGsbztCzJaK15p8GQGHSgj89O/6GFv8AqSHpL464/f8AWP8ATIynbuA+t5JWqcva3G3lAauy/gTxgWDfynh6wF22Df8AaAsdu4epgQRtY7wPKBGr372gSpHYp3AecCbnZvPoICzbRu+8Bl/mPD0gQpW/XfxJ4QNPzxp3w5Puup3nL/dL9NO12hxKu+DfymPw8dyRUy4mg3/2hf1gr9Zu5I3pb2OHgty58c+v69HTZy3qyAgICAgICAgICB5nnVyaqYevWp5xU0VLBmsSGBfV6jcXHjJ44ibREqNTa1cUzTvDY/4DCKpbokIAudTpDbr6rEmRjutttMdX2GIRzQqocyvmCnaGQt29X4BI2ja0brMVovjmY7bRPz2+7KIXZfwJ4zKKwbYp4esBdtg3/aAsdo3feAI2seAgV1e/e0CQR2Lwt5wJzHZvPpeA1vgN59IDKfePCBU5dvE+UAMvYvD6wLZj7u+30ga7nOyjCV2Y2C02ck/ya30k8duW0Spz4v1cc0jxcOw/K5V85qMGLZlsbqpvcG3V1+U59s+WLTO8w9bh4dorY61tStojbado8PHeOu7rfM3nHVxN6dVBmVQxddANzYBl7Ceu40aD1S3Dlm/SXN4locen2tSekz2/vg9VNhyiAgICAgICAgIGp5U5MLdJVSpUV+jIAUjLdQcvZfr2GZjujaZis7d2HyJg6NbD0atQszPTRmzVHtmKjNozbbzN45bTCGG83x1tPjDPz0uiTocuSnURQF6ls4psPgQCZDJv3ldp+WY2r22n5R+YbEk7Bv8AtMsIs20bvvAFdrHh6QK6u2/iTwgEI7FO63nAtmOzefS8BrfAbz6QGU7d1vrArq9rcfoIDV2cD5wLZj7p4esBdtg3k/SAsdu4esDxPtY5RCYVcP2121v/AM6dmbq2tkG+U5rzWOjocP09ct5m8bxEfVxvC4Uu2RLDrIv1C2nTNSb81uazv1wfp4f08XSeu3tdw9mnJ9SnhOkrW6SqxY29xSQm/S3++buOtYjevi85rM2a9+TLMb16dP7+HrZY0yAgDAhTfTAmAgVYwIA74FgYGDyhyeajKwqsmUEWFiDe3YdF/jA1PN/DmvSLVqlQstSrTYByq/w6jKNC27AJO9eWeinBkm9d577zHwlnrQopQqrQIOXOzWbOektm1iSTfq6/hIZN5jr5LtNFIvtHn19/ds+vTfR4QK6u2/iTwgBl7F4W4mBDOT1Dfb6XgWUN8BvPpAnKdu4et4FTbtbjbygNXZfwJ4wLBtinh6wF22Df9oEG+3cPvAqVt1sfEgeUACvfvaBxb2r8rK/KBo0x/lUUVzc6HYl7Ber8Lpv+E19RWOXmdbhOW3POPbp33aXm0qlmF9c2sO0IDpbfbdKMWnvkmNo6OpquI4NLW03tG8R28526R73buZtS+Ep/y5l/S7AcLTq56RS+0dun0eJ0Ga+bBF7zvaZnf27y3cpbhAQPmzXgXXqgTAQKiBBgWAgYvKWHqOFFOp0ZDAnRcEWOg6R/4IGk5LoPUqYik1XIaVQA9GlNc2dFfOdBNzc7pO1doifNTjvE2tXbbafrG7bYHkynTNQhmZqmUOWNzZQQo0AbW3yMzMxsnWsVvNo7zt8n1wDXpUyRc5FB0X0gaeMhXtC/LG159rIzHZvtJK1CxOzifoIErTPadw9bwJNu1uNvKBGrsv4FuMCwbYp4CAudg3/aAs20bvvAFdrHgPpA+a5dt/hcnhAkHYNwt52gfHlDHLRpVKz6EpozsSfyqCT1X2QPzOcU9apUxFT8dao1RvhmYmw+AvYfACamptzXiseD0HCsUY8M5beP0h6jmXhdV6x/Ocq/KvWfE6P9s7Glx8lHiOM6mc2b5/Ht8IdV5hVP4NRfdqm3cyqfO8hq4/dE+pnhFv8AHavlafnES9PNV1gwPmxgWVYFoCAgQRAAQJgY+PpO1MrTfIxtZrXtpF940QNBSp1TiqlEuisaSVS6UwS4zMliWJOrbr09cnMTyxKmLx+rNNuu0Tv5+DZ4PkcJV6Y1Hdshpi+UAAsGOhQL6QLbNO2R5umyXJ+/n9WzJwF8pA7KlQeBdiOBEhXs2MneJ9UfR92UntG6SVqhQPxNxA8rQJ1e/e0CQdincB5wJudm8/aAs20bvvAFdrHh6QK6u2/iTwgBbsXhbzgSST2byPpeBIB+HE+kDnftr5XNPCJhVbXxL2IGj+FTIZj+o0x3ExvERMyzWk3tFK95cjSixy00F2crTQbWYhVE08ETfJzT7XoeI3jBpox18ekezx/vrde5Z5JXCihRX8KUES+1lLZm8Sb+M7emnes+18/4nXbLE+cNlzCqWqV02imw8Myn6SOrjpWfazwi22TJX2T9Yezmk7qriARYFoCAgICAgIFKwbKctg1jlv1Xtov8LwPM1mrriaIdaQrVadRFqAudWnldlIGUaevwMnETNZ8lFrUrlrvHWYnr7OuzZJyVVNWnVevfoyxyqmXNmUrYtmJI03se0CYidomE7U3tE+TMw4s9UHRrK3gUUeamVx3lsX/jWf73fbV797SStKkdi8LedoE3OzefS8BrfDzgMp2nhArq7f6j5QGr7v8AT9TAtmOzfb6QGt8BvPpAZTt3D1vAhrdrcbeUD8/e0Hlb/FcpVWU3p4f+BT03F0J6Q/rLi/aAJTqbbU283T4Th58s3ntX6y2fsr5J6fHioRqYZekOzpGutMfubvSZwV5ab+avieb9TPy+Fenv8fx7nR+fVL/Kb51PjlI8jOhpZ7w8zxWv8be1q+Z1S2Lt79J18Qyt6y3Uxvj97T4bbbVe2s/Kd3v5z3oyAgICAgICAgICB5blPEVQ9GpWogOtbo6LBwFzVQyC4AJsRo07eqTrvMTEKcs0ia2t57R7Z6M7EYLFVMt6iU8ro10NQmysCR1gG4uLEW0zFZ27pZKzaOk7dY+v9hsRorH+amP6Ga/7xK/SbHfH7J+v/H3zHZvPpeSVmt8BvPpAZTt3W+sCpy9rf1ekBq7OB87QLZj7p4esBrfDeTAWO3cPWBDADrbjbygRq9+9oGo538tDB4OviALFEOS9gDUbVpi3zEcZmCX5w5OXQWYk6LknSSTtPafWZtSto2mEsOfJhnek7O6eyTkg0cCtVrB8SxrHRpyHRTF9mUZv95mJ8kd5nrLcc9Kd6APuup3gj6iX6af3udxOu+Hfyn/TynIVTLiqDfzlf1oy+k3Msb47ONpZ5dTjn17fGHSpy3qiAgICAgICAgICB5rnJijkc1qTilSenVV0K/kZWB037ewDqk6b79FOoinJvftG0/BlYsYyojBFWmSNUmppB7DqofrI12ieqeSJmsxXv4M5gQ9IsbnKyE9VyVDE27PwGQn+ULqb/pzE+qft92VlO3cB9bySCpt2txt5QGrsv4E8YFs2xTw9YC7bBv8AtAWO0eA+8CGG1jvA8oEavfvaBKkDqU7recCbnZvPpA5F7c+WSWoYIEf8eoB4pTB/5h8FkqwjLw/IvJhr1aGFXQa1QBjsTrc+CgnwkmH6Qo06aKFXQFACgE2AAsBaVpsTnJTzYap8FzfpIb6S3DO14autrvgt/e3VzsVgr0392pTb9LAzpTG8THql5mbxW1bT4THyl1ech7AgICAgICAgICAgaPnHXzJVoNTqZHpG9RFzAXuDo6hbr0mSrO0xKvLSL0ms+MIwnKFZ6SmlSZlKDK5amtwRoaxLd/VMT3SrMTWNpZNEVRSotXt0iuua1utiaY6tF7OL20XvI5Nt94T0/NyzFu+0/Lr9mwYL2i/gTMsJDbFPAQF22Df9oCx2jd94ArtY8BArq7b+JbhAlbdi8LecCcx2bz6XgNb4DefSBDaBctYDSeoAb4H5m5c5TONxtbEaStSocl76KS6qaD1aoXxJlkRsg9/7HeTA9eti2F1pjoaei+u1mqHvC5f1mYszDreY7DwkEnyx1PNSdfeRhvUiSrO0xKvLXmpavnEuLVKhOkmd2IiHz21ptO8u08nV+kpU3H50Rv1KDOFaNpmH0LFbmx1t5xDIkVhAQEBAQEBAqrXgWgYHKfKC08qsrEOGFwCQLAaDYE6b7IJ6tRzfxpp4enSprUrCmMmcJlUlSRbWbRbq8JPJO9pnZTp6xXHFYnfbpuzadas1Cq1dMhRiyDRcpTs6lgCQDcEeAOiQybbdF2mm032t57R7J6NuSewDf9oEWbaN33gCu1jw9IFdXbfxJ4QJFuxeFvOBOY7N59LwGt8BvPpAZTt3AfW8Cpy9rcbeUDx3tW5YXD8nVAv+ZX/gIdN9cHpCD8ED6dtpmO7EuG4JMqFh19Q75Yi/Q/MXkdsLgaNEgB8uept6R9ZgdHZfL3KJXMpQ31jt3D1mGVrQOCcssVrVafUEqOtvlYj6TsRebVh4i+GMeS0eUy6/zHr58DQOxMn6GKf2zmZo2vL1mhtzaek+r6dG9lTbICAgICAgfNmgWQQLQMXlDHpRUNUNgWCjvN+vYNBgaLkTHJRFVQ3SBq9Woopq7FVqHMFNl673k725tvYpwY5xxMT5zPxbLA4qpWNZHpFadgEZlKFswYMpU9dtGke98JG0Ryp0vaMk7x0jbb8MzBuWpo1yLopPV2gHtkazvC7JXlvMetcldvE+V5lBAVewae76wLhzs3kfSBOt8BvPpAZTt3D1vAg27W428oEauy/gTxgWDbFPAQOG+2Tlc18cmGXSuGUAgdtWrZj32Xox+qTqjKnMjkPpcXQpHSEvVqdoKpbQOwgk5T8wttmZnoRDumW3Wx4DylaSNXv3tAuluwW8LQOJc+KOTHYgbXDfrVW+s6eCd8cPJ8Qry6iz3/str5sGV9yq6+BCt/cZqamNru1wq2+Dbymfy9hNd0lCbwFtkCwMCYCB82a8CVWBeAgfHGV0RC9Q2Udei/bo0d9oGgweMp0sRiKpqJkrdCVAYE5kTK1wL20Bd0na0TWI8lGPHNcl7eE7fJsMJyx0lYU1pkoUZukswAIIABzKOu5tY9hmNum6c3mLxXbw7snA2yWIvlZ1Gi+hXYDgBK69mxl/lv7Po+4Y9VvKSVp1js3kwJCHbuHreBDAdrcbeUCNXv3tAsDsU8BAXOwb/tAxuU8aKFGpXcjJTRnbRpsoJsNPXogfm3A1jVqvXqkZ6jvVqE2KnMSxA2aT1bBo+NiEOr+x7k8CjVxTf6r5Kd/xGnT0XPe1xbYgkbJQ6GtuxeFvORZTmOzefS8Cy37YHJPalQy40N79JG8QWX+0ToaWf2PN8WrtnifOG59kVfVxFPYabj/cGB/aJVq46xLa4PbpavsdDmo7SiwECwECYEMIEKu2BaAgIFKwXKc1stje/VbtveB50PTXFriEZBROHambFV1ukDIcpI7M2mT5o5NvWo5Lfrc/htt82cecNI1KdNTnNRiuqb2spa5HaNB6jomIrvunfJyzWPOdmZhbhqo/nuO5kQ+eaVx4ti/as+r7yyCpPbuGnzklaMoHWx3geUCNXv3tAkEdincB5wJudm8+ggLNtG4+sBlPvHh6QOb+2vloU8NTwyNrYh7vpJtSp2J3uafgGkqsS5aoeoFRBepWZaa9hZmIVb+J8LyaL9HcjYAYehSoINWkioCbC+UWJNu0m58ZUmzNb4DefSAynbuA+t4BbX67nv8ApA5z7XaGth32iop8CpHmZuaSe8OHxmv8Le1g+ymvbFOnY1EnxV1twLSeqj9sSp4RbbLNfOHV5oPRIIgAIEwEBAQEBAQIIvoMDzmPwFMVsNUoouVKtRauQC2VqbC7W67NbR2Xk6zG07qMtbc9Jjwmd/g2OO5ao0gCTfSospQkZiBfLe9h8NPwkYjedlmS8UjmlkL/AJzjsKIfEFwf7ZD0l8/wj2z9n21e/wAS0krSpHYvC3nAnMdm8+l4DW+A3n0gMp2nhArq+9xPlADL7vD6mB+ePaJyt/i+UqpU3SkRQp7LISHPi5fTstJwhLe+yzknpsf0ltTCpm09XSOCqDdmPeoi0sw7ZlO3cPW8gkggdrcbeUCNXZfwJgWU7AeEDxntXoXwtN/drC/wDIw88s2dLP73K4vXfDE+UvGez+tkx9H+bOv6ka3G02dRG+OXL4bbl1FfXv8AR2mc16kgICAgICAgICAgeY5yclUkQPSp3cVqTMq5mLKaq5xkudFiSbDqEnTbfqo1E2iu9fOPhv1basuHpKX6NQF1tWmL6O0WGkyMd1ttojeV0rqz0qim6vTbKewhsjKdwMjMbWWUtFsUzHqll5js3n0vMomt8BvPpAZTt3AfW8Cpy9rcfoIDV2X8D5wLZj7p4esDW85eUWw+ExFewvSo1HXT1sFOUdXabTMEvzRyYtgXOnKL3PWT/wCX3yxB3n2Xci/4fAq1TVqYg9M4OggMB0YPb+EA27Cxldp6pQ9dq9+9phlKnYp3AecCbnYPE/aBNjtG763gef8AaDQzYCttXI36XUnheXYJ2yQ0uIV5tPb++LknINfJiaD+7Wpk92cX4Xm/kjesw83prcuas+uHfZynsSAgICAgICAgICBoOcfJoFLEVqbOtTo2YZWIBZENtXt6pKkRNoiVWe1q47TXvtL6YLk7CtSVzTVsyKxDXc6ygnQbmYnpKUTzU3nxhlCvTdaNSmQUD2FtAGq9O1uyxNrdlpG8TExutw2ras8vbb6T/pnlTt3AfWZRVNu1uNvKBGrsv4E8YFg2xTw9YC7bBv8AtAWO0bvvA8t7TsHWq8m16dG7O3R6t1BKiqjOB8SqnRMx3Ylyn2ec06uJxIWvSqJRpWetnRlD2OrTFxpuev8AlB2iSmejEQ78pA6l4W87SCSbnZvPpeA1vhxMBlO08IDox8d5gYfL1DpMNXTtalUA7yptxkqTtaJVZ682K1fOJcDDW0idZ42J2l+hsLWzorj8yq28AzkTG0va1neIl9ZhIgICAgICAgICBr8dyZ0jioKlRCFy6pFusntBganm5hkxGGp1qxZnYHNeo4GZWKtoB2iTyVitpiFGmyzkxRee7YhaIoFaBXJScEhTezJUDuCdvWTfTpleTfbeWxpuXm5a+uPfP/WxcLfSL+BMywkNsU8B5mAudg3/AGgLNtG77wGT4nh6QHRj/wBkmBquXfyIo0k3sO3sHnAyaVajQQK9RFtpYsyrp7eszMVme0IWyUr1tMQwsTzvwKdeIQ/Ld/2AyyMN58GvbXaeve8fX6NZifaLgl/D0r/Klv3kScaa8qLcVwR23n3flrMR7T0/08Ox+ZwvAAycaWfGWvbjFfRr82sxHtKxR/BTpL3hmO/MBwk40tfGVFuL5fCsQ1eJ5849v9bKNiog42vxlkafHHg17cS1E+lt7oYDcqYysbdLXqfAM5H6RokuSlfCFX62oyT3mfi+uE5r4yqQFw9QX7XUovfdrTE5qR4s00We89KT7+jtPJeGNKjSpE3NOmiE7SqgX4TnWneZl6nFTkpFfKGVIrCAgICAgICAgIGFyjg3qZSlU08pJOjMGuO0EwNNyHh2q9MHq1FNKvUpWTKgIWxU2C9oYGTvXbb1wow5JvzRMbbTMNsnJaJTqql71cxYsxZixQLck/AASFt7RsvxRGO/NHnEz/fcj/5rDqitUrUkuoOs6g6RfqJma1taOkIZcuPHaYtaI97AxHPTAqbdOGPYEV3v4qCJZGG8+DWtr9PWdub4dWsxPtIwi6FSqx+CqBvLX4Scaa8qL8Vw16REy1eI9qHuYbxap9Av1lkaTzlr24z/AOafNrMR7SMYfwrSTuVid5a3CTjS0a9uL5p7RENZieeeOfrxDD5Qi8QLycYMceDXtxDUW9JWnyljK1JqYFaqXNy1nqNbRqqdNho4zE46Rbm6LK6nPfDOOImd56z1np5K4fmnjn0rhnHzWT95ElOakeKquh1Fu1J+n1bLD+zvGt19GnzPf9oMhOpovrwnPPfaPe2lD2YP+fEqPlQtxLCQnV+UNivBp8b/ACbTD+zTDD8dWq3cVUftJ4yudVbyX14RhjvMy2eH5jYBf9HMdrO54XtwkJz5J8WxXh2nr6P1bPD8hYVPwYekPiEW++15XN7T3lsV0+KvasfBsFUDQBbukVu2yYZICBVzAkQJgIFSYEBfCBZTAmAgIHKefVfFYbFVDTqVKdKsVcFSVBbIqtrDt1erum9gilqxv3h57iF82LLPLMxE9ens2ec6DGV/y4ir4VH9ZdvSvk0ZrqMnhafjLLoczcc3Vh2HzFF/cwMjOfHHisrw/UT6P0bnA+z3FdbNSU/MzEeAFr+crtqa+Dbx8Kyx3mIbGn7Mrm9TEW+Cp1dxLfSQ/wD1eULo4PvO9r/CGxw3s2wi/iaq/eygf0rfjITqbyurwnBHfeWzw/MvAJ1UAfmLtwY2kJz5J8WxXQaevo/dtMPyVh6f+XRpr8qKPISE2tPeWxXDjr/GsR7mZIrCBQm8BlgWUwJgICAgIFWa0CgF4H1gICBUQECQIEwEBAQBgfMteBZVgWgICAgICBQQECwECYCAgIEM1oHzGmB9AIEwEBAgiAAgTAQEBAQIYQIVYFoCAgICAgIEEQAECYCAgICBVlvAkCBMBAQP/9k=" width="130" height="130" alt=""></a></li>
              <li><a href="#"><img src="https://img.freepik.com/free-vector/credit-card-payment-concept-landing-page_52683-24768.jpg?size=338&ext=jpg&ga=GA1.2.1095200783.1609372800" width="130" height="130" alt=""></a></li>
              <li class="last"><a href="#"><img src="https://previews.123rf.com/images/ellagrin/ellagrin1606/ellagrin160600004/57553086-vector-mind-map-illustration-communication-mapping-a-group-of-people-to-communicate-on-the-internet-.jpg" width="130" height="130" alt=""></a></li>
            </ul>
           
          </figure>
        </article>
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->

    <p></p>
    <p></p>
    <div name = "payment" id="homepage" class="last clear" style=" top :100px padding-top: 300px;
    margin-top: 100px;;">
      <section class="one_quarter">
        <h2 class="title" style="margin-left: 450px; margin-top: 300px">Payment</h2>
        <article>
          <form action="payment.php" method="post" style="margin-left: 400px">
 Name on Card <br/>
 <input type="text" name="isim" /><br/>
 Card Number <br/>
 <input type="text" name="soyisim" /><br/>
 
 CVV <br/>
 <input type="text" name="cvv" /><br/>
 Price <br/>
 <input type="text" name="price" /><br/>

 <input type="submit" value="Payment" />
</form>

        
        </article>
      </section>
      
     
    </div>
    <p></p>
    <p></p>
   


  <div>
    


        <div class='bborder'></div>
        
      </div>
      <p></p>
      <p></p>
      <div class='solutionsTab be' id="5" style="float: left; margin-top: 300px">
        <h3>Member Informationn</h3>
      <p>
        Name: <?php

  
  echo $_SESSION['FirstName'];
 

?></p>

        <p>Surname: <?php

  
  echo $_SESSION['lastName'];
 

?></p>
      <p>e-mail:<?php

  
  echo $_SESSION['email'];
 

?> </p> 
        Phone: <?php

  
  echo $_SESSION['phoneNumber'];
 

?>
       <p> Building :  <?php

  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


 $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);


if ($stmt = $con->prepare('SELECT flat_id
FROM accounts WHERE username = ?' )) {

$stmt->bind_param('s', $_SESSION['userName']);
  $stmt->execute();
  // Store the result so we can check if the account exists in the database.
  $stmt->store_result();

  
  $stmt->bind_result($flatid);
  $stmt->fetch();

if ($st = $con->prepare('SELECT floor,number
FROM flats WHERE flat_id = ?' )) {

$st->bind_param('s', $flatid);
  $st->execute();
  // Store the result so we can check if the account exists in the database.
  $st->store_result();


$st->bind_result($floor,$number);
  $st->fetch();

  echo "Floor: "; echo $floor; echo " Number: " ;echo$number;


}











}


?>


  


</p>

Loan: 
    <?php

  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


 $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);




if ($st = $con->prepare('SELECT loan
FROM accounts WHERE username = ?' )) {

$st->bind_param('s', $_SESSION['name']);
  $st->execute();
  // Store the result so we can check if the account exists in the database.
  $st->store_result();


$st->bind_result($loan);
  $st->fetch();

  echo $loan;


}














?>




       


     
      
        

  </div>

<div class='solutionsTab ob' id="6" style="float: right ;margin-top: 300px">
        <h2>Payment History:</h2>
        <div class='bborder'  ></div>




  <?php

  $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';


 $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
















?>
<div>


<?php


// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'apartman';




$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$namee = $_SESSION['userName'];

$result = mysqli_query($con,"SELECT accounts.FirstName, accounts.lastName, paids.amount,paids.theDate FROM accounts inner join paids on accounts.id = paids.account_id where accounts.username = '$namee'  ");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Amount</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FirstName'] . "</td>";
echo "<td>" . $row['lastName'] . "</td>";
echo "<td>" . $row['amount'] . "</td>";
echo "<td>" . $row['theDate'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>




</div>



      </div>





    <!-- / content body -->
  </div>
</div>

<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Aparment Management Website</p>
   
  </footer>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>
</html>
