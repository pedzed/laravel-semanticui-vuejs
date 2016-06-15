import Vue from 'vue';

import Test from './components/test.vue';

new Vue({
    el: 'body',
    components: {
        'vue-test': Test
    }
});

console.log('Hello world!');
