import{T as u,o as r,c as d,w as i,h as a,u as s,Z as c,f,t as p,j as _,a as t,i as w,n as y,b as g}from"./app-Cc2Mfm3s.js";import{_ as b}from"./GuestLayout-CzE0ra-Z.js";import{_ as x,a as k,b as h}from"./TextInput-BSGt9H1e.js";import{P as V}from"./PrimaryButton-BGPxSaSQ.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const v=t("div",{class:"mb-4 text-sm text-gray-600"}," Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one. ",-1),B={key:0,class:"mb-4 font-medium text-sm text-green-600"},N={class:"flex items-center justify-end mt-4"},j={__name:"ForgotPassword",props:{status:{type:String}},setup(o){const e=u({email:""}),m=()=>{e.post(route("password.email"))};return(P,l)=>(r(),d(b,null,{default:i(()=>[a(s(c),{title:"Forgot Password"}),v,o.status?(r(),f("div",B,p(o.status),1)):_("",!0),t("form",{onSubmit:g(m,["prevent"])},[t("div",null,[a(x,{for:"email",value:"Email"}),a(k,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":l[0]||(l[0]=n=>s(e).email=n),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(h,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),t("div",N,[a(V,{class:y({"opacity-25":s(e).processing}),disabled:s(e).processing},{default:i(()=>[w(" Email Password Reset Link ")]),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{j as default};
