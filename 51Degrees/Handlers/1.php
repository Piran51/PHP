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
function E1($target, $test, $ls) {
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
function _H1($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Amoi-F90/Plat-F/WAP2.0/MIDP1.0/CLDC1.0 UP.Browser/6.2.2.6.f.1.100 (GUI) MMP/1.0';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,12619,913, $ua, '15364-17017-3625-18092');
  }
  $ua = 'Amoi 8512/R23.0 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R21.0 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R18.0 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R22.0 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R18.5 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R18.7 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  $ua = 'Amoi 8512/R28.0 NF-Browser/3.3';
  $ns = E1($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,27583,37296,913, $ua, '15364-17017-3601-18092');
  }
  return $dl;
}
