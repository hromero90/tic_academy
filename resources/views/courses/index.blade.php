<x-app-layout>

    <!--Portada del sitio-->
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/student-849821_1920_1.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w1/2">
                
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Bienvenidos a <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">la sección de Cursos</span></h1>
                <p class="italic text-lg font-normal dark:text-white lg:text-xl">Explora todos los cursos que ofertamos y continua tu formación con los mejores. TIC Academy.</p>

                <!-- component -->
                <!-- This is an example component -->
                
                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('course-index')
</x-app-layout>

<!--Footer-->

  <!-- component -->
  <div class="flex items-end w-full">

    <footer class="w-full text-gray-700 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-15 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <img class="h-20 w-20" src="https://i.ibb.co/jTJvpHM/logo-completo-con-borde-blanco-013128.png" alt="logo-completo-con-borde-blanco-013128" border="0"></a>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Acerca de</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">TIC Academi</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Cursos Profesionales</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Soporte</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contáctanos</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Ayuda</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Noticias</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Cursos
                    </h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terminos &amp; Privacidad</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Precios</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contacto</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Escribenos</a>
                        </li>
                       
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">+505 7899-4612</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-300">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-gray-700 capitalize xl:text-center">© 2023 Todos los derechos reservados TIC Academy </p>
            </div>
        </div>
    </footer>
  
  </div>