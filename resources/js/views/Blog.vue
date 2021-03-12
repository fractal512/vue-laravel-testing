<template>
    <div>
        <spinner v-if="loading"></spinner>
        <div v-else>
            <div class="uk-child-width-1-2@s uk-grid-small uk-grid-match" uk-grid>
                <list-item v-for="post in posts"
                           :key="post.id"
                           :title="post.title"
                           :body="post.body"
                           :date="post.created_at"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Spinner from "./Spinner";
import axios from "axios";
import ListItem from "../components/Blog/ListItem";

export default {
    name: "Blog",
    components: {
        Spinner,
        ListItem
    },
    data: () => ({
        loading: true,
        posts: []
    }),
    mounted() {
        this.loadPosts()
    },
    methods: {
        loadPosts(){
            axios.get('/api/posts')
            .then(res => {
                //console.log(res.data);
                this.posts = res.data.posts; //console.log(res.data.posts, res.data.status);
                setTimeout(() => {
                    this.loading = false;
                }, 500);
            })
        }
    }
}
</script>

<style scoped>

</style>
