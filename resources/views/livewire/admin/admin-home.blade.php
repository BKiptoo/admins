<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="bi bi-house-door"></i>Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Attendance Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card attendance-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Attendance <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>85</h6>
                                        <span class="text-success small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Attendance Card -->


                    <!-- Donation Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card donation-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Donations <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-hand-holding-heart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$1,500</h6>
                                        <span class="text-success small pt-1 fw-bold">15%</span> <span class="text-muted small pt-2 ps-1">increase</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Donation Card -->


                    <!-- Congregation Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card congregation-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Congregation <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>800</h6>
                                        <span class="text-danger small pt-1 fw-bold">10%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- End Congregation Card -->


                    <!-- Weekly Attendance -->
                    <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Weekly Attendance <span>| This Week</span></h5>

                                <!-- Line Chart -->
                                <div id="attendanceChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#attendanceChart"), {
                                            series: [{
                                                name: 'Sabbath Service',
                                                data: [80, 85, 90, 85, 88, 92, 95],
                                            }, {
                                                name: 'Online Service',
                                                data: [30, 35, 40, 38, 42, 45, 50]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: ["2024-02-10T00:00:00.000Z", "2024-02-11T00:00:00.000Z", "2024-02-12T00:00:00.000Z", "2024-02-13T00:00:00.000Z", "2024-02-14T00:00:00.000Z", "2024-02-15T00:00:00.000Z", "2024-02-16T00:00:00.000Z"]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->

                            </div>

                        </div>
                    </div><!-- End Weekly Attendance -->


                    <!-- Recent Donations -->
                    <div class="col-12">
                        <div class="card recent-donations overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Offerings <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Donor</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Method</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>John Doe</td>
                                        <td>$100</td>
                                        <td>Credit Card</td>
                                        <td><span class="badge bg-success">Received</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2147</a></th>
                                        <td>Jane Smith</td>
                                        <td>$50</td>
                                        <td>Bank Transfer</td>
                                        <td><span class="badge bg-success">Received</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2049</a></th>
                                        <td>Michael Johnson</td>
                                        <td>$200</td>
                                        <td>Cash</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2644</a></th>
                                        <td>Sarah Brown</td>
                                        <td>$75</td>
                                        <td>Online Payment</td>
                                        <td><span class="badge bg-success">Received</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#">#2644</a></th>
                                        <td>David Wilson</td>
                                        <td>$150</td>
                                        <td>Check</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Donations -->


                    <!-- Top Sermons -->
                    <div class="col-12">
                        <div class="card top-sermons overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Sermons <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Speaker</th>
                                        <th scope="col">Views</th>
                                        <th scope="col">Likes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><a href="#" class="text-primary fw-bold">The Power of Prayer</a></th>
                                        <td>Pastor John Doe</td>
                                        <td class="fw-bold">500</td>
                                        <td class="fw-bold">200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="text-primary fw-bold">Finding Strength in God</a></th>
                                        <td>Pastor Jane Smith</td>
                                        <td class="fw-bold">400</td>
                                        <td class="fw-bold">180</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="text-primary fw-bold">Living a Purposeful Life</a></th>
                                        <td>Pastor Michael Johnson</td>
                                        <td class="fw-bold">350</td>
                                        <td class="fw-bold">150</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="text-primary fw-bold">Overcoming Challenges</a></th>
                                        <td>Pastor Sarah Brown</td>
                                        <td class="fw-bold">300</td>
                                        <td class="fw-bold">130</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#" class="text-primary fw-bold">The Love of God</a></th>
                                        <td>Pastor David Wilson</td>
                                        <td class="fw-bold">280</td>
                                        <td class="fw-bold">120</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Sermons -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Events -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Events <span>| Today</span></h5>

                        <div class="activity">

                            <div class="activity-item d-flex">
                                <div class="activity-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Conducted Prayer Session <a href="#" class="fw-bold text-dark">in the Chapel</a>
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activity-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Organized Community Outreach Program
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activity-label">2 hrs</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content">
                                    Conducted Bible Study Session <a href="#" class="fw-bold text-dark">in the Fellowship Hall</a>
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activity-label">1 day</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content">
                                    Hosted Youth Group Meeting
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activity-label">2 days</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content">
                                    Organized Church Cleanup Day
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activity-label">4 weeks</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content">
                                    Conducted Special Seminar on <a href="#" class="fw-bold text-dark">Family Values</a>
                                </div>
                            </div><!-- End activity item-->

                        </div>

                    </div>
                </div><!-- End Recent Events -->


                <!-- Finance Overview -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Finance Overview <span>| This Month</span></h5>

                        <div id="financeChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var financeChart = echarts.init(document.querySelector("#financeChart")).setOption({
                                    legend: {
                                        data: ['Allocated Budget', 'Actual Spending']
                                    },
                                    radar: {
                                        // shape: 'circle',
                                        indicator: [{
                                            name: 'Donations',
                                            max: 6500
                                        },
                                            {
                                                name: 'Expenses',
                                                max: 16000
                                            },
                                            {
                                                name: 'Maintenance',
                                                max: 30000
                                            },
                                            {
                                                name: 'Outreach Programs',
                                                max: 38000
                                            },
                                            {
                                                name: 'Staff Salaries',
                                                max: 52000
                                            },
                                            {
                                                name: 'Facility Upkeep',
                                                max: 25000
                                            }
                                        ]
                                    },
                                    series: [{
                                        name: 'Budget vs spending',
                                        type: 'radar',
                                        data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                            {
                                                value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                name: 'Actual Spending'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Finance Overview -->


                <!-- Website Traffic -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                            {
                                                value: 735,
                                                name: 'Direct'
                                            },
                                            {
                                                value: 580,
                                                name: 'Email'
                                            },
                                            {
                                                value: 484,
                                                name: 'Union Ads'
                                            },
                                            {
                                                value: 300,
                                                name: 'Video Ads'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End Website Traffic -->

                <!-- Church Announcements -->
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Church Announcements <span>| Today</span></h5>

                        <div class="news">
                            <div class="post-item clearfix">
                                <img src="assets/img/news-1.jpg" alt="">
                                <h4><a href="#">New Community Outreach Program</a></h4>
                                <p>Join us as we launch our new community outreach program aimed at helping those in need...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-2.jpg" alt="">
                                <h4><a href="#">Upcoming Church Picnic</a></h4>
                                <p>Get ready for a fun-filled day at our annual church picnic! Bring your family and friends...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-3.jpg" alt="">
                                <h4><a href="#">Youth Group Retreat</a></h4>
                                <p>All youth members are invited to join us for a weekend retreat filled with spiritual growth...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-4.jpg" alt="">
                                <h4><a href="#">Volunteer Opportunities</a></h4>
                                <p>We're looking for volunteers to assist with various church activities. If you're interested...</p>
                            </div>

                            <div class="post-item clearfix">
                                <img src="assets/img/news-5.jpg" alt="">
                                <h4><a href="#">Bible Study Sessions</a></h4>
                                <p>Join us every Wednesday evening for insightful Bible study sessions led by Pastor John...</p>
                            </div>

                        </div><!-- End church announcements-->

                    </div>
                </div><!-- End Church Announcements -->


            </div><!-- End Right side columns -->

        </div>
    </section>
</main>
