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
({initialize:function(options){var acls=app.user.getAcls().Forecasts,hasAccess=(!_.has(acls,'access')||acls.access=='yes'),isSysAdmin=(app.user.get('type')=='admin'),isDev=(!_.has(acls,'developer')||acls.developer=='yes');if(hasAccess&&(isSysAdmin||isDev)){app.view.Layout.prototype.initialize.call(this,options);app.view.Layout.prototype.loadData.call(this);}else{this.codeBlockForecasts('LBL_FORECASTS_NO_ACCESS_TO_CFG_TITLE','LBL_FORECASTS_NO_ACCESS_TO_CFG_MSG');}},codeBlockForecasts:function(title,msg){var alert=app.alert.show('no_access_to_forecasts',{level:'error',title:app.lang.get(title,'pmse_Inbox')+':',messages:[app.lang.get(msg,'pmse_Inbox')]});var $close=alert.getCloseSelector();$close.on('click',function(){$close.off();app.router.navigate('#Home',{trigger:true});});app.accessibility.run($close,'click');},loadData:function(){}})