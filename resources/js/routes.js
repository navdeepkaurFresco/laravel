import VueRouter from "vue-router";
import Dashboard from "./admin/Dashboard";
import EmployeesList from "./admin/EmployeesList";
import SingleEmployee from "./admin/SingleEmployee";
const routes =[
    {
        path: "/",
        component: Dashboard,
        name: "home",
    },
    {
        path: "/employees",
        component: EmployeesList,
        name: "employees",
    },
    {
        path: "/single-employee/:id",
        component: SingleEmployee,
        name: "single-employee",
    }
    
]

const router = new VueRouter({
    routes : routes,
    mode : "history"
});

export default router;