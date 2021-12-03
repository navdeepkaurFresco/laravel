<template>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div v-if="!loading"></div>
                    <table>
                        <tr>
                            <td>
                                {{singleEmployee.username}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{singleEmployee.email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                {{singleEmployee.contact}}
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <availability></availability>
        </div>
    </div>
</template>

<script>
import Availability from './Availability';
export default {
    components:{
        Availability:Availability
    },
    data(){
        return {
            singleEmployee :null,
            loading:false
        }
    },
    created(){
        this.loading =true;
       const request = axios
       .get(`/api/employees/${this.$route.params.id}`)
       .then(response=>(this.singleEmployee = response.data.data
       ));
    }
}
</script>