<?php

// htmlspecialchars()関数は名前が長いので、e()関数に置き換えている
function e(string $str, string $charset = 'UTF-8'): string {
  return htmlspecialchars($str, ENT_QUOTES | ENT_HTML5, $charset, false);
}
