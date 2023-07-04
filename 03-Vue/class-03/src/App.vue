<template>
  <!-- <EmployeeTable/> -->
  <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="employee in employees" :key="employee.id">
              <td>
                {{ employee.id }}
              </td>
              <td>
                {{ employee.firstName }}
              </td>
              <td>
                {{ employee.lastName }}
              </td>
              <td>
                {{ employee.email }}
              </td>
              <td>
                {{ employee.department }}
              </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
// import EmployeeTable from './components/EmployeeTable.vue'

export default {
  name: 'App',
  // components: {
  //   EmployeeTable
  // }
  data(){
    return {
      employees: [],
      employeeApi: "http://localhost:80/vue-class-03/rest/api/V1/employee.php"
    }
  },
  methods: {
    async getEmployees(){
      try{
        let response = await fetch(this.employeeApi);
        this.employees = await response.json();
        console.log(this.employees);
      } catch(error) {
        console.log(error);
      }
    }
  },
  created(){
    this.getEmployees();
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
