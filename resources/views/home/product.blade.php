<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Parking Spaces
        </h2>
      </div>
      <div class="row">

        @foreach($product as $products)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
           
              <div class="img-box">
                <img width="200" height="200"src="/storage/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  {{$products->title}}
                </h6>  <br/>              
                <h6>
                  Price
                  <span>
                    ${{$products->price}}
                  </span>
                </h6>
              </div>              
           <div style="padding:10px"><a class ="btn btn-danger" href="{{url('product_details',$products->id)}}">Details</a></div>
           <a  class ="btn btn-primary" href="{{url('add_cart',$products->id)}}">Reserve</a>
           @endforeach

          </div>

        
        </div>
      </div>



      
    </div>
</br></br>
</section>
