<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-56">
   <div class="header-content">
      <img src="<?php bloginfo("template_directory"); ?>/images/56/logo.png" alt="logo">
      <h4>Wave championship has a 5 star Tripadvisor traveller rating and is also <br /> rated #1 
      for Speciality lodging in Baleal Beach, Peniche Portugal.</h4>
   </div>
</div>