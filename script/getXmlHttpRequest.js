	function getXmlHttpRequest() {
	  if (window.XMLHttpRequest) {
			try {
				return new XMLHttpRequest();
			} catch(e){}
		} else if (window.ActiveXobject) {
			 try {
				 return new ActiveXObject('Msxml2.XMLHTTP');
			 } catch(e){}
			 
			 try {
				 return new ActiveXObject('Microsoft.XMLHTTP');
			 } catch(e){}
		}
	 return null;
 }