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
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge contul',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Numele angajatului',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'exista deja. Dublarea numelui angajatului nu este admisa. Schimba numele angajatului pentru a fi unic',
  'ERR_LAST_ADMIN_1' => 'Numele angajatului "',
  'ERR_LAST_ADMIN_2' => '" este ultimul angajat cu acces de administrator. Cel putin un angajat trebuie sa fie administrator',
  'LBL_ADDRESS' => 'Adresa:',
  'LBL_ADDRESS_CITY' => 'Orasul adresa',
  'LBL_ADDRESS_COUNTRY' => 'Tara adresa',
  'LBL_ADDRESS_INFORMATION' => 'Informatii Adresa',
  'LBL_ADDRESS_POSTALCODE' => 'Adresa cod posta',
  'LBL_ADDRESS_STATE' => 'Statul adresa',
  'LBL_ADDRESS_STREET' => 'Strada adresa',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_ANY_ADDRESS' => 'Oricare Adresa:',
  'LBL_ANY_EMAIL' => 'Oricare Email:',
  'LBL_ANY_PHONE' => 'Oricare Telefon:',
  'LBL_AUTHENTICATE_ID' => 'Id-ul de autentificare',
  'LBL_CITY' => 'Oras',
  'LBL_COUNTRY' => 'Tara:',
  'LBL_CREATED_BY_NAME' => 'Creat de',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Creeaza Utiliztor',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Creeaza Utilizator [Alt+N]',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_DATE_ENTERED' => 'Data intrarii',
  'LBL_DATE_FORMAT' => 'Formatul datei',
  'LBL_DATE_MODIFIED' => 'Data Modificarii',
  'LBL_DEFAULT_TEAM' => 'Echipa implicita',
  'LBL_DEFAULT_TEAM_TEXT' => 'Selecteaza echipa implicita pentru noua inregistrare',
  'LBL_DELETED' => 'Stearsa',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Esti sigur ca doresti sa stergi acest angajat?',
  'LBL_DELETE_USER_CONFIRM' => 'Acest Angajat este deasemenea un Utilizator. Stergerea inregistrarii angajatului va sterge deasemenea si inregistrarile utilizatorului si utilizatorul nu va mai avea acces la aplicatie. Tu vrei sa procedezi la stergerea acestei inregistrari ?',
  'LBL_DEPARTMENT' => 'Departament',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_EMAIL' => 'Adresa Email:',
  'LBL_EMAIL_ADDRESS' => 'Adresă Email',
  'LBL_EMAIL_LINK_TYPE' => 'Client Email',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Client Email Sugar: Expediaza email-uri utilizand clientul de email din cadrul aplicatiei Sugar.<br />Client Email Extern: Expediaza email-uri utilizand un client de email din afara aplicatie Sugar, precum Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Angajati',
  'LBL_EMPLOYEE_INFORMATION' => 'Informatii angajat',
  'LBL_EMPLOYEE_NAME' => 'Nume angajat:',
  'LBL_EMPLOYEE_SETTINGS' => 'Setarile angajatului',
  'LBL_EMPLOYEE_STATUS' => 'Statut Angajat:',
  'LBL_ERROR' => 'Eroare:',
  'LBL_EXT_AUTHENTICATE' => 'Autentificare Externa',
  'LBL_FAVORITE_COLOR' => 'Culoare Favorita',
  'LBL_FAX' => 'Fax:',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FF_CLEAR' => 'Sterge',
  'LBL_FIRST_NAME' => 'Nume:',
  'LBL_GROUP' => 'Grup Utilizatori',
  'LBL_GROUP_USER' => 'Grup Utilizatori',
  'LBL_HOME_PHONE' => 'Telefon Acasa:',
  'LBL_IS_ADMIN' => 'Este Administrator',
  'LBL_LANGUAGE' => 'Limba',
  'LBL_LAST_NAME' => 'Prenume:',
  'LBL_LIST_ACCEPT_STATUS' => 'Accept Statut',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Departament',
  'LBL_LIST_DESCRIPTION' => 'Descriere',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nume angajat',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Statut Angajat',
  'LBL_LIST_FORM_TITLE' => 'Angajati',
  'LBL_LIST_LAST_NAME' => 'Prenume',
  'LBL_LIST_NAME' => 'Nume',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefon Primar',
  'LBL_LIST_REPORTS_TO_NAME' => 'Raporteaza lui',
  'LBL_LIST_USER_NAME' => 'Nume Utilizator',
  'LBL_LOGIN' => 'Login',
  'LBL_MESSENGER_ID' => 'IM Nume:',
  'LBL_MESSENGER_TYPE' => 'IM Tip:',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED_BY' => 'Modificata de',
  'LBL_MODIFIED_BY_ID' => 'Modificata de ID',
  'LBL_MODULE_NAME' => 'Angajati',
  'LBL_MODULE_NAME_SINGULAR' => 'Angajat',
  'LBL_MODULE_TITLE' => 'Angajati: Acasa',
  'LBL_MY_TEAMS' => 'Echiplele mele',
  'LBL_NAME' => 'Nume',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Angajat nou',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Angajat nou [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Angajat Nou',
  'LBL_NOTES' => 'Note',
  'LBL_OFFICE_PHONE' => 'Telefon Birou',
  'LBL_ONLY_ACTIVE' => 'Numar de angajati activi',
  'LBL_OTHER' => 'Altul:',
  'LBL_OTHER_EMAIL' => 'Alt Email',
  'LBL_OTHER_PHONE' => 'Altul',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_PHOTO' => 'Fotografie',
  'LBL_PICTURE_FILE' => 'Poza',
  'LBL_PORTAL_ONLY' => 'Portal Utilizator',
  'LBL_PORTAL_ONLY_USER' => 'Portal API utilizator',
  'LBL_POSTAL_CODE' => 'Cod Postal:',
  'LBL_PRIMARY_ADDRESS' => 'Adresa Primara:',
  'LBL_PSW_MODIFIED' => 'parola a fost schimbata',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifica in Cesiune',
  'LBL_REPORTS_TO' => 'Raporteaza catre Id:',
  'LBL_REPORTS_TO_NAME' => 'Raporteaza catre',
  'LBL_RESET_PREFERENCES' => 'Revenire la setarile initiale',
  'LBL_SAVED_SEARCH' => 'Setari Aspect',
  'LBL_SEARCH_FORM_TITLE' => 'Cauta Angajat',
  'LBL_SELECT' => 'Selecteaza',
  'LBL_SHOW_ON_EMPLOYEES' => 'Afişare Înregistrarea angajaţilor',
  'LBL_STATE' => 'Stat:',
  'LBL_STATUS' => 'Stare',
  'LBL_SUGAR_LOGIN' => 'Este Utilizator Sugar',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Parola generata de sistem',
  'LBL_THEME' => 'Tema',
  'LBL_TIMEZONE' => 'Timpul curent',
  'LBL_TIME_FORMAT' => 'Formatul timpului',
  'LBL_TITLE' => 'Titlu:',
  'LBL_USER_HASH' => 'Parola:',
  'LBL_USER_NAME' => 'Nume utilizator:',
  'LBL_USER_TYPE' => 'Tipul Utilizatorului',
  'LBL_WORK_PHONE' => 'Telefon Serviciu:',
  'LNK_EDIT_TABS' => 'Editeaza fila',
  'LNK_EMPLOYEE_LIST' => 'Vizualizeaza Angajati',
  'LNK_NEW_EMPLOYEE' => 'Creeaza Angajat',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Esti sigura ca vrei sa stergi acest angajat \\ membru',
);

