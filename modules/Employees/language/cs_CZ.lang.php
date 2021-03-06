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
  'ERR_DELETE_RECORD' => 'Pro vymazání zaměstnance musíte specifikovat číslo záznamu.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Zaměstnanec',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'již existuje. Duplicitní jméno zaměstnance není dovoleno.  Změnte prosím jméno zaměstnance aby bylo unikátní.',
  'ERR_LAST_ADMIN_1' => 'Zaměstnanec',
  'ERR_LAST_ADMIN_2' => '" je poslední zaměstnanec s profilem administrátora. Minimálně jeden zaměstnanec musí mít profil administrátora.',
  'LBL_ADDRESS' => 'Adresa:',
  'LBL_ADDRESS_CITY' => 'Město',
  'LBL_ADDRESS_COUNTRY' => 'Země',
  'LBL_ADDRESS_INFORMATION' => 'Adresní informace',
  'LBL_ADDRESS_POSTALCODE' => 'PSČ',
  'LBL_ADDRESS_STATE' => 'Stát',
  'LBL_ADDRESS_STREET' => 'Ulice',
  'LBL_ADMIN' => 'Administrátor:',
  'LBL_ANY_ADDRESS' => 'Jakákoli adresa:',
  'LBL_ANY_EMAIL' => 'Email:',
  'LBL_ANY_PHONE' => 'Telefon:',
  'LBL_AUTHENTICATE_ID' => 'ID ověření',
  'LBL_CITY' => 'Město:',
  'LBL_COUNTRY' => 'Země:',
  'LBL_CREATED_BY_NAME' => 'Vytvořeno uživatelem',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Vytvořit uživatele',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Přidat uživatele [Alt+N]',
  'LBL_CURRENCY' => 'Měna:',
  'LBL_DATE_ENTERED' => 'Datum vložení',
  'LBL_DATE_FORMAT' => 'Formát datumu:',
  'LBL_DATE_MODIFIED' => 'Datum poslední úpravy',
  'LBL_DEFAULT_TEAM' => 'Základní tým:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Přiřazuje základní tým k novým záznamům',
  'LBL_DELETED' => 'Odstranit',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Jste si jist(a), že chcete odstranit tohoto zaměstnance?',
  'LBL_DELETE_USER_CONFIRM' => 'Tento zaměstnanec je zároveň i uživatel. Odstraněním tohoto zaměstnance dojde k odstranění i uživatele a uživatel se již nebude moci přihlásit od aplikace. Chcete pokračovat v odstranění totoho záznamu?',
  'LBL_DEPARTMENT' => 'Oddělení:',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAIL_ADDRESS' => 'E-mailová adresa',
  'LBL_EMAIL_LINK_TYPE' => 'Emailový klient',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b> Sugar poštovní klient: </ b> Odeslat e-mail pomocí e-mailového klienta v aplikaci Sugar! <b> Externí poštovní klient:. </ b> Odeslat e-mail pomocí e-mailového klienta mimo aplikaci Sugar, jako je např. Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Zaměstnanci:',
  'LBL_EMPLOYEE_INFORMATION' => 'Informace o zaměstnanci',
  'LBL_EMPLOYEE_NAME' => 'Jméno zaměstnance:',
  'LBL_EMPLOYEE_SETTINGS' => 'Nastavení zaměstnance',
  'LBL_EMPLOYEE_STATUS' => 'Status zaměstnance:',
  'LBL_ERROR' => 'Chyba:',
  'LBL_EXT_AUTHENTICATE' => 'Externí ověření',
  'LBL_FAVORITE_COLOR' => 'Oblíbená barva:',
  'LBL_FAX' => 'Fax:',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FF_CLEAR' => 'Vyčistit',
  'LBL_FIRST_NAME' => 'Křestní jméno:',
  'LBL_GROUP' => 'Skupinový uživatel',
  'LBL_GROUP_USER' => 'Skupinový uživatel',
  'LBL_HOME_PHONE' => 'Telefon domů:',
  'LBL_IS_ADMIN' => 'Je administrator',
  'LBL_LANGUAGE' => 'Jazyk:',
  'LBL_LAST_NAME' => 'Příjmení:',
  'LBL_LIST_ACCEPT_STATUS' => 'Přijmout stav',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Oddělení',
  'LBL_LIST_DESCRIPTION' => 'Popis',
  'LBL_LIST_EMAIL' => 'E-mail',
  'LBL_LIST_EMPLOYEE_NAME' => 'Jméno zaměstnance',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Stav',
  'LBL_LIST_FORM_TITLE' => 'Zaměstnanci',
  'LBL_LIST_LAST_NAME' => 'Příjmení',
  'LBL_LIST_NAME' => 'Název',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefon',
  'LBL_LIST_REPORTS_TO_NAME' => 'Podřízen(komu)',
  'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
  'LBL_LOGIN' => 'Přihlásit',
  'LBL_MESSENGER_ID' => 'IM ID:',
  'LBL_MESSENGER_TYPE' => 'Typ IM:',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED_BY' => 'Upraveno kým',
  'LBL_MODIFIED_BY_ID' => 'Změněno uživatelem ID',
  'LBL_MODULE_NAME' => 'Zaměstnanci',
  'LBL_MODULE_NAME_SINGULAR' => 'Zaměstnanec',
  'LBL_MODULE_TITLE' => 'Zaměstnanci',
  'LBL_MY_TEAMS' => 'Moje týmy',
  'LBL_NAME' => 'Název:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nový zaměstnanec',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nový zaměstnanec [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Nový zaměstnanec',
  'LBL_NOTES' => 'Poznámky:',
  'LBL_OFFICE_PHONE' => 'Telefon do práce:',
  'LBL_ONLY_ACTIVE' => 'Aktivní zaměstnanci',
  'LBL_OTHER' => 'Další telefon:',
  'LBL_OTHER_EMAIL' => 'Další email:',
  'LBL_OTHER_PHONE' => 'Další telefon:',
  'LBL_PASSWORD' => 'Heslo:',
  'LBL_PHOTO' => 'Fotografie',
  'LBL_PICTURE_FILE' => 'Obrázek',
  'LBL_PORTAL_ONLY' => 'Přístup pouze k portálu',
  'LBL_PORTAL_ONLY_USER' => 'Portál API užívatel',
  'LBL_POSTAL_CODE' => 'PSČ:',
  'LBL_PRIMARY_ADDRESS' => 'Hlavní adresa:',
  'LBL_PSW_MODIFIED' => 'heslo naposledy změněno',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Oznámení při přidělení',
  'LBL_REPORTS_TO' => 'Podřízen(komu):',
  'LBL_REPORTS_TO_NAME' => 'Nadřízený/Reports to',
  'LBL_RESET_PREFERENCES' => 'Obnovit původní nastavení',
  'LBL_SAVED_SEARCH' => 'Volby rozvržení',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat zaměstnance',
  'LBL_SELECT' => 'Zvolit',
  'LBL_SHOW_ON_EMPLOYEES' => 'Zobrazit záznam zaměstnance',
  'LBL_STATE' => 'Stát:',
  'LBL_STATUS' => 'Stav',
  'LBL_SUGAR_LOGIN' => 'Je uživatel SugarCRM',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systémem generované heslo',
  'LBL_THEME' => 'Téma:',
  'LBL_TIMEZONE' => 'Časové pásmo:',
  'LBL_TIME_FORMAT' => 'Formát času:',
  'LBL_TITLE' => 'Titul:',
  'LBL_USER_HASH' => 'Heslo',
  'LBL_USER_NAME' => 'Uživatelské jméno:',
  'LBL_USER_TYPE' => 'Typ uživatele',
  'LBL_WORK_PHONE' => 'Telefon do zaměstnání:',
  'LNK_EDIT_TABS' => 'Upravit záložky',
  'LNK_EMPLOYEE_LIST' => 'Zaměstnanci',
  'LNK_NEW_EMPLOYEE' => 'Přidat zaměstnance',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Jste si jisti, že chcete odstranit tohoto zaměstnance z týmu?',
);

