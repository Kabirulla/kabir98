<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage(){
             $.ajax({
                type: "GET",
                url: '/getmsg/vdfs?ia=1x',
                success: function(data) {
                    alert(data.msg);
                }
            });
         }
      </script>
   </head>
   
   <body>
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>
       <button onclick="getMessage()">Click</button>
   </body>

</html>