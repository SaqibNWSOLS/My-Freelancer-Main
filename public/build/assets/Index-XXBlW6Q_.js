import{_ as h}from"./AdminLayout-BCSX-UL-.js";import{_ as u}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{l as m,o as a,c as f,w as n,a as e,d as p,f as l,m as b,F as x,t as r}from"./app-BdI8nGok.js";import"./logo2-BR_e6daD.js";const v={props:{countries:Array},components:{AdminLayout:h},mounted(){$(this.$refs.dataTable).DataTable()},methods:{editCountry(t){Inertia.get(route("countries.edit",t))},async deleteCountry(t){if(confirm("Are you sure you want to delete this Country?"))try{const o=await this.$inertia.delete(route("countries.destroy",t));o&&o.statusCode===200?location.reload():console.error("Failed to delete Country:",o)}catch(o){console.error("An error occurred while deleting Country:",o)}}}},y={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},g={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},w={class:"text-xs transition-all"},C=["href"],k=e("li",null,"/",-1),A={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},B={class:"text-xs transition-all text-primary"},L=["href"],N=["href"],T=e("span",{class:"mdi mdi-plus"},null,-1),D={class:"col-span-12 lg:col-span-12"},F={class:"card"},I=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg"},"Countries")])],-1),S=e("div",null,null,-1),V={class:"card-body"},q={class:"overflow-auto custom-scroll"},z={ref:"dataTable",class:"table equal-space head-table"},E=e("thead",null,[e("tr",{class:"dark:bg-sidebar-dark2"},[e("th",null,"No"),e("th",null,"Country Name"),e("th",null,"Code"),e("th",null,"Status"),e("th",null,"Action")])],-1),j={class:"min-w-[1.25rem]"},G={class:"min-w-[8.125rem]"},H={class:"min-w-[11.125rem]"},J={class:"min-w-[11.125rem]"},K=["href"],M=e("span",{class:"mdi mdi-database-edit text-lg text-[green]"},null,-1),O=[M],P=["onClick"],Q=e("span",{class:"mdi mdi-delete-empty-outline text-lg text-[red]"},null,-1),R=[Q];function U(t,o,i,W,X,d){const c=m("AdminLayout");return a(),f(c,null,{"header-content":n(()=>[e("ul",y,[e("li",g,[e("span",w,[e("a",{href:t.route("admin-dashboard")},"Dashboard",8,C)])]),k,e("li",A,[e("span",B,[e("a",{href:t.route("countries.index")},"Countries",8,L)])])]),e("div",null,[e("a",{class:"text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out",href:t.route("countries.create"),style:{float:"right"}},[T,p(" Add ")],8,N)])]),default:n(()=>[e("div",D,[e("div",F,[I,S,e("div",V,[e("div",q,[e("table",z,[E,e("tbody",null,[(a(!0),l(x,null,b(i.countries,(s,_)=>(a(),l("tr",{key:s.id},[e("td",j,r(_+1),1),e("td",G,r(s.name),1),e("td",H,r(s.code),1),e("td",J,r(s.status),1),e("td",null,[e("a",{href:t.route("countries.edit",s.id),lass:"hover:-translate-y-1 hover:transition-all hover:ease-in-out",style:{margin:"10px"}},O,8,K),e("button",{onClick:Y=>d.deleteCountry(s.id),class:"hover:-translate-y-1 hover:transition-all hover:ease-in-out"},R,8,P)])]))),128))])],512)])])])])]),_:1})}const se=u(v,[["render",U]]);export{se as default};
