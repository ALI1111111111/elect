<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        th,td{
            border: 1px solid black
        }
        </style>
</head>
<body>


    <h1>  Total Candidates  </h1>

    <h3>  <a href="cand/add"> Add Candidate  </a> </h3>



    <table>

<tr>
<th>  Name  </th>
<th>  More Info </th>

</tr>
@foreach ($candidates as $cand )
<tr>

<td>  {{$cand->candname}} </td>
<td>  {{$cand->candinfo}} </td>

</tr>
@endforeach




    </table>

</body>
</html>
