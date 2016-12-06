
function init() {
   
var storage = window.localStorage;

var propertyType 	= storage.getItem('property_type');
var type 			= storage.getItem('typeh'); 
var commune 		= storage.getItem('commune'); 

var urlIframe = '<iframe id="iframe" src="http://tourisme.gardrhodanien.media/property/?wpp_search%5Btamp%5D=1&wpp_search%5Bsort_order%5D=ASC&wpp_search%5Bsort_by%5D=commune&wpp_search%5Bpagination%5D=on&wpp_search%5Bper_page%5D=10000&wpp_search%5Bstrict_search%5D=false' ;
urlIframe += "&wpp_search%5Bproperty_type%5D="+propertyType;
urlIframe += "&wpp_search%5Blocalisation%5D=-1";
urlIframe += "&wpp_search%5Bcommune%5D="+commune;
urlIframe += "&wpp_search%5Badherant_ot%5D=true";
if (type != null) {
	urlIframe += "&wpp_search%5Btype_hebergement%5D%5B0%5D="+type;
}
urlIframe += '&view=fiche" width="100%" height="110%" ></iframe>';
	document.getElementById("page-content-scroll").innerHTML( urlIframe);

}