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
  'ERR_DELETE_RECORD' => 'Ha d´especificar un número de registre a eliminar.',
  'LABEL_PANEL_ASSIGNMENT' => 'Assignació',
  'LBL_ACCOUNT_ID' => 'ID Compte',
  'LBL_ACCOUNT_NAME' => 'Compte:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activitats',
  'LBL_ASSIGNED_TO_ID' => 'Assignada a ID',
  'LBL_ASSIGNED_TO_NAME' => 'Assignat a:',
  'LBL_CAMPAIGN' => 'Campanya:',
  'LBL_CAMPAIGN_LINK' => 'Enllaç de campanya',
  'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanya',
  'LBL_CLOSED_RLIS' => '# Línies d&#39;ingressos tancades',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunitats Guanyades',
  'LBL_COMMITTED' => 'Compromès',
  'LBL_COMMIT_STAGE' => 'Etapa compromesa',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactes',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Els correus electrònics de contactes relacionats',
  'LBL_CONTRACTS' => 'Contractes',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contractes',
  'LBL_CREATED_ID' => 'Creada per ID',
  'LBL_CREATED_USER' => 'Usuari Creat',
  'LBL_CURRENCIES' => 'Monedes',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_CURRENCY_ID' => 'ID Moneda',
  'LBL_CURRENCY_NAME' => 'Nom de Moneda',
  'LBL_CURRENCY_RATE' => 'Divisa',
  'LBL_CURRENCY_SYMBOL' => 'Símbol de Moneda',
  'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => '10 millors oportunitats de venda',
  'LBL_DATE_CLOSED' => 'Data de tancament:',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Data prevista de tancament',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunitats',
  'LBL_DESCRIPTION' => 'Descripció:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_DUPLICATE' => 'Possible oportunitat duplicada',
  'LBL_EDITLAYOUT' => 'Editar disseny',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID d&#39;usuari assignat',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nom d&#39;usuari assignat',
  'LBL_EXPORT_CAMPAIGN_ID' => 'Id de campanya',
  'LBL_EXPORT_CREATED_BY' => 'Creat per ID',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat per ID',
  'LBL_EXPORT_NAME' => 'Nom',
  'LBL_FILENAME' => 'Adjunt:',
  'LBL_FORECAST' => 'Incloure en previsió',
  'LBL_HELP_CONFIG_OPPS' => 'Després d&#39;iniciar aquest canvi, les notes de resum dels elements de línies d&#39;ingressos es construiran en segon terme. Quan les notes estiguin completes i disponibles, s&#39;enviarà una notificació a l&#39;adreça de correu electrònic del seu perfil. Si la instància s&#39;ha configurat per {{forecasts_module}}, Sugar també us enviarà una notificació quan els registres del {{module_name}} se sincronitzen amb el mòdul {{forecasts_module}} i estan disponibles per al nou {{forecasts_module}}. Teniu en compte que la instància s&#39;ha de configurar per enviar correus electrònics a Administració > Configuració de correu electrònic perquè s&#39;enviïn les notificacions.',
  'LBL_HELP_CONFIG_RLIS' => 'Després d&#39;iniciar aquest canvi, es crearan els registres dels elements de línies d&#39;ingressos en segon terme per a cada {{module_name}} existent. Quan els elements de línia d&#39;ingressos estiguin complets  i disponibles, s&#39;enviarà una notificació a l&#39;adreça de correu electrònic del seu perfil. Si la instància s&#39;ha configurat per {{forecasts_module}}, Sugar també us enviarà una notificació quan els registres del {{module_name}} se sincronitzen amb el mòdul {{forecasts_module}} i estan disponibles per al nou {{forecasts_module}}. Teniu en compte que la instància s&#39;ha de configurar per enviar correus electrònics a Administració > Configuració de correu electrònic perquè s&#39;enviïn les notificacions.',
  'LBL_HELP_CREATE' => 'El mòdul {{plural_module_name}} us permet fer un seguiment de vendes individuals i d&#39;elements de línia que pertanyen a aquestes vendes des del principi fins al final. Cada registre de {{module_name}} representa un encapçalament per a un grup de {{revenuelineitems_module}} a més d&#39;estar relacionat amb altres registres importants, com ara {{quotes_module}}, {{contacts_module}}, etc. Per crear un {{module_name}}: 1. Proporcioneu els valors desitjats per als camps. - Els camps marcats "Obligatori" s&#39;han de completar abans de desar. - Feu clic a "Mostra més" per exposar camps addicionals si és necessari. 2. Feu clic a "Desa" per finalitzar el nou registre i torneu a la pàgina anterior. - Seleccioneu l&#39;opció "Guarda i vegeu" per obrir el nou {{module_name}}  en vista de registre. - Seleccioneu "Guarda i crea nou" per crear un nou {{module_name}} immediatament.',
  'LBL_HELP_RECORD' => 'El mòdul {{plural_module_name}} us permet fer un seguiment de vendes individuals i d&#39;elements de línia que pertanyen a aquestes vendes des del principi fins al final. Cada registre de {{module_name}} representa un encapçalament per a un grup de {{revenuelineitems_module}} a més d&#39;estar relacionat amb altres registres importants, com ara {{quotes_module}}, {{contacts_module}}, etc. 
- Editeu els camps d&#39;aquest registre fent clic a un camp individual o amb el botó Edita.
- Vegeu o modifiqueu enllaços a altres registres als subpanells mitjançant la commutació de la subfinestra inferior esquerra a la "Vista de dades".
- Feu i vegeu comentaris d&#39;usuari i l&#39;historial de canvis del registre al {{activitystream_singular_module}} mitjançant la commutació de la subfinestra inferior esquerra al "Canal d&#39;activitat".
- Feu el seguiment d&#39;aquest favorit o marqueu-lo com a favorit amb les icones que hi han a la dreta del nom del registre.
- Hi han accions addicionals disponibles al menú desplegable d&#39;accions a la dreta del botó Edita.',
  'LBL_HELP_RECORDS' => 'El mòdul {{plural_module_name}} us permet fer un seguiment de vendes individuals i d&#39;elements de línia que pertanyen a aquestes vendes des del principi fins al final. Cada registre de {{module_name}} representa un encapçalament per a un grup de {{revenuelineitems_module}} a més d&#39;estar relacionat amb altres registres importants, com ara {{quotes_module}}, {{contacts_module}}, etc. Cada {{revenuelineitems_singular_module}} és la venta potencial d&#39;un producte i inclou dades rellevants de vendes. Cada {{revenuelineitems_singular_module}} normalment avançarà a través de diverses fases de venda fin que es marqui com a "Tancada guanyada" o "Tancada perduda". El registre {{module_name}} mostra la quantitat i data de tancament esperada de {{revenuelineitems_module}}. {{plural_module_name}} i {{revenuelineitems_module}} es poden aprofitar encara més fent servir el mòdul {{forecasts_singular_module}} de Sugar per entendre i fer previsions de tendències de venda, així com per centrar el treball i aconseguir les quotes de venda.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Històrial',
  'LBL_INVITEE' => 'Contactes',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clients Potencials',
  'LBL_LEAD_SOURCE' => 'Presa de contacte:',
  'LBL_LIST_ACCOUNT_NAME' => 'Compte',
  'LBL_LIST_AMOUNT' => 'Probable',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Quantitat',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuari Assignat',
  'LBL_LIST_DATE_CLOSED' => 'Data Tancament',
  'LBL_LIST_FORM_TITLE' => 'Llista d´Oportunitats',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Nom',
  'LBL_LIST_SALES_STAGE' => 'Etapa de Vendes',
  'LBL_MKTO_ID' => 'Marketo Lead ID',
  'LBL_MKTO_SYNC' => 'Sincronitzar a Marketo&reg;',
  'LBL_MODIFIED_ID' => 'Modificada per ID',
  'LBL_MODIFIED_NAME' => 'Modificada per Usuari',
  'LBL_MODIFIED_USER' => 'Usuari Modificat',
  'LBL_MODULE_NAME' => 'Oportunitats',
  'LBL_MODULE_NAME_SINGULAR' => 'Oportunitat',
  'LBL_MODULE_TITLE' => 'Oportunitats: Inici',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Les Meves Oportunitats Tancades',
  'LBL_NAME' => 'Nom Oportunitat',
  'LBL_NEW_FORM_TITLE' => 'Nou Compte',
  'LBL_NEXT_STEP' => 'Proper pas:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notes',
  'LBL_OPPORTUNITY' => 'Oportunitat:',
  'LBL_OPPORTUNITY_NAME' => 'Nom Oportunitat:',
  'LBL_OPPORTUNITY_ROLE' => 'Rol en oportunitat',
  'LBL_OPPORTUNITY_TYPE' => 'Tipus d&#39;oportunitat',
  'LBL_OPPS_CONFIG_ALERT' => 'Si feu clic a Confirma, suprimireu TOTES les dates de previsió i canviareu la vista d&#39;oportunitats. Si açò no és el que volíeu, feu clic a cancel·lar per tornar a la configuració anterior.',
  'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Si tots els elements de línies d&#39;ingressos estan tancats i al menys un s&#39;ha guanyat,',
  'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'la fase de vendes d&#39;oportunitats es configura com "Tancat guanyat".',
  'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Si tots els elements de la línia d&#39;ingressos estan a la fase de venda "Tancat perdut",',
  'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'la fase de vendes d&#39;oportunitats es configura com "Tancat perdut".',
  'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Si encara hi queda qualsevol línia d&#39;ingressos oberta,',
  'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'l&#39;oportunitat es marcarà amb la fase de venda menys avançada.',
  'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Definiu el camp de data de tancament esperada als registres d&#39;oportunitat resultants per què siguin les dates de tancament més primerenques o més tardanes del Elements de línies d&#39;ingressos existents.',
  'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Jerarquia d&#39;oportunitats',
  'LBL_PIPELINE_TOTAL_IS' => 'Pipeline tota és',
  'LBL_PRIMARY_QUOTE_ID' => 'Pressupost primària',
  'LBL_PROBABILITY' => 'Probabilitat (%):',
  'LBL_PRODUCTS' => 'Productes',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Elements de línies d&#39;oferta',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projectes',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projectes',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Pressuposts',
  'LBL_QUOTE_SUBPANEL_TITLE' => 'Pressupostos',
  'LBL_RAW_AMOUNT' => 'Quantitat Bruta',
  'LBL_RLI' => 'Línia d&#39;impostos articles',
  'LBL_RLI_SUBPANEL_TITLE' => 'Línia d&#39;ingressos per articles',
  'LBL_SALES_STAGE' => 'Etapa de vendes:',
  'LBL_SALES_STATUS' => 'Estat',
  'LBL_SEARCH_FORM_TITLE' => 'Recerca d´oportunitats',
  'LBL_TEAM_ID' => 'ID Equip',
  'LBL_TIMEPERIODS' => 'TimePeriods',
  'LBL_TIMEPERIOD_ID' => 'TimePeriod ID',
  'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Mostra les 10 millors oportunitat de venda a un gràfic de bombolles',
  'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Les meves oportunitats',
  'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => 'Les oportunitats del meu equip',
  'LBL_TOP_OPPORTUNITIES' => 'Les Meves Principals Oportunitats',
  'LBL_TOTAL_OPPORTUNITIES' => 'Total d´Oportunitats',
  'LBL_TOTAL_RLIS' => '# del Total de Línies d&#39;ingressos per articles',
  'LBL_TYPE' => 'Tipus:',
  'LBL_VIEW_FORM_TITLE' => 'Vista d´Oportunitats',
  'LBL_WORKSHEET' => 'Full de càlcul',
  'LNK_CREATE' => 'Crear Cas',
  'LNK_IMPORT_OPPORTUNITIES' => 'Importar Oportunitats',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunitat',
  'LNK_OPPORTUNITY_LIST' => 'Oportunitats',
  'LNK_OPPORTUNITY_REPORTS' => 'Informes de Oportunitats',
  'MSG_DUPLICATE' => 'El registre per l´oportunitat que va a crear podría ser un duplicat d´un altre registre d´oportunitat existent. Els registres d´oportunitat amb noms similars es llisten a continuació.<br>Faci clic en Guardar per continuar amb la creació d´aquesta oportunitat, o en Cancelar per tornar al mòdul sense crear l´oportunitat.',
  'NOTICE_NO_DELETE_CLOSED_RLIS' => 'No pot esborrar oportunitats que continguin línies d&#39;ingressos tancades',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Està segur de que vol eliminar aquest contacte de l´oportunitat?',
  'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Està segur de que vol eliminar aquesta oportunitat del projecte?',
  'TPL_RLI_CREATE' => 'Una oportunitat ha de tenir associada una línia d&#39;ingressos.',
  'TPL_RLI_CREATE_LINK_TEXT' => 'Crear un element de línia d&#39;ingressos.',
  'UPDATE' => 'Oportunitat - Actualitzar Moneda',
  'UPDATE_BUGFOUND_COUNT' => 'Problemes detectats:',
  'UPDATE_BUG_COUNT' => 'Problemes detectats i suposadament corregits:',
  'UPDATE_COUNT' => 'Registres actualitzats:',
  'UPDATE_CREATE_CURRENCY' => 'Creació de nova moneda:',
  'UPDATE_DOLLARAMOUNTS' => 'Actualitzar Quantitats Dólar EEUU',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualitza les quantitats en Dòlars EEUU per les oportunitats basades en el canvi actual de monedes. Aquest valor es fa servir per calcular gràfics i vistes de llistes de quantitats monétaries.',
  'UPDATE_DONE' => 'Fet',
  'UPDATE_FAIL' => 'No s´ha pogut actualitzar -',
  'UPDATE_FIX' => 'Corregir Quantitats',
  'UPDATE_FIX_TXT' => 'Intenta corregir qualsevol quantitat no vàlida creant un número decimal vàlid a partir de la quantitat actual. Abans faci una còpia de seguretat de totes les quantitats modificades en el camp de la base de dades amount_backup. Si una vegada la correcció detecta problemes, no torni a realitzar aquesta operació sense restaurar els valors previs desde la còpia de seguretat, ja que si no, tornaria a escriure al damunt de la còpia de seguretat amb noves dades no vàlides.',
  'UPDATE_INCLUDE_CLOSE' => 'Registres tancats inclòsos',
  'UPDATE_MERGE' => 'Unificar Monedes',
  'UPDATE_MERGE_TXT' => 'Unifica múltiples monedes en una única moneda. Si detecta que hi ha múltiples registres de tipus moneda per la mateixa moneda, pot unificar-les. Això també unificará les monedes per la resta de mòduls.',
  'UPDATE_NULL_VALUE' => 'La quantitat es NULL, establint-la a 0 -',
  'UPDATE_RESTORE' => 'Restaurar Quantitats',
  'UPDATE_RESTORE_COUNT' => 'Registres amb quantitats restaurades:',
  'UPDATE_RESTORE_TXT' => 'Restaura els valors de les quantitas desde la còpia de seguretat creada durant la correcció.',
  'UPDATE_VERIFY' => 'Verificar Quantitats',
  'UPDATE_VERIFY_CURAMOUNT' => 'Quantitat actual:',
  'UPDATE_VERIFY_FAIL' => 'Error de verificació de el registre:',
  'UPDATE_VERIFY_FIX' => 'La correcció donaría',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nova quantitat:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nova moneda:',
  'UPDATE_VERIFY_TXT' => 'Verificar que els valors de les quantitats en les oportunitats son números decimals vàlids amb només caràcters numérics (0-9) i decimals(.)',
  'WARNING_NO_DELETE_CLOSED_SELECTED' => 'Un o més dels registres seleccionats conté línies d&#39;ingressos tancades, i no es pot esborrar.',
);

