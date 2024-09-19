@extends('layout.front-layout')

@section('content')

<style>
    .form-title{
        padding:10px;
        border-left:3px solid #FF6D06;
        background-color:#eee;
    }
    .wedding-form{
        box-shadow:1px 1px 6px #aaa;
        padding:40px 18px;
    }
</style>

<div class="container-fluid pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <h2 class="bold text-center mb-5">सामूहिक विवाह के लिए आवेदन</h2>
            <div class="wedding-form">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="applicant_name">आवेदक का नाम</label>
                                <input name="applicant_name" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label name="applicant_contact">आवेदक का फ़ोन नंबर</label>
                                <input type="number" name="applicant_contact" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="applicant_address">आवेदक का पता</label>
                        <input type="text" name="applicant_address" class="form-control" />
                    </div>
                    <div class="bold-6 form-title mb-4">लड़के के बारे में...</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="boy_name">लड़के का नाम</label>
                                <input name="boy_name" type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="boy_phone">लड़के का फ़ोन नंबर</label>
                                <input name="boy_phone" type="number" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100px; max-height: 100px;">
                                <input type="file" id="fileInput" name="boy_photo" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="bold-6 form-title mb-4">लड़की के बारे में...</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label for="girl_name">लड़की का नाम</label>
                                <input name="girl_name" type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="girl_phone">लड़की का फ़ोन नंबर</label>
                                <input name="girl_phone" type="number" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <img id="imagePreview1" src="" alt="Image Preview" style="max-width: 100px; max-height: 100px;">
                                <input type="file" id="fileInput1" name="boy_photo" accept="image/*">
                            </div>
                        </div>
                    </div><hr/>
                    <label for="registration_form">1. कृपया विवाह पंजीकरण फॉर्म अपलोड करें </label>
                    <input type="file" name="registration_form" id="registration_form" />
                    
                    <label for="declaration_form" class="mt-4">2. कृपया शपथ पत्र अपलोड करें </label>
                    <input type="file" name="declaration_form" id="declaration_form" /><br/><br/>
                    
                    <input type="checkbox" name="confirmation" id="confirmation" required /><label for="confirmation"> मेरे द्वारा दी गई सभी जानकारी सत्य एवं सही है।</label><br/>
                    <button type="submit" class="btn btn-primary mt-4">Submit Form</button>
                </form> 
            </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('fileInput');
    const imagePreview = document.getElementById('imagePreview');
    const imagePreview1 = document.getElementById('imagePreview1');
    imagePreview.src = '/images/boy_icon.jpg';
    imagePreview1.src = '/images/girl-icon.jpg';

    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const file1 = event.target.files[1];
        
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block'; // Show the image preview
            };

            reader.readAsDataURL(file); // Convert the file to a data URL
        } else {
            imagePreview.src = '';
            imagePreview.style.display = 'block'; // Hide the image preview
        }
        
    });
    
    fileInput1.addEventListener('change', function(event) {
        const file1 = event.target.files[0];
        
        if (file1) {
            const reader1 = new FileReader();

            reader1.onload = function(e) {
                imagePreview1.src = e.target.result;
                imagePreview1.style.display = 'block'; // Show the image preview
            };

            reader1.readAsDataURL(file1); // Convert the file to a data URL
        } else {
            imagePreview1.src = '';
            imagePreview1.style.display = 'block'; // Hide the image preview
        }

    });
});
</script>

@endsection