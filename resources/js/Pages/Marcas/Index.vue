<script setup>
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';
// Components
import Header from '../PartialsHome/Header.vue';
import Footer from '../PartialsHome/Footer.vue';
//IMGS
import bannerImage from '@/../img/home/IMG_PRUEBA.JPG';

const props = defineProps({
    marcas: Array,
    productos: Array,
    marca: Object,
    categorias: Array
});

const categoriaSeleccionada = ref(null);

// Computed para filtrar productos
const productosFiltrados = computed(() => {
    if (!categoriaSeleccionada.value) return props.productos;
    return props.productos.filter(
        p => p.categorias === categoriaSeleccionada.value.idCategorias
    );
});

</script>
<template>

    <Head :title="'Marcas'" />
    <Header :marcas="marcas" />

    <main class="lg:px-[250px] lg:py-20">
        <section>
            <h1 class="text-center lg:text-[60px]">
                {{ marca.nombre }}
            </h1>

            <!-- Botones de categorías -->
            <div class="grid grid-cols-4 py-8 gap-2">
                <button v-for="(categoria, index) in categorias" :key="index" :class="[
                    'px-4 py-2 border rounded capitalize',
                    categoriaSeleccionada?.idCategorias === categoria.idCategorias
                        ? 'pb-2 border-b-2 border-purple-700 text-black font-medium'
                        : 'pb-2 border-b-2 border-transparent hover:border-black transition'
                ]" @click="categoriaSeleccionada = categoria">
                    {{ categoria.nombre }}
                </button>

                <!-- Botón para ver todos -->
                <button class="px-4 py-2 border rounded bg-gray-200" @click="categoriaSeleccionada = null">
                    Todas
                </button>
            </div>

            <div class="relative mt-10 px-4 md:px-0 flex justify-center items-center bg-cover h-[30rem]"
                :style="`background-image: url(${bannerImage})`">
                <!-- Texto "Style" -->
                <h2
                v-if="categoriaSeleccionada !== null"
                    class="absolute left-6 md:left-20 bottom-10 text-white md:text-6xl text-4xl font-serif drop-shadow-md">
                    {{ categoriaSeleccionada.nombre }}
                </h2>
            </div>
            <span class="w-full h-[1rem] bg-purple-950 block"></span>
            <div class="pt-12">
                <p class="text-center text-[25px]" v-if="categoriaSeleccionada !== null">
                    <strong>{{ categoriaSeleccionada.nombre }} </strong> es una marca que se preocupa por la huella de
                    carbono y por un mundo con oportunidades para todos.
                </p>
                <p class="text-center text-[25px] mt-8">
                    La familia Style te brinda durabilidad y resistencia a la humedad, además de brindar diferentes
                    <br />
                    niveles de fijación y consistencia, para adaptarse a todos los estilos que necesite el cabello.
                </p>
            </div>
            <!-- Productos filtrados -->
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-4 mt-12">
                <div v-for="(producto, index) in productosFiltrados" :key="index">
                    <div class="bg-[#f6f6f6] flex flex-row justify-center">
                        <img class="w-48" src="../../../img/home/producto.png" />
                    </div>
                    <div class="p-4 border rounded">
                        {{ producto.nombreProducto }}
                    </div>
                </div>
            </div>
        </section>
    </main>
    <Footer />
</template>
