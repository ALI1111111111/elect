<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    
    <button id="led1" onclick="changeText(this)"> Wait Util Data Come </button>
    <script>
        $(document).ready(function(){
            getval();
            setInterval(getval,7000);

          function getval(){
            $.get("http://192.168.10.8/elect/public/ard/1", function(data, status){
                if(data==1){
                    document.getElementById("led1").innerHTML = "LEd is Power On";

                }else{
                    document.getElementById("led1").innerHTML = "LEd is Power Off";
                }
              
            });
          }
        });
        </script>

</body>
</html>