<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" v-for="tag in tags">
                    <div class="card-header">TAG: {{tag.tag}}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                tags: "",
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios.get('api/tags').then(response =>{
                //console.log(response.data.response);
                this.tags = response.data.response;
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