<html>
    <head>
        <meta charset="UTF-8">
        <title>Import</title>
    </head>
    <body>
      <div class="downloads index">
  <?php 
  echo $this->element('users_admin');
  ?>
</div>
        <form action="upload" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label for="fileinput">File to import</label></td>
                    <td><input type="file" name="fileinput" id="fileinput" /></td>
          </tr>
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="  UPLOAD  " /></td>
          </tr>
          </table>
        </form>
    </body>
</html>