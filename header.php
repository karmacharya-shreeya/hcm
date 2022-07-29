<!-- Created by Shreeya Karmacharya -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Himalayan College Of Management</title>

    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    
    <link rel="shortcut icon" type="image/x-icon" href="img/site_logo.png">

    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->


    <!----------------------- Fonts Starts ---------------------->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <!-- <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!------------------------ Fonts Ends ----------------------->


    <!-------------------- Components Starts -------------------->
    <!-- swiper js -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link href="css/bowercomponent/slick.css" rel="stylesheet">
    <link href="css/bowercomponent/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/global.css" rel="stylesheet">
    <link href="css/thestyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--------------------- Site Style Ends --------------------->

</head>

<body>

    <!------------------------------------- Wrapper Starts ------------------------------------->
    <div id="wrapper">

        <!--------------------------------- Header Wrapper Starts ---------------------------------->
        <header id="header-wrapper">
            <div class="header-section">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/header/logo.png" alt="HCM logo">
                    </a>
                </div>

                <nav class="nav-bar">
                    <div class="contact-wrapper">
                        <div class="email-wrapper top-header-item">
                            <i class="fas fa-user"></i>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#login">
                                Login
                            </button>
                        </div>
                        <div class="email-wrapper top-header-item">
                            <i class="fas fa-envelope"></i>
                            <span>info@hcm.edu.np</span>
                        </div>
                        <div class="phone-wrapper top-header-item">
                            <i class="bi bi-telephone-fill"></i>
                            <span>01-4522221</span>
                        </div>
                    </div>
                    <ul>
                        <li class="menu">
                            <a href="about.php">about hcm<i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="about.php">why choose us?</a>
                                </li>
                                <li>
                                    <a href="ceo-message.php">ceo message</a>
                                </li>
                                <!-- <li>
                                <a href="president-message.php">president message</a>
                                </li> -->
                                <!-- <li>
                                <a href="dean-message.php">dean message</a>
                                </li> -->
                                <li>
                                    <a href="credit-transfer.php">credit transfer</a>
                                </li>
                                <li>
                                    <a href="faq.php">faq</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="bba.php">our courses<i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="bba.php">bba</a>
                                </li>
                                <li>
                                    <a href="bcs-it.php">bcs-it</a>
                                </li>
                                <li>
                                    <a href="mba.php">mba</a>
                                </li>
                                <li>
                                    <a href="mit.php">mit</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="news.php">news & events<i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li>
                                    <a href="news.php">news</a>
                                </li>
                                <li>
                                    <a href="events.php">events</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu">
                            <a href="gallery.php">gallery</a>
                        </li>
                        <li class="menu">
                            <a href="alumini.php">alumini</a>
                        </li>
                        <li class="menu">
                            <a href="award.php">awards</a>
                        </li>
                        <li class="menu">
                            <a href="downloads.php">downloads</a>
                        </li>
                        <li class="menu">
                            <a href="contact.php">Contact Us</a>
                        </li>
                        <li class="menu">
                            <button data-bs-toggle="modal" data-bs-target="#inquiry">Apply Now</button>
                        </li>
                    </ul>
                </nav>
                
                <div class="toggle-button" id="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </header>

        <div class="floating-form">
            <ul>
                <li>
                    <button data-bs-toggle="modal" data-bs-target="#scholarship">scholarship form</button>
                </li>
                <li>
                    <button data-bs-toggle="modal" data-bs-target="#inquiry">Inquiry form</button>
                </li>
            </ul>
        </div>

        <div class="nav-section">
            <ul class="accordion accordion-flush" id="accordionFlushExample">
                <li class="accordion-item menu menu">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            About HCM
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <ul class="accordion-body">
                            <li>
                                <a href="about.php">why choose us?</a>
                            </li>
                            <li>
                                <a href="ceo-message.php">ceo message</a>
                            </li>
                            <!-- <li>
                                <a href="president-message.php">president message</a>
                            </li> -->
                            <!-- <li>
                                <a href="dean-message.php">dean message</a>
                            </li> -->
                            <li>
                                <a href="credit-transfer.php">credit transfer</a>
                            </li>
                            <li>
                                <a href="faq.php">faq</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accordion-item menu">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Our Courses
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <ul class="accordion-body">
                            <li>
                                <a href="bba.php">bba</a>
                            </li>
                            <li>
                                <a href="bcs-it.php">bcs-it</a>
                            </li>
                            <li>
                                <a href="mba.php">mba</a>
                            </li>
                            <li>
                                <a href="mit.php">mit</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="accordion-item menu">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            News & Events
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <ul class="accordion-body">
                            <li>
                                <a href="news.php">news</a>
                            </li>
                            <li>
                                <a href="events.php">events</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu">
                    <a href="gallery.php">gallery</a>
                </li>
                <li class="menu">
                    <a href="alumini.php">alumini</a>
                </li>
                <li class="menu">
                    <a href="award.php">awards</a>
                </li>
                <li class="menu">
                    <a href="downloads.php">downloads</a>
                </li>
                <li class="menu">
                    <a href="contact.php">Contact Us</a>
                </li>
                <li class="menu">
                    <button data-bs-toggle="modal" data-bs-target="#inquiry">Apply Now</button>
                </li>
                <li class="menu">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#login">
                        Login
                    </button>
                </li>
            </ul>
        </div>
        <!---------------------------------- Header Wrapper Ends ----------------------------------->

        <div class="overlay"></div>

        <!-- Model wrapper starts -->
        <!-- Modal -->
        <div class="modal login-form fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3 form-content">
                                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email or Username">
                            </div>
                            <div class="mb-3 form-content">
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                            </div>
                            <div class="button-wrapper">
                                <div class="col-12 btn-1">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="col-12 btn-2">
                                    <button type="submit" class="btn">Forget Password ?</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal form fade" id="scholarship" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Scholarship Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-4 common-field">
                                <label for="inputEmail4" class="form-label">Course Applied For:</label>
                                <select id="inputEmail4" class="form-select">
                                    <option selected>BBA</option>
                                    <option>MBA</option>
                                </select>
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputPassword4" class="form-label">Type of Scholarship</label>
                                <select id="inputPassword4" class="form-select">
                                    <option selected>Brand Ambassador</option>
                                    <option>Merit Based</option>
                                </select>
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputShift4" class="form-label">Select your desired shift</label>
                                <select id="inputShift4" class="form-select">
                                    <option selected>---</option>
                                    <option>Morning BBA</option>
                                    <option>Day BBA</option>
                                    <option>Morning MBA</option>
                                    <option>Day BBA</option>
                                    <option>Weekend BBA</option>
                                </select>
                            </div>
                            <!---- Personal Information ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Personal Information</h3>
                                </div>
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputName1" class="form-label">Full Name:</label>
                                <input type="text" class="form-control" id="inputName1" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputDate1" class="form-label">Date of Birth:</label>
                                <input type="date" class="form-control" id="inputDate1" placeholder="yy-mm-dd">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputTemporaryAddress1" class="form-label">Temporary Address:</label>
                                <input type="text" class="form-control" id="inputTemporaryAddress1" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputPermanentAddress1" class="form-label">Permanent Address:</label>
                                <input type="text" class="form-control" id="inputPermanentAddress1" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputPhoneNumber1" class="form-label">Phone Number:</label>
                                <input type="number" class="form-control" id="inputPhoneNumber1" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputCitizenshipNumber1" class="form-label">Citizenship Number:</label>
                                <input type="text" class="form-control" id="inputCitizenshipNumber1" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputEmail2" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="inputEmail2" placeholder="">
                            </div>
                            <!---- Family-Information ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Family Information</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 common-field">
                                    <div class="info-title">
                                        <h3>Father's Details</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputFatherName" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="inputFatherName" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputFatherNumber" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" id="inputFatherNumber" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputFatherAddress" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="inputFatherAddress" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputFatherOccupation" class="form-label">Occupation:</label>
                                    <input type="text" class="form-control" id="inputFatherOccupation" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 common-field">
                                    <div class="info-title">
                                        <h3>Mother's Details</h3>
                                    </div>
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputMotherName" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="inputMotherName" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputMotherNumber" class="form-label">Phone Number:</label>
                                    <input type="text" class="form-control" id="inputMotherNumber" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputMotherAddress" class="form-label">Address:</label>
                                    <input type="text" class="form-control" id="inputMotherAddress" placeholder="">
                                </div>
                                <div class="col-md-12 common-field">
                                    <label for="inputMotherOccupation" class="form-label">Occupation:</label>
                                    <input type="text" class="form-control" id="inputMotherOccupation" placeholder="">
                                </div>
                            </div>
                            <!---- Educational Information Table ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Educational Information</h3>
                                </div>
                            </div>
                            <table class="form-table">
                                <thead>
                                    <tr>
                                        <th>Degree</th>
                                        <th>Name of Institute</th>
                                        <th>University/Board</th>
                                        <th>Percentage</th>
                                        <th>Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!---- Textarea ---->
                            <div class="col-md-12 common-field">
                                <label for="">Explain why did you choose HCM?</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">What future business or educational career will you likely pursue after finishing MBA?</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">If you are selected for Scholarship of HCM, how can you contribute to college?</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <!---- Working Experience Table ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Working Experience(if any)</h3>
                                </div>
                            </div>
                            <table class="form-table">
                                <thead>
                                    <tr>
                                        <th>Organization</th>
                                        <th>Designation</th>
                                        <th>Hours per week</th>
                                        <th>Working Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!---- Textarea ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Academic, Athletic, Service and Extra Activities</h3>
                                </div>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">Academic Award and Achievements</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">Participation in Athletic Activities</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">Participation in Community Service and Extra-curricular Activities</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <!---- Radio Section ---->
                            <div class="col-md-12 common-field">
                                <label for="">How do you know about us?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Facebook
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Friends
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Online Media
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Newspaper
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 common-field">
                                <label for="">Your ideal time for interview</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        Facebook
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        Friends
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        Online Media
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                                    <label class="form-check-label" for="flexRadioDefault9">
                                        Newspaper
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10">
                                    <label class="form-check-label" for="flexRadioDefault10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <!---- Desired Date ---->
                            <div class="col-md-12 common-field">
                                <label for="desiredDate">
                                    Desired date for interview
                                </label>
                                <input type="date" class="form-control" id="desiredDate" placeholder="yy-mm-dd">
                            </div>
                            <!--- Student Declaration ---->
                            <div class="col-md-12 common-field">
                                <div class="title">
                                    <h3>Student Declaration</h3>
                                </div>
                                <div class="content">
                                    <p>I declare that the information given on this form is correct and the documents submitted with this application are genuine to the best of my knowledge and belief.</p>
                                    <p>I understand that Himalayan College of Management may make reasonable checks to confirm the accuracy and authenticity of documents I have submitted with this application.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal form fade" id="inquiry" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title" id="exampleModalLabel">Apply Now</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-4 common-field">
                                <label for="inputName2" class="form-label">Full Name:</label>
                                <input type="text" class="form-control" id="inputName2" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputEmail3" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail3" placeholder="someone@example.com">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputPhoneNumber2" class="form-label">Contact Number:</label>
                                <input type="number" class="form-control" id="inputPhoneNumber2" placeholder="">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputProgram" class="form-label">Choose Program:</label>
                                <select id="inputProgram" class="form-select">
                                    <option selected>BBA</option>
                                    <option>MBA</option>
                                </select>
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputCollegeName" class="form-label">College Name:</label>
                                <input type="text" class="form-control" id="inputCollegeName" placeholder="Former College Name">
                            </div>
                            <div class="col-md-4 common-field">
                                <label for="inputPercentage" class="form-label">Percentage:</label>
                                <input type="number" class="form-control" id="inputPercentage" placeholder="%">
                            </div>
                            <!---- Textarea ---->
                            <div class="col-md-12 common-field">
                                <label for="">Message:</label>
                                <textarea name="" placeholder="Type here"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Model wrapper ends -->



        <!-------------------------------- Content Wrapper Starts ---------------------------------->
        <div id="content-wrapper">