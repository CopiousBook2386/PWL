<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
</head>
<body>
    <h1>Login</h1>
    <?php echo form_open(site_url('login-auth')) ?>
    Email : <input type="text" name="email" id=""><br>
    Password : <input type="password" name="paswd" id=""><br>
    <button type='submit'>Login</button>
    <?php echo form_close()?>
</body>
</html>