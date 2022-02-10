<html>
    <head>
        <title>Picture CRUD</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <!-----method="post" is used for multiple files ,else method = "get" used for single file ----->
        <form method="post" action="insert.php" enctype="multipart/form-data">
            <label>Name</label>
            <input type = "text" name = 'N'>
            <label>Image</label>
            <input type = "file" name = 'I'>
            <input type='submit' value = 'Save'>
        </form>
    </body>
</html>