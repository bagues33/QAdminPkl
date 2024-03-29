<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Sistem Informasi Project Management</title>
      <link href="{{ asset('storage/uploads/picsi.jpeg') }}" rel="shortcut icon" type="image/x-icon">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .header-3-3 .modal-backdrop.show {
        background-color: #000;
        opacity: 0.6;
      }

      .header-3-3 .modal-item.modal {
        top: 2rem;
      }

      .header-3-3 .navbar {
        padding: 2rem 2rem;
      }

      .header-3-3 .navbar-light .navbar-nav .nav-link {
        font: 300 0.875rem/1.5rem Poppins, sans-serif;
        color: #8B9CAF;
        padding: 0rem 1.25rem 0rem 0rem;
        margin-right: 0;
        margin-left: 0;
      }

      .header-3-3 .navbar-light .navbar-nav .nav-link:hover {
        font: 500 0.875rem/1.5rem Poppins, sans-serif;
        color: #243142;
      }

      .header-3-3 .navbar-light .navbar-nav .active {
        position: relative;
        width: fit-content;
      }

      .header-3-3 .navbar-light .navbar-nav .active>.nav-link,
      .header-3-3 .navbar-light .navbar-nav .nav-link.active,
      .header-3-3 .navbar-light .navbar-nav .nav-link.show,
      .header-3-3 .navbar-light .navbar-nav .show>.nav-link {
        font-weight: 500;
      }

      .header-3-3 .navbar-light .navbar-toggler-icon {
        background-image: urlurl("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      }

      .header-3-3 .btn:focus,
      .header-3-3 .btn:active {
        outline: none !important;
      }

      .header-3-3 .btn-fill {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        border-radius: 999px;
        padding: 0.75rem 1.5rem;
        transition: 0.3s;
      }

      .header-3-3 .btn-fill:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .btn-no-fill {
        font: 500 0.875rem/1.25rem Poppins, sans-serif;
        color: #8B9CAF;
        padding: 0.75rem 2rem;
      }

      .header-3-3 .btn-no-fill:hover {
        color: #243142;
      }

      .header-3-3 .modal-item .modal-dialog .modal-content {
        border-radius: 8px;
      }

      .header-3-3 .responsive li {
        padding: 1rem;
      }

      .header-3-3 .hr {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      .header-3-3 .hero {
        padding: 4rem 2rem;
      }

      .header-3-3 .left-column {
        margin-bottom: 0.75rem;
        width: 100%;
      }

      .header-3-3 .title-text-big {
        font: 600 2.25rem / normal Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #243142;
      }

      .header-3-3 .text-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #8B9CAF;
        margin-bottom: 5rem;
      }

      .header-3-3 .btn-get {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2rem;
        border-radius: 999px;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        transition: 0.3s;
      }

      .header-3-3 .btn-get:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 1.5rem;
        border-radius: 999px;
        background-color: transparent;
        border: 1px solid #A6B1BE;
        color: #A6B1BE;
        transition: 0.3s;
      }

      .header-3-3 .btn-outline:hover {
        border: 1px solid #6DA4F9;
        color: #6DA4F9;
      }

      .header-3-3 .btn-outline:hover div path {
        fill: #6DA4F9;
      }

      .header-3-3 .btn-outline:hover div rect {
        stroke: #6DA4F9;
      }

      .header-3-3 .right-column {
        width: 100%;
      }

      .header-3-3 .hero-right {
        right: 2rem;
        bottom: 0;
      }

      .header-3-3 .card-outer {
        padding-left: 0;
        z-index: 1;
      }

      .header-3-3 .card {
        transition: 0.4s;
        top: 0px;
        left: 0px;
        background-color: #FFFFFF;
        padding: 1.25rem;
        border-radius: 0.75rem;
        width: 100%;
        margin-top: 2.5rem;
        box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
      }

      .header-3-3 .card:hover {
        top: -3px;
        left: -3px;
        transition: 0.4s;
        box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
      }

      .header-3-3 .card-name {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.25rem;
      }

      .header-3-3 .card-job {
        font: 300 0.75rem/1rem Poppins, sans-serif;
        color: #aaa6a6;
        margin-bottom: 0;
      }

      .header-3-3 .card-price-left {
        font: 500 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.125rem;
        color: #1B8171;
      }

      .header-3-3 .card-caption {
        font: 300 0.75rem/1rem Poppins, sans-serif;
        color: #aaa6a6;
        margin-bottom: 0;
      }

      .header-3-3 .card-price-right {
        font: 500 1rem/1.5rem Poppins, sans-serif;
        margin-bottom: 0.125rem;
        color: #FF7468;
      }

      .header-3-3 .btn-hire {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 0.75rem 4rem;
        border-radius: 0.75rem;
        margin-bottom: 0.125rem;
        border: 1px solid #4E91F9;
        background-color: #4E91F9;
        transition: 0.3s;
      }

      .header-3-3 .btn-hire:hover {
        background-color: #6DA4F9;
        border: 1px solid #6DA4F9;
      }

      .header-3-3 .form {
        border-radius: 999px;
        background-color: #eef4fd;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0rem 1rem;
        padding-right: 0.5rem;
        outline: none;
      }

      .header-3-3 .form div input[type="text"] {
        background-color: #eef4fd;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0rem 0.5rem;
        outline: none;
        width: 100%;
      }

      .header-3-3 .center-search {
        bottom: 0.5rem;
      }

      @media (min-width: 576px) {
        .header-3-3 .modal-item .modal-dialog {
          max-width: 95%;
          border-radius: 12px;
        }

        .header-3-3 .navbar {
          padding: 2rem;
        }

        .header-3-3 .title-text-big {
          font-size: 3rem;
          line-height: 1.2;
        }
      }

      @media (min-width: 768px) {
        .header-3-3 .navbar {
          padding: 2rem 4rem;
        }

        .header-3-3 .hr {
          padding-left: 4rem;
          padding-right: 4rem;
        }

        .header-3-3 .hero {
          padding: 4rem;
        }

        .header-3-3 .left-column {
          margin-bottom: 3rem;
        }

        .header-3-3 .hero-right {
          right: 4rem;
        }

        .header-3-3 .card {
          margin-left: auto;
          margin-top: 0;
        }
      }

      @media (min-width: 992px) {

        .header-3-3 .navbar-light .navbar-nav .active:before {
          content: "";
          position: absolute;
          margin-left: auto;
          margin-right: auto;
          left: 0;
          right: 0;
          text-align: center;
          bottom: 0;
          height: 0px;
          width: 80%;
          /* or 100px */
          border-bottom: 2px solid #4E91F9;
        }

        .header-3-3 .navbar {
          padding: 2rem 6rem;
        }

        .header-3-3 .navbar-light .navbar-nav .nav-link {
          padding: 0;
          margin-right: 1rem;
          margin-left: 1rem;
        }

        .header-3-3 .navbar-light .navbar-nav .active:before {
          width: 40%;
        }

        .header-3-3 .hr {
          padding-left: 6rem;
          padding-right: 6rem;
        }

        .header-3-3 .hero {
          padding: 4rem 6rem 5rem;
        }

        .header-3-3 .left-column {
          width: 50%;
          margin-bottom: 0;
        }

        .header-3-3 .title-text-big {
          font-size: 3.75rem;
          line-height: 1.25;
        }

        .header-3-3 .right-column {
          width: 50%;
        }

        .header-3-3 .hero-right {
          right: 6rem;
        }

        .header-3-3 .card-outer {
          padding-left: 4rem;
        }

        .header-3-3 .center-search {
          left: 48%;
          top: 50%;
          bottom: auto;
          transform: translate(-48%, -50%);
        }

        .header-3-3 .form {
          width: 340px;
        }
      }

      @media (max-width: 1023px) {
        .header-3-3 .form div input[type="text"] {
          width: 100%;
        }
      }
    </style>
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="#">
          <img style="margin-right: 0.75rem"
            src="{{ asset('dist/img/logo-picsi.png') }}" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top: 0.5rem"
                    src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-6.png"
                    alt="" />
                </a>
                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                  aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active position-relative">
                    <a class="nav-link main" style="color: #243142;" href="#">Home</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Feature</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item position-relative">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                      aria-controls="collapse">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                          fill="#8B9CAF" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                          fill="#8B9CAF" />
                      </svg>
                    </a>
                    <form method class="collapse position-absolute form center-search border-0" id="collapse">
                      <div class="d-flex">
                        <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                        <button class="btn" type="button">
                          <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse"
                            role="button" aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"></path>
                          </svg>
                        </button>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                <a href="{{ route('login') }}"><button class="btn btn-default btn-no-fill">Sign In</button></a>
                <a href="{{ route('register') }}"><button class="btn btn-fill text-white">Register</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item active position-relative">
              <a class="nav-link main=" style="color: #243142;" href="#">Home</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Feature</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item position-relative">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item my-auto">
              <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                aria-controls="collapse">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                    fill="#8B9CAF" />
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                    fill="#8B9CAF" />
                </svg>
              </a>
              <form class="collapse position-absolute form center-search border-0" id="collapse">
                <div class="d-flex">
                  <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                  <button class="btn" type="button">
                    <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse" role="button"
                      aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56" viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                      </path>
                    </svg>
                  </button>
                </div>
              </form>
            </li>
          </ul>
          <a href="{{ route('login') }}"><button class="btn btn-default btn-no-fill">Sign In</button></a>
            <a href="{{ route('register') }}"><button class="btn btn-fill text-white">Register</button></a>
        </div>
      </nav>
      <div class="hr">
        <hr style="
							border-color: #F4F4F4;
							background-color: #F4F4F4;
							opacity: 1;
							margin: 0 !important;
						" />
      </div>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div
            class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              PT.<span style="color: #4E91F9"> PILAR CIPTA</span><br class="d-lg-block d-none" />
              SOLUSI<br class="d-lg-block d-none" />
              INTEGRATIKA
            </h1>
            <p class="text-caption">
              The PILAR CIPTA SOLUSI INTEGRATIKA team specializes in Information Technology and Telecommunications with an emphasis on professionalism and experience in the field.
            </p>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
              <button class="btn btn-get text-white d-inline-flex">
                Get Started
              </button>
              <button class="btn btn-outline">
                <div class="d-flex align-items-center">
                  <svg class="me-2" width="26" height="26" viewBox="0 0 26 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15.9295 13L11.6668 10.158V15.842L15.9295 13ZM17.9175 13.2773L10.8515 17.988C10.8013 18.0214 10.743 18.0406 10.6828 18.0434C10.6225 18.0463 10.5627 18.0328 10.5095 18.0044C10.4563 17.9759 10.4119 17.9336 10.3809 17.8818C10.3499 17.8301 10.3335 17.771 10.3335 17.7107V8.28933C10.3335 8.22904 10.3499 8.16988 10.3809 8.11816C10.4119 8.06644 10.4563 8.0241 10.5095 7.99564C10.5627 7.96718 10.6225 7.95367 10.6828 7.95655C10.743 7.95943 10.8013 7.9786 10.8515 8.012L17.9175 12.7227C17.9631 12.7531 18.0006 12.7943 18.0265 12.8427C18.0524 12.8911 18.0659 12.9451 18.0659 13C18.0659 13.0549 18.0524 13.1089 18.0265 13.1573C18.0006 13.2057 17.9631 13.2469 17.9175 13.2773Z"
                      fill="#A6B1BE" />
                    <rect x="0.5" y="0.5" width="25" height="25" rx="12.5" stroke="#A6B1BE" />
                  </svg>
                  Watch the video
                </div>
              </button>
            </div>
          </div>

          <!-- Right Column -->
          <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
            <img class="position-absolute d-lg-block d-none hero-right"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
              alt="" />
            <div class="d-flex align-items-end card-outer">
              <div class="mx-auto d-flex flex-wrap align-items-center">
                <div class="card border-0 position-relative d-flex flex-column">
                  <div class="d-flex align-items-center" style="margin-bottom: 1.25rem">
                    <div>
                      <img style="margin-right: 1rem"
                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-3.png"
                        alt="" />
                    </div>
                    <div class="text-start">
                      <p class="card-name">Tofan Bagus A</p>
                      <p class="card-job">Web Developer</p>
                    </div>
                  </div>
                  <div class="row text-start" style="margin-bottom: 1.25rem">
                    <div class="col-6">
                      <p class="card-price-left">64,100</p>
                      <p class="card-caption">Followers</p>
                    </div>
                    <div class="col-6 ps-0">
                      <p class="card-price-right">106</p>
                      <p class="card-caption">Reviews</p>
                    </div>
                  </div>
                  <a target="_blank" href="https://api.whatsapp.com/send?phone=6281225027507&text=Halo%20Tofan%20Bagus%20Apriyanto%20">
                    <button class="btn btn-hire text-white">
                      <div class="test d-none">show</div>
                      Hire Me
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><section class="famouly-brands">

    <style scoped>
      body .famouly-brands {
        background: radial-gradient(100% 100% at 50% 0%, #F9FAFE 0%, #FAFAFD 100%);
        padding-top: 90px;
        padding-bottom: 90px;
      }

      body .famouly-brands .brand img {
        width: 200px !important;
      }
    </style>
    <div class="container">
      <div class="row brand">
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Slack-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Microsoft-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Google-Logo.png"
            alt="" class="img-fluid">
        </div>
        <div class="col-md-3 col-6 text-center my-md-auto mt-5 mt-md-0">
          <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/Airbnb-Logo.png"
            alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section><section class="content text-center">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");

      * {
        font-family: 'Poppins', sans-serif !important;
      }

      body .content {
        background: #FFFFFF;
      }

      body .content .content {
        padding-top: 90px;
        padding-bottom: 90px;
      }

      body .content .content .tagline {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 18px;
        line-height: 27px;
        /* identical to box height */
        text-align: center;
        color: #0D3ADB;
      }

      body .content .content .headline {
        font-family: Poppins;
        font-style: normal;
        font-weight: bold;
        font-size: 45px;
        line-height: 67px;
        text-align: center;
        color: #111F37;
      }

      body .content .content .benefits {
        margin-top: 50px;
      }

      body .content .content .benefits .rectangle {
        max-width: 302px;
        /* max-height: 334px; */
        border: 1px solid #9BA8BE;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 26px;
      }

      body .content .content .benefits .rectangle img {
        margin-top: 50px;
      }

      body .content .content .benefits .rectangle .headline-benefit {
        margin-top: 40px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 27px;
        /* identical to box height */
        text-align: center;
        color: #111F37;
      }

      body .content .content .benefits .rectangle .subheadline-benefit {
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 28px;
        /* or 175% */
        text-align: center;
        color: #627492;
        margin-bottom: 40px;
      }

      body .content .content .button-header {
        margin-top: 40px;
      }

      body .content .content .button-header .btn-started {
        width: 150px;
        height: 50px;
        background: #0DDB93 !important;
        border-radius: 8px;
        font-weight: 600;
        font-size: 16px;
        color: #001D01;
      }

      body .content .content .button-header .btn-story {
        width: 150px;
        height: 50px;
        border: 1px solid #9BA8BE;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 8px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */
        text-align: center;
        color: #627492;
      }

      /*# sourceMappingURL=main.css.map */
    </style>
    <div class="container">
      <div class="row content">
        <div class="col-12 px-md-0 my-auto">
          <div class="tagline">
            OUR FORMULA
          </div>
          <div class="headline mt-3">
            INFORMATION TECHNOLOGY AND  <br class="d-none d-md-block">
            COMMUNICATION SOLUTION
          </div>
          <div class="row benefits">
            <div class="col-md-4 mt-md-0">
              <div class="rectangle mx-auto px-1">
                <img
                  src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-1.png"
                  alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  DEVELOPMENT SYSTEM
                </div>
                <div class="subheadline-benefit mt-2">
                  PT Pilar Cipta Solusi Integratika Assists clients in providing application solutions, development and integration with other systems according to client needs.
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5 mt-md-0">
              <div class="rectangle mx-auto px-1">
                <img
                  src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-2.png"
                  alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  ENTERPRISE PORTAL
                </div>
                <div class="subheadline-benefit mt-2">
                  It is an application based on the internet and is a medium of communication either for the benefit of the company/government or to provide information to the public.
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-5 mt-md-0">
              <div class="rectangle mx-auto px-1">
                <img
                  src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-Job/benefit-job-3.png"
                  alt="benefits-1" class="img-fluid">
                <div class="headline-benefit">
                  MULTIMEDIA INTERAKTIF
                </div>
                <div class="subheadline-benefit mt-2">
                  Multimedia Presentation is a service that designs and builds a Company Profile, Catalog Product or Company Annual Report.
                </div>
              </div>
            </div>
          </div>
          <div class="button-header">
            <button class="btn btn-started">Get Started</button>
            <button class="btn btn-story ml-3">Read Story</button>
          </div>
        </div>
      </div>
    </div>
  </section><footer class="page-footer font-small blue">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap");

        * {
            font-family: 'Inter', sans-serif !important;
        }

        body .font-red-hat-display {
            font-family: 'Red Hat Display', sans-serif !important;
        }

        body footer {
            background: #313E60;
            padding-top: 50px;
            padding-bottom: 70px;
        }

        body footer .logo {
            font-family: 'Red Hat Display', sans-serif;
            font-weight: 700;
            font-size: 26px;
            line-height: 38px;
            color: #FAFAFD;
        }

        body footer .social-media {
            margin-top: 55px;
        }

        body footer .copyright {
            font-family: 'Red Hat Display', sans-serif !important;
            font-weight: 400;
            font-size: 16px;
            line-height: 135%;
            color: #FAFAFD;
            margin-top: 20px;
        }

        body footer .nav-footer p {
            font-weight: 700 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer .nav-footer a {
            font-weight: 400 !important;
            font-family: 'Red Hat Display', sans-serif !important;
            font-size: 20px;
            line-height: 135%;
            color: #FAFAFD;
        }

        body footer li {
            margin-bottom: 16px;
        }
    </style>
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3 address">
                <div class="logo font-red-hat-display">
                    PT. PICSI
                </div>
                <div class="social-media">
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_linkedin.svg"
                            alt="linkedin" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_facebook.svg"
                            alt="facebook" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_twitter.svg"
                            alt="twitter" class="img-fluid mr-4">
                    </a>
                    <a href="#">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/bi_instagram.svg"
                            alt="twitch" class="img-fluid mr-4">
                    </a>
                </div>
                <div class="copyright font-red-hat-display">
                    2023 All rights reserved.
                </div>
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="row col-md-6 nav-footer">
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Features
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Payments</a>
                        </li>
                        <li>
                            <a href="#!">Collections</a>
                        </li>
                        <li>
                            <a href="#!">Conversions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Resources
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Blog</a>
                        </li>
                        <li>
                            <a href="#!">FAQ</a>
                        </li>
                        <li>
                            <a href="#!">Partnerships</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-3">
                    <p>
                        Our Company
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">About Us</a>
                        </li>
                        <li>
                            <a href="#!">Careers</a>
                        </li>
                        <li>
                            <a href="#!">News & Media</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>