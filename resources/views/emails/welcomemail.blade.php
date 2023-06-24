<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome aboard FloralGallery</title>
</head>
<body>
    <h2> Welcome {{$user->first_name}},</h2>
    <p style="font-size: 20px"> 
        Welcome to FloralGallery 🌺, your virtual haven for all things floral! 
        We're thrilled that you've joined our vibrant community using your email {{$user->email}}. 
        Explore our exquisite collection of bouquets, arrangements, and gifts crafted with love. 
        Let the fragrance and beauty of nature inspire you as you embark on a delightful floral journey with us. <br>
        Happy shopping! 🌻
    </p>
    <p style="font-size: 22px;">
        Regards<br>
        <span style="color:#EF62A7;">Floral</span><span class="text-black">Gallery</span>
    </p>
</body>
</html>