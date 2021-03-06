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
({extendsFrom:'RecordlistView',initialize:function(options){this.contextEvents=_.extend({},this.contextEvents,{"list:editemailstemplates:fire":"openEmailsTemplates","list:exportemailstemplates:fire":"warnExportEmailsTemplates"});app.view.invokeParent(this,{type:'view',name:'recordlist',method:'initialize',args:[options]});},openEmailsTemplates:function(model){app.navigate(this.context,model,'layout/emailtemplates');},warnExportEmailsTemplates:function(model){var that=this;if(app.cache.get("show_emailtpl_export_warning")){app.alert.show('emailtpl-export-confirmation',{level:'confirmation',messages:app.lang.get('LBL_PMSE_IMPORT_EXPORT_WARNING')+"<br/><br/>"
+app.lang.get("LBL_PMSE_EXPORT_CONFIRMATION"),onConfirm:function(){app.cache.set('show_emailtpl_export_warning',false);that.exportEmailsTemplates(model);},onCancel:$.noop});}else{that.exportEmailsTemplates(model);}},exportEmailsTemplates:function(model){var url=app.api.buildURL(model.module,'etemplate',{id:model.id},{platform:app.config.platform});if(_.isEmpty(url)){app.logger.error('Unable to get the Project download uri.');return;}
app.api.fileDownload(url,{error:function(data){app.error.handleHttpError(data,{});}},{iframe:this.$el});}})