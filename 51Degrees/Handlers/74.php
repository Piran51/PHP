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
function E74($target, $test, $ls) {
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
function _H74($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'PantechP7040/JFUS03152010F; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP7040/JFUS03152010F; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP7040/JLUS05242010; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP7040/JLUS04042011; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP7040/JLUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; fr) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP7040/JFUSXF; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; fr) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,141680,913, $ua, '13687-17603-4732-18092');
  }
  $ua = 'PantechP2020/JIUS05172010R; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,141680,913, $ua, '12481-17603-4732-18092');
  }
  $ua = 'PantechP2020/JIUS05172010R; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,141680,913, $ua, '12481-17603-4732-18092');
  }
  $ua = 'PantechP2020/JIUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,141680,913, $ua, '12481-17603-4732-18092');
  }
  $ua = 'PantechP2020/JIUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,141680,913, $ua, '12481-17603-4732-18092');
  }
  $ua = 'PANTECH-P7000/JDUS10052009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15645; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(340947,145046,141680,913, $ua, '13217-17603-4732-18092');
  }
  $ua = 'PANTECH-P7000/JDUS10052009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15645; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(340947,145046,141680,913, $ua, '13217-17603-4732-18092');
  }
  $ua = 'PANTECH-P7000/JDUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.15645; U; fr) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(340947,145046,141680,913, $ua, '13217-17603-4732-18092');
  }
  $ua = 'PantechP2030/JSUS06132011; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.22250; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(399530,145046,141680,913, $ua, '15211-17603-4732-18092');
  }
  $ua = 'PantechP2030/JSUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.22250; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(399530,145046,141680,913, $ua, '15211-17603-4732-18092');
  }
  $ua = 'PantechP6020/JXUSX BMP/1.0.4 DeviceId/X NetFront/4.1 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(961652,145046,178825,913, $ua, '23051-17603-4392-18092');
  }
  $ua = 'PantechP6010/JNUS06062011D BMP/1.0.2 DeviceId/141020 NetFront/4.1 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(324326,145046,178825,913, $ua, '12963-17603-4392-18092');
  }
  $ua = 'PantechP6010/JNUSX BMP/1.0.2 DeviceId/X NetFront/4.1 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(324326,145046,178825,913, $ua, '12963-17603-4392-18092');
  }
  $ua = 'PantechP9020/JEUS04262010; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.18216; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261318,145046,141680,913, $ua, '13626-17603-4732-18092');
  }
  $ua = 'PantechP9020/JEUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.18216; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261318,145046,141680,913, $ua, '13626-17603-4732-18092');
  }
  $ua = 'PantechP2000/JGUS03292010; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(323246,145046,141680,913, $ua, '13213-17603-4732-18092');
  }
  $ua = 'PantechP2000/JGUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.16479; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(323246,145046,141680,913, $ua, '13213-17603-4732-18092');
  }
  $ua = 'PantechP7040/JLUS05242010 Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,96750,913, $ua, '13687-17603-3534-18092');
  }
  $ua = 'PantechP7040/JFUS03152010F Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,96750,913, $ua, '13687-17603-3534-18092');
  }
  $ua = 'PantechP7040/JLUS04042011 Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(240687,145046,96750,913, $ua, '13687-17603-3534-18092');
  }
  $ua = 'PantechP2020/JIUS05172010R NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,10548,913, $ua, '12481-17603-4223-18092');
  }
  $ua = 'PantechP2020/JIUSX NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(278911,145046,10548,913, $ua, '12481-17603-4223-18092');
  }
  $ua = 'PANTECH-C790/JAUS08312009; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14866; U; en-US) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(144974,145046,141680,913, $ua, '13425-17603-4732-18092');
  }
  $ua = 'PANTECH-C790/JAUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.14866; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(144974,145046,141680,913, $ua, '13425-17603-4732-18092');
  }
  $ua = 'PantechP9050/JJUS09132010 NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(302938,145046,10548,913, $ua, '13686-17603-4223-18092');
  }
  $ua = 'PantechP9050/JJUSX NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(302938,145046,10548,913, $ua, '13686-17603-4223-18092');
  }
  $ua = 'PANTECH-C740/ISUS09012008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(269814,145046,96750,913, $ua, '12406-17603-3534-18092');
  }
  $ua = 'PANTECH-C740/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(269814,145046,96750,913, $ua, '12406-17603-3534-18092');
  }
  $ua = 'PantechP9020/JEUS04262010 NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261318,145046,10548,913, $ua, '13626-17603-4223-18092');
  }
  $ua = 'PantechP9020/JEUSX NetFront/3.5 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(261318,145046,10548,913, $ua, '13626-17603-4223-18092');
  }
  $ua = 'PANTECH-P7000/JDUS10052009 Browser/Obigo/Q05A Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(340947,145046,96750,913, $ua, '13217-17603-3534-18092');
  }
  $ua = 'PANTECH-C520/IQUS04212008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(260166,145046,96750,913, $ua, '13597-17603-3534-18092');
  }
  $ua = 'PANTECH-C520/IQUS04132009 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(260166,145046,96750,913, $ua, '13597-17603-3534-18092');
  }
  $ua = 'PANTECH-C530/ITUS10062008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(247966,145046,96750,913, $ua, '12365-17603-3534-18092');
  }
  $ua = 'PANTECH-C530/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(247966,145046,96750,913, $ua, '12365-17603-3534-18092');
  }
  $ua = 'PANTECH-C530/ITUSX Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(247966,145046,96750,913, $ua, '12365-17603-3534-18092');
  }
  $ua = 'PantechP2030/JSUSX Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(399530,145046,96750,913, $ua, '15211-17603-3534-18092');
  }
  $ua = 'PANTECH-C790/JAUS08312009 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(144974,145046,96750,913, $ua, '13425-17603-3534-18092');
  }
  $ua = 'PantechP2000/JGUS03292010 Browser/Obigo/Q05A OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(323246,145046,96750,913, $ua, '13213-17603-3534-18092');
  }
  $ua = 'PantechP9050/JJUS09132010; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.21329; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(302938,145046,141680,913, $ua, '13686-17603-4732-18092');
  }
  $ua = 'PantechP9050/JJUSX; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.21329; U; es) Opera 9.50';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(302938,145046,141680,913, $ua, '13686-17603-4732-18092');
  }
  $ua = 'PantechP6030/JZUSX BMP/1.0.4 DeviceId/X NetFront/4.1 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1080829,145046,178825,913, $ua, '23025-17603-4392-18092');
  }
  $ua = 'PantechP5000/JTUSX BMP/1.0.2 DeviceId/X NetFront/4.1 OMC/1.5.3 Profile/MIDP-2.1 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(894396,145046,178825,913, $ua, '16404-17603-4392-18092');
  }
  $ua = 'PANTECH-C610/IRUS08252008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(363966,145046,96750,913, $ua, '16378-17603-3534-18092');
  }
  $ua = 'PANTECH-C610/IRUSX Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(363966,145046,96750,913, $ua, '16378-17603-3534-18092');
  }
  $ua = 'PANTECH-C810/M044.33 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,14754,913, $ua, '14091-5448-22270-18092');
  }
  $ua = 'PANTECH-C810/CB.WM01 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,14754,913, $ua, '14091-5448-22270-18092');
  }
  $ua = 'PANTECH-C810/CT.WM02 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,14754,913, $ua, '14091-5448-22270-18092');
  }
  $ua = 'PANTECH-C810/M043.32 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,14754,913, $ua, '14091-5448-22270-18092');
  }
  $ua = 'PANTECH-C810/R01 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.6)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,39045,913, $ua, '14091-5448-22271-18092');
  }
  $ua = 'PANTECH-C820/WM28.31 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(224579,4640,14754,913, $ua, '15419-5448-22270-18092');
  }
  $ua = 'PT-GF200 CLDC/CLDC-1.0 MIDP/MIDP-1.0';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424402,27583,55546,913, $ua, '16755-17017-17470-18092');
  }
  $ua = 'PANTECH-C630/IUUS10272008 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244120,145046,96750,913, $ua, '15626-17603-3534-18092');
  }
  $ua = 'PANTECH-C630/IUUSX Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(244120,145046,96750,913, $ua, '15626-17603-3534-18092');
  }
  $ua = 'PG-C300/R03 MIC/1.1.14 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(366054,27583,194008,913, $ua, '12619-17017-3866-18092');
  }
  $ua = 'PG-C300/R01 MIC/1.1.14 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(366054,27583,194008,913, $ua, '12619-17017-3866-18092');
  }
  $ua = 'PANTECH-C810/R01 Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 7.7)';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(215713,4640,68616,913, $ua, '14091-5448-22272-18092');
  }
  $ua = 'PANTECH-C510/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44115,145046,96750,913, $ua, '15364-17603-3534-18092');
  }
  $ua = 'PG-C150/R01 Browser/Obigo/Q05A Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424906,27583,96750,913, $ua, '16505-17017-3534-18092');
  }
  $ua = 'PANTECH-EUROPA-U4000-orange/1.0 Obigo/Q04C MMS/1.2.0 profile/MIDP-2.0 configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(448395,145046,69573,913, $ua, '16626-17603-4203-18092');
  }
  $ua = 'PG-1310V/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424618,27583,55546,913, $ua, '16486-17017-17470-18092');
  }
  $ua = 'PG-1410/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424690,27583,55546,913, $ua, '16493-17017-17470-18092');
  }
  $ua = 'PG-1400/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(368666,27583,55546,913, $ua, '12661-17017-17470-18092');
  }
  $ua = 'PG-8000/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(370186,27583,55546,913, $ua, '12696-17017-17470-18092');
  }
  $ua = 'PANTECH G300';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424474,145046,55546,913, $ua, '17001-17603-17470-18092');
  }
  $ua = 'PT-G700';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424546,146403,186754,913, $ua, '16997-18588-18589-18092');
  }
  $ua = 'PG-3500/R01 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424762,27583,55546,913, $ua, '16692-17017-17470-18092');
  }
  $ua = 'PG-C120/R01 MIC/1.1.14 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E74($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424834,27583,194008,913, $ua, '16504-17017-3866-18092');
  }
  return $dl;
}
