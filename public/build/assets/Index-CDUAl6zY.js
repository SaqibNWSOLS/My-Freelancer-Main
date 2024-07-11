import{_}from"./AdminLayout-DAh8LFFw.js";import{_ as u}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{r as m,o as r,c as p,w as a,a as e,f as n,g as f,F as b,t as o}from"./app--c-aVRkE.js";import"./logo2-BR_e6daD.js";const x={props:{freelancers:Array},components:{AdminLayout:_},mounted(){$(this.$refs.dataTable).DataTable()},methods:{async deleteEmployer(s){if(confirm("Are you sure you want to delete this?"))try{const l=await this.$inertia.delete(route("freelancers.destroy",s));l&&l.statusCode===200?location.reload():console.error("Failed to delete Country:",l)}catch(l){console.error("An error occurred while deleting Country:",l)}}}},y={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},v={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},g={class:"text-xs transition-all"},w=["href"],C=e("li",null,"/",-1),k={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},A={class:"text-xs transition-all text-primary"},F=["href"],B={class:"col-span-12 lg:col-span-12"},E={class:"card"},L=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg font-medium"},"Freelancer")])],-1),D={class:"card-body"},N={class:"overflow-auto custom-scroll"},S={ref:"dataTable",class:"table equal-space head-table"},T=e("thead",null,[e("tr",{class:"dark:bg-sidebar-dark2"},[e("th",null,"No"),e("th",null," Name"),e("th",null," Email"),e("th",null," Phone"),e("th",null," Country"),e("th",null," State"),e("th",null," City"),e("th",null," Status"),e("th",null," Action")])],-1),q=e("td",null,null,-1),z={class:"flex"},I=["href"],P=e("span",{class:"mdi mdi-view-agenda-outline text-md text-[green]"},null,-1),V=[P],j=["href"],G=e("span",{class:"mdi mdi-database-edit text-md text-[green]"},null,-1),H=[G],J=["onClick"],K=e("span",{class:"mdi mdi-delete-empty-outline text-md text-[red]"},null,-1),M=[K];function O(s,l,d,Q,R,i){const c=m("AdminLayout");return r(),p(c,null,{"header-content":a(()=>[e("ul",y,[e("li",v,[e("span",g,[e("a",{href:s.route("admin-dashboard")},"Dashboard",8,w)])]),C,e("li",k,[e("span",A,[e("a",{href:s.route("freelancers.index")},"Freelancer",8,F)])])])]),default:a(()=>[e("div",B,[e("div",E,[L,e("div",D,[e("div",N,[e("table",S,[T,e("tbody",null,[(r(!0),n(b,null,f(d.freelancers,(t,h)=>(r(),n("tr",{key:t.id},[e("td",null,o(h+1),1),e("td",null,o(t.name),1),e("td",null,o(t.email),1),e("td",null,o(t.phone),1),e("td",null,o(t.country),1),e("td",null,o(t.state),1),e("td",null,o(t.city),1),q,e("td",z,[e("a",{href:s.route("freelancers.show",t.id)},V,8,I),e("a",{href:s.route("freelancers.edit",t.id),lass:"hover:-translate-y-1 hover:transition-all hover:ease-in-out"},H,8,j),e("button",{onClick:U=>i.deleteEmployer(t.id),class:"hover:-translate-y-1 hover:transition-all hover:ease-in-out"},M,8,J)])]))),128))])],512)])])])])]),_:1})}const ee=u(x,[["render",O]]);export{ee as default};
