<!-- app/Views/home.php -->
<?= $this->extend('layout') ?>


<?= $this->section('content') ?>
<style>
    @media (max-width: 1440px) {
        .card {
            margin-left: 50px;
        }
    }

    .blurred-image {
        background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('assets/images/course/explaining-person-group-results-team-table 1 (1).png');
        background-size: cover;
        background-repeat: no-repeat;
        /* Add other necessary styles */
    }

    .start-100 {
        left: 68% !important;
    }
</style>

<div class="container-fluid">
    <div class="position-relative">
        <!-- Background image -->
        <div class="contentc" style="background-image: url('<?= site_url('assets/images/program/man-with-headphones-working-office-with-papers-laptop-desk 2.png') ?>'); background-size: cover; background-repeat: no-repeat;  display: flex; align-items: center; justify-content: center; height: 500px;"></div>
        <!-- Sticky card overlay -->
        <div class="position-fixed top-50 start-75 translate-middle-y w-100 py-5" style="z-index: 1000;">
            <div class="container">
                <div class="row bg-cover">
                    <div class="col-lg-11 col-md-11 col-12 mt-4 mx-0 mx-md-2">
                        <div class="card p-3 rounded-4 mt-md-5">
                            <div class="card-content mt-2">
                                <img src="<?= site_url('uploads/profile_images/') . $university['ins_logo'] ?>" alt="Logo 1" width="18%" class="img-fluid mb-3">
                                <div class="row">
                                    <h5 class="fw-bolder"><?= $university['ins_name'] ?></h5>
                                    <div class="col-lg-9 col-md-8 col-12">
                                        <p><?= $university['ins_description'] ?></p>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12 text-end">
                                        <button type="button" class="btn btn-primary bg-t500">Contact University</button>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs border-0" id="courseTabs">
                                <li class="nav-item">
                                    <a class="nav-link  active" id="it-tab" data-bs-toggle="tab" href="#it">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="lecture-tab" data-bs-toggle="tab" href="#lecture">Our Program</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="finance-tab" data-bs-toggle="tab" href="#finance">Lecturer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content after the sticky card -->
        <div class="container-fluid tab-pane fade show active" id="it">
            <div class="container mt-5">
                <div class="row pt-md-3 mt-5">
                    <div class=" mt-5">
                        <h6 class="text-s500 fst-normal mt-5">Programmes and courses offerings</h6>
                        <h2 class="fw-bold">Micro Credentials</h2>

                    </div>
                    <div class="row d-flex justify-content-center align-items-center position-relative">

                        <div class="text-center order-1 order-md-0 position-absolute top-50 start-0 translate-middle">
                            <!-- Add Previous Button -->
                            <button class="owl-prev" id="layer-1-prev"></button>
                        </div>

                        <div class="col-md-12 col-12 pt-lg-3 d-flex justify-content-center align-items-center order-0 order-md-1">

                            <div id="carousel-layer-1" class="owl-carousel owl-theme">

                                <!-- Repeat the structure for other items -->
                                <div class="item rounded-4 position-relative text-center">
                                    <div class="card  rounded-5">
                                        <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1 (1).png') ?>" alt="Card Image 1" class="blurred-image rounded-5">
                                        <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <h5 style="white-space:nowrap;">Learn Data Analytics</h5>
                                            <p>Uncover the Insights Hidden in Data</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item rounded-4 position-relative text-center">
                                    <div class="card  rounded-5">
                                        <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1 (3).png') ?>" alt="Card Image 1" class="blurred-image rounded-5">
                                        <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <h5 style="white-space:nowrap;">Learn Data Analytics</h5>
                                            <p>Uncover the Insights Hidden in Data</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item rounded-4 position-relative text-center">
                                    <div class="card  rounded-5">
                                        <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1.png') ?>" alt="Card Image 1" class="blurred-image rounded-5">
                                        <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <h5 style="white-space:nowrap;">Learn Data Analytics</h5>
                                            <p>Uncover the Insights Hidden in Data</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center order-2 order-md-2 position-absolute top-50 start-100 translate-middle">
                            <!-- Add Next Button -->
                            <button class="owl-next" id="layer-1-next"></button>
                        </div>
                    </div>
                </div>
                <div class="row pt-md-3">
                    <div class="mt-5">
                        <h6 class="text-s500 fst-normal">Programmes and courses offerings</h6>
                        <h2 class="fw-bold">Micro Credentials</h2>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center position-relative">
                        <div class="text-center order-1 order-md-0 position-absolute top-50 start-0 translate-middle">
                            <!-- Add Previous Button -->
                            <button class="owl-prev" id="layer-2-prev"></button>
                        </div>

                        <div class="col-md-12 col-12 pt-lg-3 d-flex justify-content-center align-items-center order-0 order-md-1">
                            <div id="carousel-layer-2" class="owl-carousel owl-theme">
                                <?php foreach ($micro_credentials as $credential) : ?>
                                    <!-- Repeat the structure for other items -->
                                    <div class="item rounded-3">
                                        <div class="card p-2 rounded-3 h-100">
                                            <span class="badge rounded-2 btn bg-su300 btn-lg position-absolute top-10 start-10 mt-2 mx-2">ABC</span>
                                            <img src="<?= site_url('assets/images/course/MicrosoftTeams-image.png') ?>" alt="<?= esc($credential['title']) ?>">
                                            <div class="card-content mt-2">
                                                <h6 class="fw-bold"><?= esc($credential['title']) ?></h6>
                                                <div class="" style="font-size: 13px;"><?= esc($credential['description']) ?></div>
                                                <?php
                                                // Calculate the filled star count based on the average rating
                                                $filledStars = round($credential['average_rating'], 2);

                                                ?>
                                                <span class="custom-stars-content fs-5">
                                                    <?php
                                                    $roundedRating = number_format($credential['average_rating'], 1);

                                                    // Display the rounded average rating
                                                    echo '<small class="text-dark fs-6">' .  esc($roundedRating) . ' ' . '</small>';
                                                    for ($i = 1; $i <= 5; $i++) {
                                                        if ($i <= $filledStars) {
                                                            // Display filled star icon
                                                            echo '<i class="fa-solid fa-star fa-2xs mt-5"></i>';
                                                        } else {
                                                            // Display empty star icon
                                                            echo '<i class="fa-regular fa-star fa-2xs mt-5"></i>';
                                                        }
                                                    }
                                                    ?></span>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img src="<?= site_url('uploads\profile_images/' . $credential['institution_logo']) ?>" alt="Institution Logo">
                                                    </div>
                                                    <div class="col-10">
                                                        <span style="font-size: 13px;"><?= esc($credential['institution_name']) ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="text-center order-2 order-md-2 position-absolute top-50 start-100 translate-middle">
                            <!-- Add Next Button -->
                            <button class="owl-next" id="layer-2-next"></button>
                        </div>
                    </div>
                </div>

                <?php if (empty($programs_MOOC)) : ?>
                    <!-- Display a message when there are no programs -->
                    <!-- <p>No MOOC programs found.</p> -->
                <?php else : ?>
                    <!-- Loop through the $programs_ODL array to display each program -->
                    <div class="row pt-md-3">
                        <div class="mt-5">
                            <h2 class="fw-bold">Massive Open Online Course (MOOC)</h2>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center position-relative">
                            <div class="text-center order-1 order-md-0 position-absolute top-50 start-0 translate-middle">
                                <!-- Add Previous Button -->
                                <button class="owl-prev" id="layer-3-prev"></button>
                            </div>
                            <div class="col-md-12 pt-lg-3 d-flex justify-content-center align-items-center order-0 order-md-1">
                                <div id="carousel-layer-3" class="owl-carousel owl-theme">
                                    <?php foreach ($programs_MOOC as $mooc) : ?>
                                        <div class="item rounded-3">
                                            <div class="card p-2 rounded-3">

                                                <span class="badge rounded-2 btn bg-su300 btn-lg position-absolute top-10 start-10 mt-2 mx-2">Most Popular</span>

                                                <img src="<?= site_url('uploads/program/thumbnail/' . $mooc['program_image']) ?>" alt="<?= $mooc['program_title'] ?>">
                                                <div class="card-content mt-2">
                                                    <h6 class="fw-bold"><?= $mooc['program_title'] ?></h6>
                                                    <div class="" style="font-size: 13px;"><?= $mooc['program_description'] ?></div>
                                                    <?php // Assuming average_rating is a column in the programs table 
                                                    ?>
                                                    <span class="custom-stars-content">★★★★★</span>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <?php if (!empty($mooc['institution_logo'])) : ?>
                                                                <img src="<?= site_url('uploads/profile_images/' . $mooc['institution_logo']) ?>" alt="<?= $mooc['institution_name'] ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-10">
                                                            <span style="font-size: 13px;"><?= $mooc['institution_name'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="text-center order-2 order-md-2 position-absolute top-50 start-100 translate-middle">
                                <!-- Add Next Button -->
                                <button class="owl-next" id="layer-3-next"></button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if (empty($programs_ODL)) : ?>
                    <!-- Display a message when there are no programs -->
                    <!-- <p>No ODL programs found.</p> -->
                <?php else : ?>
                    <!-- Loop through the $programs_ODL array to display each program -->
                    <div class="row pb-md-3">
                        <div class="mt-5">
                            <h2 class="fw-bold">Open and Distance Learning (ODL)</h2>

                        </div>
                        <div class="row d-flex justify-content-center align-items-center position-relative">

                            <div class="text-center order-1 order-md-0 position-absolute top-50 start-0 translate-middle">
                                <!-- Add Previous Button -->
                                <button class="owl-prev" id="layer-4-prev"></button>
                            </div>

                            <div class="col-md-12 pt-lg-3 d-flex justify-content-center align-items-center order-0 order-md-1">

                                <div id="carousel-layer-4" class="owl-carousel owl-theme">

                                    <!-- Repeat the structure for other items -->

                                    <?php foreach ($programs_ODL as $odl) : ?>
                                        <div class="item rounded-3">
                                            <div class="card p-2 rounded-3">

                                                <span class="badge rounded-2 btn bg-su300 btn-lg position-absolute top-10 start-10 mt-2 mx-2">Most Popular</span>

                                                <img src="<?= site_url('uploads/program/thumbnail/' . $odl['program_image']) ?>" alt="<?= $odl['program_title'] ?>">
                                                <div class="card-content mt-2">
                                                    <h6 class="fw-bold"><?= $odl['program_title'] ?></h6>
                                                    <div class="" style="font-size: 13px;"><?= $odl['program_description'] ?></div>
                                                    <?php // Assuming average_rating is a column in the programs table 
                                                    ?>
                                                    <span class="custom-stars-content">★★★★★</span>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <?php if (!empty($odl['institution_logo'])) : ?>
                                                                <img src="<?= site_url('uploads/profile_images/' . $odl['institution_logo']) ?>" alt="<?= $odl['institution_name'] ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-10">
                                                            <span style="font-size: 13px;"><?= $odl['institution_name'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>


                                </div>
                            </div>
                            <div class="text-center order-2 order-md-2 position-absolute top-50 start-100 translate-middle">
                                <!-- Add Next Button -->
                                <button class="owl-next" id="layer-4-next"></button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>



            </div>



            <div class="container-fluid bg-s50 mt-md-5 mt-5 pt-md-5">
                <div class="bg-s50">
                    <div class="container py-md-1">
                        <div class="text-center">
                            <h5 class="fw-bold">Our Courses</h5>
                            <div class="row row-cols-1 row-cols-md-3 mx-2">
                                <div class="col px-2">
                                    <div class=" rounded-3 p-4 text-center">
                                        <p><i class="fas fa-book-open bg-p320 rounded-4 p-4 fa-lg text-p500"></i></p>
                                        <h5 class="fw-bold">Unlock Your Learning Odyssey</h5>
                                        <p>Experience a world where limitless knowledge meets your aspirations.</p>
                                    </div>
                                </div>
                                <div class="col px-2">
                                    <div class=" rounded-3 p-4 text-center">
                                        <p><i class="fas fa-book-open bg-p320 rounded-4 p-4 fa-lg text-p500"></i></p>
                                        <h5 class="fw-bold">Unlock Your Learning Odyssey</h5>
                                        <p>Experience a world where limitless knowledge meets your aspirations.</p>
                                    </div>
                                </div>
                                <div class="col px-2">
                                    <div class=" rounded-3 p-4 text-center">
                                        <p><i class="fas fa-book-open bg-p320 rounded-4 p-4 fa-lg text-p500"></i></p>
                                        <h5 class="fw-bold">Unlock Your Learning Odyssey</h5>
                                        <p>Experience a world where limitless knowledge meets your aspirations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid bg-p320 pt-md-5 pt-5 px-0">
                <div class="bg-p320">
                    <div class="container py-md-5">
                        <div class="card p-5">
                            <h5 class="fw-bold">Lecturers</h5>
                            <div class="row row-cols-1 row-cols-md-2 mx-2">
                                <?php foreach ($lecturers as $lecturer) : ?>
                                    <div class="col px-md-2 mb-4">
                                        <div class="row align-items-center p-3">
                                            <!-- Icon, Name, and Rating -->
                                            <div class="col-12 col-md-10 col-lg-2  d-flex align-items-center">
                                                <!-- Icon -->
                                                <img src="<?= site_url('uploads/profile_images' . $lecturer['lecturer_profile_picture']) ?>" alt="Lecturer Image" class="img-fluid rounded-circle mb-3 mb-md-0 me-3" style="max-width: 80px;">
                                            </div>
                                            <!-- Name and Description -->
                                            <div class="col-md-12 col-lg-10 d-flex flex-column align-items-start">
                                                <h5 class="mb-0 fw-bold"><?= esc($lecturer['lecturer_name']) ?></h5>
                                                <p class="mb-0"><?= strip_tags($lecturer['lecturer_description']) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid bg-white my-5 py-5 ">
                <div class="container">
                    <h4 class="fw-bold">What our Alumni are saying</h4>
                    <div class="row my-md-9 mx-1" id="content1">
                        <!-- Content 1 -->
                        <div class="col-12 col-lg-3 col-md-3">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 1.png') ?>" class="img-fluid" alt="Sunway Logo" onclick="changeContent('Bala')">
                        </div>
                        <div class="col-12 col-md-6">
                            <h5 class="fw-bold">Elon Musk</h5>
                            <p class="text-n40">Bachelor of Architecture, 2014-2018</p>
                            <p>My years at [University Name] were truly transformative. The professors' dedication to teaching and the range of opportunities for personal and professional growth were second to none. I can confidently say that my time here laid the foundation for my successful career in [Field]."</p>
                        </div>
                        <div class="col-12 col-md-3">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" type="button" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <!-- Add more images if needed -->
                        </div>
                    </div>


                    <div class="row my-md-9 mx-1" id="content2" style="display: none;">
                        <!-- Content 2 -->
                        <div class="col-12 col-lg-4 col-md-12">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" type="button" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 1.png') ?>" class="img-fluid mx-1" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                        </div>
                        <div class="col-12 col-md-9 col-lg-5">
                            <h5 class="fw-bold">Elon Musk 2</h5>
                            <p class="text-n40">Bachelor of Architecture, 2014-2018</p>
                            <p>My years at [University Name] were truly transformative. The professors' dedication to teaching and the range of opportunities for personal and professional growth were second to none. I can confidently say that my time here laid the foundation for my successful career in [Field]."</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-3">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" type="button" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <img src="<?= site_url('assets/images/universiry-profile/young-male-student-university-campus-back-school-concept 2.png') ?>" class="img-fluid" type="button" alt="Sunway Logo" onclick="changeContent('Elon Musk')">
                            <!-- Add more images if needed -->
                        </div>
                    </div>
                    <div class="card mt-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <h5 class="fw-bold">High-Demand Career Opportunities</h5>
                                <p>This course can equip you with the skills <br> sought after by top companies.</p>
                                <!-- First Image -->
                                <div class="col col-md-2 mb-3 mb-md-0">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 9.png') ?>" alt="Logo 1" class="img-fluid" width="122">
                                </div>
                                <!-- Second Image -->
                                <div class="col col-md-2 mb-3 mb-md-0">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 10.png') ?>" alt="Logo 2" class="img-fluid" width="122">
                                </div>
                                <!-- Third Image -->
                                <div class="col col-md-2 mb-3 mb-md-0">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 11.png') ?>" alt="Logo 3" class="img-fluid" width="122">
                                </div>
                                <!-- Fourth Image -->
                                <div class="col col-md-2 mb-3 mb-md-0">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 12.png') ?>" alt="Logo 4" class="img-fluid" width="122">
                                </div>
                                <!-- Fifth Image -->
                                <div class="col col-md-2 mb-3 mb-md-0">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 13.png') ?>" alt="Logo 5" class="img-fluid" width="122">
                                </div>
                                <!-- Sixth Image -->
                                <div class="col col-md-2">
                                    <img src="<?= site_url('assets/images/universiry-profile/image 14.png') ?>" alt="Logo 6" class="img-fluid" width="122">
                                </div>
                            </div>
                            <!-- Additional text or content can be added below the images -->

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<div class="container-fluid bg-p51">
    <div class="mt-5  p-5 d-flex justify-content-center p-2">
        <div class="row d-flex justify-content-center ms-md-5">
            <h5 class="px-5">Popular Now</h5>
            <div class="col-md-6 col-lg-3 p-2">
                <div class="rounded-3 position-relative text-center">
                    <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1 (1).png') ?>" alt="Card Image 1" class="blurred-image rounded-4">
                    <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                        <br>
                        <br>
                        <br>
                        <h5 style="white-space:nowrap;">Learn Data Analytics</h5>
                        <p>Uncover the Insights Hidden in Data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 p-2">
                <div class="rounded-3 position-relative text-center">
                    <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1 (3).png') ?>" alt="Card Image 1" class="blurred-image rounded-4">
                    <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                        <br>
                        <br>
                        <br>
                        <h5 style="white-space:nowrap;">Learn Data Analytics</h5>
                        <p>Uncover the Insights Hidden in Data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 p-2">
                <div class="rounded-3 position-relative text-center">
                    <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1 (1).png') ?>" alt="Card Image 1" class="blurred-image rounded-4">
                    <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                        <br>
                        <br>
                        <br>
                        <h5 style="white-space: nowrap;">Learn Data Analytics</h5>
                        <p>Uncover the Insights Hidden in Data</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 p-2">
                <div class="rounded-3 position-relative text-center">
                    <img src="<?= site_url('assets/images/course/explaining-person-group-results-team-table 1.png') ?>" alt="Card Image 1" class="blurred-image rounded-4">
                    <div class="position-absolute top-50 start-50 translate-middle mt-5 py-5">
                        <br>
                        <br>
                        <br>
                        <h5 style="white-space: nowrap;">Learn Data Analytics</h5>
                        <p>Uncover the Insights Hidden in Data</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script>
    function changeContent(name) {
        if (name === 'Elon Musk') {
            document.getElementById('content1').style.display = 'none';
            document.getElementById('content2').style.display = 'flex';
        }
    }
</script>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 5,
            margin: 10,
            nav: true,
            autoplay: true,
            loop: true,
            dots: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false,


                },
                500: {
                    items: 1,
                    nav: false

                },
                950: {
                    items: 2,
                    nav: false

                },
                1300: {
                    items: 4,
                    nav: false

                },
                // 1600: {
                //     items: 5,
                //     nav: false
                // }
            }
        });



    });

    // Add custom navigation buttons for Layer 1
    $('#layer-1-prev').click(function() {
        $('#carousel-layer-1').trigger('prev.owl.carousel');
    });

    $('#layer-1-next').click(function() {
        $('#carousel-layer-1').trigger('next.owl.carousel');
    });
    // End of custom navigation buttons for Layer 1

    // Add custom navigation buttons for Layer 2
    $('#layer-2-prev').click(function() {
        $('#carousel-layer-2').trigger('prev.owl.carousel');
    });

    $('#layer-2-next').click(function() {
        $('#carousel-layer-2').trigger('next.owl.carousel');
    });
    // End of custom navigation buttons for Layer 2

    // Add custom navigation buttons for Layer 3
    $('#layer-3-prev').click(function() {
        $('#carousel-layer-3').trigger('prev.owl.carousel');
    });

    $('#layer-3-next').click(function() {
        $('#carousel-layer-3').trigger('next.owl.carousel');
    });
    // End of custom navigation buttons for Layer 3


    // Add custom navigation buttons for Layer 4
    $('#layer-4-prev').click(function() {
        $('#carousel-layer-4').trigger('prev.owl.carousel');
    });

    $('#layer-4-next').click(function() {
        $('#carousel-layer-4').trigger('next.owl.carousel');
    });
    // End of custom navigation buttons for Layer 4
</script>


<?= $this->endSection() ?>