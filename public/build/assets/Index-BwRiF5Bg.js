import{_ as d}from"./AdminLayout-F2Rtil82.js";import{_ as c}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{R as h,o as a,c as u,w as _,a as t,d as n,s as m,F as y,t as o}from"./app-kh3QWZLH.js";/* empty css                                                               */const f={props:{countries:Array,states:Array},components:{AdminLayout:d},methods:{editState(e){Inertia.get(route("states.edit",e))},deleteState(e){confirm("Are you sure you want to delete this state?")&&Inertia.delete(route("states.destroy",e))}}},p={class:"col-span-6 lg:col-span-12"},v={class:"card"},b=t("div",{class:"card-header border-b-0"},[t("div",{class:"flex flex-col"},[t("h3",{class:"text-lg font-medium"},"States")])],-1),w=["href"],g={class:"card-body"},x={class:"overflow-auto custom-scroll"},k={class:"table equal-space head-table"},A=t("thead",null,[t("tr",{class:"dark:bg-sidebar-dark2"},[t("th",null,"No"),t("th",null,"State Name"),t("th",null,"Country"),t("th",null,"Status"),t("th",null,"Action")])],-1),C={class:"min-w-[1.25rem]"},S={class:"min-w-[8.125rem]"},$={class:"min-w-[11.125rem]"},B=["href"],L=["onClick"];function I(e,N,r,D,E,F){const l=h("AdminLayout");return a(),u(l,null,{default:_(()=>[t("div",p,[t("div",v,[b,t("div",null,[t("a",{class:"text-white btn btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out",href:e.route("states.create"),style:{float:"right"}},"Create State",8,w)]),t("div",g,[t("div",x,[t("table",k,[A,t("tbody",null,[(a(!0),n(y,null,m(r.states,(s,i)=>(a(),n("tr",{key:s.id},[t("td",C,o(i+1),1),t("td",S,o(s.name),1),t("td",null,o(s.country.name),1),t("td",$,o(s.status),1),t("td",null,[t("a",{href:e.route("states.edit",s.id),class:"text-white btn btn-warning hover:-translate-y-1 hover:transition-all hover:ease-in-out",style:{margin:"10px"}},"Edit",8,B),t("button",{onClick:q=>e.deleteCountry("states.destroy",s.id),class:"text-white btn btn-danger hover:-translate-y-1 hover:transition-all hover:ease-in-out"},"Delete",8,L)])]))),128))])])])])])])]),_:1})}const G=c(f,[["render",I]]);export{G as default};
