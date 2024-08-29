@extends('layout.front-layout')

@section('content')

<div class="container-fluid p-0 relative">
    <img src="/images/banners/donate.png" alt="Balaji banner" width="100%" />
    <div class="banner-title-right">
        <h3 class="bold-6">DONATE</h3>
    </div>
</div>

<div class="container-fluid pt-5 pb-5 contact-section">
    <div class="container text-center">
      <h2 class="bold-6">संपर्क करें</h2>
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

@endsection