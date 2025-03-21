<?php
// Display all notes
$notes = glob('notes/*.txt');

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>My Notes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .notes-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #f8f9fa;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
            text-align: left;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class='notes-container'>
        <h1>My Notes</h1>
        <ul>";

foreach ($notes as $note) {
    $content = file_get_contents($note);
    echo "<li>$content</li>";
}

echo "</ul>
        <a href='add_note.php'>Add a New Note</a>
    </div>
</body>
</html>";
?>