import{T as m,r as f,o as d,c as _,w as l,a as e,b as p,d as i,e as n,f as c,g as u,F as x,v as h,t as g}from"./app--c-aVRkE.js";import{_ as v}from"./AdminLayout-DAh8LFFw.js";import{_ as y}from"./_plugin-vue_export-helper-DlAUqK2U.js";import"./logo2-BR_e6daD.js";const w={components:{AdminLayout:v},props:{jobCategory:Object,jobCategories:Array},setup(s){const t=m({parent_id:s.jobCategory.parent_id,name:s.jobCategory.name,status:s.jobCategory.status});function a(){t.put(route("jobCategory.update",s.jobCategory.id))}return{form:t,submit:a}}},k={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},C={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},j={class:"text-xs transition-all"},A=["href"],S=e("li",null,"/",-1),B={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},L={class:"text-xs transition-all text-primary"},V=["href"],D={class:"col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center"},E={class:"card lg:w-[50%]"},M=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg font-medium"},"Edit Job Category")])],-1),U={class:"checkout-detail"},F={class:"flex flex-col gap-3 form-group"},J={class:"flex flex-col gap-1"},N=e("label",{for:"parent_id",class:"text-xs font-medium text-primary"},"Country:",-1),T={class:"flex flex-col gap-3 form-group"},z=e("option",{value:"0"},"select below",-1),I=["value"],O={class:"flex flex-col gap-1"},q=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Category Name",-1),G=e("label",{for:"status",class:"text-xs font-medium text-primary"},"Status:",-1),H={class:"flex flex-col gap-3 form-group"},K=e("option",{value:"active"},"Active",-1),P=e("option",{value:"inactive"},"Inactive",-1),Q=[K,P],R=e("div",{class:"flex flex-wrap gap-1"},[e("button",{type:"submit",class:"text-white btn btn-primary",style:{"text-align":"right"}},"Submit")],-1);function W(s,t,a,r,X,Y){const b=f("AdminLayout");return d(),_(b,null,{"header-content":l(()=>[e("ul",k,[e("li",C,[e("span",j,[e("a",{href:s.route("admin-dashboard")},"Dashboard",8,A)])]),S,e("li",B,[e("span",L,[e("a",{href:s.route("jobCategory.index")},"Job Categories",8,V)])])])]),default:l(()=>[e("div",D,[e("div",E,[M,e("div",U,[e("form",{onSubmit:t[3]||(t[3]=p((...o)=>r.submit&&r.submit(...o),["prevent"]))},[e("div",F,[e("div",J,[N,e("div",T,[i(e("select",{"onUpdate:modelValue":t[0]||(t[0]=o=>r.form.parent_id=o),id:"parent_id",class:"dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"},[z,(d(!0),c(x,null,u(a.jobCategories,o=>(d(),c("option",{key:o.id,value:o.id},g(o.name),9,I))),128))],512),[[n,r.form.parent_id]])])]),e("div",O,[q,i(e("input",{"onUpdate:modelValue":t[1]||(t[1]=o=>r.form.name=o),id:"name",type:"text",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[h,r.form.name]])]),G,e("div",H,[i(e("select",{"onUpdate:modelValue":t[2]||(t[2]=o=>r.form.status=o),id:"status",class:"dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"},Q,512),[[n,r.form.status]])]),R])],32)])])])]),_:1})}const oe=y(w,[["render",W]]);export{oe as default};
