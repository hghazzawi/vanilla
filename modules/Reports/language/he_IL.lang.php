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
  'CHART_COUNT_PATTERN' => '{count} {module} where {group_label} is {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} is {numerical_value}{thousands} where {group_label} is {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} of {currency_symbol}{numerical_value}{thousands} where {group_label} is {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'תחזית לרבעון הנכחי',
  'DEFAULT_REPORT_TITLE_10' => 'אירועים חדשים ממוינים לפי חודש',
  'DEFAULT_REPORT_TITLE_11' => 'טבלת צינורות לפי סוג לפי צוות',
  'DEFAULT_REPORT_TITLE_12' => 'טבלת צינורות ממוינת לצוות ולמשתמש',
  'DEFAULT_REPORT_TITLE_13' => 'משימות לצוות לפי משתמש',
  'DEFAULT_REPORT_TITLE_14' => 'שיחות טלפון לצוות לפי משתמש',
  'DEFAULT_REPORT_TITLE_15' => 'פגישות לצוות לפי משתמש',
  'DEFAULT_REPORT_TITLE_16' => 'חשבונות ממוינים על פי סוג ועל פי תעשייה',
  'DEFAULT_REPORT_TITLE_17' => 'הזדמנויות מוצלחות לפי מקור  הליד',
  'DEFAULT_REPORT_TITLE_18' => 'לידים לפי מקור הליד',
  'DEFAULT_REPORT_TITLE_19' => 'השימוש שלי על פי ביצועים (היום)',
  'DEFAULT_REPORT_TITLE_2' => 'תחזית מפורטת',
  'DEFAULT_REPORT_TITLE_20' => 'השימוש שלי על פי ביצועים (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_21' => 'השימוש שלי על פי ביצועים (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_22' => 'שימוש שלי במודולים (היום)',
  'DEFAULT_REPORT_TITLE_23' => 'שימוש שלי במודולים (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_24' => 'שימוש שלי במודולים (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_25' => 'השימוש של משתמשים על פי ביצועים (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_26' => 'השימוש של משתמשים על פי ביצועים (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_27' => 'מודולים שעשיתי בהם שימוש בדוחות הישירים שלי (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_28' => 'שאילתות איטיות',
  'DEFAULT_REPORT_TITLE_29' => 'רשומות ששיניתי (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_3' => 'רשימת חשבונות שותפים',
  'DEFAULT_REPORT_TITLE_31' => 'רשומות שלי ששונו לאחרונה (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_32' => 'רשומות ששונו באמצעות דוחות ישירים שלי (בשלושים הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_4' => 'רשימת חשבונות לקוחות',
  'DEFAULT_REPORT_TITLE_41' => 'המשתמשים הפעילים ביותר על המערכת (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_42' => 'תקציר המשתמשים הפעילים המערכת (בשבעת הימים האחרונים)',
  'DEFAULT_REPORT_TITLE_43' => 'בעלים של חשבונות לקוח',
  'DEFAULT_REPORT_TITLE_44' => 'חשבונות לקוח החדשים שלי',
  'DEFAULT_REPORT_TITLE_45' => 'הזדמנויות על פי שלב במכירות',
  'DEFAULT_REPORT_TITLE_46' => 'הזדמנויות על פי סוג',
  'DEFAULT_REPORT_TITLE_47' => 'שיחות טלפון פתוחות',
  'DEFAULT_REPORT_TITLE_48' => 'פגישות פתוחות',
  'DEFAULT_REPORT_TITLE_49' => 'משימות פתוחות',
  'DEFAULT_REPORT_TITLE_5' => 'קרא לרשימה לפי ההתקשרות האחרונה זבה',
  'DEFAULT_REPORT_TITLE_50' => 'הזדמנויות מוצלחות לפי חשבון',
  'DEFAULT_REPORT_TITLE_51' => 'הזדמנויות מוצלחות לפי משתמש',
  'DEFAULT_REPORT_TITLE_52' => 'כל ההזדמנויות שפתוחות',
  'DEFAULT_REPORT_TITLE_53' => 'כל ההזדמנויות שסגורות',
  'DEFAULT_REPORT_TITLE_56' => 'התפלגות הזדמנויות מוצרים לתקופת זמן בעבר, בהווה, בעתיד לפי חודשים',
  'DEFAULT_REPORT_TITLE_57' => 'התפלגות הזדמנויות מכירות לתקופת זמן בעבר, בהווה, בעתיד לפי חודשים',
  'DEFAULT_REPORT_TITLE_58' => 'תחזית רבעונית הקודמת/הנוכחית/הבאה',
  'DEFAULT_REPORT_TITLE_59' => 'הזדמנויות לפי שלבי מכירה עבור דוחות בתקופה הנוכחית',
  'DEFAULT_REPORT_TITLE_6' => 'הזדמנויות ממוינות לפי מקור הליד',
  'DEFAULT_REPORT_TITLE_7' => 'פתח מקרה ממוין לפי משתמש ולפי הסטאטוס',
  'DEFAULT_REPORT_TITLE_8' => 'פתח אירועים לפי חודש ולפי משתמש',
  'DEFAULT_REPORT_TITLE_9' => 'פתח אירועים ממוינים על פי עדיפות ועל פי משתמש',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'שעתי',
    21600 => 'כל 6 שעות',
    43200 => 'כל 12 שעות',
    86400 => 'יומי',
    604800 => 'שבועי',
    1209600 => 'דו שבועי',
    2419200 => 'כל 4 שבועות',
  ),
  'ERR_REPORT_DEACTIVATED' => 'דוח מתוזמן "{0}" אינו פעיל',
  'ERR_REPORT_DEACTIVATED_SUBJECT' => 'דוחות מתוזמנים אינם פעילים',
  'ERR_REPORT_INVALID' => 'Definition of report "{0}" contains invalid fields: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Report is invalid',
  'ERR_SELECT_COLUMN' => 'בחר בבקשה להציג קודם עמודות.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. דוח על',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. מסנן',
  'LBL_3_CHOOSE' => '3. הצג עמודות להצגה',
  'LBL_3_GROUP' => '3. קבוצה',
  'LBL_4_CHOOSE' => '4. הצג עמודות להצגה',
  'LBL_5_CHART_OPTIONS' => '5. אפשריות של הטבלה',
  'LBL_ACCOUNT' => 'חשבון',
  'LBL_ACCOUNTS' => 'חשבונות',
  'LBL_ACCOUNT_REPORTS' => 'דוחות על חשבונות',
  'LBL_ACTIVITIES_REPORTS' => 'דוחות על פעילויות',
  'LBL_ADDED_FAVORITES' => 'הוסף דוח או דוחות למועדפים שלי.',
  'LBL_ADD_BTN_HELP' => 'Click to add a new Filter Group.  Use groups to apply AND/OR logic to sets of filters.',
  'LBL_ADD_COLUMN' => 'הוסף עמודה',
  'LBL_ADD_FILTER_TO' => 'הוסף מסנן אל',
  'LBL_ADD_GROUP' => 'הוסף קבוצת מסננים',
  'LBL_ADD_NEW_FILTER' => 'הוסף מסנן חדש',
  'LBL_ADD_RELATE' => 'הוסף קשור',
  'LBL_ADVANCED_FILTERS' => 'מסננים מתקדמים',
  'LBL_AFTER' => 'אחרי',
  'LBL_ALERT_CANT_ADD' => 'You cannot add a related module until you select a table to relate from.\\nSelect a module in the dropdown left of the &#39;Add Related&#39; button you clicked.',
  'LBL_ALL' => 'לפחות',
  'LBL_ALL_PUBLISHED_REPORTS' => 'כל הדוחות שפורסמו',
  'LBL_ALL_REPORTS' => 'צפייה בדוחות',
  'LBL_ALT_INFORMATION' => 'מידע',
  'LBL_ALT_SHOW' => 'הצג',
  'LBL_AND' => 'וגם',
  'LBL_ANY' => 'כחשהו',
  'LBL_ANY_ONE_OF' => 'וגם אחד מתוך',
  'LBL_ASCENDING' => 'סדר עולה',
  'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'בחר לפחות עמודה אחת להצגה.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'לפחות עמודת סיכום אחת.',
  'LBL_AVAILABLE_FIELDS' => 'שדות זמינים',
  'LBL_AVG' => 'ממוצע',
  'LBL_BASIC_FILTERS' => 'מסננים בסיסיים',
  'LBL_BEFORE' => 'לפני',
  'LBL_BUG_REPORTS' => 'דוחות על באגים',
  'LBL_BY_DAY' => 'לפי יום',
  'LBL_BY_FISCAL_QUARTER' => 'לפי רבעון כספים',
  'LBL_BY_FISCAL_YEAR' => 'לפי שנת כספים',
  'LBL_BY_MONTH' => 'לפי חודש',
  'LBL_BY_QUARTER' => 'לפי רבעון',
  'LBL_BY_YEAR' => 'לפי שנה',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'קרא לרשימה לפי תאריך אחרון שבה נוצר קשר',
  'LBL_CALL_REPORTS' => 'דוחות על שיחות טלפון',
  'LBL_CANCEL' => 'בטל',
  'LBL_CANNOT_BE_EMPTY' => 'לא יכול להיות ריק.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'לא ניתן להציג את התרשים בגלל ההגדרות שלו',
  'LBL_CASE_REPORTS' => 'דוחות על אירועים',
  'LBL_CHANGE' => 'שנה',
  'LBL_CHART_DATA_HELP' => 'בחר תקציר שיוצ בתרשים.',
  'LBL_CHART_DESCRIPTION' => 'תיאור',
  'LBL_CHART_OPTIONS' => 'אפשרויות תרשים',
  'LBL_CHART_TYPE' => 'סוג תרשים',
  'LBL_CHOOSE_COLUMNS' => 'בחר עמודות להצגה',
  'LBL_CHOOSE_DISPLAY_COLS' => 'בחר עמודות לתצוגה',
  'LBL_CHOOSE_SUMMARIES' => 'בחר תקצירים שיוצגו',
  'LBL_CLEAR' => 'נקה',
  'LBL_COLUMN_NAME' => 'שם עמודה',
  'LBL_COMBO_TYPE_AHEAD' => 'חפש שדה',
  'LBL_CONTACT' => 'איש קשר',
  'LBL_CONTACTS' => 'אנשי קשר',
  'LBL_CONTACT_REPORTS' => 'דוחות על אנשי קשר',
  'LBL_CONTAINS' => 'מכיל',
  'LBL_CONTENT' => 'תכולה',
  'LBL_CONTRACT_REPORTS' => 'דוח אנשי קשר',
  'LBL_COUNT' => 'מנה',
  'LBL_CREATE_CUSTOM_REPORT' => 'אשף דוחות',
  'LBL_CREATE_REPORT' => 'צור דוח',
  'LBL_CSV_TIMESTAMP' => 'd_m_y_H_i_s',
  'LBL_CURRENT_FISCAL_QUARTER' => 'רבעון כספים נוכחי',
  'LBL_CURRENT_FISCAL_YEAR' => 'שנת כספים נוכחית',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'עיסקאות שבוצעו ברבעון הנכחי',
  'LBL_CURRENT_QUARTER_FORECAST' => 'תחזית לרבעון הנכחי',
  'LBL_CURRENT_USER' => 'משתמש נוכחי',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'רשימת חשבונות של לקוחות',
  'LBL_DATE' => 'תאריך התחלה',
  'LBL_DATE_BASED_FILTERS' => '<i>Date filters are relative to the time zone of the report&#39;s <b>Assigned To</b> user</i>',
  'LBL_DAY' => 'יום',
  'LBL_DEFINE_FILTERS' => 'הגדר פילטרים',
  'LBL_DELETE' => 'מחק',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'The following field in this report is no longer valid:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Please Edit the report and check to make sure that the other parameters are still relevant.',
  'LBL_DELETE_ERROR' => 'רק הבעלים של הדוח או מנהלי המערכת יכולים למחוק דוחות.',
  'LBL_DEL_THIS' => 'הסר',
  'LBL_DESCENDING' => 'סדר יורד',
  'LBL_DETAILED_FORECAST' => 'תחזית מפורטת',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Steps to Choose Display Columns:</b><br/><br/>1) Click on a Module in the <b>Related Modules</b> pane that you would like to use to display data in your report. By default, the primary module (top node in the tree view) that you chose during the &#39;Select Module&#39; step is selected.<br/><br/><br />	You can select fields from a related module (child node in the tree view) by clicking on the module. Modules related to the modules related to the primary module can also be selected. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on the Field in the <b>Available Fields</b> pane to display the field data in the records in your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select additional fields. You can select any number of fields, but the report is generated more slowly and becomes less readable when you add more than necessary fields in the report.<br/><br/><br />	You can change the order fields by dragging and dropping them to the desired position. Changing the field order changes the order in which the columns are displayed in the results.',
  'LBL_DISPLAY_COLUMNS' => 'הצג עמודות',
  'LBL_DISPLAY_SUMMARIES' => 'הצג תקצירים שיוצגו',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Steps to Choose Display Summaries:</b><br/><br/>1) Click on the Module in the <b>Related Modules</b> pane that you would like to use for the summaries in your report. By default, the primary module (top node in the tree view) is selected.<br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on a Field in the <b>Available Fields</b> pane to select summaries for your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select additional fields for the summaries in your report.<br/><br/>For Matrix Reports, you can select more than one field to display multiple values within a single cell in your report.',
  'LBL_DOES_NOT_CONTAIN' => 'איננו מכיל',
  'LBL_DOES_NOT_EQUAL' => 'לא שווה',
  'LBL_DOWN' => 'למטה',
  'LBL_DO_ROUND' => 'מספרים מעוגלים מעל 100000',
  'LBL_DO_ROUND_HELP' => 'Numbers over 100000 will be rounded in charts.<br>Example: 350000 will be expressed as 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'כמטריצה',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'כסוג מקורי',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'כעמודות ושורות',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'כסיכום כללי מפורט',
  'LBL_DUPLICATE_AS_SUMMATON' => 'כסיכום כללי',
  'LBL_EDIT' => 'ערוך',
  'LBL_EDITLAYOUT' => 'ערוך תצורה',
  'LBL_EMAIL_REPORTS' => 'דוחות על דואר אלקטרוני',
  'LBL_ENDS_WITH' => 'מסתיים ב',
  'LBL_END_DATE' => 'תאריך סיום',
  'LBL_EQUALS' => 'שווה',
  'LBL_EXACT' => 'בדיוק',
  'LBL_EXPORT' => 'ייצוא',
  'LBL_FAILURE_REPORT' => 'כישלון: דוחות',
  'LBL_FAVORITE' => 'מועדפים',
  'LBL_FAVORITES_TITLE' => 'הדוחות המועדפים שלי',
  'LBL_FAVORITE_REPORTS' => 'הדוחות המועדפים שלי',
  'LBL_FAVORITE_REPORTS_TITLE' => 'הדוחות המועדפים שלי',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'All reportable fields from the selected module in <B>Related Modules</B> appear here. Select a field.',
  'LBL_FIELD_NAME' => 'שם שדה',
  'LBL_FILTER' => 'מסנן',
  'LBL_FILTERS' => 'מסננים',
  'LBL_FILTERS_END' => 'מאחד המסננים הבאים.',
  'LBL_FILTERS_HELP_DESC' => '<b>Steps to Define Filters:</b><br/><br/>1) Click on the Module in the <b>Related Modules</b> pane that you would like to use to define filters. By default, the primary module (top node in the tree view) is selected. <br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on a Field in the <b>Available Fields</b> pane to add it to the filters. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select any number of fields to use as filters.<br/><br/><br />	3) Choose <b>AND</b> or <b>OR</b> to designate whether all filters or any filters, respectively, are used to find results for the report.<br/><br/><br />	4) [Optional] Click on <b>Add Filter Group</b> to create groups of filters. You can have any number of filter groups and any number of filters in a group to create nested filters.<br/><br/><br />	5) [Optional] Select the Run-time option for a Filter to allow users to use the filter to further customize the results of the reports while viewing the report.',
  'LBL_FILTER_AND' => 'וגם',
  'LBL_FILTER_BY_MODULE' => 'לפי מודול',
  'LBL_FILTER_CONDITIONS' => 'בחר מפעיל:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'אל',
  'LBL_FILTER_DATE_RANGE_START' => 'מאת',
  'LBL_FILTER_OR' => 'או',
  'LBL_FISCAL_QUARTER' => 'רבעון כספים',
  'LBL_FISCAL_YEAR' => 'שנת כספים',
  'LBL_FORECAST_REPORTS' => 'דוחות תחזית',
  'LBL_FUNNEL' => 'משפך',
  'LBL_GRAND_TOTAL' => 'סך-הכל כללי',
  'LBL_GREATER_THAN' => 'גדול מ',
  'LBL_GREATER_THAN_EQUAL' => 'יותר או שווה ל-',
  'LBL_GROUP_BY' => 'ממוין על ידי',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Steps to Define Group By:</b><br></br>1) Click on a Module in the <b>Related Modules</b> pane that you would like to use to group records in your report. By default, the primary module (top node in the tree view) is selected. <br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on the Field in the <b>Available Fields</b> pane to group records by the field in your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select any number of fields to group records. However, the report becomes less readable when you group by more than several fields.<br/><br/><br />	You can change the order of the fields by dragging and dropping them to the desired position.  Changing the order affects the way the results are displayed.<br/><br/>  For Matrix Reports, you can use a maximum of three fields to group records.',
  'LBL_GROUP_BY_REQUIRED' => 'At least one Group By and one Summary column are required to render a chart.<br>',
  'LBL_HELLO' => 'Hello',
  'LBL_HELP' => 'עזרה',
  'LBL_HIDE_COLUMNS' => 'הסתר עמודות',
  'LBL_HIDE_SUMMARIES' => 'הסתר תקצירים',
  'LBL_HORIZ_BAR' => 'פס אופקי',
  'LBL_IS' => 'היה',
  'LBL_IS_BETWEEN' => 'באממצע',
  'LBL_IS_EMPTY' => 'ריק',
  'LBL_IS_NOT' => 'איננו',
  'LBL_IS_NOT_EMPTY' => 'איננו ריק',
  'LBL_IS_NOT_ONE_OF' => 'איננו אחד מ',
  'LBL_IS_PUBLISHED' => 'פורסם',
  'LBL_LABEL' => 'תווית',
  'LBL_LAST_30_DAYS' => 'בשלושים הימים האחרונים',
  'LBL_LAST_7_DAYS' => 'בשבעת הימים האחרונים',
  'LBL_LAST_MONTH' => 'בחודש שעבר',
  'LBL_LAST_N_DAYS' => 'מספר ימים אחרונים',
  'LBL_LAST_QUARTER' => 'ברבעון שעבר',
  'LBL_LAST_WEEK' => 'בשבוע שעבר',
  'LBL_LAST_YEAR' => 'בשנה שעברה',
  'LBL_LEAD' => 'ליד',
  'LBL_LEADS' => 'לידים',
  'LBL_LEAD_REPORTS' => 'הטען דוחות',
  'LBL_LEFT' => 'שמאל',
  'LBL_LESS_THAN' => 'פחות מ',
  'LBL_LESS_THAN_EQUAL' => 'פחות או שווה ל-',
  'LBL_LINE' => 'שורה',
  'LBL_LIST_FORM_TITLE' => 'דוחות',
  'LBL_LIST_PUBLISHED' => 'פורסם',
  'LBL_MATRIX_LAYOUT' => 'אפשרויות לסידור:',
  'LBL_MATRIX_REPORT' => 'דוח מטריצה',
  'LBL_MATRIX_REPORT_DESC' => 'Create a summation report that displays results in a grid format and grouped by a maximum of three fields.',
  'LBL_MAX' => 'מקסימאלי',
  'LBL_MAXIMUM_3_GROUP_BY' => 'A Matrix Report cannot have more than 3 group-by clauses.',
  'LBL_MEETING_REPORTS' => 'דוחות על פגישות',
  'LBL_MIN' => 'מינימאלי',
  'LBL_MINIMUM_2_GROUP_BY' => 'A Matrix Report must have at least 2 group-by clauses.',
  'LBL_MISSING_FIELDS' => 'שדות חסרים',
  'LBL_MISSING_INPUT_VALUE' => 'חסר ערך בקלט.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'חסר ערך שני בקלט.',
  'LBL_MODULE' => 'מודול',
  'LBL_MODULE_CHANGE_PROMPT' => 'Changing the selected module will result in a loss of filters, display columns, etc. Do you still wish to continue?',
  'LBL_MODULE_NAME' => 'דוחות',
  'LBL_MODULE_NAME_SAVED' => 'שם המודול',
  'LBL_MODULE_NAME_SINGULAR' => 'דוח',
  'LBL_MODULE_TITLE' => 'דוחות: דף ראשי',
  'LBL_MODULE_VIEWER_TITLE' => 'צפייה בדוחות: דף ראשי',
  'LBL_MONTH' => 'חודש',
  'LBL_MORE' => 'עוד',
  'LBL_MY_ACCOUNT_REPORTS' => 'דוחות על חשבונות שלי',
  'LBL_MY_BUG_REPORTS' => 'דוחות על באגים שלי',
  'LBL_MY_CALL_REPORTS' => 'דוחות על שיחות טלפון שלי',
  'LBL_MY_CASE_REPORTS' => 'דוחות על אירועים שלי',
  'LBL_MY_CONTACT_REPORTS' => 'דוחות על אנשי קשר שלי',
  'LBL_MY_CONTRACT_REPORTS' => 'דוח אנשי קשר',
  'LBL_MY_EMAIL_REPORTS' => 'דוחות על דואר אלקטרוני שלי',
  'LBL_MY_FORECAST_REPORTS' => 'דוחות על תחזיות שלי',
  'LBL_MY_LEAD_REPORTS' => 'דוחות על לידים שלי',
  'LBL_MY_MEETING_REPORTS' => 'דוחות על פגישות שלי',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'דוחות על הזדמנויות שלי',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'דוחות למשימות בפרויקטים שלי',
  'LBL_MY_PROSPECT_REPORTS' => 'דוחות על מטרות שלי',
  'LBL_MY_QUOTE_REPORTS' => 'דוחות על הצעות מחיר שלי',
  'LBL_MY_REPORTS' => 'הדוחות שלי',
  'LBL_MY_SAVED_REPORTS' => 'הדוחות השמורים שלי',
  'LBL_MY_TASK_REPORTS' => 'My Task Reports',
  'LBL_MY_TEAMS_REPORTS' => 'הדוחות השמורים של הצוות שלי',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'דוחות של חשבונות הצוות שלי',
  'LBL_MY_TEAM_BUG_REPORTS' => 'דוחות על באגים של הצוות שלי',
  'LBL_MY_TEAM_CALL_REPORTS' => 'דוחות על שיחות טלפון של הצוות שלי',
  'LBL_MY_TEAM_CASE_REPORTS' => 'דוחות על אירועים של הצוות שלי',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'דוחות על אנשי קשר של הצוות שלי',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'דוחות על אנשי קשר של הצוות שלי',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'דוחות על הודעות דואר אלקטרוני של הצוות שלי',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'דוחות על תחזיות של הצוות שלי',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'דוחות על לידים של הצוות שלי',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'דוחות על פגישות של הצוות שלי',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'דוחות על הזדמנויות של הצוות שלי',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'דוחות על משימות בפרויקטים של הצוות שלי',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'דוחות על מטרות של הצוות שלי',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'דוחות על הצעות מחיר של הצוות שלי',
  'LBL_MY_TEAM_TASK_REPORTS' => 'דוחות על משימות של צהוות שלי',
  'LBL_NEXT' => 'הבא >',
  'LBL_NEXT_30_DAYS' => 'בשלושים הימים הבאים',
  'LBL_NEXT_7_DAYS' => 'בשבעת הימים הבאים',
  'LBL_NEXT_FISCAL_QUARTER' => 'רבעון כספים הבא',
  'LBL_NEXT_FISCAL_YEAR' => 'שנת כספים הבאה',
  'LBL_NEXT_MONTH' => 'בחוד הבא',
  'LBL_NEXT_N_DAYS' => 'מספר הימים הבאים',
  'LBL_NEXT_QUARTER' => 'ברבעון הבא',
  'LBL_NEXT_RUN' => 'הודעת הדואר הבאה',
  'LBL_NEXT_WEEK' => 'בשבוע הבא',
  'LBL_NEXT_YEAR' => 'בשנה הבאה',
  'LBL_NONE' => '-- כלום --',
  'LBL_NONE_STRING' => 'כלום',
  'LBL_NOTHING_WAS_SELECTED' => 'לא נבחר דבר.',
  'LBL_NOT_ON' => 'לא על',
  'LBL_NO_ACCESS' => 'בשל מגבלת הרשאה אינך יכול לגשת לדוח המבוקש.',
  'LBL_NO_CHART' => 'אין טבלה',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Chart not able to be drawn because of insufficient data',
  'LBL_NO_EXPORT_ACCESS' => 'ייצוא אינו פעיל',
  'LBL_NO_FILTERS' => 'ללא מסננים.',
  'LBL_NO_IMAGE' => 'ללא תמונה',
  'LBL_NO_REPORTS' => 'אין תוצאות.',
  'LBL_OF' => 'של',
  'LBL_ON' => 'על',
  'LBL_ONE_OF' => 'אחד מתוך',
  'LBL_OPPORTUNITIES' => 'הזדמנויות',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'הזדמנויות ממוינות לפי מקור הליד',
  'LBL_OPPORTUNITY' => 'הזדמנות',
  'LBL_OPPORTUNITY_REPORTS' => 'דוחות על הזדמנויות',
  'LBL_OPTIONAL_HELP' => 'Select the boxes to display the primary module records even if the related module records do not exist. When the box is not selected, then primary module records will display only when there are one or more related module records.',
  'LBL_OPTIONAL_MODULES' => 'מודולים אןפציונאליים',
  'LBL_ORDER_BY' => 'סדר לפי',
  'LBL_OUTER_JOIN_CHECKBOX' => 'מודולים שאופציונאלית קשורים',
  'LBL_OWNER' => 'הוקצה עבור',
  'LBL_PARTNER_ACCOUNT_LIST' => 'רשימת חשבונות של שותפים',
  'LBL_PDF_TIMESTAMP' => 'd_m_y_H_i',
  'LBL_PIE' => 'פאי',
  'LBL_PREVIEW_REPORT' => 'תצוגה מקדימה',
  'LBL_PREVIOUS' => '< הקודם',
  'LBL_PREVIOUS_FISCAL_QUARTER' => 'רבעון כספים קודם',
  'LBL_PREVIOUS_FISCAL_YEAR' => 'שנת כספים קודמת',
  'LBL_PROJECT_TASK_REPORTS' => 'דוח על משימות בפרויקט',
  'LBL_PROSPECT_REPORTS' => 'דוחות על מטרות',
  'LBL_PUBLISH' => 'פרסם',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'פורסם דוח על חשבונות',
  'LBL_PUBLISHED_BUG_REPORTS' => 'פורסם דוח על באגים',
  'LBL_PUBLISHED_CALL_REPORTS' => 'פורסם דוח על שיחות טלפון',
  'LBL_PUBLISHED_CASE_REPORTS' => 'פורסם דוח על אירועים',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'פורסם דוח על אנשי קשר',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'פרסם דוח אנשי קשר',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'פורסם דוח על הוגעות דואר אלקטרוני',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'פורסם דוח על תחזיות',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'פורסם דוח על לידים',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'פורסם דוח על פגישות',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'פורסם דוח על הזדמנויות',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'פרסם דוח על משימות בפרויקט שלי',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'פורסם דוח על מטרות',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'דוחות מכסה מפורסמים',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'פורסם דוח על הצעות מחיר',
  'LBL_PUBLISHED_TASK_REPORTS' => 'פורסם דוח על משימות',
  'LBL_QUARTER' => 'רבעון',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'שאילתא',
  'LBL_QUOTE_REPORTS' => 'דוחות על הצעות מחיר',
  'LBL_RELATED' => 'קשור אל:',
  'LBL_RELATED_MODULES' => 'מודולים קשורים',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'The primary module and all modules related to the primary module appear here. Select a module.',
  'LBL_RELATED_TABLE_BLANK' => 'בחר בבקשה מודול להתקשר איתו.',
  'LBL_REMOVE' => 'הסר',
  'LBL_REMOVED_FAVORITES' => 'הסר דוח או דוחות מהמועדפים שלי.',
  'LBL_REMOVE_BTN_HELP' => 'קליק על מנת להסיר קבוצת מסננים זו.',
  'LBL_REMOVE_GROUP' => 'הסר קבוצת מסננים',
  'LBL_REPORTS' => 'דוחות',
  'LBL_REPORTS_TO' => 'מדווח אל',
  'LBL_REPORT_ATT_MODULES' => 'מודולים',
  'LBL_REPORT_ATT_NAME' => 'שם',
  'LBL_REPORT_COLLAPSE_ALL' => 'פתח הכל',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'This report contains data in following column orders:',
  'LBL_REPORT_DETAILS' => 'פרטי הדוח',
  'LBL_REPORT_EXPAND_ALL' => 'הרחב הכל',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Report filters have been modified since last run.',
  'LBL_REPORT_GRAND_TOTAL' => 'סך-הכל כללי',
  'LBL_REPORT_GROUP_BY' => 'סדר לפי',
  'LBL_REPORT_HIDE_CHART' => 'הסתר טבלה',
  'LBL_REPORT_HIDE_DETAILS' => 'הסתר פרטים',
  'LBL_REPORT_LAST_RUN_DATE' => 'נגשו אליו ב',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Report has been modified since last run.',
  'LBL_REPORT_MODULES' => 'מודולים לדוחות',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'צפייה בדוחות',
  'LBL_REPORT_NAME' => 'שם הדוח',
  'LBL_REPORT_RESET_FILTER' => 'Reset',
  'LBL_REPORT_RESULTS' => 'תוצאות',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Click on Run Report to view results.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'הפעל מסננים',
  'LBL_REPORT_SCHEDULE_TITLE' => 'תזמן',
  'LBL_REPORT_SHOW_CHART' => 'בצג טבלה',
  'LBL_REPORT_SHOW_DETAILS' => 'הצג פרטים',
  'LBL_REPORT_TYPE' => 'סוג דוח',
  'LBL_REPORT__ATT_TYPE' => 'סוג',
  'LBL_RIGHT' => 'ימין',
  'LBL_ROLLOVER' => 'Rollover a bar for details.',
  'LBL_ROLLOVER_SQUARE' => 'Rollover a square for details.',
  'LBL_ROLLOVER_WEDGE' => 'Rollover a wedge for details.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'דוח שורות ועמודות',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Create a tabular report that contains the values of selected display fields for records matching the specified criteria.',
  'LBL_RUNTIME_FILTERS' => 'פילטרים לזמן ריצה',
  'LBL_RUNTIME_HELP' => 'Select this box to allow users to change the filter value before running the report.',
  'LBL_RUN_BUTTON_TITLE' => 'הרץ דוח [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'הרץ דוח',
  'LBL_RUN_TIME_LABEL' => 'זמן-ריצה',
  'LBL_SAVED_SEARCH' => 'שמור חיפוש ותצורתו',
  'LBL_SAVE_AS' => 'שמור בשם',
  'LBL_SAVE_RUN' => 'שמור והפעל',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'ושמור בשם "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". If you wish to change your report settings, login to the Sugar application and click on the "Reports" tab.',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Attached is an auto-generated report sent to you from the Sugar application.  This report was created on',
  'LBL_SCHEDULE_ACTIVE' => 'פעיל',
  'LBL_SCHEDULE_EMAIL' => 'דוח מתוזמן',
  'LBL_SCHEDULE_REPORT' => 'תזמן דוח',
  'LBL_SCHEDULE_TYPE' => 'סוג תיזמון',
  'LBL_SEARCH_FORM_TITLE' => 'רשימת דוחות',
  'LBL_SELECT' => 'בחר',
  'LBL_SELECT_GROUP_BY' => 'הגדר סדר לפי',
  'LBL_SELECT_MODULE' => 'בחר מודול',
  'LBL_SELECT_MODULE_BUTTON' => 'הקלק על אייקון לבחירת מודול.',
  'LBL_SELECT_RECORD' => 'בחר רשומות',
  'LBL_SELECT_REPORT_TYPE' => 'הקלק על אייקון לבחירת סוג דוח.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'בחר סוג דוח',
  'LBL_SHOW' => 'הצג',
  'LBL_SHOW_DETAILS' => 'הצג פרטים',
  'LBL_SHOW_QUERY' => 'הצג שאילתא',
  'LBL_SORT' => 'סדר',
  'LBL_STARTS_WITH' => 'מתחיל ב',
  'LBL_START_DATE' => 'תאריך התחלה',
  'LBL_STATUS' => 'סטאטוס',
  'LBL_SUBJECT' => 'נושא',
  'LBL_SUBMIT_QUERY' => 'הגש שאילתא',
  'LBL_SUCCESS_REPORT' => 'הצלחה: דוחות',
  'LBL_SUM' => 'סיכום',
  'LBL_SUMMARY_COLUMNS' => 'סכם עמודות',
  'LBL_SUMMATION_REPORT' => 'מדמה דוח',
  'LBL_SUMMATION_REPORT_DESC' => 'Create a tabular report that provides computed data for records matching the specified criteria. The data can also be represented within a chart.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'דוח סיכומים מפורט',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Create a summation report that displays additional data related to the records in the results.',
  'LBL_SUMMATION_WITH_DETAILS' => 'כסיקכום כללי מפורט',
  'LBL_TABLE_CHANGED' => 'Module list has been modified, please double check the criteria entered in the Group tab.',
  'LBL_TASK_REPORTS' => 'דוחות על משימות',
  'LBL_TEAM' => 'צוותים',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'אין דוחות מסוג זה.',
  'LBL_THIS_MONTH' => 'החודש',
  'LBL_THIS_QUARTER' => 'ברבעון הנכחי',
  'LBL_THIS_WEEK' => 'השבוע',
  'LBL_THIS_YEAR' => 'השנה',
  'LBL_TIME_INTERVAL' => 'מרווחי זמן',
  'LBL_TITLE' => 'כותרת',
  'LBL_TODAY' => 'היום',
  'LBL_TOMORROW' => 'מחר',
  'LBL_TOTAL' => 'סך-הכל',
  'LBL_TOTAL_IS' => 'Total is',
  'LBL_TO_PDF' => 'שמור כ PDF',
  'LBL_TYPE' => 'סוג',
  'LBL_UNTITLED' => 'ללא כותרת',
  'LBL_UN_PUBLISH' => 'אל תפרסם',
  'LBL_UP' => 'למעלה',
  'LBL_UPDATE_SCHEDULE' => 'עדכן מערכת תזמון',
  'LBL_USER_EMPTY_HELP' => 'In order to view records that are not assigned to any Users, check the &#39;Optional Related Modules&#39; checkbox in the &#39;Reports Details&#39; step in addition to using the &#39;Is Empty&#39; option for the Assigned User filter. This will display all records that are not related to any Users.',
  'LBL_USE_COLUMN_FOR' => 'סדרות מידע',
  'LBL_VERT_BAR' => 'פס אנכי',
  'LBL_VIEW' => 'צפה',
  'LBL_VIEWER_RUNTIME_HELP' => 'Specify values for <b>Runtime Filters</b> and click the <b>Apply Filters</b> button to re-run the report.',
  'LBL_WAS_NOT_SAVED' => 'לא נשמר',
  'LBL_WAS_SAVED' => 'נשמר',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'סכום ממוצע משוקלל',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'סכום סיכום משוקלל',
  'LBL_WHOSE_MAXIMUM' => 'של מי המקסימום',
  'LBL_WHOSE_MINIMUM' => 'של מי המינימום',
  'LBL_WITH_AN_AVERAGE' => 'עם ממוצע',
  'LBL_WITH_A_TOTAL' => 'עם סיכום',
  'LBL_WITH_DETAILS' => 'עם פרטים',
  'LBL_YEAR' => 'שנה',
  'LBL_YESTERDAY' => 'אתמול',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'אין לך דוחות שמורים.',
  'LNK_ADVANCED_REPORTING' => 'נהל דוחות מתקדמים',
  'LNK_NEW_ACCOUNT' => 'צור חשבון',
  'LNK_NEW_CALL' => 'יומן שיחת טלפון',
  'LNK_NEW_CASE' => 'צור אירוע',
  'LNK_NEW_CONTACT' => 'צור איש קשר',
  'LNK_NEW_EMAIL' => 'ארכב דואר אלקטרוני',
  'LNK_NEW_MEETING' => 'תזמן פגישה',
  'LNK_NEW_NOTE' => 'צור פתק או צרופה',
  'LNK_NEW_OPPORTUNITY' => 'צור הזדמנות',
  'LNK_NEW_TASK' => 'צור משימה',
  'MSG_NO_PERMISSIONS' => 'You do not have permission to edit this report',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'אינני יכול לפרסם. ישנו דוח מפורסם באותו שם.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'לא יכול שלא לפרסם דוח בשם זהה נמצא בבעלות של משתמש אחר. משוייך לך דוח בשם זהה.',
);

