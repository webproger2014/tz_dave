 function delPost(self, id) {
	 ajaxClaim('controller/delComments.php', id);
 }
 function setComments(){
	 var values = document.getElementsByTagName('textarea');
	 
	  ajaxClaim('controller/filterStop.php', values[0].value)
 }
 
 function ajaxClaim(url, val) {
	 var request = getXmlHttpRequest();
	
   request.open("POST", url, true);
	 request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	 request.send('val=' + val);
	 request.onreadystatechange = function () {
		 var elem_error = 'error';
		 if (request.readyState == 4) {
			 if (request.status == 200) {
				  var error = request.responseText;
					 			
					if (error == false) {
             clearError(elem_error);						 
					} else {
						
						 console.log(error);
						 getError(elem_error, error); //Отправляем отчёт об ошибке
					} 
			 } 
		 }
	 }
 }
 
  function getError(elem_error, error) {
	 var elem = document.getElementById(elem_error);
	 
	 elem.innerHTML = error;
 }
 
  function clearError(elem_error) {
	 var elem = document.getElementById(elem_error);
	 
	 elem.innerHTML = '';
 }
 
 
  function list(url) {
	 var request = getXmlHttpRequest();

   request.open("GET", url, true);
	 request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	 request.send(null);
	 request.onreadystatechange = function () {
		 if (request.readyState == 4) {
			 if (request.status == 200) {
				  var listStop = request.responseText;			
					document.getElementById('textarna').value = listStop; 
			 } 
		 }
	 }
 }