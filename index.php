<?php

/* 
 * Copyright (C) 2015 Nemes Dávid
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

    ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="sytle.css" type="text/css" media="screen" />
        <link rel="icon" type="image/ico" href="images/favicon.ico" />
        <title>BSS munkanapló</title>
    </head>
    
    <body>
        
        <!-- Fejléc -->
        <div id="fejlec_div">
<?php
require_once './lib.php';    
if (kiaz() == "Vendég") {
    include './fejlec.php';
} else {
    include './b_fejlec.php';
}
?>
        </div>
        
        <!-- Tartalom -->
        <div id="tartalom_div">
            <?php
            
            ?>
        </div>
        
    </body>
</html>

<?php
    ob_end_flush();
?>