<template>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
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

export default {
    name: "EmployeeTable",
    props: {
      employees: []
    },
    setup(props) {
      console.log(props);
    } 
}
</script>
