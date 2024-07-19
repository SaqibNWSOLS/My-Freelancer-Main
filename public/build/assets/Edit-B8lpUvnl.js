import{r as g,o as r,c as v,w as b,a as e,b as w,d as l,e as _,f as a,g as c,F as i,v as p,t as f}from"./app-CbBjywsm.js";import{_ as k}from"./AdminLayout-BUhGWxnC.js";import{_ as y}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./logo2-BR_e6daD.js";const q={components:{AdminLayout:k},props:{categories:Array,faq:Object},data(){return{form:this.faq?{...this.faq}:{question:"",job_categories_id:"",answer:"",status:"Active"}}},methods:{submit(){this.$inertia.put(this.faq?`/faq/${this.faq.id}`:"/faq",this.form)}}},A={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},j={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},S={class:"text-xs transition-all"},V=["href"],B=e("li",null,"/",-1),F={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},L={class:"text-xs transition-all text-primary"},U=["href"],D={class:"col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center"},E={class:"card lg:w-[50%]"},M=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg font-medium"},"Edit Faq")])],-1),I={class:"checkout-detail"},z={class:"flex flex-col gap-3 form-group"},C={class:"flex flex-col gap-1"},N=e("label",{for:"countries_id",class:"text-xs font-medium text-primary"},"Category:",-1),O={class:"flex flex-col gap-3 form-group"},Q=["value"],T=["value"],G=["value"],H=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Question",-1),J=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Answer",-1),K=e("label",{for:"status",class:"text-xs font-medium text-primary"},"Status:",-1),P={class:"flex flex-col gap-3 form-group"},R=e("option",{value:"Active"},"Active",-1),W=e("option",{value:"In-Active"},"Inactive",-1),X=[R,W],Y=e("div",{class:"flex flex-wrap gap-1"},[e("button",{type:"submit",class:"text-white btn btn-primary",style:{"text-align":"right"}},"Submit")],-1);function Z(u,o,x,$,s,m){const h=g("AdminLayout");return r(),v(h,null,{"header-content":b(()=>[e("ul",A,[e("li",j,[e("span",S,[e("a",{href:u.route("admin-dashboard")},"Dashboard",8,V)])]),B,e("li",F,[e("span",L,[e("a",{href:u.route("faq.index")},"Faq's",8,U)])])])]),default:b(()=>[e("div",D,[e("div",E,[M,e("div",I,[e("form",{onSubmit:o[4]||(o[4]=w((...t)=>m.submit&&m.submit(...t),["prevent"]))},[e("div",z,[e("div",C,[N,e("div",O,[l(e("select",{"onUpdate:modelValue":o[0]||(o[0]=t=>s.form.job_categories_id=t),id:"countries_id",class:"dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"},[(r(!0),a(i,null,c(x.categories,t=>(r(),a(i,{key:t.id},[e("option",{value:t.id},f(t.name),9,Q),(r(!0),a(i,null,c(t.child_categories,d=>(r(),a(i,{key:d.id},[e("option",{value:d.id,disabled:"",class:"font-bold"},"  "+f(d.name),9,T),(r(!0),a(i,null,c(d.sub_child_categories,n=>(r(),a("option",{key:n.id,value:n.id},"   "+f(n.name),9,G))),128))],64))),128))],64))),128))],512),[[_,s.form.job_categories_id]])]),H,l(e("input",{"onUpdate:modelValue":o[1]||(o[1]=t=>s.form.question=t),type:"text",id:"name",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[p,s.form.question]]),J,l(e("textarea",{"onUpdate:modelValue":o[2]||(o[2]=t=>s.form.answer=t),class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[p,s.form.answer]])]),K,e("div",P,[l(e("select",{"onUpdate:modelValue":o[3]||(o[3]=t=>s.form.status=t),id:"status",class:"dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"},X,512),[[_,s.form.status]])]),Y])],32)])])])]),_:1})}const re=y(q,[["render",Z]]);export{re as default};
