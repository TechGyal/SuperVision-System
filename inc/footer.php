<?php
/**
 * Include the app
 * footer here
 */
require('appNames.php');
echo '	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © ' . date('Y') . ' ' . $appName . '
        </div>
      </div>
    </footer>
	<!--End footer-->';