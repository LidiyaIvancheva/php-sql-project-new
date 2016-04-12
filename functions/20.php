<?php
function makeevent($types = array("Berlin"), $eventMaker = NULL)
{
    $device = is_null($eventMaker) ? "us" : $eventMaker;
    return "Make a nice event in ".join(", ", $types)." with $device.\n";
}
echo makeevent();
echo makeevent(array("Berlin", "Germany"), "Eventer");
?>