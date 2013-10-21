<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the edit distance between the two strings.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The edit distance between the two strings.
 */
function E108($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H108($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Tiny Tiny RSS/1.9 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,272122,55546,913, $ua, '15364-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.10 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,272122,55546,913, $ua, '15364-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.5.5 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.5.10 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.5.11 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.5.9 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.6.0 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.5.8.1 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.6.1 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.6.2 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.2 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.4 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.5 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.8 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.6 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.7.9 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  $ua = 'Tiny Tiny RSS/1.8 (http://tt-rss.org/)';
  $ns = E108($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273084,272122,55546,913, $ua, '18254-7480-17470-18092');
  }
  return $dl;
}
