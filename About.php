<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>

<style>
   
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
  padding: 14px 166px;
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
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 130px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #1E90FF;
}
     </style>
     </head>
<body>
    <img src= "Anaheim.jpg" width= "100%" height= "150px">
    <ul>
        <li><a  href="firstWebApp.php">Home</a></li>
        <li class="dropdown">
          <a href="#Projects" class="dropbtn">Projects</a>
            <div class="dropdown-content">
              <a href="c++.php">C++</a>
              <a href="#">Java</a>
              <a href="#">Python</a>
            </div>
        <li><a href="Contacts.php">Contacts</a></li>
        <li><a class="active" href="About.php">About</a></li>
    </ul>
    <h1>About</h1>
    <p>
        This website is for testing and working on to get better.
        <br><br>
        This web application will show off some designs and layouts I've been working on and 
        and hope to improve on. I will show some of my personal information such as where I went to school
        and my accomplishments I achieve at school. I will also provide links to some of my project via Github as well.
    </p>

    </body>
    </html>