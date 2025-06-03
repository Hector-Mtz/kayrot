<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/autoplay';

import { Navigation, Pagination, Autoplay } from 'swiper/modules';

const modules = [Navigation, Pagination, Autoplay];

</script>

<template>
    <Swiper :modules="modules" :loop="true" :autoplay="{ delay: 5000, disableOnInteraction: false }" navigation
        :slides-per-view="3"  class="mySwiper w-full h-[400px] justify-center flex flex-row">
        <SwiperSlide>
            <div class="w-[337px] h-[500px] mx-auto flex flex-col justify-center items-center">
                <img src="../../../img/home/IMG_PRUEBA.jpg" />
            </div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="w-[337px] h-[500px] mx-auto flex flex-col justify-center items-center">
                <img src="../../../img/home/IMG_PRUEBA.jpg" />
            </div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="w-[337px] h-[500px] mx-auto flex flex-col justify-center items-center">
                <img src="../../../img/home/IMG_PRUEBA.jpg" />
            </div>
        </SwiperSlide>
        <SwiperSlide>
            <div class="w-[337px] h-[500px] mx-auto flex flex-col justify-center items-center">
                <img src="../../../img/home/IMG_PRUEBA.jpg" />
            </div>
        </SwiperSlide>
    </Swiper>
</template>
