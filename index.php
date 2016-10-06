<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="form_style.css" rel="stylesheet" type="text/css" />

</head>
<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<body>
<div style="padding-top:50px">
<form action='insert.php' method='post' id='myform'  class="smart-green">
    <h1>Ajax Form
      <br>
    </h1>
    <label>
        <span>Your Full Name :</span>
        <input id="username" type="text" name="username" placeholder="Your Full Name"  />
    </label>
    
    <label>
        <span>Your Message :</span>
        <input id="password" type="text" name="password" placeholder="Your Message"  />
    </label>
    
    
    
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" id="insert" value="Send" /> 
    </label>    
    <p id='result'></p>
			
			<script src='insert.js'></script>
</form>
</div>
</body>
</html>