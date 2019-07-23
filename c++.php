<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andrew Snavely's Website</title>

<style>

 
  #div1 {
      background-color:rgb(128, 128,155);
      height: 400px;
      width: 800px;
      border: 2px solid blue;
      margin: 120px;
  }


  #div2 {
      background-color:rgb(128, 128,155);
      height: 300px;
      width: 800px;
      border: 2px solid blue;
      margin: 120px;
  }
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 156px;
  text-decoration: none;
}

li {
  border-right: 1px solid #bbb;
}

.active {
  background-color: #1E90FF;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #333;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #333;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,230,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 166px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #1E90FF;}

.dropdown:hover .dropdown-content {
  display: block;
}
 

     </style>
     </head>
<body>
  <form>
    <img src= "Anaheim.jpg" width= "100%" height= "150px">
    <ul>
        <li><a  href="firstWebApp.php">Home</a></li>
        <li class="dropdown">
          <a class="active" href="#Projects" class="dropbtn">Projects</a>
            <div class="dropdown-content">
              <a href="c++.php">C++</a>
              <a href="#">Java</a>
              <a href="#">Python</a>
            </div>
        </li>
        <li><a href="Contacts.php">Contacts</a></li>
        <li><a href="About.php">About</a></li>
    </ul>

    </body>
    </html>