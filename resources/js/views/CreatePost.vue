<template>
    <div>
        <div class="uk-alert-danger" uk-alert v-if="error">
            <a class="uk-alert-close" uk-close></a>
            <ul v-if="errors">
                <li v-if="errors.title" v-for="error in errors.title">{{ error }}</li>
                <li v-if="errors.body" v-for="error in errors.body">{{ error }}</li>
            </ul>
        </div>
        <form action="" style="margin-bottom: 20px;">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">Publish post</legend>

                <div class="uk-margin">
                    <input class="uk-input" v-model="form.title" type="text" placeholder="Post title">
                </div>

                <div class="uk-margin">
                    <textarea rows="5" class="uk-textarea" v-model="form.body" placeholder="Post content"></textarea>
                </div>

                <button class="uk-button uk-button-primary" @click.prevent="store">
                    <span uk-spinner v-if="loading"></span>
                    <span v-if="!loading">Publish post</span>
                </button>
            </fieldset>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "CreatePost",
    data: () => ({
        form: {
            title: "",
            body: ""
        },
        loading: false,
        error: false,
        errors: {}
    }),
    methods: {
        store(){
            this.loading = true;
            axios.post('/api/posts', this.form, {
                headers: {
                    "Content-type": "application/json"
                }
            })
            .then(res => {
                if(res.data.status){
                    this.$router.push('/blog/post/' + res.data.post.id);
                }
                setTimeout(() => {
                    this.loading = false;
                }, 500);
            })
            .catch(err => {
                console.log(err.response.data);
                this.error = true;
                this.errors = err.response.data.errors;
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
