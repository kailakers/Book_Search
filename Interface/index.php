<!DOCTYPE html>
<html>
<style>
form {
  background-color: lightgrey;
  width: 160px;
  border: 5px solid green;
  padding: 50px;
  margin: 20px;
}
input[type=submit]{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  font-weight: bold;
  border-radius: 20px;
}
.content {
  max-width: 500px;
  margin: auto;
}
.footer {
   padding: 4px;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #e6e6e6;
   color: black;
}
</style>
</head>
<body style="background-image: url('background.jpg');background-repeat: no-repeat;background-size: 100% 100%;">
<div class="content">
<h2 style="margin-left: 80px; background-color: lightgreen; width: 120px; padding: 10px;">Find Books</h2>

<form action="search.php" method="GET">
  <label for="title">Book Title:</label><br>
  <input type="text" id="title" name="title" value=""><br><br>

  <label for="author">Author:</label><br>
  <input type="text" id="author" name="author" value=""><br><br>

  <label for="min_year">Publish Year:</label><br>
  <input type="text" id="min_year" name="min_year" value="" maxlength="4" size="4" type="number">
  <label for="max_year"> To </label>
  <input type="text" id="max_year" name="max_year" value="" maxlength="4" size="4" type="number"><br><br>

  <label for="category">Category:</label><br>
  <select id="category" name="category">
    <option value="All">All</option>
    <option value="Children">Children</option>
    <option value="Nonfiction">NonFiction</option>
    <option value="Fiction">Fiction</option>
    <option value="Self-Help">Self-Help</option>
    <option value="Tweens">Tweens</option>
    <option value="Business">Business</option>
    <option value="Economics">Economics</option>
    <option value="Psychology">Psychology</option>
    <option value="Religion ">Religion </option>
    <option value="Drama">Drama </option>
    <option value="Family">Family  </option>
  </select><br><br>

  <label for="language">Language:</label><br>
  <select id="language" name="language">
    <option value="All">All</option>
    <option value="English">English</option>
    <option value="Spanish">Spanish</option>
    <option value="French">French</option>
    <option value="Polish">Polish</option>
    <option value="Indian">Indian</option>
    <option value="Farsi">Farsi</option>
    <option value="Chinese">Chinese</option>
  </select><br><br>

  <label for="publisher">Publisher:</label><br>
  <input type="text" id="publisher" name="publisher" value=""><br><br><br>

  <input type="submit" value="Search">
</form> 

</div>

<div class="footer">
  <img src="osu.png" alt="OSU logo" style="width:240px;height:80px;">
  <p style="padding: 5px;">This website is developed as a part of CS540 course at Oregon State University.</p>
  <span style="padding: 5px;">Developed by:</span><a href="mailto:sina.jahedi@oregonstate.edu">Sina Jahedi<a><br>
  <a href="mailto:chenpi@oregonstate.edu" style="margin-left: 103px;">PinCheng Chen<a><br>
  <a href="mailto:georgejo@oregonstate.edu" style="margin-left: 103px;">Joel Varghese George <a><br>
  <a href="mailto:huangkai@oregonstate.edu" style="margin-left: 103px;">KaiHung Huang<a><br>
  
</div>


</body>
</html>
