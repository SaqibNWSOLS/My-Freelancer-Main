import{x as F,p as v,y as I,o as d,f as m,j as O,F as V,g as z,c as E,k as K,z as P,d as q,A as H,a as T,n as N}from"./app--c-aVRkE.js";const S={style:{display:"flex","align-items":"center"}},U=["type","inputmode","placeholder","disabled"],$={key:0},G=["innerHTML"],J=F({__name:"single-otp-input",props:{inputType:{default:"tel"},inputmode:{default:"numeric"},value:{},separator:{default:""},focus:{type:Boolean,default:!1},inputClasses:{default:""},conditionalClass:{default:""},shouldAutoFocus:{type:Boolean,default:!1},isLastChild:{type:Boolean,default:!1},placeholder:{default:""},isDisabled:{type:Boolean,default:!1}},emits:["on-change","on-keydown","on-paste","on-focus","on-blur"],setup(k,{emit:C}){const i=k,n=C,u=v(i.value||""),l=v(null),t=()=>(u.value=u.value,u.value.length>1&&(u.value=u.value.slice(0,1)),n("on-change",u.value.toString())),h=a=>a>=65&&a<=90,D=a=>a>=48&&a<=57||a>=96&&a<=105,w=a=>{i.isDisabled&&a.preventDefault();const s=a||window.event,c=s.which?s.which:s.keyCode;D(c)||i.inputType==="letter-numeric"&&h(c)||[8,9,13,37,39,46,86].includes(c)?n("on-keydown",a):s.preventDefault()},f=a=>n("on-paste",a),r=()=>(l.value.select(),n("on-focus")),y=()=>n("on-blur"),g=K(()=>["letter-numeric","number"].includes(i.inputType)?"text":i.inputType);return I(()=>i.value,(a,s)=>{a!==s&&(u.value=a)}),I(()=>i.focus,(a,s)=>{s!==a&&l.value&&i.focus&&(l.value.focus(),l.value.select())}),P(()=>{l.value&&i.focus&&i.shouldAutoFocus&&(l.value.focus(),l.value.select())}),(a,s)=>(d(),m("div",S,[q(T("input",{"data-test":"single-input",type:g.value,inputmode:a.inputmode,placeholder:a.placeholder,disabled:a.isDisabled,ref_key:"input",ref:l,min:"0",max:"9",maxlength:1,pattern:"[0-9]","onUpdate:modelValue":s[0]||(s[0]=c=>u.value=c),class:N([a.inputClasses,a.conditionalClass,{"is-complete":u.value}]),onInput:t,onKeydown:w,onPaste:f,onFocus:r,onBlur:y},null,42,U),[[H,u.value]]),!a.isLastChild&&a.separator?(d(),m("span",$,[T("span",{innerHTML:a.separator},null,8,G)])):O("",!0)]))}}),Q={style:{display:"flex"},class:"otp-input-container"},W={key:0,autocomplete:"off",name:"hidden",type:"text",style:{display:"none"}},X=8,Y=37,Z=39,R=46,ae=F({__name:"vue3-otp-input",props:{value:{default:""},numInputs:{default:4},separator:{default:""},inputClasses:{default:""},conditionalClass:{},inputType:{},inputmode:{default:"text"},shouldAutoFocus:{type:Boolean,default:!1},placeholder:{},isDisabled:{type:Boolean},shouldFocusOrder:{type:Boolean}},emits:["update:value","on-change","on-complete"],setup(k,{expose:C,emit:i}){const n=k,u=i,l=v(0),t=v([]),h=v([]);I(()=>n.value,e=>{if(e.length===n.numInputs||t.value.length===0){const o=e.split("");t.value=o}},{immediate:!0});const D=e=>{l.value=e},w=()=>{l.value=-1},f=()=>t.value.join("").length===n.numInputs?(u("update:value",t.value.join("")),u("on-complete",t.value.join(""))):"Wait until the user enters the required number of characters",r=e=>{l.value=Math.max(Math.min(n.numInputs-1,e),0)},y=()=>{r(l.value+1)},g=()=>{r(l.value-1)},a=e=>{h.value=Object.assign([],t.value),t.value[l.value]=e.toString(),h.value.join("")!==t.value.join("")&&(u("update:value",t.value.join("")),u("on-change",t.value.join("")),f())},s=e=>{e.preventDefault();const o=e.clipboardData.getData("text/plain").slice(0,n.numInputs-l.value).split("");if(n.inputType==="number"&&!o.join("").match(/^\d+$/)||n.inputType==="letter-numeric"&&!o.join("").match(/^\w+$/))return"Invalid pasted data";const j=t.value.slice(0,l.value).concat(o);return j.slice(0,n.numInputs).forEach(function(p,b){t.value[b]=p}),r(j.slice(0,n.numInputs).length),f()},c=e=>{a(e),y()},A=()=>{t.value.length>0&&(u("update:value",""),u("on-change","")),t.value=[],l.value=0},L=e=>{const o=e.split("");o.length===n.numInputs&&(t.value=o,u("update:value",t.value.join("")),u("on-complete",t.value.join("")))},M=(e,o)=>{switch(e.keyCode){case X:e.preventDefault(),a(""),g();break;case R:e.preventDefault(),a("");break;case Y:e.preventDefault(),g();break;case Z:e.preventDefault(),y();break;default:_(o);break}},_=e=>{n.shouldFocusOrder&&setTimeout(()=>{const o=t.value.join("").length;e-o>=0&&(l.value=o,t.value[e]="")},100)};return C({clearInput:A,fillInput:L}),(e,o)=>(d(),m("div",Q,[e.inputType==="password"?(d(),m("input",W)):O("",!0),(d(!0),m(V,null,z(e.numInputs,(j,p)=>{var b,x;return d(),E(J,{key:p,focus:l.value===p,value:t.value[p],separator:e.separator,"input-type":e.inputType,inputmode:e.inputmode,"input-classes":e.inputClasses,conditionalClass:(b=e.conditionalClass)==null?void 0:b[p],"is-last-child":p===e.numInputs-1,"should-auto-focus":e.shouldAutoFocus,placeholder:(x=e.placeholder)==null?void 0:x[p],"is-disabled":e.isDisabled,onOnChange:c,onOnKeydown:B=>M(B,p),onOnPaste:s,onOnFocus:B=>D(p),onOnBlur:w},null,8,["focus","value","separator","input-type","inputmode","input-classes","conditionalClass","is-last-child","should-auto-focus","placeholder","is-disabled","onOnKeydown","onOnFocus"])}),128))]))}});export{ae as n};
