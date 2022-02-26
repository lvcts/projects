<?php

/**Date */
echo date("l, Y-m-d");
echo "<br>";
echo "1000 hari kedepan adalah hari :";
echo date("l, Y-m-d", time() + 60 * 60 * 24 * 1000);
echo "<br>";
echo date("l,Y-m-d", mktime(0, 0, 0, 2, 17, 2002));
echo "<br>";
echo strtotime("17 feb 2002");
