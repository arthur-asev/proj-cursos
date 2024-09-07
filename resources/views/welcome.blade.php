<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('/dist/output.css')

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <title>Inicio</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

@include('modal_cadastro')
<header class="capitalize">
    <!-- Navbar -->
    <nav class="font-bold sticky top-0 z-10 flex w-full items-center justify-between bg-white py-2 text-neutral-600 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
        data-te-navbar-ref>
        <div class="flex items-center px-2">

            <a data-te-toggle="modal" data-te-target="#exampleModal" data-te-ripple-init data-te-ripple-color="light"
                class="flex px- transition duration-150 ease-in-out hover:text-gray-300 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary "
                href="#" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">
                <div class="px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                cadastro
            </a>
        </div>
        <div class="w-max px-2">
            <!-- Hamburger menu button -->
            <button
                class="border-0 bg-transparent px-2 py-3 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContentE"
                aria-controls="navbarSupportedContentE" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger menu icon -->
                <span class="[&>svg]:w-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </span>
            </button>

            <!-- Navigation links -->
            <div class=" flex items-center content-between" id="navbarSupportedContentE" data-te-collapse-item>
                <ul class="mr-auto flex flex-col md:flex-row" dat23a-te-navbar-nav-ref>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-gray-300 focus:text-neutral-700 dark:hover:text-gray-300 dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="/home" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">home</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-gray-300 focus:text-neutral-700 dark:hover:text-gray-300 dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">features</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-gray-300 focus:text-neutral-700 dark:hover:text-gray-300 dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary"
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">pricing</a>
                    </li>
                    <li data-te-nav-item-ref>
                        <a class="block transition duration-150 ease-in-out hover:text-gray-300 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white md:p-2 [&.active]:border-primary [&.active]:text-primary "
                            href="#!" data-te-nav-link-ref data-te-ripple-init
                            data-te-ripple-color="light">sobre</a>
                    </li>


                </ul>



            </div>

        </div>
    </nav>

    <!-- Hero section with background image, heading, subheading and button -->
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center"
        style="
        background-image: url('https://tecdn.b-cdn.net/img/new/slides/041.webp');
        height: 400px;
      ">
        <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="flex h-full items-center justify-center">
                <div class="text-white">
                    <h2 class="mb-4 text-4xl font-semibold">Seja Bem Vindo ao meu Portifolio!</h2>

                    <button type="button"
                        class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                        data-te-ripple-init data-te-ripple-color="light">
                        Call to action
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>



<body class="">
    <div class="container mx-auto mt-11">
        <div id="carouselExampleCrossfade" class="relative" data-te-carousel-init data-te-carousel-slide>
            <!--Carousel indicators-->
            <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                data-te-carousel-indicators>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="0"
                    data-te-carousel-active
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="1"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#carouselExampleCrossfade" data-te-slide-to="2"
                    class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>
            </div>

            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full"
                        alt="Wild Landscape" />
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full" alt="Camera" />
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-fade data-te-carousel-item>
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full"
                        alt="Exotic Fruits" />
                </div>
            </div>

            <!--Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleCrossfade" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
            </button>
        </div>

        <div class="text-lg text-center font-bold">
            <h3 class="mb-6 mt-6 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
                Testimonials
            </h3>
            <p class="mb-6 pb-2 md:mb-12 md:pb-0 text-red-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error
                amet numquam iure provident voluptate esse quasi, veritatis totam
                voluptas nostrum quisquam eum porro a pariatur veniam.
            </p>
        </div>

        <select data-te-select-init data-te-select-filter="true">
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
            <option value="6">Six</option>
            <option value="7">Seven</option>
            <option value="8">Eight</option>
            <option value="9">Nine</option>
            <option value="10">Ten</option>
        </select>


        <div>
            <!-- Container for demo purpose -->
            <div class="container my-24 px-6 mx-auto">

                <!-- Section: Design Block -->
                <section class="mb-32 text-gray-800 text-center">
                    <div class="px-6 py-12 md:px-12">
                        <div class="container mx-auto xl:px-32">
                            <div class="grid lg:grid-cols-2 flex items-center">
                                <div class="md:mt-12 lg:mt-0 mb-12 lg:mb-0">
                                    <div class="block rounded-lg shadow-lg px-6 py-12 md:px-12 lg:-mr-14"
                                        style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
                                        <h2 class="text-3xl font-bold mb-12">
                                            Trusted by the best companies <br />
                                            <span class="">around the world</span>
                                        </h2>
                                        <div class="grid md:grid-cols-2 gap-x-6">
                                            <div class="mb-12">
                                                <img src="https://mdbootstrap.com/img/Photos/new-templates/landing-page/logo6-1.png"
                                                    class="grayscale px-6" alt="Nasa - logo" />
                                            </div>

                                            <div class="mb-12">
                                                <img src="https://mdbootstrap.com/img/Photos/new-templates/landing-page/logo5-1.png"
                                                    class="grayscale px-6" alt="Amazon - logo" />
                                            </div>

                                            <div class="mb-12 md:mb-0">
                                                <img src="https://mdbootstrap.com/img/Photos/new-templates/landing-page/logo3-1.png"
                                                    class="grayscale px-6" alt="Nike - logo" />
                                            </div>

                                            <div class="">
                                                <img src="https://mdbootstrap.com/img/Photos/new-templates/landing-page/logo4-1.png"
                                                    class="grayscale px-6" alt="Ikea - logo" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:mb-12 lg:mb-0">
                                    <img src="https://mdbootstrap.com/img/new/textures/full/166.jpg"
                                        class="w-full rounded-lg shadow-lg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
                <div>
                    <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
                        <div class="-m-1 flex flex-wrap md:-m-2">
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" />
                                </div>
                            </div>
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp" />
                                </div>
                            </div>
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp" />
                                </div>
                            </div>
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp" />
                                </div>
                            </div>
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(76).webp" />
                                </div>
                            </div>
                            <div class="flex w-1/3 flex-wrap">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery"
                                        class="block h-full w-full rounded-lg object-cover object-center"
                                        src="https://tecdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp" />
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <!-- Container for demo purpose -->
        </div>


    </div>

</body>

@include('footer')


<script>
    function criarcadastro() {
        // axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
        nome = document.getElementById("nome").value;
        email = document.getElementById("email").value;
        cidade = document.getElementById("cidade").value;
        senha = document.getElementById("senha").value;
        telefone = document.getElementById("telefone").value;

        axios.post("{{route('cadastro.store')}}", {
                nome: nome,
                email: email,
                cidade: cidade,
                senha: senha,
                telefone: telefone,
            })
            .then(function(response) {
                console.log(response);
            })
            .catch(function(error) {
                console.error(error);
            });


    }
</script>
@vite('/node_modules/axios/dist/axios.js')


</html>
