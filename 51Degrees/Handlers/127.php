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
 * Calculates the matching score between the two strings for this handler.
 *
 * @param &$target string
 *   The string we're trying to find the closest value to.
 * @param $test string
 *   The string that we're testing against.
 * @param $ls integer
 *   The lowest score we've found so far.
 * @return integer
 *   The score between the two strings.
 */
function E127(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * @param $useragent string
 *   The useragent we're trying to find.
 * @return array
 *   An array of device details for the closest devices.
 */
function _H127($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Java/)\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#Windows .+\\)#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Max OS X \\d+\\.\\d#', $useragent));
  $ns = E127($segments, array(0 => array(0 => '1.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Java/1.5.0_10', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.4'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Java/1.4.2_04', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.8'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Java/1.8.0-ea', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Java/1.6.0_35', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,55546,913, 'Java/1.7.0_25', '15364-17017-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,615842,431062,913, 'Mozilla/4.0 (Mac OS X 10.8.2) Java/1.7.0_09', '17595-18207-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => array(0 => 'Windows XP 5.1)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,49449,55546,913, 'Mozilla/4.0 (Windows XP 5.1) Java/1.6.0_24', '15364-5690-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,49449,55546,913, 'IBM-LC-Base-Notes_8.5.3.X_0921-Windows XP Java/1.6.0', '15364-5690-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => array(0 => 'Windows XP 5.1)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,49449,55546,913, 'Mozilla/4.0 (Windows XP 5.1) Java/1.7.0_09', '15364-5690-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,431062,913, 'Mozilla/4.0 (Mac OS X 10.7.4) Java/1.6.0_33', '17595-17297-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,356240,431062,913, 'Mozilla/4.0 (Mac OS X 10.7.5) Java/1.7.0_09', '17595-17297-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,176505,431062,913, 'Mozilla/4.0 (Mac OS X 10.6.8) Java/1.6.0_51', '17595-17296-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => array(0 => 'Windows 7 6.1)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,55546,913, 'Mozilla/4.0 (Windows 7 6.1) Java/1.6.0_31', '15364-7133-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => array(0 => 'Windows 7 6.1 amd64; en_US)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,55546,913, 'Mozilla/5.0 (Java 1.6.0_17; Windows 7 6.1 amd64; en_US) ICEbrowser/v6_0_2 Java/1.6.0_17', '15364-7133-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,55546,913, 'IBM-LC-Base-Notes_8.5.3.X_0921-Windows 7 Java/1.6.0', '15364-7133-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => array(0 => 'Windows 7 6.1)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,55546,913, 'Mozilla/4.0 (Windows 7 6.1) Java/1.7.0_07', '15364-7133-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,47912,431062,913, 'Mozilla/4.0 (Mac OS X 10.5.8) Java/1.5.0_30', '17595-17295-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,27583,186754,913, 'Java/1.7.0_21', '15364-17017-18589-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => array(0 => 'Windows Vista 6.0)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,50308,55546,913, 'Mozilla/4.0 (Windows Vista 6.0) Java/1.7.0_09', '15364-17285-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.6'), 1 => array(0 => 'Windows Vista 6.0)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,50308,55546,913, 'Mozilla/4.0 (Windows Vista 6.0) Java/1.6.0_37', '15364-17285-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.5'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(47831,273172,431062,913, 'Mozilla/4.0 (Mac OS X 10.4.11) Java/1.5.0_19', '17595-17294-18108-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.7'), 1 => array(0 => 'Windows 8 6.2)'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,285120,55546,913, 'Mozilla/4.0 (Windows 8 6.2) Java/1.7.0_25', '15364-16110-17470-18092');
    $ls = $ns;
  }
  $ns = E127($segments, array(0 => array(0 => '1.0'), 1 => NULL, 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(383167,27583,37296,913, 'New York/R3.0 NF-Browser/3.3 Openwave-MMS/4.5 IA-Java/1.0 Profile/MIDP2.0/CLDC1.1', '14680-17017-3601-18092');
    $ls = $ns;
  }
  return $dl;
}
