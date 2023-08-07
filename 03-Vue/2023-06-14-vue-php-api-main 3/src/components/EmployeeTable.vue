<template>
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Delete</th>
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
            <td>
              <button type="button" class="btn btn-danger" @click="deleteData(employee.id)">
                <span>Delete</span>
              </button>
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
    methods: {
      async deleteData(id) {
        try {
          await fetch(
            "http://localhost:80/class-03/src/api/rest/api/V1/employee.php",
            {
              method: "DELETE",
              body: JSON.stringify(id)
            }
          ).then((response) => response.text());
        } catch (error) {
          console.log(error);
        }
      }
    }
}
</script>
