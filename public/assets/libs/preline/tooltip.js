!function(e,t){if("object"==typeof exports&&"object"==typeof module)module.exports=t();else if("function"==typeof define&&define.amd)define([],t);else{var n=t();for(var o in n)("object"==typeof exports?exports:e)[o]=n[o]}}(self,(()=>(()=>{"use strict";var e={492:(e,t,n)=>{n.r(t),n.d(t,{afterMain:()=>O,afterRead:()=>b,afterWrite:()=>T,applyStyles:()=>j,arrow:()=>Q,auto:()=>s,basePlacements:()=>f,beforeMain:()=>w,beforeRead:()=>g,beforeWrite:()=>E,bottom:()=>r,clippingParents:()=>u,computeStyles:()=>ne,createPopper:()=>je,createPopperBase:()=>Ie,createPopperLite:()=>Me,detectOverflow:()=>ye,end:()=>l,eventListeners:()=>re,flip:()=>be,hide:()=>Oe,left:()=>a,main:()=>x,modifierPhases:()=>P,offset:()=>Ee,placements:()=>v,popper:()=>d,popperGenerator:()=>Ce,popperOffsets:()=>Se,preventOverflow:()=>Te,read:()=>y,reference:()=>h,right:()=>i,start:()=>c,top:()=>o,variationPlacements:()=>m,viewport:()=>p,write:()=>S});var o="top",r="bottom",i="right",a="left",s="auto",f=[o,r,i,a],c="start",l="end",u="clippingParents",p="viewport",d="popper",h="reference",m=f.reduce((function(e,t){return e.concat([t+"-"+c,t+"-"+l])}),[]),v=[].concat(f,[s]).reduce((function(e,t){return e.concat([t,t+"-"+c,t+"-"+l])}),[]),g="beforeRead",y="read",b="afterRead",w="beforeMain",x="main",O="afterMain",E="beforeWrite",S="write",T="afterWrite",P=[g,y,b,w,x,O,E,S,T];function L(e){return e?(e.nodeName||"").toLowerCase():null}function A(e){if(null==e)return window;if("[object Window]"!==e.toString()){var t=e.ownerDocument;return t&&t.defaultView||window}return e}function _(e){return e instanceof A(e).Element||e instanceof Element}function C(e){return e instanceof A(e).HTMLElement||e instanceof HTMLElement}function I(e){return"undefined"!=typeof ShadowRoot&&(e instanceof A(e).ShadowRoot||e instanceof ShadowRoot)}const j={name:"applyStyles",enabled:!0,phase:"write",fn:function(e){var t=e.state;Object.keys(t.elements).forEach((function(e){var n=t.styles[e]||{},o=t.attributes[e]||{},r=t.elements[e];C(r)&&L(r)&&(Object.assign(r.style,n),Object.keys(o).forEach((function(e){var t=o[e];!1===t?r.removeAttribute(e):r.setAttribute(e,!0===t?"":t)})))}))},effect:function(e){var t=e.state,n={popper:{position:t.options.strategy,left:"0",top:"0",margin:"0"},arrow:{position:"absolute"},reference:{}};return Object.assign(t.elements.popper.style,n.popper),t.styles=n,t.elements.arrow&&Object.assign(t.elements.arrow.style,n.arrow),function(){Object.keys(t.elements).forEach((function(e){var o=t.elements[e],r=t.attributes[e]||{},i=Object.keys(t.styles.hasOwnProperty(e)?t.styles[e]:n[e]).reduce((function(e,t){return e[t]="",e}),{});C(o)&&L(o)&&(Object.assign(o.style,i),Object.keys(r).forEach((function(e){o.removeAttribute(e)})))}))}},requires:["computeStyles"]};function M(e){return e.split("-")[0]}var B=Math.max,D=Math.min,H=Math.round;function k(){var e=navigator.userAgentData;return null!=e&&e.brands&&Array.isArray(e.brands)?e.brands.map((function(e){return e.brand+"/"+e.version})).join(" "):navigator.userAgent}function R(){return!/^((?!chrome|android).)*safari/i.test(k())}function W(e,t,n){void 0===t&&(t=!1),void 0===n&&(n=!1);var o=e.getBoundingClientRect(),r=1,i=1;t&&C(e)&&(r=e.offsetWidth>0&&H(o.width)/e.offsetWidth||1,i=e.offsetHeight>0&&H(o.height)/e.offsetHeight||1);var a=(_(e)?A(e):window).visualViewport,s=!R()&&n,f=(o.left+(s&&a?a.offsetLeft:0))/r,c=(o.top+(s&&a?a.offsetTop:0))/i,l=o.width/r,u=o.height/i;return{width:l,height:u,top:c,right:f+l,bottom:c+u,left:f,x:f,y:c}}function Y(e){var t=W(e),n=e.offsetWidth,o=e.offsetHeight;return Math.abs(t.width-n)<=1&&(n=t.width),Math.abs(t.height-o)<=1&&(o=t.height),{x:e.offsetLeft,y:e.offsetTop,width:n,height:o}}function q(e,t){var n=t.getRootNode&&t.getRootNode();if(e.contains(t))return!0;if(n&&I(n)){var o=t;do{if(o&&e.isSameNode(o))return!0;o=o.parentNode||o.host}while(o)}return!1}function V(e){return A(e).getComputedStyle(e)}function N(e){return["table","td","th"].indexOf(L(e))>=0}function K(e){return((_(e)?e.ownerDocument:e.document)||window.document).documentElement}function U(e){return"html"===L(e)?e:e.assignedSlot||e.parentNode||(I(e)?e.host:null)||K(e)}function $(e){return C(e)&&"fixed"!==V(e).position?e.offsetParent:null}function F(e){for(var t=A(e),n=$(e);n&&N(n)&&"static"===V(n).position;)n=$(n);return n&&("html"===L(n)||"body"===L(n)&&"static"===V(n).position)?t:n||function(e){var t=/firefox/i.test(k());if(/Trident/i.test(k())&&C(e)&&"fixed"===V(e).position)return null;var n=U(e);for(I(n)&&(n=n.host);C(n)&&["html","body"].indexOf(L(n))<0;){var o=V(n);if("none"!==o.transform||"none"!==o.perspective||"paint"===o.contain||-1!==["transform","perspective"].indexOf(o.willChange)||t&&"filter"===o.willChange||t&&o.filter&&"none"!==o.filter)return n;n=n.parentNode}return null}(e)||t}function X(e){return["top","bottom"].indexOf(e)>=0?"x":"y"}function z(e,t,n){return B(e,D(t,n))}function G(e){return Object.assign({},{top:0,right:0,bottom:0,left:0},e)}function J(e,t){return t.reduce((function(t,n){return t[n]=e,t}),{})}const Q={name:"arrow",enabled:!0,phase:"main",fn:function(e){var t,n=e.state,s=e.name,c=e.options,l=n.elements.arrow,u=n.modifiersData.popperOffsets,p=M(n.placement),d=X(p),h=[a,i].indexOf(p)>=0?"height":"width";if(l&&u){var m=function(e,t){return G("number"!=typeof(e="function"==typeof e?e(Object.assign({},t.rects,{placement:t.placement})):e)?e:J(e,f))}(c.padding,n),v=Y(l),g="y"===d?o:a,y="y"===d?r:i,b=n.rects.reference[h]+n.rects.reference[d]-u[d]-n.rects.popper[h],w=u[d]-n.rects.reference[d],x=F(l),O=x?"y"===d?x.clientHeight||0:x.clientWidth||0:0,E=b/2-w/2,S=m[g],T=O-v[h]-m[y],P=O/2-v[h]/2+E,L=z(S,P,T),A=d;n.modifiersData[s]=((t={})[A]=L,t.centerOffset=L-P,t)}},effect:function(e){var t=e.state,n=e.options.element,o=void 0===n?"[data-popper-arrow]":n;null!=o&&("string"!=typeof o||(o=t.elements.popper.querySelector(o)))&&q(t.elements.popper,o)&&(t.elements.arrow=o)},requires:["popperOffsets"],requiresIfExists:["preventOverflow"]};function Z(e){return e.split("-")[1]}var ee={top:"auto",right:"auto",bottom:"auto",left:"auto"};function te(e){var t,n=e.popper,s=e.popperRect,f=e.placement,c=e.variation,u=e.offsets,p=e.position,d=e.gpuAcceleration,h=e.adaptive,m=e.roundOffsets,v=e.isFixed,g=u.x,y=void 0===g?0:g,b=u.y,w=void 0===b?0:b,x="function"==typeof m?m({x:y,y:w}):{x:y,y:w};y=x.x,w=x.y;var O=u.hasOwnProperty("x"),E=u.hasOwnProperty("y"),S=a,T=o,P=window;if(h){var L=F(n),_="clientHeight",C="clientWidth";if(L===A(n)&&"static"!==V(L=K(n)).position&&"absolute"===p&&(_="scrollHeight",C="scrollWidth"),f===o||(f===a||f===i)&&c===l)T=r,w-=(v&&L===P&&P.visualViewport?P.visualViewport.height:L[_])-s.height,w*=d?1:-1;if(f===a||(f===o||f===r)&&c===l)S=i,y-=(v&&L===P&&P.visualViewport?P.visualViewport.width:L[C])-s.width,y*=d?1:-1}var I,j=Object.assign({position:p},h&&ee),M=!0===m?function(e,t){var n=e.x,o=e.y,r=t.devicePixelRatio||1;return{x:H(n*r)/r||0,y:H(o*r)/r||0}}({x:y,y:w},A(n)):{x:y,y:w};return y=M.x,w=M.y,d?Object.assign({},j,((I={})[T]=E?"0":"",I[S]=O?"0":"",I.transform=(P.devicePixelRatio||1)<=1?"translate("+y+"px, "+w+"px)":"translate3d("+y+"px, "+w+"px, 0)",I)):Object.assign({},j,((t={})[T]=E?w+"px":"",t[S]=O?y+"px":"",t.transform="",t))}const ne={name:"computeStyles",enabled:!0,phase:"beforeWrite",fn:function(e){var t=e.state,n=e.options,o=n.gpuAcceleration,r=void 0===o||o,i=n.adaptive,a=void 0===i||i,s=n.roundOffsets,f=void 0===s||s,c={placement:M(t.placement),variation:Z(t.placement),popper:t.elements.popper,popperRect:t.rects.popper,gpuAcceleration:r,isFixed:"fixed"===t.options.strategy};null!=t.modifiersData.popperOffsets&&(t.styles.popper=Object.assign({},t.styles.popper,te(Object.assign({},c,{offsets:t.modifiersData.popperOffsets,position:t.options.strategy,adaptive:a,roundOffsets:f})))),null!=t.modifiersData.arrow&&(t.styles.arrow=Object.assign({},t.styles.arrow,te(Object.assign({},c,{offsets:t.modifiersData.arrow,position:"absolute",adaptive:!1,roundOffsets:f})))),t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-placement":t.placement})},data:{}};var oe={passive:!0};const re={name:"eventListeners",enabled:!0,phase:"write",fn:function(){},effect:function(e){var t=e.state,n=e.instance,o=e.options,r=o.scroll,i=void 0===r||r,a=o.resize,s=void 0===a||a,f=A(t.elements.popper),c=[].concat(t.scrollParents.reference,t.scrollParents.popper);return i&&c.forEach((function(e){e.addEventListener("scroll",n.update,oe)})),s&&f.addEventListener("resize",n.update,oe),function(){i&&c.forEach((function(e){e.removeEventListener("scroll",n.update,oe)})),s&&f.removeEventListener("resize",n.update,oe)}},data:{}};var ie={left:"right",right:"left",bottom:"top",top:"bottom"};function ae(e){return e.replace(/left|right|bottom|top/g,(function(e){return ie[e]}))}var se={start:"end",end:"start"};function fe(e){return e.replace(/start|end/g,(function(e){return se[e]}))}function ce(e){var t=A(e);return{scrollLeft:t.pageXOffset,scrollTop:t.pageYOffset}}function le(e){return W(K(e)).left+ce(e).scrollLeft}function ue(e){var t=V(e),n=t.overflow,o=t.overflowX,r=t.overflowY;return/auto|scroll|overlay|hidden/.test(n+r+o)}function pe(e){return["html","body","#document"].indexOf(L(e))>=0?e.ownerDocument.body:C(e)&&ue(e)?e:pe(U(e))}function de(e,t){var n;void 0===t&&(t=[]);var o=pe(e),r=o===(null==(n=e.ownerDocument)?void 0:n.body),i=A(o),a=r?[i].concat(i.visualViewport||[],ue(o)?o:[]):o,s=t.concat(a);return r?s:s.concat(de(U(a)))}function he(e){return Object.assign({},e,{left:e.x,top:e.y,right:e.x+e.width,bottom:e.y+e.height})}function me(e,t,n){return t===p?he(function(e,t){var n=A(e),o=K(e),r=n.visualViewport,i=o.clientWidth,a=o.clientHeight,s=0,f=0;if(r){i=r.width,a=r.height;var c=R();(c||!c&&"fixed"===t)&&(s=r.offsetLeft,f=r.offsetTop)}return{width:i,height:a,x:s+le(e),y:f}}(e,n)):_(t)?function(e,t){var n=W(e,!1,"fixed"===t);return n.top=n.top+e.clientTop,n.left=n.left+e.clientLeft,n.bottom=n.top+e.clientHeight,n.right=n.left+e.clientWidth,n.width=e.clientWidth,n.height=e.clientHeight,n.x=n.left,n.y=n.top,n}(t,n):he(function(e){var t,n=K(e),o=ce(e),r=null==(t=e.ownerDocument)?void 0:t.body,i=B(n.scrollWidth,n.clientWidth,r?r.scrollWidth:0,r?r.clientWidth:0),a=B(n.scrollHeight,n.clientHeight,r?r.scrollHeight:0,r?r.clientHeight:0),s=-o.scrollLeft+le(e),f=-o.scrollTop;return"rtl"===V(r||n).direction&&(s+=B(n.clientWidth,r?r.clientWidth:0)-i),{width:i,height:a,x:s,y:f}}(K(e)))}function ve(e,t,n,o){var r="clippingParents"===t?function(e){var t=de(U(e)),n=["absolute","fixed"].indexOf(V(e).position)>=0&&C(e)?F(e):e;return _(n)?t.filter((function(e){return _(e)&&q(e,n)&&"body"!==L(e)})):[]}(e):[].concat(t),i=[].concat(r,[n]),a=i[0],s=i.reduce((function(t,n){var r=me(e,n,o);return t.top=B(r.top,t.top),t.right=D(r.right,t.right),t.bottom=D(r.bottom,t.bottom),t.left=B(r.left,t.left),t}),me(e,a,o));return s.width=s.right-s.left,s.height=s.bottom-s.top,s.x=s.left,s.y=s.top,s}function ge(e){var t,n=e.reference,s=e.element,f=e.placement,u=f?M(f):null,p=f?Z(f):null,d=n.x+n.width/2-s.width/2,h=n.y+n.height/2-s.height/2;switch(u){case o:t={x:d,y:n.y-s.height};break;case r:t={x:d,y:n.y+n.height};break;case i:t={x:n.x+n.width,y:h};break;case a:t={x:n.x-s.width,y:h};break;default:t={x:n.x,y:n.y}}var m=u?X(u):null;if(null!=m){var v="y"===m?"height":"width";switch(p){case c:t[m]=t[m]-(n[v]/2-s[v]/2);break;case l:t[m]=t[m]+(n[v]/2-s[v]/2)}}return t}function ye(e,t){void 0===t&&(t={});var n=t,a=n.placement,s=void 0===a?e.placement:a,c=n.strategy,l=void 0===c?e.strategy:c,m=n.boundary,v=void 0===m?u:m,g=n.rootBoundary,y=void 0===g?p:g,b=n.elementContext,w=void 0===b?d:b,x=n.altBoundary,O=void 0!==x&&x,E=n.padding,S=void 0===E?0:E,T=G("number"!=typeof S?S:J(S,f)),P=w===d?h:d,L=e.rects.popper,A=e.elements[O?P:w],C=ve(_(A)?A:A.contextElement||K(e.elements.popper),v,y,l),I=W(e.elements.reference),j=ge({reference:I,element:L,strategy:"absolute",placement:s}),M=he(Object.assign({},L,j)),B=w===d?M:I,D={top:C.top-B.top+T.top,bottom:B.bottom-C.bottom+T.bottom,left:C.left-B.left+T.left,right:B.right-C.right+T.right},H=e.modifiersData.offset;if(w===d&&H){var k=H[s];Object.keys(D).forEach((function(e){var t=[i,r].indexOf(e)>=0?1:-1,n=[o,r].indexOf(e)>=0?"y":"x";D[e]+=k[n]*t}))}return D}const be={name:"flip",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,l=e.name;if(!t.modifiersData[l]._skip){for(var u=n.mainAxis,p=void 0===u||u,d=n.altAxis,h=void 0===d||d,g=n.fallbackPlacements,y=n.padding,b=n.boundary,w=n.rootBoundary,x=n.altBoundary,O=n.flipVariations,E=void 0===O||O,S=n.allowedAutoPlacements,T=t.options.placement,P=M(T),L=g||(P===T||!E?[ae(T)]:function(e){if(M(e)===s)return[];var t=ae(e);return[fe(e),t,fe(t)]}(T)),A=[T].concat(L).reduce((function(e,n){return e.concat(M(n)===s?function(e,t){void 0===t&&(t={});var n=t,o=n.placement,r=n.boundary,i=n.rootBoundary,a=n.padding,s=n.flipVariations,c=n.allowedAutoPlacements,l=void 0===c?v:c,u=Z(o),p=u?s?m:m.filter((function(e){return Z(e)===u})):f,d=p.filter((function(e){return l.indexOf(e)>=0}));0===d.length&&(d=p);var h=d.reduce((function(t,n){return t[n]=ye(e,{placement:n,boundary:r,rootBoundary:i,padding:a})[M(n)],t}),{});return Object.keys(h).sort((function(e,t){return h[e]-h[t]}))}(t,{placement:n,boundary:b,rootBoundary:w,padding:y,flipVariations:E,allowedAutoPlacements:S}):n)}),[]),_=t.rects.reference,C=t.rects.popper,I=new Map,j=!0,B=A[0],D=0;D<A.length;D++){var H=A[D],k=M(H),R=Z(H)===c,W=[o,r].indexOf(k)>=0,Y=W?"width":"height",q=ye(t,{placement:H,boundary:b,rootBoundary:w,altBoundary:x,padding:y}),V=W?R?i:a:R?r:o;_[Y]>C[Y]&&(V=ae(V));var N=ae(V),K=[];if(p&&K.push(q[k]<=0),h&&K.push(q[V]<=0,q[N]<=0),K.every((function(e){return e}))){B=H,j=!1;break}I.set(H,K)}if(j)for(var U=function(e){var t=A.find((function(t){var n=I.get(t);if(n)return n.slice(0,e).every((function(e){return e}))}));if(t)return B=t,"break"},$=E?3:1;$>0;$--){if("break"===U($))break}t.placement!==B&&(t.modifiersData[l]._skip=!0,t.placement=B,t.reset=!0)}},requiresIfExists:["offset"],data:{_skip:!1}};function we(e,t,n){return void 0===n&&(n={x:0,y:0}),{top:e.top-t.height-n.y,right:e.right-t.width+n.x,bottom:e.bottom-t.height+n.y,left:e.left-t.width-n.x}}function xe(e){return[o,i,r,a].some((function(t){return e[t]>=0}))}const Oe={name:"hide",enabled:!0,phase:"main",requiresIfExists:["preventOverflow"],fn:function(e){var t=e.state,n=e.name,o=t.rects.reference,r=t.rects.popper,i=t.modifiersData.preventOverflow,a=ye(t,{elementContext:"reference"}),s=ye(t,{altBoundary:!0}),f=we(a,o),c=we(s,r,i),l=xe(f),u=xe(c);t.modifiersData[n]={referenceClippingOffsets:f,popperEscapeOffsets:c,isReferenceHidden:l,hasPopperEscaped:u},t.attributes.popper=Object.assign({},t.attributes.popper,{"data-popper-reference-hidden":l,"data-popper-escaped":u})}};const Ee={name:"offset",enabled:!0,phase:"main",requires:["popperOffsets"],fn:function(e){var t=e.state,n=e.options,r=e.name,s=n.offset,f=void 0===s?[0,0]:s,c=v.reduce((function(e,n){return e[n]=function(e,t,n){var r=M(e),s=[a,o].indexOf(r)>=0?-1:1,f="function"==typeof n?n(Object.assign({},t,{placement:e})):n,c=f[0],l=f[1];return c=c||0,l=(l||0)*s,[a,i].indexOf(r)>=0?{x:l,y:c}:{x:c,y:l}}(n,t.rects,f),e}),{}),l=c[t.placement],u=l.x,p=l.y;null!=t.modifiersData.popperOffsets&&(t.modifiersData.popperOffsets.x+=u,t.modifiersData.popperOffsets.y+=p),t.modifiersData[r]=c}};const Se={name:"popperOffsets",enabled:!0,phase:"read",fn:function(e){var t=e.state,n=e.name;t.modifiersData[n]=ge({reference:t.rects.reference,element:t.rects.popper,strategy:"absolute",placement:t.placement})},data:{}};const Te={name:"preventOverflow",enabled:!0,phase:"main",fn:function(e){var t=e.state,n=e.options,s=e.name,f=n.mainAxis,l=void 0===f||f,u=n.altAxis,p=void 0!==u&&u,d=n.boundary,h=n.rootBoundary,m=n.altBoundary,v=n.padding,g=n.tether,y=void 0===g||g,b=n.tetherOffset,w=void 0===b?0:b,x=ye(t,{boundary:d,rootBoundary:h,padding:v,altBoundary:m}),O=M(t.placement),E=Z(t.placement),S=!E,T=X(O),P="x"===T?"y":"x",L=t.modifiersData.popperOffsets,A=t.rects.reference,_=t.rects.popper,C="function"==typeof w?w(Object.assign({},t.rects,{placement:t.placement})):w,I="number"==typeof C?{mainAxis:C,altAxis:C}:Object.assign({mainAxis:0,altAxis:0},C),j=t.modifiersData.offset?t.modifiersData.offset[t.placement]:null,H={x:0,y:0};if(L){if(l){var k,R="y"===T?o:a,W="y"===T?r:i,q="y"===T?"height":"width",V=L[T],N=V+x[R],K=V-x[W],U=y?-_[q]/2:0,$=E===c?A[q]:_[q],G=E===c?-_[q]:-A[q],J=t.elements.arrow,Q=y&&J?Y(J):{width:0,height:0},ee=t.modifiersData["arrow#persistent"]?t.modifiersData["arrow#persistent"].padding:{top:0,right:0,bottom:0,left:0},te=ee[R],ne=ee[W],oe=z(0,A[q],Q[q]),re=S?A[q]/2-U-oe-te-I.mainAxis:$-oe-te-I.mainAxis,ie=S?-A[q]/2+U+oe+ne+I.mainAxis:G+oe+ne+I.mainAxis,ae=t.elements.arrow&&F(t.elements.arrow),se=ae?"y"===T?ae.clientTop||0:ae.clientLeft||0:0,fe=null!=(k=null==j?void 0:j[T])?k:0,ce=V+ie-fe,le=z(y?D(N,V+re-fe-se):N,V,y?B(K,ce):K);L[T]=le,H[T]=le-V}if(p){var ue,pe="x"===T?o:a,de="x"===T?r:i,he=L[P],me="y"===P?"height":"width",ve=he+x[pe],ge=he-x[de],be=-1!==[o,a].indexOf(O),we=null!=(ue=null==j?void 0:j[P])?ue:0,xe=be?ve:he-A[me]-_[me]-we+I.altAxis,Oe=be?he+A[me]+_[me]-we-I.altAxis:ge,Ee=y&&be?function(e,t,n){var o=z(e,t,n);return o>n?n:o}(xe,he,Oe):z(y?xe:ve,he,y?Oe:ge);L[P]=Ee,H[P]=Ee-he}t.modifiersData[s]=H}},requiresIfExists:["offset"]};function Pe(e,t,n){void 0===n&&(n=!1);var o,r,i=C(t),a=C(t)&&function(e){var t=e.getBoundingClientRect(),n=H(t.width)/e.offsetWidth||1,o=H(t.height)/e.offsetHeight||1;return 1!==n||1!==o}(t),s=K(t),f=W(e,a,n),c={scrollLeft:0,scrollTop:0},l={x:0,y:0};return(i||!i&&!n)&&(("body"!==L(t)||ue(s))&&(c=(o=t)!==A(o)&&C(o)?{scrollLeft:(r=o).scrollLeft,scrollTop:r.scrollTop}:ce(o)),C(t)?((l=W(t,!0)).x+=t.clientLeft,l.y+=t.clientTop):s&&(l.x=le(s))),{x:f.left+c.scrollLeft-l.x,y:f.top+c.scrollTop-l.y,width:f.width,height:f.height}}function Le(e){var t=new Map,n=new Set,o=[];function r(e){n.add(e.name),[].concat(e.requires||[],e.requiresIfExists||[]).forEach((function(e){if(!n.has(e)){var o=t.get(e);o&&r(o)}})),o.push(e)}return e.forEach((function(e){t.set(e.name,e)})),e.forEach((function(e){n.has(e.name)||r(e)})),o}var Ae={placement:"bottom",modifiers:[],strategy:"absolute"};function _e(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n];return!t.some((function(e){return!(e&&"function"==typeof e.getBoundingClientRect)}))}function Ce(e){void 0===e&&(e={});var t=e,n=t.defaultModifiers,o=void 0===n?[]:n,r=t.defaultOptions,i=void 0===r?Ae:r;return function(e,t,n){void 0===n&&(n=i);var r,a,s={placement:"bottom",orderedModifiers:[],options:Object.assign({},Ae,i),modifiersData:{},elements:{reference:e,popper:t},attributes:{},styles:{}},f=[],c=!1,l={state:s,setOptions:function(n){var r="function"==typeof n?n(s.options):n;u(),s.options=Object.assign({},i,s.options,r),s.scrollParents={reference:_(e)?de(e):e.contextElement?de(e.contextElement):[],popper:de(t)};var a,c,p=function(e){var t=Le(e);return P.reduce((function(e,n){return e.concat(t.filter((function(e){return e.phase===n})))}),[])}((a=[].concat(o,s.options.modifiers),c=a.reduce((function(e,t){var n=e[t.name];return e[t.name]=n?Object.assign({},n,t,{options:Object.assign({},n.options,t.options),data:Object.assign({},n.data,t.data)}):t,e}),{}),Object.keys(c).map((function(e){return c[e]}))));return s.orderedModifiers=p.filter((function(e){return e.enabled})),s.orderedModifiers.forEach((function(e){var t=e.name,n=e.options,o=void 0===n?{}:n,r=e.effect;if("function"==typeof r){var i=r({state:s,name:t,instance:l,options:o}),a=function(){};f.push(i||a)}})),l.update()},forceUpdate:function(){if(!c){var e=s.elements,t=e.reference,n=e.popper;if(_e(t,n)){s.rects={reference:Pe(t,F(n),"fixed"===s.options.strategy),popper:Y(n)},s.reset=!1,s.placement=s.options.placement,s.orderedModifiers.forEach((function(e){return s.modifiersData[e.name]=Object.assign({},e.data)}));for(var o=0;o<s.orderedModifiers.length;o++)if(!0!==s.reset){var r=s.orderedModifiers[o],i=r.fn,a=r.options,f=void 0===a?{}:a,u=r.name;"function"==typeof i&&(s=i({state:s,options:f,name:u,instance:l})||s)}else s.reset=!1,o=-1}}},update:(r=function(){return new Promise((function(e){l.forceUpdate(),e(s)}))},function(){return a||(a=new Promise((function(e){Promise.resolve().then((function(){a=void 0,e(r())}))}))),a}),destroy:function(){u(),c=!0}};if(!_e(e,t))return l;function u(){f.forEach((function(e){return e()})),f=[]}return l.setOptions(n).then((function(e){!c&&n.onFirstUpdate&&n.onFirstUpdate(e)})),l}}var Ie=Ce(),je=Ce({defaultModifiers:[re,Se,ne,j,Ee,be,Te,Q,Oe]}),Me=Ce({defaultModifiers:[re,Se,ne,j]})},190:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.BREAKPOINTS=t.COMBO_BOX_ACCESSIBILITY_KEY_SET=t.SELECT_ACCESSIBILITY_KEY_SET=t.TABS_ACCESSIBILITY_KEY_SET=t.OVERLAY_ACCESSIBILITY_KEY_SET=t.DROPDOWN_ACCESSIBILITY_KEY_SET=t.POSITIONS=void 0,t.POSITIONS={auto:"auto","auto-start":"auto-start","auto-end":"auto-end",top:"top","top-left":"top-start","top-right":"top-end",bottom:"bottom","bottom-left":"bottom-start","bottom-right":"bottom-end",right:"right","right-start":"right-start","right-end":"right-end",left:"left","left-start":"left-start","left-end":"left-end"},t.DROPDOWN_ACCESSIBILITY_KEY_SET=["Escape","ArrowUp","ArrowDown","Home","End","Enter"],t.OVERLAY_ACCESSIBILITY_KEY_SET=["Escape","Tab"],t.TABS_ACCESSIBILITY_KEY_SET=["ArrowUp","ArrowLeft","ArrowDown","ArrowRight","Home","End"],t.SELECT_ACCESSIBILITY_KEY_SET=["ArrowUp","ArrowLeft","ArrowDown","ArrowRight","Home","End","Escape","Enter","Tab"],t.COMBO_BOX_ACCESSIBILITY_KEY_SET=["ArrowUp","ArrowLeft","ArrowDown","ArrowRight","Home","End","Escape","Enter"],t.BREAKPOINTS={sm:640,md:768,lg:1024,xl:1280,"2xl":1536}},737:(e,t)=>{
/*
 * HSBasePlugin
 * @version: 2.1.0
 * @author: HTMLStream
 * @license: Licensed under MIT (https://preline.co/docs/license.html)
 * Copyright 2023 HTMLStream
 */
Object.defineProperty(t,"__esModule",{value:!0});var n=function(){function e(e,t,n){this.el=e,this.options=t,this.events=n,this.el=e,this.options=t,this.events={}}return e.prototype.createCollection=function(e,t){var n;e.push({id:(null===(n=null==t?void 0:t.el)||void 0===n?void 0:n.id)||e.length+1,element:t})},e.prototype.fireEvent=function(e,t){if(void 0===t&&(t=null),this.events.hasOwnProperty(e))return this.events[e](t)},e.prototype.on=function(e,t){this.events[e]=t},e}();t.default=n},679:function(e,t,n){
/*
 * HSTooltip
 * @version: 2.1.0
 * @author: HTMLStream
 * @license: Licensed under MIT (https://preline.co/docs/license.html)
 * Copyright 2023 HTMLStream
 */
var o,r=this&&this.__extends||(o=function(e,t){return o=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)Object.prototype.hasOwnProperty.call(t,n)&&(e[n]=t[n])},o(e,t)},function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Class extends value "+String(t)+" is not a constructor or null");function n(){this.constructor=e}o(e,t),e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n)}),i=this&&this.__assign||function(){return i=Object.assign||function(e){for(var t,n=1,o=arguments.length;n<o;n++)for(var r in t=arguments[n])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e},i.apply(this,arguments)},a=this&&this.__spreadArray||function(e,t,n){if(n||2===arguments.length)for(var o,r=0,i=t.length;r<i;r++)!o&&r in t||(o||(o=Array.prototype.slice.call(t,0,r)),o[r]=t[r]);return e.concat(o||Array.prototype.slice.call(t))},s=this&&this.__importDefault||function(e){return e&&e.__esModule?e:{default:e}};Object.defineProperty(t,"__esModule",{value:!0});var f=n(492),c=n(969),l=s(n(737)),u=n(190),p=function(e){function t(t,n,o){var r=e.call(this,t,n,o)||this;return r.el&&(r.toggle=r.el.querySelector(".hs-tooltip-toggle")||r.el,r.content=r.el.querySelector(".hs-tooltip-content"),r.eventMode=(0,c.getClassProperty)(r.el,"--trigger")||"hover",r.preventPopper=(0,c.getClassProperty)(r.el,"--prevent-popper","false"),r.placement=(0,c.getClassProperty)(r.el,"--placement"),r.strategy=(0,c.getClassProperty)(r.el,"--strategy")),r.el&&r.toggle&&r.content&&r.init(),r}return r(t,e),t.prototype.init=function(){var e=this;this.createCollection(window.$hsTooltipCollection,this),"click"===this.eventMode?this.toggle.addEventListener("click",(function(){return e.click()})):"focus"===this.eventMode?this.toggle.addEventListener("click",(function(){return e.focus()})):"hover"===this.eventMode&&(this.toggle.addEventListener("mouseenter",(function(){return e.enter()})),this.toggle.addEventListener("mouseleave",(function(){return e.leave()}))),"false"===this.preventPopper&&this.buildPopper()},t.prototype.enter=function(){this.show()},t.prototype.leave=function(){this.hide()},t.prototype.click=function(){var e=this;if(this.el.classList.contains("show"))return!1;this.show();var t=function(){setTimeout((function(){e.hide(),e.toggle.removeEventListener("click",t,!0),e.toggle.removeEventListener("blur",t,!0)}))};this.toggle.addEventListener("click",t,!0),this.toggle.addEventListener("blur",t,!0)},t.prototype.focus=function(){var e=this;this.show();var t=function(){e.hide(),e.toggle.removeEventListener("blur",t,!0)};this.toggle.addEventListener("blur",t,!0)},t.prototype.buildPopper=function(){this.popperInstance=(0,f.createPopper)(this.toggle,this.content,{placement:u.POSITIONS[this.placement]||"top",strategy:this.strategy||"fixed",modifiers:[{name:"offset",options:{offset:[0,5]}}]})},t.prototype.show=function(){var e=this;this.content.classList.remove("hidden"),"false"===this.preventPopper&&(this.popperInstance.setOptions((function(e){return i(i({},e),{modifiers:a(a([],e.modifiers,!0),[{name:"eventListeners",enabled:!0}],!1)})})),this.popperInstance.update()),setTimeout((function(){e.el.classList.add("show"),e.fireEvent("show",e.el),(0,c.dispatch)("show.hs.tooltip",e.el,e.el)}))},t.prototype.hide=function(){var e=this;this.el.classList.remove("show"),"false"===this.preventPopper&&this.popperInstance.setOptions((function(e){return i(i({},e),{modifiers:a(a([],e.modifiers,!0),[{name:"eventListeners",enabled:!1}],!1)})})),this.fireEvent("hide",this.el),(0,c.dispatch)("hide.hs.tooltip",this.el,this.el),(0,c.afterTransition)(this.content,(function(){if(e.el.classList.contains("show"))return!1;e.content.classList.add("hidden")}))},t.getInstance=function(e,t){void 0===t&&(t=!1);var n=window.$hsTooltipCollection.find((function(t){return t.element.el===("string"==typeof e?document.querySelector(e):e)}));return n?t?n:n.element.el:null},t.autoInit=function(){window.$hsTooltipCollection||(window.$hsTooltipCollection=[]),document.querySelectorAll(".hs-tooltip").forEach((function(e){window.$hsTooltipCollection.find((function(t){var n;return(null===(n=null==t?void 0:t.element)||void 0===n?void 0:n.el)===e}))||new t(e)}))},t.show=function(e){var t=window.$hsTooltipCollection.find((function(t){return t.element.el===("string"==typeof e?document.querySelector(e):e)}));if(t)switch(t.element.eventMode){case"click":t.element.click();break;case"focus":t.element.focus();break;default:t.element.enter()}},t.hide=function(e){var t=window.$hsTooltipCollection.find((function(t){return t.element.el===("string"==typeof e?document.querySelector(e):e)}));t&&t.element.hide()},t.on=function(e,t,n){var o=window.$hsTooltipCollection.find((function(e){return e.element.el===("string"==typeof t?document.querySelector(t):t)}));o&&(o.element.events[e]=n)},t}(l.default);window.addEventListener("load",(function(){p.autoInit()})),"undefined"!=typeof window&&(window.HSTooltip=p),t.default=p},969:function(e,t){var n=this;Object.defineProperty(t,"__esModule",{value:!0}),t.menuSearchHistory=t.classToClassList=t.htmlToElement=t.afterTransition=t.dispatch=t.debounce=t.isFormElement=t.isParentOrElementHidden=t.isEnoughSpace=t.isIpadOS=t.isIOS=t.getClassPropertyAlt=t.getClassProperty=t.stringToBoolean=void 0;t.stringToBoolean=function(e){return"true"===e};t.getClassProperty=function(e,t,n){return void 0===n&&(n=""),(window.getComputedStyle(e).getPropertyValue(t)||n).replace(" ","")};t.getClassPropertyAlt=function(e,t,n){void 0===n&&(n="");var o="";return e.classList.forEach((function(e){e.includes(t)&&(o=e)})),o.match(/:(.*)]/)?o.match(/:(.*)]/)[1]:n};t.isIOS=function(){return!!/iPad|iPhone|iPod/.test(navigator.platform)||navigator.maxTouchPoints&&navigator.maxTouchPoints>2&&/MacIntel/.test(navigator.platform)};t.isIpadOS=function(){return navigator.maxTouchPoints&&navigator.maxTouchPoints>2&&/MacIntel/.test(navigator.platform)};t.isEnoughSpace=function(e,t,n,o,r){void 0===n&&(n="auto"),void 0===o&&(o=10),void 0===r&&(r=null);var i=t.getBoundingClientRect(),a=r?r.getBoundingClientRect():null,s=window.innerHeight,f=a?i.top-a.top:i.top,c=(r?a.bottom:s)-i.bottom,l=e.clientHeight+o;return"bottom"===n?c>=l:"top"===n?f>=l:f>=l||c>=l};t.isFormElement=function(e){return e instanceof HTMLInputElement||e instanceof HTMLTextAreaElement||e instanceof HTMLSelectElement};var o=function(e){return!!e&&("none"===window.getComputedStyle(e).display||o(e.parentElement))};t.isParentOrElementHidden=o;t.debounce=function(e,t){var o;return void 0===t&&(t=200),function(){for(var r=[],i=0;i<arguments.length;i++)r[i]=arguments[i];clearTimeout(o),o=setTimeout((function(){e.apply(n,r)}),t)}};t.dispatch=function(e,t,n){void 0===n&&(n=null);var o=new CustomEvent(e,{detail:{payload:n},bubbles:!0,cancelable:!0,composed:!1});t.dispatchEvent(o)};t.afterTransition=function(e,t){var n=function(){t(),e.removeEventListener("transitionend",n,!0)};window.getComputedStyle(e,null).getPropertyValue("transition")!==(navigator.userAgent.includes("Firefox")?"all":"all 0s ease 0s")?e.addEventListener("transitionend",n,!0):t()};t.htmlToElement=function(e){var t=document.createElement("template");return e=e.trim(),t.innerHTML=e,t.content.firstChild};t.classToClassList=function(e,t,n,o){void 0===n&&(n=" "),void 0===o&&(o="add"),e.split(n).forEach((function(e){return"add"===o?t.classList.add(e):t.classList.remove(e)}))};t.menuSearchHistory={historyIndex:-1,addHistory:function(e){this.historyIndex=e},existsInHistory:function(e){return e>this.historyIndex},clearHistory:function(){this.historyIndex=-1}}}},t={};function n(o){var r=t[o];if(void 0!==r)return r.exports;var i=t[o]={exports:{}};return e[o].call(i.exports,i,i.exports,n),i.exports}return n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n(679)})()));