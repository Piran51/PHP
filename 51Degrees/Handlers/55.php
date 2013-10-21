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
function E55($target, $test, $ls) {
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
function _H55($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'LCT_L300B_01/L3PM510/WAP2.0 Profile';
  $ns = E55($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(188917,27583,55546,913, $ua, '15341-17017-17470-18092');
  }
  $ua = 'LCT_X880B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E55($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,321856,100029,913, $ua, '15364-22857-3807-18092');
  }
  $ua = 'LCT_D800B_01/1.0 Nucleus/1.13.21 MTK6225/07A Release/5.1.2008 Browser/TelecaQ03C1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E55($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,321856,100029,913, $ua, '15364-22857-3807-18092');
  }
  $ua = 'LCTW660 NetFront/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E55($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(374738,27583,16666,913, $ua, '14542-17017-3976-18092');
  }
  return $dl;
}
