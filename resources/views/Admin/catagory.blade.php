<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
     <style type="text/css">
        .div_center{
          text-align: center;
            padding-top: 38px;
        }
        .h2_font{
         font-size: 40px;
            padding-top: 38px;
            font-family: 'Nunito', sans-serif;
        }
        .input_color{
            color: black;
        }
        .center{
            margin: auto;
            width: 65%;
            text-align: center;
            margin-top: 40px;
            border: 5px;
            border-style: inset;
            border-color: white;

        }
     </style>

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
                <div class="div_center">
                <h2 class="h2_font">
                    Katagori Ekle
                </h2>
              <form action="{{('/add_catagory')}}" method="POST">
                  @csrf
                  <input class="input_color" type="text" name="catagory" placeholder="Seçenek Giriniz.">
                  <input type="submit" class="btn btn-outline-success" name="submit" value="Kategori Ekle.">
              </form>
                     <table class="center">

                             <tr>
                                 <td>Katagori İsmi </td>
                                 <td>İşlem</td>
                             </tr>

                         @foreach($data as $data)

                         <tr>
                             <td>{{$data->catagory_name}}</td>
                             <td>

                                 <a onclick="return confirm('Silmektesiniz!')" class="btn btn-outline-warning" href="{{url('delete_catagory',$data->id)}}"> Delete</a>
                             </td>

                         </tr>



                         @endforeach
                     </table>

                </div>
            </div>
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
        </body>
</html>
