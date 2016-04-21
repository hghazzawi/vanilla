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
  'ERR_DELETE_RECORD' => 'Trebuie sa specifici un numar de inregistrare pentru a sterge intalnirea',
  'LBL_ACCEPT_LINK' => 'Accept Link',
  'LBL_ACCEPT_STATUS' => 'Accept Statut',
  'LBL_ACCEPT_THIS' => 'Acceptati?',
  'LBL_ACCOUNT_NAME' => 'Conturi',
  'LBL_ACTIVITIES_REPORTS' => 'Raport Activitati',
  'LBL_ADD_BUTTON' => 'Adauga',
  'LBL_ADD_INVITEE' => 'Adauga Invitati',
  'LBL_ASSIGNED_TO_NAME' => 'Atrbuit lui',
  'LBL_CANCEL_CREATE_INVITEE' => 'Anulare',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Sunteţi sigur că doriţi să eliminaţi toate înregistrările recurente?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
  'LBL_CONTACT_NAME' => 'Contact',
  'LBL_CREATED_BY' => 'Creeat de',
  'LBL_CREATED_USER' => 'Utilizator creat',
  'LBL_CREATE_AND_ADD' => 'Creaza & Adauga',
  'LBL_CREATE_CONTACT' => 'Creaza Contact',
  'LBL_CREATE_INVITEE' => 'Creaza si invita',
  'LBL_CREATE_LEAD' => 'Creeaza Prospect',
  'LBL_CREATE_MODULE' => 'orar intalniri',
  'LBL_CREATOR' => 'Creator Conferinta',
  'LBL_DATE' => 'Data de start',
  'LBL_DATE_END' => 'Data Sfarsit',
  'LBL_DATE_END_ERROR' => 'Data de sfârşit este înainte de data începerii',
  'LBL_DATE_TIME' => 'Data si timpul de start',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Intalniri',
  'LBL_DEL' => 'Del',
  'LBL_DESCRIPTION' => 'Descriere',
  'LBL_DESCRIPTION_INFORMATION' => 'Descriere Informatie',
  'LBL_DIRECTION' => 'Directie',
  'LBL_DISPLAYED_URL' => 'Display URL',
  'LBL_DURATION' => 'Durata',
  'LBL_DURATION_HOURS' => 'Ore Durata',
  'LBL_DURATION_MINUTES' => 'Minute Durata',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editare toate repetarile',
  'LBL_EMAIL' => 'E-mail',
  'LBL_EMAIL_REMINDER' => 'memento email',
  'LBL_EMAIL_REMINDER_SENT' => 'Memento email trimis',
  'LBL_EMAIL_REMINDER_TIME' => 'Memento Email',
  'LBL_EMPTY_SEARCH_RESULT' => 'Ne pare rau, nu au fost găsite rezultate. Vă rugăm să creaţi un invitat de mai jos.',
  'LBL_ERROR_LAUNCH_MEETING_GENERAL' => 'S-a produs o eroare la lansarea acestei întâlniri. Vă rugăm să contactaţi Administratorul.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Alocat utilizatorului ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Alocat utilizatorului',
  'LBL_EXPORT_CREATED_BY' => 'Creat de ID',
  'LBL_EXPORT_DATE_END' => 'End Date and Time',
  'LBL_EXPORT_DATE_START' => 'Start Date and Time',
  'LBL_EXPORT_DISPLAYED_URL' => 'Displayed Url',
  'LBL_EXPORT_EXTERNAL_ID' => 'External ID',
  'LBL_EXPORT_HOST_URL' => 'Host Url',
  'LBL_EXPORT_JOIN_URL' => 'Alatura-te la  Url',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat de ID-ul',
  'LBL_EXPORT_PARENT_ID' => 'parent id',
  'LBL_EXPORT_PARENT_TYPE' => 'Tip Asociere',
  'LBL_EXPORT_REMINDER_TIME' => 'Reminder Time (in minutes)',
  'LBL_EXTERNALID' => 'ID App Extern',
  'LBL_EXTNOSTART_HEADER' => 'Eroare: Conferinta nu poate incepe',
  'LBL_EXTNOSTART_MAIN' => 'Tu nu poti începe această întâlnire, deoarece nu sunteţi un administrator sau proprietar al reuniunii.',
  'LBL_EXTNOT_GO_BACK' => 'Intoarce-te la raportul anterior',
  'LBL_EXTNOT_HEADER' => 'Eroare:Neinvitat',
  'LBL_EXTNOT_MAIN' => 'Nu esti in masura sa participi la aceasta Conferinta, pt ca nu esti invitat',
  'LBL_EXTNOT_RECORD_LINK' => 'Vezi Conferinta',
  'LBL_FIRST_NAME' => 'Nume:',
  'LBL_HELP_CREATE' => 'Modulul {{plural_module_name}} este format din înregistrări {{meetings_singular_module}} introduse de utilizatorii din organizaţia dvs. {{plural_module_name}} poate fi în starea "Programat", "În aşteptare" sau "Anulat". Utilizatorii Sugar, precum şi {{contacts_module}} şi {{leads_module}} pot fi adăugaţi ca invitaţi.
Pentru a crea {{meetings_singular_module}}: 1. Completează valori în câmpurile dorite. - Câmpurile marcate "Obligatoriu" trebuie să fie completate înainte de a salva. - Apasă butonul "Afişează mai mult" pentru a vedea câmpuri adiţionale dacă este necesar. 2. Adaugă invitaţi la  {{meetings_singular_module}}. - Apasă "Selectează un participant" pentru a adăuga un utilizator, contact sau responsabil existent la {{meetings_singular_module}}. - Apasă pictograma plus din dreapta "Selectează un participant" pentru a crea un participant {{meetings_singular_module}} ca înregistrare Sugar nouă. 3. Apasă "Salvează" pentru a finaliza noua înregistrare şi pentru a reveni la pagina anterioară. - Apasă "Salvează şi vizualizează" pentru a deschide noua întâlnire în fereastra de vizualizare a înregistrărilor. - Apasă "Salvează şi creează o înregistrare nouă" pentru a crea imediat un nou (o nouă) {{meetings_singular_module}}.',
  'LBL_HELP_RECORD' => 'Modulul {{plural_module_name}} este format din înregistrări {{meetings_singular_module}} introduse de utilizatorii din organizaţia dvs. {{plural_module_name}} poate fi în starea "Programat", "În aşteptare" sau "Anulat". Utilizatorii Sugar, precum şi {{contacts_module}} şi {{leads_module}} pot fi adăugaţi ca invitaţi. - Editează câmpurile acestei înregistrări apăsând pe fiecare câmp individual sau pe butonul Editare. - Vizualizează sau modifică linkuri către alte înregistrări in panourile secundare, trecând fereastra din stânga jos în stadiul "Vizualizare Date". - Creează şi vizualizează comentariile altor utilizatori şi istoricul modificărilor în {{activitystream_singular_module}} trecând fereastra din stânga jos în stadiul "Flux de activitate". - Urmăreşte sau marchează ca favorit această înregistrare folosind pictogramele din dreapta numelui înregistrării. - Sunt disponibile acţiuni suplimentare în meniul cu listă derulantă Acţiuni din dreapta butonului Editare.',
  'LBL_HELP_RECORDS' => 'Modulul {{plural_module_name}} este format din înregistrări de întâlniri care pot avea starea "Programat", "În aşteptare" sau "Anulat". Întâlnirile viitoare programate în următoarele 24 de ore au data de începere subliniată cu albastru. Întâlnirile restante au data de începere subliniată cu roşu.
Din această fereastră de vizualizare a listelor {{plural_module_name}}, puteţi vizualiza şi edita în linie informaţiile despre întâlniri. Sunt disponibile acţiuni suplimentare în meniu, la capătul fiecărui rând de întâlniri. Puteţi selecta "Închidere" din meniul de pe oricare rând de întâlniri programate pentru a-l marca în aşteptare.
Utilizatorii, contactele şi responsabilii Sugar pot fi adăugaţi ca invitaţi la întâlnire. {{plural_module_name}} poate fi creat prin modulul {{plural_module_name}}, modulul Calendar, importare, precum şi prin panoul secundar Activităţi (pentru modulele Legacy) sau componenta Activităţi planificate (pentru modulele Sidecar) în înregistrări de module relaţionate (de ex. Contacte, Conturi etc.), ceea ce creează imediat o relaţie între ambele înregistrări.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
  'LBL_HOST_EXT_MEETING' => 'Inceperea Conferintei',
  'LBL_HOST_URL' => 'Host URL',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => 'ore/minute',
  'LBL_INVITEE' => 'Invitat',
  'LBL_JOIN_EXT_MEETING' => 'Alăturaţi-vă de conferinţei',
  'LBL_JOIN_MEETING' => 'Participă la {{meetingType}}',
  'LBL_LAST_NAME' => 'Prenume',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Antete',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
  'LBL_LIST_CLOSE' => 'Inchide',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_LIST_DATE' => 'Data Inceput:',
  'LBL_LIST_DATE_MODIFIED' => 'Data Modificata',
  'LBL_LIST_DIRECTION' => 'Directia',
  'LBL_LIST_DUE_DATE' => 'Pana la data:',
  'LBL_LIST_FORM_TITLE' => 'Lista intalniri',
  'LBL_LIST_JOIN_MEETING' => 'Alăturaţi-vă de conferinţei',
  'LBL_LIST_MY_MEETINGS' => 'Intalnirile mele',
  'LBL_LIST_RELATED_TO' => 'Asociat cu',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBJECT' => 'Subiect',
  'LBL_LIST_TIME' => 'Timp Inceput',
  'LBL_LOCATION' => 'Locatia:',
  'LBL_MEETING' => 'Intalnire:',
  'LBL_MEETING_CLOSE_SUCCESS' => 'Întâlnire încheiată cu succes.',
  'LBL_MEETING_INFORMATION' => 'Trecere in revista a intalnirii',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modificat de',
  'LBL_MODIFIED_USER' => 'Utilizator Modificat',
  'LBL_MODULE_NAME' => 'Intalniri',
  'LBL_MODULE_NAME_SINGULAR' => 'Intalnire:',
  'LBL_MODULE_TITLE' => 'Intalniri : Acasa',
  'LBL_MY_SCHEDULED_MEETINGS' => 'Întâlnirile mele programate',
  'LBL_NAME' => 'Nume',
  'LBL_NEW_FORM_TITLE' => 'Creeaza Intalnire',
  'LBL_NO_ACCESS' => 'Nu poti accesa acest raport din cauza restrictiilor de permisiune.',
  'LBL_OUTLOOK_ID' => 'Identitate Outlook',
  'LBL_PARENT_ID' => 'parent id',
  'LBL_PARENT_TYPE' => 'Tip Parinte',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_PHONE' => 'Telefon',
  'LBL_POPUP_REMINDER' => 'Memento în pop-up',
  'LBL_POPUP_REMINDER_TIME' => 'Fereastră pop-up memento',
  'LBL_RECORD_SAVED_ACCESS_DENIED' => 'Ai programat {{moduleSingularLower}} pentru {{formatDate date_start}}, dar nu ai permisiunea de acces.',
  'LBL_RECORD_SAVED_SUCCESS' => 'Ai programat {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{name}}</a> pentru {{formatDate date_start}}.',
  'LBL_RECURRENCE' => 'Repetare',
  'LBL_RECURRING_LIMIT_ERROR' => 'Această recurentă $ titlu modul nu poate fi programat, deoarece depășește reapariția maximă permisă de $ limită.',
  'LBL_RECURRING_SOURCE' => 'Sursa periodica',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Intalnit cu {{{this}}}',
  'LBL_RELATED_TO' => 'Asociat cu:',
  'LBL_REMINDER' => 'Memento',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Trimite email tuturor invitatilor',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TIME' => 'Timpul Mementoului',
  'LBL_REMINDER_TITLE' => 'Intalnire',
  'LBL_REMOVE' => 'Sterge',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Sterge toate repetarile',
  'LBL_REPEAT_COUNT' => 'numarul de repetari',
  'LBL_REPEAT_DOW' => 'Pe',
  'LBL_REPEAT_END' => 'Sfarsit',
  'LBL_REPEAT_END_AFTER' => 'Dupa',
  'LBL_REPEAT_END_BY' => 'de',
  'LBL_REPEAT_INTERVAL' => 'interval',
  'LBL_REPEAT_OCCURRENCES' => 'Repetari',
  'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
  'LBL_REPEAT_TYPE' => 'Repeta',
  'LBL_REPEAT_UNTIL' => 'Repeta inainte',
  'LBL_REVENUELINEITEMS' => 'Elemente venit',
  'LBL_SCHEDULING_FORM_TITLE' => 'Programare',
  'LBL_SEARCH_BUTTON' => 'Cauta',
  'LBL_SEARCH_FORM_TITLE' => 'Cautare intalinre',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Trimite invitatii',
  'LBL_SEND_BUTTON_TITLE' => 'Trimite Invitatii[Alt+I]',
  'LBL_SEND_INVITES' => 'Trimite invitatii',
  'LBL_SEQUENCE' => 'Actualizare Reuniune',
  'LBL_START_MEETING' => 'Începe {{meetingType}}',
  'LBL_STATUS' => 'Statut',
  'LBL_SUBJECT' => 'Subiect',
  'LBL_SYNCED_RECURRING_MSG' => 'Acest apel are originea într-un alt sistem şi a fost sincronizate cu Sugar. Pentru a efectua modificări, du-te la apelul iniţial în alt sistem. Modificările efectuate în alt sistem poate fi sincronizat la acest record.',
  'LBL_TIME' => 'Timpul de start',
  'LBL_TYPE' => 'Tip:',
  'LBL_URL' => 'URL',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilizatori',
  'LNK_IMPORT_MEETINGS' => 'Importa Sedinte',
  'LNK_MEETING_LIST' => 'Vezi intalniri',
  'LNK_NEW_APPOINTMENT' => 'Creeaza Intalnire',
  'LNK_NEW_MEETING' => 'Orar Intalniri',
  'NOTICE_DURATION_TIME' => 'Durata timpului trebuie sa fie mai mare ca 0',
  'NTC_REMOVE_INVITEE' => 'Sunteţi sigur că doriţi să eliminaţi acest invitat din intalniri?',
);
