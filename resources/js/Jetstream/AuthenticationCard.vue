<template>
    <div class="card-login min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="sm:rounded-lg-mb bg-f7 px-7 py-4">
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg-mt">
            <slot />
        </div>
    </div>
</template>
