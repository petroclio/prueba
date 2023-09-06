<html>
<head>
<title></title>
</head>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
<div align="center">Primer fomulario
</div>
<div align="center">
  <form  id="form2" name="form2" method="post"  action="agregaar.php"
  action="condicion.php">
    <label></label>
    <table width="320" border="1">
      <tr>
        <td>Nombre</td>
        <td><label>
          <input name="nombre" type="text" id="nombre" />
          </label>        </td>
      </tr>
      <tr>
        <td>apellido</td>
        <td><label>
          <input name="apellido" type="text" id="apellido" />
          </label>        </td>
      </tr>
      <tr>
        <td>primera nota</td>
        <td><label>
          <input name="nota1" type="number" id="nota1" />
          </label>        </td>
      </tr>
      <tr>
        <td>segunda nota</td>
        <td><label>
          <input name="nota2" type="number" id="nota2" />
          </label>        </td>
      </tr>
      <tr>
        <td>tercera nota</td>
        <td><label>
          <input name="nota3" type="number" id="nota3" />
          </label>        </td>
      </tr>
      <tr>
        <td>cuarta nota</td>
        <td><label>
          <input name="nota4" type="number" id="nota4" />
          </label>        </td>
      </tr>
    </table>
    <p>
      <input type="submit" name="Submit" value="calcular" />
    </p>
  </form>
  </div>
<p align="center">&nbsp;</p>
</body>
</html>