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
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E4($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
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
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[6], $test[6], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[7], $test[7], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[8], $test[8], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[9], $test[9], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[10], $test[10], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[11], $test[11], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[12], $test[12], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[13], $test[13], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[14], $test[14], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[15], $test[15], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[16], $test[16], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[17], $test[17], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[18], $test[18], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[19], $test[19], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H4($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=;)([^;\\)]+)(?=Build/)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=UC Browser)\\d+\\.\\d+#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=UP\\.Browser)[\\d\\.]+#', $useragent),
    6 => fiftyone_degrees_preg_match_all('#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#', $useragent),
    7 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/)\\d+\\.\\d+#', $useragent),
    8 => fiftyone_degrees_preg_match_all('#(?<=Opera Mobi/)\\d+\\.\\d+#', $useragent),
    9 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    10 => fiftyone_degrees_preg_match_all('#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#', $useragent),
    11 => fiftyone_degrees_preg_match_all('#(?<=CrMo/)\\d+#', $useragent),
    12 => fiftyone_degrees_preg_match_all('#(?<=Chrome/)\\d+#', $useragent),
    13 => fiftyone_degrees_preg_match_all('#(?<=AppleWebKit/)[\\d\\.\\+]+#', $useragent),
    14 => fiftyone_degrees_preg_match_all('#(?<=Mobile Safari/)[\\d\\.]+#', $useragent),
    15 => fiftyone_degrees_preg_match_all('#(?<=Flipboard/)\\d+\\.\\d+#', $useragent),
    16 => fiftyone_degrees_preg_match_all('#UCBrowser/\\d+\\.\\d#', $useragent),
    17 => fiftyone_degrees_preg_match_all('#MQQBrowser/\\d+\\.\\d#', $useragent),
    18 => fiftyone_degrees_preg_match_all('#\\[operamini\\]#', $useragent),
    19 => fiftyone_degrees_preg_match_all('#^iBrowser/\\d(\\.|)\\d#', $useragent));
  $ns = E4($segments, array(0 => array(0 => ' ru-ru '), 1 => NULL, 2 => array(0 => ' 2.0.5'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(148330,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.5; ru-ru Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17968-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' en-us '), 1 => NULL, 2 => array(0 => ' 2.0.6_b1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(148330,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.6_b1; en-us Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17968-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' ru-ru '), 1 => NULL, 2 => array(0 => ' 2.0.6_b1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(148330,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.6_b1; ru-ru Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17968-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ERD27'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ERD27) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ERD15'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ERD15) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ESD56'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; Droid Build/ESD56) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ESD20'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ESD20) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ESD20'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ESD20) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' sholes'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; sholes) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' sholes'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; sholes) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' umts_sholes'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; de-de; umts_sholes) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' sholest'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; ko-kr; sholest) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/ESD20'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => NULL, 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(263253,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Droid Build/ESD20) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/ 530.17', '13257-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' Droid (AdamZ Enhanced'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; Droid (AdamZ Enhanced) Build/ESD56) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '15364-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us;) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1', '15364-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' pandigital9hr'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(586353,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; pandigital9hr) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17969-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' pandigital9hr2'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(586353,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; pandigital9hr2) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17969-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(665019,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us;) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1 (Kobo Touch)', '17934-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => NULL, 1 => array(0 => ' pandigital92ghr'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(796366,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; pandigital92ghr) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '21219-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_01.02.0'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Milestone Build/SHOLS_U2_01.02.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_01.08.0'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; Milestone Build/SHOLS_U2_01.08.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_01.03.1'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; Milestone Build/SHOLS_U2_01.03.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17 NewsRob (http://newsrob.com) gzip', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_01.03.1'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; de-de; Milestone Build/SHOLS_U2_01.03.1) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_01.14.0'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; de-de; Milestone Build/SHOLS_U2_01.14.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' Milestone '), 1 => array(0 => ' Milestone Build/SHOLS_U2_03.06.0'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(161653,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-ca; Milestone Build/SHOLS_U2_03.06.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '17951-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' sdk '), 1 => array(0 => ' sdk Build/ESD54'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(361300,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; en-us; sdk Build/ESD54) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '18061-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' sdk '), 1 => array(0 => ' sdk Build/ECLAIR'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(361300,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; sdk Build/ECLAIR) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17</string>', '18061-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' sdk '), 1 => array(0 => ' sdk Build/ECLAIR'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(361300,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; sdk Build/ECLAIR) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '18061-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' google_sdk '), 1 => array(0 => ' google_sdk Build/ECLAIR'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(361300,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; en-us; google_sdk Build/ECLAIR) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '18061-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' A853 '), 1 => array(0 => ' A853 Build/SHLA_U2_02.01.0'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364115,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; pt-br; A853 Build/SHLA_U2_02.01.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13242-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' A853 '), 1 => array(0 => ' A853 Build/SHLA_U2_02.02.0'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364115,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; es-us; A853 Build/SHLA_U2_02.02.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13242-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' A853 '), 1 => array(0 => ' A853 Build/SHLA_U2_01.03.1'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364115,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; pt-br; A853 Build/SHLA_U2_01.03.1) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13242-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' A853 '), 1 => array(0 => ' A853 Build/SHLA_U2_01.03.0'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364115,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; es-us; A853 Build/SHLA_U2_01.03.0) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2 (AdMob-ANDROID-20091123)', '13242-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' A853 '), 1 => array(0 => ' A853 Build/SHLA_U2_01.03.0'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(364115,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; es-us; A853 Build/SHLA_U2_01.03.0) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '13242-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' X10i '), 1 => array(0 => ' X10i Build/2.0.2.A.0.24'), 2 => array(0 => ' 2.0.2.A.0.24'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '530.17'), 14 => array(0 => '530.17'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(82090,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.2.A.0.24; en-gb; X10i Build/2.0.2.A.0.24) AppleWebKit/530.17 (KHTML, like Gecko) Version/4.0 Mobile Safari/530.17', '11950-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' MB501 '), 1 => array(0 => ' MB501 Build/CUPCAKE'), 2 => array(0 => ' 2.0'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.1'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '528.5+'), 14 => array(0 => '525.20.1'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(90399,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0; pt-br; MB501 Build/CUPCAKE) AppleWebKit/528.5+ (KHTML, like Gecko) Version/3.1.2 Mobile Safari/525.20.1', '12519-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' XT800 '), 1 => array(0 => ' XT800 Build/TITA_M2_15.10.1'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(400615,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-cn; XT800 Build/TITA_M2_15.10.1) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '14800-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' XT720 '), 1 => array(0 => ' XT720 Build/STSKT_N_79.11.29R1'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(27476,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; ko-kr; XT720 Build/STSKT_N_79.11.29R1) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '16103-7305-3553-18092');
    $ls = $ns;
  }
  $ns = E4($segments, array(0 => array(0 => ' XT701 '), 1 => array(0 => ' XT701 Build/STCU_11.04.1'), 2 => array(0 => ' 2.0.1'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '3.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '525.10+'), 14 => array(0 => '523.12.2'), 15 => NULL, 16 => NULL, 17 => NULL, 18 => NULL, 19 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(483010,101966,101132,913, 'Mozilla/5.0 (Linux; U; Android 2.0.1; zh-cn; XT701 Build/STCU_11.04.1) AppleWebKit/525.10+ (KHTML, like Gecko) Version/3.0.4 Mobile Safari/523.12.2', '16135-7305-3553-18092');
    $ls = $ns;
  }
  return $dl;
}
