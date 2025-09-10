@extends('user.master')
@section('content')

<!-- Hero Section -->
<section class="py-5 text-white" style="background: var(--main-gradient);">
    <div class="container text-center">
        <h1 class="display-4 mb-3">Compassionate Care for Your Pets</h1>
        <p class="lead mb-4">Trusted by pet owners for over 10 years</p>
        <a href="#appointment" class="btn btn-warning btn-lg">Book Appointment</a>
    </div>
</section>

<!-- Doctors Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4 text-brown">Meet Our Veterinary Doctors</h2>
        <p class="text-center mb-5">Experienced and caring professionals who love pets as much as you do.</p>
        <div class="row">
            @php
 $doctors = [
    ['img'=>'staff-1.jpg','name'=>'Dr. Ahmed Khan','role'=>'Veterinarian'],
    ['img'=>'staff-2.jpg','name'=>'Dr. Hassan Raza','role'=>'Veterinary Surgeon'],
    ['img'=>'staff-3.jpg','name'=>'Dr. Bilal Shah','role'=>'Animal Nutritionist'],
    ['img'=>'staff-4.jpg','name'=>'Dr. Imran Siddiqui','role'=>'Pet Behaviorist'],
    ['img'=>'staff-5.jpg','name'=>'Dr. Ali Mustafa','role'=>'Veterinary Dentist'],
    ['img'=>'staff-6.jpg','name'=>'Dr. Aliza Yousuf','role'=>'Animal Physiotherapist'],
    ['img'=>'staff-7.jpg','name'=>'Dr. Salman Malik','role'=>'Veterinary Dermatologist'],
    ['img'=>'staff-8.jpg','name'=>'Dr. Umar Akram','role'=>'Exotic Animal Specialist'],
];

            @endphp

            @foreach($doctors as $doctor)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex align-items-stretch">
                <div class="card border-0 shadow hover-scale text-center w-100">
                    <img src="{{ asset('images/'.$doctor['img']) }}" class="card-img-top rounded-top" alt="{{ $doctor['name'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-brown">{{ $doctor['name'] }}</h5>
                        <p class="text-gold mb-2">{{ $doctor['role'] }}</p>
                

                            <a href="#appointment" class="btn btn-sm btn-gold mt-5">Book Appointment</a>
                
						
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CSS -->
<style>

</style>


<!-- Appointment Form Section -->
<section id="appointment" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4 text-brown">Book Your Pet Appointment</h2>
        <p class="text-center mb-5">Fill out the form below and our veterinarian will contact you to confirm your appointment.</p>
        <form action="" method="POST" class="bg-white p-4 rounded shadow">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" name="owner_name" class="form-control" placeholder="Owner Name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="email" name="owner_email" class="form-control" placeholder="Owner Email" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="owner_phone" class="form-control" placeholder="Phone Number" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" name="pet_name" class="form-control" placeholder="Pet Name" required>
                </div>
                <div class="col-md-6 mb-3">
                    <select name="pet_type" class="form-control" required>
                        <option value="">Select Pet Type</option>
                        <option value="Dog">Dog</option>
                        <option value="Cat">Cat</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="number" name="pet_age" class="form-control" placeholder="Pet Age (Years)" required>
                </div>
                <div class="col-md-12 mb-3">
                    <textarea name="message" class="form-control" rows="4" placeholder="Additional Details / Symptoms"></textarea>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-gold px-4 py-2">Submit Appointment</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

<style>
:root {
  --main-gold: #D4AF37;
  --main-orange: #FF8C00;
  --main-brown: #8B4513;
  --main-gradient: linear-gradient(45deg, #D4AF37, #FF8C00);
}

.btn-gold {
    background-color: var(--main-gold);
    color: white;
    border: none;
    transition: background 0.3s, transform 0.3s;
}
.btn-gold:hover {
    background-color: var(--main-orange);
    transform: scale(1.05);
}

.hover-scale:hover {
    transform: translateY(-5px);
    transition: transform 0.3s;
}

.text-brown { color: var(--main-brown); }
.text-gold { color: var(--main-gold); }
</style>
