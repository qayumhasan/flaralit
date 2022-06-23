(window.webpackJsonp=window.webpackJsonp||[]).push([[16,83],{1009:function(t,e,n){"use strict";n.r(e);var r=n(105),o={props:{codesRemaining:{type:Number,required:!0,default:0}},data:()=>({lowCodesRemainingThreshold:r.j}),computed:{hasLowCodes(){return this.codesRemaining<=this.lowCodesRemainingThreshold},codesRemainingFormatted(){return(new Intl.NumberFormat).format(this.codesRemaining)}}},c=n(125),component=Object(c.a)(o,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.codesRemaining>0?n("div",{staticClass:"d-inline-block px-3 py-1 mb-4 rounded text-white",class:t.hasLowCodes?"bg-dark-orange text-dark":"bg-success"},[t.hasLowCodes?n("font-awesome-icon",{staticClass:"mr-2",attrs:{icon:"exclamation-triangle"}}):t._e(),t._v(" "),n("span",[t._v(t._s(t.codesRemainingFormatted)+" Codes remaining")])],1):n("div",{staticClass:"bg-danger d-inline-block px-3 py-1 mb-4 rounded text-white"},[n("font-awesome-icon",{staticClass:"mr-2",attrs:{icon:"exclamation-circle"}}),t._v(" "),n("span",[t._v("No codes remaining")])],1)])}),[],!1,null,null,null);e.default=component.exports},1826:function(t,e,n){"use strict";n.r(e);var r=n(1),o=(n(16),n(18),n(12)),c=n.n(o),d=n(14),l=n.n(d),f=n(717),m=n(105),v={props:{id:{type:Number,required:!0}},fetch(){var t=this;return Object(r.a)((function*(){t.error=null,t.loading=!0;var[e,n]=yield c()(t.$axios({method:"GET",url:"/api/selfsubmissions/".concat(t.id,"/")}));t.loading=!1,e?t.error=e:(t.codesRemaining=l()(n,"data.submission.codes_remaining")||0,t.minMaxCodesFileCopy=Object(f.d)(l()(n,"data.submission.min_codes_to_upload"),l()(n,"data.submission.max_codes_to_upload")),t.$emit("load"))}))()},data:()=>({codesRemaining:0,loading:!0,error:null,minMaxCodesFileCopy:m.c}),computed:{detailsUrl(){return"/partners/products/".concat(this.id,"/details")}}},h=n(125),component=Object(h.a)(v,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.loading?n("div",{staticClass:"py-5"},[n("Loader")],1):t.error?n("div",{staticClass:"text-center"},[n("h2",{staticClass:"text-left"},[t._v("\n      Upload codes\n    ")]),t._v(" "),n("BrokenTaco",{staticClass:"mx-auto mb-3"}),t._v(" "),t._m(0),t._v(" "),n("button",{staticClass:"btn btn-outline-secondary d-flex align-items-center mx-auto",attrs:{disabled:t.loading},on:{click:t.$fetch}},[t._v("\n      Refresh\n    ")])],1):n("div",[n("h2",{staticClass:"mb-4"},[t._v("\n      Upload codes\n    ")]),t._v(" "),n("CodesRemainingLabel",{staticClass:"text-center",attrs:{"codes-remaining":t.codesRemaining}}),t._v(" "),n("ul",{staticClass:"pl-3 mb-4"},[n("li",[t._v(t._s(t.minMaxCodesFileCopy))]),t._v(" "),n("li",[t._v("No duplicates. Please randomize.")]),t._v(" "),n("li",[t._v("Format your CSV file in plain text.")])]),t._v(" "),n("div",{staticClass:"text-right"},[n("nuxt-link",{attrs:{to:t.detailsUrl}},[t._v("\n        Upload codes\n      ")])],1)],1)])}),[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("p",[t._v("\n      We can’t seem to access this data.\n      "),n("br"),t._v("\n      Refresh to try again.\n    ")])}],!1,null,null,null);e.default=component.exports;installComponents(component,{Loader:n(736).default,CodesRemainingLabel:n(1009).default})},717:function(t,e,n){"use strict";n.d(e,"i",(function(){return C})),n.d(e,"a",(function(){return w})),n.d(e,"k",(function(){return L})),n.d(e,"j",(function(){return U})),n.d(e,"f",(function(){return z})),n.d(e,"g",(function(){return E})),n.d(e,"e",(function(){return N})),n.d(e,"h",(function(){return P})),n.d(e,"b",(function(){return M})),n.d(e,"c",(function(){return O})),n.d(e,"d",(function(){return T}));n(82);var r=n(14),o=n.n(r),c=n(749),d=n.n(c),l=(n(752),n(757)),f=n.n(l),m=n(760),v=n.n(m),h=n(33),_=n.n(h),x=n(105);function C(){var{$store:t,$router:e,$route:n,$experiments:r}=this,{dispatch:o}=t,{submissionId:c}=n.params;o("productSubmission/submitSubmission"),r.convert({"self-submission-submitted":1}),e.push({path:"/partners/products/".concat(c,"/success")})}var y=(t,e)=>t&&t.length<=e,w={name:75,url:200,support_email:254,description:1300,redemption_url:500,redemption_instructions:160,features:100},S=(t,e,n,r)=>{var c,{product:d}=t;return!(!d||!y(d.name,w.name)||d.url&&!y(d.url,w.url)||d.url&&(c=d.url,!/[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-zA-Z0-9()]{1,18}\b([-a-zA-Z0-9()@:%_+.~#?&//=]*)/.test(c))||d.support_email&&!y(d.support_email,w.support_email)||d.support_email&&!(t=>/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(t))(d.support_email)||!d.categories||!(d.categories.length>0)||!(d.categories.length<=3)||o()(r,"product.support_phone_number[0]"))},R=(t,e,n,r)=>{var{story:c}=t;return!(!c||o()(r,"main_image.image")||!((t,e)=>{var n=o()(t,"additional_images",[]);if(!n||!n.length)return!0;if(n.length>5)return!1;for(var i=0;i<n.length;i+=1)if(o()(e,"additional_images[".concat(i,"].image")))return!1;return!0})(e,r))},$=t=>{var{product:e={}}=t;return!!y(e.description,w.description)},k=(t,e,n)=>{var r=parseFloat(t||0);if(isNaN(r))return!1;var o=String(r).split(".");return!(o[0].length>e||o[1]&&o[1].length>n)},F=t=>{var{plans:e,product:n}=t,r=e[0].original_price?parseFloat(e[0].original_price):0,o=e[0].show_original_price,c=o?!!o:0!==r;return!!(e&&e.length>0&&(e[0].is_freebie||e[0].price)&&r>=0&&k(e[0].price,x.p,x.o)&&k(r,x.m,x.l)&&(e[0].is_freebie||!c||((t,e)=>{if(e>0){var n=parseFloat(t);return parseFloat(e)>n}return!0})(e[0].price,r))&&(t=>!t.features.length||!t.features.find((t=>!(t.feature&&y(t.feature,w.features)))))(n))},A=(t,e)=>{if("codes"===t.product_type){var n=o()(e,"assetCode.id"),r=o()(t,"product.redemption_url"),c=o()(t,"redemption_instructions");return!(r&&r.length>w.redemption_url)&&(!(!n&&r||n&&!r)&&!!(t=>!(!t||!t.length||t.find((t=>{var{instruction:e}=t;return!y(e,w.redemption_instructions)}))))(c))}return o()(e,"assetFile.file")},j=(t,e,n,r)=>!(((t,e)=>"codes"===t.product_type?o()(e,"assetCode.file"):o()(e,"assetFile.file"))(t,r)||!A(t,n)||((t,e)=>"codes"===t.product_type?o()(e,"assetCode.file.isUploading"):o()(e,"assetFile.file.isUploading"))(t,n)),L={overview:S,product:R,content:$,pricing:F,fileUpload:j},U=(t,e,n,r)=>d()(L,((o,c)=>o&&c(t,e,n,r)),!0);function z(t){return o()(this.$store.state.productSubmission.editingSubmission,t)}function E(t){var{target:e}=t,{name:n,value:r}=e;this.$store.dispatch("productSubmission/setValueAndSave",{keyPath:n,value:r})}function N(t,e){return{get(){return o()(this.$store.state.productSubmission.editingSubmission,t||this.keyPath,e)},set(e){var n=e;"string"==typeof e&&(n="number"===this.inputType?parseFloat(n):n),this.$store.dispatch("productSubmission/setValueAndSave",{keyPath:t||this.keyPath,value:n})}}}function P(t){return{get(){return!!o()(this.$store.state.productSubmission.editingSubmissionErrors,t||this.keyPath,!1)}}}function M(t){return!!f()(t,(t=>f()(t,(t=>Array.isArray(t)||_()(t)?M(t):t&&t.length))))}function O(t){return Array.isArray(t)||_()(t)?v()(t,(t=>Array.isArray(t)||_()(t)?O(t):t)):t}var T=function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:x.b,e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:x.a;return"min. ".concat(t.toLocaleString()," - max. ").concat(e.toLocaleString()," purchase-ready codes")}},718:function(t,e){var n=RegExp("[\\u200d\\ud800-\\udfff\\u0300-\\u036f\\ufe20-\\ufe2f\\u20d0-\\u20ff\\ufe0e\\ufe0f]");t.exports=function(t){return n.test(t)}},722:function(t,e){t.exports=function(t,e,n,r){for(var o=t.length,c=n+(r?1:-1);r?c--:++c<o;)if(e(t[c],c,t))return c;return-1}},731:function(t,e,n){var r=n(732);t.exports=function(t){var e=r(t),n=e%1;return e==e?n?e-n:e:0}},732:function(t,e,n){var r=n(400),o=1/0;t.exports=function(t){return t?(t=r(t))===o||t===-1/0?17976931348623157e292*(t<0?-1:1):t==t?t:0:0===t?t:0}},735:function(t,e,n){var r=n(169),o=n(236),c=n(403),d=n(30);t.exports=function(t,e){return(d(t)?r:c)(t,o(e,3))}},749:function(t,e,n){var r=n(750),o=n(399),c=n(236),d=n(751),l=n(30);t.exports=function(t,e,n){var f=l(t)?r:d,m=arguments.length<3;return f(t,c(e,4),n,m,o)}},750:function(t,e){t.exports=function(t,e,n,r){var o=-1,c=null==t?0:t.length;for(r&&c&&(n=t[++o]);++o<c;)n=e(n,t[o],o,t);return n}},751:function(t,e){t.exports=function(t,e,n,r,o){return o(t,(function(t,o,c){n=r?(r=!1,t):e(n,t,o,c)})),n}},752:function(t,e,n){var r=n(237),o=n(106),c=n(73),d=n(753),l=n(754);t.exports=function(t){if(null==t)return 0;if(c(t))return d(t)?l(t):t.length;var e=o(t);return"[object Map]"==e||"[object Set]"==e?t.size:r(t).length}},753:function(t,e,n){var r=n(84),o=n(30),c=n(58);t.exports=function(t){return"string"==typeof t||!o(t)&&c(t)&&"[object String]"==r(t)}},754:function(t,e,n){var r=n(755),o=n(718),c=n(756);t.exports=function(t){return o(t)?c(t):r(t)}},755:function(t,e,n){var r=n(402)("length");t.exports=r},756:function(t,e){var n="[\\ud800-\\udfff]",r="[\\u0300-\\u036f\\ufe20-\\ufe2f\\u20d0-\\u20ff]",o="\\ud83c[\\udffb-\\udfff]",c="[^\\ud800-\\udfff]",d="(?:\\ud83c[\\udde6-\\uddff]){2}",l="[\\ud800-\\udbff][\\udc00-\\udfff]",f="(?:"+r+"|"+o+")"+"?",m="[\\ufe0e\\ufe0f]?",v=m+f+("(?:\\u200d(?:"+[c,d,l].join("|")+")"+m+f+")*"),h="(?:"+[c+r+"?",r,d,l,n].join("|")+")",_=RegExp(o+"(?="+o+")|"+h+v,"g");t.exports=function(t){for(var e=_.lastIndex=0;_.test(t);)++e;return e}},757:function(t,e,n){var r=n(758)(n(759));t.exports=r},758:function(t,e,n){var r=n(236),o=n(73),c=n(107);t.exports=function(t){return function(e,n,d){var l=Object(e);if(!o(e)){var f=r(n,3);e=c(e),n=function(t){return f(l[t],t,l)}}var m=t(e,n,d);return m>-1?l[f?e[m]:m]:void 0}}},759:function(t,e,n){var r=n(722),o=n(236),c=n(731),d=Math.max;t.exports=function(t,e,n){var l=null==t?0:t.length;if(!l)return-1;var f=null==n?0:c(n);return f<0&&(f=d(l+f,0)),r(t,o(e,3),f)}},760:function(t,e,n){var r=n(238),map=n(735);t.exports=function(t,e){return r(map(t,e),1)}}}]);
//# sourceMappingURL=343a4d9.modern.js.map