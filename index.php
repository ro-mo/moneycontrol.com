<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}

header {
  background-color: rgb(200, 15, 15);
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav{
  float: right;
  padding: 20px;
  width: 15%;
  background-color: rgb(170, 170, 170);
  height: auto;
}

nav ul {
  text-align: center;
  list-style-type: none;
  padding: 0;
  width: 200px;
}

article {
  float: left;
  padding: 20px;
  width: 85%;
  background-color: #f1f1f1;
  height: auto;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

footer {
  background-color: rgb(10, 120, 15);
  padding: 10px;
  text-align: center;
  color: white;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<header>
  <h2>iGP Manager Tools</h2>
</header>

<section>
  <nav>
    <div id="hormenu">
      <ul>
      <li>
      <a href="#">Menu 1</a>
      <ul>
      <li><a href="#">Submenu 1</a></li>
      <li><a href="#">Submenu 1</a></li>
      <li><a href="#">Submenu 1</a></li>
      <li><a href="#">Submenu 1</a></li>
      <li><a href="#">Submenu 1</a></li>
      </ul>
      </li>
      </div>
    <ul>
      <li><a href="MDLRacingTeam-2.html">Engine Supplier</a></li>
      <li><a href="MDLRacingTeam-3.html">Fuel Supplier</a></li>
      <li><a href="MDLRacingTeam-4.html">Tyre Supplier</a></li>
    </ul>
    <ul>
      <li><a href="index.html">HOME</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

<footer>
  <p>iGP Manager<a href="https://igpmanager.com/app/p=league&id=105966"> League Championship</a></p>
</footer>

</body>
</html>
