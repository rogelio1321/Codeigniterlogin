
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
  h1 {text-align:center;}
  table {
  width;25%;
  background-color:aqua;
  border: 2px dotted #f00;
    margin:auto;}
  
  .izq{text-align: right;}
  .der{text-align: left;}
  .td{text-align: center;
  padding: 10px;
  }
  </style>
</head>
<body>
<h1> 
  
Iniciar sesion</h1>
<?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
<table>
  <tr>
    <td for="username" class="izq"> Username: </td>
    <td class="der"><input type="text" name="username"/></td>
  </tr>
  <tr>
    <td for="password" class="izq"> Password: </td>
    <td><input type="password" id="username" name="password"/>
  </tr>
  <tr>
    <td height="26" colspan="2"><input type="submit" value="Login"></td>
  </tr>
</table>


<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

