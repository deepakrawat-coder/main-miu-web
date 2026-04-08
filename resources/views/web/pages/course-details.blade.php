@extends('web.layouts.main')
@section('title', '| Schools and Departments Details')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
<style>
    .course-badges-section {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4fe 100%);
        border-radius: 24px;
        padding: 2rem;
        margin: 2rem 0;
        border: 1px solid rgba(59, 91, 147, 0.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.03);
    }
    
    .section-title-wrapper {
        margin-bottom: 1.5rem;
        border-left: 4px solid #1e3a5f;
        padding-left: 1rem;
    }
    
    .section-title-wrapper h4 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #0a2540;
        margin: 0;
    }
    
    .section-title-wrapper p {
        color: #5a6e85;
        margin: 0.25rem 0 0 0;
        font-size: 0.9rem;
    }
    
    .badge-container {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        align-items: center;
    }
    
    .course-badge {
        display: inline-flex;
        align-items: center;
        padding: 0.5rem 1.2rem;
        background: white;
        color: #1e3a5f;
        font-weight: 600;
        font-size: 0.85rem;
        border-radius: 40px;
        transition: all 0.25s ease;
        border: 1px solid rgba(30, 58, 95, 0.15);
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.02);
        letter-spacing: 0.3px;
    }
    
    .course-badge:hover {
        background: #1e3a5f;
        color: white;
        border-color: #1e3a5f;
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(30, 58, 95, 0.15);
    }
    
    .badge-icon {
        margin-right: 0.4rem;
        font-size: 0.8rem;
        opacity: 0.8;
    }
    
    /* Counter badge styling */
    .badge-counter {
        background: #1e3a5f;
        color: white;
        border-radius: 30px;
        padding: 0.25rem 0.8rem;
        font-size: 0.75rem;
        font-weight: 500;
        margin-left: 0.75rem;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .course-badges-section {
            padding: 1.25rem;
            margin: 1.5rem 0;
        }
        
        .section-title-wrapper h4 {
            font-size: 1.25rem;
        }
        
        .course-badge {
            padding: 0.35rem 1rem;
            font-size: 0.75rem;
        }
        
        .badge-container {
            gap: 0.4rem;
        }
    }
    
    @media (max-width: 480px) {
        .course-badges-section {
            padding: 1rem;
            border-radius: 20px;
        }
        
        .section-title-wrapper {
            padding-left: 0.75rem;
        }
        
        .section-title-wrapper h4 {
            font-size: 1.1rem;
        }
        
        .course-badge {
            padding: 0.3rem 0.8rem;
            font-size: 0.7rem;
        }
    }
    
    /* Animation for badges */
    .course-badge {
        animation: fadeInUp 0.3s ease backwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection

@section('content')

    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $course->name }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>{{ $course->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-10">
                    <div class="page-single">
                        <div class="page-img global-img">
                            <img src="{{ asset($course->image) }}" alt="Event Image" class="img-fluid rounded-3">
                        </div>

                        <h3 class="h3 mt-4">About the {{ $course->name }}</h3>
                        <p class="mb-30">
                            {!! $course->content !!}
                        </p>

                        {{-- ==================== COURSE BADGES SECTION (DESIGNED) ==================== --}}
                        @php
                            $decoded = json_decode($course->program_course_name, true);
                            
                            // Get string
                            $raw = is_array($decoded) ? ($decoded[0] ?? '') : $course->program_course_name;
                            
                            // Split by comma OR dot OR semicolon
                            $courseName = preg_split('/[,.;]+/', $raw ?? '');
                            
                            // Clean spaces + remove empty
                            $courseName = array_filter(array_map('trim', $courseName));
                            
                            // Remove duplicates if any
                            $courseName = array_unique($courseName);
                            
                            // Reset index
                            $courseName = array_values($courseName);
                        @endphp

                        @if(!empty($courseName) && count($courseName) > 0)
                            <div class="course-badges-section">
                                <div class="section-title-wrapper">
                                    <h4>
                                        <i class="fas fa-graduation-cap me-2" style="color: #1e3a5f;"></i>
                                        Programs & Specializations
                                    </h4>
                                    <p>Explore our comprehensive range of courses and specializations</p>
                                </div>
                                
                                <div class="badge-container">
                                    @foreach ($courseName as $index => $item)
                                        <span class="course-badge" style="animation-delay: {{ $index * 0.02 }}s">
                                            <i class="fas fa-book-open badge-icon"></i>
                                            {{ $item }}
                                        </span>
                                    @endforeach
                                </div>
                                
                                <div class="mt-3 pt-2">
                                    <small class="text-muted">
                                        <i class="fas fa-layer-group me-1"></i> 
                                        Total Specializations: <strong>{{ count($courseName) }}</strong>
                                    </small>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-light border rounded-3 mt-3">
                                <i class="fas fa-info-circle me-2"></i>
                                No specializations available for this course at the moment.
                            </div>
                        @endif
                        {{-- ==================== END COURSE BADGES SECTION ==================== --}}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection