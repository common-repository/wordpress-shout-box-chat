 
<div id="ctitle">Login to Chat</div> 
<table>
	<tr>
		<td>Enter Nick:</td>
	</tr>
	<tr>
		<td>	
        <form onsubmit="Login();return false;">
<input type="text" name="T1" id="user" size="15"><input type="submit" value="Enter" name="B1">
</form>
		</td>
	</tr>
</table>
<script language="javascript">
<!--
function Login(){
ahm.get('<?php echo ($baseurl); ?>/wp-content/plugins/wordpress-shout-box-chat/chat.php?base=<?php echo base64_encode($baseurl); ?>&userid='+ahm('#user').val(),function(res){

ahm('#chatmain').html(res);

});
}
//-->
</script>
 