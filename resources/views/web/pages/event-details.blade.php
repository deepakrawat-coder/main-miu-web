@extends('web.layouts.main')
@section('title', '| Event Details ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')
@section('styles')
@endsection
@section('content')



    <div class="breadcumb-wrapper position-relative" data-bg-src="assets/img/shape/breadcrumb-shep.png">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Event Details</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>{{ $event->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container th-container2">
            <div class="row gx-60">
                <div class="col-xl-8 col-lg-7">
                    <div class="blog">
                        <div class="blog-img">
                            <img src="{{ asset($event->image) }}" class="img-fluid w-100" alt="event image">
                        </div>
                        <div class="blog-title my-3">
                            <h3>{{ $event->title }}</h3>
                        </div>
                        <div class="blog-desc">
                            <p>
                                {!! $event->description !!} </p>

                            {{-- <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolore neque officia ullam ex obcaecati delectus fugit tenetur error quibusdam.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, adipisci? Perspiciatis explicabo numquam deleniti eum, pariatur ea. Doloremque assumenda labore rerum magnam a earum dolorem eaque nesciunt deleniti? Repellendus debitis illo ab sapiente magnam earum assumenda consectetur animi ipsam, tempora accusamus cumque cupiditate mollitia, eaque recusandae iure hic, error magni vel autem consequuntur illum atque? Enim magni amet repellat repudiandae.
                            </p> --}}
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-5">
                    <aside class="sidebar-area sidebar-sticky">
                        <div class="widget">
                            <h3 class="widget_title">Other Events</h3>
                            <div class="recent-post-wrap">
                                @foreach ($otherevents as $other)
                                    <div class="recent-post">
                                        <div class="media-img"><a href="/event/{{ $other->slug }}"><img
                                                    src="{{ asset($other->image) }}" alt="Blog Image"></a></div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="/event/{{ $other->slug }}">{{ substr($other->title, 0, 30) }}</a></h4>
                                            {{-- <p>{{ substr($other->short_description, 0, 50) }}</p> --}}
                                            <div class="recent-post-meta"><a href="/event/{{ $other->slug }}"><i
                                                        class="far fa-calendar"></i>{{ date('d M Y', strtotime($other->publish_date)) }}</a></div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="recent-post">
                                    <div class="media-img"><a href="/blog-details"><img
                                                src="{{ asset('new-miu/about/event.jpg') }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="/blog-details">Future
                                                Focus Preparing for Tomorrow</a></h4>
                                        <div class="recent-post-meta"><a href="/event-details"><i
                                                    class="far fa-calendar"></i>24/6/2025</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="/blog-details"><img
                                                src="{{ asset('new-miu/about/event.jpg') }}" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="/blog-details">The
                                                Green Initiative Sustainability in Action</a></h4>
                                        <div class="recent-post-meta"><a href="/event-details"><i
                                                    class="far fa-calendar"></i>24/6/2025</a></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>

                        <div class="widget widget_banner" data-bg-src="assets/img/widget/widget-banner.jpg"
                            data-overlay="title" data-opacity="8">
                            <div class="widget-banner text-center">
                                <h3 class="title">Need Help? We Are Here<br>To Help You</h3>
                                <div class="logo"><img src="{{ asset('/new-miu/weblogo.png') }}" alt="logo"></div>
                                <h4 class="subtitle">You Get Online support</h4>
                                <a href="/contact" class="th-btn btn-lg white-hover">Contact Us</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>




@endsection
