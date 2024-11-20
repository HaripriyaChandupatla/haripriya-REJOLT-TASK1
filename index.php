<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="gallery-grid">
        <?php
        $dir = "images/";
        $images = array_diff(scandir($dir), array('.', '..'));

        foreach ($images as $image) {
            echo "<div class='gallery-item'>
                    <img src='$dir$image' alt='$image' class='thumbnail' onclick='openLightbox(\"$dir$image\")'>
                  </div>";
        }
        ?>
    </div>

    <div id="lightbox" class="lightbox">
        <span class="close" onclick="closeLightbox()">&times;</span>
        <img id="lightbox-img" class="lightbox-content">
    </div>

    <script src="script.js"></script>
</body>
</html>
