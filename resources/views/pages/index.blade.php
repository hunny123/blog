








@extends('layouts.app')

@section('content')
<div class="container-fluid banner2 mt-2 text-center">
	<div class="row">
		<div class="col-lg-6 mt-5">
	<img src="https://blog.hubspot.com/hs-fs/hub/53/file-23115630-jpg/blog/images/blogging_image.jpg" alt="Blog_image" class="img-fluid">
    <br>
<a role="button" class="btn btn-danger mt-2 btn-lg" href="login">Login</a>
<a role="button" class="btn btn-danger mt-2 btn-lg" href="register">Sign In</a>
</div>
<div class="col-lg-6">
	<img src="graphics.png">
</div>
</div>
</div>
<section id = "service" class = "section-padding about-section mt-5" >
	<div class="container mt-5">
	  <div class="row">
		<div class="col-sm-6">
		  <div class="section-title">
			<div class="section_subtitle">Services</div>
			<h2 class = "section_main_title">IT IS <strong>PERFECT</strong></h2>
		  </div>
		  <div class="about-item">
			<h3>It's never too late to start</h3>
			<div class="home-button">
				<a href = "service.php" class = "btn-btn-background">Read More</a>
			</div>
  
			<br><br>
  
			
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
<section id = "about" class = "section-padding about-section mt-5" >
  <div class="container mt-5">
    <div class="row mt-5">
      
      
      <div class="col-sm-6 col-sm-offset2">
        <div class="about-box mt-5">
          <div class="box-overlay"></div>
          <img src = "https://kenvinreviews.com/wp-content/uploads/2017/12/blogging-quotes-66-compressed.jpg" alt = "">
        </div>
	  </div>
	  
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
	
			  
			 
			</div>
	  </div>

    </div>
    
    <br>
    <hr>

    <br>
    <br>
    

    

  </div>
</section>
<div class="container-fluid  pt-5  bg-scheme contact-footer ">
		<div class="px-2 pb-2 mt-2 text-white bg-transparent " id="contact">
		<h1 class="text-center mb-4"> Stuck Somewhere Ask For Help</h1>
		
		<div class="row mt-3 pt-2">
		<div class="col-md-1"></div>
		<div class="col-md-5 text-center mr-2 ">
		  <h5> <i class="fa icon-size2 fa-phone"></i></h5>
		  <p> 9898987547</p>
		  <h5><a href="https://www.google.com/maps/place/BH+6,+Lovely+Professional+University/@31.2481844,75.7033488,18z/data=!4m5!3m4!1s0x391a5f6598cdbd0b:0x9d186b138b443221!8m2!3d31.2477749!4d75.7035805" target="blank"> <i class="fa icon-size2 fa-map-marker"></i></a></h5>
		  <p>BH 6, Lovely Professional University,Kapurthala, Punjab 144601</p>
		  <h5><i class="fa fa-envelope-open icon-size2"></i></h5>
		  <p> MakaantipTop@gmail.com</p>
		  <p class="mt-5">
		  <i class="fa fa-facebook  social-icon"></i>
		  <i class="fa fa-twitter  social-icon"></i>
		  <i class="fa fa-google-plus  social-icon"></i>
		  <i class="fa fa-linkedin  social-icon"></i></p>
		</div><div class="col-md-5">
		  
		  
		  <div class="contact px-1 py-4 mt-4 ">
			<h4 class="text-center purple-text pb-2"> Leave the Message </h4>
		<form class="mt-2 ml-2">
		<input type="text" placeholder="Name" style="margin-right:0.4%" class="pl-2">  
		 <input type="email" placeholder="Email" style="margin-left: 1.2%" class="pl-2">
		
		 <br>
		<textarea placeholder="Your Question"></textarea>
		<button class="btn bg-schme text-white py-3 " style="width:95.8%">Submit</button>
		</form></div></div>
		 
		</div>
		<center>
				<div class="mt-5">
				  <h3 class="mt-1 wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeInDown; animation-delay: 0.2s;">All rights reserved</h3>
		
		  </div>
			  </center>
			  <h4 class="text-center mt-3 wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeInDown; animation-delay: 0.2s;">Made With <i class="fa wow pulse infinite text-danger fa-heart" style="visibility: visible; animation-name: pulse;"></i> by Hunny</h4>
		
		</div>
		</div>
		</div>

@endsection
<style>
	.contact{
  background-color:white;
  border-radius:5px;
  box-shadow: -3px 8px 5px -3px rgba(235,228,235,1);
}
.contact input{
  width: 46.5%;
  height:60px;
  margin-bottom: 3%;
  border-radius:5px;
  border:none;
  background:rgba(240,240,240,0.6);

}
.contact input::placeholder{
 
  padding-left: 3px;
  
}
.contact textarea{
    width: 95.8%;
    background:rgba(240,240,245,0.6);
    border-radius:5px;
    padding:2%;
    height:115px;
    border:none;
    
}

.contact input,textarea:focus{
  outline:none;
}
.contact-footer a{
  color:inherit !important;
  text-decoration: none !important;


}
.icon-size2 {
  font-size:50px !important;

}

.scheme-text{
	color:#442F4D;
}
.bg-scheme{
	background-color: #50185B;
}
.social-icon{
  border:2px solid white;
  margin:2px;
  padding:3px;
  height: 45px;
  width: 50px;
  font-size: 30px !important;
}
.social-icon:hover{
  color:green;
}

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">