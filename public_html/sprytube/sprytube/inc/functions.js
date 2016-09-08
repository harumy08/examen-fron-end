// JavaScript Document
function setVideo(idvideo) {
	var vurl = "http://www.youtube.com/v/"+idvideo;
	var vswf = new SWFObject(vurl, "id2", "300", "250", "8", "#FFFFFF");
	vswf.addParam("menu", "false");
	vswf.addParam("wmode", "transparent");
	vswf.addParam("quality", "high");
	vswf.write("swfvideo");
}
function getId(nameid) {
	return document.getElementById(nameid);
}
function getData() {
	getId('loadData').style.visibility = "visible";
	dsYouTube.setURL(varurl+"?tag="+vartag+"&pag="+varpag);
	dsYouTube.loadData();
}
function setText(varId, varText) {
	getId(varId).innerText = varText;
	getId(varId).textContent = varText;
}
function getVideo() {
	varpag = 1;
	vartag = getId("criterio").value;
	vartag = vartag.replace(" ", "-");
	setText("query", vartag);
	getData();
}
function pagVideo(pagStep) {
	if (varpag > 1 || pagStep > 0) {
		varpag = varpag + pagStep;
		setText("pagnum", varpag);
		getData();
	}
}
