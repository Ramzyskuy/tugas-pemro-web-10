<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
    <h1>Mencari Status Bilangan</h1>

    <?php
    $bilangan = $_POST['bil'];

    // ----------------------------------------------------------------
    // CARA KE - 1: Menggunakan If-Else Bertingkat (Nested If-Else)
    // ----------------------------------------------------------------

    if ($bilangan > 0) {
        echo "<p>Bilangan " . $bilangan . " adalah positif</p>";
    } else {
        if ($bilangan < 0) {
            echo "<p>Bilangan " . $bilangan . " adalah negatif</p>";
        } else {
            echo "<p>Bilangan " . $bilangan . " adalah nol</p>";
        }
    }
    
    // ----------------------------------------------------------------
    // CARA KE - 2: Menggunakan Variabel Status
    // ----------------------------------------------------------------

    if ($bilangan > 0) {
        $status = "positif";
    } else {
        if ($bilangan < 0) {
            $status = "negatif";
        } else {
            $status = "nol";
        }
    }

    echo "<p>Bilangan " . $bilangan . " adalah bilangan " . $status . ".</p>";
    ?>

</body>
</html>