<x-app-layout>

    <!--Portada del sitio-->
    <section class="bg-cover" style="background-image: url({{asset('img/home/pexels-julia-m-cameron-4145190.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w1/2">
                
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Bienvenidos a <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">TIC Academy</span></h1>
                <p class="italic text-lg font-normal dark:text-white lg:text-xl">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>



                <!-- component -->
                <!-- This is an example component -->
                
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>

                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
            <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                <article>
                    <figure>
                        <img class="rounded-xl h-50 w-full object-cover" src="{{asset('img/home/pexels-armin-rimoldi-5553050 tiny.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos Online</h1>
                    </header>
                    <p class="text-sm text-gray-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequatur iusto tempora sit sapiente, doloremque, perferendis dignissimos perspiciatis dicta cum placeat nam provident modi porro similique, deleniti eveniet. Quasi, eveniet?</p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-50 w-full object-cover" src="{{asset('img/home/pexels-karolina-grabowska-4497759 tiny.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Productos</h1>
                    </header>
                    <p class="text-sm text-gray-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequatur iusto tempora sit sapiente, doloremque, perferendis dignissimos perspiciatis dicta cum placeat nam provident modi porro similique, deleniti eveniet. Quasi, eveniet?</p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-50 w-full object-cover" src="{{asset('img/home/pexels-karolina-grabowska-4498362 tiny.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Tutoría</h1>
                    </header>
                    <p class="text-sm text-gray-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequatur iusto tempora sit sapiente, doloremque, perferendis dignissimos perspiciatis dicta cum placeat nam provident modi porro similique, deleniti eveniet. Quasi, eveniet?</p>
                </article>

                <article>
                    <figure>
                        <img class="rounded-xl h-50 w-full object-cover" src="{{asset('img/home/pexels-katerina-holmes-5905709 tiny.jpg')}}" alt="">
                    </figure>

                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Foros</h1>
                    </header>
                    <p class="text-sm text-gray-500 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores consequatur iusto tempora sit sapiente, doloremque, perferendis dignissimos perspiciatis dicta cum placeat nam provident modi porro similique, deleniti eveniet. Quasi, eveniet?</p>
                </article>

            </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
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
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">

                    <div class="px-6 py-4">
                        <h1 class="text-xl text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                        <p class= "text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>

                        <div class="flex">
                        
                        <ul class="flex text-sm">
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >= 1 ? 'green' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >= 2 ? 'green' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >= 3 ? 'green' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating >= 4 ? 'green' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1">
                                    <i class="fas fa-star text-{{$course->rating == 5 ? 'green' : 'gray'}}-400"></i>
                                </li>
                            </ul>
                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                ({{$course->students_count}})
                            </p>
                        </div>
                        <a href="{{route('courses.show', $course)}}" type="button" class=" block text-center w-full mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Mas Información...
                        </a>

                    </div>

                </article>
            @endforeach

        </div>
    </section>
    
</x-app-layout>