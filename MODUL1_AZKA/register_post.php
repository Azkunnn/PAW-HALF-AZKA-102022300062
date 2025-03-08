<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa (POST)</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran Mahasiswa (POST)</h2>
        <form action="process_post.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Daftar">
        </form>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="file">Select file:</label>
            <input type="file" name="file" id="file">
            <input type="submit" name="submit" value="Upload">
        </form>


    </div>
</body>
</html>
