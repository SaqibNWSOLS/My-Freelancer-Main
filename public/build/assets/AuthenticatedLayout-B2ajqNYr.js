import{o as r,f as n,a as e,d as m,g as u,H as _,I as p,r as f,b as l,q as v,F as g}from"./app-DyAykdSV.js";import{_ as $}from"./logo2-BR_e6daD.js";import{u as h}from"./vue-router-C7nEOktr.js";import{_ as d}from"./_plugin-vue_export-helper-DlAUqK2U.js";const y={},x={class:"relative text-left"},w=e("input",{type:"text",class:"py-2 w-80 bg-white px-3 text-sm border text-gray-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent",placeholder:"Search Freelancers",style:{"border-radius":"10px"}},null,-1),b=e("div",{class:"absolute right-1 top-1/2 -translate-y-1/2 text-gray-400"},[e("svg",{class:"h-5 w-5",fill:"none",stroke:"currentColor",viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M21 21l-4.35-4.35a8.5 8.5 0 1 0-2.12 2.12L21 21zm-9-3a5 5 0 1 1 0-10 5 5 0 0 1 0 10z"})])],-1),M=[w,b];function k(s,t){return r(),n("div",x,M)}const I=d(y,[["render",k]]),S=s=>(_("data-v-684794d7"),s=s(),p(),s),B=["href"],P=S(()=>e("i",{class:"mdi mdi-plus mr-2"},null,-1)),j={__name:"PostButton",setup(s){return h(),(t,i)=>t.$page.props.user.roles.includes("Employer")?(r(),n("a",{key:0,href:t.route("job.create"),style:{color:"white"},class:"py-1 text-xs btn-text"},[P,m(" Post Job ")],8,B)):u("",!0)}},V=d(j,[["__scopeId","data-v-684794d7"]]),F=s=>(_("data-v-97df4245"),s=s(),p(),s),L={class:"text-center relative"},N=F(()=>e("i",{class:"mdi mdi-account mr-1"},null,-1)),z={key:0,class:"mdi mdi-menu-up"},A={key:1,class:"mdi mdi-menu-down"},C={class:"py-2 px-4 cursor-pointer hover:bg-gray-100"},H=["href"],E=["href"],q=["href"],J={class:"py-2 px-4 cursor-pointer hover:bg-gray-100"},O=["href"],R={__name:"ProfileMenu",setup(s){const t=f(!1);h();const i=()=>{t.value=!t.value};return(o,a)=>(r(),n("div",L,[e("div",{onMouseover:a[1]||(a[1]=(...c)=>o.openMenu&&o.openMenu(...c)),onMouseleave:a[2]||(a[2]=(...c)=>o.closeMenu&&o.closeMenu(...c))},[e("button",{class:"px-2 h-7 text-xs btn-text",onClick:i},[N,t.value?(r(),n("i",z)):(r(),n("i",A))]),t.value?(r(),n("div",{key:0,onMouseover:a[0]||(a[0]=(...c)=>o.openMenu&&o.openMenu(...c)),style:{width:"max-content"},class:"absolute z-10 top-8 right-0 bg-white shadow-md rounded-md mt-1"},[e("ul",null,[e("li",C,[e("a",{href:o.route("profile.index")},"Manage Profile",8,H)]),o.$page.props.user.roles.includes("Freelancer")?(r(),n("li",{key:0,class:"py-2 px-4 cursor-pointer hover:bg-gray-100",href:o.route("job.create")},[e("a",{href:o.route("front-view")},"View My Page",8,q)],8,E)):u("",!0),e("li",J,[e("a",{href:o.route("logout")},"Logout",8,O)])])],32)):u("",!0)],32)]))}},T=d(R,[["__scopeId","data-v-97df4245"]]),D=s=>(_("data-v-3a104162"),s=s(),p(),s),G={class:"bg-blue-100 p-4"},K={class:"max-w-screen-lg mx-auto"},Q={class:"flex justify-center items-center space-x-4"},U={class:"flex-grow"},W=["href"],X=D(()=>e("img",{src:$,alt:"Myfreelancer Logo",class:"w-42 h-8 object-cover"},null,-1)),Y=[X],Z={class:""},ee={class:"flex space-x-2 items-center"},se={__name:"AuthHeader",setup(s){return h(),(t,i)=>(r(),n("div",G,[e("div",K,[e("div",Q,[e("div",U,[e("a",{href:t.route("/")},Y,8,W)]),e("div",Z,[l(I)]),e("div",ee,[l(V),l(T)])])])]))}},te=d(se,[["__scopeId","data-v-3a104162"]]),oe={class:"container"},re={class:"max-w-screen-lg mx-auto"},ne={class:"mt-8"},de={__name:"AuthenticatedLayout",setup(s){return(t,i)=>(r(),n(g,null,[l(te),e("div",oe,[e("div",re,[e("div",ne,[v(t.$slots,"default")])])])],64))}};export{de as _};
