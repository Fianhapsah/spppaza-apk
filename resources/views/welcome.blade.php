<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    SPP
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('assets/css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="https://spp.work/wp-content/uploads/2022/07/SPPLogoSVGREV.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">SPPPAZA</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
    @if(auth()->check())

    @if(auth()->user()->level == 'admin')

      <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"> SPP </h6>
          </li>

        <li class="nav-item">
          <a class="nav-link " href="/spp">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>  
            </div>
            <span class="nav-link-text ms-1">SPP</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/siswa">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-hat-3 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Siswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/kelas">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Kelas</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="/pembayaran">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pembayaran</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/petugas">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-user-run text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Petugas</span>
          </a>
        </li>
      @endif

    @if(auth()->user()->level == 'petugas')
      <li class="nav-item">
          <a class="nav-link " href="/pembayaran">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pembayaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pembayaran/history_pembayaran">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">History Pembayaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/pembayaran/history_pembayaran">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">laporan Pembayaran</span>
          </a>
        </li>

    @endif
    @if(auth()->user()->level == 'siswa')
        <li class="nav-item">
          <a class="nav-link " href="/pembayaran/history_pembayaran">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-archive-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">History Pembayaran</span>
          </a>
        </li>
    @endif
    @endif

          
        @if (!Auth::check())

        <li class="nav-item">
            <a class="nav-link " href="/login">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
              </div>
              <span class="nav-link-text ms-1">Sign In</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/register">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>
              </div>
              <span class="nav-link-text ms-1">Sign Up</span>
            </a>
          </li>

        @endif

    
          @if (Auth::user())

          <li class="nav-item">
          <a class="nav-link " href="/profile">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>

          <li class="btn d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg>
            <form method="POST" class="nav-link text-white font-weight-bold px-0" action="{{ route('logout') }}">
                      @csrf

                      <x-dropdown-link class="d-sm-inline d-none" :href="route('logout')"
                              onclick="event.preventDefault();
                                          this.closest('form').submit();">
                          {{ __('Log Out') }}
                      </x-dropdown-link>
            </form>
          </li>
          @endif

        </ul>
      </div>

      </ul>
    </div>

    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">SPPPAZA</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
        <!-- <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div> -->
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">

        <div class="card" style="width: 18rem;">
            <img src="data:image/png;base64,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" alt="...">
        </div>

        @if (Auth::check())

        <div class="container-fluid py-4">
            <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
        @endif


    @yield('content')
</div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
