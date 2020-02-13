<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<body>

<form  action="{{route('formm')}}" method="post">
    @csrf
    <h1>Register:</h1>
    <!-- One "tab" for each step in the form: -->

   <div class="tab">first step:
       <br>
       <span>
       <ul>
           <li>
       <input name="radiobotton" type="radio" value="yes">
       yes
           </li>
       <br>
           <li>
       <input name="radiobotton" type="radio" value="no">
       no
           </li>
       <br>
       </ul>
       </span>
       <span>
       <ul>
           <li>
               <input name="radiobottonage" type="radio" value="old">
               old
           </li>
           <br>
           <li>
               <input name="radiobottonage" type="radio" value="young">
               young
           </li>
           <br>
       </ul>
       </span>
       <input type="submit" value="submit">
   </div>
</form>
{{--{{print_r($lastdb)}}--}}
@foreach($lastdb as $lla)
    {{unserialize($lla->step1)[1][0]}}
    @endforeach
</body>
</html>
