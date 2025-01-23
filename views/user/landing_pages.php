<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Gym</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .slide::-webkit-scrollbar {
            display: none; /
            transition: opacity 1s ease-in-out; 
        }.active {
            display: block;
            opacity: 1;
        }.carousel-slide::-webkit-scrollbar{
            transition: transform 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans" id="home">
    <nav class="fixed top-0 w-full bg-white border-gray-200 dark:bg-gray-900 z-50 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Sangym</span>
            </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="index.php?modul=login&fitur=logout"  class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Log out</a>
                </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-row space-x-8">
                    <li><a href="index.php?modul=reservasi&fitur=dashboard" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Home</a></li>
                    <li><a href="index.php?modul=reservasi&fitur=list" class="py-2 text-gray-900 hover:text-blue-700 dark:text-white">Reservasi Saya</a></li>
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
    <p class="text-4xl ">Program Pelatihan Profesional untuk Semua Tingkatan</p>
    <div class="flex items-center justify-center mt-6">
        <div class="relative group">
            <button class="relative inline-block p-px font-semibold leading-6 text-white bg-gray-800 shadow-2xl cursor-pointer rounded-xl shadow-zinc-900 transition-transform duration-300 ease-in-out hover:scale-105 active:scale-95">
                <span class="absolute inset-0 rounded-xl bg-gradient-to-r from-teal-400 via-blue-500 to-purple-500 p-[2px] opacity-0 transition-opacity duration-500 group-hover:opacity-100"></span>
                    <span class="relative z-10 block px-6 py-3 rounded-xl bg-gray-950">
                        <span class="transition-all duration-500 group-hover:translate-x-1">Reservasi Sekarang</span>
                            <button class="submit" a-href=>
                                <div class="relative z-10 flex items-center space-x-2">
                                    <path clip-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </button>
                    </span>
                </button>
            </div>
        </div>
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
                <!-- <form action="index.php?modul=login&fitur=login" method="POST" class="space-y-3"> -->
                        <div class="flex overflow-x-auto space-x-4 p-4 scrollbar-hide">
                            <?php if (!empty($pakets)) {
                                foreach ($pakets as $barangs) { ?> 
                                    <div class="relative flex w-80 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                                        <div class="relative mx-4 -mt-6 h-40 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                                            <img src="gambar/<?php echo htmlspecialchars($barangs['gambar_paket']); ?>" alt="<?php echo htmlspecialchars($barangs['nama_paket']); ?>" class="w-full h-full object-cover">
                                        </div>
                                        <div class="p-6">
                                            <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                                <?php echo htmlspecialchars($barangs['nama_paket'], ENT_QUOTES, 'UTF-8'); ?>
                                            </h5>
                                            <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                                                Rp. <?php echo htmlspecialchars($barangs['harga_paket']); ?>
                                            </p>
                                            <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                                                Durasi: <?php echo htmlspecialchars($barangs['durasi']); ?> Hari
                                            </p>
                                        </div> 
                                        <div class="p-6 pt-0">
                                        <div class="p-6 pt-0">
                                            <form method="POST" action="index.php?modul=reservasi&fitur=save">
                                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']; ?>">
                                                <input type="hidden" name="paket_id" value="<?php echo htmlspecialchars($barangs['id_paket']); ?>">
                                                <input type="hidden" name="username" value="<?php echo htmlspecialchars($_SESSION['user']['username']); ?>">
                                                <input type="hidden" name="harga_paket" value="<?php echo htmlspecialchars($barangs['harga_paket']); ?>">
                                                <input type="hidden" name="status" value="0"> 
                                                <button type="submit" class="w-full bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#1e3a8a] before:to-[#3b82f6] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-[#fff]">
                                                    Reservasi
                                                </button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    <?php }
                                    } else { ?>
                                <div class="text-center py-4">Tidak ada data paket</div>
                        <?php } ?>
                    </div>
                <!-- </form>

                </form> -->

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
