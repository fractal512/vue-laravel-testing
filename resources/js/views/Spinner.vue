<template>
    <div uk-spinner class="spinner"></div>
</template>

<script>
export default {
    name: "Spinner"
}
</script>

<style scoped>
    .spinner{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
</style>
