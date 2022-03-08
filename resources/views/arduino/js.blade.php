<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali-Iot-system</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <button id="led1"  name="On"> Wait Util Data Come </button>
    {{-- <button id="sendval"    > change </button> --}}
    <script>
        $(document).ready(function(){
            getval();
            setInterval(getval,7000);

            sendval();
            var val = document.getElementById("led1").innerHTML;

function sendval(){
    $("#led1").click(function(){
    // $.get("http://192.168.10.9/elect/public/ard/1", function(data, status){
        var data = document.getElementById("led1").innerHTML;
                if(data=="LEd is Power oFF"){
                    document.getElementById("led1").innerHTML = "LEd is Power On";

                    $.post("http://192.168.10.9/elect/public/ard/btn",
  {
    '_token': $('meta[name=csrf-token]').attr('content'),
    On: 0,

  },
  function(data, status){
    // alert("Data: " + data + "\nStatus: " + status);
    // alert( "\nStatus: " + status);

  });

                }else if(data=="LEd is Power On"){
                    document.getElementById("led1").innerHTML = "LEd is Power oFF";

                    $.post("http://192.168.10.9/elect/public/ard/btn",
  {
    '_token': $('meta[name=csrf-token]').attr('content'),
    On: 1,

  },
  function(data, status){
    // alert("Data: " + data + "\nStatus: " + status);
    // alert( "\nStatus: " + status);

  });
                }

            // });




});
}

          function getval(){
            $.get("http://192.168.10.9/elect/public/ard/1", function(data, status){
                if(data==1){
                    document.getElementById("led1").innerHTML = "LEd is Power oFF";

                }else{
                    document.getElementById("led1").innerHTML = "LEd is Power On";
                }

            });
          }
        });
        </script>

</body>
</html>
