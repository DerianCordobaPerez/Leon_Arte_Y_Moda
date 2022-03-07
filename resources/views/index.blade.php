<x-common.layout title="León Arte y Moda">
    <header class="header-home">
        <div class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner carousel-inner-radius carousel-image-container">
                <div class="carousel-item carousel-item-img active">
                    <img src="https://www.10wallpaper.com/wallpaper/1680x1050/1407/beauty_fashion_woman-Photo_background_wallpaper_1680x1050.jpg"
                        class="d-block w-100 carousel-item-filter" alt="img">
                </div>

                <div class="carousel-item carousel-item-img">
                    <img src="https://media-we-cdn.oriflame.com/-/media/WE/Images/2022/CE/C3/beauty-edits-cms/b1-how-to-use-hybrid-make-up-to-achieve-a-radiant-look.ashx?u=0101010000&q=90"
                        class="d-block w-100 carousel-item-filter" alt="img">
                </div>

                <div class="carousel-item carousel-item-img">
                    <img src="https://academiaestrellas.com/wp-content/uploads/2016/04/bellezatodoslosdias.jpg"
                        class="d-block w-100 carousel-item-filter" alt="img">
                </div>

                <div class="carousel-caption carousel-caption-header row mx-5 mt-5 pt-5">
                    <div class="col-4">
                        <h1 class="text-title">León Arte y Moda</h1>
                    </div>

                    <div class="col-8 text-white text-center">
                        <h2 class="fs-1 fw-bold">¿Quiénes Somos?</h2>
                        <p class="fs-5 px-5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident blanditiis placeat
                            ratione
                            architecto laudantium perspiciatis aut officiis velit veritatis animi nobis molestias,
                            quaerat
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

    </header>

    <div class="vh-100 cards-home d-flex flex-column justify-content-center">
        <div class="about-title" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h1 class="titles-home">¿Cuales son nuestras metas?</h1>
            <h1 class="subtitles-home">Conoce más sobre nosotros</h1>
        </div>

        <section class="d-flex justify-content-evenly">
            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">

                <h3 class="my-3 subtitle-mvv">Mision</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.
                </p>
            </div>

            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Vision</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.
                </p>
            </div>

            <div class="text-center size-mvv shadow d-flex flex-column align-items-center justify-content-center"
                data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <img src="{{ asset('images/fondo.jpg') }}" class="card-img-top" alt="...">
                <h3 class="my-3 subtitle-mvv">Valores</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur id nobis nihil ea
                    exercitationem
                    quaerat iusto optio iure adipisci autem.
                </p>
            </div>
        </section>
    </div>

    <div class="events">
        <div class="events-step">
            <div class="events-step__header" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h1 class="events-step__title">Eventos proximos</h1>
            </div>
            <div class="events-step__body">
                <div class="step active" id="step-1">
                    <div class="step__body row">
                        <div id="carouselExampleCaptions" class="carousel slide img-events col carousel-container"
                            data-bs-ride="carousel" data-aos="fade-right" data-aos-easing="linear"
                            data-aos-duration="1500">

                            <div class="carousel-inner ">
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
                        <div class="col p-3" data-aos="fade-left" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <h3 class="step__subtitle">Pasarela moderna</h3>
                            <div class="information-events">

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut vitae voluptas ex
                                    porro
                                    deleniti excepturi, debitis repellendus aliquam, nostrum nulla praesentium! At dolor
                                    expedita adipisci perspiciatis recusandae. Assumenda vel quibusdam, exercitationem
                                    illo
                                    libero modi asperiores adipisci vero accusantium aut saepe.
                                </p>

                                <label class="mx-2">Fecha:</label><input type="date" value="2022-07-22"
                                    min="2022-07-22" max="2022-07-22">

                                <label class="mx-2">Hora:</label><input type="time" value="23:20" min="23:20"
                                    max="23:20">

                            </div>
                            <div class="countdown-container shadow">
                                <h4 class="mb-4">El evento comienza en: </h4>
                                <ul>
                                    <li><span id="days"></span> Dias </li>
                                    <li><span id="hours"></span> Horas </li>
                                    <li><span id="minutes"></span> Minutos </li>
                                    <li><span id="seconds"></span> Segundos </li>
                                </ul>

                            </div>
                            <div class=" mx-2 row">
                                <button type="button" class="step__button step__button--next col" data-to_step="2"
                                    data-step="1">Siguiente evento</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">

                    </div>
                    <div class="step__body row">

                        <div id="carouselExampleCaptions2" class="carousel slide img-events col carousel-container "
                            data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active img-events">
                                    <img src="https://aws.glamour.es/prod/designs/v1/assets/1800x1200/623412.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item img-events">
                                    <img src="https://ladefinicion.com/wp-content/uploads/2021/08/diseno-de-moda.jpg"
                                        class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item img-events">
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
                        <div class="col p-3">
                            <h3 class="step__subtitle">Fiesta Nocturna</h3>
                            <div class="information-events">

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut vitae voluptas ex
                                    porro
                                    deleniti excepturi, debitis repellendus aliquam, nostrum nulla praesentium! At dolor
                                    expedita adipisci perspiciatis recusandae. Assumenda vel quibusdam, exercitationem
                                    illo
                                    libero modi asperiores adipisci vero accusantium aut saepe.
                                </p>

                                <label class="mx-2">Fecha:</label><input type="date" value="2022-07-22"
                                    min="2022-07-22" max="2022-07-22">

                                <label class="mx-2">Hora:</label><input type="time" value="23:20" min="23:20"
                                    max="23:20">

                            </div>
                            <div class="countdown-container shadow">
                                <h4 class="mb-4">El evento comienza en: </h4>
                                <ul>
                                    <li><span id="days"></span> Dias </li>
                                    <li><span id="hours"></span> Horas </li>
                                    <li><span id="minutes"></span> Minutos </li>
                                    <li><span id="seconds"></span> Segundos </li>
                                </ul>

                            </div>
                            <div class="row mx-2">
                                <button type="button" id="step-button-back-1"
                                    class="step__button step__button--back col" data-to_step="1"
                                    data-step="2">Regresar</button>
                                <button type="button" class="step__button step__button--next col" data-to_step="3"
                                    data-step="2">Siguiente</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                    </div>
                    <div class="step__body row">
                        <div id="carouselExampleCaptions3" class="carousel slide img-events col carousel-container"
                            data-bs-ride="carousel">

                            <div class="carousel-inner h-100">
                                <div class="carousel-item active h-100">
                                    <img src="https://aws.glamour.es/prod/designs/v1/assets/1800x1200/623412.jpg"
                                        class="d-block w-100 h-100" alt="..." heigth="200">
                                </div>
                                <div class="carousel-item h-100">
                                    <img src="https://ladefinicion.com/wp-content/uploads/2021/08/diseno-de-moda.jpg"
                                        class="d-block w-100 h-100" alt="..." heigth="200">
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
                        <div class="col p-3">
                            <h3 class="step__subtitle">Moda Playera</h3>
                            <div class="information-events">

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut vitae voluptas ex
                                    porro
                                    deleniti excepturi, debitis repellendus aliquam, nostrum nulla praesentium! At dolor
                                    expedita adipisci perspiciatis recusandae. Assumenda vel quibusdam, exercitationem
                                    illo
                                    libero modi asperiores adipisci vero accusantium aut saepe.
                                </p>

                                <label class="mx-2">Fecha:</label><input type="date" value="2022-07-22"
                                    min="2022-07-22" max="2022-07-22">

                                <label class="mx-2">Hora:</label><input type="time" value="23:20" min="23:20"
                                    max="23:20">

                            </div>
                            <div class="countdown-container shadow">
                                <h4 class="mb-4">El evento comienza en: </h4>
                                <ul>
                                    <li><span id="days"></span> Dias </li>
                                    <li><span id="hours"></span> Horas </li>
                                    <li><span id="minutes"></span> Minutos </li>
                                    <li><span id="seconds"></span> Segundos </li>
                                </ul>

                            </div>
                            <div class="row mx-2">
                                <button type="button" class="step__button step__button--back col" data-to_step="2"
                                    data-step="3">Regresar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about">

        <div class="text-center" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
            <h1 class="titles-home">Modelo TOP-1</h1>
            <h1 class="subtitles-home">(Información Personal)</h1>
        </div>

        <div class="row mx-5 information-container" data-aos="fade-down" data-aos-easing="linear"
            data-aos-duration="1500">
            <div class="col-8 information shadow">
                <img src="https://images.ctfassets.net/lh3zuq09vnm2/yBDals8aU8RWtb0xLnPkI/19b391bda8f43e16e64d40b55561e5cd/How_tracking_user_behavior_on_your_website_can_improve_customer_experience.png"
                    alt="Imagen de Misión">

                <h2 class="mb-3 title-profile">Juan Pablo Martinez Herrera</h2>

                <p class="fs-5 text-profile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, maiores
                    ex? Neque et magni provident quae distinctio, quisquam perferendis, voluptates accusamus doloremque
                    necessitatibus cum voluptatibus facere tempora aut repellat
                    illo? Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

                <a href="#" class="link-primary text-decoration-none fw-normal link-profile">
                    Leer Más
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>

    {{-- slideshow --}}
    <div class="marquee">
        <ul class="marquee-content">
            <li>
                <img src="https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max"
                    alt="" />
            </li>
            <li>
                <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" alt="" />
            </li>
            <li>
                <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aHVtYW58ZW58MHx8MHx8&w=1000&q=80"
                    alt="" />
            </li>
            <li>
                <img src="https://i.pinimg.com/originals/ca/76/0b/ca760b70976b52578da88e06973af542.jpg" alt="" />
            </li>
            <li>
                <img src="https://helpx.adobe.com/content/dam/help/en/photoshop/using/convert-color-image-black-white/jcr_content/main-pars/before_and_after/image-before/Landscape-Color.jpg"
                    alt="" />
            </li>
            <li>
                <img src="https://media.istockphoto.com/photos/colored-powder-explosion-on-black-background-picture-id1057506940?k=20&m=1057506940&s=612x612&w=0&h=3j5EA6YFVg3q-laNqTGtLxfCKVR3_o6gcVZZseNaWGk="
                    alt="" />
            </li>
            <li>
                <img src="https://vilmar.am/vilmar_app/images/reklams/46419148eaea79f92bded15443c65abb.jpg" alt="" />
            </li>
        </ul>
    </div>
    {{--  --}}

    {{-- fill image --}}
        <section class="fill-image-container">
            <div>
                <img src="https://esteticawexler.com.ar/wp-content/uploads/2015/04/belleza1.jpg" alt="">
            </div>
        </section>
    {{--  --}}


    <x-slot:js>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        </x-slot>
</x-common.layout>
