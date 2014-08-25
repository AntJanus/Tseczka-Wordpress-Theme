<?php

function readTime($content) {
  $wordCount = str_word_count(strip_tags($content));
  $m = floor($wordCount / 200);
  $s = floor($word % 200 / 200 / (200 / 60));
  $m = $s >= 30 ? $m++ : $m;

  return $m . ' minute' . ($m == 1 ? '' : 's');
}
