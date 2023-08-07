<template>
  <div class="class-03">
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" @keyup="getEmployeesList($event)" v-model="userInput">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <article>
      <transition name="fade">
        <div v-if="noResults" :class="{ done: item.done }" class="alert alert-info" role="alert">
          Sorry! Not employee found!
        </div>
      </transition>      
    </article>
    <section class="wrapper">
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
      <EmployeeTable :employees="this.employees" v-if="!this.typed" />
      <EmployeeTable :employees="this.employeeResult" v-else />
    </section>
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
      noResults: false,
      typed: false,
      employees: [],
      userInput: '',
      employeeResult: [],
      employeeApi: "http://localhost:80/vue-class-03/rest/api/V1/employee.php",
      employeeObj: {
        firstName: "",
        lastName: "",
        email: "",
        department: "",
        avatar: "",
      },
      testing: {
        id: 50,
        firstName: "Leena-1",
        lastName: "Stoves",
        email: "lstoves1d@tumblr.com",
        department: "Games"
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
        );
      } catch(error) {
        console.log(error);
      }
    },
    async updateEmployee() {
      try {
        await fetch(
          this.employeeApi,
          {
            method: "PUT",
            headers: {
              "Content-Type": "application/json",
              "x-access-token": "token-value",
            },
            body: JSON.stringify(this.testing)
          }
        ).then((response) => response.text()
        );
      } catch(error) {
        console.log(error);
      }
    },
    getEmployeesList(){
      if (this.userInput !== "") {
        this.typed = true;
      }

      this.employeeResult = this.employees.filter(
        (employee => employee.firstName.toLowerCase().includes(
          this.userInput.toLowerCase()
        ))
      );
      return this.employeeResult;
    },
  },
  created() {
    this.getEmployees();
  }
}
</script>

<style>
.class-03 {
  display: flex;
  flex-direction: column;
  row-gap: 5vw;
}

.class-03 > section {
  display: flex;
  column-gap: 5vw;
}

.employee-form {
  padding-bottom: 10vh;
  width: 25%;
}

.alert-info {
  transition: opacity 5s;
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
