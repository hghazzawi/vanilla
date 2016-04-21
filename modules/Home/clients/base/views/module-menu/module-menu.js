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
({extendsFrom:'ModuleMenuView',dashboards:null,recentlyViewed:null,_defaultSettings:{dashboards:20,favorites:3,recently_viewed:10,recently_viewed_toggle:3},TOGGLE_RECENTS_KEY:'more',_recentToggleKey:null,initialize:function(options){this._super('initialize',[options]);this.events=_.extend({},this.events,{'click [data-toggle="recently-viewed"]':'handleToggleRecentlyViewed'});this._initCollections();this._initLegacyDashboards();this.meta.last_state={id:'recent'};this._recentToggleKey=app.user.lastState.key(this.TOGGLE_RECENTS_KEY,this);},_initCollections:function(){this.dashboards=app.data.createBeanCollection('Dashboards');this.recentlyViewed=app.data.createMixedBeanCollection();return this;},_initLegacyDashboards:function(){if(app.config.enableLegacyDashboards&&app.config.enableLegacyDashboards===true){this.dashboardBwcLink=app.bwc.buildRoute(this.module,null,'bwc_dashboard');}
return this;},_renderHtml:function(){this._super('_renderHtml');this.$el.attr('title',app.lang.get('LBL_TABGROUP_HOME',this.module));this.$el.addClass('home btn-group');},populateMenu:function(){var pattern=/^(LBL|TPL|NTC|MSG)_(_|[a-zA-Z0-9])*$/;this.$('.active').removeClass('active');this.dashboards.fetch({'limit':this._settings['dashboards'],'showAlerts':false,'success':_.bind(function(data){_.each(data.models,function(model){if(pattern.test(model.get('name'))){model.set('name',app.lang.get(model.get('name'),model.module));}
model.module='Home';});this._renderPartial('dashboards',{collection:this.dashboards,active:this.context.get('module')==='Home'&&this.context.get('model')});},this),'endpoint':function(method,model,options,callbacks){app.api.records(method,'Dashboards',model.attributes,options.params,callbacks);}});this.populateRecentlyViewed(false);},populateRecentlyViewed:function(focusToggle){var visible=app.user.lastState.get(this._recentToggleKey),threshold=this._settings['recently_viewed_toggle'],limit=this._settings[visible?'recently_viewed':'recently_viewed_toggle'];if(limit<=0){return;}
var modules=this._getModulesForRecentlyViewed();if(_.isEmpty(modules)){return;}
this.recentlyViewed.fetch({'showAlerts':false,'fields':['id','name'],'date':'-7 DAY','limit':limit,'module_list':modules,'success':_.bind(function(data){this._renderPartial('recently-viewed',{collection:this.recentlyViewed,open:!visible,showRecentToggle:data.models.length>threshold||data.next_offset!==-1});if(focusToggle&&this.isOpen()){this.$('[data-toggle="recently-viewed"]').focus();}},this),'endpoint':function(method,model,options,callbacks){var url=app.api.buildURL('recent','read',options.attributes,options.params);app.api.call(method,url,null,callbacks,options.params);}});return;},_getModulesForRecentlyViewed:function(){var modules=app.metadata.getModuleNames({filter:'visible',access:'list'});modules=_.filter(modules,function(module){var view=app.metadata.getView(module,'module-menu');return!view||!view.settings||view.settings.recently_viewed>0;});return modules;},handleToggleRecentlyViewed:function(event){app.user.lastState.set(this._recentToggleKey,Number(!app.user.lastState.get(this._recentToggleKey)));this.populateRecentlyViewed(true);event.stopPropagation();}})