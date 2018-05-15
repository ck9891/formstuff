<?php
 
require_once 'form_list.php';
require_once 'Form.class.php';
$form = new Form($contact_form);
$form_html = $form->build();
?>

<!DOCTYPE html>
<html>
<head>
	<title>The index file</title>
</head>
<body>
<?php echo $form_html; ?>
</body>
</html>