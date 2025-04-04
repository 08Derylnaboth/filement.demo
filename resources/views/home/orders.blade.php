<!DOCTYPE html>
<html>

<head>
  @include('home.css')

    <style type="text/css">
        .div_center{
            display:flex;
            justify-content:center;
            align-items:center;
            margin:60px;
        }

        table{
            border:20px solid black;
            text-align:center;
            width:800px;
        }

        th{
            border:2px solid skyblue;
            background-colour:black;
            color:white;
            font-size:19px;
            font-weight:bold;
            text-align:center;
        }

        td{
            border:1px solid skyblue;
            padding:10px;
        }
    </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
        <div class="div_center">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Image</th>
                </tr>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>{{$order->product->price}}</td>
                    <td>{{$order->product->status}}</td>
                    <td>{{$order->product->image}}</td>
                </tr>
            </table>
        </div>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

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