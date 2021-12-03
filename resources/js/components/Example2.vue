<template>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table" v-if="employees">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Employee Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                </tr>
            </thead>
            <tbody v-for="emp in employees" :key="emp.id">
                <tr>
                <th scope="row">{{emp.id}}</th>
                <td>{{emp.username}}</td>
                <td>{{emp.email}}</td>
                <td>{{emp.contact}}</td>
                </tr>
            </tbody>
            </table>
            <!-- <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <ul  v-if="employees">
                          <li v-for="emp in employees" :key="emp.id">
                              {{emp.emp_name}}
                          </li>
                      </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</template>

<script>
export default {
   data (){
       return{
           employees : null
       }
   },
   created(){
       const p = new Promise((resolve, reject)=>{
           console.log(resolve)
           console.log(reject)
           setTimeout(()=> resolve("hellow"),3000);
       })
       .then(result => "Hello again " + result)
       .then(result => console.log(result))
       .catch(result =>console.log(`Error ${result}`));
       console.log(p)
       const request = axios.get('api/employees').then(response =>{
           this.employees = response.data;
       });
       setTimeout(()=>{
           this.employees =[
            //    {
            //     //    id:"1",
            //        username : "Navdeep Kaur",
            //        email:"navdeep@gail.com",
            //        contact :  "82793120784"
            //    }
               
           ]
       });
   }
}
</script>