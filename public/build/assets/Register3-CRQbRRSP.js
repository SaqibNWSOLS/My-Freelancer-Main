import{u as F,r as B,e as T,S as N}from"./index-B1M0Yu7j.js";import{R as A,a as D}from"./RegisterVerifyEmailStep.vue_vue_type_style_index_0_scoped_cffcf5ce_lang-DuWZbGWU.js";import{T as y,p as f,k as O,o as l,f as i,u as o,b as w,a as e,h,j as r,t as g,i as n,d as P,v as U,F as M,D as H,G as S,H as k,c as q,w as G}from"./app--c-aVRkE.js";import{n as z}from"./vue3-otp-input-D1scaW7m.js";import{_ as C}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{_ as J}from"./Auth-C_lx2fMX.js";/* empty css                                                                       */import"./Header.vue_vue_type_script_setup_true_lang-DP9I6bPZ.js";import"./logo2-BR_e6daD.js";const _=t=>(S("data-v-cffcf5ce"),t=t(),k(),t),K={key:0},L=_(()=>e("div",{class:"flex items-center"},[e("hr",{class:"flex-1"}),e("p",{class:"mx-1 min-w-max text-gray-500"},"Verify Email"),e("hr",{class:"flex-1"})],-1)),Q={class:"h-60 flex flex-col justify-center"},W=_(()=>e("p",{class:"text-center text-gray-700 text-lg"}," Please enter the 6-digit code sent to your email ",-1)),X={class:"flex justify-center space-x-2 mt-4"},Y={key:0,class:"w-full text-center mt-4",style:{color:"green"}},Z={class:"w-full text-center mt-4"},ee={key:0,class:"text-danger"},te={key:1,class:"text-center text-red-500"},se={class:"text-right"},oe=["disabled"],le=_(()=>e("i",{class:"mdi mdi-check ml-2"},null,-1)),ae={class:"flex justify-end mt-5"},ie={class:"md:w-3/3 text-right"},ne={class:"text-center mb-10"},ce=["href"],re={key:1},de={class:"flex h-60 justify-center flex-col space-y-3"},ue=_(()=>e("label",{class:"block text-gray-700",for:"email"},"Email *",-1)),pe={class:"text-danger"},me={class:"flex justify-end flex-col md:flex-row"},fe=["disabled"],he=_(()=>e("i",{class:"mdi mdi-step-forward ml-2"},null,-1)),_e={class:"flex justify-end mt-5"},xe={class:"md:w-3/3 text-right"},ve={class:"text-center mb-10"},ye=["href"],ge={__name:"RegisterVerifyEmailStep",props:{step:Number,setBasicInfo:Function,nextStep:Function,flash:String},setup(t){const s=y({codeInputs:""}),d=f("");let a=f(!0),x=f(!1),v=f(!1);const I=()=>{a.value=!1,x.value=!0,console.log(a.value)},b=()=>{a.value=!0,x.value=!1,console.log(a.value)},V=()=>{s.post(route("step3"),{onFinish:p=>{v.value=!1}})};y({});const u=y({email:""}),$=F({email:{required:B,email:T}},u),j=O(()=>$.value.$invalid===!1),E=()=>{H.post(route("resend-email-otp"),{},{onFinish:()=>{v.value=!0,console.log(1)}})},R=()=>{u.post(route("change-email"),{onSuccess:()=>b()})};return(p,c)=>(l(),i(M,null,[o(a)?(l(),i("div",K,[t.step===2?(l(),i("form",{key:0,onSubmit:w(V,["prevent"]),class:"flex flex-col space-y-7",novalidate:""},[L,e("div",Q,[W,e("div",X,[h(o(z),{value:o(s).codeInputs,"onUpdate:value":c[0]||(c[0]=m=>o(s).codeInputs=m),"num-inputs":6,class:"otp-input"},null,8,["value"])]),o(v)?(l(),i("div",Y,"A new OTP has been sent, kindly verify")):r("",!0),e("div",Z,[t.flash?(l(),i("div",ee,g(t.flash),1)):r("",!0)]),d.value?(l(),i("p",te,g(d.value),1)):r("",!0)]),e("div",se,[e("button",{disabled:o(s).codeInputs.length!==6,type:"submit",class:"btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded"},[n(" Verify "),le],8,oe)])],32)):r("",!0),e("div",ae,[e("div",ie,[e("p",null,[n("Having an issue? Click to "),e("a",{href:"#",class:"text-primary",onClick:E},"resend OTP")]),e("p",null,[n("Click to verify a different email?"),e("a",{href:"#",class:"text-primary",onClick:I}," Change email")]),e("p",ne,[n(" Click here if you want to cancel the registration process? "),e("a",{href:p.route("logout"),class:"text-primary"},"Abort",8,ce)])])])])):r("",!0),o(x)?(l(),i("div",re,[e("form",{onSubmit:w(R,["prevent"]),novalidate:"",class:"flex flex-col space-y-7"},[e("div",de,[e("div",null,[ue,P(e("input",{id:"email",type:"email",class:"form-input mt-1 block w-full",onInput:c[1]||(c[1]=(...m)=>p.checkEmail&&p.checkEmail(...m)),"onUpdate:modelValue":c[2]||(c[2]=m=>o(u).email=m)},null,544),[[U,o(u).email]]),e("p",pe,g(o(u).errors.email),1)])]),e("div",me,[e("button",{disabled:!j.value,type:"submit",class:"btn btn-primary text-lg bg-primary text-white py-2 px-4 pr-10 pl-10 rounded"},[n(" Proceed "),he],8,fe)])],32),e("div",_e,[e("div",xe,[e("p",null,[n("Continue using the? "),e("a",{href:"#",class:"text-primary",onClick:b},"previous email")]),e("p",ve,[n(" Click here if you want to cancel the registration process? "),e("a",{href:p.route("logout"),class:"text-primary"},"Abort",8,ye)])])])])):r("",!0)],64))}},be=C(ge,[["__scopeId","data-v-cffcf5ce"]]),we=t=>(S("data-v-61d739fa"),t=t(),k(),t),Se={class:"container mx-auto max-w-screen-lg mt-10"},ke={class:"flex md:flex-row mt-10 shadow-lg rounded-lg overflow-hidden"},Ce={class:"hidden md:flex items-center justify-center w-full md:w-1/2 p-10 bg-primary"},Ie={class:"w-full md:w-1/2 bg-white p-10 flex flex-col gap-7"},Ve=we(()=>e("h4",{class:"text-2xl text-center text-primary"},"Sign Up",-1)),$e={__name:"Register3",props:{flash:Object},setup(t){const s=f(2),d=()=>++s.value,a=()=>--s.value;return(x,v)=>(l(),q(J,null,{default:G(()=>[e("div",Se,[e("div",ke,[e("div",Ce,[h(N)]),e("div",Ie,[Ve,h(A,{step:s.value,nextStep:d},null,8,["step"]),h(D,{step:s.value,previousStep:a,nextStep:d},null,8,["step"]),h(be,{step:s.value,flash:t.flash},null,8,["step","flash"])])])])]),_:1}))}},Pe=C($e,[["__scopeId","data-v-61d739fa"]]);export{Pe as default};
