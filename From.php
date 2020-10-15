<!DOCTYPE html>
<html>
<body>
<form action="result.php" method="post">  
    <fieldset>			
			<legend align="center"> Registration </legend>
<table style="width:100 ">
    			
			
    <tr>
    <td><label for='fram'>First Name:</label><br></td>
    <td><input type='text' id='textbox' ></td>    
    </tr> 
    
    <tr>
    <td><label for='fram'>Email:</label><br></td>
    <td><input type='text' id='textbox' required></td>    
    </tr>
    
    <tr>
    <td><label for='fram'>User Name:</label><br></td>
    <td><input type='text' id='textbox'></td>    
    </tr>
    
    <tr>
    <td><label for='fram'>Password:</label><br></td>
    <td><input type='password' id='textbox'></td>    
    </tr>
    
    <tr>
    <td><label for='fram'>Confrim Password:</label><br></td>
    <td><input type='password' id='textbox'></td>    
    </tr>
    
   
    <tr>
    <td><label for='fram'>Gender:</label><br></td>
    <td><input type='radio' id='Male' name="Gender" valu='Male'>Male</td>
    <td><input type='radio' id='Female' name="Gender" valu='Female'>Female</td>
    <td><input type='radio' id='Others' name="Gender" valu='Others'>Others</td>
    </tr>
    
    
    <tr>
    <td><input type="date"><br></td>
    </tr>
    
    <tr>
    <td><input type='submit' ></td>
    <td><input type='reset' ></td>    
    </tr>
       
</table>
    </fieldset>
</body>
</html>