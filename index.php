<form method="post" name="form1">
 <table border="0" cellpadding="0" cellspacing="0" width="60%"><tbody>


  <tr>
   <td width="150">Country</td>
   <td width="150"><select style="background-color: #ffffa0" name="country" onchange="getState(this.value)"><option>Select Country</option><option value="1">USA</option><option value="2">Canada</option>       </select></td>


  </tr>
 <tr>
  <td>State</td>
  <td>
  <p id="statediv">
  <select style="background-color: #ffffa0" name="state"><option>Select Country First</option>       </select></td>


</tr>
<tr>
  <td>City</td>
  <td>
  <p id="citydiv">
  <select style="background-color: #ffffa0" name="city"><option>Select State First</option>       </select></td>


</tr>
</tbody></table>
</form>
<script>
unction getState(countryId)
{
   var strURL="findState.php?country="+countryId;
   var req = getXMLHTTP();
   if (req)
   {
     req.onreadystatechange = function()


     {
      if (req.readyState == 4)
      {
	 // only if "OK"
	 if (req.status == 200)
         {
	    document.getElementById('statediv').innerHTML=req.responseText;
	 } else {


   	   alert("There was a problem while using XMLHTTP:\n" + req.statusText);
	 }
       }
      }
   req.open("GET", strURL, true);
   req.send(null);
   }
}
</script>
