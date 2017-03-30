<?php 
$pageTitle='Events'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/events.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<div class="text">
	The conference will be preceded by an Opening Reception on <?php echo $json['header']['dateTitle'];?>. The Conference Banquet will be held on <?php echo $json['header']['dateTitle'];?>, and the Closing Reception will be held on <?php echo $json['header']['dateTitle'];?>. All these events are included in the conference registration. Please watch this page for further information on events at the conference.

</div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>