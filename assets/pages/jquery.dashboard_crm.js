!function(a){"use strict";var b=function(){this.$realData=[]};b.prototype.createLineChart=function(a,b,c,d,e,f,g,h,i){Morris.Line({element:a,data:b,xkey:c,ykeys:d,labels:e,fillOpacity:f,pointFillColors:g,pointStrokeColors:h,behaveLikeLine:!0,gridLineColor:"#eef0f2",hideHover:"auto",resize:!0,lineColors:i})},b.prototype.createBarChart=function(a,b,c,d,e,f){Morris.Bar({element:a,data:b,xkey:c,ykeys:d,labels:e,hideHover:"auto",resize:!0,gridLineColor:"#eeeeee",barColors:f})},b.prototype.createDonutChart=function(a,b,c){Morris.Donut({element:a,data:b,resize:!0,colors:c})},b.prototype.init=function(){var a=[{y:"2007",a:20,b:10},{y:"2008",a:35,b:25},{y:"2009",a:40,b:30},{y:"2010",a:55,b:45},{y:"2011",a:60,b:50},{y:"2012",a:75,b:65},{y:"2013",a:80,b:70},{y:"2014",a:95,b:85},{y:"2015",a:100,b:90}];this.createLineChart("morris-line-chart",a,"y",["a","b"],["Deal-Won ","Deal-Lost "],["0.1"],["#ffffff"],["#999999"],["#81c868","#ffbd4a"]);var b=[{y:"2009",a:100,b:90},{y:"2010",a:75,b:65},{y:"2011",a:50,b:40},{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:100,b:90}];this.createBarChart("morris-bar-chart",b,"y",["a","b"],["Won Deals ","Lost Deals "],["#5fbeaa","#5d9cec"]);var c=[{label:"Group 1",value:12},{label:"Group 2",value:30},{label:"Group 3",value:20}];this.createDonutChart("morris-donut-example",c,["#ebeff2","#5fbeaa","#5d9cec"])},a.DashboardCRM=new b,a.DashboardCRM.Constructor=b}(window.jQuery),function(a){"use strict";a.DashboardCRM.init()}(window.jQuery);