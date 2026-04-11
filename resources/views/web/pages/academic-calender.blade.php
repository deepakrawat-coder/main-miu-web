@extends('web.layouts.main')
@section('title', '| About ')
@section('description',
    'MIU University is a renowned university, serving students with more than 35 UGC-certified
    courses.')

@section('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #1e40af;
            --secondary-color: #0891b2;
            --accent-color: #f59e0b;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f97316;
            --dark-bg: #1f2937;
            --light-bg: #f9fafb;
            --card-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        /* body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                min-height: 100vh;
                padding: 20px 0;
            } */

        /* Header Section */
        .header-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 60px 20px;
            text-align: center;
            border-radius: 0 0 30px 30px;
            margin-bottom: 40px;
            box-shadow: var(--card-shadow);
        }

        .header-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header-section p {
            font-size: 1.3rem;
            opacity: 0.95;
        }

        .header-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: inline-block;
        }

        /* Controls Section */
        .controls-section {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-control {
            padding: 10px 25px;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            text-transform: uppercase;
            font-size: 0.9rem;
            box-shadow: var(--card-shadow);
        }

        .btn-control.active {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 12px rgba(30, 64, 175, 0.3);
        }

        .btn-control:not(.active) {
            background: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
        }

        .btn-control:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 12px rgba(30, 64, 175, 0.3);
        }

        /* Calendar Container */
        .calendar-container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--light-bg);
        }

        .calendar-header h2 {
            font-size: 2rem;
            color: black;
            margin: 0;
        }

        .nav-buttons {
            display: flex;
            gap: 10px;
        }

        .nav-btn {
            width: 45px;
            height: 45px;
            border: none;
            background: var(--light-bg);
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--primary-color);
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn:hover {
            background: var(--primary-color);
            color: white;
            transform: scale(1.1);
        }

        /* Calendar Grid */
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 12px;
            margin-bottom: 30px;
        }

        .weekday {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.95rem;
        }

        .calendar-day {
            aspect-ratio: 1 / 1;
            border: 2px solid var(--light-bg);
            border-radius: 12px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: white;
            font-weight: 600;
            color: var(--dark-bg);
        }

        .calendar-day:hover {
            background: var(--light-bg);
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .calendar-day.other-month {
            opacity: 0.4;
            pointer-events: none;
        }

        .calendar-day.today {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            font-weight: 700;
            box-shadow: 0 6px 12px rgba(30, 64, 175, 0.3);
        }

        .calendar-day.event {
            border: 2px solid var(--accent-color);
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            color: #92400e;
        }

        .calendar-day.event-dot {
            position: absolute;
            bottom: 3px;
            width: 6px;
            height: 6px;
            background: var(--accent-color);
            border-radius: 50%;
        }

        /* Events Section */
        .events-section {
            margin-top: 40px;
            padding-top: 40px;
            border-top: 2px solid var(--light-bg);
        }

        .events-section h3 {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .event-card {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            border-left: 5px solid var(--primary-color);
            padding: 20px;
            border-radius: 12px;
            transition: var(--transition);
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.08);
        }

        .event-card.exam {
            border-left-color: var(--danger-color);
            background: linear-gradient(135deg, #fee2e2, #fecaca);
        }

        .event-card.holiday {
            border-left-color: var(--success-color);
            background: linear-gradient(135deg, #dcfce7, #bbf7d0);
        }

        .event-card.seminar {
            border-left-color: var(--warning-color);
            background: linear-gradient(135deg, #fed7aa, #fdba74);
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .event-card h4 {
            color: var(--dark-bg);
            font-size: 1.2rem;
            margin: 0 0 8px 0;
            font-weight: 700;
        }

        .event-date {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 10px;
        }

        .event-description {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .event-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .badge-exam {
            background: var(--danger-color);
            color: white;
        }

        .badge-holiday {
            background: var(--success-color);
            color: white;
        }

        .badge-seminar {
            background: var(--warning-color);
            color: white;
        }

        /* Semester Info */
        .semester-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-card {
            background: white;
            border: 2px solid var(--light-bg);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            transition: var(--transition);
        }

        .info-card:hover {
            border-color: var(--primary-color);
            box-shadow: 0 8px 16px rgba(30, 64, 175, 0.15);
        }

        .info-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .info-card h4 {
            color: var(--dark-bg);
            margin: 10px 0;
            font-weight: 700;
        }

        .info-card p {
            color: #666;
            margin: 0;
            font-size: 0.95rem;
        }

        /* Modal */
        .modal-content {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            border-radius: 20px 20px 0 0;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-body {
            padding: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-section h1 {
                font-size: 2rem;
            }

            .calendar-container {
                padding: 20px;
            }

            .calendar-grid {
                gap: 8px;
            }

            .calendar-day {
                font-size: 0.85rem;
                padding: 5px;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .controls-section {
                justify-content: center;
            }

            .semester-info {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            body {
                padding: 10px 0;
            }

            .header-section {
                padding: 40px 15px;
                border-radius: 0 0 15px 15px;
            }

            .header-icon {
                font-size: 3rem;
            }

            .header-section h1 {
                font-size: 1.8rem;
            }

            .header-section p {
                font-size: 1rem;
            }

            .calendar-container {
                padding: 15px;
                border-radius: 15px;
            }

            .calendar-header h2 {
                font-size: 1.5rem;
            }

            .weekday {
                padding: 8px;
                font-size: 0.8rem;
            }

            .calendar-day {
                font-size: 0.75rem;
            }

            .event-card {
                padding: 15px;
            }

            .event-card h4 {
                font-size: 1rem;
            }
        }

        /* Animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .calendar-day {
            animation: slideIn 0.3s ease forwards;
        }

        .calendar-day:nth-child(1) {
            animation-delay: 0s;
        }

        .calendar-day:nth-child(2) {
            animation-delay: 0.02s;
        }

        .calendar-day:nth-child(3) {
            animation-delay: 0.04s;
        }

        .calendar-day:nth-child(4) {
            animation-delay: 0.06s;
        }

        .calendar-day:nth-child(5) {
            animation-delay: 0.08s;
        }

        .calendar-day:nth-child(6) {
            animation-delay: 0.1s;
        }

        .calendar-day:nth-child(7) {
            animation-delay: 0.12s;
        }
    </style>
@endsection
@section('content')




    <div class="breadcumb-wrapper position-relative" data-bg-src="{{ asset('/assets/img/shape/breadcrumb-shep.png') }}">
        <div class="breadcumb-banner"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="bg-banner"></div>
        {{-- <div class="breadcumb-shape"><img src="{{ asset('/new-miu/banner/banner4.png') }}" alt="shape" class="jump"></div> --}}
        <div class="container th-container4">
            <div class="row">
                <div class="col-xxl-5">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">About Us</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="about1-area position-relative overflow-hidden space pb-0" id="about-sec">
        <div class="container-lg">
            <!-- Semester Info Cards -->
            <div class="semester-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h4>Fall Semester 2024</h4>
                    <p>August 26 - December 15</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-hourglass-start"></i>
                    </div>
                    <h4>Registration Deadline</h4>
                    <p>August 22, 2024</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-pen"></i>
                    </div>
                    <h4>Exam Period</h4>
                    <p>December 9 - December 20</p>
                </div>
            </div>

            <!-- Controls -->
            <div class="controls-section">
                <button class="btn-control active" data-month="current">This Month</button>
                <button class="btn-control" data-month="prev">Previous</button>
                <button class="btn-control" data-month="next">Next</button>
                <button class="btn-control" data-view="list">List View</button>
            </div>

            <!-- Calendar -->
            <div class="calendar-container">
                <div class="calendar-header">
                    <h2 id="monthYear"></h2>
                    <div class="nav-buttons">
                        <button class="nav-btn" id="prevBtn" title="Previous month">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="nav-btn" id="nextBtn" title="Next month">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Calendar Grid -->
                <div class="calendar-grid" id="calendarGrid"></div>

                <!-- Events Section -->
                <div class="events-section">
                    <h3>
                        <i class="fas fa-bell"></i>
                        Upcoming Events
                    </h3>
                    <div class="events-grid" id="eventsGrid"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Details Modal -->
    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="eventModalBody">
                    <!-- Event details will be inserted here -->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        // Sample events data
        const eventsData = {
            '2024-08-26': {
                title: 'Semester Starts',
                type: 'holiday',
                description: 'Fall semester begins. Welcome to the new academic year!'
            },
            '2024-09-05': {
                title: 'Add/Drop Deadline',
                type: 'exam',
                description: 'Last day to add or drop courses without academic penalty.'
            },
            '2024-09-15': {
                title: 'Faculty Seminar',
                type: 'seminar',
                description: 'Guest lecture by renowned professor Dr. James Wilson.'
            },
            '2024-10-12': {
                title: 'Midterm Exams Begin',
                type: 'exam',
                description: 'Midterm examination period starts. Check your exam schedule.'
            },
            '2024-10-21': {
                title: 'Homecoming Week',
                type: 'holiday',
                description: 'Join us for a week of celebrations and campus activities.'
            },
            '2024-11-28': {
                title: 'Thanksgiving Break',
                type: 'holiday',
                description: 'University closed for Thanksgiving. Campus reopens on November 25.'
            },
            '2024-12-09': {
                title: 'Final Exams Start',
                type: 'exam',
                description: 'Final examination period begins. Study hard and good luck!'
            },
            '2024-12-15': {
                title: 'Semester Ends',
                type: 'holiday',
                description: 'Fall semester concludes. Grades will be posted by December 22.'
            },
            '2025-01-15': {
                title: 'Spring Semester Starts',
                type: 'holiday',
                description: 'Spring semester begins. New courses, new opportunities!'
            },
            '2025-02-28': {
                title: 'Research Conference',
                type: 'seminar',
                description: 'Annual research conference showcasing student and faculty projects.'
            },
            '2025-03-10': {
                title: 'Spring Break',
                type: 'holiday',
                description: 'Spring break period. Campus remains open.'
            },
            '2025-05-05': {
                title: 'Final Exams',
                type: 'exam',
                description: 'Last day of final exams for spring semester.'
            },
        };

        let currentDate = new Date();

        // Generate calendar
        function generateCalendar(date) {
            const year = date.getFullYear();
            const month = date.getMonth();

            // Update header
            document.getElementById('monthYear').textContent =
                date.toLocaleDateString('en-US', {
                    month: 'long',
                    year: 'numeric'
                });

            // Get first day and number of days
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const daysInPrevMonth = new Date(year, month, 0).getDate();

            const grid = document.getElementById('calendarGrid');
            grid.innerHTML = '';

            // Add weekday headers
            const weekdays = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
            weekdays.forEach(day => {
                const weekdayDiv = document.createElement('div');
                weekdayDiv.className = 'weekday';
                weekdayDiv.textContent = day;
                grid.appendChild(weekdayDiv);
            });

            // Add previous month's days
            for (let i = firstDay - 1; i >= 0; i--) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'calendar-day other-month';
                dayDiv.textContent = daysInPrevMonth - i;
                grid.appendChild(dayDiv);
            }

            // Add current month's days
            const today = new Date();
            for (let day = 1; day <= daysInMonth; day++) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'calendar-day';

                const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

                // Check if it's today
                if (day === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                    dayDiv.classList.add('today');
                }

                // Check for events
                if (eventsData[dateStr]) {
                    dayDiv.classList.add('event');
                    dayDiv.innerHTML = `<span>${day}</span><div class="event-dot"></div>`;
                    dayDiv.addEventListener('click', () => showEventModal(eventsData[dateStr]));
                } else {
                    dayDiv.textContent = day;
                }

                grid.appendChild(dayDiv);
            }

            // Add next month's days
            const totalCells = grid.children.length - 7; // Exclude weekday headers
            const remainingCells = 42 - totalCells; // 6 rows * 7 days
            for (let day = 1; day <= remainingCells; day++) {
                const dayDiv = document.createElement('div');
                dayDiv.className = 'calendar-day other-month';
                dayDiv.textContent = day;
                grid.appendChild(dayDiv);
            }

            // Populate events list
            populateEvents(year, month);
        }

        // Populate events
        function populateEvents(year, month) {
            const eventsGrid = document.getElementById('eventsGrid');
            eventsGrid.innerHTML = '';

            const monthEvents = Object.entries(eventsData)
                .filter(([date]) => {
                    const eventDate = new Date(date);
                    return eventDate.getFullYear() === year && eventDate.getMonth() === month;
                })
                .sort((a, b) => new Date(a[0]) - new Date(b[0]));

            if (monthEvents.length === 0) {
                eventsGrid.innerHTML =
                    '<p style="grid-column: 1/-1; text-align: center; color: #999;">No events this month</p>';
                return;
            }

            monthEvents.forEach(([date, event]) => {
                const eventCard = document.createElement('div');
                eventCard.className = `event-card ${event.type}`;
                eventCard.innerHTML = `
                    <h4>${event.title}</h4>
                    <div class="event-date">
                        <i class="fas fa-calendar"></i>
                        ${new Date(date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}
                    </div>
                    <p class="event-description">${event.description}</p>
                    <span class="event-badge badge-${event.type}">${event.type}</span>
                `;
                eventCard.addEventListener('click', () => showEventModal(event));
                eventsGrid.appendChild(eventCard);
            });
        }

        // Show event modal
        function showEventModal(event) {
            const modalBody = document.getElementById('eventModalBody');
            const typeIcons = {
                exam: 'fas fa-pen-alt',
                holiday: 'fas fa-umbrella-beach',
                seminar: 'fas fa-graduation-cap'
            };

            modalBody.innerHTML = `
                <div style="text-align: center;">
                    <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 15px;">
                        <i class="${typeIcons[event.type]}"></i>
                    </div>
                    <h4 style="color: var(--dark-bg); margin-bottom: 15px; font-weight: 700;">${event.title}</h4>
                    <p style="color: #666; line-height: 1.6; margin-bottom: 20px;">${event.description}</p>
                    <span class="event-badge badge-${event.type}">${event.type.toUpperCase()}</span>
                </div>
            `;

            const modal = new bootstrap.Modal(document.getElementById('eventModal'));
            modal.show();
        }

        // Event listeners
        document.getElementById('prevBtn').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() - 1);
            generateCalendar(currentDate);
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            currentDate.setMonth(currentDate.getMonth() + 1);
            generateCalendar(currentDate);
        });

        document.querySelectorAll('[data-month]').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('[data-month]').forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const action = this.dataset.month;
                if (action === 'prev') {
                    currentDate.setMonth(currentDate.getMonth() - 1);
                } else if (action === 'next') {
                    currentDate.setMonth(currentDate.getMonth() + 1);
                } else if (action === 'current') {
                    currentDate = new Date();
                }
                generateCalendar(currentDate);
            });
        });

        // Initialize
        generateCalendar(currentDate);

        // Add smooth scroll behavior
        document.documentElement.style.scrollBehavior = 'smooth';
    </script>
@endsection
