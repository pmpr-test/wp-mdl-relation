/*! For license information please see index.KIukujYwO.js.LICENSE.txt */
(()=>{var t={568:(t,e,i)=>{"use strict";i.r(e)},53:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(592)],void 0===(o="function"==typeof(n=function(t){return t.ui.keyCode={BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}})?n.apply(e,s):n)||(t.exports=o)}()},822:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(592)],n=function(t){return function(){var e,i=Math.max,n=Math.abs,s=/left|center|right/,o=/top|center|bottom/,a=/[\+\-]\d+(\.[\d]+)?%?/,r=/^\w+/,l=/%$/,u=t.fn.position;function h(t,e,i){return[parseFloat(t[0])*(l.test(t[0])?e/100:1),parseFloat(t[1])*(l.test(t[1])?i/100:1)]}function c(e,i){return parseInt(t.css(e,i),10)||0}function d(t){return null!=t&&t===t.window}function f(t){var e=t[0];return 9===e.nodeType?{width:t.width(),height:t.height(),offset:{top:0,left:0}}:d(e)?{width:t.width(),height:t.height(),offset:{top:t.scrollTop(),left:t.scrollLeft()}}:e.preventDefault?{width:0,height:0,offset:{top:e.pageY,left:e.pageX}}:{width:t.outerWidth(),height:t.outerHeight(),offset:t.offset()}}t.position={scrollbarWidth:function(){if(void 0!==e)return e;var i,n,s=t("<div style='display:block;position:absolute;width:200px;height:200px;overflow:hidden;'><div style='height:300px;width:auto;'></div></div>"),o=s.children()[0];return t("body").append(s),i=o.offsetWidth,s.css("overflow","scroll"),i===(n=o.offsetWidth)&&(n=s[0].clientWidth),s.remove(),e=i-n},getScrollInfo:function(e){var i=e.isWindow||e.isDocument?"":e.element.css("overflow-x"),n=e.isWindow||e.isDocument?"":e.element.css("overflow-y"),s="scroll"===i||"auto"===i&&e.width<e.element[0].scrollWidth;return{width:"scroll"===n||"auto"===n&&e.height<e.element[0].scrollHeight?t.position.scrollbarWidth():0,height:s?t.position.scrollbarWidth():0}},getWithinInfo:function(e){var i=t(e||window),n=d(i[0]),s=!!i[0]&&9===i[0].nodeType;return{element:i,isWindow:n,isDocument:s,offset:!n&&!s?t(e).offset():{left:0,top:0},scrollLeft:i.scrollLeft(),scrollTop:i.scrollTop(),width:i.outerWidth(),height:i.outerHeight()}}},t.fn.position=function(e){if(!e||!e.of)return u.apply(this,arguments);var l,d,p,m,g,v,_="string"==typeof(e=t.extend({},e)).of?t(document).find(e.of):t(e.of),y=t.position.getWithinInfo(e.within),b=t.position.getScrollInfo(y),w=(e.collision||"flip").split(" "),x={};return v=f(_),_[0].preventDefault&&(e.at="left top"),d=v.width,p=v.height,m=v.offset,g=t.extend({},m),t.each(["my","at"],(function(){var t,i,n=(e[this]||"").split(" ");1===n.length&&(n=s.test(n[0])?n.concat(["center"]):o.test(n[0])?["center"].concat(n):["center","center"]),n[0]=s.test(n[0])?n[0]:"center",n[1]=o.test(n[1])?n[1]:"center",t=a.exec(n[0]),i=a.exec(n[1]),x[this]=[t?t[0]:0,i?i[0]:0],e[this]=[r.exec(n[0])[0],r.exec(n[1])[0]]})),1===w.length&&(w[1]=w[0]),"right"===e.at[0]?g.left+=d:"center"===e.at[0]&&(g.left+=d/2),"bottom"===e.at[1]?g.top+=p:"center"===e.at[1]&&(g.top+=p/2),l=h(x.at,d,p),g.left+=l[0],g.top+=l[1],this.each((function(){var s,o,a=t(this),r=a.outerWidth(),u=a.outerHeight(),f=c(this,"marginLeft"),v=c(this,"marginTop"),C=r+f+c(this,"marginRight")+b.width,E=u+v+c(this,"marginBottom")+b.height,k=t.extend({},g),T=h(x.my,a.outerWidth(),a.outerHeight());"right"===e.my[0]?k.left-=r:"center"===e.my[0]&&(k.left-=r/2),"bottom"===e.my[1]?k.top-=u:"center"===e.my[1]&&(k.top-=u/2),k.left+=T[0],k.top+=T[1],s={marginLeft:f,marginTop:v},t.each(["left","top"],(function(i,n){t.ui.position[w[i]]&&t.ui.position[w[i]][n](k,{targetWidth:d,targetHeight:p,elemWidth:r,elemHeight:u,collisionPosition:s,collisionWidth:C,collisionHeight:E,offset:[l[0]+T[0],l[1]+T[1]],my:e.my,at:e.at,within:y,elem:a})})),e.using&&(o=function(t){var s=m.left-k.left,o=s+d-r,l=m.top-k.top,h=l+p-u,c={target:{element:_,left:m.left,top:m.top,width:d,height:p},element:{element:a,left:k.left,top:k.top,width:r,height:u},horizontal:o<0?"left":s>0?"right":"center",vertical:h<0?"top":l>0?"bottom":"middle"};d<r&&n(s+o)<d&&(c.horizontal="center"),p<u&&n(l+h)<p&&(c.vertical="middle"),i(n(s),n(o))>i(n(l),n(h))?c.important="horizontal":c.important="vertical",e.using.call(this,t,c)}),a.offset(t.extend(k,{using:o}))}))},t.ui.position={fit:{left:function(t,e){var n,s=e.within,o=s.isWindow?s.scrollLeft:s.offset.left,a=s.width,r=t.left-e.collisionPosition.marginLeft,l=o-r,u=r+e.collisionWidth-a-o;e.collisionWidth>a?l>0&&u<=0?(n=t.left+l+e.collisionWidth-a-o,t.left+=l-n):t.left=u>0&&l<=0?o:l>u?o+a-e.collisionWidth:o:l>0?t.left+=l:u>0?t.left-=u:t.left=i(t.left-r,t.left)},top:function(t,e){var n,s=e.within,o=s.isWindow?s.scrollTop:s.offset.top,a=e.within.height,r=t.top-e.collisionPosition.marginTop,l=o-r,u=r+e.collisionHeight-a-o;e.collisionHeight>a?l>0&&u<=0?(n=t.top+l+e.collisionHeight-a-o,t.top+=l-n):t.top=u>0&&l<=0?o:l>u?o+a-e.collisionHeight:o:l>0?t.top+=l:u>0?t.top-=u:t.top=i(t.top-r,t.top)}},flip:{left:function(t,e){var i,s,o=e.within,a=o.offset.left+o.scrollLeft,r=o.width,l=o.isWindow?o.scrollLeft:o.offset.left,u=t.left-e.collisionPosition.marginLeft,h=u-l,c=u+e.collisionWidth-r-l,d="left"===e.my[0]?-e.elemWidth:"right"===e.my[0]?e.elemWidth:0,f="left"===e.at[0]?e.targetWidth:"right"===e.at[0]?-e.targetWidth:0,p=-2*e.offset[0];h<0?((i=t.left+d+f+p+e.collisionWidth-r-a)<0||i<n(h))&&(t.left+=d+f+p):c>0&&((s=t.left-e.collisionPosition.marginLeft+d+f+p-l)>0||n(s)<c)&&(t.left+=d+f+p)},top:function(t,e){var i,s,o=e.within,a=o.offset.top+o.scrollTop,r=o.height,l=o.isWindow?o.scrollTop:o.offset.top,u=t.top-e.collisionPosition.marginTop,h=u-l,c=u+e.collisionHeight-r-l,d="top"===e.my[1]?-e.elemHeight:"bottom"===e.my[1]?e.elemHeight:0,f="top"===e.at[1]?e.targetHeight:"bottom"===e.at[1]?-e.targetHeight:0,p=-2*e.offset[1];h<0?((s=t.top+d+f+p+e.collisionHeight-r-a)<0||s<n(h))&&(t.top+=d+f+p):c>0&&((i=t.top-e.collisionPosition.marginTop+d+f+p-l)>0||n(i)<c)&&(t.top+=d+f+p)}},flipfit:{left:function(){t.ui.position.flip.left.apply(this,arguments),t.ui.position.fit.left.apply(this,arguments)},top:function(){t.ui.position.flip.top.apply(this,arguments),t.ui.position.fit.top.apply(this,arguments)}}}}(),t.ui.position},void 0===(o="function"==typeof n?n.apply(e,s):n)||(t.exports=o)}()},575:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(592)],void 0===(o="function"==typeof(n=function(t){return t.ui.safeActiveElement=function(t){var e;try{e=t.activeElement}catch(i){e=t.body}return e||(e=t.body),e.nodeName||(e=t.body),e}})?n.apply(e,s):n)||(t.exports=o)}()},138:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(592)],void 0===(o="function"==typeof(n=function(t){return t.fn.extend({uniqueId:(e=0,function(){return this.each((function(){this.id||(this.id="ui-id-"+ ++e)}))}),removeUniqueId:function(){return this.each((function(){/^ui-id-\d+$/.test(this.id)&&t(this).removeAttr("id")}))}});var e})?n.apply(e,s):n)||(t.exports=o)}()},592:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311)],void 0===(o="function"==typeof(n=function(t){return t.ui=t.ui||{},t.ui.version="1.13.2"})?n.apply(e,s):n)||(t.exports=o)}()},891:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(592)],n=function(t){var e=0,i=Array.prototype.hasOwnProperty,n=Array.prototype.slice;return t.cleanData=function(e){return function(i){var n,s,o;for(o=0;null!=(s=i[o]);o++)(n=t._data(s,"events"))&&n.remove&&t(s).triggerHandler("remove");e(i)}}(t.cleanData),t.widget=function(e,i,n){var s,o,a,r={},l=e.split(".")[0],u=l+"-"+(e=e.split(".")[1]);return n||(n=i,i=t.Widget),Array.isArray(n)&&(n=t.extend.apply(null,[{}].concat(n))),t.expr.pseudos[u.toLowerCase()]=function(e){return!!t.data(e,u)},t[l]=t[l]||{},s=t[l][e],o=t[l][e]=function(t,e){if(!this||!this._createWidget)return new o(t,e);arguments.length&&this._createWidget(t,e)},t.extend(o,s,{version:n.version,_proto:t.extend({},n),_childConstructors:[]}),(a=new i).options=t.widget.extend({},a.options),t.each(n,(function(t,e){r[t]="function"==typeof e?function(){function n(){return i.prototype[t].apply(this,arguments)}function s(e){return i.prototype[t].apply(this,e)}return function(){var t,i=this._super,o=this._superApply;return this._super=n,this._superApply=s,t=e.apply(this,arguments),this._super=i,this._superApply=o,t}}():e})),o.prototype=t.widget.extend(a,{widgetEventPrefix:s&&a.widgetEventPrefix||e},r,{constructor:o,namespace:l,widgetName:e,widgetFullName:u}),s?(t.each(s._childConstructors,(function(e,i){var n=i.prototype;t.widget(n.namespace+"."+n.widgetName,o,i._proto)})),delete s._childConstructors):i._childConstructors.push(o),t.widget.bridge(e,o),o},t.widget.extend=function(e){for(var s,o,a=n.call(arguments,1),r=0,l=a.length;r<l;r++)for(s in a[r])o=a[r][s],i.call(a[r],s)&&void 0!==o&&(t.isPlainObject(o)?e[s]=t.isPlainObject(e[s])?t.widget.extend({},e[s],o):t.widget.extend({},o):e[s]=o);return e},t.widget.bridge=function(e,i){var s=i.prototype.widgetFullName||e;t.fn[e]=function(o){var a="string"==typeof o,r=n.call(arguments,1),l=this;return a?this.length||"instance"!==o?this.each((function(){var i,n=t.data(this,s);return"instance"===o?(l=n,!1):n?"function"!=typeof n[o]||"_"===o.charAt(0)?t.error("no such method '"+o+"' for "+e+" widget instance"):(i=n[o].apply(n,r))!==n&&void 0!==i?(l=i&&i.jquery?l.pushStack(i.get()):i,!1):void 0:t.error("cannot call methods on "+e+" prior to initialization; attempted to call method '"+o+"'")})):l=void 0:(r.length&&(o=t.widget.extend.apply(null,[o].concat(r))),this.each((function(){var e=t.data(this,s);e?(e.option(o||{}),e._init&&e._init()):t.data(this,s,new i(o,this))}))),l}},t.Widget=function(){},t.Widget._childConstructors=[],t.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{classes:{},disabled:!1,create:null},_createWidget:function(i,n){n=t(n||this.defaultElement||this)[0],this.element=t(n),this.uuid=e++,this.eventNamespace="."+this.widgetName+this.uuid,this.bindings=t(),this.hoverable=t(),this.focusable=t(),this.classesElementLookup={},n!==this&&(t.data(n,this.widgetFullName,this),this._on(!0,this.element,{remove:function(t){t.target===n&&this.destroy()}}),this.document=t(n.style?n.ownerDocument:n.document||n),this.window=t(this.document[0].defaultView||this.document[0].parentWindow)),this.options=t.widget.extend({},this.options,this._getCreateOptions(),i),this._create(),this.options.disabled&&this._setOptionDisabled(this.options.disabled),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:function(){return{}},_getCreateEventData:t.noop,_create:t.noop,_init:t.noop,destroy:function(){var e=this;this._destroy(),t.each(this.classesElementLookup,(function(t,i){e._removeClass(i,t)})),this.element.off(this.eventNamespace).removeData(this.widgetFullName),this.widget().off(this.eventNamespace).removeAttr("aria-disabled"),this.bindings.off(this.eventNamespace)},_destroy:t.noop,widget:function(){return this.element},option:function(e,i){var n,s,o,a=e;if(0===arguments.length)return t.widget.extend({},this.options);if("string"==typeof e)if(a={},n=e.split("."),e=n.shift(),n.length){for(s=a[e]=t.widget.extend({},this.options[e]),o=0;o<n.length-1;o++)s[n[o]]=s[n[o]]||{},s=s[n[o]];if(e=n.pop(),1===arguments.length)return void 0===s[e]?null:s[e];s[e]=i}else{if(1===arguments.length)return void 0===this.options[e]?null:this.options[e];a[e]=i}return this._setOptions(a),this},_setOptions:function(t){var e;for(e in t)this._setOption(e,t[e]);return this},_setOption:function(t,e){return"classes"===t&&this._setOptionClasses(e),this.options[t]=e,"disabled"===t&&this._setOptionDisabled(e),this},_setOptionClasses:function(e){var i,n,s;for(i in e)s=this.classesElementLookup[i],e[i]!==this.options.classes[i]&&s&&s.length&&(n=t(s.get()),this._removeClass(s,i),n.addClass(this._classes({element:n,keys:i,classes:e,add:!0})))},_setOptionDisabled:function(t){this._toggleClass(this.widget(),this.widgetFullName+"-disabled",null,!!t),t&&(this._removeClass(this.hoverable,null,"ui-state-hover"),this._removeClass(this.focusable,null,"ui-state-focus"))},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_classes:function(e){var i=[],n=this;function s(){var i=[];e.element.each((function(e,s){t.map(n.classesElementLookup,(function(t){return t})).some((function(t){return t.is(s)}))||i.push(s)})),n._on(t(i),{remove:"_untrackClassesElement"})}function o(o,a){var r,l;for(l=0;l<o.length;l++)r=n.classesElementLookup[o[l]]||t(),e.add?(s(),r=t(t.uniqueSort(r.get().concat(e.element.get())))):r=t(r.not(e.element).get()),n.classesElementLookup[o[l]]=r,i.push(o[l]),a&&e.classes[o[l]]&&i.push(e.classes[o[l]])}return(e=t.extend({element:this.element,classes:this.options.classes||{}},e)).keys&&o(e.keys.match(/\S+/g)||[],!0),e.extra&&o(e.extra.match(/\S+/g)||[]),i.join(" ")},_untrackClassesElement:function(e){var i=this;t.each(i.classesElementLookup,(function(n,s){-1!==t.inArray(e.target,s)&&(i.classesElementLookup[n]=t(s.not(e.target).get()))})),this._off(t(e.target))},_removeClass:function(t,e,i){return this._toggleClass(t,e,i,!1)},_addClass:function(t,e,i){return this._toggleClass(t,e,i,!0)},_toggleClass:function(t,e,i,n){n="boolean"==typeof n?n:i;var s="string"==typeof t||null===t,o={extra:s?e:i,keys:s?t:e,element:s?this.element:t,add:n};return o.element.toggleClass(this._classes(o),n),this},_on:function(e,i,n){var s,o=this;"boolean"!=typeof e&&(n=i,i=e,e=!1),n?(i=s=t(i),this.bindings=this.bindings.add(i)):(n=i,i=this.element,s=this.widget()),t.each(n,(function(n,a){function r(){if(e||!0!==o.options.disabled&&!t(this).hasClass("ui-state-disabled"))return("string"==typeof a?o[a]:a).apply(o,arguments)}"string"!=typeof a&&(r.guid=a.guid=a.guid||r.guid||t.guid++);var l=n.match(/^([\w:-]*)\s*(.*)$/),u=l[1]+o.eventNamespace,h=l[2];h?s.on(u,h,r):i.on(u,r)}))},_off:function(e,i){i=(i||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.off(i),this.bindings=t(this.bindings.not(e).get()),this.focusable=t(this.focusable.not(e).get()),this.hoverable=t(this.hoverable.not(e).get())},_delay:function(t,e){function i(){return("string"==typeof t?n[t]:t).apply(n,arguments)}var n=this;return setTimeout(i,e||0)},_hoverable:function(e){this.hoverable=this.hoverable.add(e),this._on(e,{mouseenter:function(e){this._addClass(t(e.currentTarget),null,"ui-state-hover")},mouseleave:function(e){this._removeClass(t(e.currentTarget),null,"ui-state-hover")}})},_focusable:function(e){this.focusable=this.focusable.add(e),this._on(e,{focusin:function(e){this._addClass(t(e.currentTarget),null,"ui-state-focus")},focusout:function(e){this._removeClass(t(e.currentTarget),null,"ui-state-focus")}})},_trigger:function(e,i,n){var s,o,a=this.options[e];if(n=n||{},(i=t.Event(i)).type=(e===this.widgetEventPrefix?e:this.widgetEventPrefix+e).toLowerCase(),i.target=this.element[0],o=i.originalEvent)for(s in o)s in i||(i[s]=o[s]);return this.element.trigger(i,n),!("function"==typeof a&&!1===a.apply(this.element[0],[i].concat(n))||i.isDefaultPrevented())}},t.each({show:"fadeIn",hide:"fadeOut"},(function(e,i){t.Widget.prototype["_"+e]=function(n,s,o){var a;"string"==typeof s&&(s={effect:s});var r=s?!0===s||"number"==typeof s?i:s.effect||i:e;"number"==typeof(s=s||{})?s={duration:s}:!0===s&&(s={}),a=!t.isEmptyObject(s),s.complete=o,s.delay&&n.delay(s.delay),a&&t.effects&&t.effects.effect[r]?n[e](s):r!==e&&n[r]?n[r](s.duration,s.easing,o):n.queue((function(i){t(this)[e](),o&&o.call(n[0]),i()}))}})),t.widget},void 0===(o="function"==typeof n?n.apply(e,s):n)||(t.exports=o)}()},993:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(851),i(53),i(822),i(575),i(592),i(891)],n=function(t){return t.widget("ui.autocomplete",{version:"1.13.2",defaultElement:"<input>",options:{appendTo:null,autoFocus:!1,delay:300,minLength:1,position:{my:"left top",at:"left bottom",collision:"none"},source:null,change:null,close:null,focus:null,open:null,response:null,search:null,select:null},requestIndex:0,pending:0,liveRegionTimer:null,_create:function(){var e,i,n,s=this.element[0].nodeName.toLowerCase(),o="textarea"===s,a="input"===s;this.isMultiLine=o||!a&&this._isContentEditable(this.element),this.valueMethod=this.element[o||a?"val":"text"],this.isNewMenu=!0,this._addClass("ui-autocomplete-input"),this.element.attr("autocomplete","off"),this._on(this.element,{keydown:function(s){if(this.element.prop("readOnly"))return e=!0,n=!0,void(i=!0);e=!1,n=!1,i=!1;var o=t.ui.keyCode;switch(s.keyCode){case o.PAGE_UP:e=!0,this._move("previousPage",s);break;case o.PAGE_DOWN:e=!0,this._move("nextPage",s);break;case o.UP:e=!0,this._keyEvent("previous",s);break;case o.DOWN:e=!0,this._keyEvent("next",s);break;case o.ENTER:this.menu.active&&(e=!0,s.preventDefault(),this.menu.select(s));break;case o.TAB:this.menu.active&&this.menu.select(s);break;case o.ESCAPE:this.menu.element.is(":visible")&&(this.isMultiLine||this._value(this.term),this.close(s),s.preventDefault());break;default:i=!0,this._searchTimeout(s)}},keypress:function(n){if(e)return e=!1,void(this.isMultiLine&&!this.menu.element.is(":visible")||n.preventDefault());if(!i){var s=t.ui.keyCode;switch(n.keyCode){case s.PAGE_UP:this._move("previousPage",n);break;case s.PAGE_DOWN:this._move("nextPage",n);break;case s.UP:this._keyEvent("previous",n);break;case s.DOWN:this._keyEvent("next",n)}}},input:function(t){if(n)return n=!1,void t.preventDefault();this._searchTimeout(t)},focus:function(){this.selectedItem=null,this.previous=this._value()},blur:function(t){clearTimeout(this.searching),this.close(t),this._change(t)}}),this._initSource(),this.menu=t("<ul>").appendTo(this._appendTo()).menu({role:null}).hide().attr({unselectable:"on"}).menu("instance"),this._addClass(this.menu.element,"ui-autocomplete","ui-front"),this._on(this.menu.element,{mousedown:function(t){t.preventDefault()},menufocus:function(e,i){var n,s;if(this.isNewMenu&&(this.isNewMenu=!1,e.originalEvent&&/^mouse/.test(e.originalEvent.type)))return this.menu.blur(),void this.document.one("mousemove",(function(){t(e.target).trigger(e.originalEvent)}));s=i.item.data("ui-autocomplete-item"),!1!==this._trigger("focus",e,{item:s})&&e.originalEvent&&/^key/.test(e.originalEvent.type)&&this._value(s.value),(n=i.item.attr("aria-label")||s.value)&&String.prototype.trim.call(n).length&&(clearTimeout(this.liveRegionTimer),this.liveRegionTimer=this._delay((function(){this.liveRegion.html(t("<div>").text(n))}),100))},menuselect:function(e,i){var n=i.item.data("ui-autocomplete-item"),s=this.previous;this.element[0]!==t.ui.safeActiveElement(this.document[0])&&(this.element.trigger("focus"),this.previous=s,this._delay((function(){this.previous=s,this.selectedItem=n}))),!1!==this._trigger("select",e,{item:n})&&this._value(n.value),this.term=this._value(),this.close(e),this.selectedItem=n}}),this.liveRegion=t("<div>",{role:"status","aria-live":"assertive","aria-relevant":"additions"}).appendTo(this.document[0].body),this._addClass(this.liveRegion,null,"ui-helper-hidden-accessible"),this._on(this.window,{beforeunload:function(){this.element.removeAttr("autocomplete")}})},_destroy:function(){clearTimeout(this.searching),this.element.removeAttr("autocomplete"),this.menu.element.remove(),this.liveRegion.remove()},_setOption:function(t,e){this._super(t,e),"source"===t&&this._initSource(),"appendTo"===t&&this.menu.element.appendTo(this._appendTo()),"disabled"===t&&e&&this.xhr&&this.xhr.abort()},_isEventTargetInWidget:function(e){var i=this.menu.element[0];return e.target===this.element[0]||e.target===i||t.contains(i,e.target)},_closeOnClickOutside:function(t){this._isEventTargetInWidget(t)||this.close()},_appendTo:function(){var e=this.options.appendTo;return e&&(e=e.jquery||e.nodeType?t(e):this.document.find(e).eq(0)),e&&e[0]||(e=this.element.closest(".ui-front, dialog")),e.length||(e=this.document[0].body),e},_initSource:function(){var e,i,n=this;Array.isArray(this.options.source)?(e=this.options.source,this.source=function(i,n){n(t.ui.autocomplete.filter(e,i.term))}):"string"==typeof this.options.source?(i=this.options.source,this.source=function(e,s){n.xhr&&n.xhr.abort(),n.xhr=t.ajax({url:i,data:e,dataType:"json",success:function(t){s(t)},error:function(){s([])}})}):this.source=this.options.source},_searchTimeout:function(t){clearTimeout(this.searching),this.searching=this._delay((function(){var e=this.term===this._value(),i=this.menu.element.is(":visible"),n=t.altKey||t.ctrlKey||t.metaKey||t.shiftKey;e&&(!e||i||n)||(this.selectedItem=null,this.search(null,t))}),this.options.delay)},search:function(t,e){return t=null!=t?t:this._value(),this.term=this._value(),t.length<this.options.minLength?this.close(e):!1!==this._trigger("search",e)?this._search(t):void 0},_search:function(t){this.pending++,this._addClass("ui-autocomplete-loading"),this.cancelSearch=!1,this.source({term:t},this._response())},_response:function(){var t=++this.requestIndex;return function(e){t===this.requestIndex&&this.__response(e),this.pending--,this.pending||this._removeClass("ui-autocomplete-loading")}.bind(this)},__response:function(t){t&&(t=this._normalize(t)),this._trigger("response",null,{content:t}),!this.options.disabled&&t&&t.length&&!this.cancelSearch?(this._suggest(t),this._trigger("open")):this._close()},close:function(t){this.cancelSearch=!0,this._close(t)},_close:function(t){this._off(this.document,"mousedown"),this.menu.element.is(":visible")&&(this.menu.element.hide(),this.menu.blur(),this.isNewMenu=!0,this._trigger("close",t))},_change:function(t){this.previous!==this._value()&&this._trigger("change",t,{item:this.selectedItem})},_normalize:function(e){return e.length&&e[0].label&&e[0].value?e:t.map(e,(function(e){return"string"==typeof e?{label:e,value:e}:t.extend({},e,{label:e.label||e.value,value:e.value||e.label})}))},_suggest:function(e){var i=this.menu.element.empty();this._renderMenu(i,e),this.isNewMenu=!0,this.menu.refresh(),i.show(),this._resizeMenu(),i.position(t.extend({of:this.element},this.options.position)),this.options.autoFocus&&this.menu.next(),this._on(this.document,{mousedown:"_closeOnClickOutside"})},_resizeMenu:function(){var t=this.menu.element;t.outerWidth(Math.max(t.width("").outerWidth()+1,this.element.outerWidth()))},_renderMenu:function(e,i){var n=this;t.each(i,(function(t,i){n._renderItemData(e,i)}))},_renderItemData:function(t,e){return this._renderItem(t,e).data("ui-autocomplete-item",e)},_renderItem:function(e,i){return t("<li>").append(t("<div>").text(i.label)).appendTo(e)},_move:function(t,e){if(this.menu.element.is(":visible"))return this.menu.isFirstItem()&&/^previous/.test(t)||this.menu.isLastItem()&&/^next/.test(t)?(this.isMultiLine||this._value(this.term),void this.menu.blur()):void this.menu[t](e);this.search(null,e)},widget:function(){return this.menu.element},_value:function(){return this.valueMethod.apply(this.element,arguments)},_keyEvent:function(t,e){this.isMultiLine&&!this.menu.element.is(":visible")||(this._move(t,e),e.preventDefault())},_isContentEditable:function(t){if(!t.length)return!1;var e=t.prop("contentEditable");return"inherit"===e?this._isContentEditable(t.parent()):"true"===e}}),t.extend(t.ui.autocomplete,{escapeRegex:function(t){return t.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")},filter:function(e,i){var n=new RegExp(t.ui.autocomplete.escapeRegex(i),"i");return t.grep(e,(function(t){return n.test(t.label||t.value||t)}))}}),t.widget("ui.autocomplete",t.ui.autocomplete,{options:{messages:{noResults:"No search results.",results:function(t){return t+(t>1?" results are":" result is")+" available, use up and down arrow keys to navigate."}}},__response:function(e){var i;this._superApply(arguments),this.options.disabled||this.cancelSearch||(i=e&&e.length?this.options.messages.results(e.length):this.options.messages.noResults,clearTimeout(this.liveRegionTimer),this.liveRegionTimer=this._delay((function(){this.liveRegion.html(t("<div>").text(i))}),100))}}),t.ui.autocomplete},void 0===(o="function"==typeof n?n.apply(e,s):n)||(t.exports=o)}()},851:(t,e,i)=>{var n,s,o;!function(a){"use strict";s=[i(311),i(53),i(822),i(575),i(138),i(592),i(891)],void 0===(o="function"==typeof(n=function(t){return t.widget("ui.menu",{version:"1.13.2",defaultElement:"<ul>",delay:300,options:{icons:{submenu:"ui-icon-caret-1-e"},items:"> *",menus:"ul",position:{my:"left top",at:"right top"},role:"menu",blur:null,focus:null,select:null},_create:function(){this.activeMenu=this.element,this.mouseHandled=!1,this.lastMousePosition={x:null,y:null},this.element.uniqueId().attr({role:this.options.role,tabIndex:0}),this._addClass("ui-menu","ui-widget ui-widget-content"),this._on({"mousedown .ui-menu-item":function(t){t.preventDefault(),this._activateItem(t)},"click .ui-menu-item":function(e){var i=t(e.target),n=t(t.ui.safeActiveElement(this.document[0]));!this.mouseHandled&&i.not(".ui-state-disabled").length&&(this.select(e),e.isPropagationStopped()||(this.mouseHandled=!0),i.has(".ui-menu").length?this.expand(e):!this.element.is(":focus")&&n.closest(".ui-menu").length&&(this.element.trigger("focus",[!0]),this.active&&1===this.active.parents(".ui-menu").length&&clearTimeout(this.timer)))},"mouseenter .ui-menu-item":"_activateItem","mousemove .ui-menu-item":"_activateItem",mouseleave:"collapseAll","mouseleave .ui-menu":"collapseAll",focus:function(t,e){var i=this.active||this._menuItems().first();e||this.focus(t,i)},blur:function(e){this._delay((function(){!t.contains(this.element[0],t.ui.safeActiveElement(this.document[0]))&&this.collapseAll(e)}))},keydown:"_keydown"}),this.refresh(),this._on(this.document,{click:function(t){this._closeOnDocumentClick(t)&&this.collapseAll(t,!0),this.mouseHandled=!1}})},_activateItem:function(e){if(!this.previousFilter&&(e.clientX!==this.lastMousePosition.x||e.clientY!==this.lastMousePosition.y)){this.lastMousePosition={x:e.clientX,y:e.clientY};var i=t(e.target).closest(".ui-menu-item"),n=t(e.currentTarget);i[0]===n[0]&&(n.is(".ui-state-active")||(this._removeClass(n.siblings().children(".ui-state-active"),null,"ui-state-active"),this.focus(e,n)))}},_destroy:function(){var e=this.element.find(".ui-menu-item").removeAttr("role aria-disabled").children(".ui-menu-item-wrapper").removeUniqueId().removeAttr("tabIndex role aria-haspopup");this.element.removeAttr("aria-activedescendant").find(".ui-menu").addBack().removeAttr("role aria-labelledby aria-expanded aria-hidden aria-disabled tabIndex").removeUniqueId().show(),e.children().each((function(){var e=t(this);e.data("ui-menu-submenu-caret")&&e.remove()}))},_keydown:function(e){var i,n,s,o,a=!0;switch(e.keyCode){case t.ui.keyCode.PAGE_UP:this.previousPage(e);break;case t.ui.keyCode.PAGE_DOWN:this.nextPage(e);break;case t.ui.keyCode.HOME:this._move("first","first",e);break;case t.ui.keyCode.END:this._move("last","last",e);break;case t.ui.keyCode.UP:this.previous(e);break;case t.ui.keyCode.DOWN:this.next(e);break;case t.ui.keyCode.LEFT:this.collapse(e);break;case t.ui.keyCode.RIGHT:this.active&&!this.active.is(".ui-state-disabled")&&this.expand(e);break;case t.ui.keyCode.ENTER:case t.ui.keyCode.SPACE:this._activate(e);break;case t.ui.keyCode.ESCAPE:this.collapse(e);break;default:a=!1,n=this.previousFilter||"",o=!1,s=e.keyCode>=96&&e.keyCode<=105?(e.keyCode-96).toString():String.fromCharCode(e.keyCode),clearTimeout(this.filterTimer),s===n?o=!0:s=n+s,i=this._filterMenuItems(s),(i=o&&-1!==i.index(this.active.next())?this.active.nextAll(".ui-menu-item"):i).length||(s=String.fromCharCode(e.keyCode),i=this._filterMenuItems(s)),i.length?(this.focus(e,i),this.previousFilter=s,this.filterTimer=this._delay((function(){delete this.previousFilter}),1e3)):delete this.previousFilter}a&&e.preventDefault()},_activate:function(t){this.active&&!this.active.is(".ui-state-disabled")&&(this.active.children("[aria-haspopup='true']").length?this.expand(t):this.select(t))},refresh:function(){var e,i,n,s,o=this,a=this.options.icons.submenu,r=this.element.find(this.options.menus);this._toggleClass("ui-menu-icons",null,!!this.element.find(".ui-icon").length),i=r.filter(":not(.ui-menu)").hide().attr({role:this.options.role,"aria-hidden":"true","aria-expanded":"false"}).each((function(){var e=t(this),i=e.prev(),n=t("<span>").data("ui-menu-submenu-caret",!0);o._addClass(n,"ui-menu-icon","ui-icon "+a),i.attr("aria-haspopup","true").prepend(n),e.attr("aria-labelledby",i.attr("id"))})),this._addClass(i,"ui-menu","ui-widget ui-widget-content ui-front"),(e=r.add(this.element).find(this.options.items)).not(".ui-menu-item").each((function(){var e=t(this);o._isDivider(e)&&o._addClass(e,"ui-menu-divider","ui-widget-content")})),s=(n=e.not(".ui-menu-item, .ui-menu-divider")).children().not(".ui-menu").uniqueId().attr({tabIndex:-1,role:this._itemRole()}),this._addClass(n,"ui-menu-item")._addClass(s,"ui-menu-item-wrapper"),e.filter(".ui-state-disabled").attr("aria-disabled","true"),this.active&&!t.contains(this.element[0],this.active[0])&&this.blur()},_itemRole:function(){return{menu:"menuitem",listbox:"option"}[this.options.role]},_setOption:function(t,e){if("icons"===t){var i=this.element.find(".ui-menu-icon");this._removeClass(i,null,this.options.icons.submenu)._addClass(i,null,e.submenu)}this._super(t,e)},_setOptionDisabled:function(t){this._super(t),this.element.attr("aria-disabled",String(t)),this._toggleClass(null,"ui-state-disabled",!!t)},focus:function(t,e){var i,n,s;this.blur(t,t&&"focus"===t.type),this._scrollIntoView(e),this.active=e.first(),n=this.active.children(".ui-menu-item-wrapper"),this._addClass(n,null,"ui-state-active"),this.options.role&&this.element.attr("aria-activedescendant",n.attr("id")),s=this.active.parent().closest(".ui-menu-item").children(".ui-menu-item-wrapper"),this._addClass(s,null,"ui-state-active"),t&&"keydown"===t.type?this._close():this.timer=this._delay((function(){this._close()}),this.delay),(i=e.children(".ui-menu")).length&&t&&/^mouse/.test(t.type)&&this._startOpening(i),this.activeMenu=e.parent(),this._trigger("focus",t,{item:e})},_scrollIntoView:function(e){var i,n,s,o,a,r;this._hasScroll()&&(i=parseFloat(t.css(this.activeMenu[0],"borderTopWidth"))||0,n=parseFloat(t.css(this.activeMenu[0],"paddingTop"))||0,s=e.offset().top-this.activeMenu.offset().top-i-n,o=this.activeMenu.scrollTop(),a=this.activeMenu.height(),r=e.outerHeight(),s<0?this.activeMenu.scrollTop(o+s):s+r>a&&this.activeMenu.scrollTop(o+s-a+r))},blur:function(t,e){e||clearTimeout(this.timer),this.active&&(this._removeClass(this.active.children(".ui-menu-item-wrapper"),null,"ui-state-active"),this._trigger("blur",t,{item:this.active}),this.active=null)},_startOpening:function(t){clearTimeout(this.timer),"true"===t.attr("aria-hidden")&&(this.timer=this._delay((function(){this._close(),this._open(t)}),this.delay))},_open:function(e){var i=t.extend({of:this.active},this.options.position);clearTimeout(this.timer),this.element.find(".ui-menu").not(e.parents(".ui-menu")).hide().attr("aria-hidden","true"),e.show().removeAttr("aria-hidden").attr("aria-expanded","true").position(i)},collapseAll:function(e,i){clearTimeout(this.timer),this.timer=this._delay((function(){var n=i?this.element:t(e&&e.target).closest(this.element.find(".ui-menu"));n.length||(n=this.element),this._close(n),this.blur(e),this._removeClass(n.find(".ui-state-active"),null,"ui-state-active"),this.activeMenu=n}),i?0:this.delay)},_close:function(t){t||(t=this.active?this.active.parent():this.element),t.find(".ui-menu").hide().attr("aria-hidden","true").attr("aria-expanded","false")},_closeOnDocumentClick:function(e){return!t(e.target).closest(".ui-menu").length},_isDivider:function(t){return!/[^\-\u2014\u2013\s]/.test(t.text())},collapse:function(t){var e=this.active&&this.active.parent().closest(".ui-menu-item",this.element);e&&e.length&&(this._close(),this.focus(t,e))},expand:function(t){var e=this.active&&this._menuItems(this.active.children(".ui-menu")).first();e&&e.length&&(this._open(e.parent()),this._delay((function(){this.focus(t,e)})))},next:function(t){this._move("next","first",t)},previous:function(t){this._move("prev","last",t)},isFirstItem:function(){return this.active&&!this.active.prevAll(".ui-menu-item").length},isLastItem:function(){return this.active&&!this.active.nextAll(".ui-menu-item").length},_menuItems:function(t){return(t||this.element).find(this.options.items).filter(".ui-menu-item")},_move:function(t,e,i){var n;this.active&&(n="first"===t||"last"===t?this.active["first"===t?"prevAll":"nextAll"](".ui-menu-item").last():this.active[t+"All"](".ui-menu-item").first()),n&&n.length&&this.active||(n=this._menuItems(this.activeMenu)[e]()),this.focus(i,n)},nextPage:function(e){var i,n,s;this.active?this.isLastItem()||(this._hasScroll()?(n=this.active.offset().top,s=this.element.innerHeight(),0===t.fn.jquery.indexOf("3.2.")&&(s+=this.element[0].offsetHeight-this.element.outerHeight()),this.active.nextAll(".ui-menu-item").each((function(){return(i=t(this)).offset().top-n-s<0})),this.focus(e,i)):this.focus(e,this._menuItems(this.activeMenu)[this.active?"last":"first"]())):this.next(e)},previousPage:function(e){var i,n,s;this.active?this.isFirstItem()||(this._hasScroll()?(n=this.active.offset().top,s=this.element.innerHeight(),0===t.fn.jquery.indexOf("3.2.")&&(s+=this.element[0].offsetHeight-this.element.outerHeight()),this.active.prevAll(".ui-menu-item").each((function(){return(i=t(this)).offset().top-n+s>0})),this.focus(e,i)):this.focus(e,this._menuItems(this.activeMenu).first())):this.next(e)},_hasScroll:function(){return this.element.outerHeight()<this.element.prop("scrollHeight")},select:function(e){this.active=this.active||t(e.target).closest(".ui-menu-item");var i={item:this.active};this.active.has(".ui-menu").length||this.collapseAll(e,!0),this._trigger("select",e,i)},_filterMenuItems:function(e){var i=e.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&"),n=new RegExp("^"+i,"i");return this.activeMenu.find(this.options.items).filter(".ui-menu-item").filter((function(){return n.test(String.prototype.trim.call(t(this).children(".ui-menu-item-wrapper").text()))}))}})})?n.apply(e,s):n)||(t.exports=o)}()},311:t=>{"use strict";t.exports=jQuery}},e={};function i(n){var s=e[n];if(void 0!==s)return s.exports;var o=e[n]={exports:{}};return t[n](o,o.exports,i),o.exports}i.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return i.d(e,{a:e}),e},i.d=(t,e)=>{for(var n in e)i.o(e,n)&&!i.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},i.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),i.r=t=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},(()=>{"use strict";var t=i(311),e=i.n(t);i(993);i(568),function(){const t=PRHelper.getHook(),i=PRHelper.getType(),n=PRHelper.getHTML(),s=PRHelper.getRequest(),o=PRHelper.getSetting(),a=PRBackendHelper.getHTML();function r(t){n.show(n.getElement(".pr-spinner",t.closest(".inside")))}function l(t){n.hide(n.getElement(".pr-spinner",t.closest(".inside")))}t.on("load",(()=>{let u=n.getElements(".relation-box");i.each(u,(t=>{PRBackendHelper.getHTML().sortable(t,{handle:".relation-handle",animation:150,invertSwap:!0,onEnd:function(t){if(t.oldDraggableIndex!==t.newDraggableIndex){let e=[],u=t.target,h=t.item.closest(".relation-metabox"),c=n.getElements(".relation-item",h),d=n.getElement("input",h),f=n.getElement(".relation-error",h.closest(".inside"));i.each(c,((t,i)=>{n.setData("priority",i+1),e[i+1]=n.getData(t,"value")})),r(u),s.ajax(o.getOption("relation.ajax.update")).addNonce().onError((t=>{a.alert(f,t)})).onFinally((()=>{l(u)})).send({value:e,owner:n.getData(d,"owner"),entity:n.getData(d,"entity"),metaKey:n.getData(d,"metakey")})}}})})),t.on("keyup keydown change paste",(t=>{let i=n.getTarget(t,".newrelation"),a=e()(t.target),u=n.getValue(i),h=n.getElement(".relation-box",i.closest(".pr-tab-content"));a.autocomplete({source:function(t,e){s.ajax(o.getOption("relation.ajax.search")).onSuccess((function(t){e(t)})).send({value:u,target:n.getData(i,"target"),entity:n.getData(i,"entity"),owner:n.getData(i,"owner"),exclude:n.getData(i,"exclude")})},select:(t,e)=>{let a=e.item.value;return n.setValue(i,""),r(i),s.ajax(o.getOption("relation.ajax.persist")).onSuccess((function(t){n.append(t,h);let e=n.getData(i,"exclude");e={...e,[a]:a},n.setData(i,"exclude",e)})).onFinally((()=>{l(i)})).send({value:a,metaKey:n.getData(i,"metakey"),entity:n.getData(i,"entity"),owner:n.getData(i,"owner")}),!1},focus:(t,e)=>{t.preventDefault(),n.removeClass(n.getElement(".ui-highlight",t.currentTarget),"ui-highlight"),n.addClass(n.getElement(`[data-value='${e.item.value}']`,t.currentTarget),"ui-highlight"),n.setValue(i,e.item.label)},open:()=>{a.data("ui-autocomplete").menu.element.css({width:`${a.outerWidth(!1)}px`})},delay:500}).data("ui-autocomplete")._renderItem=(t,i)=>e()("<li>").addClass("relation-item-text").attr("data-value",i.value).append(i.label).appendTo(t)}),".newrelation"),t.bubbling("click",(t=>{let e=t.target.closest(".relation-item"),i=e.closest(".relation-metabox"),u=n.getElement("input.newrelation",i),h=n.getElement(".relation-error",e.closest(".inside")),c=n.getData(e,"value");r(e),s.ajax(o.getOption("relation.ajax.remove")).onSuccess((t=>{l(e),e.closest(".relation-item").remove();let i=n.getData(u,"exclude"),s=Object.keys(i).find((t=>i[t]===c));i={...i,[s]:null},n.setData(u,"exclude",i),a.alert(h,i)})).onError((t=>{a.alert(h,t),l(e)})).send({value:c,owner:n.getData(u,"owner"),entity:n.getData(u,"entity"),metaKey:n.getData(u,"metakey")})}),".relation-item-remove")}))}()})()})();