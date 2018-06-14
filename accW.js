var oapBootstrapVer="2013-06-24-11-28",_gaq=_gaq||[];
function pgfxLoadBlankBroadcasterImage(){return!1}
var lifestyleIndexToDFP={golf:69749050,driving:69749170,"air-travel":69749290,"sun-sand":69749410,fishing:69749530,sailing:69749650,ski:69749770,"school-day":69749890,allergies:69750010,running:69750130,astronomy:69750250,hunting:69750610,"lawn-garden":69750730,biking:69750850,hiking:69750970,diy:69751090,"outdoor-entertaining":69751210,"snow-day":69751330,"cold-flu":69751570,"home-energy":69751690,events:69751810,"hair-day":69751930,asthma:69752050,migraine:69752170,arthritis:69752410,sinus:69752650};

(function(){function z(){f=window.jQuery.noConflict(!0);
	G()}function G(){K();
		f(document).ready(function(c){if(-1!=document.domain.indexOf("accuweather")||c(".aw-widget-legal").length){c.each(e.css,function(a,b){var t="aw-widget-css-"+a;
			c("#"+t).length||c("<link>",{id:t,rel:"stylesheet",type:"text/css",href:b}).appendTo("head")});
		var b=f(e.current.selector).add(e.threeday.selector),a=c();
		b.each(function(){this.awInit||a.length||(a=c(this),this.awType=-1!=a.data("uid").indexOf("awcc")?"current":"threeday",
this.awInit=!0)});
		a.html('<span class="message">Loading Widget\u2026</span>');
		b=a.data();
		b.css&&!c("#aw-widget-client-css").length&&c("<link>",{id:"aw-widget-client-css",rel:"stylesheet",type:"text/css",href:b.css}).appendTo("head");
		b.css=null;
		f.getJSON(e[a.get(0).awType].url+"?callback=?",b,function(b){b.style&&c('<style type="text/css">'+b.style+"</style>").appendTo("head");
			a.html(b.html);
			x(f,a)})}else alert("It seems the widget code is incomplete. Please visit http://www.accuweather.com/en/free-weather-widgets to set up your free weather widget.")})}
function y(c){c.html('<span class="message">Loading Widget\u2026</span>');
c.get(0).awInit=!1;
var b=c.data();
b.widget=null;
var a;
f(e.current.selector).add(e.threeday.selector).each(function(){this.awInit&&f(this).data("uid").substr(4)==c.data("uid").substr(4)&&(a=f(this),a.data("locationkey",c.data("locationkey")),a.data("unit",c.data("unit")),-1!=a.data("uid").indexOf("awcc")?(this.awType="current",a.awType="current"):(this.awType="threeday",a.awType="threeday"))});
c.get(0).awInit=!0;
f.getJSON(e[c.get(0).awType].url+
"?callback=?",b,function(a){c.html(a.html);
	x(f,c)});
a&&(b=a.data(),b.widget=null,f.getJSON(e[a.awType].url+"?callback=?",b,function(c){a.html(c.html);
	x(f,a)}))}function K(){(function(c,b){var a;
	c.throttle=a=function(a,e,m,k){function g(){function c(){t=+new Date;

		m.apply(F,u)}function g(){v=b}var F=this,f=+new Date-t,u=arguments;
		k&&!v&&c();
		v&&clearTimeout(v);
		k===b&&f>a?c():!0!==e&&(v=setTimeout(k?g:c,k===b?a-f:a))}var v,t=0;
		"boolean"!==typeof e&&(k=m,m=e,e=b);
		c.guid&&(g.guid=m.guid=m.guid||c.guid++);

return g};
c.debounce=function(c,e,f){return f===b?a(c,e,!1):a(c,f,!1!==e)}})(f);
(function(c){c.autocomplete=function(b,a){function t(){q={data:{},length:0}}function f(){var a=document.getElementById(r.attr("id")).value;
	d(a,"search")}function m(a){var h=c("li",n);
	h&&(p+=a,0>p?p=0:p>=h.size()&&(p=h.size()-1),h.removeClass("aw-ac-hover"),c(h[p]).addClass("aw-ac-hover"),h[p]&&h[p].scrollIntoView&&h[p].scrollIntoView(!1))}function k(){w&&clearTimeout(w);
		n.hide()}function g(h,b,d){if(b){r.removeClass(a.loadingClass);

n.html("");
if("search"==d){if(!b.length){n.html('<div class="aw-no-results">No Matching Results Found</div>');
n.show();
return}if(1==b.length){h=n.closest(e.threeday.selector);
	h.data("locationkey",b[0][1]);
	h.data("useip","false");
	y(h);
	return}}else if(!x||0==b.length)return k();
	n.html(F(b));
	n.find("a").each(function(a){c(this).click(function(){var a=c(this).closest(e.threeday.selector);
		a.data("locationkey",c(this).data("key"));
		a.data("useip","false");
		y(a)})});
	n.show()}else k()}function v(a){if(!a)return null;

for(var c=[],h=0;
	h<a.length;
	h++){var b,d;
	a[h]&&(b=a[h],d=[b.LocalizedName],"US"==b.Country.ID||"CA"==b.Country.ID||"AU"==b.Country.ID?d.push(", "+b.AdministrativeArea.ID):"GB"==b.Country.ID?void 0!==b.SupplementalAdminAreas&&b.SupplementalAdminAreas.length?d.push(", "+b.SupplementalAdminAreas[0].LocalizedName):d.push(", "+b.AdministrativeArea.ID):b.AdministrativeArea.LocalizedName!=b.LocalizedName&&d.push(", "+b.AdministrativeArea.LocalizedName),"US"==b.Country.ID?d.push(" (USA)"):d.push(" ("+b.Country.LocalizedName+
")"),d=d.join(""),b=[],b.push(d),b.push(a[h].Key),c.push(b))}return c}function F(c){var b=c.length;
		0<a.maxItemsToShow&&a.maxItemsToShow<b&&(b=a.maxItemsToShow);
		for(var h=[],d=0;
			d<b;
			d++)h.push('<li class="aw-location"><a data-key="'+c[d][1]+'">'+c[d][0]+"</a></li>");
			return h?"<ul>"+h.join("")+"</ul>":""}function d(b,d){a.matchCase||(b=b.toLowerCase());
				a.cacheLength&&H(b);
				"string"==typeof a.url&&0<a.url.length?c.ajax({type:"GET",url:I(b,d),cache:!0,dataType:"jsonp",success:function(a){a=v(a);
					u(b,a);

g(b,a,d)}}):r.removeClass(a.loadingClass)}function I(c,b){"search"!=b&&(b="autocomplete");
				var d=a.url+b+"?q="+encodeURI(c)+"&apiKey="+a.api_key,h;
				for(h in a.extraParams)d+="&"+h+"="+encodeURI(a.extraParams[h]);
					return d}function H(c){if(!c)return null;
						if(q.data[c])return q.data[c];
						if(a.matchSubset)for(var b=c.length-1;
							b>=a.minChars;
							b--){var d=c.substr(0,b);
							if(d=q.data[d]){for(var b=[],h=0;
								h<d.length;
								h++){var k=d[h],g;
								g=k[0];
								var e=c;
								a.matchCase||(g=g.toLowerCase());
								g=g.indexOf(e);
								g=-1==g?!1:0==g||a.matchContains;

g&&(b[b.length]=k)}return b}}return null}function J(b,c){c&&r.removeClass(a.loadingClass);
	for(var d=c?c.length:0,h=null,k=0;
		k<d;
		k++){var g=c[k];
		if(g[0].toLowerCase()==b.toLowerCase()){h=document.createElement("li");
	h.innerHTML=a.formatItem?a.formatItem(g,k,d):g[0];
	h.selectValue=g[0];
	var e=null;
	if(1<g.length)for(var e=[],u=1;
		u<g.length;
		u++)e[e.length]=g[u];
	h.extra=e}}a.onFindValue&&setTimeout(function(){a.onFindValue(h)},1)}function u(c,b){b&&c&&a.cacheLength&&(!q.length||q.length>a.cacheLength?(t(),
q.length++):q[c]||q.length++,q.data[c]=b)}var r=b.attr("autocomplete","off");
	a.inputClass&&r.addClass(a.inputClass);
	var n=c(".aw-autocomplete"),L=c(".aw-submit-button");
	b.autocompleter=this;
	var w=null,l="",p=-1,q={},x=!1,C=null;
	t();
	if(null!=a.data){var D="",A={},E=[];
	"string"!=typeof a.url&&(a.cacheLength=1);
	for(var B=0;
		B<a.data.length;
		B++)E="string"==typeof a.data[B]?[a.data[B]]:a.data[B],0<E[0].length&&(D=E[0].substring(0,1).toLowerCase(),A[D]||(A[D]=[]),A[D].push(E));
		for(var z in A)a.cacheLength++,
u(z,A[z])}L.click(function(){f()});
r.bind("keydown",function(b){C=b.keyCode;
	switch(b.keyCode){case 38:b.preventDefault();
		m(-1);
		break;
		case 40:b.preventDefault();
		m(1);
		break;
		case 9:b.preventDefault();
		break;
		case 13:var g=c("li",n);
		b.preventDefault();
		c(g).hasClass("aw-ac-hover")?(b=n.closest(e.threeday.selector),b.data("locationkey",c(g[p]).find("a").data("key")),b.data("useip","false"),y(b)):f();
		break;
		default:p=-1,w&&clearTimeout(w),w=setTimeout(function(){if(46==C||8<C&&32>C)n.hide();
			else{var b=document.getElementById(r.attr("id")).value;

b!=l&&(l=b,b.length>=a.minChars?(r.addClass(a.loadingClass),d(b,"autocomplete")):(r.removeClass(a.loadingClass),n.hide()))}},a.delay)}}).bind("focus",function(){x=!0}).bind("blur",function(){x=!1;
	w&&clearTimeout(w);
	w=setTimeout(k,200)});
k();
this.flushCache=function(){t()};
this.setExtraParams=function(b){a.extraParams=b};
this.findValue=function(){var b=document.getElementById(r.attr("id")).value;
a.matchCase||(b=b.toLowerCase());
var d=a.cacheLength?H(b):null;
d?J(b,d):"string"==typeof a.url&&0<a.url.length?
c.ajax({type:"GET",url:I(b,"autocomplete"),cache:!0,dataType:"jsonp",success:function(a){a=v(a);
	u(b,a);
	g(b,a,"autocomplete")}}):J(b,null)}};
c.fn.autocomplete=function(b,a,e){a=a||{};
a.url=b;
a.data="object"==typeof e&&e.constructor==Array?e:null;
a.inputClass=a.inputClass||"ac_input";
a.resultsClass=a.resultsClass||"ac_results";
a.lineSeparator=a.lineSeparator||"\n";
a.cellSeparator=a.cellSeparator||"|";
a.minChars=a.minChars||1;
a.delay=a.delay||400;
a.matchCase=a.matchCase||0;
a.matchSubset=a.matchSubset||
1;
a.matchContains=a.matchContains||0;
a.cacheLength=a.cacheLength||1;
a.mustMatch=a.mustMatch||0;
a.extraParams=a.extraParams||{};
a.loadingClass=a.loadingClass||"ac_loading";
a.selectFirst=a.selectFirst||!1;
a.selectOnly=a.selectOnly||!1;
a.maxItemsToShow=a.maxItemsToShow||-1;
a.autoFill=a.autoFill||!1
a.width=parseInt(a.width,10)||0;
new c.autocomplete(c(this),a);
return c(this)};
c.fn.autocompleteArray=function(b,a){return this.autocomplete(null,a,b)};
c.fn.indexOf=function(b){for(var a=0;
	a<this.length;
	a++)if(this[a]==
b)return a;
	return-1}})(f)}function x(c,b){if("undefined"!=typeof awxOapIE8)for(var a=[{o:".aw-widget-36hour .tbg-su, .aw-widget-36hour .bg-su, .aw-widget-current .tbg-su, .aw-widget-current .bg-su",c:"background",s:"#6cb2fc"},{o:".aw-widget-36hour .tbg-c, .aw-widget-36hour .bg-c, .aw-widget-current .tbg-c, .aw-widget-current .bg-c",c:"background",s:"#d0dae8"},{o:".aw-widget-36hour .tbg-f, .aw-widget-36hour .bg-f, .aw-widget-current .tbg-f, .aw-widget-current .bg-f",c:"background",s:"#dee4ef"},{o:".aw-widget-36hour .tbg-t, .aw-widget-36hour .bg-t, .aw-widget-current .tbg-t, .aw-widget-current .bg-t",
c:"background",s:"#90bbe5"},{o:".aw-widget-36hour .tbg-r, .aw-widget-36hour .bg-r, .aw-widget-current .tbg-r, .aw-widget-current .bg-r",c:"background",s:"#7789b2"},{o:".aw-widget-36hour .tbg-cl, .aw-widget-36hour .bg-cl, .aw-widget-current .tbg-cl, .aw-widget-current .bg-cl",c:"background",s:"#141414"},{o:".aw-widget-36hour .tbg-s, .aw-widget-36hour .bg-s, .aw-widget-current .tbg-s, .aw-widget-current .bg-s",c:"background",s:"#141414"},{o:"div.aw-widget-36hour-inner div.aw-widget-content div.aw-header div.aw-search button.aw-submit-button",
c:"border",s:"none !important"}],f=0;
f<a.length;
f++)c(a[f].o).css(a[f].c,a[f].s);
	window.accuweather=window.accuweather||{};
	window.accuweather.widgets=window.accuweather.widgets||{register:function(a,b){var g=c(a);
		g.length&&(window.accuweather.widgets[g.get(0)]=b)},get:function(a){a=c(a);
			if(a.length)return window.accuweather.widgets[a.get(0)]}};
			window.accuweather.widgets.Current=function(a){var b=this;
				this.el=c(a);
				this.breakpoints=[86,106,115,216,280,350,479];
				this.inner=this.el.find(".aw-widget-current-inner");

this.inow=this.el.find(".aw-current-weather .aw-icon");
this.clickUrl=this.el.find(".aw-widget-current-inner a").first();
-1==this.clickUrl.attr("href").toString().toLowerCase().indexOf("accuweather.com")&&this.clickUrl.removeAttr("target");
this.reload=function(){y(a)};
this.resize();
this.toggle=this.el.find(".aw-toggle");
this.toggle.click(function(){b.inner.addClass("with-get");
	return!1});
window.accuweather.widgets.register(this.el.get(0),this)};
window.accuweather.widgets.Current.prototype.resize=function(){for(var a=
this.el.outerWidth(),b=[],c=!1,f=0;
f<this.breakpoints.length;
f++){var d=this.breakpoints[f];
	a<d&&(b.push("lt-"+d),c=!0);
	a==d&&b.push("eq-"+d)}c||(b=["gte-"+this.breakpoints[this.breakpoints.length-1]]);
	this.el.attr("class",e.current.baseClass+" "+b.join(" "));
	c=this.inow.data("icon");
	f="l";
	216>a&&(f="m");
	115>a&&(f="t");
	this.inow.attr("class","aw-icon aw-icon-"+c+"-"+f);
	this.el.find(".debug .width").html(a);
	this.el.find(".debug .bpclasses").html(b.join(" "));
	this.el.hide();
	this.el.show()};
	window.accuweather.widgets.ThirtySixHour=
function(a){function g(a){return awxWidgetInfo[d].wxInfo.ut?"1"==awxWidgetInfo[d].wxInfo.ut?9*a/5+32:a:a}function e(a,b){for(var c in b)switch(c){case "hi":case "lo":awxWidgetInfo[d].keyValuePairs[a+c]=5*Math.round(g(parseInt(b[c]))/5);
break;
case "wx":awxWidgetInfo[d].keyValuePairs[a+c]=parseInt(b[c]);
break;
default:awxWidgetInfo[d].keyValuePairs[a+c]=b[c]}}this.el=c(a);
this.breakpoints=[320,480,540,624,632,780,860,950];
this.i36=this.el.find(".aw-36-hours .aw-icon");

this.inow=this.el.find(".aw-current-weather .aw-icon");

this.search=this.el.find(".aw-search");
this.reload=function(){y(a)};
this.moveTimeBubble=function(){setTimeout(function(){var a=c(".aw-widget-36hour").find(".aw-time-bubble"),b=a.find("span"),d=a.find("i"),g=a.find("b"),a=a.attr("data-minutes")/60,e=c(".aw-six-hours-inner ul li:first").width(),g=g.width(),a=Math.max(5,e*a),a=Math.min(g-7,a),g=a+6;
	b.css("left",a+"px");
	d.css("left",g+"px")},100)};
b.find(".aw-temp-unit").find("li a").each(function(a){c(this).click(function(){c(this).closest("li").hasClass("current")||
(c(this).hasClass("aw-unit-f")?b.data("unit","f"):b.data("unit","c"),b.data("useip","false"),y(b))})});
var f=this.el.find(".aw-autocomplete");
this.el.find(".aw-search input").bind({focus:function(){c(this).closest(".aw-search").addClass("aw-focus");
	c(this).val("");
	var a=c(this).position().top+c(this).height()+16;
	c(".aw-emergency-header").length&&(a+=c(".aw-emergency-header").height()+10);
	f.css({width:c(this).width(),top:a,left:c(this).position().left})},blur:function(){c(this).closest(".aw-search").removeClass("aw-focus")}}).autocomplete("https://api.accuweather.com/locations/v1/cities/",
{el:this.el.get(0),api_key:"651aa630aeac48e8b15f9072cfa524bc",autoFill:1,inputClass:"aw-input",resultsClass:"aw-autocomplete",minChars:1,cacheLength:0,matchSubset:1,matchCase:0,matchContains:1,maxItemsToShow:8,mustMatch:0});
	var d=this.el.data("uid");
	awxWidgetInfo[d].keyValuePairs={zip:awxWidgetInfo[d].userInfo.zip,city:awxWidgetInfo[d].userInfo.city,state:awxWidgetInfo[d].userInfo.state,country:awxWidgetInfo[d].userInfo.country,partner:awxWidgetInfo[d].userInfo.sessionPartner,metro:awxWidgetInfo[d].userInfo.metro,
dma:awxWidgetInfo[d].userInfo.dma,lang:awxWidgetInfo[d].userInfo.lang};
if(awxWidgetInfo[d].wxInfo)for(var k in awxWidgetInfo[d].wxInfo)if("ix"!=k)if("cu"==k)for(var m in awxWidgetInfo[d].wxInfo[k])awxWidgetInfo[d].wxInfo[k][m]&&e("cu",awxWidgetInfo[d].wxInfo[k]);
else if("fc"==k)for(var l=0;
	l<awxWidgetInfo[d].wxInfo[k].length;
	l++)for(m in awxWidgetInfo[d].wxInfo[k][l])awxWidgetInfo[d].wxInfo[k][l][m]&&e("fc"+(l+1),awxWidgetInfo[d].wxInfo[k][l]);
else awxWidgetInfo[d].wxInfo[k]&&(awxWidgetInfo[d].keyValuePairs[k]=
awxWidgetInfo[d].wxInfo[k].toString());
	this.resize();
window.accuweather.widgets.register(this.el.get(0),this)};
window.accuweather.widgets.ThirtySixHour.prototype.resize=function(){for(var a=this.el.outerWidth(),b=[],f=!1,l=0;
	l<this.breakpoints.length;
	l++){var d=this.breakpoints[l];
	a<d&&(b.push("lt-"+d),f=!0);
	a==d&&b.push("eq-"+d)}f||(b=["gte-"+this.breakpoints[this.breakpoints.length-1]]);
	this.el.attr("class",e.threeday.baseClass+" "+b.join(" "));
	this.i36.each(function(){var b=c(this),d=b.data("icon"),
e="m";
950>a&&(e="s");
b.attr("class","aw-icon aw-icon-"+d+"-"+e)});
	b=this.inow.data("icon");
	this.inow.attr("class","aw-icon aw-icon-"+b+"-"+(480>a?"m":"xl"));
	this.moveTimeBubble();
	$table=c(".vid-headline-box");
	$table.find("td.logo").css("width",$table.outerHeight(!0)+"px")};
	var l="current"==b.get(0).awType?new window.accuweather.widgets.Current(b):new window.accuweather.widgets.ThirtySixHour(b);
	c(window).resize(c.throttle(200,function(){l.resize()}));
	"current"==b.get(0).awType?window.accuweatherWidgetCurrentReady&&
window.accuweatherWidgetCurrentReady(b.get(0),l):window.accuweatherWidgetThirtySixHourReady&&window.accuweatherWidgetThirtySixHourReady(b.get(0),l);
var m=b.data("uid")?b.data("uid"):"aw"+(new Date).getTime(),a=b.data("lifestyle")?"/"+b.data("lifestyle"):"",f=b.get(0).awType+a;
""!=a&&b.data("lifestyle");
try{(function(a,b,c,e,d,f,l){a.GoogleAnalyticsObject=d;
	a[d]=a[d]||function(){(a[d].q=a[d].q||[]).push(arguments)};
	a[d].l=1*new Date;
	f=b.createElement(c);
	l=b.getElementsByTagName(c)[0];
	f.async=1;f.src=
e;
l.parentNode.insertBefore(f,l)})(window,document,"script","//www.google-analytics.com/analytics.js","ga_awxoap"),ga_awxoap("create","UA-31945348-1","auto",{name:"awxoapTracker"}),ga_awxoap("awxoapTracker.set","page","/oap-weather-widgets/"+f),ga_awxoap("awxoapTracker.send","pageview",{dimension1:"OAP_Weather_Widgets",dimension2:document.domain?document.domain.split(".").join("-"):"OAP_NoDomain",dimension3:awxWidgetInfo[m].userInfo.partner,dimension4:"OAP_Widget_"+f,dimension5:awxWidgetInfo[m].wxInfo.mcpct})}catch(k){}c("#"+
m).find("a").each(function(){if(c(this).attr("id")&&"#"!=c(this).attr("href")){var a=c(this).attr("href");
c(this).attr("id");
var e=[];
e.push("utm_source="+(document.domain?document.domain.split(".").join("-"):"OAP_NoDomain"));
e.push("utm_medium=oap_weather_widget");
e.push("utm_term="+c(this).attr("id"));
e.push("utm_content="+awxWidgetInfo[m].userInfo.partner);
e.push("utm_campaign="+b.get(0).awType);
-1!=a.indexOf("?")?c(this).attr("href",a+"&"+e.join("&")):c(this).attr("href",a+"?"+e.join("&"))}})}
document&&document.URL&&document.URL.indexOf("/adc/");
var f;
if(void 0!==window.jQuery&&window.jQuery.fn.jquery.match(/^1\.9/))f=window.jQuery,G();
else{var l=document.createElement("script");
l.setAttribute("type","text/javascript");
l.setAttribute("src","https://vortex.accuweather.com/adc2010/oap/javascript/jquery-1.9.1.min.js");
l.readyState?l.onreadystatechange=function(){"complete"!=this.readyState&&"loaded"!=this.readyState||z()}:l.onload=z;
(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(l)}var e=
{current:{},threeday:{}};
"undefined"!=typeof oap3dayConfigDev?(e.css=oap3dayConfigDev.css,e.threeday.selector=oap3dayConfigDev.threedaySelector,e.threeday.baseClass=oap3dayConfigDev.threedayBaseClass,e.threeday.url=oap3dayConfigDev.threedayUrl,e.current.selector=oap3dayConfigDev.currentSelector,e.current.baseClass=oap3dayConfigDev.currentBaseClass,e.current.url=oap3dayConfigDev.currentUrl):(e.css=["https://vortex.accuweather.com/adc2010/oap/stylesheets/widgets-20170109.css"],e.threeday.selector=".aw-widget-36hour",
e.threeday.baseClass="aw-widget-36hour",e.threeday.url=window.location.protocol+"//www.accuweather.com/ajax-service/oap/3day",e.current.selector=".aw-widget-current",e.current.baseClass="aw-widget-current",e.current.url=window.location.protocol+"//www.accuweather.com/ajax-service/oap/current")})();
