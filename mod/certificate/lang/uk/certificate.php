<?php

// This file is part of the Certificate module for Moodle - http://moodle.org/
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
 * Language strings for the certificate module
 *
 * @package    mod_certificate
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addlinklabel'] = 'Add another linked activity option';
$string['addlinktitle'] = 'Click to add another linked activity option';
$string['areaintro'] = 'Сертифікат introduction';
$string['awarded'] = 'Awarded';
$string['awardedto'] = 'Awarded To';
$string['back'] = 'Back';
$string['border'] = 'Border';
$string['borderblack'] = 'Чорний';
$string['borderblue'] = 'Blue';
$string['borderbrown'] = 'Коричневий';
$string['bordercolor'] = 'Бурдюр';
$string['bordercolor_help'] = 'Since images can substantially increase the size of the pdf file, you may choose to print a border of lines instead of using a border image (be sure the Border Image option is set to No).  The Border Lines option will print a nice border of three lines of varying widths in the chosen color.';
$string['bordergreen'] = 'Зелений';
$string['borderlines'] = 'Lines';
$string['borderstyle'] = 'Border Image';
$string['borderstyle_help'] = 'The Border Image option allows you to choose a border image from the certificate/pix/borders folder.  Select the border image that you want around the certificate edges or select no border.';
$string['certificate'] = 'Перевірка коду сертифіката:';
$string['certificate:addinstance'] = 'Add a certificate instance';
$string['certificate:manage'] = 'Manage a certificate instance';
$string['certificate:printteacher'] = 'Be listed as a teacher on the certificate if the print teacher setting is on';
$string['certificate:student'] = 'Retrieve a certificate';
$string['certificate:view'] = 'Переглянути сертифікат';
$string['certificatename'] = 'Назва сертифікату';
$string['certificatereport'] = 'Дані по сертифікатах';
$string['certificatesfor'] = 'Certificates for';
$string['certificatetype'] = 'Certificate Type';
$string['certificatetype_help'] = 'This is where you determine the layout of the certificate. The certificate type folder includes four default certificates:
A4 Embedded prints on A4 size paper with embedded font.
A4 Non-Embedded prints on A4 size paper without embedded fonts.
Letter Embedded prints on letter size paper with embedded font.
Letter Non-Embedded prints on letter size paper without embedded fonts.

The non-embedded types use the Helvetica and Times fonts.  If you feel your users will not have these fonts on their computer, or if your language uses characters or symbols that are not accommodated by the Helvetica and Times fonts, then choose an embedded type.  The embedded types use the Dejavusans and Dejavuserif fonts.  This will make the pdf files rather large; thus it is not recommended to use an embedded type unless you must.

New type folders can be added to the certificate/type folder. The name of the folder and any new language strings for the new type must be added to the certificate language file.';
$string['certify'] = 'Цей сертифікат засвідчує, що';
$string['code'] = 'Code';
$string['completiondate'] = 'Завершення курсу';
$string['course'] = 'Для';
$string['coursegrade'] = 'Оцінка курсу';
$string['coursename'] = 'Course';
$string['coursetimereq'] = 'Час для отримання сертифікату';
$string['coursetimereq_help'] = 'Введіть тут мінімальна кількість часу, в хвилинах, щоб студент встиг увійти для отримамання сертифікату.';
$string['credithours'] = 'Credit Hours';
$string['customtext'] = 'Додатковий текст';
$string['customtext_help'] = 'If you want the certificate to print different names for the teacher than those who are assigned
the role of teacher, do not select Print Teacher or any signature image except for the line image.  Enter the teacher names in this text box as you would like them to appear.  By default, this text is placed in the lower left of the certificate. The following html tags are available: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src and width (or height) are mandatory), &lt;a&gt; (href is mandatory), &lt;font&gt; (possible attributes are: color, (hex color code), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Так';
$string['datefmt'] = 'формат дати';
$string['datefmt_help'] = 'Choose a date format to print the date on the certificate. Or, choose the last option to have the date printed in the format of the user\'s chosen language.';
$string['datehelp'] = 'Дата';
$string['deletissuedcertificates'] = 'Видалити видані сертифікати';
$string['delivery'] = 'Видача';
$string['delivery_help'] = 'Виберіть тут, як ви хочете, щоб ваші студенти отримали сертифікат.
Відкрити в браузері: відкриває сертифікат в новому вікні браузера.
Завантаження: Відкриває вікно завантаження файлу браузер.
Сертифікат на E-mail: При виборі цієї опції посилає сертифікат студента у вигляді вкладення електронної пошти.
Після того як користувач отримає листа, в якому він натисне на лінк сторінку курсу, він побачить дату отримання та оцінку і він зможе переглянути свій сертифікат.';
$string['designoptions'] = 'Налаштування вигляду сертифіката';
$string['download'] = 'Завантажити';
$string['emailcertificate'] = 'Email';
$string['emailothers'] = 'Додатковий Email';
$string['emailothers_help'] = 'Введіть адреси електронної пошти через кому, тих, хто повинен бути попереджений з електронною поштою, коли студенти отримують сертифікат.';
$string['emailstudenttext'] = 'Приєднати до сертифіката {$a->course}.';
$string['emailteachers'] = 'Email Вчителя';
$string['emailteachers_help'] = 'Якщо включено, то викладачі попереджені по електронній пошті в випадках, коли студенти отримують сертифікат.';
$string['emailteachermail'] = '
{$a->student} has received their certificate: \'{$a->certificate}\'
for {$a->course}.

Ви можете переглянути його тут:

    {$a->url}';
$string['emailteachermailhtml'] = '
{$a->student} has received their certificate: \'<i>{$a->certificate}</i>\'
for {$a->course}.

Ви можете переглянути його тут:

    <a href="{$a->url}">Звіти з отриманих сертифікатів</a>.';
$string['entercode'] = 'Введіть код сертифіката для перевірки:';
$string['fontsans'] = 'Sans-serif font family';
$string['fontsans_desc'] = 'Sans-serif font family for certificates with embedded fonts';
$string['fontserif'] = 'Serif font family';
$string['fontserif_desc'] = 'Serif font family for certificates with embedded fonts';
$string['getcertificate'] = 'Отримати сертифікат';
$string['grade'] = 'Grade';
$string['gradedate'] = 'Grade Date';
$string['gradefmt'] = 'Grade Format';
$string['gradefmt_help'] = 'There are three available formats if you choose to print a grade on the certificate:

Percentage Grade: Prints the grade as a percentage.
Points Grade: Prints the point value of the grade.
Letter Grade: Prints the percentage grade as a letter.';
$string['gradeletter'] = 'Letter Grade';
$string['gradepercent'] = 'Percentage Grade';
$string['gradepoints'] = 'Points Grade';
$string['imagetype'] = 'Image Type';
$string['incompletemessage'] = 'In order to download your certificate, you must first complete all required activities. Please return to the course to complete your coursework.';
$string['intro'] = 'Опис';
$string['issueoptions'] = 'Опції видачі';
$string['issued'] = 'Виданий';
$string['issueddate'] = 'Дата видачі';
$string['landscape'] = 'Орієнтація';
$string['lastviewed'] = 'You last received this certificate on:';
$string['letter'] = 'Letter';
$string['lockingoptions'] = 'Locking Options';
$string['modulename'] = 'Certificate';
$string['modulenameplural'] = 'Certificates';
$string['mycertificates'] = 'My Certificates';
$string['nocertificates'] = 'There are no certificates';
$string['nocertificatesissued'] = 'There are no certificates that have been issued';
$string['nocertificatesreceived'] = 'has not received any course certificates.';
$string['nofileselected'] = 'Must choose a file to upload!';
$string['nogrades'] = 'No grades available';
$string['notapplicable'] = 'N/A';
$string['notfound'] = 'The certificate number could not be validated.';
$string['notissued'] = 'Not Issued';
$string['notissuedyet'] = 'Not issued yet';
$string['notreceived'] = 'You have not received this certificate';
$string['openbrowser'] = 'Відкрити у новому вікні';
$string['opendownload'] = 'Натисніть на кнопку нижче, щоб зберегти свій сертифікат на свій комп’ютер.';
$string['openemail'] = 'Натисніть на кнопку нижче і ваш сертифікат буде відправлений на вашу електронну пошту у вигляді вкладення.';
$string['openwindow'] = 'Натисніть на кнопку нижче, щоб відкрити свій сертифікат в новому вікні браузера.';
$string['or'] = 'Або';
$string['orientation'] = 'Альбомна';
$string['orientation_help'] = 'Choose whether you want your certificate orientation to be portrait or landscape.';
$string['pluginadministration'] = 'Certificate administration';
$string['pluginname'] = 'Сертифікат';
$string['portrait'] = 'Portrait';
$string['printdate'] = 'Друкувати дату';
$string['printdate_help'] = 'This is the date that will be printed, if a print date is selected. If the course completion date is selected but the student has not completed the course, the date received will be printed. You can also choose to print the date based on when an activity was graded. If a certificate is issued before that activity is graded, the date received will be printed.';
$string['printerfriendly'] = 'Printer-friendly page';
$string['printhours'] = 'Print Credit Hours';
$string['printhours_help'] = 'Enter here the number of credit hours to be printed on the certificate.';
$string['printgrade'] = 'Print Grade';
$string['printgrade_help'] = 'You can choose any available course grade items from the gradebook to print the user\'s grade received for that item on the certificate.  The grade items are listed in the order in which they appear in the gradebook. Choose the format of the grade below.';
$string['printnumber'] = 'Print Code';
$string['printnumber_help'] = 'A unique 10-digit code of random letters and numbers can be printed on the certificate. This number can then be verified by comparing it to the code number displayed in the certificates report.';
$string['printoutcome'] = 'Print Outcome';
$string['printoutcome_help'] = 'You can choose any course outcome to print the name of the outcome and the user\'s received outcome on the certificate.  An example might be: Assignment Outcome: Proficient.';
$string['printseal'] = 'Seal or Logo Image';
$string['printseal_help'] = 'This option allows you to select a seal or logo to print on the certificate from the certificate/pix/seals folder. By default, this image is placed in the lower right corner of the certificate.';
$string['printsignature'] = 'Signature Image';
$string['printsignature_help'] = 'This option allows you to print a signature image from the certificate/pix/signatures folder.  You can print a graphic representation of a signature, or print a line for a written signature. By default, this image is placed in the lower left of the certificate.';
$string['printteacher'] = 'Print Teacher Name(s)';
$string['printteacher_help'] = 'For printing the teacher name on the certificate, set the role of teacher at the module level.  Do this if, for example, you have more than one teacher for the course or you have more than one certificate in the course and you want to print different teacher names on each certificate.  Click to edit the certificate, then click on the Locally assigned roles tab.  Then assign the role of Teacher (editing teacher) to the certificate (they do not HAVE to be a teacher in the course--you can assign that role to anyone).  Those names will be printed on the certificate for teacher.';
$string['printwmark'] = 'Watermark Image';
$string['printwmark_help'] = 'A watermark file can be placed in the background of the certificate. A watermark is a faded graphic. A watermark could be a logo, seal, crest, wording, or whatever you want to use as a graphic background.';
$string['receivedcerts'] = 'Received certificates';
$string['receiveddate'] = 'Date Received';
$string['removecert'] = 'Issued certificates removed';
$string['report'] = 'Report';
$string['reportcert'] = 'Report Certificates';
$string['reportcert_help'] = 'If you choose yes here, then this certificate\'s date received, code number, and the course name will be shown on the user certificate reports.  If you choose to print a grade on this certificate, then that grade will also be shown on the certificate report.';
$string['requiredtimenotmet'] = 'You must spend at least a minimum of {$a->requiredtime} minutes in the course before you can access this certificate';
$string['requiredtimenotvalid'] = 'The required time must be a valid number greater than 0';
$string['reviewcertificate'] = 'Review your certificate';
$string['savecert'] = 'Зберегти';
$string['savecert_help'] = 'Якщо ви виберете цей варіант, то копії кожного PDF-файла сертифікату користувача зберігатимуться в його папку.  Посилання на збережений сертифікат будуть відображатися в звіті сертифіката.';
$string['seal'] = 'Seal';
$string['sigline'] = 'line';
$string['signature'] = 'Signature';
$string['statement'] = 'успішно закінчив(ла) курс';
$string['summaryofattempts'] = 'Завантаження та перегляд сертифікату';
$string['textoptions'] = 'Text Options';
$string['title'] = 'Козацький центр дистанційного навчання';
$string['to'] = 'Awarded to';
$string['typeA4_embedded'] = 'A4 вбудований';
$string['typeA4_non_embedded'] = 'A4 невбудований';
$string['typeletter_embedded'] = 'Letter вбудований';
$string['typeletter_non_embedded'] = 'Letter невбудований';
$string['unsupportedfiletype'] = 'File must be a jpeg or png file';
$string['uploadimage'] = 'Завантажити зображення';
$string['uploadimagedesc'] = 'Натиснувши на кнопку відкриєтьсчя нове вікно для завантаження зображення.';
$string['userdateformat'] = 'User\'s Language Date Format';
$string['validate'] = 'Перевірка';
$string['verifycertificate'] = 'Перевірити сертифікат';
$string['viewcertificateviews'] = 'Подивитися {$a} видані сертифікати';
$string['viewed'] = 'Ви отримали цей сертифікат:';
$string['viewtranscript'] = 'Переглянути сертифікат';
$string['watermark'] = 'Водяний знак';
$string['typeA4_custom'] = 'МійA4 Certificate';
$string['typeLetter_custom'] = 'Мій Letter';
