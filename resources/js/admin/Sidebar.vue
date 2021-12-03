<template>
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link class="navbar-brand" :to="{name : 'home'}">{{title1}}</router-link>
            <router-link class="navbar-brand" :to="{name : 'employees'}">{{ title2}}</router-link>
        </nav>
    </div>
</template>

<script>
export default {
props:{'title1' : String,'title2' : String},
}
</script>

