<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | Home</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @include('partials.navbar')

    <section class = "home">
        <div class = "home-content">
            <h3>Hello, I'm</h3>
            <br>
            <h1>Belinda Gan</h1>
            <br>
            <h2><span class = "multiple-text">a Backend Developer</span></h2>
            <br>
            <br>
            <br>
            <p>Enthusiastic and self-motivated backend designer with around 3 initial projects who loves learning and improving.</p>
            <br>
            <br>
            <div class = "home-social-media">
                <ul>
                    <li>
                        <a href = "https://m.facebook.com/profile.php/?id=100010089589139&name=xhp_nt__fb__action__open_user" class = "fa fa-facebook"></a>
                        <a href = "https://twitter.com/belzsugarlove18" class = "fa fa-twitter"></a>
                        <a href = "https://instagram.com/bel.ganzz1?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class = "fa fa-instagram"></a>
                        <a href = "https://www.linkedin.com/in/belinda-gan-4300b31b7/" class = "fa fa-linkedin"></a>
                    </li>
                </ul>
            </div>
            <br>
            <br>
            <br>
            <a href = "https://drive.google.com/drive/folders/1k8ocaGRu__PQPHY02wknlKBSnaDhnv_J" class = "btn">Download My Resume Here</a>
        </div>

        <div class = "pp">
            <div class = "pp-img">
                <img src = "assets/Belinda_pp2.jpeg">
            <div>
        </div>
    </section>

    <script src = "app.js"></script>
</body>
</html>
