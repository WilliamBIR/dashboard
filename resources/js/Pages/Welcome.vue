<template>
    <Head title="Inicio" />
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <Link :href="route('login')">Inicio</Link>
        </div>
        <div class="content">
            <div class="title m-b-md">
                <jet-application-logo/>
            </div>
        </div>
    </div>
</template>

<script>
    import { defineComponent } from 'vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo.vue';

    export default defineComponent({
        components: {
            Head,
            Link,
            JetApplicationLogo
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        },
        methods:{
            click(){
                console.log(click);
            }
        }
    })
</script>

<style>
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>