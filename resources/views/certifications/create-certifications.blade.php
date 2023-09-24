<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belinda's Portfolio Website using CSS, HTML, JS | My Certifications - Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    <br>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('certifications.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="create-container">
            <h1>Post Certification</h1>
            <hr>
            <br>

            <!-- for in label tag and name in input tag has to be the same with the variable name -->
            <div class="form-group">
                <label for="certif_name">Certification Name</label>
                <input type="text" placeholder="please input your certification name (max 200 characters)" name="certif_name" class="form-control" required autofocus>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_organization">Certification Body</label>
                <input type="text" placeholder="please input the organization/body that gives the certification (max 200 characters)" name="certif_organization" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_desc">Certification Description</label>
                <textarea placeholder="please input the description of your certification (max 200 characters)" name="certif_desc" class="form-control"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_category">Certification Category</label>
                <input type="text" placeholder="please input the category of your certification (max 100 characters)" name="certif_category" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="certif_date">Certification Date</label>
                <input type="text" placeholder="please input the date when your certification's given (in YYYY-MM format)" name="certif_date" class="form-control" required>
            </div>
            <br>
            <div class="form-group upload-file">
                <label for="certif_image">Upload Certification Image</label>
                <input type="file" name="certif_image" class="form-control-file" required>
            </div>
            <br>
            <button type="submit" class="submit-btn">Post</button>
        </div>
    </form>
</body>
</html>

<!-- the style.css reference link can't work, thus I'll just put style in the same file with the HTML code below -->
<style>
    body {
        background-color:purple;
    }

    .alert {
        margin-bottom: 12px;
        padding: 12px;
        border-radius: 4px;
    }

    .alert-danger {
        background-color:purple;
        color:red;
        border-color:purple;
    }

    .create-container {
        max-width: 800px;
        min-height: 130vh;
        margin: 0 auto;
        padding: 0 3%;
        border: 1px solid white;
        background-color:palevioletred;
    }

    .create-container h1 {
        text-decoration: none;
        font-weight: bolder;
        font-size: 30px;
    }

    .form-group {
        margin-bottom: 20px;
        font-size: 20px;
    }

    .form-control {
        width: 100%;
        max-width: 500px;
        padding: 12px 16px;
        border: 1px solid pink;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px;
    }

    .upload-file input[type="file"] {
        display: block;
        margin-top: 5px;
        font-size: 15px;
    }

    button {
        /* background-color:black; */
        border-radius: 4px;
        /* padding: 15px 32px; */
        padding: 8px 16px;
        text-decoration: none;
        justify-content: center;
        align-items: center;
        text-align: center;
        display: inline-block;
        position: relative;
        font-size: 20px;
        border: 1px solid whitesmoke;
        padding: 3px;
        width: 150px;
        height: 35px;
        background-color:black;
    }

    .submit-btn {
        color:greenyellow;
    }

    .submit-btn:hover {
        color:aqua;
    }
</style>
