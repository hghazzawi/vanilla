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
(function(app){var _sum=function(array){return _.reduce(array,function(memo,num){return memo+num;},0);};var _mapClassesToPixels={'xxsmall':21,'xsmall':42,'small':68,'medium':110,'large':178,'xlarge':288,'xxlarge':466};app.events.on('app:init',function(){app.plugins.register('ResizableColumns',['view'],{_listResizableColumnSelector:'thead tr:first-child th[data-fieldname]',_makeColumnResizable:function(){if(this.disposed){return;}
var proto=Object.getPrototypeOf(this);var getMinTableWidth;if(_.isFunction(proto.getMinTableWidth)){getMinTableWidth=_.bind(proto.getMinTableWidth,this);}
var self=this;var $table=this.$('table');$table.resizableColumns({usePixels:true,selector:this._listResizableColumnSelector,minWidth:1,store:null,restore:function(event,columns){if(self.disposed){return;}
var resizableColumns=$table.data('resizableColumns');if(columns){resizableColumns._expectedWidths=columns;}else{columns=resizableColumns._expectedWidths;}
var expectedWidth=_sum(columns);var availableWidth=resizableColumns.options.getMinTableWidth()-resizableColumns._leftoverWidth;availableWidth=availableWidth-columns.length;var rate=expectedWidth / availableWidth;if(rate<1){columns=_.map(columns,function(col){return parseInt(col / rate,10);});}
var i=0;resizableColumns.$tableHeaders.each(function(index,el){var $el,width;$el=$(el);width=columns[i++];if($el.attr('data-noresize')==null&&width){return resizableColumns.setWidth($el[0],width);}});resizableColumns.syncHandleWidths();},getMinTableWidth:!_.isUndefined(getMinTableWidth)?getMinTableWidth:function(){return $table.parent().width();}});var cachedSizes=this.getCacheWidths();if(_.isEmpty(cachedSizes)){cachedSizes=_.map(this._fields.visible,function(field){var width=field.expectedWidth||'medium';return _mapClassesToPixels[width]||width;});}
$table.trigger('column:resize:restore',[cachedSizes]);$(window).resize();$table.on('column:resize:save',_.bind(function(event,columns){this.trigger('list:column:resize:save',columns);},this));},_unbindResizableColumns:function(){if(this.disposed){return;}
var $table=this.$('table');$table.off('column:resize:save');$table.resizableColumns('destroy');},onAttach:function(component,plugin){this.before('render',this._unbindResizableColumns);this.on('render',_.debounce(this._makeColumnResizable,100));},onDetach:function(component,plugin){this._unbindResizableColumns();}});});})(SUGAR.App);