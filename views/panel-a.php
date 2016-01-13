
Тут всё запрещённые слова
<textarea id="textarna">
</textarea>
<button onclick="setStop()">Изменить</button>
<script>
 
 function listStop() {
	 list('controller/list.php');
 }
 
 listStop();
 
 function setStop() {
	 var val = document.getElementById('textarna').value;
	 
	 ajaxClaim('controller/setStop.php', val);
 }
</script>