<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <ul>
                <li><a href="index_en.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="cv_en.html"><i class="fas fa-user"></i> CV</a></li>
                <li><a href="work_en.html"><i class="fas fa-briefcase"></i> Work</a></li>
                <li><a href="contact_en.html"><i class="fas fa-envelope"></i> Contact</a></li>
                <li><a href="blog_en.php"><i class="fas fa-blog"></i> Blog</a></li>
                <li><a href="blog.php"><i class="fas fa-globe"></i> العربية</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="card">
            <h2>Latest Posts</h2>
            <?php include 'fetch_data.php'; ?>
        </div>
    </div>
    <footer>
        <p>© 2024 All rights reserved</p>
    </footer>
</body>
</html>
