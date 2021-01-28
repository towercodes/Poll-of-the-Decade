<html>
<head>
<title>Vaccine of Choice Results</title>
</head>
<body>
<h1> {{ $output['total'] }} votes cast </h1>
<table>
<tr> <th> Vaccine </th> <th> Votes Cast </th> <th> Percentage </th> </tr>
<tr> <td> Pfizer </td> <td> {{ $output['pf'] }} </td> <td> {{ $output['pf%'] }}% </td> </tr>
<tr> <td> Moderna </td> <td> {{ $output['md'] }} </td> <td> {{ $output['md%'] }}% </td> </tr>
<tr> <td> AstraZeneca </td> <td> {{ $output['az'] }} </td> <td> {{ $output['az%'] }}% </td> </tr>
</table>
<strong> Thank you for voting </strong>
</body>
</html>