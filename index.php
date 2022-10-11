<!DOCTYPE html>
<html lang="en">
<head>
    <title>Great Care Hospital - Home</title>
    <meta name="description" content="Great Care Hospital's Home page.">
    <meta name="keywords" content="">
    <?php include 'header.php'; ?>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>    
                    </ul>
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#registerModal" href="#">
                                <i class="fa-solid fa-user"></i> Sign up
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal"  href="#">
                                Login <i class="fa-solid fa-right-to-bracket"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation bar -->
    </header>
    <main>
        <div class="container mb-20 pb-7">
            <div class="jumbotron text-center">
                <h1 class="display-4">Welcome to GreatCare Hospital.</h1>
                <p class="lead">Our clinical areas of focus include women’s and infants’ health, emergency medicine, cancer, complex orthopaedics, palliative care, diabetes, inflammatory bowel disease, geriatrics, and arthritis and autoimmune disease..</p>
                <hr class="my-4">
                <p>GreatCare Hospital is the one place for all your health care solutions.</p>

                <!-- Carousel display begins -->
                <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img src="./images/High-Tech.jpg" alt="Los Angeles" width="900" height="450">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/Emergency.jpg" alt="Chicago" width="900" height="450">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/Emergency-3.jpg" alt="New York" width="900" height="450">
                    </div>
                </div>
                
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                </div>


                <!-- <p class="lead">
                    <a class="btn btn-primary btn-lg" href="./about.php" role="button">Learn more</a>
                </p> -->
            </div>
        </div>
    <?php include 'reg_login.php'; ?>
    <?php include 'footer.php'; ?>