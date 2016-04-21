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
  'ERR_CRON_SYNTAX' => 'Niewłaściwa składnia Crona',
  'ERR_DELETE_RECORD' => 'Musisz podać numer rekordu, aby usunąć harmonogram.',
  'LBL_ADV_OPTIONS' => 'Opcje zaawansowane',
  'LBL_ALL' => 'Każdego dnia',
  'LBL_ALWAYS' => 'Zawsze',
  'LBL_AND' => 'i',
  'LBL_ASYNCMASSUPDATE' => 'Przeprowadź asynchroniczne masowe aktualizacje',
  'LBL_AT' => 'o',
  'LBL_AT_THE' => 'O',
  'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
  'LBL_CATCH_UP' => 'Wykonuj do skutku',
  'LBL_CATCH_UP_WARNING' => 'Odznacz, jeżeli to zadanie ma potrwać dłuzej.',
  'LBL_CLEANJOBQUEUE' => 'Wyczyść kolejkę zadania',
  'LBL_CLEANOLDRECORDLISTS' => 'Wyczyść stare listy rekordów',
  'LBL_CRONTAB_EXAMPLES' => 'Powyżej użyto notacji crontaba.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Ustaw czas wywołania harmonogramu zadań zgodnie z tymi ustawieniami.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Specyfikacja cron opiera się na strefie czasowej serwera (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawić Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawić Harmonogram Windows',
  'LBL_CRON_LINUX_DESC' => 'Uwaga: Dodaj ten wpis do crontaba:',
  'LBL_CRON_WINDOWS_DESC' => 'Uwaga: Utwórz plik wsadowy zawierający te linię:',
  'LBL_DATE_TIME_END' => 'Data i czas zakończenia',
  'LBL_DATE_TIME_START' => 'Data i czas rozpoczęcia',
  'LBL_DAY_OF_MONTH' => 'dzień',
  'LBL_DAY_OF_WEEK' => 'dzień tyg.',
  'LBL_EVERY' => 'Co',
  'LBL_EVERY_DAY' => 'Każdego dnia',
  'LBL_EXECUTE_TIME' => 'Czas wykonania',
  'LBL_FRI' => 'Piątek',
  'LBL_FROM' => 'Od',
  'LBL_HOUR' => 'godzin',
  'LBL_HOURS' => 'godz.',
  'LBL_HOUR_SING' => 'godzinę',
  'LBL_IN' => 'w',
  'LBL_INTERVAL' => 'Interwał',
  'LBL_JOB' => 'Zadanie',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Log zadań',
  'LBL_JOB_URL' => 'URL zadania',
  'LBL_LAST_RUN' => 'Ostatnie wykonanie',
  'LBL_LIST_EXECUTE_TIME' => 'Rozpocznie się o:',
  'LBL_LIST_JOB_INTERVAL' => 'Interwał:',
  'LBL_LIST_LIST_ORDER' => 'Harmonogramy:',
  'LBL_LIST_NAME' => 'Harmonogram:',
  'LBL_LIST_RANGE' => 'Zakres:',
  'LBL_LIST_REMOVE' => 'Usuń:',
  'LBL_LIST_STATUS' => 'Status:',
  'LBL_LIST_TITLE' => 'Lista harmonogramów:',
  'LBL_MINS' => 'min.',
  'LBL_MINUTES' => 'minut',
  'LBL_MIN_MARK' => 'minut',
  'LBL_MODULE_NAME' => 'Harmonogram zadań',
  'LBL_MODULE_NAME_SINGULAR' => 'Harmonogram Sugar',
  'LBL_MODULE_TITLE' => 'Harmonogramy',
  'LBL_MON' => 'Poniedziałek',
  'LBL_MONTH' => 'miesiąc',
  'LBL_MONTHS' => 'miesiąc',
  'LBL_NAME' => 'Nazwa zadania',
  'LBL_NEVER' => 'Nigdy',
  'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
  'LBL_NO_PHP_CLI' => 'Jeżeli twój komputer nie ma dostępu do binariów PHP, możesz użyć wget albo curl aby uruchomić twoje zadania.<br>Dla wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent http://translate.sugarcrm.com/latest/cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Tak często, jak tylko możliwe.',
  'LBL_ON_THE' => 'Co',
  'LBL_OOTB_BOUNCE' => 'Wykonaj nocną wysyłkę zwróconej poczty kampanii',
  'LBL_OOTB_CAMPAIGN' => 'Wykonaj nocną masową wysyłkę poczty kampanii',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Wyczyść kolejkę zadań',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Utwórz przyszłe przedziały czasowe',
  'LBL_OOTB_HEARTBEAT' => 'Sugar Heartbeat',
  'LBL_OOTB_IE' => 'Sprawdź skrzynki poczty Przychodzącej',
  'LBL_OOTB_PROCESS_AUTHOR_JOB' => 'Zaplanowane zadania autora procesu',
  'LBL_OOTB_PRUNE' => 'Oczyść bazę danych 1-go dnia miesiąca',
  'LBL_OOTB_PRUNE_RECORDLISTS' => 'Oczyść stare listy rekordów',
  'LBL_OOTB_REMOVE_DIAGNOSTIC_FILES' => 'Usuń pliki diagnostyczne',
  'LBL_OOTB_REMOVE_PDF_FILES' => 'Usuń tymczasowe pliki PDF',
  'LBL_OOTB_REMOVE_TMP_FILES' => 'Usuń pliki tymczasowe',
  'LBL_OOTB_REPORTS' => 'Wykonaj raport z wykonania zaplanowanych zadań',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Wyślij powiadomienia e-mail',
  'LBL_OOTB_TRACKER' => 'Oczyść tabele śledzenia',
  'LBL_OOTB_WORKFLOW' => 'Wykonaj zadania mechanizmu Workflow',
  'LBL_PERENNIAL' => 'cyklicznie',
  'LBL_PERFORMFULLFTSINDEX' => 'System indeksowania wyszukiwania pełnotekstowego',
  'LBL_PMSEENGINECRON' => 'Harmonogram procesów autora',
  'LBL_POLLMONITOREDINBOXES' => 'Sprawdź konta poczty przychodzącej',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Uruchom nocny proces odsyłania wiadomości e-mail',
  'LBL_PROCESSQUEUE' => 'Uruchom automatyczną wysyłkę raportów',
  'LBL_PROCESSWORKFLOW' => 'Wykonaj zadania mechanizmu Workflow',
  'LBL_PRUNEDATABASE' => 'Oczyść bazę danych 1-go dnia miesiąca',
  'LBL_RANGE' => 'do',
  'LBL_REFRESHJOBS' => 'Odśwież zadanie',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Rozpocznij nocne kampanie masowych wiadomości e-mail',
  'LBL_SAT' => 'Sobota',
  'LBL_SCHEDULER' => 'Harmonogram:',
  'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie harmonogramu',
  'LBL_SENDEMAILREMINDERS' => 'Wyślij powiadomienia e-mail',
  'LBL_STATUS' => 'Status',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Utwórz przyszłe przedziały czasowe',
  'LBL_SUGARJOBHEARTBEAT' => 'Sugar Heartbeat',
  'LBL_SUN' => 'Niedziela',
  'LBL_THU' => 'Czwartek',
  'LBL_TIME_FROM' => 'Aktywny od',
  'LBL_TIME_TO' => 'Aktywny do',
  'LBL_TOGGLE_ADV' => 'Pokaż opcje zaawansowane',
  'LBL_TOGGLE_BASIC' => 'Pokaż podstawowe ustawienia',
  'LBL_TRIMTRACKER' => 'Oczyść tabele śledzenia',
  'LBL_TUE' => 'Wtorek',
  'LBL_UPDATETRACKERSESSIONS' => 'Zaktualizuj tabele śledzenia sesji',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Aktualizuj tabele sesji śledzenia',
  'LBL_WARN_CURL' => 'Ostrzeżenie:',
  'LBL_WARN_CURL_TITLE' => 'Ostrzeżenie cURL:',
  'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL włączonych lub wkompilowanych w moduł PHP (--with-curl=/path/to/curl_library).  Skontaktuj się z Administratorem, aby rozwiązać ten problem.  Bez cURL nie można wykonać harmonogramu.',
  'LBL_WED' => 'Środa',
  'LNK_LIST_SCHEDULED' => 'Zaplanowane zadania',
  'LNK_LIST_SCHEDULER' => 'Harmonogramy',
  'LNK_NEW_SCHEDULER' => 'Utwórz harmonogram',
  'NTC_DELETE_CONFIRMATION' => 'Czy na pewno chcesz usunąć ten rekord?',
  'NTC_LIST_ORDER' => 'Kolejność wykonywania tego Harmonogramu pojawi się na liście rozwijalnej',
  'NTC_STATUS' => 'Ustaw status na Nieaktywny, aby usunąć ten harmonogram z listy rozwijalnej harmonogramów',
  'SOCK_GREETING' => 'Interfejs usług harmonogramów SugarCRM. <br />[ Dostępne komendy demona: start|restart|shutdown|status ]<br />Aby wyjść, wpisz &#39;quit&#39;.  Aby wyłączyc usługę, wpisz &#39;shutdown&#39;.',
);
