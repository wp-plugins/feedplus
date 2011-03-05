<?php
 include '../form.php';
 function save() {
  adminForm();
 }
 function FP() {
  //add_options_page('Pimp my Feed', 'Pimp my Feed', 1, 'PMF', 'save');
  add_options_page('Feed Plus', 'Feed Plus', 1, 'FP', 'save');
 }
 add_action('admin_menu', 'FP');
?>
