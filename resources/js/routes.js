import EmployeesIndex from './components/employees/Index'
import EmployeesCreate from './components/employees/Create'
import EmployeesEdit from './components/employees/Edit'
export const routes = [
    {
        path: '/employees',
        name: 'Employees Index',
        component: EmployeesIndex
    },

    {
        path: '/employees/create',
        name: 'Employees Index',
        component: EmployeesCreate
    },

    {
        path: '/employees/:id',
        name: 'Employees Index',
        component: EmployeesEdit
    }
];