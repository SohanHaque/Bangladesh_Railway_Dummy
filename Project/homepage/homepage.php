<html>
    <head>
    <meta charset="UTF-8">
    <title>RAIL SHEBA HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="stylep.css">

    </head>
    <body>
        <div>
    <header>
   
    <div class="logo_box">
    <div>
        <td><img src="bdRailwayLogo.png" height="80px" alt="Bangladesh Railway" class="logo_img"></td>
        <td><h2 style="color: #DA924E" class="logo_text">Bangladesh<br>Railway</h2></td>
    </div>
    </div>
    <nav>
    <div class="ul_li">  
    <ul>
    <li><a href="http://localhost/Project/homepage/homepage.php">Home</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Loginpage.php">Login</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Registrationpage.php">Register</a></li>
  <li><a href="http://localhost/Project/Login$Reg/Traininformation.php">Train Information </a></li>
  <li><a href="http://localhost/Project/Login$Reg/Contactus.php">Contact Us </a></li>
</ul>
    </div>
    </nav> 
</header>
</div>
          <div class="container1">
        <center>
            <table style= "margin-top:-145px;">
                <tr>
                    <td>
                        <div class="content">
                            <form action="process.php" method="post">
                            <table>
                                    <tr>
                                        <td><p>Suggestions: <span id="txtHint"></span></p></td>
                                        <td><p>Suggestions: <span id="txtHint2"></span></p></td>
                                    </tr>
                                    <tr>
                                        <td><label for="from">From</label><br><input type="text" id="form" placeholder="From Station" onkeyup="showHint(this.value)" required>ㅤ</td>
                                        <td><label for="to">To</label><br><input type="text" id="to" placeholder="To Station" onkeyup="showHint2(this.value)" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="date">Date of Journey</label><br><input type="date" id="date" placeholder="Pick a Date" required></td>
                                        <td><label for="class">Choose a Class</label><br><input type="text" id="class" placeholder="Choose a Class" required></td>
                                    </tr>
                                </table>
                                <br>
                                <button type="submit">Search Trains</button><br>
                            </form>
                        </div>
                    </td>
                
                    <td>
                        <div class="small_box">
                            <img src="homesrc.jpg">
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <center>
        <section>
    <div class="menu-items" style="padding-top:250px;display:flex; padding-left:280px;">
                        <tr>
                            <td>
                            <div class="small_box" style=" display: block; justify-content:space-between; margin-bottom: 112px; column-gap: 15px; margin-inline: 100px;" >
                            <img src="pay.png" class="img-fluid">
                            <h2>Search </h2>
                            <p style="">Choose your origin, destination,<br> journey dates and search for trains </p>
                                   
                        </div>
                        <div class="small_box"  style=" display: block; justify-content:space-between; margin-bottom: 112px; column-gap: 15px; margin-inline: 120px;">
                            <img src="select.png"  class="img-fluid">
                            <h2>Select</h2>
                            <p>Choose your origin, destination,<br> journey dates and search for trains </p>
                            
                        </div>
                        <div class="small_box"  style=" display: block; justify-content:space-between; margin-bottom: 112px; column-gap: 15px; margin-inline: 135px;margin-top: -30px;">
                            <img src="search.png"  class="img-fluid">
                            <h2>Pay</h2>
                            <p>Choose your origin, destination,<br> journey dates and search for trains </p>
                     
                        </div>

                            </td>

                        </tr>
                   
                        

            </div>
    
            </section>

    </center>
<center>
<div class="instruction-secion" style="padding-top: 0px;display:flex; padding-left:415px;padding-right:320px;">
    <tr>
        <td>
        <div class="big_box">
        <img src="instruction-secion-image.png" style="height: 50vh;">
         </div>
        </td>
    </tr>

    <div style="text-align: -moz-left;">
    <tr>
        <td>
        <h2 style="padding-left: 32px;color: green;">Instructions to Purchase Tickets</h2>
    <ul style="color: green; font-size:20px">
        <li>Tickets can be bought online ten days in advance.</li>
        <li>You can pay for the tickets using mobile financial services: bKash, Nagad, Rocket or debit/credit cards: Mastercard, Visa, DBBL Nexus. Other payment options will be available soon..</li>
        <li>In case of payment or transaction failure, the deducted amount would be refunded by your bank or MFS provider within 8 business days..</li>
        <li>In case money has been deducted from your card / mobile wallet but you have not received a ticket confirmation, the deducted amount would be refunded by your bank or MFS provider within 8 business days..</li>
        <li>If you have not received your ticket copy in email, kindly check your Spam / Junk folder. You can also download your ticket copy from the purchase history of your account after you login.</li>
        <li>Download the official Rail Sheba app published by Bangladesh Railway from.</li>
        <li>In case of passengers downloading fake apps or any other app from Google Play which claim to sell train tickets of Bangladesh Railway, the authorities will not take any liability..</li>
    </ul>
    </div>
        </td>
    </tr>
</div>
      
</center>

    <hr>
    <center>
        <div class=money_partner style="display: flex;padding-top: 10px;padding-bottom: 10px;padding-inline: 113px;margin: 25px;justify-content: space-evenly;">
        <div class="allbox">
                        <img class="boxsmall" >
                        <img src="bkash.png" style="height: 6vh;">           
                        </div>
                        <div class="boxsmall" >
                            <img src="nagad-32.png" style="height: 6vh;">                     
                        </div>
                        <div class="boxsmall" >
                            <img src="master-card.png" style="height: 6vh;">                     
                        </div>
        </div>                   
    </center>
    <hr>
    <div>
        <h4 style="text-align: center;">* The Tickets are issued by Bangladesh Railway's Centrally Computerized Seat Reservation & Ticketing System (CCSRTS) and Shohoz-Synesis-Vincen JV is responsible for designing, <br>
        development, implementation, technical operation & maintenance of the system.</h4>
        
        
    </div>
<hr style="color: green;border-bottom-style: solid;">

<footer style="background: #F6F9FF;padding: 0px 50px;height: 119px;width: 100%;overflow: hidden;">
<div>
    <div>
        <div>
            <img src="bdRailwayLogo.png" style="height: 10vh;padding-left: 310px; margin-top: 15px;">
        </div>
        <div>
            <p style="font-weight: bold;font-size: 24px;line-height: 0px;color: #DA924E;padding-left: 405px;margin-top: -60px; padding-top: 0px;">Bangladesh Railway</p>
            <p style="font-size: 13px;line-height: 15px;text-align: center;color: #006747;font-weight: 400;padding-top: 8px;padding-right: 9in;">নিরাপদ . আরামদায়ক . সাশ্রয়ী</p>
        </div>
    </div>
    <div style="padding-left: 9in;margin-top: -60px;">
        <a href="http://localhost/project1/homepage/Terms.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none; font-size:17px;">Terms and Condition |</a>
        <a href="http://localhost/project1/homepage/privacy.php" style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;text-decoration: none;font-size:17px;">Privacy Policy</a>
    </div>
    <div>
        <p style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;margin-top: -45px; padding-left: 10in; font-size:20px;">POWER BY Group 7</p>
        <div style="font-style: normal;font-weight: 700;font-size: 13px;line-height: 23px;text-align: center;color: #006747;padding-top: 15px;margin-top: 8px; padding-left: 10in;font-size:20px;">
            21-44604-1
        </div >

    </div>

</div>
</footer>
<script>
    
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "gethint.php?q="+str);
  xhttp.send();   
}

function showHint2(str) {
    if (str.length == 0) { 
    document.getElementById("txtHint2").innerHTML = "";
    return;
  }
  const xhttp2 = new XMLHttpRequest();
  xhttp2.onload = function() {
    document.getElementById("txtHint2").innerHTML =
    this.responseText;
  }
  xhttp2.open("GET", "gethint.php?q="+str);
  xhttp2.send();
}
</script>

    </body>
</html>
