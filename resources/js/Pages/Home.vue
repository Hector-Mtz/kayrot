<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
//Components
import Header from './PartialsHome/Header.vue';
import Footer from './PartialsHome/Footer.vue';
import Carrusel from './PartialsHome/Carrusel.vue';
//IMGS
import bannerImage from '@/../img/home/IMG_PRUEBA.JPG';


const duration = 20; // velocidad de desplazamiento (segundos por ciclo)
</script>
<template>

        <Head :title="'Home'" />
        <Header />
        <main class="py-8 relative z-10">
                <section class="relative px-32 py-8 mx-32 bg-cover bg-no-repeat bg-center h-[50rem] flex items-end  z-10"
                        :style="`background-image: url(${bannerImage})`">
                        <div class="absolute inset-0 bg-black/30 z-0"></div>
                        <div class="flex flex-row justify-between items-center w-full relative z-20">
                                <div class="flex flex-col items-center text-white">
                                        <p class="text-center lg:text-[24px]">
                                                Transforma tu rutina en
                                        </p>
                                        <p class="italic text-[40px] font-semibold"
                                                style="font-family: 'Playfair Display, serif;'">
                                                un ritual de belleza
                                        </p>
                                </div>
                                <div class="text-white flex flex-col justify-center">
                                        <p class="text-[20px]">
                                                Productos de belleza capilar
                                        </p>
                                        <a class="text-white text-center mt-2 text-[18px]">
                                                Descubrir
                                        </a>
                                        <div class="flex flex-row justify-center mt-2">
                                                <span class="block w-12 h-1 bg-white"></span>
                                        </div>
                                </div>
                        </div>
                </section>

                <div class="w-full overflow-hidden bg-black h-16 flex items-center py-20 my-8">
                        <div class="animate-marquee whitespace-nowrap text-white text-[80px]"
                                style="font-family: 'Playfair Display, serif;'">
                                <p class="mx-8 italic">30% de descuento en productos de belleza</p>
                        </div>
                </div>

                <section class="relative px-32 py-8 mx-32 bg-cover bg-no-repeat bg-center h-[50rem] flex items-end"
                        :style="`background-image: url(${bannerImage})`">
                        <div class="absolute inset-0 bg-black/30 z-0"></div>
                        <div class="flex flex-row justify-between items-center w-full relative z-20">
                                <div class="text-white flex flex-col justify-center">
                                        <p class="text-[20px]">
                                                Maquillaje profesional
                                        </p>
                                        <a class="text-white text-center mt-2 text-[18px]">
                                                Ver productos
                                        </a>
                                        <div class="flex flex-row justify-center mt-2">
                                                <span class="block w-12 h-1 bg-white"></span>
                                        </div>
                                </div>
                                <div class="flex flex-col items-center text-white">
                                        <p class="text-center lg:text-[24px]">
                                                Maquillaje que inspira,
                                        </p>
                                        <p class="italic text-[40px] font-semibold"
                                                style="font-family: 'Playfair Display, serif;'">
                                                Herramientas que empoderan
                                        </p>
                                </div>
                        </div>
                </section>

                <section class="relative px-32 py-8 mx-32 bg-cover bg-no-repeat bg-center h-[50rem] flex items-end mt-12"
                        :style="`background-image: url(${bannerImage})`">
                        <div class="absolute inset-0 bg-black/30 z-0"></div>
                        <div class="flex flex-row justify-between items-center w-full relative z-20">
                                <div class="flex flex-col items-center text-white">
                                        <p class="text-center lg:text-[24px]">
                                                Cuidado masculino
                                        </p>
                                        <p class="italic text-[40px] font-semibold"
                                                style="font-family: 'Playfair Display, serif;'">
                                                con distinción
                                        </p>
                                </div>
                                <div class="text-white flex flex-col justify-center">
                                        <p class="text-[20px]">
                                                Productos de belleza capilar
                                        </p>
                                        <a class="text-white text-center mt-2 text-[18px]">
                                                Descubrir
                                        </a>
                                        <div class="flex flex-row justify-center mt-2">
                                                <span class="block w-12 h-1 bg-white"></span>
                                        </div>
                                </div>
                        </div>
                </section>

                <section class="mt-12 p-8">
                        <h2 class="italic whitespace-nowrap text-[80px] text-center"
                                style="font-family: 'Playfair Display, serif;'">
                                Productos destacados
                        </h2>
                        <Carrusel />
                </section>

                <section class="mt-12 p-8">
                        <h2 class="italic whitespace-nowrap text-[80px] text-center"
                                style="font-family: 'Playfair Display, serif;'">
                                Tecnología y beneficios Kayrot
                        </h2>
                        <div class="flex flex-row gap-12 items-center mt-8">
                                <div class="bg-black w-1/2 flex flex-col p-8">
                                        <div class="flex flex-row justify-center">
                                                <img class="w-[30rem]" src="../../img/home/belleza.png" />
                                        </div>
                                        <div class="flex flex-row justify-end">
                                                <div class="flex flex-col items-center">
                                                        <a class="text-white text-center mt-2 text-[18px]">
                                                                Conoce más
                                                        </a>
                                                        <div class="flex flex-row justify-center mt-2">
                                                                <span class="block w-24 h-1 bg-white"></span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="bg-black w-1/2 flex flex-col p-8">
                                        <div class="flex flex-row justify-center">
                                                <img class="w-[30rem]" src="../../img/home/viajes.png" />
                                        </div>
                                        <div class="flex flex-row justify-end">
                                                <div class="flex flex-col items-center">
                                                        <a class="text-white text-center mt-2 text-[18px]">
                                                                Conoce más
                                                        </a>
                                                        <div class="flex flex-row justify-center mt-2">
                                                                <span class="block w-24 h-1 bg-white"></span>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>


                <section class="mt-12 p-8">
                        <div class="flex lg:flex-row gap-20 items-center">
                                <div class="w-1/2">
                                        <h2 class="italic whitespace-nowrap text-[48px] text-start"
                                                style="font-family: 'Playfair Display, serif;'">
                                                Contáctanos
                                        </h2>
                                        <form class="flex flex-col gap-8">
                                                <input class="w-full  border-b-2 border-x-0 border-t-0 text-2xl focus:border-none" placeholder="Nombre" />
                                                <input type="email" class="w-full  border-b-2 border-x-0 border-t-0 text-2xl focus:border-none" placeholder="Correo" />
                                                <textarea class="w-full text-2xl   h-32" placeholder="Mensaje"></textarea>
                                        </form>
                                </div>
                                <div class="w-1/2">
                                        <img class="w-full" src="../../img/home/form.png" />
                                </div>
                        </div>
                </section>
        </main>
        <Footer />
</template>

<style scoped>
@keyframes marquee {
        0% {
                transform: translateX(100%);
        }

        100% {
                transform: translateX(-100%);
        }
}

.animate-marquee {
        animation: marquee 15s linear infinite;
}
</style>
