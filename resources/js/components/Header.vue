<template>
    <div class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li v-for="link in links">
                    <router-link :to="link.href">{{ link.title }}</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import Lang from "../lang";
export default {
    data() {
        return {
            links: [
                {
                    "title": Lang.get('blog.home'),
                    "href": "/"
                },
                {
                    "title": Lang.get('blog.blog'),
                    "href": "/blog"
                },
                {
                    "title": Lang.get('blog.create-post'),
                    "href": "/create"
                },
                {
                    "title": Lang.get('blog.example', {id : '1'}),
                    "href": "/"
                },
                {
                    "title": Lang.choice('blog.plural', 2, {id : '2'}),
                    "href": "/"
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
