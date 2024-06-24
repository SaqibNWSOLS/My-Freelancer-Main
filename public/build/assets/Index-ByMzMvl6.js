import{_}from"./AdminLayout-BCSX-UL-.js";import{_ as u}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{l as m,o as a,c as f,w as l,a as e,d as b,f as n,m as p,F as x,t as s}from"./app-BdI8nGok.js";import"./logo2-BR_e6daD.js";const v={props:{countries:Array,states:Array,cities:Array},components:{AdminLayout:_},mounted(){$(this.$refs.dataTable).DataTable()},methods:{editCity(t){Inertia.get(route("cities.edit",t))},async deleteCity(t){if(confirm("Are you sure you want to delete this City?")){const r=await this.$inertia.delete(route("cities.destroy",t));r&&r.statusCode===200?location.reload():console.error("Failed to delete City:",r)}}}},y={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},w={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},g={class:"text-xs transition-all"},C=["href"],A=e("li",null,"/",-1),k={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},N={class:"text-xs transition-all"},B=["href"],L=e("li",null,"/",-1),S={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},T={class:"text-xs transition-all"},D=["href"],F=e("li",null,"/",-1),I={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},V={class:"text-xs transition-all text-primary"},q=["href"],z=["href"],E=e("span",{class:"mdi mdi-plus"},null,-1),j={class:"col-span-12 lg:col-span-12"},G={class:"card"},H=e("div",{class:"card-header border-b-0"},[e("div",{class:"flex flex-col"},[e("h3",{class:"text-lg font-medium"},"Cities")])],-1),J={class:"card-body"},K={class:"overflow-auto custom-scroll"},M={ref:"dataTable",class:"table equal-space head-table"},O=e("thead",null,[e("tr",{class:"dark:bg-sidebar-dark2"},[e("th",null,"No"),e("th",null,"City Name"),e("th",null,"Country Name"),e("th",null,"State Name"),e("th",null,"Status"),e("th",null,"Action")])],-1),P={class:"min-w-[1.25rem]"},Q={class:"min-w-[8.125rem]"},R={class:"min-w-[8.125rem]"},U={class:"min-w-[8.125rem]"},W={class:"min-w-[11.125rem]"},X=["href"],Y=e("span",{class:"mdi mdi-database-edit text-lg text-[green]"},null,-1),Z=[Y],ee=["onClick"],te=e("span",{class:"mdi mdi-delete-empty-outline text-lg text-[red]"},null,-1),oe=[te];function se(t,r,i,re,ae,d){const c=m("AdminLayout");return a(),f(c,null,{"header-content":l(()=>[e("ul",y,[e("li",w,[e("span",g,[e("a",{href:t.route("admin-dashboard")},"Dashboard",8,C)])]),A,e("li",k,[e("span",N,[e("a",{href:t.route("countries.index")},"Countries",8,B)])]),L,e("li",S,[e("span",T,[e("a",{href:t.route("states.index")},"States",8,D)])]),F,e("li",I,[e("span",V,[e("a",{href:t.route("cities.index")},"Cities",8,q)])])]),e("div",null,[e("a",{class:"text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out",href:t.route("cities.create"),style:{float:"right"}},[E,b(" Add ")],8,z)])]),default:l(()=>[e("div",j,[e("div",G,[H,e("div",J,[e("div",K,[e("table",M,[O,e("tbody",null,[(a(!0),n(x,null,p(i.cities,(o,h)=>(a(),n("tr",{key:o.id},[e("td",P,s(h+1),1),e("td",Q,s(o.name),1),e("td",R,s(o.country?o.country.name:"N/A"),1),e("td",U,s(o.state?o.state.name:"N/A"),1),e("td",W,s(o.status),1),e("td",null,[e("a",{href:t.route("cities.edit",o.id),lass:"hover:-translate-y-1 hover:transition-all hover:ease-in-out",style:{margin:"10px"}},Z,8,X),e("button",{onClick:le=>d.deleteCity(o.id),class:"hover:-translate-y-1 hover:transition-all hover:ease-in-out"},oe,8,ee)])]))),128))])],512)])])])])]),_:1})}const he=u(v,[["render",se]]);export{he as default};
