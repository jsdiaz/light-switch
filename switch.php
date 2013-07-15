<?php 
$stateVar = $_POST['stateVar'];
$idVar = intval($_POST['idVar']);
if ($idVar > 0) {
   if ($stateVar == "on") {
       echo '<div class="map_image" style="background-image: url(\'img/on.png\');">
       <a class="map_link" id="map_link_0" title="On" href="#" onClick="return false" onmousedown="javascript:toggleSwitch(\'',$idVar,'\',\'on\');">On</a>
       <a class="map_link" id="map_link_1" title="Off" href="#" onClick="return false" onmousedown="javascript:toggleSwitch(\'',$idVar,'\',\'off\');">Off</a>
       </div>';
       system("br -x /dev/ttyS0 -cM -n$idVar");
   } else if ($stateVar == "off") {
   echo '<div class="map_image" style="background-image: url(\'img/off.png\');">
       <a class="map_link" id="map_link_0" title="On" href="#" onClick="return false" onmousedown="javascript:toggleSwitch(\'',$idVar,'\',\'on\');">On</a>
       <a class="map_link" id="map_link_1" title="Off" href="#" onClick="return false" onmousedown="javascript:toggleSwitch(\'',$idVar,'\',\'off\');">Off</a>
       </div>';
       system("br -x /dev/ttyS0 -cM -f$idVar");
   }
}
?>
