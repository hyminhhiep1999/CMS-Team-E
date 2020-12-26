<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-27">
<div class="login_Contact">
<div class="container">
  <h2>LOGIN</h2>
  <form action="a" class="form_login_account">
    <label id="1" class="text_Name_frorm_inout">
      UserName or Email address *
    </label>
    <input type="text" class="user_name_input">
  </form>
  <form action="a" class="form_login_account">
    <label id="2" class="text_Name_frorm_inout">
      Password *
    </label>
    <input type="text" class="user_name_input">
  </form>
  <div class="rememberme">
    <input type="checkbox"/>
    Remember me
  </div>
  <button type="submit">
    LOG IN
  </button>
  <div class="lost_password">
    <a href="">
      Lost your password? 
  </a>
  </div>
</div>
</div>







</div>