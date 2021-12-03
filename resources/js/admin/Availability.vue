<template>
<div>
    <h6 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h6>
        <div class="form-row">
            <div class="form-group col-md-6" >
                <label for="from">From</label>
                <input type="text" name="from" class="form-control form-control-sm" placeholder="Start Date" v-model="from"/>
            </div>
            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input type="text" name="to" class="form-control form-control-sm" placeholder="End Date" v-model="to"/>
            </div>
            <button class="btn btn-secondary btn-block mt-4" v-on:click="check">Check</button>
        </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            from: null,
            to: null
        }
    },
    methods:{
        check(){
            alert("test");    
        }
    }
}
</script>
