import Vue from 'vue';
import axios from 'axios';

new Vue({
    el: '#app',
    data: {
        reviews: [],
        rating: '',
        comment: '',
    },
    mounted() {
        // Fetch reviews when the component is mounted
        axios.get('/api/reviews')
            .then(response => {
                this.reviews = response.data;
            })
            .catch(error => {
                console.error("There was an error fetching reviews:", error);
            });
    },
    methods: {
        submitReview() {
            const review = {
                rating: this.rating,
                comment: this.comment,
                user_id: 1, // Replace with actual user ID
                recipe_id: 1, // Replace with actual recipe ID
            };

            axios.post('/api/reviews', review)
                .then(response => {
                    this.reviews.push(response.data); // Add the new review to the list
                    this.rating = '';
                    this.comment = '';
                })
                .catch(error => {
                    console.error("There was an error submitting the review:", error);
                });
        }
    }
});
