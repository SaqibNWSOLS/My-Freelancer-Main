import{T as x,o as m,c as u,w as n,a as e,b as f,d as a,v as d,u as o,t as c,e as _}from"./app-Cc2Mfm3s.js";import"./index-CMhTHljg.js";import{_ as h}from"./AdminLayout-DdzXYwoo.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";import"./logo2-BR_e6daD.js";const g={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},v={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},k={class:"text-xs transition-all"},w=["href"],y=e("li",null,"/",-1),A={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},S={class:"text-xs transition-all text-primary"},V=["href"],U={class:"col-span-12 lg:col-span-6 lg:col-start-4 flex justify-center"},B={class:"card lg:w-[50%]"},D=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg font-medium"},"Edit Freelancer")])],-1),E={class:"checkout-detail"},M={class:"flex flex-col gap-3 form-group"},j={class:"flex flex-col gap-1"},F=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Name",-1),I={class:"flex flex-col gap-1"},N=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Email",-1),T={class:"text-danger"},z={class:"flex flex-col gap-1"},C=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Phone",-1),O={class:"text-danger"},P={class:"flex flex-col gap-1"},$=e("label",{for:"name",class:"text-xs font-medium text-primary"},"Address",-1),q=e("label",{for:"status",class:"text-xs font-medium text-primary"},"Status:",-1),G={class:"flex flex-col gap-3 form-group"},H=e("option",{value:"Active"},"Active",-1),J=e("option",{value:"In-Active"},"Inactive",-1),K=[H,J],L=e("div",{class:"flex flex-wrap gap-1"},[e("button",{type:"submit",class:"text-white btn btn-primary",style:{"text-align":"right"}},"Submit")],-1),Z={__name:"Edit",props:{countries:Array,states:Array,user:Object},setup(p){const l=p,t=x(l.user),b=()=>{t.put(route("freelancers.update",{freelancer:l.user}),{onSuccess:()=>{console.log(1)}})};return(i,r)=>(m(),u(h,null,{"header-content":n(()=>[e("ul",g,[e("li",v,[e("span",k,[e("a",{href:i.route("admin-dashboard")},"Dashboard",8,w)])]),y,e("li",A,[e("span",S,[e("a",{href:i.route("freelancers.index")},"Freelancer",8,V)])])])]),default:n(()=>[e("div",U,[e("div",B,[D,e("div",E,[e("form",{onSubmit:f(b,["prevent"]),novalidate:""},[e("div",M,[e("div",j,[F,a(e("input",{"onUpdate:modelValue":r[0]||(r[0]=s=>o(t).name=s),type:"text",id:"name",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[d,o(t).name]])]),e("div",I,[N,a(e("input",{"onUpdate:modelValue":r[1]||(r[1]=s=>o(t).email=s),type:"text",id:"name",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[d,o(t).email]]),e("p",T,c(o(t).errors.email),1)]),e("div",z,[C,a(e("input",{"onUpdate:modelValue":r[2]||(r[2]=s=>o(t).phone=s),type:"text",id:"name",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[d,o(t).phone]]),e("p",O,c(o(t).errors.phone),1)]),e("div",P,[$,a(e("input",{"onUpdate:modelValue":r[3]||(r[3]=s=>o(t).address=s),type:"text",id:"name",class:"p-[11px] dark:border-border-dark dark:bg-sidebar-dark2 w-full border border-border-light rounded-5 text-xs text-content"},null,512),[[d,o(t).address]])]),q,e("div",G,[a(e("select",{"onUpdate:modelValue":r[4]||(r[4]=s=>o(t).status=s),id:"status",class:"dark:bg-sidebar-dark2 dark:border-border-dark p-[11px] bg-white text-title border border-border-light rounded-5 w-full text-xs"},K,512),[[_,o(t).status]])]),L])],32)])])])]),_:1}))}};export{Z as default};
