<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
              .center{
                  margin: auto;
                  width: 50%;
                  border: 4px solid white;
                  border-collapse: collapse;
                  text-align: center;
                  margin-top: 40px;
              }
              .font_size{
                  text-align: center;
                  font-size: 40px;
                  padding-top: 20px;
              }
              .img_size{
                  width: 100px;
                  height: 100px;
              }
              .th_color{
                  background: #0a58ca;
              }
              .redx{
                  padding: 35px;
                  margin: 15px;
              }
    </style>

    <div class="container-scroller">
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
                <h2 class="font_size">Tüm Ürünler</h2>
                <table class="center">

                    <tr class="th_color">
                        <th class="redx">Ürün Adı</th>
                        <th class="redx">Ürün Özeti</th>
                        <th class="redx">Adet</th>
                        <th class="redx">Kategori</th>
                        <th class="redx">Fiyat</th>
                        <th class="redx">İndirim</th>
                        <th class="redx">Ürün Fotoğrafı</th>
                        <th class="redx">Sil</th>
                        <th class="redx">Düzenle</th>

                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                            <img class="img_size" src="/product/{{$product->image}}">
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Silmekte Emin Misiniz?')" href="{{url('delete_product',$product->id)}}">Sil</a>
                        </td>

                        <td><a class="btn btn-warning" href="{{url('update_product',$product->id)}}">Düzenle</a></td>

                    </tr>
                    @endforeach
                </table>
                </div>

        </div>
        <!-- container-scroller -->
        <!-- plugins:js  <div class="main-panel">
            <div class="content-wrapper">-->
        @include('admin.script')
        <!-- End custom js for this page -->

        </body>
</div>
</html>
