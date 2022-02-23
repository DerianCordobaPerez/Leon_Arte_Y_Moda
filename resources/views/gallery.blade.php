<x-common.layout title="Galería">
    <h1 class="title-gallery">Galería de Imágenes</h1>

    <div class="container gallery__container m-auto">
        @forelse($posts as $post)
            <figure class="gallery__container--image">
                <img src="{{$post->picture}}">
                <figcaption>$post->title</figcaption>
                <div class="image__icons--hover">
                    <i class="bi bi-box-arrow-down"></i>
                    <i class="bi bi-share-fill"></i>
                </div>
            </figure>
        @empty
            <p>No hay imágenes en la galería</p>
        @endforelse
    </div>


    <!-- SECTION PREVIEW  -->
    <section class="container-preview" id="preview">
        <!-- CONTENT PREVIEW -->
        <div class="content-preview">
            <!-- IMAGE PREVIEW -->
            <div class="image-container">
                <img src="https://www.nicaraguadisena.com/wp-content/uploads/2021/08/20210812201752_IMG_2680-1080x720.jpg" alt="galeria de imagenes" id="active-image" />
                <button id="btn-previous" class="active-btn" type="button"><i class="bi bi-chevron-compact-left"></i></button>
                <button id="btn-next" class="active-btn" type="button"><i class="bi bi-chevron-compact-right"></i></button>
            </div>

            <!-- PREVIEW INFORMATION -->
            <div class="preview-info">
                <!-- BTN-CLOSE  -->
                <button id="btn-close" type="button"><i class="bi bi-x-lg"></i></button>
                <div class="title-content">
                    <img src="{{asset('images/logoLAM.png')}}" alt="LOGO"/>
                    <div class="title-preview">
                        <h5>Leon Arte y Moda</h5>
                        <span>01 de enero 2022 <i class="bi bi-globe2"></i></span>
                    </div>
                </div>

                <div class="main-content">
                    <img src="{{asset('images/logoLAM.png')}}" alt="LOGO"/>
                    <div class="description">
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
</section>

</x-common.layout>
