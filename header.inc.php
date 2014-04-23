<?php
$pages = array( "Home" => "index.php",
                "Configure" => "config.php",
                "FAQ" => "faq.php");

$page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
	
<div id="templatemo_header">



    <div id="templatemo_menu" class="ddsmoothmenu">
      <ul>
<?php
      foreach ($pages as $key => $value)
      {
        if  ($value == $page)
          $selected = "class='selected'";
        else
          $selected = "";

        echo "<li><a href='".$value."' ".$selected.">".$key."</a></li>";
      }
?>
    </ul>
    <br style="clear: left" />
  </div> <!-- end of templatemo_menu -->
        
</div> <!-- end of header -->

