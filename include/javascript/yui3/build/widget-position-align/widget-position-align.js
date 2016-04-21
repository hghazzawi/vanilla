/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-position-align',function(Y,NAME){var Lang=Y.Lang,ALIGN='align',ALIGN_ON='alignOn',VISIBLE='visible',BOUNDING_BOX='boundingBox',OFFSET_WIDTH='offsetWidth',OFFSET_HEIGHT='offsetHeight',REGION='region',VIEWPORT_REGION='viewportRegion';function PositionAlign(config){}
PositionAlign.ATTRS={align:{value:null},centered:{setter:'_setAlignCenter',lazyAdd:false,value:false},alignOn:{value:[],validator:Y.Lang.isArray}};PositionAlign.TL='tl';PositionAlign.TR='tr';PositionAlign.BL='bl';PositionAlign.BR='br';PositionAlign.TC='tc';PositionAlign.RC='rc';PositionAlign.BC='bc';PositionAlign.LC='lc';PositionAlign.CC='cc';PositionAlign.prototype={initializer:function(){if(!this._posNode){Y.error('WidgetPosition needs to be added to the Widget, '+'before WidgetPositionAlign is added');}
Y.after(this._bindUIPosAlign,this,'bindUI');Y.after(this._syncUIPosAlign,this,'syncUI');},_posAlignUIHandles:null,destructor:function(){this._detachPosAlignUIHandles();},_bindUIPosAlign:function(){this.after('alignChange',this._afterAlignChange);this.after('alignOnChange',this._afterAlignOnChange);this.after('visibleChange',this._syncUIPosAlign);},_syncUIPosAlign:function(){var align=this.get(ALIGN);this._uiSetVisiblePosAlign(this.get(VISIBLE));if(align){this._uiSetAlign(align.node,align.points);}},align:function(node,points){if(arguments.length){this.set(ALIGN,{node:node,points:points});}else{this._syncUIPosAlign();}
return this;},centered:function(node){return this.align(node,[PositionAlign.CC,PositionAlign.CC]);},_setAlignCenter:function(val){if(val){this.set(ALIGN,{node:val===true?null:val,points:[PositionAlign.CC,PositionAlign.CC]});}
return val;},_uiSetAlign:function(node,points){if(!Lang.isArray(points)||points.length!==2){Y.error('align: Invalid Points Arguments');return;}
var nodeRegion=this._getRegion(node),widgetPoint,nodePoint,xy;if(!nodeRegion){return;}
widgetPoint=points[0];nodePoint=points[1];switch(nodePoint){case PositionAlign.TL:xy=[nodeRegion.left,nodeRegion.top];break;case PositionAlign.TR:xy=[nodeRegion.right,nodeRegion.top];break;case PositionAlign.BL:xy=[nodeRegion.left,nodeRegion.bottom];break;case PositionAlign.BR:xy=[nodeRegion.right,nodeRegion.bottom];break;case PositionAlign.TC:xy=[nodeRegion.left+Math.floor(nodeRegion.width / 2),nodeRegion.top];break;case PositionAlign.BC:xy=[nodeRegion.left+Math.floor(nodeRegion.width / 2),nodeRegion.bottom];break;case PositionAlign.LC:xy=[nodeRegion.left,nodeRegion.top+Math.floor(nodeRegion.height / 2)];break;case PositionAlign.RC:xy=[nodeRegion.right,nodeRegion.top+Math.floor(nodeRegion.height / 2)];break;case PositionAlign.CC:xy=[nodeRegion.left+Math.floor(nodeRegion.width / 2),nodeRegion.top+Math.floor(nodeRegion.height / 2)];break;default:break;}
if(xy){this._doAlign(widgetPoint,xy[0],xy[1]);}},_uiSetVisiblePosAlign:function(visible){if(visible){this._attachPosAlignUIHandles();}else{this._detachPosAlignUIHandles();}},_attachPosAlignUIHandles:function(){if(this._posAlignUIHandles){return;}
var bb=this.get(BOUNDING_BOX),syncAlign=Y.bind(this._syncUIPosAlign,this),handles=[];Y.Array.each(this.get(ALIGN_ON),function(o){var event=o.eventName,node=Y.one(o.node)||bb;if(event){handles.push(node.on(event,syncAlign));}});this._posAlignUIHandles=handles;},_detachPosAlignUIHandles:function(){var handles=this._posAlignUIHandles;if(handles){new Y.EventHandle(handles).detach();this._posAlignUIHandles=null;}},_doAlign:function(widgetPoint,x,y){var widgetNode=this._posNode,xy;switch(widgetPoint){case PositionAlign.TL:xy=[x,y];break;case PositionAlign.TR:xy=[x-widgetNode.get(OFFSET_WIDTH),y];break;case PositionAlign.BL:xy=[x,y-widgetNode.get(OFFSET_HEIGHT)];break;case PositionAlign.BR:xy=[x-widgetNode.get(OFFSET_WIDTH),y-widgetNode.get(OFFSET_HEIGHT)];break;case PositionAlign.TC:xy=[x-(widgetNode.get(OFFSET_WIDTH)/ 2),y];break;case PositionAlign.BC:xy=[x-(widgetNode.get(OFFSET_WIDTH)/ 2),y-widgetNode.get(OFFSET_HEIGHT)];break;case PositionAlign.LC:xy=[x,y-(widgetNode.get(OFFSET_HEIGHT)/ 2)];break;case PositionAlign.RC:xy=[x-widgetNode.get(OFFSET_WIDTH),y-(widgetNode.get(OFFSET_HEIGHT)/ 2)];break;case PositionAlign.CC:xy=[x-(widgetNode.get(OFFSET_WIDTH)/ 2),y-(widgetNode.get(OFFSET_HEIGHT)/ 2)];break;default:break;}
if(xy){this.move(xy);}},_getRegion:function(node){var nodeRegion;if(!node){nodeRegion=this._posNode.get(VIEWPORT_REGION);}else{node=Y.Node.one(node);if(node){nodeRegion=node.get(REGION);}}
return nodeRegion;},_afterAlignChange:function(e){var align=e.newVal;if(align){this._uiSetAlign(align.node,align.points);}},_afterAlignOnChange:function(e){this._detachPosAlignUIHandles();if(this.get(VISIBLE)){this._attachPosAlignUIHandles();}}};Y.WidgetPositionAlign=PositionAlign;},'3.15.0',{"requires":["widget-position"]});