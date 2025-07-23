<?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="home" class="hero-section min-vh-100 d-flex align-items-center" style="background: url('assets/images/bg.jpg') no-repeat center center; background-size: cover; font-family: 'Arial', Times, serif;">
        <div class="container text-center text-white">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <br><br><br>
                    <h1 class="display-3 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome to CJKBM</h1>
                    <p class="lead mb-4" style="font-size: 1.5rem; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);">Christ Jesus Kingdom Building Ministry</p>
                    <div class="mb-5" style="font-style: italic; font-size: 1.25rem; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">
                    <br><br>
                        <p class="mb-1">"For God so loved the world, that he gave his only begotten</p>
                        <p class="mb-1">Son, that whosoever believeth in him should not perish, but</p>
                        <p class="mb-1">have everlasting life"</p>
                        <p class="mb-5">John 3:16</p>
                    </div>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#about" class="btn btn-outline-light btn-lg px-4" style="font-family: 'Times New Roman', Times, serif;">About Us</a>
                        <a href="#prayers" class="btn btn-outline-light btn-lg px-4" style="font-family: 'Times New Roman', Times, serif;">Prayer Request</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section -->
    <section id="about" class="py-5 min-vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">ABOUT CJKBM</h2>
                    <p class="lead">Christ Jesus Kingdom Building Ministry is a faith-based organization dedicated to spreading the gospel and serving communities.</p>
                    <p>Founded on biblical principles, we strive to make a difference in people's lives through prayer, worship, and community service.</p>
                    <p>Our ministry is built on the foundation of love, faith, and hope in Jesus Christ.</p>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/about.jpg" alt="About CJKBM" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="py-5 min-vh-100 d-flex align-items-center bg-light">
        <div class="container">
            <h2 class="text-center mb-5">HISTORY</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2005</div>
                            <div class="timeline-content">
                                <h4>Foundation</h4>
                                <p>C-KEMM was founded by a small group of believers with a vision to build God's kingdom.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2010</div>
                            <div class="timeline-content">
                                <h4>First Church Building</h4>
                                <p>We acquired our first permanent place of worship in the community.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2015</div>
                            <div class="timeline-content">
                                <h4>Expansion</h4>
                                <p>Started our first outreach programs and mission trips to neighboring communities.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">Present</div>
                            <div class="timeline-content">
                                <h4>Growing Ministry</h4>
                                <p>Continuing to serve and expand our impact in the community and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prayers Section -->
    <section id="prayers" class="py-5 min-vh-100 d-flex align-items-center" style="background: url('assets/images/bg3.jpg') no-repeat center center; background-size: cover; font-family: 'Times New Roman', Times, serif;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4" style = "color: white; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Prayer Requests</h2>
                    <p class="lead" style = "color: white">We would be honored to offer our prayers for you, your loved ones, and your family since we firmly believe in the effectiveness of prayer.</p>
                    
                    <form id="prayerForm" class="mt-4">
                        <div class="mb-3">
                            <label for="name" class="form-label" style = "color: white">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style = "color: white">Email Address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="prayerRequest" class="form-label" style = "color: white">Prayer Request</label>
                            <textarea class="form-control" id="prayerRequest" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Prayer Request</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="prayer-box p-4 bg-light rounded">
                        <h3 class="mb-3">Prayer Wall</h3>
                        <div id="prayerWall">
                            <div class="text-center py-4">
                                <div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mission" class="py-5 d-flex align-items-center" style="background: url('assets/images/bg3.jpg') no-repeat center center; background-size: cover; min-height: 80vh;">
    <div class="container">
        <div class="row align-items-stretch">
            <!-- VISION (Left) -->
            <div class="col-md-6 col-lg-5 mb-4 mb-lg-0">
                <div id="visionBox" class="h-100 p-4 vision-box">
                    <h2 class="text-center mb-4 vision-title">VISION</h2>
                    <div class="vision-text text-white">
                        <p>We are God's united kingdom builders</p>
                        <p>Of 7 mountains of culture, dedicated and</p>
                        <p>Empowered in reaching-out and disciple</p>
                        <p>Every generation for Christ holistically.</p>
                        <p>Community and beyond</p>
                    </div>
                </div>
            </div>

            <!-- LOGO (Center - Desktop only) -->
            <div class="col-lg-2 d-none d-lg-flex align-items-center justify-content-center">
                <div class="logo-box p-3">
                    <img src="assets/images/logos.png" alt="CJKBM Logo" class="img-fluid" style="max-height: 150px;">
                </div>
            </div>

            <!-- MISSION (Now on Right) -->
            <div class="col-md-6 col-lg-5">
                <div id="missionBox" class="h-100 p-4 mission-box">
                    <h2 class="text-center mb-4 mission-title">MISSION</h2>
                    <div class="mission-text text-white">
                        <p>To train and equip every church family members to become</p>
                        <p>United in purpose and a passionate kingdom builder</p>
                        <p>Of the 7 mountains of culture.</p>
                        <p class="mt-3">To empower each family member to subdue and</p>
                        <p>Pull down the spirit of rebellion thus becoming</p>
                        <p>A channel of love and blessing to our</p>
                        <p>Community and beyond</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Outreach Section -->
    <section id="outreach" class="py-5 min-vh-100 d-flex align-items-center" style="background: url('assets/images/bg3.jpg') no-repeat center center; background-size: cover;">
    <div class="container">
        <h2 class="text-center mb-5" style = "color: WHITE;">OUTREACHES</h2>
        <div class="row justify-content-center">
            <!-- Outreach Location 1 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">BAGUMBAYAN</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
            
            <!-- Outreach Location 2 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">BUBUKAL</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
            
            <!-- Outreach Location 3 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">DUHAT</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
            
            <!-- Outreach Location 4 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">GREEN VILLAGE</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
            
            <!-- Outreach Location 5 -->
            
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">PATIMBAO</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
            
            <!-- Outreach Location 6 -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="outreach-location text-center p-4 h-100">
                    <h3 class="mb-3">SANTA ROSA</h3>
                    <div class="location-image mb-3" style="background-image: url('assets/images/logos.png');"></div>
                    <a href="#" class="btn btn-outline-primary">View Activities</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Support Section -->
    <section id="support" class="py-5 min-vh-100 d-flex align-items-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="mb-4">Support the Ministry</h2>
                    <p class="lead">"A Gift opens the way and ushers the giver"</p>
                    <p>Your generous support helps us continue our mission of spreading the gospel and serving communities.</p>
                    
                    <div class="mt-4">
                        <h4>Ways to Give:</h4>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item">One-time donation</li>
                            <li class="list-group-item">Monthly support</li>
                            <li class="list-group-item">Project-specific funding</li>
                            <li class="list-group-item">In-kind donations</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Donation Form</h3>
                            <form id="donationForm">
                                <div class="mb-3">
                                    <label for="donorName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="donorName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="donorEmail" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="donorEmail" required>
                                </div>
                                <div class="mb-3">
                                    <label for="donationAmount" class="form-label">Amount ($)</label>
                                    <input type="number" class="form-control" id="donationAmount" min="1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="donationType" class="form-label">Donation Type</label>
                                    <select class="form-select" id="donationType">
                                        <option value="one-time">One-time</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="donationPurpose" class="form-label">Purpose (Optional)</label>
                                    <select class="form-select" id="donationPurpose">
                                        <option value="general">General Fund</option>
                                        <option value="projects">Projects</option>
                                        <option value="outreach">Outreach</option>
                                        <option value="building">Building Fund</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Donate Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>