@extends('layout.front-layout')

@section('content')


<main id="main">
  <div class="swiper slides-1 mb-none">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="/images/sliders/slider-1.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/slider-2.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/slider-3.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/slider-4.jpg" alt="slider" width="100%" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    
    <div class="swiper slides-1 dk-none">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="/images/sliders/2.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/3.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/4.jpg" alt="slider" width="100%" />
        </div>
        <div class="swiper-slide">
            <img src="/images/sliders/5.jpg" alt="slider" width="100%" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    
    <!-- ======= Breadcrumbs ======= -->
    <!-- <div class="breadcrumbs">
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div> -->

    <!-- ======= Feature Section ======= -->
    
    <section class="feature">
      <div class="container" data-aos="fade-up">
          <h2 class="bold-6 text-center clr-blue">श्री बालाजी मानव सेवा समिति का लक्ष्य</h2>
        <div class="row mt-5">
          <div class="col-md-4 p-4 feature-wrap relative">
            <div class="feature-bg" style="background-color:#FF6D06B2">
              <img src="/images/feature1.png" alt="icon" class="icon">
              <h3 class="feature-title bold-6">समर्पण</h3>
              <div class="mt-4">
                <p style="font-size:20px;">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              </div>
            </div>
            <a href="/feature-detail">
            <div class="feature-btn">
                Read More
            </div>
            </a>
          </div>
          <div class="col-md-4 p-4 feature-wrap relative">
            <div class="feature-bg" style="background-color:#33257AB2">
              <img src="/images/feature2.png" alt="icon" class="icon">
              <h3 class="feature-title bold-6">सेवा</h3>
              <div class="mt-4">
                <p style="font-size:20px;">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              </div>
              <a href="/feature-detail">
                <div class="feature-btn">
                  Read More
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4 p-4 feature-wrap relative">
            <div class="feature-bg" style="background-color:#FF6D06B2">
              <img src="/images/feature3.png" alt="icon" class="icon">
              <h3 class="feature-title bold-6">संस्कार</h3>
              <div class="mt-4">
                <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              </div>
            </div>
            <a href="/feature-detail">
            <div class="feature-btn">
                Read More
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>

  <!--- ================ Message Section =============== --->
   
  <div class="message-section pt-3 pb-5">
    <div class="container text-center">
      <h2 class="section-title bold-6 clr-blue">संस्थापक संयोजक का संदेश</h2>
      <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
    </div>
    <div class="container-fluid message-bg pt-5 pb-5">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-4">
            <div class="message-item relative">
              <div class="relative">
                <img src="/images/mes1.png" alt="image" width="100%" class="" />
                <div class="message-btn">DONATE NOW</div>
              </div>
              <div class="message-text box-shadow p-4">
                <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
                <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              </div>
              <div class="message-btn2">View Detail</div>
            </div>
          </div>

          <div class="col-md-4">
          <div class="message-item relative">
              <div class="relative">
                <img src="/images/mes2.png" alt="image" width="100%" class="" />
                <div class="message-btn">DONATE NOW</div>
              </div>
              <div class="message-text box-shadow p-4">
                <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
                <p class="sub-title">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              </div>
              <div class="message-btn2">View Detail</div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="message-item relative">
              <div class="volunteer-bg"></div>
              <div class="volunteer-text">
                <span class="sub-title">Become A</span><br/>
                <p style="font-size:25px;"><b>Volunteer</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>


<!--- ========================= Donate section ========================== ---> 

  <div class="donate-section">
    <div class="container-fluid donate-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5" data-aos="fade-up">
            <div class="donate-form relative">
              <h4 class="text-center bold-6">Support Us</h4>
              <p class="sub-title text-center mt-5 bold-6">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
              <div class="qr-code">
                <img src="/images/qr-code.png" alt="QR Code" width="100%" />
              </div>
              <div class="form-section mt-4" style="width:85%;margin:auto;">
                <form action="#" method="post">
                  <div class="row">
                      <div class="rupee-symbol">₹</div>
                      <div class="text-field">
                        <input type="number" name="donate" class="form-control" style="height:100%" />
                      </div>
                  </div>
                  <div class="row mt-4">
                    <div class="amount">+10</div>
                    <div class="amount">+20</div>
                    <div class="amount">+50</div>
                    <div class="amount" style="width:70px">Custom</div>
                  </div>
                  <button type="submit" class="btn btn-primary form-control mt-5">Donate Now</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </div>
</div>




    <!-- ======= Stats Purpose Section ======= -->
    <section class="purpose-section">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h2 class="text-center bold-6 clr-blue">उद्वेश्य</h2>
            <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
            <div class="purpose-content mt-5">
              <p>विश्व शांति के लिए यज्ञ हवन आदि करना।</p>
              <p>भारत में वैदिक शिक्षा को बढ़ावा देने के उद्देश्य से विशेष रूप से आश्रम तथा गुरुकुल की स्थापना करना।</p>
              <p>यज्ञ के विषय में वैज्ञानिक अनुसंधान करना मानव कल्याण के लिए प्रभावशाली बनाना।</p>
              <p>21वीं शताब्दी में अधिकतम प्राचीन व आधुनिक कार्यकलापों को बढ़ावा देना।</p>
              <p>वैश्विक तथा मानव को स्थिरता के चारों स्तरों पदार्थ,शक्ति, गदगदाहट तथा चेतना के अनुसंधान को बढ़ावा          देना।</p>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </section><!-- End Stats Counter Section -->

    <section class="gallery-section">
      <div class="container text-center">
        <h2 class="bold-6 clr-blue">गैलरी</h2>
        <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
      </div>
      <div class="container mt-5">
        <div class="gallery">

            <img
                src="/images/small-gal.png"
                alt="Shining Stars Image" />

            <img
                src="/images/small-gal1.png"
                alt="Shining Stars Image" />

            <img class="four-grid-cells"
                src="/images/center-gal.png"
                alt="Northern Winter Sky Image" />

            <img class="wide-image"
                src="/images/bottom-gal.png"
                alt="A cloudy Mountain Image" />

        </div>
      </div>
  </section>


  <section class="work-section pb-0">
    <div class="container text-center">
      <h2 class="bold-6 clr-blue">संस्था द्वारा किए जा रहे कार्य</h2>
      <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
    </div>
    <div class="work-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="work-card text-center">
              <h4 class="bold-6">निर्धन कन्याओं का सामूहिक विवाह समारोह</h4>
              <h1 class="work-text">1</h1>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-card text-center">
              <h4 class="bold-6">सनातन विद्या मंदिर 
संस्कार पाठशाला</h4>
              <h1 class="work-text">2</h1>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-card text-center">
              <h4 class="bold-6"> मानस सत्संगनिशुल्क (सुन्दर काण्ड पाठ)</h4>
              <h1 class="work-text">3</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><hr/>


  <section class="requirement-section">
    <div class="container text-center">
      <h2 class="bold-6 clr-blue">संस्था की वर्तमान आवश्यकता</h2>
      <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="bg-wrapper">
            <p>* श्री संकट मोचन बाबा धाम की स्थापना हेतु, स्थाई स्वामित्व के लिए भूमि / भवन</p>
            <p>* संस्कार विद्या मंदिर संस्कार पाठशाला हेतु, पुस्तक एवं लेखन आदि की सामग्री हेतु,सहयोग</p>
            <p>* विद्यार्थियों के लिए वस्त्र विद्या मंदिर गणेशवेष हेतु सहयोग</p>
            <p>* भोजन सामग्री. सहयोग</p>
            <p>* खेलकूद सामग्री,सहयोग</p>
            <p>* निर्धन असहाय बेसहारा शोषित वंचित अभावग्रस्त विवाह योग्य बेटियों के सामूहिक विवाह हेतु सहयोग/दान अर्थ की आवश्यकता है।</p>
            <p style="color:#FF6D06;"><b> दानदाताओं से आग्रह है कि व्यक्तिगत या सामूहिक रूप से अपनी रुचि के अनुसार वस्तु, उपयोगी सामग्री एवं धन संस्था में नगद अथवा बैंक के द्वारा दे सकते हैं।</b></p>
            <div class="frame">
              <img src="/images/frame.png" alt="photo" width="100%" />
            </div>
          </div>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>

  <div class="upcomming-event">
    <div class="container-fluid event-wrapper">
    <div class="container text-center white">
      <h3 class="bold-6">आगामी कार्यक्रम</h3>
      <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
    </div>
    <div class="container mt-5">
      <div class="swiper upcomming">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="event-card">
              <img src="/images/events/1.jpg" alt="" width="100%" />
              <div class="event-content">
                संस्कार प्रतियोगिता<br/>
                सनातन को जानें<br/>
                आश्वनि कृष्ण पक्ष द्वादशी <br/>
                29 सितंबर 2024 (रविवार)
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="event-card">
              <img src="/images/events/2.jpg" alt="" width="100%" />
              <div class="event-content">
                वार्षिकोत्सव<br/>
                आश्वनि शुक्ल पक्ष<br/>
                शरद पूर्णिमा <br/>
                17 अक्तूबर 2024 (गुरुवार)
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="event-card">
              <img src="/images/events/3.jpg" alt="" width="100%" />
              <div class="event-content">
                दीपोत्सव<br/>
                कार्तिक कृष्ण पक्ष<br/>
                एकादशी<br/>
                27 अक्तूबर 2024 (रविवार)
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="event-card">
              <img src="/images/events/4.jpg" alt="" width="100%" />
              <div class="event-content">
                सामूहिक विवाह <br/>
                वर वधु वस्त्र वितरण<br/>
                पौष शुक्ल पक्ष मकर संक्रांति<br/>
                14 जनवरी 2025 (मंगलवार)
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="event-card">
              <img src="/images/events/5.jpg" alt="" width="100%" />
              <div class="event-content">
                सामूहिक विवाह आयोजन <br/>
                माघ शुक्ल पक्ष<br/>
                बसंत पंचमी <br/>
                2 फरवरी 2025 (रविवार)
              </div>
            </div>
          </div>
          <div class="swiper-slide">
          <div class="event-card">
              <img src="/images/events/6.jpg" alt="" width="100%" />
              <div class="event-content">
                हनुमान जन्मोत्सव<br/>
                चैत्र शुक्ल पक्ष <br/>
                पूर्णिमा<br/>
                12 अप्रैल 2025 (शनिवार)
              </div>
            </div>
          </div>
        </div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
  </div>
</div>

<style>
    .application-step ul{
        list-style:none;
        font-size:18px;
        line-height:2;
    }
    .application-step li::before{
        font-family: "Font Awesome 5 Free"; font-weight: 900; content: "\f0a4";
        color:#46afc9;
    }
    .fa-file-pdf{
        font-size: x-large;
        margin-left:20px;
    }
</style>

  <section class="wedding-section">
    <div class="container text-center">
      <h2 class="bold-6 clr-blue">सामूहिक विवाह के लिए आवेदन</h2>
      <p class="sub-title text-center">के उद्देश्य को लेकर परमात्मा की बनाई हुई...............</p>
    </div>
    <div class="wedding-wrapper mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <img src="/images/wedding.png" alt="wedding" width="100%" />
          </div>
          <div class="col-md-6">
            <div class="pt-5 pb-3 application-step">
                <ul>
                    <li> कृपया विवाह प्रपत्र डाउनलोड करें <a href="/files/registration-form.pdf" target="_blank"><i class="fa-regular fa-file-pdf"></i></a></li>
                    <li> कृपया स्व-घोषणा प्रपत्र डाउनलोड करें <a href="/files/self-desclaration.pdf" target="_blank"><i class="fa-regular fa-file-pdf"></i></a></li>
                    <li> निर्देशों को पढ़ें और सभी विकल्पों को बहुत सावधानी से भरें।</li>
                    <li> अब नीचे दिए गए बटन पर क्लिक करें और आवेदन करने के लिए फॉर्म भरें।</li>
                </ul>
            </div>
            <div class="wedding-btn text-center p-3">
              <a href="/wedding-form"><button class="btn btn-primary">Click Here</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container-fluid contact-section">
    <div class="container text-center">
      <h2 class="bold-6 clr-blue">संपर्क करें</h2>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="contact-form">
            <form action="#" method="post">
              <div class="form-group row align-items-baseline mb-3">
                <div class="form-label">
                  <label for="name">नाम</label>
                </div>
                <div class="form-field">
                  <input type="text" name="name" class="form-control" id="name" />
                </div>
              </div>
              <div class="form-group row align-items-baseline mb-3">
                <div class="form-label">
                  <label for="address">पता</label>
                </div>
                <div class="form-field">
                  <input type="text" name="address" class="form-control" id="address" />
                </div>
              </div>
              <div class="form-group row align-items-baseline mb-3">
                <div class="form-label">
                  <label for="phone">मोoनo</label>
                </div>
                <div class="form-field">
                  <input type="number" name="phone" class="form-control" id="phone" />
                </div>
              </div>

              <div class="form-group row align-items-baseline mb-3">
                <div class="form-label">
                  <label for="email">मेल ID</label>
                </div>
                <div class="form-field">
                  <input type="email" name="email" class="form-control" id="email" />
                </div>
              </div>

              <div class="form-content pt-5">
                <p><b>Shri Balaji Manav seva samiti</b><br/>
                  A/c No,30000100003890<br/>
                  IFSC code, BARBOGNOIDA
                </p>
                <p>आप चैक / NEFT/ RTGS आदि के माध्यम से भी दान कर सकते हैं। संस्था में नगद/कैश आदि जमा करा कर रसीद प्राप्त कर सकते हैं।</p>

                <p>आपके द्वारा दान / सहयोग की गई राशि आयकर अधिनियम की 80G, 12AA धाराके अंतर्गत आयकर से मुक्त होगी।</p>

                <p>(दान प्राप्ति के बाद रसीद भी दानदाता को online मिल जाएगी)</p>

                <p>CRS के लिए भी आप आवेदन कर सकते हैं।</p>
                <div class="qr-code" style="right:0;">
                  <img src="/images/qr-code.png" alt="QR Code" width="100%" />
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </div>


  <section class="news-section">
    <div class="container text-center">
      <h2 class="bold-6 clr-blue">Latest News</h2>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-4">
        <a href="/blog-detail">   
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a> 
        </div>
        <div class="col-md-4 mb-4">
        <a href="/blog-detail">  
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
            <a href="/blog-detail">  
          <div class="news-wrapper">
            <img src="/images/blog.png" width="100%" alt="news" />
            <div class="news-content">
              <div class="news-date text-center">12 May</div>
              <h4 class="bold-6">New Mission</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra, risus ac hendrerit consectetur, elit nisl luctus est.</p>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  </main><!-- End #main -->

  

@endsection