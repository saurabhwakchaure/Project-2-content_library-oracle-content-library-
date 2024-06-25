<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        input[type="file"] {
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="upload" method="post" enctype="multipart/form-data">
        <h2>File Name </h2>
        <input type="text" name="file_name" required><br><br>
        <h2>Desc</h2>
        <input type="text" name="description" required><br>
        <h2>Upload PDF File</h2>
        <label for="pdfFile">Select PDF file:</label>
        <input type="file" name="pdfFile" accept="application/pdf"  required>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
