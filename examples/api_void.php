<?php
require __DIR__ . '/bootstrap.php';

$oid = isset($_POST['oid']) ? $_POST['oid'] : '';
?>
<form method="post" action="">
OID: <input type="text" name="oid" value="<?php echo htmlspecialchars($oid);?>">
<button type="submit">Process</button>
</form>
<hr>
<pre>
<?php
if ($oid) {
	$result = $merchantService->voidOverNestpayApi($oid);

	print_r($result);
}
?>
</pre>
