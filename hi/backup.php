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
 * Strings for component 'backup', language 'hi', branch 'MOODLE_38_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoactivedescription'] = 'चुनें कि क्या स्वचालित बैकअप करना है या नहीं। मैनुअल चयनित होने पर स्वचालित बैकअप केवल स्वचालित बैकअप CLI स्क्रिप्ट के माध्यम से संभव होगा। यह कमांड लाइन पर या क्रोन के माध्यम से मैनुअल रूप से ही किया जा सकता है।';
$string['autoactivedisabled'] = 'बंद किया गया';
$string['autoactiveenabled'] = 'सक्रिय किया गया';
$string['autoactivemanual'] = 'मैनुअल';
$string['automatedbackupschedule'] = 'सूची';
$string['automatedbackupschedulehelp'] = 'हफ्ते के किन डीनो पर स्वचालित बॅकप करना हैं यह चुनिए';
$string['automatedbackupsinactive'] = 'साइट व्यवस्थापक द्वारा स्वचालित बैकअप सक्षम नहीं किया गया है';
$string['automatedbackupstatus'] = 'स्वचालित बैकअप की स्थिति';
$string['automateddeletedays'] = 'से पुराने बैकअप को हटा दें';
$string['automatedmaxkept'] = 'सुरक्षित किये गए अधिकतम बैकअप की संख्या';
$string['automatedmaxkepthelp'] = 'यह प्रत्येक कोर्स के लिए बनाए जाने वाले हालिया स्वचालित बैकअप के अधिकतम संख्या को उल्लिखित करता है। पुराने बैकअप को स्वचालित रूप से हटा दिया जाएगा।';
$string['automatedminkept'] = 'सुरक्षित किये गए न्यूनतम बैकअप की संख्या';
$string['automatedminkepthelp'] = 'यदि निर्देशित किये गए दिनों से पुराने बैकअप डिलीट कर दिए जाते हैं तो वे कोर्स जो निष्क्रिय हैं वे बिना बैकअप के रह जायेंगे। इससे बचने के लिए सुरक्षित किये जा सकने वाली न्यूनतम संख्या का उल्लेख करें।';
$string['automatedsettings'] = 'स्वचालित बैकअप सेटिंग्स';
$string['automatedsetup'] = 'स्वचालित बैकअप सेटअप';
$string['automatedstorage'] = 'स्वचालित बैकअप संग्रहण';
$string['automatedstoragehelp'] = 'उस स्थान को चुनें जहां आप चाहते हैं कि वे बैकअप तब संग्रहीत करें जब वे स्वचालित रूप से बनाए जाएं।';
$string['backupactivity'] = 'बैकअप गतिविधि: {$a}';
$string['backupcourse'] = 'बैकअप कोर्स: {$a}';
$string['backupcoursedetails'] = 'पाठ्यक्रम विवरण';
$string['backupcoursesection'] = 'अनुभाग: {$a}';
$string['backupcoursesections'] = 'कोर्स अनुभाग';
$string['backupdate'] = 'तारीख ली जा चुकी है';
$string['backupdetails'] = 'बैकअप विवरण';
$string['backupdetailsnonstandardinfo'] = 'चयनित फ़ाइल मानक मूडल बैकअप फ़ाइल नहीं है। पुनर्स्थापना प्रक्रिया बैकअप फ़ाइल को मानक प्रारूप में कनवर्ट करने और फिर उसे पुनर्स्थापित करने का प्रयास करेगी।';
$string['backupformat'] = 'प्रारूप';
$string['backupformatimscc1'] = 'IMS  सामान्य कार्ट्रिज 1.0';
$string['backupformatimscc11'] = 'IMS  सामान्य कार्ट्रिज 1.1';
$string['backupformatmoodle1'] = 'मूडल 1';
$string['backupformatmoodle2'] = 'मूडल 2';
$string['backupformatunknown'] = 'अज्ञात प्रारूप';
$string['backuplog'] = 'तकनीकी जानकारी और चेतावनियां';
$string['backupmode'] = 'प्रणाली';
$string['backupmode10'] = 'सामान्य';
$string['backupmode20'] = 'आयात करें';
$string['backupmode30'] = 'हब';
$string['backupmode40'] = 'एक ही साइट';
$string['backupmode50'] = 'स्वचालित';
$string['backupmode60'] = 'परिवर्तित';
$string['backupsection'] = '{$a} :पाठ्यक्रम अनुभाग का बैकअप लें';
$string['backupsettings'] = 'बैकअप सेटिंग्स';
$string['backupsitedetails'] = 'साइट का विवरण';
$string['backupstage16action'] = 'जारी रखें';
$string['backupstage1action'] = 'अगला';
$string['backupstage2action'] = 'अगला';
$string['backupstage4action'] = 'बैकअप करें';
$string['backupstage8action'] = 'जारी रखें';
$string['backuptype'] = 'प्रकार';
$string['backuptypeactivity'] = 'गतिविधि';
$string['backuptypecourse'] = 'कोर्स';
$string['backuptypesection'] = 'अनुभाग';
$string['backupversion'] = 'बैकअप संस्करण';
$string['cannotfindassignablerole'] = 'बैकअप फ़ाइल में {$a} भूमिका को उन किसी भी भूमिका में मैप नहीं किया जा सकता है, जिन्हें आपको असाइन करने की अनुमति है।';
$string['choosefilefromactivitybackup'] = 'गतिविधि बैकअप क्षेत्र';
$string['choosefilefromactivitybackup_help'] = 'डिफ़ॉल्ट सेटिंग्स का उपयोग करने वाले गतिविधि बैकअप को यहां संग्रहित किया गया है।';
$string['choosefilefromautomatedbackup'] = 'स्वचालित बैकअप';
$string['choosefilefromautomatedbackup_help'] = 'इसमें स्वचालित रूप से जनरेटेड बैकअप शामिल है';
$string['choosefilefromcoursebackup'] = 'कोर्स बैकअप क्षेत्र';
$string['choosefilefromcoursebackup_help'] = 'डिफ़ॉल्ट सेटिंग्स का उपयोग करने वाले कोर्स बैकअप यहां संग्रहीत किए गए हैं।';
$string['choosefilefromuserbackup'] = 'उपयोगकर्ता निजी बैकअप क्षेत्र';
$string['choosefilefromuserbackup_help'] = 'अज्ञात उपयोगकर्ता जानकारी के साथ बैकअप फ़ाइलें यहां संग्रहीत हैं';
$string['configgeneralactivities'] = 'बैकअप में गतिविधियों को शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralanonymize'] = 'यदि सक्रिय किया गया तो उपयोगकर्ता सम्बंधित सभी जानकारी स्वयं ही अनामीकृत हो जाएगी।';
$string['configgeneralbadges'] = 'बैकअप में बैज शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralblocks'] = 'किसी बैकअप में ब्लॉकों को शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralcalendarevents'] = 'बैकअप में कैलेंडर ईवेंट को शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralcomments'] = 'एक बैकअप में टिप्पणियां शामिल करने के लिए डिफ़ॉल्ट सेट करता है।';
$string['configgeneralcompetencies'] = 'एक बैकअप में दक्षता शामिल करने के लिए डिफ़ॉल्ट सेट करता है।';
$string['configgeneralfilters'] = 'बैकअप में फ़िल्टर शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralgroups'] = 'एक बैकअप में समूहों को शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgeneralhistories'] = 'बैकअप के भीतर उपयोगकर्ता के इतिहास को शामिल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configgenerallogs'] = 'यदि सक्रिय है तो लॉग्स को बैकअप में डिफ़ॉल्ट रूप से शामिल किया जाएगा';
$string['configgeneralquestionbank'] = 'यदि सक्रिय किया गया तो प्रश्न बैंक को डिफ़ॉल्ट रूप से बैकअप में शामिल किया जाएगा। कृपया ध्यान दें: इस सेटिंग को अक्षम करने से उन क्रियाकलापों के बैकअप निष्क्रिय हो जायेंगे, जो प्रश्न बैंक का उपयोग करते हैं, जैसे कि प्रश्नोत्तरी।';
$string['configgeneralroleassignments'] = 'यदि सक्रिय किया गया तो भूमिका क्रियान्वन भी स्वयंतः बैकअप कर लिया जायेगा।';
$string['configgeneralusers'] = 'बैकअप में उपयोगकर्ताओं को शामिल करना है या नहीं डिफ़ॉल्ट सेट करता है';
$string['configgeneraluserscompletion'] = 'यदि सक्रिय है तो उपयोगकर्ता समाप्ति जानकारी को डिफ़ॉल्ट रूप से बैकअप में शामिल किया जाएगा।';
$string['config_keep_groups_and_groupings'] = 'डिफ़ॉल्ट रूप से वर्तमान समूहों को रखें।';
$string['config_keep_roles_and_enrolments'] = 'डिफ़ॉल्ट रूप से वर्तमान भूमिकाएं और नामांकन रखें';
$string['configloglifetime'] = 'यह निर्दिष्ट करता है की कितने समय तक बैकअप लोग की जानकारी को रखा जाएगा। इससे ज्यादा पुराने लोग स्वयं ही हटा दिए जाएंगे। इस संख्या को छोटा रखने की सलाह दी जाती है क्योंकि बैकअप लोग जानकारी विशाल हो सकती है।';
$string['config_overwrite_conf'] = 'उपयोगकर्ता को वर्तमान कोर्स कॉन्फ़िगरेशन को व्यवस्थित करने की अनुमति दें।';
$string['config_overwrite_course_fullname'] = 'स्वयंतः कोर्स पूर्ण नाम को बैकअप फाइल में दिए नाम से बदलें। इसके लिए "कोर्स विन्यास अधिलेखित करें" चेक होना चाहिए और वर्तमान उपयोगकर्ता को कोर्स पूर्ण नाम बदलने की अनुमति होनी चाहिए।
(moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'स्वयंतः कोर्स संक्षिप्त नाम को बैकअप फाइल में दिए नाम से बदलें। इसके लिए "कोर्स विन्यास अधिलेखित करें" चेक होना चाहिए और वर्तमान उपयोगकर्ता को कोर्स संक्षिप्त नाम बदलने की अनुमति होनी चाहिए।
(moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'स्वयंतः कोर्स आरंभ करने की तिथि को बैकअप फाइल में दिए नाम से बदलें। इसके लिए "कोर्स विन्यास अधिलेखित करें" चेक होना चाहिए और वर्तमान उपयोगकर्ता को
पुनर्स्थापित करते समय कोर्स आरंभ करने की तिथि बदलने की अनुमति होनी चाहिए।
(moodle/restore:rolldates)';
$string['configrestoreactivities'] = 'गतिविधियों को पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestorebadges'] = 'बैज पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestoreblocks'] = 'ब्लॉक पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestorecalendarevents'] = 'कैलेंडर ईवेंट को पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestorecomments'] = 'टिप्पणियों को पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है।';
$string['configrestorecompetencies'] = 'योग्यता पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestoreenrolments'] = 'नामांकन प्रक्रियाओं को बहाल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestorefilters'] = 'फ़िल्टर बहाल करने के लिए डिफ़ॉल्ट सेट करता है';
$string['configrestoregroups'] = 'समूह और समूहों को पुनर्स्थापित करने के लिए डिफ़ॉल्ट सेट करता है यदि उन्हें बैकअप में शामिल किया गया था।';
$string['configrestorehistories'] = 'उपयोगकर्ता इतिहास को बहाल करने के लिए डिफ़ॉल्ट सेट करता है अगर यह बैकअप में शामिल किया गया था।';
$string['configrestorelogs'] = 'यदि सक्रिय है तो लॉग डिफ़ॉल्ट रूप से बहाल किए जाएंगे, यदि उन्हें बैकअप में शामिल किया गया था।';
$string['configrestoreroleassignments'] = 'यदि सक्रिय है तो भूमिकाओं को पुनर्स्थापित किया जाएगा यदि उन्हें बैकअप में शामिल किया गया था।';
$string['configrestoreusers'] = 'यदि उपयोगकर्ताओं को बैकअप में शामिल किया गया है तो उपयोगकर्ताओं को पुनर्स्थापित करना है या नहीं इसके लिए डिफ़ॉल्ट सेट करता है';
$string['configrestoreuserscompletion'] = 'यदि सक्रिय है तो उपयोगकर्ता पूर्णता जानकारी को डिफ़ॉल्ट रूप से बहाल कर दिया जाएगा, यदि इसे बैकअप में शामिल किया गया था।';
$string['confirmcancel'] = 'बैकअप रद्द करें';
$string['confirmcancelno'] = 'रुकें';
$string['confirmcancelquestion'] = 'क्या आप वाकई रद्द करना चाहते हैं?
आपके द्वारा दर्ज की गई कोई भी जानकारी खो जाएगी';
$string['confirmcancelyes'] = 'रद्द करें';
$string['confirmnewcoursecontinue'] = 'नया कोर्स चेतावनी';
$string['coursecategory'] = 'श्रेणी में कोर्स बहाल किया जाएगा';
$string['coursesettings'] = 'कोर्स सेटिंग';
$string['coursetitle'] = 'शीर्षक';
$string['currentstage1'] = 'प्रारंभिक सेटिंग';
$string['currentstage16'] = 'पूर्ण';
$string['currentstage2'] = 'स्कीमा सेटिंग';
$string['currentstage4'] = 'पुष्टि और समीक्षा';
$string['currentstage8'] = 'बैकअप करें';
$string['restorenewcourseshortname'] = 'नऐ पाठ्यक्रम का संक्षिप्त नाम';
$string['selectacategory'] = 'वर्ग का चयन करें';
$string['setting_course_shortname'] = 'पाठ्यक्रम का संक्षिप्त नाम';
$string['setting_overwrite_course_shortname'] = 'पाठ्यक्रम का संक्षिप्त नाम अधिलेखित करें';
