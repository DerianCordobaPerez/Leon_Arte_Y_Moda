<x-common.layout title="Contáctanos">
    <section class="contact-section mt-5">
        <!--HEADER CONTACT US-->
        <div class="header__contact">
            <h1 class="title__contact-us">Contáctanos</h1>
        </div>

        <!--MAIN CONTACT US-->

        <div class="container main__contact">
            <!--CONTAINER CARDS CONTACT US-->
            <div class="cards__contact">
                <!--CARDS CONTACT US-->
                <div class="contact__items shadow shadow-sm-lg">
                    <i class="bi bi-geo-alt-fill"></i>
                    <h3>Oficina</h3>
                    <span>Lorem ipsum dolor León, Nicaragua</span>
                </div>
                <div class="contact__items shadow shadow-sm-lg">
                    <i class="bi bi-telephone-fill"></i>
                    <h3>Teléfono</h3>
                    <span>2310-5671</span>
                </div>
                <div class="contact__items shadow shadow-sm-lg">
                    <i class="bi bi-printer-fill"></i>
                    <h3>Fax</h3>
                    <span>123-4567-890</span>
                </div>
                <div class="contact__items shadow shadow-sm-lg">
                    <i class="bi bi-envelope-fill"></i>
                    <h3>Correo Electrónico</h3>
                    <a href="#" class="contact__email">arteymoda@gmail.com</a>
                </div>
            </div>
        </div>


        <!--CONTAINER FORM-->

        <div class="container__form">
            <!--FORM CONTACT US-->
            <form action="" class="shadow-lg form__contact">
                <h2 class="title__form--contact">Contáctenos</h2>
                <div class="row">
                    <div class="col">
                        <input type="text" class="input__name--contact" name="name"
                            placeholder="Introduzca su Nombre">
                    </div>
                    <div class="col">
                        <input type="email" class="input__email--contact" name=" email"
                            placeholder="Introduzca su Correo">
                    </div>
                </div>
                <textarea name="message" class="input__message--contact cols=" 30" rows="5"
                    placeholder="Escriba su Mensaje"></textarea>
                <input type="submit" class="input__send--contact" value="Enviar">

            </form>

            <iframe class="contact__map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36479.43458460815!2d-118.3131125302928!3d34.05808678462837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+Kaliforniya%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2str!4v1551872109031"></iframe>
        </div>

        <!-- SOCIAL NETWORK -->

        <div class="social-network-contact">
            <h2 class="title-network-contact text-center">Redes sociales</h2>
            <ul>
                <li><i class="bi bi-facebook"></i></li>
                <li><i class="bi bi-whatsapp"></i></li>
                <li><i class="bi bi-instagram"></i></li>
                <li><i class="bi bi-twitter"></i></li>
                <li><i class="bi bi-linkedin"></i></li>
            </ul>
        </div>
    </section>



</x-common.layout>
