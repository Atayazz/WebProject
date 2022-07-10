<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    <style>


        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Open Sans', sans-serif;
        }
        body{
            line-height: 1.5;
        }
        .card-wrapper{
            max-width: 1100px;
            margin: 0 auto;
        }
        img{
            width: 50%;
            display: block;
        }
        .img-display{
            overflow: hidden;
        }
        .img-showcase{
            display: flex;
            width: 100%;
            transition: all 0.5s ease;
        }
        .img-showcase img{
            min-width: 100%;
        }
        .img-select{
            display: flex;
        }
        .img-item{
            margin: 0.3rem;
        }
        .img-item:nth-child(1),
        .img-item:nth-child(2),
        .img-item:nth-child(3){
            margin-right: 0;
        }
        .img-item:hover{
            opacity: 0.8;
        }
        .product-content{
            padding: 2rem 1rem;
        }
        .product-title{
            font-size: 3rem;
            text-transform: capitalize;
            font-weight: 700;
            position: relative;
            color: #12263a;
            margin: 1rem 0;
        }
        .product-title::after{
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            width: 80px;
            background: #12263a;
        }
        .product-link{
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
        }
        .product-link:hover{
            opacity: 0.9;
        }
        .product-rating{
            color: #ffc107;
        }
        .product-rating span{
            font-weight: 600;
            color: #252525;
        }
        .product-price{
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
        }
        .product-price span{
            font-weight: 400;
        }
        .last-price span{
            color: #f64749;
            text-decoration: line-through;
        }
        .new-price span{
            color: #256eff;
        }
        .product-detail h2{
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
        }
        .product-detail p{
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
        }
        .product-detail ul{
            margin: 1rem 0;
            font-size: 0.9rem;
        }
        .product-detail ul li{
            margin: 0;
            list-style: none;
            background: left center no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.4rem 0;
            font-weight: 600;
            opacity: 0.9;
        }
        .product-detail ul li span{
            font-weight: 400;
        }
        .purchase-info{
            margin: 1.5rem 0;
        }
        .purchase-info input,
        .purchase-info .btn{
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.2rem;
            margin-bottom: 1rem;
        }
        .purchase-info input{
            width: 60px;
        }
        .purchase-info .btn{
            cursor: pointer;
            color: #fff;
        }
        .purchase-info .btn:first-of-type{
            background: #256eff;
        }
        .purchase-info .btn:last-of-type{
            background: #f64749;
        }
        .purchase-info .btn:hover{
            opacity: 0.9;
        }



        @media screen and (min-width: 992px){
            .card{
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }
            .card-wrapper{
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .product-imgs{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .product-content{
                padding-top: 0;
            }
        }
    </style>
    <!-- end slider section -->


<div class = "card-wrapper">
    <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
            <div class = "img-display">
                <div class = "img-showcase">
                    <img src = "product/{{$product->image}}" alt = " image">
                    <img src = "" alt = " image">
                    <img src = "" alt = " image">
                    <img src = "" alt = " image">
                </div>
            </div>
            <div class = "img-select">
                <div class = "img-item">
                    <a href = "#" data-id = "">
                        <img src = "" alt = "">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "">
                        <img src = "" alt = "">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "">
                        <img src = "" alt = "">
                    </a>
                </div>
                <div class = "img-item">
                    <a href = "#" data-id = "">
                        <img src = "" alt = "">
                    </a>
                </div>
            </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
            <h2 class = "product-title">{{$product->title}}</h2>
            <div class = "product-rating">
                <i class = "fas fa-star-half-full"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star"></i>
                <i class = "fas fa-star-half-alt"></i>
                <span>4.7(21)</span>
            </div>

            <div class = "product-price">

                <p class = "last-price"> Eski Fiyat: <span>₺{{$product->price}}</span></p>
                    <br>

                <p class = "new-price">Yeni Fiyat: <span>₺{{$product->discount_price}}</span></p>
            </div>

            <div class = "product-detail">
                <h2>Ürün Hakkında: </h2>
                <p>{{$product->description}} </p>

                <ul>
                    <li>Renk: <span>Ürün Rengi</span></li>
                    <li>Stok: <span>{{$product->quantity}}</span></li>
                    <li>Kategori: <span>{{$product->catagory}}</span></li>
                    <li>Kargo: <span>Dünyanın her yerine gönderim yapılmaktadır. </span></li>
                    <li>Kargo Ücreti: <span>Bedava</span></li>
                </ul>
            </div>

            <div class = "purchase-info">
                <input type = "number" min = "0" value = "1">
                <button type = "button" class = "btn">
                    Kart Ekle. <i class = "fas fa-shopping-cart"></i>
                </button>

            </div>
        </div>
    </div>
</div>
</body>

<script >
    const imgs = document.querySelectorAll('.img-select a');
    const imgBtns = [...imgs];
    let imgId = 1;

    imgBtns.forEach((imgItem) => {
        imgItem.addEventListener('click', (event) => {
            event.preventDefault();
            imgId = imgItem.dataset.id;
            slideImage();
        });
    });

    function slideImage(){
        const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

        document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
    }

    window.addEventListener('resize', slideImage);
</script>
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By GaijinCloud<br>



    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
