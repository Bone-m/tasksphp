<?php
$age = 12;
$shoo_size = 13;
if ($age > $shoo_size) {
    print ' Massege 1';
} elseif (($shoo_size++) && ($age > 20)) {
    print "Massege 2";
} else {
    print "Massage 3";
}
print " Age: $age . Shoo size:  $shoo_size";
