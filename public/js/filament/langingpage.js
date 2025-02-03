new Vue({
    el: '#app',
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        axios.get('/api/posts')
            .then(response => {
                this.posts = response.data;
                this.renderPosts();
            })
            .catch(error => {
                console.error('Error fetching posts:', error);
            });
    },
    methods: {
        renderPosts() {
            const postsContainer = document.getElementById('posts-container');
            postsContainer.innerHTML = ''; // Clear the container

            this.posts.forEach(post => {
                const postElement = document.createElement('div');
                postElement.classList.add('bg-[#6E8E59]', 'p-6', 'rounded-lg', 'text-center', 'shadow-lg');

                const img = document.createElement('img');
                img.src = `/storage/${post.image}`;
                img.classList.add('rounded-lg', 'mx-auto', 'mb-4');
                img.alt = 'Recipe image';
                postElement.appendChild(img);

                const title = document.createElement('p');
                title.classList.add('text-lg', 'text-white', 'font-semibold');
                title.textContent = post.title;
                postElement.appendChild(title);

                const description = document.createElement('p');
                description.classList.add('text-white');
                description.textContent = post.description;
                postElement.appendChild(description);

                const link = document.createElement('a');
                link.href = `/recipes/${post.id}`;
                const button = document.createElement('button');
                button.classList.add('mt-5', 'text-white', 'text-lg', 'font-semibold', 'px-8', 'py-3', 'rounded-lg', 'shadow-md', 'transition-all', 'duration-300');
                button.style.backgroundColor = '#4CAF50';
                button.textContent = 'See More!';
                link.appendChild(button);
                postElement.appendChild(link);

                postsContainer.appendChild(postElement);
            });
        }
    }
});
