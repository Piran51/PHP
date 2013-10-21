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
function E49(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 5, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 5, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 5, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[6], $test[6], $ls, 10000, $score);
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
function _H49($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)[\\d\\.]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Fennec/)[\\d\\.]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Fennec#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=\\()[^\\)]+#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=Gecko/)[\\d]+#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=Firefox/)[\\d\\.]+#', $useragent),
    6 => fiftyone_degrees_preg_match_all('#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#', $useragent));
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.4'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Mobile; rv:10.0.4'), 4 => array(0 => '10'), 5 => array(0 => '10.0.4'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,802449,913, 'Mozilla/5.0 (Android; Mobile; rv:10.0.4) Gecko/10.0.4 Firefox/10.0.4 Fennec/10.0.4', '17968-17979-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.5'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Mobile; rv:10.0.5'), 4 => array(0 => '10'), 5 => array(0 => '10.0.5'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,802449,913, 'Mozilla/5.0 (Android; Mobile; rv:10.0.5) Gecko/10.0.5 Firefox/10.0.5 Fennec/10.0.5', '17968-17979-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.4'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:10.0.4'), 4 => array(0 => '10'), 5 => array(0 => '10.0.4'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,802449,913, 'Mozilla/5.0 (Android; Tablet; rv:10.0.4) Gecko/10.0.4 Firefox/10.0.4 Fennec/10.0.4', '17976-17979-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.5'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:10.0.5'), 4 => array(0 => '10'), 5 => array(0 => '10.0.5'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,802449,913, 'Mozilla/5.0 (Android; Tablet; rv:10.0.5) Gecko/10.0.5 Firefox/10.0.5 Fennec/10.0.5', '17976-17979-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '14.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:14.0'), 4 => array(0 => '14'), 5 => array(0 => '14.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,835718,913, 'Mozilla/5.0 (Android; Tablet; rv:14.0) Gecko/14.0 Firefox/14.0 Fennec/14.0', '17976-17979-18628-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '15.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Mobile; rv:15.0'), 4 => NULL, 5 => array(0 => '15.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,832091,913, 'Mozilla/5.0 (Maemo; Mobile; rv:15.0) Gecko/X Firefox/15.0 Fennec/15.0', '15364-22740-20435-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => NULL, 3 => array(0 => 'Mobile; rv:18.0'), 4 => array(0 => '18'), 5 => array(0 => '18.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(1129172,1129165,1068440,913, 'Mozilla/5.0 (Mobile; rv:18.0) Gecko/18.0 Firefox/18.0', '21032-18615-18522-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '2.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Linux armv7l; rv:2.0.1'), 4 => NULL, 5 => array(0 => '4.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,886276,913, 'Mozilla/5.0 (Android; Linux armv7l; rv:2.0.1) Gecko/X Firefox/4.0.1 Fennec/2.0.1', '17968-17979-20445-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '13.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Mobile; rv:13.0'), 4 => array(0 => '13'), 5 => array(0 => '13.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,810469,913, 'Mozilla/5.0 (Android; Mobile; rv:13.0) Gecko/13.0 Firefox/13.0 Fennec/13.0', '17968-17979-18566-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '1.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'X11; U; Linux armv7l; en-US; rv:1.9.2.1'), 4 => NULL, 5 => array(0 => '3.6.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,445965,913, 'Mozilla/5.0 (X11; U; Linux armv7l; en-US; rv:1.9.2.1) Gecko/X Firefox/3.6.1 Fennec/1.0.1', '15364-18110-15761-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '12.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Mobile; rv:12.0'), 4 => array(0 => '12'), 5 => array(0 => '12.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,737200,913, 'Mozilla/5.0 (Android; Mobile; rv:12.0) Gecko/12.0 Firefox/12.0 Fennec/12.0', '17968-17979-20434-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '11.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Mobile; rv:11.0'), 4 => array(0 => '11'), 5 => array(0 => '11.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,667998,913, 'Mozilla/5.0 (Android; Mobile; rv:11.0) Gecko/11.0 Firefox/11.0 Fennec/11.0', '17968-17979-18186-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '13.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:13.0'), 4 => array(0 => '13'), 5 => array(0 => '13.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,810469,913, 'Mozilla/5.0 (Android; Tablet; rv:13.0) Gecko/13.0 Firefox/13.0 Fennec/13.0', '17976-17979-18566-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '12.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:12.0'), 4 => NULL, 5 => array(0 => '12.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,737200,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:12.0) Gecko/X Firefox/12.0 Fennec/12.0', '15364-22740-20434-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:10.0a1'), 4 => NULL, 5 => array(0 => '10.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,802449,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:10.0a1) Gecko/X Firefox/10.0a1 Fennec/10.0a1', '15364-22740-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.2'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:10.0.2'), 4 => NULL, 5 => array(0 => '10.0.2'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,802449,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:10.0.2) Gecko/X Firefox/10.0.2 Fennec/10.0.2', '15364-22740-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '10.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:10.0.1'), 4 => NULL, 5 => array(0 => '10.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,802449,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:10.0.1) Gecko/X Firefox/10.0.1 Fennec/10.0.1', '15364-22740-18160-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '12.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:12.0'), 4 => array(0 => '12'), 5 => array(0 => '12.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,737200,913, 'Mozilla/5.0 (Android; Tablet; rv:12.0) Gecko/12.0 Firefox/12.0 Fennec/12.0', '17976-17979-20434-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '7.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:7.0.1'), 4 => NULL, 5 => array(0 => '7.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,924097,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:7.0.1) Gecko/X Firefox/7.0.1 Fennec/7.0.1', '15364-22740-17599-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '7.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:7.0'), 4 => NULL, 5 => array(0 => '7.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,924097,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:7.0) Gecko/X Firefox/7.0 Fennec/7.0', '15364-22740-17599-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '13.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:13.0'), 4 => NULL, 5 => array(0 => '13.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,810469,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:13.0) Gecko/X Firefox/13.0 Fennec/13.0', '15364-22740-18566-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '13.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:13.0'), 4 => NULL, 5 => array(0 => '13.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,810469,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:13.0) Gecko/X Firefox/13.0.1 Fennec/13.0', '15364-22740-18566-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => NULL, 3 => array(0 => 'Mobile; rv:12.0'), 4 => array(0 => '12'), 5 => array(0 => '12.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(1129172,1129165,737200,913, 'Mozilla/5.0 (Mobile; rv:12.0) Gecko/12.0 Firefox/12.0', '21032-18615-20434-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '11.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:11.0'), 4 => NULL, 5 => array(0 => '11.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,667998,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:11.0) Gecko/X Firefox/11.0 Fennec/11.0', '15364-22740-18186-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '11.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Tablet; rv:11.0'), 4 => array(0 => '11'), 5 => array(0 => '11.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(393493,80028,667998,913, 'Mozilla/5.0 (Android; Tablet; rv:11.0) Gecko/11.0 Firefox/11.0 Fennec/11.0', '17976-17979-18186-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '14.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:14.0'), 4 => NULL, 5 => array(0 => '14.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,835718,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:14.0) Gecko/X Firefox/14.0.1 Fennec/14.0', '15364-22740-18628-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => NULL, 3 => array(0 => 'Mobile; rv:18.1'), 4 => array(0 => '18'), 5 => array(0 => '18.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(1129172,1129165,1545083,913, 'Mozilla/5.0 (Mobile; rv:18.1) Gecko/18.1 Firefox/18.1', '21032-18615-24713-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '2.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Maemo; Linux armv7l; rv:2.0.1'), 4 => NULL, 5 => array(0 => '4.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,431905,886276,913, 'Mozilla/5.0 (Maemo; Linux armv7l; rv:2.0.1) Gecko/X Firefox/4.0.1 Fennec/2.0.1', '15364-22740-20445-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '2.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'X11; Linux i686 on x86_64; rv:2.0.1'), 4 => NULL, 5 => array(0 => '4.0.1'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,124708,886276,913, 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:2.0.1) Gecko/X Firefox/4.0.1 Fennec/2.0.1', '15364-18110-20445-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '4.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Windows NT 5.1; rv:2.1.1'), 4 => NULL, 5 => array(0 => '4.0.2'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,49449,780123,913, 'Mozilla/5.0 (Windows NT 5.1; rv:2.1.1) Gecko/X Firefox/4.0.2pre Fennec/4.0.1', '15364-5690-24188-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '1.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Windows; U; Windows NT 6.1; en-US; rv:1.9.2.5'), 4 => NULL, 5 => array(0 => '3.6.5'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,1450104,913, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.5) Gecko/X Firefox/3.6.5pre Fennec/1.1', '15364-7133-24189-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '4.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Linux armv7l; rv:2.0'), 4 => NULL, 5 => array(0 => '4.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,780123,913, 'Mozilla/5.0 (Android; Linux armv7l; rv:2.0) Gecko/X Firefox/4.0 Fennec/4.0', '17968-17979-24188-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '5.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Linux armv7l;rv:5.0'), 4 => NULL, 5 => array(0 => '5.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,1352844,913, 'Mozilla/5.0 (Android; Linux armv7l;rv:5.0) Gecko/X Firefox/5.0 Fennec/5.0', '17968-17979-17597-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '4.0.1'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Windows NT 6.1; rv:2.1.1'), 4 => NULL, 5 => array(0 => '4.0.2'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44115,94698,780123,913, 'Mozilla/5.0 (Windows NT 6.1; rv:2.1.1) Gecko/X Firefox/4.0.2pre Fennec/4.0.1', '15364-7133-24188-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '9.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Linux armv7l; rv:9.0'), 4 => NULL, 5 => array(0 => '9.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,1056091,913, 'Mozilla/5.0 (Android; Linux armv7l; rv:9.0) Gecko/ Firefox/9.0 Fennec/9.0', '17968-17979-17601-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => array(0 => '8.0'), 2 => array(0 => 'Fennec'), 3 => array(0 => 'Android; Linux armv7l; rv:8.0'), 4 => NULL, 5 => array(0 => '8.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(130899,80028,1054702,913, 'Mozilla/5.0 (Android; Linux armv7l; rv:8.0) Gecko/ Firefox/8.0 Fennec/8.0', '17968-17979-17600-18092');
    $ls = $ns;
  }
  $ns = E49($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => NULL, 3 => array(0 => 'Mobile; rv:14.0'), 4 => array(0 => '14'), 5 => array(0 => '14.0'), 6 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(1129172,1129165,835718,913, 'Mozilla/5.0 (Mobile; rv:14.0) Gecko/14.0 Firefox/14.0', '21032-18615-18628-18092');
    $ls = $ns;
  }
  return $dl;
}
