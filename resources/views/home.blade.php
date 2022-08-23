@extends('layouts.main')
@section('container')

<div class="jumbotron d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row">
            <div class="text-center triangle">
                <h3 class="text-dark">Welcome to Player_Field</h3>
                <h1 class="text-dark fw-bold">Sport, Art And Education</h1>
                <h1 class="text-dark fw-bold">Unite As One</h1>
              
                <a class="btn fw-bold secondary-bg text-white rounded-pill">ENROL NOW</a>
            </div>
        </div>
    </div>
</div>

<section id="about" data-bs-offset="0">
<div class="mt-5" data-aos="fade-up" data-aos-duration="1000">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 mb-5">
            <img src="assets/images/swimm.png" class="img-fluid mx-auto d-block"  alt="...">
        </div>
        
        <div class="col-md-6 flex-column justify-content-center mb-5">
            <div class="container">
                <div class="d-flex align-items-center">
                    <h1>About <b>Play Field</b></h1><div class="horizontal"></div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p style="text-align: justify">
                            Playfield Group is a fast-growing and community-building organization that focused in Education and Sport Academy for children in Jakarta metropolitan areas. In early 2016, Playfield launched its first center in Srengseng, West Jakarta, with 240 members. Now we're operating six centers in various strategic location including Gading Serpong Scietia Park, Emporium Pluit and Kemang and we've grown our community close to 3.000 members.
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<div class="parallax">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col mb-5 mt-5">
                <div class="d-flex justify-content-center">
                    <div class="vertical" style="margin-right:20px"></div>
                    <div class="d-flex flex-column justify-content-center">
                    <h2 class="text-white">We Grow Faster</h2>
                    <p class="text-white">Our members and parents are benefetting from our programmers and teaching methods delivered by our dedicated coaches and teachers, not forgetting our friendly and caring customer service team who keeps all members happy and updated</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                <div class="circle">
                    <h1 class="text-white value" data="6">0</h1>
                </div>
                <h3 class="text-white text-center">Years of Experience</h3>
            </div>
            <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                <div class="circle">
                    <h1 class="text-white value" data="2500">0</h1>
                </div>
                <h3 class="text-white text-center">Happy Members</h3>
            </div>
            <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                <div class="circle">
                    <h1 class="text-white value" data="22">0</h1>
                </div>
                <h3 class="text-white text-center">Activity Classes</h3>
            </div>
            <div class="col mb-3 d-flex flex-column justify-content-center align-items-center">
                <div class="circle">
                    <h1 class="text-white value" data="6">0</h1>
                </div>
                <h3 class="text-white text-center">Locations</h3>
            </div>
        </div>
    </div>
</div>
</section>

<section  id="our_program" data-bs-offset="0">
    <div style="background-color:#BED62F; height:200px">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <div class="row">
                <h1 class="text-center mt-4 mb-5">Our <b>Program</b></h1>
            </div>
        </div>
    </div>
    <div class="container " style="margin-top:-100px" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="assets/images/Logo1.png" class="card-img-top pt-5 pb-5" alt="Aplikasi restauran">
                    <div class="card-body text-center primary-bg" 
                    style=" border-radius: 150% / 30%;
                    border-bottom-right-radius: 0px;
                    border-bottom-left-radius: 0px;">
                        <h3 class="text-white">KIDS ACADEMY</h3>
                      <p class="card-text text-white">Our mission is to grow and inculcate our children with good personal characters and traits, encouraging teamwork, keeping them fit and developing a healty lifestyle through having fun, learning and playing sports for life</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="assets/images/Logo-02.png" class="card-img-top pt-5 pb-5" alt="Aplikasi Resto">
                    <div class="card-body text-center bg-info"
                    style=" border-radius: 150% / 30%;
                    border-bottom-right-radius: 0px;
                    border-bottom-left-radius: 0px;">
                        <h3 class="text-white">PRESCHOOL</h3>
                      <p class="card-text text-white">We are dedicated to providing inspiring and creative learning experience that encourages children to explore and learn, bring the best of your child's potensial through our activities and guidance by our experienced and nurturing teachers.</p>
                    </div>
                  </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <img src="assets/images/Logo-03.png" class="card-img-top pt-5 pb-5" alt="Aplikasi">
                    <div class="card-body text-center secondary-bg"
                    style=" border-radius: 150% / 30%;
                    border-bottom-right-radius: 0px;
                    border-bottom-left-radius: 0px;">
                        <h3 class="text-white">PRIMARY SCHOOL</h3>
                      <p class="card-text text-white">We are commited to motivate and empower our students to become inspiring life-long learnes, faster the growth of developing the whole child provide a safe and supportive learning environtment and partnership with home, school and community.</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="d-flex mt-5">
            <span style="width:70px; height:40px; background-color:#BED62F; margin-right:10px">
            </span>
            <h3 class="fw-bold">Key Differentiators</h3>
        </div>
        
    </div>
</section>
    <div class="jumbotron-2">
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="d-flex">
                    <span style="width:50px; height:60px; background-color:#BED62F; margin-right:10px">
                    </span>
                    <h3 class="fw-bold">We Are <br> ISO Certified</h3>
                </div>
                <div class="text-center" style="margin:80px;">
                    <img src="assets/images/ISO.png" alt="" width="300" height="300">
                    <p style="text-align:justify">We are the only Sports Academy in Indonesia certified with ISO 9001:2015 standardization, delivering excellence in quality, service and operations we provide.</p>
                </div>
            </div>
            
            <div class="col-md-6" style="background-color:#17469E;">
                <img src="assets/images/SertifikatISOPlayfield-01.jpg" style="width:100%; height:100%; padding:50px" alt="Sertifikat ISO Playfield">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
                <div class="d-flex">
                    <span style="width:90px; height:40px; background-color:#BED62F; margin-right:10px">
                    </span>
                    <h3 class="fw-bold">Galery</h3>
                </div>
        </div>
    </div>
    <div class="jumbotron-2">
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
                <div class="d-flex">
                    <span style="width:90px; height:40px; background-color:#BED62F; margin-right:10px">
                    </span>
                    <h3 class="fw-bold">Peta Lokasi</h3>
                </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1940.8508676420747!2d106.8303687698558!3d-6.171016084695342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5ce68b5e01d%3A0xcafaf042d5840c6c!2sMasjid%20Istiqlal!5e0!3m2!1sid!2sid!4v1661276180808!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<section id="contact_us" data-bs-offset="0">
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-2">
                <div class="wrapper d-flex justify-content-center">
                    <h1>Contact Us</h1>
                  </div>
            </div>
            
            <div class="col-md-2">
                <h5 class="text-info"><i class="fa-solid fa-location-dot"></i> Location</h5>
                <div style="color: rgb(93, 91, 91)">
                    <p>Playfield Srengseng Jl. Srengseng Raya No.55A, Jakarta Barat 11630</p>
                    <hr>
                    <p>Playfield Summarecon Serpong SDC Building 2nd Floor Jl.Scientia Boulevard, Tangerang 15810</p>
                    <hr>
                    <p>Playfield Emporium Pluit Mall 5th Floor Jl. Pluit Selatan Raya, Jakarta Utara 14440</p>
                </div>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <h5 class="text-info"><i class="fa-solid fa-clock"></i> Opening Hours</h5>
                <div style="color: rgb(93, 91, 91)">
                    <p>Playfield Srengseng<br>
                        Monday - Friday<br>
                        9:00 AM - 6:00 PM</p>
                </div>
                <div style="color: rgb(93, 91, 91)">
                    <p>Playfield Summarecon<br>
                        Monday - Friday<br>
                        9:00 AM - 6:00 PM</p>
                </div>
                <div style="color: rgb(93, 91, 91)">
                    <p>Playfield Emporium<br>
                        Monday - Friday<br>
                        9:00 AM - 6:00 PM</p>
                </div>
                
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <form>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="first name">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <label for=""></label>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="last name">
                              </div>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" placeholder="phone">
                    </div>
                    <div class="form-group mt-2 mb-5">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</section>

@endsection