
/*
 Template Name: Aplomb - Bootstrap 4 Admin Dashboard
 Author: Mannatthemes
 Website: www.mannatthemes.com
 File: Dashboard init js
 */
!function(a){"use strict";var e=function(){};e.prototype.createAreaChart=function(a,e,r,i,o,t,l,n){Morris.Area({element:a,pointSize:3,lineWidth:2,data:i,xkey:o,ykeys:t,labels:l,resize:!0,hideHover:"auto",gridLineColor:"#eef0f2",lineColors:n,lineWidth:0,fillOpacity:.6,xLabelMargin:10,yLabelMargin:10,grid:!1,axes:!1,pointSize:0})},e.prototype.createDonutChart=function(a,e,r){Morris.Donut({element:a,data:e,resize:!0,colors:r,labelColor:"#ccc",backgroundColor:"transparent",fillOpacity:.1,formatter:function(a){return a+"%"}})},a("#world-map-markers").vectorMap({map:"world_mill_en",scaleColors:["rgba(255, 255, 255,0.55)","rgba(255, 255, 255,0.55)"],normalizeFunction:"polynomial",hoverOpacity:.7,hoverColor:!1,regionStyle:{initial:{fill:"rgba(255, 255, 255,0.55)"}},markerStyle:{initial:{r:4,fill:"#00c292","fill-opacity":.9,stroke:"#fff","stroke-width":5,"stroke-opacity":.4},hover:{stroke:"#fff","fill-opacity":1,"stroke-width":2}},backgroundColor:"transparent",markers:[{latLng:[61.52,105.31],name:"Russia"},{latLng:[-25.27,133.77],name:"Australia"},{latLng:[20.59,78.96],name:"India"},{latLng:[39.52,-87.12],name:"Brazil"}],series:{regions:[{values:{US:"rgba(255, 255, 255,0.8)",AU:"rgba(255, 255, 255,0.8)",IN:"rgba(255, 255, 255,0.8)",RU:"rgba(255, 255, 255,0.8)"},attribute:"fill"}]}}),e.prototype.createLineChart=function(a,e,r,i,o,t){Morris.Line({element:a,data:e,xkey:r,ykeys:i,labels:o,hideHover:"auto",gridLineColor:"#bdaec6",resize:!0,lineColors:t,grid:!1,axes:!1})},a(".linechart").sparkline([1,4,3,7,6,4,8,9,6,8,12],{type:"line",width:"100",height:"38",lineColor:"#547d8f",fillColor:"rgba(110, 255, 235,0.55)",lineWidth:2,minSpotColor:"#aab6a2",maxSpotColor:"#aab6a2"}),a(".linechart-2").sparkline([1,4,3,7,6,4,12,9,6,3,2],{type:"line",width:"100",height:"38",lineColor:"#547d8f",fillColor:"rgba(110, 255, 235,0.55)",lineWidth:2,minSpotColor:"#aab6a2",maxSpotColor:"#aab6a2"}),a(".linechart-3").sparkline([1,6,10,3,6,8,1,5,2,7,4],{type:"line",width:"100",height:"38",lineColor:"#547d8f",fillColor:"rgba(110, 255, 235,0.55)",lineWidth:2,minSpotColor:"#aab6a2",maxSpotColor:"#aab6a2"}),a(".live-tile, .flip-list").not(".exclude").liveTile(),a(".boxscroll").niceScroll({cursorborder:"",cursorcolor:"#314e5f",boxzoom:!0}),e.prototype.init=function(){this.createAreaChart("morris-area-chart",0,0,[{y:"2011",a:10,b:15},{y:"2012",a:30,b:35},{y:"2013",a:10,b:25},{y:"2014",a:55,b:45},{y:"2015",a:30,b:20},{y:"2016",a:40,b:35},{y:"2017",a:10,b:25},{y:"2018",a:25,b:30}],"y",["a","b"],["Series A","Series B"],["#7ca2a9","#557ca2"]);this.createDonutChart("morris-donut-example",[{label:"Margin",value:20},{label:"Profit",value:30},{label:"Lost",value:10}],["rgba(211, 218, 232,0.4)","rgba(118, 205, 222,0.4)","rgba(255, 255, 255,0.5)"]);this.createLineChart("multi-line-chart",[{y:"2012",a:0,b:0},{y:"2013",a:50,b:30},{y:"2014",a:50,b:30},{y:"2015",a:120,b:100},{y:"2016",a:60,b:40},{y:"2017",a:140,b:120},{y:"2018",a:180,b:200}],"y",["a","b"],["Dom","Int"],["#7ca2a9","#557ca2"])},a.Dashboard=new e,a.Dashboard.Constructor=e}(window.jQuery),function(a){"use strict";window.jQuery.Dashboard.init()}();