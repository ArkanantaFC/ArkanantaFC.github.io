<?php
    $name = "Arkananta Fausta Citra Setia Budhi";
    $student_id = "102022300328";
    $major = "FRI / SISTEM INFORMASI";
    $instagram = "https://www.instagram.com/arkanantafausta/";
    $github = "https://github.com/ArkanantaFC";
    $youtube = "https://youtube.com/@arkanantafausta6745?si=pe-C-XTw3OVb2Tdt";
    $tiktok = "https://www.tiktok.com/@kanantaaaa?_t=ZS-8uP3QhITPqp&_r=1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <nav>
            <a href="#">Home</a>
            <a href="#">About Me</a>
            <a href="#">Kontak</a>
        </nav>
    </header>
    
    <!-- Main Content -->
    <main class="container">
        <div class="profile-card">
            <div class="profile-info">
                <h1><?php echo $name; ?></h1>
                <p class="student-id"><?php echo $student_id; ?></p>
                <p class="major"><?php echo $major; ?></p>
                <div class="social-icons">
                    <a href="<?php echo $instagram; ?>" class="icon instagram"><i class="fab fa-instagram"></i></a>
                    <a href="<?php echo $github; ?>" class="icon github"><i class="fab fa-github"></i></a>
                    <a href="<?php echo $youtube; ?>" class="icon youtube"><i class="fab fa-youtube"></i></a>
                    <a href="<?php echo $tiktok; ?>" class="icon tiktok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="profile-photo">
                <img src="Gambar1.jpg" alt="Profile Picture">
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <hr>
        <p class="thanks">Terima Kasih Telah Mengunjungi!</p>
        <p class="message">Semoga informasi ini bermanfaat.</p>
        <p class="copyright">&copy; <?php echo date("Y"); ?> <?php echo $name; ?>. All rights reserved.</p>
    </footer>
</body>
</html>
