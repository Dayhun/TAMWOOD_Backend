<template>
  <div class="class-03">
    <section class="employee-form">
      <div class="container">
        <form v-on:submit.prevent="postEmployee">
          <div class="mb-3">
            <label for="fName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fName" name="fName" v-model.lazy="employeeObj.firstName" placeholder="First Name">
          </div>
          <div class="mb-3">
            <label for="lName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lName" name="lName" v-model.lazy="employeeObj.lastName" placeholder="Last Name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" v-model.lazy="employeeObj.email" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="department" class="form-label">Department</label>
            <input type="text" class="form-control" id="department" name="department" v-model.lazy="employeeObj.department" placeholder="Department">
          </div>
          <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="text" class="form-control" id="avatar" name="avatar" v-model.lazy="employeeObj.avatar" placeholder="Avatar">
          </div>
          <button type="submit" class="btn btn-primary">Submit Data</button>
        </form>
      </div>
    </section>
    <EmployeeTable :employees="this.employees"/>
    <article></article>
  </div>
</template>

<script>

import EmployeeTable from './components/EmployeeTable.vue';

export default {
  name: 'App',
  components: {
    EmployeeTable
  },
  data() {
    return {
      employees: [],
      employeeApi: "http://localhost:80/class-03/src/api/rest/api/V1/employee.php",
      employeeObj: {
        firstName: "",
        lastName: "",
        email: "",
        department: "",
        avatar: "",
      }
    }
  },
  methods: {
    async getEmployees() {
      try {
        let response = await fetch(this.employeeApi);
        this.employees = await response.json();
      } catch(error) {
        console.log(error);
      }
    },
    async postEmployee() {
      try {
        await fetch(
          this.employeeApi,
          {
            method: "POST",
            body: JSON.stringify(this.employeeObj)
          }
        ).then((response) => response.text()
        ).then((data) => {
          console.log(data)
        });
      } catch(error) {
        console.log(error);
      }
    }
  },
  created() {
    this.getEmployees();
  }
}
</script>

<style>
.class-03 {
  display: flex;
  column-gap: 5vw;
}

.employee-form {
  padding-bottom: 10vh;
  width: 25%;
}

.table-striped {
  width: 70%;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
