 @extends('web.layouts.main')
 @section('title', '| Campus Life and Student Development at Manipur International University')
 @section('description', 'Campus Life and Student Development at Manipur International University')

 @section('styles')
     <style>
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

         .breadcrumb-area-bg:before {
             opacity: 0.65 !important;
         }

         .ul li {
             list-style: disc;
         }
     </style>
 @endsection
 @section('content')

     <!--Start breadcrumb area paroller-->
     <section class="breadcrumb-area">
         <div class="breadcrumb-area-bg custom-image" style="background-image: url(/assets/images/about/about.jpg);">
         </div>
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="inner-content">
                         <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                             <h3 class="h1 text-white"> Campus Life and Student Development at Manipur International
                                 University </h3>
                         </div>
                         <div class="breadcrumb-menu" data-aos="fade-down" data-aos-easing="linear"
                             data-aos-duration="1500">
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
     <!--End breadcrumb area-->


     <!--Start Blog Details Page -->
     <section class="blog-details-page">
         <div class="container">
             <div class="row">

                 <div class="col-xl-9">
                     <div class="blog-details-page__content">
                         <div class="blog-details-page__content__inner">
                             <div class="blog-details-page__img-box">
                                 <img src="{{ asset('assets/images/about/about.jpg') }}" class="img-fluid" alt="image">
                             </div>

                             <div class="my-4">

                                 <p>
                                     Campus life plays a crucial role in shaping a student’s personality, skills, and career
                                     path. At Manipur International University (MIU), education extends beyond classrooms to
                                     create a vibrant environment that nurtures academic excellence, personal growth, and
                                     professional readiness.
                                 </p>

                                 <h3 class="h3 mt-4">A Peaceful and Focused Learning Environment</h3>

                                 <p>
                                     Located in the culturally rich state of Manipur, MIU offers a serene campus setting
                                     that is ideal for focused learning. The calm surroundings and natural beauty of the
                                     region create a positive atmosphere where students can concentrate on their studies
                                     while enjoying a balanced lifestyle.
                                 </p>

                                 <h3 class="h3 mt-4">Modern Infrastructure and Facilities</h3>

                                 <p>
                                     MIU provides essential academic and residential facilities to ensure a comfortable and
                                     productive campus experience.
                                 </p>

                                 <ul class="ul ml-4 mb-3">
                                     <li>Well-equipped classrooms and laboratories</li>
                                     <li>Library with academic and reference resources</li>
                                     <li>Computer labs with internet connectivity</li>
                                     <li>Hostel and dining facilities</li>
                                     <li>Sports and recreational areas</li>
                                 </ul>

                                 <p>
                                     Such infrastructure supports both academic and extracurricular development.
                                 </p>

                                 <h3 class="h3 mt-4">Holistic Student Development</h3>

                                 <p>
                                     The university emphasizes the overall growth of students through a mix of academic and
                                     non-academic activities. Students are encouraged to participate in:
                                 </p>

                                 <ul class="ul ml-4 mb-3">
                                     <li>Cultural events and festivals</li>
                                     <li>Technical and management clubs</li>
                                     <li>Sports competitions</li>
                                     <li>Seminars, workshops, and guest lectures</li>
                                 </ul>

                                 <p>
                                     These activities help students build confidence, leadership qualities, teamwork skills,
                                     and communication abilities.
                                 </p>

                                 <h3 class="h3 mt-4">Skill-Based and Career-Oriented Learning</h3>

                                 <p>
                                     MIU focuses on industry-relevant education, especially in skill and vocational
                                     programs. Students gain:
                                 </p>

                                 <ul class="ul ml-4 mb-3">
                                     <li>Practical training and hands-on experience</li>
                                     <li>Industry exposure through internships</li>
                                     <li>Soft skills and personality development sessions</li>
                                     <li>Career guidance and placement support</li>
                                 </ul>

                                 <p>
                                     This approach ensures that graduates are not only academically qualified but also
                                     job-ready.
                                 </p>

                                 <h3 class="h3 mt-4">A Diverse and Inclusive Community</h3>

                                 <p>
                                     Students from different states and backgrounds come together at MIU, creating a
                                     multicultural campus environment.
                                 </p>

                                 <ul class="ul ml-4 mb-3">
                                     <li>Cultural exchange and mutual respect</li>
                                     <li>Broader perspectives and social awareness</li>
                                     <li>Strong peer networks and friendships</li>
                                 </ul>

                                 <h3 class="h3 mt-4">Opportunities for Leadership and Innovation</h3>

                                 <p>
                                     The university encourages students to take initiative through student councils, clubs,
                                     and project-based learning. These opportunities help develop:
                                 </p>

                                 <ul class="ul ml-4 mb-3">
                                     <li>Decision-making skills</li>
                                     <li>Entrepreneurial thinking</li>
                                     <li>Problem-solving abilities</li>
                                 </ul>

                                 <h3 class="h3 mt-4">Conclusion</h3>

                                 <p>
                                     Campus life at Manipur International University is designed to create well-rounded
                                     individuals who are academically strong, socially responsible, and professionally
                                     prepared.
                                 </p>

                                 <p>
                                     With modern facilities, diverse activities, and a strong focus on skill development,
                                     MIU provides an environment where students can grow into confident and capable
                                     professionals.
                                 </p>

                             </div>

                         </div>
                     </div>
                 </div>

                 <!--Start Thm Sidebar Box-->
                 <div class="col-xl-3 col-lg-5">
                     <div class="thm-sidebar-box">
                         <div class="single-sidebar-box">
                             <div class="sidebar-title">
                                 <div class="dot-box"></div>
                                 <h3>Popular Posts</h3>
                             </div>
                             <div class="sidebar-blog-post">
                                 <ul class="blog-post">
                                     <li>
                                         <div class="inner">
                                             <div class="img-box">
                                                 <img src="{{ asset('assets/images/about/about.jpg') }}"
                                                     class="img-fluid" alt="image">
                                                 <div class="overlay-content">
                                                     <a
                                                         href="/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india">
                                                         <i class="fa fa-link" aria-hidden="true"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="title-box">
                                                 <div class="post-date">
                                                     <span class="icon-date"></span> Feb 14, 2026
                                                 </div>
                                                 <h4>
                                                     <a
                                                         href="/why-manipur-international-university-is-emerging-as-a-top-choice-for-higher-education-in-northeast-india">
                                                         Why Manipur International ...
                                                     </a>
                                                 </h4>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="inner">
                                             <div class="img-box">
                                                 <img src="{{ asset('assets/images/about/about.jpg') }}"
                                                     class="img-fluid" alt="image">
                                                 <div class="overlay-content">
                                                     <a href="/top-career-oriented-programs-at-manipur-international-university-forfuture-ready-students">
                                                         <i class="fa fa-link" aria-hidden="true"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="title-box">
                                                 <div class="post-date">
                                                     <span class="icon-date"></span> Feb 13, 2026
                                                 </div>
                                                 <h4>
                                                     <a href="/top-career-oriented-programs-at-manipur-international-university-forfuture-ready-students">
                                                         Top Career-Oriented Progr...
                                                     </a>
                                                 </h4>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="inner">
                                             <div class="img-box">
                                                 <img src="{{ asset('assets/images/about/about.jpg') }}"
                                                     class="img-fluid" alt="image">
                                                 <div class="overlay-content">
                                                     <a href="/ugc-recognition-and-nep-aligned-education-at-manipur-international-university-what-students-should-know">
                                                         <i class="fa fa-link" aria-hidden="true"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="title-box">
                                                 <div class="post-date">
                                                     <span class="icon-date"></span> Feb 12, 2026
                                                 </div>
                                                 <h4>
                                                     <a href="/ugc-recognition-and-nep-aligned-education-at-manipur-international-university-what-students-should-know">
                                                         UGC Recognition and NEP...
                                                     </a>
                                                 </h4>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="inner">
                                             <div class="img-box">
                                                 <img src="{{ asset('assets/images/about/about.jpg') }}"
                                                     class="img-fluid" alt="image">
                                                 <div class="overlay-content">
                                                     <a href="/campus-life-and-student-development-at-manipur-international-university">
                                                         <i class="fa fa-link" aria-hidden="true"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="title-box">
                                                 <div class="post-date">
                                                     <span class="icon-date"></span> Feb 11, 2026
                                                 </div>
                                                 <h4>
                                                     <a href="/campus-life-and-student-development-at-manipur-international-university">
                                                         Campus Life and Student Deve...
                                                     </a>
                                                 </h4>
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="inner">
                                             <div class="img-box">
                                                 <img src="{{ asset('assets/images/about/about.jpg') }}"
                                                     class="img-fluid" alt="image">
                                                 <div class="overlay-content">
                                                     <a href="/admission-guide-2026-how-to-apply-to-manipur-international-university">
                                                         <i class="fa fa-link" aria-hidden="true"></i>
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="title-box">
                                                 <div class="post-date">
                                                     <span class="icon-date"></span> Feb 10, 2026
                                                 </div>
                                                 <h4>
                                                     <a href="/admission-guide-2026-how-to-apply-to-manipur-international-university">
                                                         Admission Guide 2026: How to...
                                                     </a>
                                                 </h4>
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--End Thm Sidebar Box-->

             </div>
         </div>
     </section>
     <!--End Blog Details Page -->




 @endsection
 @section('scripts')
 @endsection
