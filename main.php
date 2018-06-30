<!DOCTYPE html>
<html>
<head>
 <title>main Website</title>
 <style type="text/css">
 body {
   margin: 0px;
   padding: 0px;
   background-image: url(b.jpg);
   background-size: cover;
   opacity: 0.7;
  }
  .logo {
   float: left;
      width: 11%;
      box-shadow: 3px 2px 10px black;
  }
 
  nav {
   height: 53px;
   margin-left: 80px;
   overflow: hidden;
      background-color: #04863e;
      float: left;
      width: 80%;
      box-shadow: 0px 2px 10px black;
  }
  
  nav ul {
   display: inline;
  }
  nav ul li {
   display: inline-block;
      cursor: pointer;
      padding: 15px;
      transition background-color: 0.3s;
  }
  nav li a {
   text-transform: uppercase;
      text-decoration: none;
      color: #ffffff;
      font-size: 20px;
      font-weight: 300;
      padding: 20px;
  }
  nav ul li:hover ul{
  visibility:visible;
  }
  nav ul li:hover {
   background-color: red;
  }
  h1{
    font-family: verdana;
    
    padding-top: 80px;
  }
   h2{
    font-family: verdana;
 
  }
  p{
    font-family: sans-serif;
  }
 </style>
</head>
      <body>
            <div class="logo">
            <img src="ne.png" alt="logo">
            </div>
                <nav>
                  <ul>
                    <li><a href="A.php">Kelas A</a></li>
                    <li><a href="B.php">Kelas B</a></li>
                    <li><a href="C.php">Kelas C</a></li>
                    <li><a href="D.php">Kelas D</a></li>
                    <li><a href="E.php">Kelas E</a></li>
                    <li><a href="Login.php">Log out</a></li>
                  </ul>
                </nav>

              <h1>SELAMAT DATANG!!</h1>
              <h2>Petunjuk Penggunaan</h2>
              <p><strong>1. Pilih Tombol navigasi kelas apa yang anda ingin tahu mata kuliahnya</strong></p><br>
              <p><strong>2. Klik tombol tersebut</strong></p><br>
              <p><strong>3. Kalau sudah selesai lihat, bisa log out :)</strong></p>
      </body>
</html>