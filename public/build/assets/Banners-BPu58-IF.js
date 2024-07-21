import{_ as k}from"./image052-BJKVgTd0.js";import{_ as D}from"./FaqItem.vue_vue_type_style_index_0_scoped_25b28c96_lang-jUgJ-6ES.js";import{F as S}from"./FaqItem-B66v3bxW.js";import{C as q,N as j,P as F,S as I}from"./carousel-CaLTTdQe.js";import{_ as N}from"./_plugin-vue_export-helper-DlAUqK2U.js";import{p as f,o as a,c as _,w as d,a as e,A,u as i,t as l,f as o,g as c,F as r,j as g,i as m,C,D as $}from"./app-DZcGkmw3.js";import"./Footer-DTLkZbaZ.js";const h=t=>(C("data-v-1e2d9b56"),t=t(),$(),t),E={class:"max-w-[1250px] mx-auto w-full;"},M={class:"mt-5"},V={class:""},z={class:"text-5xl md:text-6xl font-bold text-white"},B=h(()=>e("div",{class:"flex items-center px-2 font-bold border border-white"},[e("figure",null,[e("img",{src:k,class:"h-[40px] w-[40px]",height:"{40}",width:"{40}",alt:""})]),e("h2",{class:"text-white"},"How MyFreelancer Works")],-1)),L={class:"flex justify-between py-4 px-0"},O={class:"text-2xl font-bold"},P={class:"flex gap-10 p-7 md:p-4 flex-wrap md:flex-nowrap"},U=["src"],G={class:"font-bold"},H=h(()=>e("span",null,[e("i",{class:"fa-solid fa-arrow-right"})],-1)),W={class:"flex items-center gap-2"},J={class:"text-2xl font-bold"},K={class:"md:px-2 md:py-4"},Q={class:"grid grid-cols-1 md:grid-cols-4 gap-3"},R={class:"relative"},T=["src","alt"],X={class:"p-4"},Y={class:"text-md font-medium mb-2"},Z={class:"text-gray-700 mb-4"},ee={class:"flex items-center justify-between"},te={key:0,class:"text-lg font-semibold text-green-600"},se=["href"],ae={key:0,class:"flex-wrap justify-center md:flex-nowrap grid p-7 gap-4 md:gap-2",style:{"background-color":"whitesmoke"}},oe={class:"w-full mb-5 text-center"},le={class:"text-4xl lg:text-3xl font-semibold leading-[55px]"},ne={class:"tags max-w-[1250px] mx-auto w-full;"},ie={href:"#",class:"related-link",target:""},ce=h(()=>e("hr",null,null,-1)),re={key:1,class:"flex-wrap justify-center md:flex-nowrap grid p-7 gap-4 md:gap-2",style:{"background-color":"whitesmoke"}},de=h(()=>e("div",{class:"w-full mb-5 text-center"},[e("h1",{class:"text-4xl lg:text-5xl font-semibold leading-[55px]"},"Frequently asked questions ")],-1)),me={class:"max-w-[1250px]"},he={__name:"Banners",props:{categories:{type:Array},billBoards:Array,tags:Array,faqs:Array,catDetail:Object},setup(t){const u=window.Laravel.baseUrl,p=t,w=p.catDetail.banner?u+p.catDetail.banner:"https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png";f(!1),f([]);const b=f(null);return(y,ue)=>(a(),_(D,{categories:t.categories},{default:d(()=>[e("main",E,[e("div",M,[e("div",V,[e("div",{class:"graphics-design h-[250px] w-full rounded-md flex flex-col justify-center gap-10 items-center",style:A({backgroundImage:`url(${i(w)})`})},[e("h1",z,l(t.catDetail.name),1),B],4)])]),e("div",L,[e("h2",O,"Most popular in "+l(t.catDetail.name),1)]),e("div",P,[(a(!0),o(r,null,c(t.tags,(s,n)=>(a(),o("div",{key:n,class:"flex items-center gap-2 border-2 rounded-md border-gray-300 px-5 py-1"},[e("figure",null,[e("img",{src:s.icon?i(u)+s.icon:"https://atech-tc.com/wp-content/plugins/elementor/assets/images/placeholder.png",class:"h-[50px] w-[60px]",height:"{40}",width:"{40}",alt:""},null,8,U)]),e("h2",G,l(s.name),1),H]))),128))]),e("div",W,[e("h2",J,"Explore "+l(t.catDetail.name),1),e("span",null,"("+l(new Set(t.billBoards).size)+")",1)]),e("div",K,[e("div",Q,[(a(!0),o(r,null,c(t.billBoards,(s,n)=>(a(),o("div",{class:"bg-white rounded-lg shadow-md overflow-hidden mb-6",key:n},[e("div",R,[m(i(q),{ref_for:!0,ref_key:"carousel",ref:b,"items-to-show":1,"items-to-scroll":1,loop:!0,"navigation-enabled":!1},{addons:d(()=>[m(i(j)),m(i(F))]),default:d(()=>[(a(!0),o(r,null,c([s.img1,s.img2,s.img3],(v,x)=>(a(),_(i(I),{key:x},{default:d(()=>[e("img",{src:i(u)+v,class:"h-[150px] w-full",alt:`Gig Image ${x+1}`},null,8,T)]),_:2},1024))),128))]),_:2},1536)]),e("div",X,[e("h2",Y,l(s.title),1),e("p",Z,l(s.description),1),e("div",ee,[s.price?(a(),o("span",te,"From $"+l(s.price),1)):g("",!0),e("a",{href:y.route("bill-board",s.id),class:"bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"}," Order Now ",8,se)])])]))),128))])])]),t.tags.length>0?(a(),o("div",ae,[e("div",oe,[e("h1",le,"Explore More "+l(t.catDetail.name)+" Services",1)]),e("ul",ne,[(a(!0),o(r,null,c(t.tags,(s,n)=>(a(),o("li",{key:n},[e("a",ie,l(s.name),1)]))),128))])])):g("",!0),ce,t.faqs.length>0?(a(),o("div",re,[de,e("div",me,[(a(!0),o(r,null,c(t.faqs,(s,n)=>(a(),o("div",{key:n},[m(S,{faq:s},null,8,["faq"])]))),128))])])):g("",!0)]),_:1},8,["categories"]))}},ye=N(he,[["__scopeId","data-v-1e2d9b56"]]);export{ye as default};
