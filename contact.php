<!DOCTYPE html>
<html lang="en">
<head>
    <title>Great Care Hospital - Contact</title>
    <meta name="description" content="Great Care Hospital's Contact page.">
    <meta name="keywords" content="">
    <?php include 'header.php'; ?>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./contact.php">Contact</a>
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

        <sectiion id="contact">
            <div class="container py-2" style="height: 100vh;">
                <h2 class="my-3 text-primary">
                    Contact us <i class="fa fa-envelope ml-2"></i>
                </h2>
                <hr>
                <h3 class="text-center text-dark">

                </h3>
                <p class="text-center text-secondary">

                </p>
                <!-- social media and linkedIn links -->
                <div class="row mt-5">
                    <div class="col-md-4">
                        <h3 class="my-3 text-muted text-dark">
                            Our Location
                        </h3>
                        <p class="text-muted">
                            455 George Livingstone Boulevard <br>
                            Georgetown, ON, N2G 5Y7<br>
                            Canada.
                        </p>
                        <p class="text-muted">
                            <i class="fa-sharp fa-solid fa-phone"></i> &nbsp;&nbsp;  +1 (604) 822 9214
                        </p>
                        <p class="text-muted">
                            <i class="fa-solid fa-envelope-circle-check"></i> &nbsp;&nbsp;  greatcarehospital@health.org
                        </p>
                    </div>
                    <div class="col-md-8">
                        <form class="container needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mt-3">
                                    <input class="form-control" type="text" placeholder="Name" >
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input class="form-control" type="email" placeholder="Email" >
                                </div>
                                <div class="col-md-12 mt-3">
                                    <input class="form-control" type="text" placeholder="Subject" >
                                </div>
                                <div class="col-md-12 mt-3">
                                    <textarea class="form-control" type="text" placeholder="Your message here" rows="8"></textarea>
                                </div>
                                <div class="col-md-12 text center">
                                    <button class="form-control btn btn-outline-secondary my-3" type="submit">S u b m i t</button>
                                </div>
                            </div>
                        </form>
                    </div>
                        <p class="text-center lead py-5 mb-6 fixed-bottom">
                            We are always pleased to hear from you.
                        </p>
                </div>
            </div>
        </sectiion>     
        
    <?php include 'reg_login.php'; ?>
    <?php include 'footer.php'; ?>