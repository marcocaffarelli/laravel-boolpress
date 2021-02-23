<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="category in categories">
                    <div class="card-header">NAME: {{category.name}}</div>

                    <div class="card-body">
                        DESCRIPTION: {{category.description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                categories: "",
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/categories').then(response =>{
                //console.log(response.data.response);
                this.categories = response.data.response;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 20px 0;
    }
</style>