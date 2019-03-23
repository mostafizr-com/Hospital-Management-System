<template>
    <div class="AppoinmentAdmin">

    <button type="button" :data-target="['#appoinment_' + appoinment ]" class="btn btn-primary" data-toggle="modal">
        Confirm
    </button> 

    <div class="modal fade" :id="[ 'appoinment_' + appoinment ]" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
              {{ message }}
              <div class="form-group">
                <label for="exampleInputEmail1">Appoinment Schedule</label>
                <input type="text" class="form-control" id="schedule" placeholder="ex: 6 PM" v-model:value="time">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click.prevent="saveSchedule(appoinment)">
                Save Schedule
            </button>
        </div>
        </div>
    </div>
    </div>


    </div>
</template>

<script>
export default {
    props:[ 'appoinmentProps' ],

    data(){
        return {
           appoinment: '',
           time:'',
           message:'',
        }
    },

    mounted() {
        this.appoinment = this.appoinmentProps;
    },

    methods: {

        // makeAppoinmentUpdate(){
        //     $('#appoinment_' + this.appoinment ).modal('show');
        // },

        saveSchedule(id){
            console.log('update-appoinment/'+ id);
            axios.put('update-appoinment/'+ id, {
               appoinment_time: this.time,  
               confirm_status:1
            })
            .then((respons) => {
                this.time = '';
                this.message = respons.data;
                alert(respons.data);
                 $('#appoinment_' + this.appoinment ).modal('hide');
            })
            .catch();
            
             $( location ).attr("href", "all-appoinments");
        },
    },
}
</script>