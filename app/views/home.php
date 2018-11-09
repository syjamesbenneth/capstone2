<?php require_once "../partials/template.php"; ?>

<?php function get_page_content() { ?>

<!-- 

<div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-md-9">
              <div id="colorlib-logo"><a href="index.html">Vape Products</a></div>
            </div>
            <div class="col-sm-5 col-md-3">
                  <form action="#" class="search-wrap">
                     <div class="form-group">
                        <input type="search" class="form-control search" placeholder="Search">
                        <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                     </div>
                  </form>
               </div>
             </div>
          <div class="row">
            <div class="col-sm-12 text-left menu-1">
              <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li class="has-dropdown">
                  <a href="mods.html">Mods</a>
                  <ul class="dropdown">
                    <li><a href="product-detail.html">Product Detail</a></li>
                    <li><a href="cart.html">Shopping Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="order-complete.html">Order Complete</a></li>
                    <li><a href="add-to-wishlist.html">Wishlist</a></li>
                  </ul>
                </li>
                <li><a href="juice.html">Juice</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="sale">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
              <div class="row">
                <div class="owl-carousel2">
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">25% off on select products!</a></h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">Our biggest sale yet 50% off on selected products!</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <aside id="colorlib-hero">
      <div class="flexslider">
        <ul class="slides">
          <li style="background-image: url(images/img_bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <h1 class="head-1">Vape</h1>
                      <h2 class="head-2">Products</h2>
                      <h2 class="head-3"></h2>
                      <p class="category"><span>New trending Vape Juices</span></p>
                      <p><a href="#shopnow" class="btn btn-primary">Buy Now!</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/img_bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <h1 class="head-1">Huge</h1>
                      <h2 class="head-2">Sale</h2>
                      <h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
                      <p class="category"><span>Big sale on Juice</span></p>
                      <p><a href="#" class="btn btn-primary">Juice Collection</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center slider-text">
                  <div class="slider-text-inner">
                    <div class="desc">
                      <h1 class="head-1">New</h1>
                      <h2 class="head-2">Arrival</h2>
                      <h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
                      <p class="category"><span>New Mods for you</span></p>
                      <p><a href="#" class="btn btn-primary">Mod Collection</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          </ul>
        </div>
    </aside>
    <div class="colorlib-intro">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2 class="intro">The road to quitting smoking starts here.</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="colorlib-product">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 text-center">
            <div class="featured">
              <a name="shopnow" href="#" class="featured-img" style="background-image: url(images/17265117_1890454451176833_3551254666898924083_n.jpg);"></a>
              <div class="desc">
                <h2><a href="#">Shop for MODS</a></h2>
              </div>
            </div>
          </div>
          <div class="col-sm-6 text-center">
            <div class="featured">
              <a href="#" class="featured-img" style="background-image: url(images/42672724_2175874805968128_7741065629142089728_o.jpg);"></a>
              <div class="desc">
                <h2><a href="#">Shop for Juice</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 -->
<style type="text/css">
  
  #thover{
  position:fixed;
  background:#000;
  width:100%;
  height:100%;
  opacity: .6;
  z-index: -3;
}

#tpopup{
  position:absolute;
  width:600px;
  height:180px;
  /*background:#fff;*/
  left:50%;
  top:50%;
  border-radius:5px;
  padding:60px 0;
  margin-left:-290px; /* width/2 + padding-left */
  margin-top:-550px; /* height/2 + padding-top */
  text-align:center;
  
}
#tclose{
  position:absolute;
  background:black;
  color:white;
  right:590px;
  top:45px;
  border-radius:50%;
  width:30px;
  height:30px;
  line-height:30px;
  text-align:center;
  font-size:8px;
  font-weight:bold;
  font-family:'Arial Black', Arial, sans-serif;
  cursor:pointer;
  
}
</style>
<body class="container-fluid img-fluid card-img-top"  style="background-image: url('../assets/images/bg1.jpg')";>
<!-- <div class="row container-fluid img-fluid" style="margin-left: 80px;"> -->
  
<div class="row">
<div class="col-lg-4">
    <a href="./catalog.php">
   <div class="card" style="width: 30rem; /*position: relative; float: right;*/">
    <img class="card-img-top" src="../assets/images/img_bg_2.jpg" alt="Card image cap">
  </a>
  </div>
  </div>


<!--   <div class="col-sm-12 col-md-6 img-fluid container-fluid" style="height: 400px; width: 400px;">
    <h2> </h2>
    <p style=""><img class="img-fluid"  src="" style="height: 400px; width: 400px;"></p>
  </div> -->
  
<div class="col-lg-4">

  <div class="card" style="width: 30rem;">
  <a href="./catalog.php">
  <img class="card-img-top" style="height: 22.5rem" src="../assets/images/welcome.jpg" alt="Card image cap"></a>
  

</div>
</div>


<div class="col-lg-4">
<a href="./catalog.php">
<div class="card" style="width: 30rem; /*position: relative; float: center;*/">
  <img class="card-img-top" src="../assets/images/17265117_1890454451176833_3551254666898924083_n.jpg" alt="Card image cap">
</a>

</div>
</div>
</div>
<!-- 
<div class="card" >
  <img class="card-img-bot" style="position: absolute; float: right;" src="../assets/../assets/images/welcome.jpg" alt="Card image cap">
  
</div> -->


<!-- </div> -->
</div>

<div >
<div id="thover" class="text-center"></div>

  <div id="tpopup">
    <img class="img-fluid card-img-top text-center" src="../assets/images/landing.jpg"> 

    <div id="tclose">X</div>    
</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
  
  $("#thover").click(function(){
    $(this).fadeOut();
    $("#tpopup").fadeOut();
  });
  
  
  $("#tclose").click(function(){
    $("#thover").fadeOut();
    $("#tpopup").fadeOut();
  });
  
});

</script>
</body>
<!-- <div class="owl-carousel owl-theme">
    <div class="item" style="width:250px"><h4>1</h4></div>
    <div class="item" style="width:100px"><h4>2</h4></div>
    <div class="item" style="width:500px"><h4>3</h4></div>
    <div class="item" style="width:100px"><h4>4</h4></div>
    <div class="item" style="width:50px"><h4>6</h4></div>
    <div class="item" style="width:250px"><h4>7</h4></div>
    <div class="item" style="width:120px"><h4>8</h4></div>
    <div class="item" style="width:420px"><h4>9</h4></div>
    <div class="item" style="width:120px"><h4>10</h4></div>
    <div class="item" style="width:300px"><h4>11</h4></div>
    <div class="item" style="width:450px"><h4>12</h4></div>
    <div class="item" style="width:220px"><h4>13</h4></div>
    <div class="item" style="width:150px"><h4>14</h4></div>
    <div class="item" style="width:600px"><h4>15</h4></div>
</div>

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    margin:10,
    loop:true,
    autoWidth:true,
    items:4
})
</script> -->

<!-- <div class="row">
  <div class="column"></div>
  <div class="column"></div>
  <div class="column"></div>
</div> -->

<?php } ?>

