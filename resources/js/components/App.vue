<template>
    <header>
        <nav>
            <ul>
                <li>
                    <router-link :to="{ name: 'home' }">Home</router-link>
                    <router-link :to="{ name: 'sharetext' }">Share text</router-link>
                </li>
            </ul>
        </nav>

        <button>copy ur slug: {{ slug }}</button>
    </header>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: 'App', data: {
        slug: '',
    }
}
</script>