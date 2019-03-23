<template>
  <div id="table">
        <table id="" class="table table-bordered">
            <thead>
                <tr>
                    <th class="border-top-0">Sr</th>
                    <th class="border-top-0">Email</th>
                    <th class="border-top-0">Name</th>
                    <th class="border-top-0">Phone no</th>
                    <th class="border-top-0">Department</th>
                    <th class="border-top-0">Doctor</th>
                    <th class="border-top-0">Appoinment Date</th>
                    <th class="border-top-0">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, key) in items">
                    <td>{{ key+1 }}</td>
                    <td>
                        <a href="">{{ item.name }}</a>
                    </td>
                    <td>{{ item.email }}</td>
                    <td>{{ item.phone }}</td>
                    <td>{{ item.department_id }}</td>
                    <td>{{ item.doctor_id }}</td>
                    <td>{{ item.appoinment_date }}</td>
                    <td>
                       <appoinment-button :appoinmentProps="item.id" ></appoinment-button >
                    </td>
                </tr> 
            </tbody>
        </table>
  </div> 
</template>

<script>
export default {
    data(){
        return{
            items:[],
        }
    },
    created(){
        this.getAppoinmentData();
    },
    methods:{
        getAppoinmentData(){
            axios.get('get-appoinments')
            .then( response => {
                 this.items =  response.data;
            })
            .catch();
        },

    },


}
</script>