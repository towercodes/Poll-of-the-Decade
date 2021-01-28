<html>
<head>
<title> Vaccine of Choice  Poll </title>
</head>
<body>
<h1>The Vaccine Poll</h1>
With each vaccine having a level of effectiveness given by the producer, it is evident not all vaccines are made equal. Choose your most trusted Covid-19 Vaccine provider below: <br>
<form action = "{{ url('create') }}" method = "post">
@csrf
<input type = "radio" name = "choice" value = "Pfizer"> Pfizer <br>
<input type = "radio" name = "choice" value = "Moderna"> Moderna <br>
<input type = "radio" name = "choice" value = "AstraZeneca"> AstraZeneca <br>
<input type = "submit" value = "Vote and view results">
</form>
</body>
</html>
