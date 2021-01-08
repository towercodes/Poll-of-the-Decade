<html>
<title>Poll of the Decade</title>
<body>
<h1>Welcome to the third decade of the century</h1>
Select your favourite decade of the century below: <br>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/poll/votes" method="post">
    <?= csrf_field() ?>

<input type="radio" name="dec"  value = "2000s">2000s  <br>
<input type="radio" name="dec"  value = "2010s">2010s  <br>
	<input type="radio" name="dec"  value = "2020s">2020s  <br>

    <input type="submit" name="submit" value="Vote">

</form>
