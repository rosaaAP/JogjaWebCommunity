<html>
<head>
    <title>reCAPTCHA Example</title>
</head>
<body>
<form action="<?php echo site_url('Test'); ?>" method="post">
<?php echo $widget;?>
<?php echo $script;?>
<br />
<input type="submit" value="submit" />
</form>
</body>
</html>
