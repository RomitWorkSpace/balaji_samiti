@extends('layout.front-layout')

@section('content')

<div class="container-fluid p-0 relative">
    <img src="/images/banners/contact.png" alt="Balaji banner" width="100%" />
    <div class="banner-title-right">
        <h3 class="bold-6">CONTACT US</h3>
    </div>
</div>

<section class="contact-section">
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.8971065545516!2d77.32762727478833!3d28.662799375648206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfbbf83f9217d%3A0xaca11f7bc1f72542!2sManav%20Seva%20Sangarsh%20Samiti%20Trust%20-%20Old%20Age%20Care%20Home%20in%20Delhi!5e0!3m2!1sen!2sin!4v1724861721701!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container mt-5">
        <h5 class="text-center">CONTACT US</h5>
        <h3 class="text-center">Write Us a Message !</h3>
        <div class="contact-form-wrapper pt-5">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Your name" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Your email" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <textarea name="message" id="message" rows="6" class="form-control" placeholder="Message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</section>

@endsection