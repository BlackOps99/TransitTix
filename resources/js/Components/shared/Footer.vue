<template>
    <div>
        <footer class="py-8 bg-slate-800 dark:bg-gray-900">
            <div class="container">
                <div class="grid md:grid-cols-12 items-center">
                    <div class="md:col-span-3">
                        <a href="#" class="logo-footer">
                            <img src="/images/logo.png" class="md:ms-0 mx-auto" alt="">
                        </a>
                    </div>

                    <div class="md:col-span-5 md:mt-0 mt-8">
                        <div class="text-center">
                            <p class="text-gray-400">© {{ new Date().getFullYear() }}
                                TransitTix.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>
