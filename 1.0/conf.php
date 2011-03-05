<?php
 include 'form.php';
 function save() {
  adminForm();
 }
 function FP() {
  add_options_page('Feed Plus', 'Feed Plus', 1, 'FP', 'save');
 }
 add_action('admin_menu', 'FP');
?>
