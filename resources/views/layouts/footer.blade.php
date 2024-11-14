<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/font-size/font-size.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/utilities/padding/padding.css">
    <style>
        body, h4, p, span, li {
            color: black; /* Change this to your desired font color */
        }
        /* Internal CSS */
        body {
            background-color: transparent; /* Removed background color */
        }

        footer {
            background-color: white; /* Moved footer background color here */
        }

        .marquee-container {
            overflow: hidden;
            position: relative;
            padding: 10px 0;
        }

        .marquee {
            display: flex;
            width: calc(200%); /* Double the width to accommodate two sets of images */
            animation: marquee 20s linear infinite; /* Adjust speed here */
        }

        .marquee img {
            width: 150px; /* Set image width */
            height: auto; /* Maintain aspect ratio */
            margin-right: 10px; /* Space between images */
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%); /* Move left by half the total width */
            }
        }

        .marquee-container:hover .marquee {
            animation-play-state: paused; /* Pause on hover */
        }
    </style>
</head>
<body>

<!-- Footer 16 - -->
<footer class="py-4 py-md-5">
    <!-- Logo  -->
    <div>
        <div class="container border-bottom border-dark pb-4">
            <div class="row gy-3 align-items-sm-center">
                <div class="col-12 col-sm-6">
                    <div class="footer-logo-wrapper d-flex align-items-center"> <!-- Added d-flex for flexbox layout -->
                            <img src="{{asset('images/logos/rgo.png')}}" alt="" class="img-fluid" style="height: 100px; width: 100px;">
                        
                        <h4 class="mb-0 ms-3 fw-bold fs-7">Resource Generation Office JPLPC Malvar</h4> <!-- Adjusted margin -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- Widgets Link - Bootstrap Brain Component -->
    <section class="py-4 py-md-5 py-xl-7 py-xxl-10">
        <div class="container">
            <div class="row gy-4 gy-md-0">
                <div class="col-6 col-md-3">
                    <div class="link-wrapper">
                        <h4 class="mb-3 fw-bold fs-7">More Details</h4>
                        <ul class="m-0 list-unstyled">
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">(043) 778 2170</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">G. Leviste St., Poblacion, Malvar Batangas</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">bsujplpc.malvar@g.batstate-u.edu.ph</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">batstate-u.edu.ph/campuses/malvar</span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-6 col-md-3">
                    <div class="link-wrapper">
                        <h4 class="mb-3 fw-bold fs-7">Departments</h4>
                        <ul class="m-0 list-unstyled">
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">College of Arts and Sciences</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">College of Accountancy Business Entrepreneurship and International Hospitality Management</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">College of Engineering Technology</span></li>
                            <li class="mb-1"><span class="link-opacity-75 text-decoration-none fs-8">College of Informatics and Computing Sciences</span></li>
                            <li><span class="link-opacity-75 text-decoration-none fs-8">College of Teacher Education</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <h4 class="mb-3">Featured Departments</h4>
                    <div class="marquee-container">
                        <div class="marquee">
                            <img src="{{asset('images/logos/cas.png')}}" alt="Image 1">
                            <img src="{{asset('images/logos/cabeihm.png')}}" alt="Image 2">
                            <img src="{{asset('images/logos/cet.png')}}" alt="Image 3">
                            <img src="{{asset('images/logos/cics.png')}}" alt="Image 4">
                            <img src="{{asset('images/logos/cte.png')}}" alt="Image 1">
                            
                            <img src="{{asset('images/logos/cas.png')}}" alt="Image 1">
                            <img src="{{asset('images/logos/cabeihm.png')}}" alt="Image 2">
                            <img src="{{asset('images/logos/cet.png')}}" alt="Image 3">
                            <img src="{{asset('images/logos/cics.png')}}" alt="Image 4">
                            <img src="{{asset('images/logos/cte.png')}}" alt="Image 1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
        <div class="container border-top border-dark pt-4">
            <div class="row gy-3 align-items-lg-center">
                <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <div class="copyright-wrapper d-block mb-1 fs-7">
                        &copy; 2024. All Rights Reserved.
                    </div>
                    <div class="credit-wrapper d-block fs-8">
                        Built by <span class="link-opacity-75 text-decoration-none">Array Out Of Bounds</span>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="social-media-wrapper">
                        <ul class="m-0 list-unstyled d-flex justify-content-sm-end gap-2">
                            <li>
                                <a href="#!" class="btn btn-outline-light bsb-btn-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="btn btn-outline-light bsb-btn-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000" class="bi bi-github" viewBox="0 0 16 16">
                                        <path d="M8 0c4.418 0 8 3.582 8 8s-3.582 8-8 8-8-3.582-8-8 3.582-8 8-8zm-.165 2.428c-.689 0-1.38.266-1.886.769a2.487 2.487 0 0 0-.767 1.886c0 .639.225 1.257.634 1.74l-.264.134c-.7.347-1.249 1.012-1.427 1.77-.248 1.04.35 2.04 1.335 2.598.558.287 1.186.423 1.87.423.7 0 1.378-.182 1.973-.553l-.304-.76c-.481.28-1.046.422-1.646.422-.14 0-.276-.014-.41-.043-.134-.028-.264-.07-.39-.126-.23-.084-.434-.183-.615-.306-.25-.193-.35-.493-.275-.805.078-.314.308-.593.617-.758l1.732-.87c.293-.148.44-.457.366-.762-.079-.307-.373-.511-.693-.511H8.583c-.267 0-.526-.095-.731-.276A1.893 1.893 0 0 1 7.75 5a1.845 1.845 0 0 1 .276-1.001c.189-.266.482-.484.792-.611.474-.198 1.04-.215 1.537-.053.424.138.832.422 1.088.832.16.233.263.515.31.825.05.318.016.646-.095.935-.307.842-1.28 1.025-1.814 1.232l-1.445.722a1.36 1.36 0 0 0-.75 1.676c.173.452.632.644 1.095.515.462-.128.769-.571.769-1.023 0-.369-.285-.674-.642-.783.115-.48.398-.903.797-1.151.44-.281 1.059-.407 1.669-.42-.119.244-.187.519-.205.799-.022.299.023.594.136.855.177.473.532.688.848.688.19 0 .367-.07.511-.197a1.06 1.06 0 0 0 .384-.678c.038-.137.062-.283.076-.433.03-.27.043-.525.043-.779 0-1.383-.045-2.431-1.004-2.431H8.427z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="btn btn-outline-light bsb-btn-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.036 0 9.33-5 9.33-9.33 0-.142 0-.284-.006-.426A6.684 6.684 0 0 0 16 3.542a6.617 6.617 0 0 1-1.889.517A3.301 3.301 0 0 0 15.558 2a6.596 6.596 0 0 1-2.084.795A3.295 3.295 0 0 0 7.877 6.568a9.34 9.34 0 0 1-6.779-3.43A3.297 3.297 0 0 0 2.13 8.68a3.285 3.285 0 0 1-1.486-.41v.04a3.305 3.305 0 0 0 2.64 3.24A3.292 3.292 0 0 1 1 13.294a3.314 3.314 0 0 0 3.08 2.293A6.605 6.605 0 0 1 .98 15.12a9.32 9.32 0 0 0 5.046 1.48" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="btn btn-outline-light bsb-btn-circle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#000" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm4.75 5.5c.207 0 .25.006.25.25v1.5c0 .207-.043.25-.25.25h-1.5c-.207 0-.25-.043-.25-.25v-1.5c0-.207.043-.25.25-.25h1.5zM8 4a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm0 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const marquee = document.getElementById('marquee');
        const images = marquee.children;

        // Clone images and append them to create a seamless effect
        for (let i = 0; i < images.length; i++) {
            const clone = images[i].cloneNode(true);
            marquee.appendChild(clone);
        }

        // Set the animation duration based on the total width of the images
        const totalWidth = marquee.scrollWidth; // Total width of all images
        const containerWidth = document.querySelector('.marquee-container').offsetWidth; // Width of the visible area
        const animationDuration = (totalWidth / 150) * 2; // Calculate duration based on image width and speed factor
        marquee.style.animationDuration = `${animationDuration}s`; // Update animation duration
    });
</script>
</body>
</html>
