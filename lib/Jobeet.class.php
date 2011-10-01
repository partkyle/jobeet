<?php

/**
 * Jobeet
 **/
class Jobeet
{
  static public function slugify($text)
  {
    $text = preg_replace('/\W+/', '-', $text);
    $text = strtolower(trim($text, '-'));

    if (empty($text))
    {
      return 'n-a';
    }

    return $text;
  }
}
