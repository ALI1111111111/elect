<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Candidate</title>
</head>
<body>
    @include('chak.header')

<h1>      Add Candidate</h1>

<form method="POST" action="{{ URL::to('/cand/add/store')}}">
    @csrf
<label for="candname"> Add candidate Name*  </label>
<input type="text" name="candname" id="candname" required ><br>

<label for="candinfo">  More Information  </label>

<input type="text"   name="candinfo" id="candinfo">
<br>
<input type="submit" value="submit data">

</form>
</body>
</html>
