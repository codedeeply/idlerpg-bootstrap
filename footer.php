    </main>
    <footer class="footer">
      <div class="container">
        <p>Questions? Comments? Suggestions? Bugs? Naked pics?
        <?php print $admin_nick?>@IRC.
        <?php
          $hits = file("hits.db");
          $fp = fopen("hits.db", "w");
          $thispage = explode("/",$_SERVER['PHP_SELF']);
          $thispage = array_pop($thispage);
          if ($fp == false) {
              echo "Error: could not open file hits.db.";
          }
          foreach ($hits as $line) {
              list($page,$numhits,$date) = explode("\t",trim($line));
              if ($page == $thispage) {
                  ++$numhits;
                  echo "            $numhits hits since $date";
                  $found = 1;
              }
              if ($fp) {
                  fwrite($fp,"$page\t$numhits\t$date\n");
              }
          }
          if (!$found && $fp) {
              echo "            1 hit since ".date("M j, Y",time());
              fwrite($fp,$thispage."\t1\t".date("M j, Y",time())."\n");
          }
          fclose($fp);
        ?>
        </p>
      </div>
    </footer>
    <script language="javascript" src="script.js"></script>
  </body>
</html>
