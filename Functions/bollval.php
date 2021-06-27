<?php 

echo '0:        '.(boolval(0)   ? 'True' : 'False'). "\n";
echo '42:       '.(boolval(42)  ? 'True' : 'False'). "\n";
echo '0.0:      '.(boolval(0.0) ? 'True' : 'False'). "\n";
echo '"":       '.(boolval("")  ? 'True' : 'False'). "\n";
echo '"string": '.(boolval("string") ? 'True' : 'False')."\n";
echo '"0":      '.(boolval("0") ? 'True' : 'False')."\n";
echo '"1":      '.(boolval("1") ? 'True' : 'alse')."\n";
echo '[1, 2]:   '.(boolval([1, 2]) ? 'True' : 'false')."\n";
echo '[]:       '.(boolval([]) ? 'True' : 'False')."\n";
echo 'stdClass: '.(boolval(new stdClass) ? 'True' : 'False')."\n";


