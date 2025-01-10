<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Gym</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .slide {
            display: none; /
            transition: opacity 1s ease-in-out; 
        }
        .active {
            display: block;
            opacity: 1;
        }
        .carousel-slide {
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans" id="home">
    <nav class="fixed top-0 w-full bg-white border-gray-200 dark:bg-gray-900 z-50 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sangym</span>
            </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="index.php?modul=login&fitur=logout"  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log out</a>
                </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-row space-x-8">
                    <li><a href="#home" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Home</a></li>
                    <li><a href="#" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Reservasi Saya</a></li>
                    <li><a href="#about" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">About</a></li>
                    <li><a href="#footer" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- crausel -->
    <div class="relative w-full h-screen overflow-hidden">
    <!-- Teks di depan slide -->
    <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-white">
        <h1 class="text-5xl font-extrabold mb-2 drop-shadow-md">Transformasi Tubuh, Transformasi Hidup</h1>
        <p class="text-4xl font-bold">Program Pelatihan Profesional untuk Semua Tingkatan</p>
    </div>

    <!-- Carousel Slides -->
    <div id="carousel" class="absolute inset-0 flex carousel-slide">
        <!-- Slide 1 -->
        <div class="w-full flex-shrink-0 bg-cover bg-center" style="background-image: url('gambar/jim6.jpg');"></div>
        <!-- Slide 2 -->
        <div class="w-full flex-shrink-0 bg-cover bg-center" style="background-image: url('gambar/jim3.jpg');"></div>
        <!-- Slide 3 -->
        <div class="w-full flex-shrink-0 bg-cover bg-center" style="background-image: url('gambar/jim4.jpg');"></div>
    </div>
</div>
    <!-- Navigation Buttons -->
    <button id="prev" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white bg-opacity-50 text-black p-2 rounded-full">
        &larr;
    </button>
    <button id="next" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white bg-opacity-50 text-black p-2 rounded-full">
        &rarr;
    </button>
    </div>
    <section class="py-12 bg-gradient-to-r from-blue-50 to-blue-100" id="about">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-6 text-gray-900">Mengapa Menjaga Kesehatan Itu Penting?</h2>
            <p class="text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Menjaga kesehatan tubuh bukan hanya tentang penampilan fisik, tetapi juga investasi untuk masa depan. Dengan berolahraga teratur, Anda dapat meningkatkan kualitas tidur, mengurangi risiko penyakit kronis, meningkatkan energi, dan memperbaiki suasana hati. Di gym kami, kami menyediakan fasilitas dan dukungan yang Anda butuhkan untuk mencapai tujuan kebugaran Anda.
            </p>
        </div>
    </section>
    <!-- Card Section -->
    <section class="py-12 bg-gray-100" id="paket">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-center" >Paket Pilihan</h2>
            <div class="flex space-x-4 overflow-x-auto">
                <!-- Card Container -->
                <div class="flex overflow-x-auto space-x-4 p-4 scrollbar-hide">
                    <!-- Card 1 -->
                    <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow">
                        <img class="w-full h-40 object-cover rounded-t-lg" src="gambar/jim4.jpg" alt="Paket Harian" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold mb-2">Paket Harian</h5>
                            <p class="mb-3 font-normal text-gray-700">Latihan sehari penuh dengan fasilitas lengkap.</p>
                            <button type="button" class=" w-full text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Reservasi</button>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow">
                        <img class="w-full h-40 object-cover rounded-t-lg" src="gambar/jim5.jpg" alt="Paket Mingguan" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold mb-2">Paket Mingguan</h5>
                            <p class="mb-3 font-normal text-gray-700">Paket mingguan yang cocok untuk pemula.</p>
                            <button type="button" class=" w-full text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Reservasi</button>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow">
                        <img class="w-full h-40 object-cover rounded-t-lg" src="gambar/jim3.jpg" alt="Paket Bulanan" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold mb-2">Paket Bulanan</h5>
                            <p class="mb-3 font-normal text-gray-700">Dapatkan harga lebih murah dengan paket bulanan.</p>
                            <button type="button" class=" w-full text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a href="form_reservasi.php">Reservasi</a></button>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="flex-none w-64 bg-white border border-gray-200 rounded-lg shadow">
                        <img class="w-full h-40 object-cover rounded-t-lg" src="gambar/jim1.jpg" alt="Paket Bulanan" />
                        <div class="p-5">
                            <h5 class="text-2xl font-bold mb-2">Paket Tahunan</h5>
                            <p class="mb-3 font-normal text-gray-700">Paket khsusus yang bisa Sharing dengan orang lain.</p>
                            <button type="button" class=" w-full text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Reservasi</button>
                        </div>
                    </div>
                    
                </div>
                <style>
                /* Hide default scrollbar */
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }
                .scrollbar-hide {
                    -ms-overflow-style: none;  /* IE and Edge */
                    scrollbar-width: none;  /* Firefox */
                }
                </style>
            </div>
        </div>
    </section>

    <!-- Footer -->
<footer class="bg-white dark:bg-gray-900" id="footer">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="https://flowbite.com/" class="flex items-center">
                  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sangym</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                      </li>
                      <li>
                          <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                  <ul class="text-gray-500 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                    </svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                        <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                    </svg>
                  <span class="sr-only">Discord community</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                    <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">GitHub account</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                  <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                </svg>
                  <span class="sr-only">Dribbble account</span>
              </a>
          </div>
      </div>
    </div>
</footer>
<script>
  const carousel = document.getElementById('carousel');
  const slides = carousel.children;
  const totalSlides = slides.length;
  let currentSlide = 0;

  function showSlide(index) {
    const offset = -index * 100;
    carousel.style.transform = `translateX(${offset}%)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    showSlide(currentSlide);
  }

  document.getElementById('next').addEventListener('click', nextSlide);
  document.getElementById('prev').addEventListener('click', prevSlide);

  setInterval(nextSlide, 5000); // Change slide every 5 seconds
</script>
</body>
</html>
