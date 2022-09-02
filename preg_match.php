<?php

// p218 電話番号の正規表現
$str = '彼の電話番号は0399-88-9785、私のは0398-99-1234です。郵便番号はどちらも687-1109です。';

// p217 preg_match関数を覚えたらいい
if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data)) {
  print "電話番号：{$data[0]} <br />";
  print "市外局番：{$data[1]} <br />";
  print "市内局番：{$data[2]} <br />";
  print "加入者番号：{$data[3]} <br />";
}
/*
if(preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_OFFSET_CAPTURE)) {
  print_r($data);
}
*/

