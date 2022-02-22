<x-common.layout title="León Arte y Moda">
    {{-- Main header --}}
    <div class="header">
        <div class="row mx-5 mt-5 pt-5">
            <div class="col-4 text-title">
                <h1>León Arte y Moda</h1>
            </div>

            <div class="col-8 text-white text-center">
                <h2 class="fs-1 fw-bold">¿Quiénes Somos?</h2>
                <p class="fs-5 px-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis placeat ratione
                    architecto laudantium perspiciatis aut officiis velit veritatis animi nobis molestias, quaerat
                    dignissimos. Obcaecati sit dolorum inventore. Eaque iusto impedit
                    dolorum facere incidunt atque aliquid magni culpa obcaecati non.
                </p>

                <div class="buttons">
                    <button class="btn-welcome">Explore</button>
                    <button class="btn-welcome">Video</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Main header --}}

    {{-- mision vision y valores --}}
    <div class="vh-100 mision-vision-container d-flex flex-column justify-content-center">

        <div class="about-title" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h1 id="title">Cuales son nuestras metas</h1>
            <h1>Conoce mas sobre nosotros</h1>
        </div>

        <section class="d-flex justify-content-evenly">
            <div class="text-center size-mvv d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Mision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>

            </div>

            <div class="text-center size-mvv d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Vision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>
            </div>

            <div class="text-center size-mvv d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Valores</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>
            </div>


        </section>


    </div>

    <x-slot:js>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        </x-slot>
</x-common.layout>
