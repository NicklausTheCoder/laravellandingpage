<header id="header" class="header d-flex align-items-center fixed-top">
    <div
      class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">iLanding</h1>
      </a>
      <style>
        .navmenu {
          background-color: #fff;
          overflow: hidden;
        }

        .navmenu ul {
          list-style-type: none;
          padding: 0;
          margin: 0;
          display: flex;
        }

        .navmenu ul li {
          position: relative;
        }

        .navmenu ul li a {
          display: block;
          color: #333;
          padding: 14px 20px;
          text-decoration: none;
        }

        .navmenu ul li a:hover,
        .navmenu ul li a.active {
          background-color: #ffff;
        }

        .dropdown-content,
        .deep-dropdown-content {
          display: none;
          position: absolute;
          background-color: #333;
          min-width: 160px;
          z-index: 1;
        }

        .dropdown:hover .dropdown-content,
        .dropdown .dropdown:hover .deep-dropdown-content {
          display: block;
        }

        .dropdown-content li,
        .deep-dropdown-content li {
          position: relative;
        }

        .dropdown-content li a,
        .deep-dropdown-content li a {
          padding: 12px 16px;
        }

        .mobile-nav-toggle {
          display: none;
          font-size: 24px;
          color: white;
          cursor: pointer;
          padding: 14px 20px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
          .navmenu ul {
            flex-direction: column;
            display: none;
            /* Hide the menu by default */
          }

          .navmenu ul.active {
            display: flex;
            /* Show when active */
          }

          .mobile-nav-toggle {
            display: block;
            /* Show toggle button */
          }
        }
      </style>
      <script>
        const toggleButton = document.querySelector('.mobile-nav-toggle');
        const navMenu = document.querySelector('.navmenu ul');

        toggleButton.addEventListener('click', () => {
          navMenu.classList.toggle('active');
        });
      </script>

<nav class="navmenu">
    <ul>
        @foreach ($navigations as $navigation)
            @if ($navigation->parent_id === null)
                <li>
                    <a href="{{ $navigation->url }}" class="{{ request()->is($navigation->url) ? 'active' : '' }}">
                        {{ $navigation->label }}
                    </a>
                    @if ($navigation->children->isNotEmpty())
                        <ul class="dropdown-content">
                            @foreach ($navigation->children as $child)
                                <li  class="dropdown">
                                    <a href="{{ $child->url }}">{{ $child->label }}</a>
                                    @if ($child->children->isNotEmpty())
                                        <ul class="deep-dropdown-content">
                                            @foreach ($child->children as $deepChild)
                                                <li>
                                                    <a href="{{ $deepChild->url }}">{{ $deepChild->label }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
    <i class="mobile-nav-toggle">&#9776;</i>
</nav>
      <a class="btn-getstarted" href="index.html#about">Get Started</a>

    </div>
  </header>
  <style>
    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
      background-color: #f9f9f9;
      /* Adjust as needed */
      height: 80vh;
    }

    .container {
      display: flex;
      max-width: 1200px;
      margin: 0 auto;
      width: 100%;
      flex-wrap: wrap;
    }

    .hero-content {
      flex: 1;
      padding-right: 20px;
    }

    .company-badge {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .icon-gear {
      /* Add your icon styles or use an icon font */
      margin-right: 10px;
    }

    h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .accent-text {
      color: #007bff;
      /* Accent color */
    }

    p {
      margin-bottom: 20px;
    }

    .hero-buttons {

      gap: 10px;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      text-decoration: none;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
    }

    .btn-link {
      background-color: transparent;
      color: #007bff;
    }

    .hero-image {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .hero-image img {
      max-width: 100%;
      height: auto;
      /* Maintain aspect ratio */
    }

    .customers-stuff {
      text-align: center;
      margin-top: 20px;
    }

    .customer-avatars {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 10px;
    }

    .hero .customers-stuff {
      position: absolute;
      bottom: 10px;
      right: 30px;
      background-color: var(--surface-color);
      padding: 1rem;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      max-width: 300px;
      animation: float-badge 3sease-in-out infinite;
      will-change: transform;
    }

    .avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin: 0 5px;

    }

    .more {
      background-color: #007bff;
      color: white;
      border-radius: 50%;
      padding: 5px 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
  <main class="main">
