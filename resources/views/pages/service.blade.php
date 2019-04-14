


@extends('layouts.app')

@section('content')
<section id = "about" class = "section-padding about-section" >
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="section-title">
          <div class="section_subtitle">Services</div>
          <h2 class = "section_main_title">IT IS <strong>PERFECT</strong></h2>
        </div>
        <div class="about-item">
          <h3>It's never too late to start</h3>
          <div class="home-button">
              <a href = "index.php" class = "btn-btn-background">POST NOW</a>
          </div>

          <br><br>

          <table class = "table table-borderless table-hover">
            <tr>
              <td>Post text, photos</td>
            </tr>
            <tr>
              <td>Edit and delete your posts</td>
            </tr>
            <tr>
              <td>Review other users posts</td>
            </tr>
            <tr>
              <td>Comment on different post</td>
            </tr>
            <tr>
              <td>Interact with people</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset2">
        <div class="about-box">
          <div class="box-overlay"></div>
          <img src = "https://www.browsewire.net/wp-content/uploads/2017/11/blog-img.jpg" alt = "">
        </div>
      </div>
    </div>

  </div>
</section>
@endsection


<style>

  .section_title{} .section_subtitle{
    margin-bottom :7px;
    padding-left: 7px;
    font-size : 40px;
    line-height: 1;
    text-transform:uppercase;
    color:green;
    border-left : 3px solid #bfa67a;

    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }
  .section_main_title{
    margin-top:0;
    margin-bottom:37px;
    font-size:30px;
    line-height: 1.27;
    font-weight: 300;
  }

  .section_main_title strong{
    font-weight: :600;
  }

  .about-box{
    -webkit-box-shadow :0 0 0 10px #000000 inset;
    box-shadow : 0 0 0 10px #000000 inset;
    margin-right: 0;
    margin-top : 0;
    position :relative;
    display: block;
  }
  .about-box img{
    transform:translateY(30px) translateX(-30px);
    -webkit-transform:translateY(30px) translateX(-30px);
    width:100%;
    z-index:1;
  }


  .btn-btn-background{
    -moz-user-select:none;
    background-image: -webkit-linear-gradient(145deg ,#faa61f 0% , #faa61f 0% , #ed1847 100%);
    border:1px solid #bfa67a;
    border-radius: 2px;
    color:#ffffff;
    cursor:pointer;
    display: inline-block;
    font-size:14px;
    line-height: 1.42857;
    margin-bottom:0;
    padding:12px 48px;
    text-align:center;
    text-transform:uppercase;
    transition:all 0.5s ease 0s;
    vertical-align: middle;
    
  
  }
  .btn-btn-background:hover{
    text-decoration: none;
    color:#272627;
    background:transparent;
  }
</style>
