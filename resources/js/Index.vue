<template>
        <div class="container mt-2 mb-2">
            <div class="row">
                    <sidebar 
                    :title1="item1.title" 
                    v-if="item2 != null" 
                    :title2="item2.title"></sidebar>
                    <router-view></router-view>
            </div>
        </div>
</template>
<script>
import Sidebar from './admin/Sidebar';
export default {
    components:{
        Sidebar:Sidebar
    },
    data(){
        return{
            item1:{
                title:"LOGO",
                },
            item2:{
                title:null,
            }
        }
    },
    created(){
        setTimeout(()=>{
            // this.item1.title = "Fresco LOGO";
            this.item2.title = "Employees";
        });
    }
}
</script>
