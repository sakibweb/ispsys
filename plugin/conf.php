<?php
  // Block direct access to the file
  if(!defined('Play_Load')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
  }
  
  // Block all requests
  if(!defined('Play_Load')) {
    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
      header('HTTP/1.0 405 Method Not Allowed');
      exit;
    }
  }
  
  // Action
  $playload = "dnc5ZDN2Z3B6NVZjbEVOU1ljZm4rS2FTYUZLY0lsTjRDSkJCKzFBT2ljYmc2MDFvWUVodHpzRmgyclB6Z1kwZQ==";
?>
