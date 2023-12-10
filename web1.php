<?php include "header.php";?>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="4" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="5" class="active"></button>
    </div>
    <!-- Slide show -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="ss1.jpg" alt="First slide" class="d-block w-100" style="width: 100%; height:max-content">
        </div>
        <div class="carousel-item">
            <img src="ss2.jpg" alt="" class="d-block" style="width: 100%;">
        </div>
        <div class="carousel-item">
            <img src="ss3.jpg" alt="" class="d-block" style="width: 100%;">
        </div>
        <!--<div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKd9EO9_stXXKvSpDWgF3OmIGPo5APjD5s-Q&usqp=CAU"
                alt="" class="d-block" style="width: 100%;">
    </div>
    <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKd9EO9_stXXKvSpDWgF3OmIGPo5APjD5s-Q&usqp=CAU"
            alt="" class="d-block" style="width: 100%;">
    </div>
    <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKd9EO9_stXXKvSpDWgF3OmIGPo5APjD5s-Q&usqp=CAU"
            alt="" class="d-block" style="width: 100%;">
    </div> -->
        <!-- Left and Right icon -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        <br>
    </div>
</div>
<!-- <div id="slider">
    <img src="https://assets.nflxext.com/ffe/siteui/vlv3/2e884ce2-da1c-4501-ab9a-10c534d30975/45dfa559-1dc3-447c-91a3-2806b54becf2/PK-en-20230327-popsignuptwoweeks-perspective_alpha_website_large.jpg"
        class="img-responsive" />
</div> -->
<br>
<h1 class="center"> <b>NOW SHOWING</b>
</h1>
<div class=" row">
    <div class="col-4 col-md-6 col-sm-12">
        <div class="service-wrapper">
            <div class="figure">
                <img src="https://wallpapercave.com/dwp1x/wp12022681.jpg" style="width:100%;" class="img-responsive" />
            </div>
            <div class="content">
                <h3>JAVAN</h3>
                <p></p>
                <a href="" class="btn btn-right btn-info"> Book Now</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-4 col-md-6 col-sm-12">
        <div class="service-wrapper">
            <div class="figure">
                <img src="https://posterspy.com/wp-content/uploads/2023/07/Barbie-Poster-by-cineastedesigns_ekran.jpg"
                    style="width:100%" class="img-responsive" />
            </div>
            <div class="content">
                <h3>BARBIE</h3>
                <p></p>
                <a href="" class="btn btn-right btn-info"> Book Now</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="col-4 col-md-6 col-sm-12">
        <div class="service-wrapper">
            <div class="figure">
                <img src="https://cdnb.artstation.com/p/assets/images/images/056/522/385/large/hevi-x-arts-oppenheimer.jpg?1669460285"
                    style="width:100%" class="img-responsive" />
            </div>
            <div class="content">
                <h3>OPPENHEIMER</h3>
                <p></p>
                <a href="" class="btn btn-right btn-info">Book Now</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--next-->
</div>
</div>
<?php include "footer.php";?>