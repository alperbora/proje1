<!DOCTYPE html>
<html>
<head>
    <title>Gönderilen Veriler</title>
</head>
<body>
    <h2>Gönderilen Veriler:</h2>
    <?php
        //iletisim formundan verileri ceker
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            //iletisim formundan cektigi verileri ekrana yazar
            echo "<p>Ad: " . htmlspecialchars($name) . "</p>";
            echo "<p>E-posta: " . htmlspecialchars($email) . "</p>";
            echo "<p>Mesaj: " . htmlspecialchars($message) . "</p>";
        }
    ?>
</body>
</html>