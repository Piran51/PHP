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
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The edit distance between the two strings.
 */
function E49($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H49($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Fly_E146/WapBrowser2.0/MIDP-2.0Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,22118,16074,913, $ua, '15364-17017-17470-18092');
  }
  $ua = 'Fly_E190 Wi-Fi    Opera/9.80 (MTK; Nucleus; U; ru-RU) Presto/2.4.18 Version/10.00';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,22118,347436,913, $ua, '15364-17017-4812-18092');
  }
  $ua = 'Fly DS160, Fly DS160';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(78995,22118,16074,913, $ua, '17542-17017-17470-18092');
  }
  $ua = 'Fly DS160';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(78995,22118,16074,913, $ua, '17542-17017-17470-18092');
  }
  $ua = 'Fly_DS160/Configuration/WapBrowser2.0 Novarra-Vision/8.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(78995,22118,16074,913, $ua, '17542-17017-17470-18092');
  }
  $ua = 'Fly_DS170 Configuration/WAP2.0/Browser';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(78995,22118,16074,913, $ua, '17542-17017-17470-18092');
  }
  $ua = 'Fly_E135/MAUIBrowser/Configuration/WAP2.0 Novarra-Vision/8.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(227686,22118,223089,913, $ua, '17540-17017-18246-18092');
  }
  $ua = 'Fly_E135/MAUIBrowser/Configuration/WAP2.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(227686,22118,223089,913, $ua, '17540-17017-18246-18092');
  }
  $ua = 'Fly_Q400/WapBrowserprofile/WIFIprofile/MIDP2.0Configuration/CLDC1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(265781,22118,16074,913, $ua, '15608-17017-17470-18092');
  }
  $ua = 'Fly_E140_India/WAPBrowser2.0Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(337897,22118,16074,913, $ua, '12552-17017-17470-18092');
  }
  $ua = 'Fly_E140/WAPBrowser2.0Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(337897,22118,16074,913, $ua, '12552-17017-17470-18092');
  }
  $ua = 'Fly_E140/WAPBrowser2.0Profile/MIDP-2.0 Configuration/CLDC-1.1, Fly_E140/WAPBrowser2.0Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(337897,22118,16074,913, $ua, '12552-17017-17470-18092');
  }
  $ua = 'FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(172805,22118,16074,913, $ua, '13713-17017-17470-18092');
  }
  $ua = 'FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0, FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(172805,22118,16074,913, $ua, '13713-17017-17470-18092');
  }
  $ua = 'FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0 FLY-SX210/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(172805,22118,16074,913, $ua, '13713-17017-17470-18092');
  }
  $ua = 'Fly_DS150/MAUIBrowser/Configuration/WAP2.0, Fly_DS150/MAUIBrowser/Configuration/WAP2.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(353346,22118,223089,913, $ua, '17546-17017-18246-18092');
  }
  $ua = 'Fly_DS150/MAUIBrowser/Configuration/WAP2.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(353346,22118,223089,913, $ua, '17546-17017-18246-18092');
  }
  $ua = 'Fly-B400/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(359262,22118,16074,913, $ua, '13140-17017-17470-18092');
  }
  $ua = 'FLY_SL400m/(06.11.27)Ver01.06/WAP2.0, FLY_SL400m/(06.11.27)Ver01.06/WAP2.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(91306,22118,16074,913, $ua, '17986-17017-17470-18092');
  }
  $ua = 'FLY_SL400m/(07.05.14)Ver00.06/WAP2.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(91306,22118,16074,913, $ua, '17986-17017-17470-18092');
  }
  $ua = 'Fly_DS185/WAP2.0Configuration/Browser';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(191412,22118,16074,913, $ua, '13539-17017-17470-18092');
  }
  $ua = 'Fly-E300/Profile/MIDP.2.0Configuration/CLDC.1.0, Fly-E300/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(236925,22118,16074,913, $ua, '15286-17017-17470-18092');
  }
  $ua = 'Fly-E300/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(236925,22118,16074,913, $ua, '15286-17017-17470-18092');
  }
  $ua = 'FLY-SL600/BSI AU.Browser/2.0 QO3C1 MMP/1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371696,22118,21183,913, $ua, '14095-17017-4970-18092');
  }
  $ua = 'FLY-SL600/BSI AU.Browser/2.0 QO3C1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371696,22118,21183,913, $ua, '14095-17017-4970-18092');
  }
  $ua = 'Fly-HT2_i08 ObigoInternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(397159,22118,16074,913, $ua, '14530-17017-17470-18092');
  }
  $ua = 'FLY-SX390/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1, FLY-SX390/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(241383,22118,16074,913, $ua, '15337-17017-17470-18092');
  }
  $ua = 'FLY-SX390/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(241383,22118,16074,913, $ua, '15337-17017-17470-18092');
  }
  $ua = 'Fly_DS210 ObigoInternetBrowser/QO3C Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(336312,22118,16074,913, $ua, '13845-17017-17470-18092');
  }
  $ua = 'Fly-V130/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(372128,22118,16074,913, $ua, '14109-17017-17470-18092');
  }
  $ua = 'Fly V180 DS/2.0 (5.0614.0) SymbianOS/7.0s Series60/2.1 Profile/MIDP-2.0Configuration/CLDC-1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(174821,31510,32523,913, $ua, '17697-5776-3756-18092');
  }
  $ua = 'FLY-SX305/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1, FLY-SX305/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(249180,22118,16074,913, $ua, '15421-17017-17470-18092');
  }
  $ua = 'FLY-SX305/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(249180,22118,16074,913, $ua, '15421-17017-17470-18092');
  }
  $ua = 'Fly-SX225/Profile/MIDP.2.0Configuration/CLDC.1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275268,22118,16074,913, $ua, '15717-17017-17470-18092');
  }
  $ua = 'FLY-2040L/BSI AU.Browser/2.0 QO3C1 MMP/1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(369608,22118,21183,913, $ua, '14003-17017-4970-18092');
  }
  $ua = 'FLY-2040i/BSI AU.Browser/2.0 QO3C1 MMP/1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(369608,22118,21183,913, $ua, '14003-17017-4970-18092');
  }
  $ua = 'Fly_2040';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(369608,22118,16074,913, $ua, '14003-17017-17470-18092');
  }
  $ua = 'FLY-2040/2.0 (03.15) Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(369608,22118,16074,913, $ua, '14003-17017-17470-18092');
  }
  $ua = 'Fly_MC150ds/WAP2.0Configuration/Browser';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(348371,22118,16074,913, $ua, '12984-17017-17470-18092');
  }
  $ua = 'Fly_DS100/WAP2.0Configuration/Browser';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(368816,22118,16074,913, $ua, '13983-17017-17470-18092');
  }
  $ua = 'FLY-SL500i/BSI AU.Browser/2.0 QO3C1 MMP/1.0';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371624,22118,21183,913, $ua, '14094-17017-4970-18092');
  }
  $ua = 'FLY-SL600';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371696,22118,16074,913, $ua, '14095-17017-17470-18092');
  }
  $ua = 'Fly_SL500i';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371624,22118,16074,913, $ua, '14094-17017-17470-18092');
  }
  $ua = 'Fly SX240/Teleca/Q03C1.22 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(460611,22118,119194,913, $ua, '17548-17017-3807-18092');
  }
  $ua = 'FLY B700 WAP Browser';
  $ns = E49($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(473835,22118,16074,913, $ua, '17696-17017-17470-18092');
  }
  return $dl;
}
