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