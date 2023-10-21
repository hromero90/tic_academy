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
                <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
               
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
            <div class="h-full rounded-xl shadow-cla-violate bg-gradient-to-r from-pink-50 to-red-50 overflow-hidden">
              <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="blog">
              <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TIC Academy</h2>
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Tutoría</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <div class="flex items-center flex-wrap ">
                  <button class="bg-gradient-to-r from-orange-300 to-amber-400 hover:scale-105 drop-shadow-md shadow-cla-violate px-4 py-1 rounded-lg">Learn more</button>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="p-4 md:w-1/3">
            <div class="h-full rounded-xl shadow-cla-pink bg-gradient-to-r from-fuchsia-50 to-pink-50 overflow-hidden">
              <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="https://images.unsplash.com/photo-1573165067541-4cd6d9837902?auto=format&fit=crop&q=80&w=1469&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="blog">
              <div class="p-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TIC Academy</h2>
                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">Foros</h1>
                <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                <div class="flex items-center flex-wrap ">
                  <button class="bg-gradient-to-r from-fuchsia-300 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-1 rounded-lg">Learn more</button>
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
          <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
              <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                  <svg class="w-auto h-5 text-gray-900 fill-current" viewBox="0 0 202 69"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M57.44.672s6.656 1.872 6.656 5.72c0 0-1.56 2.6-3.744 6.552 8.424 1.248 16.744 1.248 23.816-1.976-1.352 7.904-12.688 8.008-26.208 6.136-7.696 13.624-19.656 36.192-19.656 42.848 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C56.608 53.088 42.152 69 36.432 69c-4.472 0-8.216-5.928-8.216-10.4 0-6.552 11.752-28.08 20.28-42.952-9.984-1.664-20.176-3.64-27.976-3.848-13.936 0-16.64 3.536-17.576 6.032-.104.312-.52.52-.832.312-3.744-7.072-1.456-14.56 14.144-14.56 9.36 0 22.048 4.576 34.944 7.592C54.736 5.04 57.44.672 57.44.672zm46.124 41.08c1.144-1.456 4.264.728 3.016 2.392C100.236 53.088 85.78 69 80.06 69c-4.576 0-8.32-5.928-8.32-10.4v-.208C67.58 64.32 63.524 69 61.34 69c-4.472 0-8.944-4.992-8.944-11.856 0-10.608 15.704-33.072 24.96-33.072 4.992 0 7.384 2.392 8.528 4.576l2.6-4.576s6.656 1.976 6.656 5.824c0 0-13.312 24.336-13.312 30.056 0 .208 0 .624.52.624 4.472 0 17.888-14.352 21.216-18.824zm-40.56 18.72c2.184 0 11.752-13.312 17.368-22.048l4.16-7.488c-8.008-7.904-27.248 29.536-21.528 29.536zm57.564-38.168c-2.184 0-4.992-2.808-4.992-4.784 0-2.912 5.824-14.872 7.28-14.872 2.6 0 6.136 2.808 6.136 6.344 0 2.08-7.176 12.064-8.424 13.312zm-17.68 46.592c-4.472 0-8.216-5.928-8.216-10.4 0-6.656 16.744-34.528 16.744-34.528s6.552 1.976 6.552 5.824c0 0-13.312 24.336-13.312 30.056 0 .208.104.624.624.624 4.472 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392-6.448 8.944-20.904 24.856-26.624 24.856zM147.244.672s6.656 1.872 6.656 5.72c0 0-25.792 43.784-25.792 53.56 0 .416.208.624.52.624 4.576 0 17.888-14.352 21.112-18.824 1.144-1.456 4.264.728 3.12 2.392C146.412 53.088 131.956 69 126.236 69c-4.472 0-8.216-5.928-8.216-10.4 0-10.4 29.224-57.928 29.224-57.928zM169.7 60.16c3.848-2.392 7.904-6.864 10.816-10.92 6.656-9.464 11.544-20.696 10.504-27.352-.312-3.432-.104-4.056 3.12-2.704 5.2 2.392 11.336 8.632 2.184 22.88-5.2 8.008-12.48 15.288-19.344 19.76-2.704 1.768-6.344 3.328-9.984 4.16-.52.416-1.04.728-1.456.936-1.872 1.352-4.264 2.08-7.592 2.08-14.664 0-16.848-12.272-16.848-16.016 0-2.392 3.224-4.68 4.784-3.744.208.104.312.416.312.624 0 2.808 1.872 13.104 9.984 13.104 7.904 0 3.432-18.304 2.288-27.144-1.456 2.288-3.432 4.992-5.616 8.32-2.6 3.744-5.72 1.456-4.784 0 5.824-8.424 9.152-13.832 11.856-18.616 1.248-2.08 3.328-3.328 6.448-3.328 2.704 0 5.824 3.016 6.864 4.784.312.52 0 1.04-.52 1.144a5.44 5.44 0 00-4.368 5.408c0 6.968 2.6 17.16 1.664 24.856l-.312 1.768z"
                          fill-rule="nonzero" /></svg>
              </a>
              <p class="mt-2 text-sm text-gray-500">Design, Code and Ship!</p>
              <div class="mt-4">
                  <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                      <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              class="w-5 h-5" viewBox="0 0 24 24">
                              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              class="w-5 h-5" viewBox="0 0 24 24">
                              <path
                                  d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                              </path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                          </svg>
                      </a>
                      <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                              <path stroke="none"
                                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                              </path>
                              <circle cx="4" cy="4" r="2" stroke="none"></circle>
                          </svg>
                      </a>
                  </span>
              </div>
          </div>
          <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Company</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Careers</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Support</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact Support</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Help Resources</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Release Updates</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Platform
                  </h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Send a Message</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Request a Quote</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">+123-456-7890</a>
                      </li>
                  </nav>
              </div>
          </div>
      </div>
      <div class="bg-gray-300">
          <div class="container px-5 py-4 mx-auto">
              <p class="text-sm text-gray-700 capitalize xl:text-center">© 2020 All rights reserved </p>
          </div>
      </div>
  </footer>

</div>