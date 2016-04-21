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
  'LBL_MODULE_NAME' => 'Διεργασία Επιχειρησιακών Κανόνων',
  'LBL_MODULE_NAME_SINGULAR' => 'Διεργασία Επιχειρησιακών Κανόνων',
  'LBL_MODULE_TITLE' => 'Διεργασία Επιχειρησιακών Κανόνων',
  'LBL_PMSE_ALL_BUSINESS_RULES' => 'Όλες οι Διεργασίες Επιχειρησιακών Κανόνων',
  'LBL_PMSE_BUSINESS_RULES_EMPTY_WARNING' => 'Παρακαλώ επιλέξτε ένα έγκυρο *.pbr αρχείο.',
  'LBL_PMSE_BUSINESS_RULES_IMPORT_SUCCESS' => 'Η Διεργασία Προτύπου Email, εισήχθηκε με επιτυχία στο σύστημα.',
  'LBL_PMSE_BUSINESS_RULES_IMPORT_TEXT' => 'Αυτόματη δημιουργία νέας εγγραφής Διεργασίας Προτύπου Email με εισαγωγή ένα a *.pbr αρχείο από το αρχείο του συστήματός σας.',
  'LBL_PMSE_BUSINESS_RULES_SINGLE_HIT' => 'Μεμονωμένες Διεργασίες Επιχειρησιακών Κανόνων',
  'LBL_PMSE_DROP_DOWN_CHECKED' => 'Ναι',
  'LBL_PMSE_DROP_DOWN_UNCHECKED' => 'Όχι',
  'LBL_PMSE_IMPORT_BUSINESS_RULES_FAILURE' => 'Αποτυχία δημιουργίας Διεργασίας Επιχειρησιακού Κανόνα από το αρχείο',
  'LBL_PMSE_IMPORT_BUTTON_LABEL' => 'Εισαγωγή',
  'LBL_PMSE_LABEL_CONCLUSIONS' => 'Συμπεράσματα',
  'LBL_PMSE_LABEL_CONDITIONS' => 'Συνθήκες',
  'LBL_PMSE_LABEL_DELETE' => 'Διαγραφή',
  'LBL_PMSE_LABEL_DESIGN' => 'Σχεδιασμός',
  'LBL_PMSE_LABEL_EXPORT' => 'Εξαγωγή',
  'LBL_PMSE_LABEL_RETURN' => 'Επιστροφή',
  'LBL_PMSE_MESSAGE_LABEL_DEFINE_COLUMN_TYPE' => 'Παρακαλώ καθορίστε πρώτα τον τύπο της στήλης.',
  'LBL_PMSE_MESSAGE_LABEL_DELETE_ROW' => 'Θέλετε πραγματικά να διαγράψετε αυτό το σύνολο κανόνων;',
  'LBL_PMSE_MESSAGE_LABEL_EMPTY_RETURN_VALUE' => 'Το συμπέρασμα "Επιστροφή" είναι κενό',
  'LBL_PMSE_MESSAGE_LABEL_MIN_CONCLUSIONS_COLS' => 'Ο πίνακας απόφασης, πρέπει να έχει τουλάχιστον 1 στήλη συμπεράσματος',
  'LBL_PMSE_MESSAGE_LABEL_MIN_CONDITIONS_COLS' => 'Ο πίνακας απόφασης, πρέπει να έχει τουλάχιστον 1 στήλη κατάστασης',
  'LBL_PMSE_MESSAGE_LABEL_MIN_ROWS' => 'Ο πίνακας απόφασης, πρέπει να έχει τουλάχιστον 1 σειρά',
  'LBL_PMSE_MESSAGE_LABEL_MISSING_EXPRESSION_OR_OPERATOR' => 'λείπει η έκφραση ή ο φορέας',
  'LBL_PMSE_MESSAGE_LABEL_UNSUPPORTED_DATA_TYPE' => 'Μη υποστηριζόμενος τύπος δεδομένων.',
  'LBL_PMSE_MESSAGE_REQUIRED_FIELDS_BUSINESSRULES' => 'Αυτός ο Επιχειρησιακός Κανόνας δεν μπορεί να εμφανιστεί, διότι συνδέεται με μη διαθέσιμα πεδία σε αυτή την περίιπτωση.',
  'LBL_PMSE_MY_BUSINESS_RULES' => 'Οι Διεργασίες Επιχειρησιακών Κανόνων Μου',
  'LBL_PMSE_SAVE_DESIGN_BUTTON_LABEL' => 'Αποθήκευση & Σχεδιασμός',
  'LBL_PMSE_SAVE_EXIT_BUTTON_LABEL' => 'Αποθήκευση & Έξοδος',
  'LBL_PMSE_TITLE_BUSINESS_RULES_BUILDER' => 'Δημιουργός Επιχειρησιακών Κανόνων',
  'LBL_PMSE_TOOLTIP_ADD_CONCLUSION' => 'Εισαγωγή συμπεράσματος',
  'LBL_PMSE_TOOLTIP_ADD_CONDITION' => 'Προσθήκη Κατάστασης',
  'LBL_PMSE_TOOLTIP_ADD_ROW' => 'Εισαγωγή σειράς',
  'LBL_RST_CREATE_DATE' => 'Ημερομηνία Δημιουργίας Επιχειρησιακών Κανόνων',
  'LBL_RST_DEFINITION' => 'Ορισμός Επιχειρησιακών Κανόνων',
  'LBL_RST_EDITABLE' => 'Επεξεργάσιμοι Επιχειρησιακοί Κανόνες',
  'LBL_RST_FILENAME' => 'Όνομα Αρχείου Επιχειρησιακών Κανόνων',
  'LBL_RST_MODULE' => 'Ενότητα Στόχου',
  'LBL_RST_SOURCE' => 'Πηγή Επιχειρησιακών Κανόνων',
  'LBL_RST_SOURCE_DEFINITION' => 'Ορισμός Επιχειρησιακών Κανόνων',
  'LBL_RST_TYPE' => 'Τύπος Επιχειρησιακών Κανόνων',
  'LBL_RST_UID' => 'Ταυτότητα Επιχειρησιακών Κανόνων',
  'LBL_RST_UPDATE_DATE' => 'Ημερομηνία Ενημέρωσης Επιχειρησιακών Κανόνων',
  'LNK_LIST' => 'Προβολή Διεργασιών Επιχειρησιακών Κανόνων',
);

