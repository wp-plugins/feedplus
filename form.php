<?php

 function adminForm() {
	 
?>
<div class="wrap">
<h2>Feed Plus Options</h2>
<p>Mit diesem Plugin bist du in der Lage in deinem Feed vor oder nach jedem Beitrag einen Text einzufügen. Besonders geeignet für kleine Informationen oder Werbeanzeigen.</p>

<h3>Gefällt dir dieses Plugin?</h3>
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMaechlerme%2F197548726945568&amp;layout=box_count&amp;show_faces=false&amp;width=250&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:65px;" allowTransparency="true"></iframe>

<h3>Anwendung</h3>
<p>Gib hier deinen Text ein (Nur HTML - Kein PHP) Du kannst <b>vor</b> oder <b>nach</b> dem Beitrag einen Text eingeben.</p>
<p>Sonderzeichen und Umlaute m&uuml;ssen konvertiert sein. </p>
<p><b>Beispiel</b></p>
<p><strong>from:</strong> &amp;copy; 2008-2011 Maechler.me - &lt;a href="http://www.maechler.me"&gt;Maechler.me&lt;/a&gt;</p>
<p><strong>you would get this output:</strong> &copy; 2008-2011 Mächler.me - <a href="http://www.maechler.me/">Maechler.me</a></p>
<hr />
<?php
  
  if ($_REQUEST['submit']) {
   saveForm();
  }
 showForm();
 }
  if ($_REQUEST['vorweg']) {
   update_option('before', "");
  }
  if ($_REQUEST['hinweg']) {
   update_option('behind', "");
  }

    if ($_REQUEST['disclaimer']) {
    	$hstr="Bitte Besuchen sie doch mal unsere Homepage: <a href=\"";
     	$hstr=$hstr . get_bloginfo('url');
     	$hstr=$hstr . '">';
     	$hstr=$hstr . get_bloginfo('url');
      $hstr=$hstr . '</a>';
   update_option('before', $hstr);
  }
 function saveForm() {
  if ($_REQUEST['before']) {

  update_option('before', $_REQUEST['before']);
  }
  if ($_REQUEST['behind']) {
  update_option('behind', $_REQUEST['behind']);
 }
 }


function showForm() {

  $default = get_option('before');
  if ($default=="") {$default=" ";}
  $default = str_replace("&","&amp;",$default);
  $default = str_replace("<","&lt;",$default);
  $default = str_replace(">","&gt;",$default);
  $default = str_replace("\"","&quot;",$default);
  $default = str_replace("\\","",$default);
  $default2 = get_option('behind');
  if ($default2=="") {$default2=" ";}
  $default2 = str_replace("&","&amp;",$default2);
  $default2 = str_replace("<","&lt;",$default2);
  $default2 = str_replace(">","&gt;",$default2);
  $default2 = str_replace("\"","&quot;",$default2);
  $default2 = str_replace("\\","",$default2);

  
  echo '<h2>Optionen</h2>';
  echo '<form method="post">';
  echo '<label for="before"><strong>Dieser Text wird <b>VOR</b> dem Beitrag gezeigt: </strong>';
  echo '<input type="text"  name="before" size="122" maxlength="300" value="' . $default . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit" value="Sichern">';
//  echo '</form>  ';

 // echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 300px" name="disclaimer" value="Voreinstellung">';
  echo '</form><br/>';


  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 250px" name="vorweg" value="Reset">';
  echo '</form>';
  echo '<br /><br />';

  echo '<form method="post">';
  echo '<label for="behind"><strong>Dieser Text wird <b>NACH</b> dem Beitrag gezeigt: </strong>';
  echo '<input type="text"  name="behind" size="122" maxlength="300" value="' . $default2 . '">';
  echo '</label><br /><p></p>';
  echo '<input type="submit" style="height: 25px; width: 250px" name="submit" value="Sichern">';
  echo '</form><br />';
  echo '<form method="post">';
  echo '<input type="submit" style="height: 25px; width: 250px" name="hinweg" value="Reset">';
  echo '</form>';
  
  ?>
  <hr />
  <div class="wrap">
  <h2>Infos</h2>
  <p>Dies ist das Feed Plus Plugin - Programmiert von Eric-Oliver M&auml;chler - Weitere Informationen unter <a href='http://www.maechler.me/2011/03/wordpress-plugin-feed-plus/' target='_blank'>Feed Plus - Plugin Seite</a></p>
  <h3>News</h3>
  <p>Das hier ist die direkte Facebook anbindung. HIer findest du immer die neuesten News über meine Plugins und ihre Updates</p>
 <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FMaechlerme%2F197548726945568&amp;width=600&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=400" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:600px; height:450px;" allowTransparency="true"></iframe>
  <p>Meine Plugins sind alle 100% Gratis, trotzdem würde ich mich über eine kleine Spende freuen damit ich mir hin und wieder ein Starbucks Kafi leisten kann - <b>Danke</b></p>
  <h3>Unterstütze mich</h3>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4T6AUJC3QC9UJ">
<input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/de_DE/CH/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110306-1/de_DE/i/scr/pixel.gif" width="1" height="1">
</form>
  
  
  </div>
  <?php
 }
?>