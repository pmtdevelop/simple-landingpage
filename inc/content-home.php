<body>
	<header class="header">
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="header-table">
                    <div class="header-nav">
                        <a class="logo" href="#">
                            <!-- <img src="images/land-logo.png" alt="logo"> -->
														Logo
                        </a>
                        <ul class="main-menu">
                            <li class="menu-item"><a href="#">#menu1</a></li>
                            <li class="menu-item"><a href="#">#menu2</a></li>
                            <li class="menu-item"><a href="#">#menu3</a></li>
                            <li class="menu-item"><a href="#">#menu3</a></li>
                            <li class="menu-item"><a href="#">#menu4</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

    <div class="wrapper">
        <div class="container">
            <div id="content">
							<!--Section Banner-->
                <div id="slide-show">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo $base_url;?>/assets/images/nau.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $base_url;?>/assets/images/nau.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $base_url;?>/assets/images/nau.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="offset-sm-3 col-sm-6 offset-md-3 col-md-6 offset-lg-3 col-lg-6 ">
                        <div class="card">
                            <div class="card-header">
                                Thông tin
                            </div>
                            <div class="card-body">
                                <form action="<?php echo $base_url?>/actions.php" method="post">
                                    <div class="form-group">
                                        <label >Họ tên</label>
                                        <input class="form-control" type="text" name="name"  placeholder="Họ tên">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Nhập email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
									<div class="form-group">
                                        <label >Số điện thoại</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number" placeholder="Nhập số điện thoại">

                                    </div>

                                    <div class="form-group">
                                        <label >Quê quán</label>
                                        <input class="form-control" type="text" name="city"  placeholder="Quê quán">
                                    </div>
                                    <button type="submit"  name="submit" value="submit" id="submit" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

		<footer>
			<div class="container">
							<p>#footer</p>
			</div>
		</footer>
