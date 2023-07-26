<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Upload a Photo or File</h1>
        <form action="/upload" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" class="input-file">
            <label for="file" class="btn">Choose File</label>
            <span id="file-name">No file selected</span>
            <input type="submit" value="Upload" class="btn">
        </form>
    </div>
</body>
</html>
