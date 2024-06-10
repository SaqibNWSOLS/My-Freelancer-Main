import{o as r,f as n,b as e,d as g,g as u,E as _,G as p,r as y,F as f,s as $,t as b,a as l,z as x}from"./app-ByFFVmqj.js";import{_ as w}from"./logo2-BR_e6daD.js";import{u as h}from"./vue-router-Nys75ATg.js";import{_ as d}from"./_plugin-vue_export-helper-DlAUqK2U.js";const M={},k={class:"relative text-left"},S=e("input",{type:"text",class:"py-2 w-80 bg-white px-3 text-sm border text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent",placeholder:"Search Freelancers",style:{"border-radius":"10px"}},null,-1),I=e("div",{class:"absolute right-1 top-1/2 -translate-y-1/2 text-gray-400"},[e("svg",{class:"h-5 w-5",fill:"none",stroke:"currentColor",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M21 21l-4.35-4.35a8.5 8.5 0 1 0-2.12 2.12L21 21zm-9-3a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"})])],-1),P=[S,I];function B(s,t){return r(),n("div",k,P)}const V=d(M,[["render",B]]),j=s=>(_("data-v-4d6e148d"),s=s(),p(),s),L=["href"],z=j(()=>e("i",{class:"mdi mdi-plus mr-2"},null,-1)),A={__name:"PostButton",setup(s){return h(),(t,i)=>t.$page.props.user.roles.includes("Employer")?(r(),n("a",{key:0,href:t.route("job.create"),class:"py-1 text-xs btn-text"},[z,g(" Post Job ")],8,L)):u("",!0)}},C=d(A,[["__scopeId","data-v-4d6e148d"]]),F=s=>(_("data-v-567d8b53"),s=s(),p(),s),N={class:"text-center relative"},E=F(()=>e("i",{class:"mdi mdi-account mr-1"},null,-1)),H={key:0,class:"mdi mdi-menu-up"},D={key:1,class:"mdi mdi-menu-down"},G={class:"py-2 px-4 cursor-pointer hover:bg-gray-100"},J=["href"],O=["href"],R=["href"],T=["value"],q={class:"py-2 px-4 cursor-pointer hover:bg-gray-100"},K=["href"],Q={__name:"ProfileMenu",setup(s){const t=y(!1),i=[{title:"View Cash Account"},{title:"Payment Methods"},{title:"Help"}];h();const v=()=>{t.value=!t.value};return(o,c)=>(r(),n("div",N,[e("div",{onMouseover:c[1]||(c[1]=(...a)=>o.openMenu&&o.openMenu(...a)),onMouseleave:c[2]||(c[2]=(...a)=>o.closeMenu&&o.closeMenu(...a))},[e("button",{class:"px-2 h-7 text-xs btn-text",onClick:v},[E,t.value?(r(),n("i",H)):(r(),n("i",D))]),t.value?(r(),n("div",{key:0,onMouseover:c[0]||(c[0]=(...a)=>o.openMenu&&o.openMenu(...a)),style:{width:"max-content"},class:"absolute z-10 top-8 right-0 bg-white shadow-md rounded-md mt-1"},[e("ul",null,[e("li",G,[e("a",{href:o.route("profile.index")},"Manage Profile",8,J)]),o.$page.props.user.roles.includes("Freelancer")?(r(),n("li",{key:0,class:"py-2 px-4 cursor-pointer hover:bg-gray-100",href:o.route("job.create")},[e("a",{href:o.route("front-view")},"View My Page",8,R)],8,O)):u("",!0),(r(),n(f,null,$(i,(a,m)=>e("li",{key:m,value:m,class:"py-2 px-4 cursor-pointer hover:bg-gray-100"},b(a.title),9,T)),64)),e("li",q,[e("a",{href:o.route("logout")},"Logout",8,K)])])],32)):u("",!0)],32)]))}},U=d(Q,[["__scopeId","data-v-567d8b53"]]),W=s=>(_("data-v-c98d68a9"),s=s(),p(),s),X={class:"bg-blue-500 p-4"},Y={class:"max-w-screen-lg mx-auto"},Z={class:"flex justify-center items-center space-x-4"},ee={class:"flex-grow"},se=["href"],te=W(()=>e("img",{src:w,alt:"Myfreelancer Logo",class:"w-42 h-8 object-cover"},null,-1)),oe=[te],re={class:""},ne={class:"flex space-x-2 items-center"},ae={__name:"AuthHeader",setup(s){return h(),(t,i)=>(r(),n("div",X,[e("div",Y,[e("div",Z,[e("div",ee,[e("a",{href:t.route("dashboard")},oe,8,se)]),e("div",re,[l(V)]),e("div",ne,[l(C),l(U)])])])]))}},ce=d(ae,[["__scopeId","data-v-c98d68a9"]]),ie={class:"container"},le={class:"max-w-screen-lg mx-auto"},de={class:"mt-8"},me={__name:"AuthenticatedLayout",setup(s){return(t,i)=>(r(),n(f,null,[l(ce),e("div",ie,[e("div",le,[e("div",de,[x(t.$slots,"default")])])])],64))}};export{me as _};