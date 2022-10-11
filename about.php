<!DOCTYPE html>
<html lang="en">
<head>
    <title>Great Care Hospital - About</title>
    <meta name="description" content="Great Care Hospital's about page.">
    <meta name="keywords" content="">
    <?php include 'header.php'; ?>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./about.php">About</a>
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

    <sectiion id="contact">
            <div class="container py-2">
                <h2 class="my-3 text-primary">
                    About us <i class="fa-sharp fa-solid fa-scroll"></i>
                </h2>
                <hr>
                <h3 class="text-center text-dark">

                </h3>
                <p class="text-center text-secondary">

                </p>
                <!-- social media and linkedIn links -->
                <div class="row mt-5">
                    <div class="col-md-8 col-sm-10">
                        <img src="./images/GCHospital.jpg" alt="GC Hospital" id="hospitalImage">
                    </div>
                    <div class="col-md-4 col-sm-10">
                        <p class="text-muted">
                            GreatCare Hospital was established in 2002. Our medical areas of focus include women’s and infants’ health, emergency medicine, complex orthopaedics, palliative care, diabetes, opthamology, general cardiology, dental surgery and care, physiotherapy and rehabilitation.
                        </p>
                        <p class="text-muted">
                            Our care is supported by fundamental research done at the <b>Nelson Mandela Research Institute</b>, a leading biomedical research center, ranking amongst the top biomedical research institutes in the world and the <b>Afe Babalola Collaboratory for Research and Innovation’s</b> research in health systems, population health services and solutions, and systems biology. Many of the breakthroughs that began as fundamental research have resulted in new and better ways to prevent, diagnose, and treat health conditions.
                        </p>
                        <p class="text-muted">
                            GreatCare Hospital has been designated with <b>Exemplary Standing from Accreditation Canada</b> and is the <b>only hospital in Canada to receive Magnet® recognition</b> for nursing excellence and patient care. We are also proud to be recognized as a <b>top employer in Canada</b> and we strive to offer meaningful people-focused, culture-centered programs.
                        </p>
                    </div>
                </div>
            </div>
        </sectiion>

    <?php include 'reg_login.php'; ?>
    <?php include 'footer.php'; ?>