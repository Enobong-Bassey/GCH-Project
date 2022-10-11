<!DOCTYPE html>
<html lang="en">
<head>
    <title>Great Care Hospital - Consulting Room</title>
    <meta name="description" content="Great Hospital's Consulting Room interface.">
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
                            <a class="nav-link active" href="./consult-room.php">Consulting Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>    
                    </ul>
                    <ul class="nav navbar-nav navbar-right ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout  <i class="fa-solid fa-right-from-bracket"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of Navigation bar -->
    </header>
    <main>

    <section id="consult-rm">
        <div class="container py-2 mb-10">
                <h2 class="my-3 text-primary">
                    Consulting Room 1 <i class="fa-solid fa-user-doctor ml-2"></i>
                </h2>
                <hr>
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-5 dashboardBox">
                            <div class="col titleBox bg-primary text-light">
                                <h5 class="card-title">Patients Data</h5>
                            </div>
                            <div class="row">

                            </div> 
                        </div>
                        
                        <div class="col-md-5 dashboardBox justify-content-center">
                            <div class="col titleBox bg-primary text-light">
                            <h5 class="card-title">Doctor's Diagnosis</h5>
                            </div>
                            <div class="m-content row justify-content-center">
                                <form action="" method="post">
                                    <textarea rows="5" cols="50" name="diagnosis" placeholder="Enter diagnosis notes here"></textarea><br>
                                    <button id="submit" type="submit" class="btn btn-primary btn-sm">Save Note</button>
                                </form>
                            </div>
                        </div>             
                    </div>

                    <div class="row text-center justify-content-center">
                        <div class="col-md-5 dashboardBox2">
                            <div class="row justify-content-center">
                            <div class="col miniBox1">
                                <div class="col titleBox bg-primary text-light">
                                    <h5 class="card-title">Incoming</h5>
                                </div>
                                <div class="row col-md-2 justify-content-center text-center">
                                    <div class="col-md-1">
                                        <input type="text" id="Patient1" maxlength="4" size="10" name="Patient1" >
                                        <input type="text" id="Patient2" maxlength="4" size="10" name="Patient2" >
                                        <input type="text" id="Patient3" maxlength="4" size="10" name="Patient3" >
                                    </div>
                                    <div class="col-md-1">
                                        <input type="submit" value="Go" id="1" onclick="seePatient1()" >
                                        <input type="submit" value="Go" id="2" onclick="seePatient2()" >
                                        <input type="submit" value="Go" id="3" onclick="seePatient3()" >
                                    </div>
                                </div>
                            </div>
                            <div class="col miniBox2">
                                <div class="col titleBox bg-primary text-light">
                                <h5 class="card-title">Outgoing</h5>
                                </div>
                                <div class="row justify-content-center">
                                <table class="table-responsive table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Patient Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th></th>
                                        <td></td> 
                                        </tr>                            
                                    </tbody>
                                </table></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-5 dashboardBox justify-content-center">
                            <div class="col titleBox bg-primary text-light">
                            <h5 class="card-title">Prescription</h5>
                            </div>
                            <div class="m-content row justify-content-center">
                                <form action="" method="post">
                                    <textarea rows="5" cols="50" name="diagnosis" placeholder="Enter diagnosis notes here"></textarea><br>
                                    <button id="submit" type="submit" class="btn btn-primary btn-sm">Send Prescription</button>
                                </form>
                            </div>
                        </div>
                    </div>            
                </div>
        </div>
    </section>

    <?php include 'reg_login.php'; ?>
    <?php include 'footer.php'; ?>