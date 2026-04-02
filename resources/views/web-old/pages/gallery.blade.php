@extends('web.layouts.main')
@section('title', '| Event Gallery')
@section('description', 'Event Gallery')

@section('styles')
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <style>
        .gallery-page__single {
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .gallery-page__icon {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            opacity: 0;
            transition: 0.3s ease;
        }

        .gallery-page__single:hover .gallery-page__icon {
            opacity: 1;
        }

        .custom-image {
            background-position: center;
        }

        .messageimage {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: -55px !important;
        }

        .text-start {
            text-align: start;
        }

        .hw100 {
            width: 100px;
            height: 100px;
        }

        .rounded10 {
            border-radius: 10px;
        }

        .ugc-jrf .thead-info {
            background-color: #17a2b8;
            color: #ffffff;
        }
    </style>
@endsection
@section('content')

    <!--Start breadcrumb area paroller-->
    <section class="breadcrumb-area">
        <div class="breadcrumb-area-bg custom-image"
            style="background-image: url({{ asset('/assets/images/about/about.jpg') }});">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                            <h2> Event Gallery </h2>
                        </div>
                        <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li class="active text-white"> Manipur International University </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="blog-style1-area mb-5">
        <div class="container my-5">
            <div class="row justify-content-center">

               
                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">Highlights of Educational Tour MIU</h3>
                        <p class="text-primary font-weight-bold">29th November, 2025</p>
                        <p>Department of Education Studies team visited Nongpok Sekmai to learn the traditional clay-making
                            process. Proud to connect education with culture and community...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-1">
                            <img src="{{ asset('/assets/images/web-image/tm1.jpeg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

             
                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">Highlights from the ICCUFP - 2025</h3>
                        <p class="text-primary font-weight-bold">21st November & 22nd November, 2025</p>
                        <p>November 21st and 22nd, 2025, Manipur International University is hosting a crucial International
                            Conference to address the key concerns of chemical fertilizer and pesticides overuse in
                            Manipur...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-2">
                            <img src="{{ asset('/assets/images/web-image/ic1.jpeg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

            
                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">Highlights from the Satsang at MIU</h3>
                        <p class="text-primary font-weight-bold">1st November, 2025</p>
                        <p>Manipur International University, in collaboration with the BI Manipur Centre, successfully
                            organized a soulful Satsang on 1st November at the MIU Ground Floor Meeting Room, Dr. Gurumayum
                            Kennedy Institute of Petrotechnology...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-3">
                            <img src="{{ asset('/assets/images/web-image/s1.jpg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">3rd- Academic Council Meeting 2025</h3>
                        <p class="text-primary font-weight-bold">31st October, 2025</p>
                        <p>3rd Academic Council Meeting held on 31st October 2025 at the MIU Head Office, Ghari. Key
                            discussions included updates on PhD & course regulations, new syllabi and research
                            initiatives.Grateful to all members and...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-4">
                            <img src="{{ asset('/assets/images/web-image/s2.jpeg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">Reception of our Champions</h3>
                        <p class="text-primary font-weight-bold">3rd September, 2025</p>
                        <p>A proud day for MIU! Our scholar from the Department of Yoga & Physical Education has made
                            history by winning Gold, Silver, and Bronze at the National Yoga Competition in Nagpur,
                            Maharashtra...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-5">
                            <img src="{{ asset('/assets/images/web-image/y1.jpeg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="border p-3 rounded-3 shadow-sm">
                        <h3 class="fs-5 py-2">National Sports Day</h3>
                        <p class="text-primary font-weight-bold">29th August, 2025</p>
                        <p>Today, we paid floral tribute to Major Dhyan Chand, the hockey legend of India, and celebrated
                            National Sports Day with great spirit at Manipur International University...</p>

                        <div class="card gallery-page__single" data-tgt="gallery-6">
                            <img src="{{ asset('/assets/images/web-image/n1.jpeg') }}" class="img-fluid" alt="image">
                        </div>
                    </div>
                </div>

            </div>

            
            <div id="gallery-1" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/tm1.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/tm2.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/tm3.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/tm4.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/tm5.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/tm6.jpeg') }}"></a>
            </div>

            <div id="gallery-2" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/ic1.jpeg') }}"></a>
            </div>

            <div id="gallery-3" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/s1.jpg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s2.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s3.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s4.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s5.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s6.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s7.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s8.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s9.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s10.jpeg') }}"></a>
            </div>

            <div id="gallery-4" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/s1.jpg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s2.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s3.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s4.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s5.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s6.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s7.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s8.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s9.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/s10.jpeg') }}"></a>
            </div>

            <div id="gallery-5" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/y1.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y2.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y3.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y4.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y5.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y6.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y7.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y8.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y9.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y10.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y11.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y12.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y13.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y14.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y15.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y16.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y18.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y19.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/y20.jpeg') }}"></a>
            </div>

            <div id="gallery-6" class="mfp-hide">
                <a href="{{ asset('/assets/images/web-image/n1.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n2.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n3.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n4.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n5.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n6.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n7.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n8.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n9.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n10.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n11.jpeg') }}"></a>
                <a href="{{ asset('/assets/images/web-image/n12.jpeg') }}"></a>
            </div>
        </div>
    </section> --}}
    <section class="blog-style1-area mb-5">
    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($galleries as $gallery)
            <div class="col-md-6 mb-4">
                <div class="border p-3 rounded-3 shadow-sm">
                    <h3 class="fs-5 py-2">{{ $gallery->title }}</h3>
                    <p class="text-primary font-weight-bold">{{ date('jS F, Y', strtotime($gallery->event_date)) }}</p>
                    <p>{{ Str::limit($gallery->description, 150) }}</p>

                    <div class="card gallery-page__single" data-tgt="gallery-{{ $gallery->id }}">
                        <img src="{{ asset($gallery->cover_image) }}" class="img-fluid" alt="{{ $gallery->title }}" style="height: 300px; width: 100%; object-fit: cover;">
                    </div>
                </div>
            </div>

            <!-- Hidden Gallery for Lightbox -->
            <div id="gallery-{{ $gallery->id }}" class="mfp-hide">
                @if ($gallery->images)
                @foreach ($gallery->images as $img)
                <a href="{{ asset($img) }}"></a>
                @endforeach
                @endif
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No galleries found.</p>
            </div>
            @endforelse

        </div>
    </div>
</section>




@endsection
@section('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.gallery-page__single').each(function() {
                const target = '#' + $(this).data('tgt');
                const items = $(target).find('a');

                if (!items.length) return;

                $(this).magnificPopup({
                    items: items.map(function() {
                        return {
                            src: $(this).attr('href')
                        };
                    }).get(),
                    type: 'image',
                    gallery: {
                        enabled: true
                    },
                    mainClass: 'mfp-fade'
                });
            });
        });
    </script>
@endsection
