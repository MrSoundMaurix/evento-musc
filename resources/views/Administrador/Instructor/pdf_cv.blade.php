<!DOCTYPE html>
<html lang="es">
<head>
  <title>CV Instructor {{ $instructor->ins_nombres }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <table align="center" border="1" width="90%" cellspacing="0" bordercolor="000">
    <tbody>
      <tr>
        <td width="30%"><b>Nombres completos:</b></b></td><td>{{ $instructor->ins_nombres }} {{ $instructor->ins_apellidos }}</td>
      </tr>
      <tr>
        <td><b>Hoja de vida:</b></td><td><?php echo $instructor->ins_cv[1]; ?></td>
      </tr>
      <tr>
        <td><b>Tema:</b></td><td><?php echo $instructor->ins_cv[0]; ?></td>
      </tr>
      <tr>
        <td><b>Resumen:</b></td><td><?php echo $instructor->ins_cv[2]; ?></td>
      </tr>
      <tr>
        <td><b>Materiales:</b></td><td><?php echo $instructor->ins_cv[3]; ?></td>
      </tr>
      <tr>
        <td><b>Materiales:</b></td><td><?php echo $instructor->ins_cv[4]; ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>