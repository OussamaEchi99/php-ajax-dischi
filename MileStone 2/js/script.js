Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        cards: []
    },
    methods: {
        getCardsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/MileStone 2/server.php')
            .then((response) => {
                this.cards = response.data;
            });
        }
    },
    created: function() {
        this.getCardsApi();
    }
});