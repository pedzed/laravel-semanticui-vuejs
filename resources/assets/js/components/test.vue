<style lang="scss">
.message {
    color: lighten(red, 20%);
    
    span {
        color: darken(red, 20%);
    }
}
</style>

<template>
    <h1 class="message">
        {{{ message }}}
    </h1>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello <span>Vue</span>rld!'
        }
    }
}
</script>
