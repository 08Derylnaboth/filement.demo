<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_deg{
        display:flex;
        justify-content:center;
        align-items:center;
        margin:60px;
    }

    table{
        border:2px solid black;
        text-align:center;
        width:800px;
    }

    th{
        border:2px solid black;
        text-align:center;
        color:white;
        font:20px;
        font-weight:bold;
        background-color:black;
    }

    td{
        border:1px solid black;
    }

    .cart_value{
        text-align:center;
        margin-bottom:70px;
        padding:18px;
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
   <div class ="div_deg"><table>
        <tr>
        <th>Product Title</th>
        <th>Price</th>
        <th>Image</th>
        </tr>
        <?php
        $value =0;
        ?>
        @foreach($cart as $cart)
        <tr>
            <td>{{$cart->product->title}}</td>
            <td>{{$cart->product->price}}</td>
            <td><image width="150" height="150"src="/storage/{{$cart->product->image}}"></td>

        </tr>
        <?php
        $value=$value+$cart->product->price;
        ?>
        @endforeach

    </table>
    </div>
    <div class="cart_value"><h3>Total value of cart is:${{$value}}</h3></div>
  <!-- products section -->


  <!-- end products section -->


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