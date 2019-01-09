String currentdiv="";

function changecontent(){
	var xs=document.getElementsByClassName("contentpart");
	var divObjs;
	for (var i=0;i<xs.length;i++){
		divObjs[i]=xs[i].getAttribute('id');
	}
	
}