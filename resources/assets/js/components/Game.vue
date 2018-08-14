<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-primary" @click="index_array()">Index</button>
        </div>
    </div>
    
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            index_array(){
                console.log('lala');
                window.axios.get('/api/backlog/1').then(({data}) => {
                    console.log(data);
                });
                window.axios.get('/api/user').then((response) => {
                    console.log(response.data);
                });
            }
        }
    }
</script>
