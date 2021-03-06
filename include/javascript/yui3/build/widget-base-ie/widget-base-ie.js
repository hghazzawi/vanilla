/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('widget-base-ie',function(Y,NAME){var BOUNDING_BOX="boundingBox",CONTENT_BOX="contentBox",HEIGHT="height",OFFSET_HEIGHT="offsetHeight",EMPTY_STR="",IE=Y.UA.ie,heightReallyMinHeight=IE<7,bbTempExpanding=Y.Widget.getClassName("tmp","forcesize"),contentExpanded=Y.Widget.getClassName("content","expanded");Y.Widget.prototype._uiSizeCB=function(expand){var bb=this.get(BOUNDING_BOX),cb=this.get(CONTENT_BOX),borderBoxSupported=this._bbs;if(borderBoxSupported===undefined){this._bbs=borderBoxSupported=!(IE&&IE<8&&bb.get("ownerDocument").get("compatMode")!="BackCompat");}
if(borderBoxSupported){cb.toggleClass(contentExpanded,expand);}else{if(expand){if(heightReallyMinHeight){bb.addClass(bbTempExpanding);}
cb.set(OFFSET_HEIGHT,bb.get(OFFSET_HEIGHT));if(heightReallyMinHeight){bb.removeClass(bbTempExpanding);}}else{cb.setStyle(HEIGHT,EMPTY_STR);}}};},'3.15.0',{"requires":["widget-base"]});