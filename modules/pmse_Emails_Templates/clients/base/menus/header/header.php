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


$moduleName = 'pmse_Emails_Templates';
$viewdefs[$moduleName]['base']['menu']['header'] = array(
    array(
        'route' => "#$moduleName/create",
        'label' => 'LNK_NEW_PMSE_EMAILS_TEMPLATES',
        'acl_action' => 'create',
        'acl_module' => $moduleName,
        'icon' => 'fa-plus',
    ),
    array(
        'route' => "#$moduleName",
        'label' => 'LNK_LIST',
        'acl_action' => 'list',
        'acl_module' => $moduleName,
        'icon' => 'fa-bars',
    ),
    array(
        'route'=>'#'.$moduleName.'/layout/emailtemplates-import',
        'label' =>'LNK_IMPORT_PMSE_EMAILS_TEMPLATES',
        'acl_action'=>'import',
        'acl_module'=>$moduleName,
        'icon' => 'fa-arrow-circle-o-up',
    ),
);
