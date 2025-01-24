<script setup>

</script>

<template>
    <header>
        <nav>
            <div>
                <h1>LOGO</h1>
                <ul>
                    <li><a :href="route('site.home')">Home</a></li>
                    <li><a :href="route('site.home')">Listagem</a></li>
                    <li><a :href="route('site.contact')">Contato</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <main>
        <slot />
    </main>
    <footer>
        <p>Copyright Todos os Direitos Reservados - Purgato Technology </p>
    </footer>
</template>

<style scoped>

</style>
