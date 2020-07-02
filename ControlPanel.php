
<!--Waad AlSaleh-->
<!DOCTYPE html>
<html>
 <style>
     
     .stop {background-color: #f44336;
         font-size: 24px;
         border-radius: 8px;
     }
     .s{text-align: center;}
     .f{text-align: center;}
     .b{text-align: center;}
     
     .flex{ display: flex;
            flex-direction: column;}
     .forward{font-size: 16px;
     padding: 14px 40px;
     border-radius: 8px;}
     .left {font-size: 16px;
     padding: 14px 40px;
     border-radius: 8px;}
     .right {font-size: 16px;
     padding: 14px 40px;
     border-radius: 8px;}
     .back {font-size: 16px;
     padding: 14px 40px;
     border-radius: 8px;}
     
     
  </style>
    
<body style="background-color:powderblue;">
    
    <div class='flex'>
        <form method="get" action="View.php">
          <legend align="center"> Control Panel </legend>  
    <div class='f'><button type="submit" name="f" class='forward'>Forward</button></div>
    <div class='s'>
        <button type="submit" name="l" class='left'>Left</button> 
        <button type="submit" name="s" class='stop'>STOP</button>
        <button type="submit" name="r"class='right'>Right</button> </div>
                <div class='b'><button type="submit" name="b" class='back'>Backward</button></div> 
                </form> </div> 
    
        
</body>
</html>