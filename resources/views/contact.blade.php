<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Contact</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @include('partials.navbar')

    <section class = "contact">
        <div class = "contact-content">
            <div class = "contact-left">
                <div class = "title">
                    <h3>Let's get in touch</h3>
                </div>
                <hr>
                <div class = "message-form">
                    <h3>Send a Message</h3>
                    <br>
                    <div class = "submit-form">
                        <form>
                            @csrf

                            <div class = "form-box">
                                <label for = "name">Your Name</label>
                                <br>
                                <input type = "text" placeholder = "please input your name" name = "name" required autofocus>
                            </div>
                            <div class = "form-box">
                                <label for = "email">Your Email</label>
                                <br>
                                <input type = "email" placeholder = "please input your email" name = "email" required>
                            </div>
                            <div class = "form-box">
                                <label for = "phone-number">Your Phone Number</label>
                                <br>
                                <input type = "text" placeholder = "please input your phone number, e.g. +628112345678" name = "phone-number" required>
                            </div>
                            <div class = "form-box">
                                <label for = "message">Message</label>
                                <br>
                                <textarea placeholder = "write your message here..." name = "message" required></textarea>
                            </div>
                        </form>
                    </div>
                    <br>
                    <a href = "#" class = "btn">Send</a>
                </div>
            </div>
            <div class = "contact-right">
                <div class = "contact-info">
                    <div class = "box">
                        <div class = "icon">
                            <a href = "#" class = "fa fa-map-marker"></a>
                        </div>
                        <div class = "txt">
                            <h3>Address</h3>
                            <p>Sunny Road 1655A, West Jakarta</p>
                        </div>
                    </div>
                    <div class = "box">
                        <div class = "icon">
                            <a href = "#" class = "fa fa-envelope"></a>
                        </div>
                        <div class = "txt">
                            <h3>Email</h3>
                            <p>belinda.jiahong@gmail.com</p>
                        </div>
                    </div>
                    <div class = "box">
                        <div class = "icon">
                            <a href = "#" class = "fa fa-phone"></a>
                        </div>
                        <div class = "txt">
                            <h3>Phone Number</h3>
                            <p>+6282112615700</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class = "footer">
        <div class = "contact-social-media">
            <h3>Contact Me</h3>
            <br>
            <br>
            <ul>
                <li>
                    <a href = "https://m.facebook.com/profile.php/?id=100010089589139&name=xhp_nt__fb__action__open_user" class = "fa fa-facebook"></a>
                    <a href = "https://twitter.com/belzsugarlove18" class = "fa fa-twitter"></a>
                    <a href = "https://instagram.com/bel.ganzz1?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class = "fa fa-instagram"></a>
                    <a href = "https://www.linkedin.com/in/belinda-gan-4300b31b7/" class = "fa fa-linkedin"></a>
                </li>
            </ul>
            <br>
            <br>
            <p>Created by Belinda Gan | &copy;2023</p>
        </div>
    </section>
</body>
</html>
