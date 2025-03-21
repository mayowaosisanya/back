<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = trim($_POST['note']);

    if (!empty($note)) {
        $filename = 'notes/' . uniqid() . '.txt';
        file_put_contents($filename, $note);
        header('Location: index.php');
        exit;
    } else {
        $errorMessage = "Note cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
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
        .add-note-container {
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
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .error {
            color: #dc3545;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="add-note-container">
        <h1>Add a New Note</h1>
        <?php if (isset($errorMessage)): ?>
            <div class="error"><?php echo $errorMessage; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <textarea name="note" rows="5" placeholder="Enter your note here..." required></textarea><br><br>
            <button type="submit">Save Note</button>
        </form>
        <a href="index.php">Back to Notes</a>
    </div>
</body>
</html>