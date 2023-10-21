<x-app-layout>

    <!--Portada del sitio-->
    <section class="bg-center" style="background-image: url({{asset('img/portada.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w1/2">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Bienvenidos a <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">TIC Academy</span></h1>
                <p class="italic text-lg font-normal dark:text-white lg:text-xl">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>           

            </div>
        </div>
    </section>


    <!--Contenido de la pagina-->
    <!-- component -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://i.ibb.co/Nrqy7r9/Mocukp-Taza-de-Cafe.jpg" alt="blog">
            
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TIC Academy</h2>
              <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Productos</h1>
              <p class="leading-relaxed mb-3">Lo que nos distingue es nuestro enfoque en la calidad, la innovación y la satisfacción del cliente. Nuestros productos son cuidadosamente seleccionados y fabricados con los más altos estándares.</p>
              <div class="flex items-center flex-wrap ">
                <a href="{{route('products.index')}}" class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Ver más</a>
               
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
              <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://i.ibb.co/ZcX3n9b/foto2.jpg" alt="blog">
              
              <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TIC Academy</h2>
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Tutoría</h1>
                <p class="leading-relaxed mb-3">Tutorias personalizadas a los docentes que presenten dificultades en el desarrollo del curso, brindando las facilidades necesarias para que el docente cumpla con sus objetivos de aprendizaje.</p>
                <div class="flex items-center flex-wrap ">
                  <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Ver más</button>
                </div>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://i.ibb.co/7pbh9jy/foto3.jpg" alt="blog">
              <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TIC Academy</h2>
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Contáctanos</h1>
                <p class="leading-relaxed mb-3">Mediante un formulario ponte en contacto con nosotros para resolver cualquier duda que tengas sobre la oferta de los diferentes cursos de la plataforma y de las facilidades de pago que ofrecemos y así mejorar tu practica pedagogica.</p>
                <div class="flex items-center flex-wrap ">
                  <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Ver más</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

    <section class="mt-20 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">Bienvenidos al sitio web TIC Academy</h1>
        <p class="text-center text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae reprehenderit quod enim cumque officiis quos libero ducimu.</p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Catalogo de Cursos</a>
        </div>
        
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">Últimos Cursos</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo animi, molestiae illo volupta</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach

        </div>
    </section>

    <!--Admin Bot-->
    
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