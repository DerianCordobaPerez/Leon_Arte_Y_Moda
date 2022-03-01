<x-common.layout title="León Arte y Moda">

    {{-- Main header --}}
    <div class="carousel-1" id="carousel-header">
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
    </div>
    {{-- End Main header --}}

    {{-- mision vision y valores --}}
    <div class="vh-100 mision-vision-container d-flex flex-column justify-content-center">

        <div class="about-title" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h1 class="titles-home">¿Cuales son nuestras metas?</h1>
            <h1 id="subtitle">Conoce más sobre nosotros</h1>
        </div>

        <section class="d-flex justify-content-evenly">
            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Mision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>

            </div>

            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Vision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>
            </div>

            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Valores</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.</p>
            </div>


        </section>


    </div>

    {{--  --}}

    <div class="events">
        <div class="events-step">
            <div class="events-step__header">
                <h1 class="events-step__title">Eventos proximos</h1>
            </div>
            <div class="events-step__body">
                <div class="step active" id="step-1">
                    <div class="step__header">

                    </div>
                    <div class=" row">
                        {{--  --}}
                        <div id="carouselExampleCaptions" class="carousel slide img-events col" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://aws.glamour.es/prod/designs/v1/assets/1800x1200/623412.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://ladefinicion.com/wp-content/uploads/2021/08/diseno-de-moda.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://media.vogue.es/photos/5cc751ab8f6f675e1f5beb72/master/w_2400,h_1800,c_limit/moda_tendencias_voguees_965319015.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{--  --}}
                        <div class="col">
                            <h2 class="step__title">Pasarela moderna</h2>
                            <button type="button" class="step__button step__button--next" data-to_step="2"
                                data-step="1">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">

                    </div>
                    <div class="step__body row">
                        {{--  --}}
                        <div id="carouselExampleCaptions2" class="carousel slide img-events col" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://aws.glamour.es/prod/designs/v1/assets/1800x1200/623412.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://ladefinicion.com/wp-content/uploads/2021/08/diseno-de-moda.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://media.vogue.es/photos/5cc751ab8f6f675e1f5beb72/master/w_2400,h_1800,c_limit/moda_tendencias_voguees_965319015.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{--  --}}
                        <div class="col">
                            <h2 class="step__title">Evento 2</small></h2>
                            <button type="button" id="step-button-back-1" class="step__button step__button--back"
                                data-to_step="1" data-step="2">Regresar</button>
                            <button type="button" class="step__button step__button--next" data-to_step="3"
                                data-step="2">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                    </div>
                    <div class="step__body row">
                        {{--  --}}
                        <div id="carouselExampleCaptions3" class="carousel slide img-events col" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://aws.glamour.es/prod/designs/v1/assets/1800x1200/623412.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://ladefinicion.com/wp-content/uploads/2021/08/diseno-de-moda.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://media.vogue.es/photos/5cc751ab8f6f675e1f5beb72/master/w_2400,h_1800,c_limit/moda_tendencias_voguees_965319015.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        {{--  --}}
                        <div class="col">
                            <h2 class="step__title">Evento 3</small></h2>

                            <button type="button" class="step__button step__button--back" data-to_step="2"
                                data-step="3">Regresar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

    <div class="about">

        <div class="text-center" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h1 class="titles-home">¿Cuales son nuestras metas?</h1>
        </div>

        <div class="row mx-5 information-container">
            <div class="col-8 information shadow">
                <img src="https://images.ctfassets.net/lh3zuq09vnm2/yBDals8aU8RWtb0xLnPkI/19b391bda8f43e16e64d40b55561e5cd/How_tracking_user_behavior_on_your_website_can_improve_customer_experience.png"
                    alt="Imagen de Misión">
                <h2 class="mb-3 title-profile">Misión</h2>
                <p class="fs-5 text-profile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, maiores
                    ex? Neque et magni provident quae distinctio, quisquam perferendis, voluptates accusamus doloremque
                    necessitatibus cum voluptatibus facere tempora aut repellat
                    illo? Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#" class="link-primary text-decoration-none fw-normal link-profile">Leer Más<i
                        class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>


    <x-slot:js>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script>
            setInterval('CarouselHeader()', 5000);

            function CarouselHeader() {
                var elemento = document.getElementById("carousel-header");

                if (elemento.className == "carousel-1") {
                    elemento.className = "carousel-2";
                } else if (elemento.className == "carousel-2") {
                    elemento.className = "carousel-3";
                } else {
                    elemento.className = "carousel-1";
                }
            }
        </script>

        </x-slot>
</x-common.layout>
