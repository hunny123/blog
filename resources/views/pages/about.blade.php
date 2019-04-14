@extends('layouts.app')

@section('content')
<section id = "about" class = "section-padding about-section" >
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="section-title">
          <div class="section_subtitle">About Us</div>
          <h2 class = "section_main_title">WE ARE <strong>CREATIVE</strong></h2>
        </div>
        <div class="about-item">
          <p>
            <strong><h3>Blogging connect you with your people</h3></strong><br>
            <strong><h4>Express Yourself</h4></strong>
            Post text, photos, audio, anything.
            <br>
            <br>
            <br>
            <strong><h4>Connect with your people</h4></strong>
            Join other people and share. See something you love? Reblog it and start a conversation.
          </p>

          
          <div class="home-button">
            <br>
            <a href = "index.php" class = "btn-btn-background">Home</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset2">
        <div class="about-box">
          <div class="box-overlay"></div>
          <img src = "https://kenvinreviews.com/wp-content/uploads/2017/12/blogging-quotes-66-compressed.jpg" alt = "">
        </div>
      </div>
    </div>
    
    <br>
    <hr>

    <br>
    <br>
    

    <div>
      <table class = "table table-borderless text-center">
        <tr>
          <td>
            <b>Founded</b><br>
            April 2018
          </td>
          <td>
            <b>Founder</b>
            <br>
            Hunny, Krishna
          </td>
          <td></td>
      </table>
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