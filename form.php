<?php
 function adminForm() {
  echo '<div class="wrap">';
  echo '<h2>Feed Plus Options Seite</h2>';
  echo '<h3>Usage</h3>';
  echo '<p>Gib hier deinen Text ein (Nur HTML - Kein PHP) ';
  echo 'Du kannst <b>vor</b> oder <b>nach</b> dem Beitrag einen Text eingeben. </p>';
  echo '<p>Sonderzeichen und Umlaute m&uuml;ssen konvertiert sein. </p>';
  echo '<p></p><hr size="2">';
  echo '<h3>Example</h3>';
  echo '<p><strong>from:</strong> &amp;copy; 2008-2011 Annubis Blog - &lt;a href="http://www.annu.biz"&gt;Annubis Blog&lt;/a&gt;</p>';
  echo '<p><strong>you would get this output:</strong> &copy; 2008 Annubis Blog - <a href="http://www.annu.biz/">Annubis Blog</a></p><hr size="2">';
  echo '<h3>Optionen</h3>';
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
  if ($default=="") {$default="...";}
  $default = str_replace("&","&amp;",$default);
  $default = str_replace("<","&lt;",$default);
  $default = str_replace(">","&gt;",$default);
  $default = str_replace("\"","&quot;",$default);
  $default = str_replace("\\","",$default);
  $default2 = get_option('behind');
  if ($default2=="") {$default2="....";}
  $default2 = str_replace("&","&amp;",$default2);
  $default2 = str_replace("<","&lt;",$default2);
  $default2 = str_replace(">","&gt;",$default2);
  $default2 = str_replace("\"","&quot;",$default2);
  $default2 = str_replace("\\","",$default2);

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
  echo '<br /><br /><hr size="2">';
  echo '<p>Dies ist das Feed Plus Plugin - Programmiert von Eric-Oliver M&auml;chler</p>';
  echo 'Weitere Informationen unter <a href="http://www.annu.biz/wordpress-plugin-feed-plus/" target="_blank">Plugin Seite</a>';

  echo '</div>';
 }
?>