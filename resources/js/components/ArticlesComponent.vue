<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Title</div>

                    <div class="card-body">
                        Body
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            axios.get('articles').then(response =>{
                console.log(response);
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>