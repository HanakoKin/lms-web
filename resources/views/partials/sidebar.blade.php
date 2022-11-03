<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <div class="navbar-collapse" id="navbarNav">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link  {{ Request::is('*dashboard*') ? '' : 'collapsed' }} "
                    href="/dashboard/{{ auth()->user()->role }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link {{ Request::is('*subject*') ? '' : 'collapsed' }}" data-bs-target="#forms-nav"
                    href="/subject">
                    <i class="bi bi-journal-text"></i><span>Courses</span>
                </a>
            </li><!-- End Courses Nav -->

            <li class="nav-item">
                <a class="nav-link {{ Request::is('*class*') ? '' : 'collapsed' }}" data-bs-target="#class-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Class</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="class-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a class="nav-link {{ Request::is('*class/attendance/*') ? '' : 'collapsed' }}"
                            href="/class/attendance">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::is('*class/storage/*') ? '' : 'collapsed' }}"
                            href="/class/storage/{{ auth()->user()->name }}">
                            <i class="bi bi-circle"></i><span>Storage</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::is('*class/quiz/*') ? '' : 'collapsed' }}"
                            href="/class/quiz/{{ auth()->user()->name }}">
                            <i class="bi bi-circle"></i><span>Quiz</span>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link {{ Request::is('*class/discussion/*') ? '' : 'collapsed' }}"
                            href="/class/discussion/{{ auth()->user()->name }}">
                            <i class="bi bi-circle"></i><span>Discussion</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Class Nav -->

            {{-- <li class="nav-item">
                <a class="nav-link {{ Request::is('*courses*') ? '' : 'collapsed' }}" data-bs-target="#courses-nav"
                    href="/courses/{{ auth()->user()->name }}">
                    <i class="bi bi-menu-button-wide"></i><span>Courses</span>
                </a>
            </li><!-- End Courses Nav --> --}}



            <li class="nav-item">
                <a class="nav-link {{ Request::is('*calendar*') ? '' : 'collapsed' }}" data-bs-target="#calendar-nav"
                    href="/calendar/{{ auth()->user()->name }}">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Calendar</span>
                </a>

            </li><!-- End Calendar Nav -->

            <li class="nav-item">
                <a class="nav-link {{ Request::is('*chart*') ? '' : 'collapsed' }}" data-bs-target="#charts-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/chat') ? '' : 'collapsed' }}" data-bs-target="#chat-nav"
                    href="/chat">
                    <i class="bi bi-gem"></i><span>Chat</span>
                </a>
            </li><!-- End Chat Nav -->
        </ul>

    </div>
</aside><!-- End Sidebar-->
