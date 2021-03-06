<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_DELETE_RECORD' => 'למחיקת הרשומה עליך לציין שם.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'שם העובד',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'כבר קיים.  אין אפשרות לשם עובד כפןל.  שנה שם העובד לערך ייחודי.',
  'ERR_LAST_ADMIN_1' => 'The employee name "',
  'ERR_LAST_ADMIN_2' => '" הוא העובד האחרון שלו הרשאות אדמיניסטרציה.  At least one employee must be an administrator.',
  'LBL_ADDRESS' => 'כתובת:',
  'LBL_ADDRESS_CITY' => 'עיר',
  'LBL_ADDRESS_COUNTRY' => 'מדינה',
  'LBL_ADDRESS_INFORMATION' => 'מידע על הכתובת',
  'LBL_ADDRESS_POSTALCODE' => 'מיקוד',
  'LBL_ADDRESS_STATE' => 'כתובת מדינה',
  'LBL_ADDRESS_STREET' => 'כתובת רחוב',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_ANY_ADDRESS' => 'כתובת כלשהי:',
  'LBL_ANY_EMAIL' => 'הדור האלקטרוני שלי:',
  'LBL_ANY_PHONE' => 'טלפון כלשהו:',
  'LBL_AUTHENTICATE_ID' => 'Authentication Id',
  'LBL_CITY' => 'עיר:',
  'LBL_COUNTRY' => 'מחוז:',
  'LBL_CREATED_BY_NAME' => 'נוצר על ידי',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'צור משתמש',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'צור משתמש [Alt+N]',
  'LBL_CURRENCY' => 'מטבע:',
  'LBL_DATE_ENTERED' => 'הוזן בתאריך',
  'LBL_DATE_FORMAT' => 'פורמט תאריך:',
  'LBL_DATE_MODIFIED' => 'שונה בתאריך',
  'LBL_DEFAULT_TEAM' => 'צוות ברירת מחדל:',
  'LBL_DEFAULT_TEAM_TEXT' => 'בחר צוות אחר עבור התרומות שלך',
  'LBL_DELETED' => 'נמחק',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'אתה בטוח שברצונך למחוק עובד זה',
  'LBL_DELETE_USER_CONFIRM' => 'This Employee is also a User. Deleting the Employee record will also delete the User record, and the User will no longer be able to access the application. Do you want to proceed with deleting this record?',
  'LBL_DEPARTMENT' => 'מחלקה:',
  'LBL_DESCRIPTION' => 'תיאור',
  'LBL_EMAIL' => 'תובת דואר אלקטרוני:',
  'LBL_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני:',
  'LBL_EMAIL_LINK_TYPE' => 'לקוח דואר אלקטרוני',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar Mail Client:</b> Send emails using the email client in the Sugar application.<br><b>External Mail Client:</b> Send email using an email client outside of the Sugar application, such as Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'עובדים:',
  'LBL_EMPLOYEE_INFORMATION' => 'מידע על עובד',
  'LBL_EMPLOYEE_NAME' => 'שם עובד:',
  'LBL_EMPLOYEE_SETTINGS' => 'הגדרות עובד',
  'LBL_EMPLOYEE_STATUS' => 'סטאטוס עובד:',
  'LBL_ERROR' => 'שגיאה:',
  'LBL_EXT_AUTHENTICATE' => 'אימות חיצוני',
  'LBL_FAVORITE_COLOR' => 'צבע אהוב:',
  'LBL_FAX' => 'פקס:',
  'LBL_FAX_PHONE' => 'פקס:',
  'LBL_FF_CLEAR' => 'נקה [Alt+C]',
  'LBL_FIRST_NAME' => 'שם פרטי:',
  'LBL_GROUP' => 'קבוצת משתמשים',
  'LBL_GROUP_USER' => 'קבוצת משתמשים',
  'LBL_HOME_PHONE' => 'טלפון בבית:',
  'LBL_IS_ADMIN' => 'מדובר במנהל המערכת',
  'LBL_LANGUAGE' => 'שפה:',
  'LBL_LAST_NAME' => 'שם משפחה:',
  'LBL_LIST_ACCEPT_STATUS' => 'קבל סטאטוס',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'מחלקה',
  'LBL_LIST_DESCRIPTION' => 'תיאור',
  'LBL_LIST_EMAIL' => 'דואר אלקטרוני',
  'LBL_LIST_EMPLOYEE_NAME' => 'שם עובד',
  'LBL_LIST_EMPLOYEE_STATUS' => 'מצב עובד',
  'LBL_LIST_FORM_TITLE' => 'עובדים',
  'LBL_LIST_LAST_NAME' => 'שם משפחה',
  'LBL_LIST_NAME' => 'שם',
  'LBL_LIST_PRIMARY_PHONE' => 'טלפון ראשי',
  'LBL_LIST_REPORTS_TO_NAME' => 'מדווח של',
  'LBL_LIST_USER_NAME' => 'שם משתמש',
  'LBL_LOGIN' => 'לוגאין',
  'LBL_MESSENGER_ID' => 'IM שם:',
  'LBL_MESSENGER_TYPE' => 'IM סוג:',
  'LBL_MOBILE_PHONE' => 'טלפון נייד:',
  'LBL_MODIFIED_BY' => 'שונה על ידי',
  'LBL_MODIFIED_BY_ID' => 'שונה על ידי Id',
  'LBL_MODULE_NAME' => 'עובדים',
  'LBL_MODULE_NAME_SINGULAR' => 'עובד',
  'LBL_MODULE_TITLE' => 'עובדים: דף ראשי',
  'LBL_MY_TEAMS' => 'הצוותים שלי',
  'LBL_NAME' => 'שם:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'עובד חדש',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'עובד חדש [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'עובד חדש',
  'LBL_NOTES' => 'פתקים:',
  'LBL_OFFICE_PHONE' => 'טלפון במשרד:',
  'LBL_ONLY_ACTIVE' => 'עובדים פעילים',
  'LBL_OTHER' => 'אחר:',
  'LBL_OTHER_EMAIL' => 'דואר אלקטרוני אחר:',
  'LBL_OTHER_PHONE' => 'אחר:',
  'LBL_PASSWORD' => 'סיסמא:',
  'LBL_PHOTO' => 'תמונות',
  'LBL_PICTURE_FILE' => 'תמונה',
  'LBL_PORTAL_ONLY' => 'Portal Only User',
  'LBL_PORTAL_ONLY_USER' => 'משתמש ב API של הפורטל',
  'LBL_POSTAL_CODE' => 'מיקוד:',
  'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',
  'LBL_PSW_MODIFIED' => 'סיסמא שונתה לאחרונה',
  'LBL_RECEIVE_NOTIFICATIONS' => 'הודעה יחד עם ההקצעה',
  'LBL_REPORTS_TO' => 'זהות מדווח אל:',
  'LBL_REPORTS_TO_NAME' => 'מדווח אל',
  'LBL_RESET_PREFERENCES' => 'אתחל להעדפות שבברירת המחדל',
  'LBL_SAVED_SEARCH' => 'אפשרויות סידור',
  'LBL_SEARCH_FORM_TITLE' => 'חפש עובד',
  'LBL_SELECT' => 'בחר',
  'LBL_SHOW_ON_EMPLOYEES' => 'הצג רשומות של העובד',
  'LBL_STATE' => 'מדינה:',
  'LBL_STATUS' => 'סטאטוס',
  'LBL_SUGAR_LOGIN' => 'הוא משתמש רשום במערכת',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'סיסמא שנוצרת על ידי המערכת',
  'LBL_THEME' => 'ערכת נושא:',
  'LBL_TIMEZONE' => 'השעה כרגע:',
  'LBL_TIME_FORMAT' => 'פורמט זמן:',
  'LBL_TITLE' => 'תואר:',
  'LBL_USER_HASH' => 'סיסמא:',
  'LBL_USER_NAME' => 'שם משתמש:',
  'LBL_USER_TYPE' => 'סוג משתמש',
  'LBL_WORK_PHONE' => 'טלפון בעבודה:',
  'LNK_EDIT_TABS' => 'ערוך טאב',
  'LNK_EMPLOYEE_LIST' => 'צפייה',
  'LNK_NEW_EMPLOYEE' => 'צור עובד',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Are you sure you want to remove this employee\\&#39;s membership?',
);

