"use strict";(self["webpackChunkoptinmonster_wordpress_plugin_vue_app"]=self["webpackChunkoptinmonster_wordpress_plugin_vue_app"]||[]).push([[496],{46959:function(t,e,s){s.r(e),s.d(e,{default:function(){return u}});var a=function(){var t=this,e=t._self._c;return e("core-page",{staticClass:"omapi-campaign-table"},[e("h1",{staticClass:"wp-heading-inline"},[t._v("Campaigns")]),e("core-button",{staticClass:"omapi-add-new",attrs:{size:"small"},on:{click:function(e){return t.$modal.show("create-campaign-by-type")}}},[t._v("Add New")]),e("common-alerts",{attrs:{alerts:t.alerts}}),e("transition",{attrs:{name:"fade",mode:"out-in"}},[t.connected||t.isLoading?t.showNoCampaigns?e("campaigns-no-campaigns"):e("div",{staticStyle:{position:"relative"}},[e("campaigns-table-filters",{attrs:{"is-bulk":0<t.bulk.length,"action-key":t.actionKey},on:{setAction:t.setAction}}),e("campaigns-table",{attrs:{campaigns:t.campaignsToShow,"is-bulk":0<t.bulk.length,"action-key":t.actionKey,"is-refreshing":t.isRefreshing||t.isLoading},on:{setAction:t.setAction}}),t.isLoading?e("core-loading",{staticStyle:{position:"absolute",top:"128px",opacity:"0.2"}}):t._e()],1):e("campaigns-not-connected")],1),e("campaigns-modal-create-by-type")],1)},i=[],n=s(58156),r=s.n(n),o=s(95353),c={beforeRouteLeave(t,e,s){"campaigns"!==r()(t,"meta.parent")&&"campaigns"!==r()(t,"name")&&this.updatePageVars(),s()},inheritAttrs:!1,data(){return{actionKey:"none"}},computed:{...(0,o.L8)(["connected","isFetched","shouldFetchUser"]),...(0,o.L8)("campaigns",["campaignsWithSplits"]),...(0,o.aH)(["alerts"]),...(0,o.aH)("campaigns",["bulk","page","search","totalCampaignsCount"]),isLoading(){return this.shouldFetchUser||this.$store.getters.isLoading("campaigns")},isRefreshing(){return this.$store.getters.isLoading("campaigns-refresh")},campaignsToShow(){return this.connected?this.campaignsWithSplits:[]},hasCampaigns(){return 0<this.totalCampaignsCount},showNoCampaigns(){return!this.hasCampaigns&&!this.isLoading&&this.isFetched("mainQuery")}},watch:{$route(t){this.updatePageVars(t),this.refreshDashboard().catch((()=>{}))}},mounted(){this.setPageVars({page:this.$get("$route.params.campaignsPage",this.page),search:this.$get("$route.params.searchTerm",this.search)}),this.processPublishQuery(),this.isLoading||this.initRequests(),this.$bus.$on("fetchedMe",this.initRequests)},beforeDestroy(){this.$bus.$off("fetchedMe",this.initRequests)},methods:{...(0,o.i0)("campaigns",["saveWordPress","setPageVars","refreshDashboard","fetchRulesetData"]),initRequests(){this.refreshDashboard().catch((()=>{})),this.fetchRulesetData()},setAction(t){this.actionKey=t},updatePageVars(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.setPageVars({page:r()(t,"params.campaignsPage",1),search:r()(t,"params.searchTerm","")})},processPublishQuery(){const t=this.$get("$route.params.publishCampaign",null);t&&this.saveWordPress({campaignId:t,settings:{enabled:1}}).then((()=>{const t=new URL(window.location.href);t.searchParams.delete("publishCampaign"),window.history.replaceState({},document.title,t.toString())}))}}},h=c,p=s(81656),g=(0,p.A)(h,a,i,!1,null,null,null),u=g.exports}}]);
//# sourceMappingURL=campaigns.8a3c9bb9.js.map