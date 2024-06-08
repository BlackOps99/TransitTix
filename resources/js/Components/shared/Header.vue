<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from '@inertiajs/vue3';

const active = ref('#home');

const toggleMenu = () => {
    let ele = document.getElementById('menu-collapse');
    ele.classList.toggle('hidden');
}

const handleScroll = (ev) => {
    ev.preventDefault();
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add("is-sticky");
    } else {
        navbar.classList.remove("is-sticky");
    }

    var mybutton = document.getElementById("back-to-top");
    if (mybutton != null) {
        if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
            mybutton.classList.add("block");
            mybutton.classList.remove("hidden");
        } else {
            mybutton.classList.add("hidden");
            mybutton.classList.remove("block");
        }
    }
};

const ScrollIntoView = (elem) => {
    active.value = elem;
    let ele = document.querySelector(elem);
    ele.scrollIntoView({ behavior: 'smooth', block: 'start' });
};

onMounted(() => {
    document.documentElement.classList.add('light');
    document.documentElement.setAttribute('dir', 'ltr');

    var bodyElement = document.body;
    bodyElement.classList.add('text-base', 'text-slate-900');

    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <nav class="navbar" id="navbar">
        <div class="container flex flex-wrap items-center justify-end">
            <Link class="navbar-brand" :href="route('home')">
                <img src="/images/logo.png" class="inline-block dark:hidden" alt="">
            </Link>

            <div class="nav-icons flex items-center lg_992:order-2 ms-auto">
                <!-- Navbar Button -->
                <ul class="list-none menu-social mb-0">
                    <li class="inline">
                        <Link :href="route('login')"
                              :class="{'hidden': route().current('login')}" class="btn btn-sm bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-full">Login</Link>
                    </li>
                    <li class="inline">
                        <Link :href="route('register')"
                              :class="{'hidden': route().current('register')}" class="btn btn-sm bg-orange-600 hover:bg-orange-700 border-orange-600 hover:border-orange-700 text-white rounded-full">Register</Link>
                    </li>
                </ul>
                <!-- Navbar Collapse Manu Button -->
                <button data-collapse="menu-collapse" type="button" @click="toggleMenu()"
                        class="collapse-btn inline-flex items-center ms-3 text-dark dark:text-white lg_992:hidden"
                        aria-controls="menu-collapse" aria-expanded="false">
                    <span class="sr-only">Navigation Menu</span>
                    <i class="mdi mdi-menu mdi-24px"></i>
                </button>
            </div>

            <!-- Navbar Manu -->
            <div class="navigation lg_992:order-1 lg_992:flex hidden" id="menu-collapse">
                <ul class="navbar-nav" id="navbar-navlist">
                    <li class="nav-item" :class="{ 'active': active == '#home' }">
                        <Link class="nav-link" @click="ScrollIntoView('#home')" :href="route('home')">Home</Link>
                    </li>
                    <template v-if="route().current('home')">
                        <li class="nav-item" :class="{ 'active': active == '#about' }">
                            <a class="nav-link" href="javascript:void(0);" @click="ScrollIntoView('#about')">About us</a>
                        </li>
                        <li class="nav-item" :class="{ 'active': active == '#our_bus_classes' }">
                            <a class="nav-link" href="javascript:void(0);" @click="ScrollIntoView('#our_bus_classes')">Our Bus Classes</a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </nav>
</template>
