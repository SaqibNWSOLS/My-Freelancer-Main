import{_}from"./AdminLayout-BCSX-UL-.js";import{_ as i}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{l as h,o as l,c as m,w as n,a as t,f as r,m as p,F as f,t as s}from"./app-BdI8nGok.js";import"./logo2-BR_e6daD.js";const b={props:{verifications:Array},components:{AdminLayout:_},methods:{getImagePath(o){return o?"/"+o:""}},mounted(){$(this.$refs.dataTable).DataTable()}},x={class:"flex items-center lg:hidden 2md:shadow-lg 2md:border 2md:border-border-light 2md:z-[5] 2md:p-4 2md:absolute 2md:top-[38px] 2md:rounded-5 2md:left-0 2md:items-start 2md:bg-white 2md:flex-col gap-[calc(8px_+_(31_-_8)_*_((30vw_-_320px)_/_(1920_-_320)))]"},g={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},w={class:"text-xs transition-all"},y=["href"],A=t("li",null,"/",-1),v={class:"dropdown on-hover-show cursor-pointer pb-[6px] transition-all relative group before:bg-primary before:absolute before:-translate-x-1/2 before:bottom-0 before:left-1/2 before:w-full before:h-[2px]"},I={class:"text-xs transition-all text-primary"},L=["href"],T={class:"col-span-12 lg:col-span-12"},k={class:"card"},B=t("div",{class:"card-header border-b-0"},[t("div",{class:"flex flex-col"},[t("h3",{class:"text-lg font-medium"},"Verification")])],-1),N={class:"card-body"},D={class:"overflow-auto custom-scroll"},F={ref:"dataTable",class:"table equal-space head-table"},V=t("thead",null,[t("tr",{class:""},[t("th",null,"No"),t("th",null," User Id"),t("th",null,"Account Type"),t("th",null," Account Info"),t("th",null,"First Name"),t("th",null,"Last Name"),t("th",null," Address"),t("th",null," Status"),t("th",null,"Action")])],-1),C=["href"],S=t("span",{class:"mdi mdi-view-agenda-outline text-lg text-[green]"},null,-1),q=[S];function z(o,E,d,P,U,j){const c=h("AdminLayout");return l(),m(c,null,{"header-content":n(()=>[t("ul",x,[t("li",g,[t("span",w,[t("a",{href:o.route("admin-dashboard")},"Dashboard",8,y)])]),A,t("li",v,[t("span",I,[t("a",{href:o.route("verifications.index")},"Verfication",8,L)])])])]),default:n(()=>[t("div",T,[t("div",k,[B,t("div",N,[t("div",D,[t("table",F,[V,t("tbody",null,[(l(!0),r(f,null,p(d.verifications,(e,u)=>{var a;return l(),r("tr",{key:e.id},[t("td",null,s(u+1),1),t("td",null,s((a=e==null?void 0:e.user)==null?void 0:a.name),1),t("td",null,s(e.accountType),1),t("td",null,s(e.accountInfo),1),t("td",null,s(e.first_name),1),t("td",null,s(e.last_name),1),t("td",null,s(e.address),1),t("td",null,s(e.status),1),t("td",null,[t("a",{href:o.route("verifications.show",e.id)},q,8,C)])])}),128))])],512)])])])])]),_:1})}const M=i(b,[["render",z]]);export{M as default};
