<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  
  <style type="text/css">
    .div_center{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:30px;
    }
    .detail-box{
        padding:15px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

    

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- products details start -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">

       
        <div class=" col-md-12 ">
          <div class="box">
           
              <div class="div_center">
                <img src="{{$data->image}}" alt="" width= "400">
              </div>
              <div class="detail-box">
                <h6>
                  {{$data->title}}
                </h6>
                <h6>
                  Price
                  <span>
                    ${{$data->price}}
                  </span>
                </h6>
              </div>
              
          </div>

         
        </div>




      
    </div>
  </section>
 

  <!-- end products details section -->


  <!-- contact section -->

 
  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>