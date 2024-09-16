<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>المدونة</h1>
        <nav>
            <ul>
                <li><a href="index.html"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li><a href="cv.html"><i class="fas fa-user"></i> السيرة الذاتية</a></li>
                <li><a href="work.html"><i class="fas fa-briefcase"></i> أعمالي</a></li>
                <li><a href="contact.html"><i class="fas fa-envelope"></i> اتصل بي</a></li>
                <li><a href="blog.php"><i class="fas fa-blog"></i> المدونة</a></li>
                <li><a href="blog_en.php"><i class="fas fa-globe"></i> English</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">
        <div class="card">
            <h2>أحدث المقالات</h2>
            <?php include 'fetch_data.php'; ?>
        </div>
    </div>
    <footer>
        <p>© 2024 جميع الحقوق محفوظة</p>
    </footer>
</body>
</html>
