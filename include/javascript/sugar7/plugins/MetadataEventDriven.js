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
(function(app){app.events.on('app:init',function(){app.plugins.register('MetadataEventDriven',['field'],{triggerMetadataEvent:function(domEvent,metadataEvent){if(this.view.context){this.view.context.trigger(metadataEvent,this.model);}
if(this.view.layout){this.view.layout.trigger(metadataEvent,this.model);}}});});})(SUGAR.App);