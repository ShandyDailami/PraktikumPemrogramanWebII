<!DOCTYPE html>
<html>
<head>
    <title>Star Display</title>
    <script>
        function displayStars(stars) {
            var starContainer = document.getElementById("starContainer");
            // Menghapus semua elemen anak dari starContainer
            while (starContainer.firstChild) {
                starContainer.removeChild(starContainer.firstChild);
            }
            // Menambahkan gambar bintang sebanyak yang diminta
            for (var i = 0; i < stars; i++) {
                var img = document.createElement("img");
                img.src = "star.png";
                img.alt = "star";
                img.width = "50";
                img.height = "50";
                starContainer.appendChild(img);
            }
        }
    </script>
</head>
<body>
    <h1>Star Display</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $stars = isset($_POST['stars']) ? (int)$_POST['stars'] : 5;
        echo "<div id='starContainer'>";
        // Menampilkan jumlah bintang yang diminta
        for ($i = 0; $i < $stars; $i++) {
            echo "<img src='star.png' alt='star' width='50' height='50'>";
        }
        echo "</div>";
    }
    ?>
    <form action="" method="post">
        <label for="stars">Number of Stars:</label>
        <input type="number" id="stars" name="stars" required><br><br>
        <input type="submit" value="Display">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action'])) {
            $stars = (int)$_POST['stars'];
            $action = $_POST['action'];
            if ($action == 'tambah') {
                $stars++;
            } elseif ($action == 'kurangi') {
                $stars = $stars > 0 ? $stars - 1 : 0;
            }
            // Menampilkan jumlah bintang yang diminta
            echo "<div id='starContainer'>";
            for ($i = 0; $i < $stars; $i++) {
                echo "<img src='star.png' alt='star' width='50' height='50'>";
            }
            echo "</div>";
        }
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="stars" value="<?php echo isset($stars) ? $stars : 0; ?>">
        <input type="hidden" name="action" value="kurangi">
        <input type="submit" value="Kurangi Bintang">
    </form>

    <form action="" method="post">
        <input type="hidden" name="stars" value="<?php echo isset($stars) ? $stars : 0; ?>">
        <input type="hidden" name="action" value="tambah">
        <input type="submit" value="Tambah Bintang">
    </form>
</body>
</html>