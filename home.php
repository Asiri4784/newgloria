<!DOCTYPE html>
<html>
    <head>
        <title>GMT</title>

		<link rel="stylesheet" href="/gloria/gloria/resources/assets/bootstrap/bootstrap-3.3.6-dist/css/bootstrap.min.css" >

		<script src="/gloria/gloria/resources/assets/js/jquery-2.2.0.min.js"></script>
		<script src="/gloria/gloria/resources/assets/bootstrap/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

        <style>
		
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
				background-color:#dcdcdc;
                font-weight: 100;

            }

            .content {
                text-align: center;
				   vertical-align: middle;
                display: inline-block;
				background-color:#3089b7;
				margin-bottom:10px;
				
            }
			
			.footer{
		
			background-color:white;
			}
			
            .title {
                font-size: 96px;
            }
			.carousel-control.left{background:rgba(0,0,0,0);}
			.carousel-control.right {background:rgba(0,0,0,0);}
			.judul-item{ color:blue; text-align:center;}
			.desc-item{text-align:justify;}
			.imglist{
			 margin:auto;
			vertical-align:middle;
			}
			
		
			
			#myCarousel,#laptop,#computer,#servis,#cctv,#accessories{
			margin-top: 0px;
			width :1080px;
			background-color:white;

			margin-left:40px;
				margin-right:20px;
				margin-bottom:5px;
				
			}
			
			.footertxt{margin:10px}
			.col-sm-4{text-align:center;}
			
			#txt1{}
			#txt2{color:orange;}
			#txt3{color:blue;}
			
			#binaryKitchen{color:blue;}
			#judullaptop,#judulhighlight,#judulcomputer,#judulaccessories,#judulservis,#judulcctv{
			margin-top:15px;
			margin-left:15px;
			margin-bottom:-10px;
			
			text-align:center;
			width :300px;
			font-size:20px;
			color:white;
			background-color:green;
			padding:10px;
			}
			#judulhighlight{background-color:orange;}
			.itemdesc{
			text-align: justify;
			}
			.titleitem{
			text-align:center;
			}
			.harga{
			text-align:center;
			color:orange;
			}
			
			#others{
			margin-right:20px;
			margin-bottom:10px;
			float:right;
			background-color:orange;
			padding :10px;
			width :1080px;
			overload
			
			}
        </style>
    </head>
    <body>
        <div class="container">
		<div class="header"> 
           <nav class="navbar navbar-default">
			<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="#"></a>
			</div>
			<ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">Page 1</a></li>
			<li><a href="#">Page 2</a></li> 
			<li><a href="#">Page 3</a></li> 
			</ul>
			</div>
			</nav>
			
        </div>
		
		
		<div class="content">
		
		<p id="judulhighlight"><b>HIGHLIGHTS</b></p>
		<div id="highlight"><!--highlight-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

		<!-- Wrapper for slides -->
		<a href="#">
		<div class="carousel-inner" role="listbox" >

			<div class="item active" >
			<div class="col-sm-4"> 	<img src="/gloria/gloria/resources/assets/images/carousel/laptop.jpg" ></div>
			<div class="col-sm-8"> <br><h3 class="judul-item">Macbook Air</h3>
			<p  class="desc-item">MacBook Air 11 inci bertahan hingga 9 jam dari waktu pengisian dan model 13 inci bertahan hingga 12 jam. Jadi, dari saat minum kopi pagi Anda hingga perjalanan pulang, Anda bisa bekerja tanpa charger. </p>
			</div>
	

			</div>

			<div class="item">
			<div class="col-sm-4"> 	<img src="/gloria/gloria/resources/assets/images/carousel/laptop.jpg" ></div>
			<div class="col-sm-8"> <br><h3 class="judul-item">Macbook Air</h3>
			<p  class="desc-item">MacBook Air 11 inci bertahan hingga 9 jam dari waktu pengisian dan model 13 inci bertahan hingga 12 jam. Jadi, dari saat minum kopi pagi Anda hingga perjalanan pulang, Anda bisa bekerja tanpa charger. </p>
			</div>
			</div>
    
			<div class="item">
			<div class="col-sm-4"> 	<img src="/gloria/gloria/resources/assets/images/carousel/laptop.jpg" ></div>
			<div class="col-sm-8"><br> <h3 class="judul-item">Macbook Air</h3>
			<p  class="desc-item">MacBook Air 11 inci bertahan hingga 9 jam dari waktu pengisian dan model 13 inci bertahan hingga 12 jam. Jadi, dari saat minum kopi pagi Anda hingga perjalanan pulang, Anda bisa bekerja tanpa charger. </p>
			</div>
			</div>

  
		</div>
		</a>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		</div>	
		</div><!-- highlight -->
		
	
	
	<!--laptop-->
	<p id="judullaptop"><b>LAPTOP</b></p>

	
	<div class= "row" id="laptop">
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
	
		

		
		</div> 
			<a href="#" class="btn btn-info" role="button" id="others">Lihat Lainnya</a>
				<br><br><br>
	<!--laptop-->
	
	<!--computer-->
	<p id="judulcomputer"><b>COMPUTER</b></p>
		<div class= "row" id="computer">
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
	
			
		</div> 
			<a href="#" class="btn btn-info" role="button" id="others">Lihat Lainnya</a>
				<br><br><br>
	<!--computer-->
		<!--servis-->
	<p id="judulservis"><b>SERVIS</b></p>

	
	<div class= "row" id="servis">
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
	
		

		
		</div> 
			<a href="#" class="btn btn-info" role="button" id="others">Lihat Lainnya</a>
				<br><br><br>
	<!--servis-->
		<!--accessories-->
	<p id="judulaccessories"><b>ACCESSORIES</b></p>

	
	<div class= "row" id="accessories">
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
	
		

		
		</div> 
			<a href="#" class="btn btn-info" role="button" id="others">Lihat Lainnya</a>
				<br><br><br>
	<!--accessories-->
		<!--laptop-->
	<p id="judulcctv"><b>CCTV</b></p>

	
	<div class= "row" id="cctv">
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
		<a href="#"><div class="col-sm-3"><br><img src="/gloria/gloria/resources/assets/images/laptop/laptop.jpg" ><h4 class="titleitem"><b>Acer Aspire V5</b></h4><p class= "itemdesc">The Acer V5 series put series performance in a thin and light form</p><p class ="harga"><b>Rp. 5000.000,00</b></p></div></a>
	
		

		
		</div> 
			<a href="#" class="btn btn-info" role="button" id="others">Lihat Lainnya</a>
				<br><br><br>
	<!--laptop-->
	
		

		</div>	<!--content-->
		
				<div class="footer">
		<div class= "row" >
		<div class="col-sm-4"> <p class="footertxt" id="txt1"><b>We're Open to You:</b></p><p class="footertxt" id="txt2" ><b>Monday to Sunday</b></p><p class="footertxt"id="txt3"><b>10AM to 6PM</b></p></div>
		<div class="col-sm-4"> <p class="footertxt">asdasdasd</p></div>
		<div class="col-sm-4"><p class="footertxt"> <b id="binaryKitchen">@theBinaryKitchen</b> 2016</p></div>
		</div>
		</div>
		</div>	
		

		
		
    </body>
</html>
