<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth', language 'hi', branch 'MOODLE_38_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'उपलब्ध प्रमाणीकरण प्लगइन्स';
$string['allowaccountssameemail'] = 'एक जैसे ईमेल वाले खातों को अनुमति दें';
$string['alternateloginurl'] = 'वैकल्पिक लॉगिन यूआरएल';
$string['auth_changepasswordhelp'] = 'पासवर्ड बदलने में सहायता';
$string['auth_changepasswordurl'] = 'पासवर्ड बदलने का यूआरएल';
$string['auth_common_settings'] = 'सामान्य सेटिंग';
$string['auth_data_mapping'] = 'डेटा मानचित्रण';
$string['authenticationoptions'] = 'प्रमाणीकरण के विकल्प';
$string['auth_fieldlock'] = 'वैल्यू को लॉक करें';
$string['auth_fieldlockfield'] = '({$a}) वैल्यू को लॉक करें';
$string['auth_fieldlocks'] = 'उपयोगकर्ता फ़ील्ड लॉक करें';
$string['auth_fieldmapping'] = 'डेटा मानचित्रण ({$a})';
$string['authloginviaemail'] = 'ईमेल के द्वारा लोग इन की अनुमति दें';
$string['authloginviaemail_desc'] = 'साइट लॉगिन के लिए उपयोगकर्ताओं को उपयोगकर्ता नाम और ईमेल (यदि अद्वितीय है) दोनों का उपयोग करने की अनुमति दें';
$string['auth_multiplehosts'] = 'एकाधिक होस्ट या पते निर्दिष्ट किए जा सकते हैं (जैसे host1.com; host2.com; host3.com) या (जैसे xxx.xxx.xxx.xxx; xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'प्रमाणीकरण विधि {$a} व्यवस्थित नहीं है।';
$string['auth_outofnewemailupdateattempts'] = 'आप अपना ईमेल पता अपडेट करने के अधिकतम प्रयासों की सीमा पार कर चुके हैं। आपका अपडेट अनुरोध रद्द कर दिया गया है।';
$string['auth_passwordisexpired'] = 'आपके पासवर्ड की अवधि समाप्त हो चुकी है। कृपया अभी इसे बदलें।';
$string['auth_passwordwillexpire'] = 'आपका पासवर्ड {$a} दिनों में समाप्त हो जायेगा। क्या आप इसे अभी बदलना चाहते हैं?';
$string['auth_remove_delete'] = 'अभ्यंतर को पूर्णतः हटाएं';
$string['auth_remove_keep'] = 'अभ्यंतर को रखें';
$string['auth_remove_suspend'] = 'अभ्यंतर को निष्काषित करें';
$string['auth_remove_user_key'] = 'बाहरी उपयोगकर्ता हटाया गया';
$string['auth_sync_script'] = 'उपयोगकर्ता खाता सिंक्रनाइज़ेशन';
$string['auth_sync_suspended'] = 'सक्षम होने पर, निलंबित विशेषता का उपयोग स्थानीय उपयोगकर्ता खाते के निलंबन स्थिति को अपडेट करने के लिए किया जाएगा।';
$string['auth_sync_suspended_key'] = 'स्थानीय उपयोगकर्ता निलंबन स्थिति को सिंक्रनाइज़ करें';
$string['auth_updatelocal'] = 'स्थानीय अपडेट करें';
$string['auth_updatelocalfield'] = '({$a}) स्थानीय अपडेट करें';
$string['auth_updateremote'] = 'बाहरी अपडेट करें';
$string['auth_updateremotefield'] = '({$a}) बाहरी अपडेट करें';
$string['auth_user_create'] = 'उपयोगकर्ता निर्माण सक्रिय करें';
$string['auth_usernameexists'] = 'चयनित उपयोगकर्ता नाम पहले से मौजूद है। कृपया नए नाम का चयन करें';
$string['auto_add_remote_users'] = 'दूरस्थ उपयोगकर्ताओं को स्वचालित रूप से जोड़ें';
$string['changepassword'] = 'पासवर्ड बदलने के यूआरएल';
$string['chooseauthmethod'] = 'प्रमाणीकरण विधि चुनें';
$string['chooseauthmethod_help'] = '<p align="center"><strong>ऑथेन्टिकेशन का तरीका बदलना</strong></p>

<p>इस मेन्यू का प्रयोग् करके आप इस यूज़र के लिये ऑथेन्टिकेशन का तरीका बदल सकते हैं।</p>

<p>क्रिपया इस बात से अवगत रहें कि यह इस पर निर्भर है कि आपने साइट के लिये कौन से ऑथेन्टिकेशन के तरीका सेट किये हैं और आप किन सेटिंग्स का प्रयोग कर रहे हैं।</p>

<p>यहां पर गलत बदलाव करने पर हो सकत है कि यह यूज़र लॉग-इन ना कर पाये या अपना एकाउन्ट पूरी तरह से डिलीट् ना कर पाये।  इसलिये इसका प्रयोग तभी करें अगर आपको पता है कि आप क्या कर रहें हैं।</p>';
$string['createpassword'] = 'पासवर्ड बनाएं और उपयोगकर्ता को सूचित करें';
$string['createpasswordifneeded'] = 'यदि आवश्यक हो तो पासवर्ड बनाएं और ईमेल के माध्यम से भेजें';
$string['emailchangecancel'] = 'ईमेल परिवर्तन रद्द करें';
$string['emailchangepending'] = 'परिवर्तन लंबित है। {$a->preference_newemail} पर आपको भेजे गए लिंक को खोलें।';
$string['emailupdate'] = 'ईमेल पता अपडेट करें';
$string['emailupdatetitle'] = '{$a->site} पर ईमेल अपडेट की पुष्टि';
$string['errormaxconsecutiveidentchars'] = 'पासवर्डों में लगभग {$a} लगातार समान वर्ण होने चाहिए।';
$string['errorminpassworddigits'] = 'पासवर्ड में कम से कम {$a} अंक होने चाहिए।';
$string['errorminpasswordlength'] = 'पासवर्ड कम से कम {$a} वर्ण लम्बा होने चाहिए।';
$string['errorminpasswordlower'] = 'पासवर्ड कम से कम {$a} छोटे अक्षर होने चाहिए।';
$string['errorminpasswordnonalphanum'] = 'पासवर्ड में कम से कम {$a} गैर-अक्षरांकीय वर्ण होने चाहिए जैसे कि *, -, या #';
$string['errorminpasswordupper'] = 'पासवर्ड कम से कम {$a} बड़े अक्षर होने चाहिए।';
$string['errorpasswordreused'] = 'यह पासवर्ड पहले इस्तेमाल किया गया है, और इसे फिर से उपयोग करने की अनुमति नहीं है';
$string['errorpasswordupdate'] = 'पासवर्ड अपडेट करने में त्रुटि हुई, पासवर्ड नहीं बदल गया';
$string['eventuserloggedin'] = 'उपयोगकर्ता ने लॉग इन किया है';
$string['eventuserloggedinas'] = 'उपयोगकर्ता ने दूसरे उपयोगकर्ता के रूप में लॉग इन किया है';
$string['eventuserloginfailed'] = 'उपयोगकर्ता लॉगिन विफल हुआ';
$string['forcechangepassword'] = 'बलपूर्वक पासवर्ड बदलें';
$string['forcechangepasswordfirst_help'] = 'उपयोगकर्ताओं को अपने पहले लॉगिन पर पासवर्ड बदलने के लिए मजबूर करें।';
$string['forcechangepassword_help'] = 'Moodle पर अपने अगले लॉगिन पर उपयोगकर्ताओं का अपने पासवर्ड बदलने के लिए मजबूर करें।';
$string['forgottenpasswordurl'] = 'भूले हुए पासवर्ड के लिए यूआरएल';
$string['guestloginbutton'] = 'अतिथि लॉगिन बटन';
$string['incorrectpleasetryagain'] = 'गलत। कृपया पुन: प्रयास करें।';
$string['infilefield'] = 'फ़ाइल में आवश्यक फ़ील्ड';
$string['informminpassworddigits'] = 'कम से कम {$a} अंक';
$string['informminpasswordlength'] = 'कम से कम {$a} वर्ण';
$string['informminpasswordlower'] = 'कम से कम {$a} छोटे अक्षर';
$string['informminpasswordnonalphanum'] = 'कम से कम {$a} गैर-अक्षरांकीय वर्ण जैसे कि *, -, या #';
$string['informminpasswordreuselimit'] = '{$a} परिवर्तनों के बाद पासवर्ड का पुन: उपयोग किया जा सकता है';
$string['informminpasswordupper'] = 'कम से कम {$a} बड़े अक्षर';
$string['informpasswordpolicy'] = 'पासवर्ड में {$a} होना चाहिए';
$string['instructions'] = 'निर्देश';
$string['internal'] = 'अभ्यंतर';
$string['locked'] = 'लॉक्ड';
$string['md5'] = 'MD5 एन्क्रिप्शन्';
$string['plaintext'] = 'सादा टेक्स्ट';
$string['update_never'] = 'कभी नहीं';
