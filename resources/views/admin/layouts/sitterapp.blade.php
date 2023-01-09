<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('frontend') }}/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('admin') }}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('admin') }}/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" /


  <!-- loader-->
	<link href="{{ asset('admin') }}/css/pace.min.css" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('admin') }}/css/dark-theme.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/light-theme.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/semi-dark.css" rel="stylesheet" />
  <link href="{{ asset('admin') }}/css/header-colors.css" rel="stylesheet" />


  <title> @yield('title') -  Baby Sitters </title>
<body>

      <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
      <header class="top-header">
        <nav class="navbar navbar-expand gap-3">
          <div class="mobile-toggle-icon fs-3">
              <i class="bi bi-list"></i>
            </div>
            <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                <input class="form-control" type="text" placeholder="Type here to search">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
            </form>
            <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item search-toggle-icon">
                  <a class="nav-link" href="#">
                    <div class="">
                      <i class="bi bi-search"></i>
                    </div>
                  </a>
              </li>


            <li class="nav-item dropdown dropdown-large">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                  <div class="notifications">
                    <i class="bi bi-person"></i>  {{ Auth::user()->name }}
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">

                  <div>
                      <a href="{{route('profile.show')}}" class="dropdown-item"><i class="bi bi-person-circle"></i> Profile</a>
                  </div>
                  <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        <button type="submit" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> <i class="bi bi-box-arrow-right"></i>  {{ __('Logout') }} 
                                       
                        </button>
                      @csrf
                  </form>
                    </div>
              </div>
                </div>
              </li>
              </ul>
              </div>
        </nav>
      </header>
       <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{ asset('admin') }}/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h4 class="logo-text">Baby Sitters</h4>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
          <ul class="metismenu" id="menu">
            <li>
              <a href="{{ route('user.dashboard') }}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-file-fill"></i>
                </div>
                <div class="menu-title">Products Manage</div>
              </a>
              <ul>
                <li> <a href="#"><i class="bi bi-circle"></i>Category</a> </li>
                <li> <a href="#"><i class="bi bi-circle"></i>Menu Type</a> </li>
                
              </ul>
            </li>
           



            <li>
                <a href="#">
                    <div class="parent-icon">
                        <i class="fadeIn animated bx bx-box"></i>
                    </div>
                     <div class="menu-title"> Feedback </div></a>
            </li>




            <li>

                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                           <div class="parent-icon"><i class="bi bi-patch-exclamation-fill"></i>
                           </div>
                           <div class="menu-title"> {{ __('Logout') }} </div>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

            </li>
          </ul>
          <!--end navigation-->
       </aside>
       <!--end sidebar -->

       <!--start content-->
        <main class="page-content">


            @yield('content')

        </main>
       <!--end page main-->




  </div>
  <!--end wrapper-->

  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('admin') }}/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('admin') }}/js/jquery.min.js"></script>
  <script src="{{ asset('admin') }}/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ asset('admin') }}/plugins/metismenu/js/metisMenu.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.0.8/sweetalert.min.js" integrity="sha512-fcAEThGLlyTKt+mmcRprds9PxumnuZukst32LxyzgU8ga0jKzlHCHawCo+eynUAgrHpuUe1QGSHe6X6cXYcZAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!--app-->
  <script src="{{ asset('admin') }}/js/app.js"></script>
  <script src="{{ asset('admin') }}/js/index.js"></script>

  @yield('js')


      <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
            }
        @endif

        $(document).ready(function() {
            $('.summernote').summernote(
                {
                    height: 200,
                    focus: true
                });
            });

        $(document).ready(function() {
            $('.datatables').DataTable(
                {
                   lengthMenu: [[100, 200, 300, -1], [100, 200, 300,'all']]
                }
                );
            }
        );
        $(document).ready(function() {
            $('.select2').select2();
        });
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });
    </script>

</body>
</html>
