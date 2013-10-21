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
function E75($target, $test, $ls) {
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
function _H75($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'PhilipsW635/1.0 Linux/2.6 Android/2.3 Browser/AppleWebKit533.1 Profile/MIDP-1.0 Configuration/CLDC-1.0';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,90496,90502,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'PhilipsX623 MAUI/10A1032MP_ASTRO_W1052 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; ru-RU) Presto/2.5.28 Version/10.10';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(28546,321856,143787,913, $ua, '18088-22857-18373-18092');
  }
  $ua = 'Philips X116';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196554,124708,55546,913, $ua, '15040-18110-17470-18092');
  }
  $ua = 'Philips292 / Obigo Browser 2.0';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(229049,229043,55546,913, $ua, '15493-7336-17470-18092');
  }
  $ua = 'PHILIPS9A9W ObigoInternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(252580,252652,55546,913, $ua, '15719-19948-17470-18092');
  }
  $ua = 'PHILIPS859 ObigoInternetBrowser/2.0';
  $ns = E75($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(423111,252652,55546,913, $ua, '16863-19948-17470-18092');
  }
  return $dl;
}
