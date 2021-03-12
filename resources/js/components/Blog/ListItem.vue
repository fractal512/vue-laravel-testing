<template>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-header">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-auto"></div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">{{ title }}</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time :datetime="date">{{ date }}</time></p>
                    </div>
                </div>
            </div>
            <div class="uk-card-body">
                <p>{{ body }}</p>
            </div>
            <div class="uk-card-footer">
                <a href="#" class="uk-button uk-button-text">Read more</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ListItem",
    props: {
        title: {
            type: String,
            default: "NULL"
        },
        body: {
            type: String,
            default: "NULL"
        },
        date: {
            type: String,
            default: "NULL"
        }
    }
}
</script>

<style scoped>

</style>
