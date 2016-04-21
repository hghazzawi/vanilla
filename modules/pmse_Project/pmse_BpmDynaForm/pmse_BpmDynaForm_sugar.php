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

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN pmse_BpmDynaForm
 */
class pmse_BpmDynaForm_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'pmse_Project/pmse_BpmDynaForm';
	var $object_name = 'pmse_BpmDynaForm';
	var $table_name = 'pmse_bpm_dynamic_forms';
	var $importable = false;
        var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;
		var $activities;
		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;
    var $dyn_uid;
    var $pro_id;
    var $prj_id;
    var $dyn_module;
    var $dyn_view_defs;

	/**
	 * This is a depreciated method, please start using __construct() as this method will be removed in a future version
     *
     * @see __construct
     * @depreciated
	 */
	function pmse_BpmDynaForm_sugar(){
		self::__construct();
	}

	public function __construct(){
		parent::__construct();
	}
}
