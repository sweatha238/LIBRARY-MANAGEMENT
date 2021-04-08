<!DOCTYPE html>
<html>
<head>
    <title>Fine calculator</title>
    <h1><center>Fine calculator</center></h1>
</head>
<body>
    <style type="text/css">
        body{
            padding: 0;
            margin: 0;
            background-image: url(s1.jpg);
            background-size: cover;
            background-position: center;
        }
        
        #calculator-widget{
            width: 250px;
            padding: 20px;
            margin: 50px auto;
            text-align: center;
            color: #fff;
            font-family: sans-serif;
            border: 10px solid #9b9595;
            border-radius: 8px;
            position: relative;
            box-shadow: 5px 5px 8px 4px #262626;
            
        }
        #calculator-widget:before{
            content: "";
            position: absolute;
            background: linear gradient(#1c1c1c, #000);
            width: 100%;
            height: 65%;
            top: 0;
            left: 0;
            z-index: -1;
            
        }
         #calculator-widget:after{
            content: "";
            position: absolute;
            background: linear gradient(#000000, #464545);
            width: 100%;
            height: 35%;
            top: 0;
            left: 0;
            z-index: -1;
            
        }
        
        #calculator-widget h1{
            padding-bottom: 0px;
            color: #fff;
            word-spacing: 5px;
            letter-spacing: 1px;
        } 
        #display-field{
            width: 200px;
            height: 30px;
            text-align: center;
            font-size: 30px;
            font-weight: 500;
            color: #000;
            padding: 10px 15px;
            margin: 0 auto 30px;
            background: #fff;
            border: 5px solid #c00;
        }
        form{
            border: 2px solid #9b9595;
            padding: 15px;
        }
        input{
            font-size: 30px;
            font-weight: 900;
            padding: 0 30px;
            margin-bottom: 20px;
            background: #0deddc;
            color: #000;
            border: none;
        }
        select{
            font-size: 30px;
            font-weight: 900;
            padding: 0 30px;
            margin-bottom: 20px;
            background: #0deddc;
            color: #000;
            border: none;
            border-radius: 30px;
            width: 100px;
            text-align: center;
        }
        button{
            font-size: 35px;
            font-weight: 900;
            width: 200px;
            padding: 3px 10px;
            border-radius: 4px;
            color: #000;
            background: ##c9c1c1;
            
        }
    
    
    
    </style>
    <section id="calculator-widget">
        <h1>FINE CALCULATOR</h1>
        <div id="display-field">
<?php
          if(isset($_GET['submit']))
              
             $result1 = $_GET['num1'];
            
             $result2 = $_GET['num2'];
             
             $operator = $_GET['operator'];
            
             switch ($operator)
             {
            case"+";
               echo $result1 + $result2;
            case "-";
               echo $result1 - $result2;
            case "*";
               echo $result1 * $result2;
            case "/";
               echo $result1 / $result2;
        }
     
?>
             

</div>
    <form>
        <input type="text" name="num1" placeholder="number 1"><br>
        <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
        </select><br>
         <input type="text" name="num2" placeholder="number 2"><br>
        <button type="submit" name="submit" value="submit">=</button>
        </form>
    </section></body></html>