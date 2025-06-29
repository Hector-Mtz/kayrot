<script setup>
import { Link } from '@inertiajs/vue3'
const props = defineProps({
    marcas: Array,
});
</script>
<template>
    <header class="relative z-50">
        <nav class="sticky px-32 flex flex-row justify-between items-center w-full">
            <Link :href="route('home')" >
                <img class="lg:w-48" src="../../../img/home/logo.png" />
            </Link>
            <div>
                <a class="lg:text-[28px] italic font-medium" style="font-family: 'Playfair Display, serif;'">
                    Quiénes somos
                </a>
            </div>
            <div class="relative inline-block text-left group z-40">
                <!-- Botón del menú -->
                <button class="lg:text-[28px] italic font-medium border-b-2 border-black mb-2 group-hover:text-black"
                    style="font-family: 'Playfair Display, serif;'">
                    Nuestras marcas
                </button>

                <!-- Contenido desplegable -->
                <div class="absolute z-40 hidden w-52 bg-gray-200/50 text-center shadow-lg group-hover:block">
                    <ul class="py-2 text-gray-800">
                        <li class="py-1 hover:bg-gray-100 cursor-pointer" v-for="(marca, index) in marcas" :key="index">
                            <Link :href="route('marca.show', marca.nombre)" >
                               {{ marca.nombre }}
                            </Link>
                        </li>
                        <!-- 
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Pivot Point</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Tec Italy</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">NBC</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Chocolato</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Pravana</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Encanto Didona</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Charles</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Koul</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Neurone</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Hidracolor</li>
                        <li class="py-1 hover:bg-gray-100 cursor-pointer">Dr. Make up</li>
                        -->
                    </ul>
                </div>
            </div>
            <div class="flex flex-row gap-8">
                <img src="../../../img/home/icon_1.png" />

                <img src="../../../img/home/icon_4.png" />
            </div>
        </nav>
    </header>
</template>