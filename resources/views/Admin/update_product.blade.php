<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
@include('admin.css')

<body class="container-scroller">
<div class="row p-0 m-0 proBanner" id="proBanner">
    <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                    <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                <button id="bannerClose" class="btn border-0 p-0">
                    <i class="mdi mdi-close text-white me-0"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 38px;
    }
    .font_size{
        font-size: 40px;
        padding-top: 38px;
        font-family: 'Nunito', sans-serif;
    }
    .font_color{
        color: black;
    }
    label{
        display: inline-block;
        width: 200px;
    }

    .div_design{
        padding-bottom: 20px;
    }

    .div_desi{
        padding-bottom: 20px;
    }
    .text_color{
        color: black;
    }
</style>

<!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')
<!-- partial -->
@include('admin.header')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                {{session()->get('message')}}

            </div>
        @endif

        <div class="center">
            <div class="div_center">
                <h1 class="font_size">Ürün Ekle</h1>
                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                        <label> Ürün Detayları: </label>
                        <input class="font_color" type="text" name="details" placeholder="Lütfen Bilgi Giriniz." required="" value="{{$product->title}}">
                    </div>

                    <div class="div_design">
                        <label> Ürün Açıklaması: </label>
                        <input class="font_color" type="text" name="description" placeholder="Lütfen Açıklama Giriniz." required=""value="{{$product->description}}">
                    </div>

                    <div class="div_design">
                        <label> Ürün Fiyatı: </label>
                        <input class="font_color" type="number" name="price" placeholder="Lütfen Fiyat Giriniz." required=""value="{{$product->price}}">
                    </div>

                    <div class="div_design">
                        <label> Ürün Miktarı: </label>
                        <input class="font_color" type="number" name="quantity" placeholder="Lütfen Miktarını Giriniz. " required=""value="{{$product->quantity}}">
                    </div>

                    <div class="div_design">
                        <label> İndirim Miktarı: </label>
                        <input class="font_color" type="number" name="discount_price" min="0" placeholder="Lütfen İndirim Giriniz. " required=""value="{{$product->discount_price}}">
                    </div>

                       <div class="div_desi">
                        <label class=""> Ürün Kategorisi: </label>
                        <select  class="text_color" name="catagory" required="">
                            <option class="text_color" value="value="{{$product->catagory}}" selected=""> {{$product->catagory}} </option>
                            @foreach($catagory as $catagory)
                                <option value="{{$catagory->catagory_name}}"> {{$catagory->catagory_name}}</option>
                            @endforeach
                        </select>
                        </select>
                    </div>


                    <div class="div_design">
                        <label> Ürün Fotoğrafını Değiştir. </label>
                        <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}">
                    </div>



                    <div class="div_design">
                        <input  type="submit" value="Ürünü Güncelle." class="btn btn-outline-success">
                    </div>

                </form>


            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</div>
</html>
