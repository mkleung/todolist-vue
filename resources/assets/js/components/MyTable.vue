<template>

    
    <section>


      
            <b-table
                :data="data"
                :columns="columns"
                :checked-rows.sync="checkedRows"
            
                checkable>
            </b-table>


            <b-table :data="data">

                <!-- Headers -->
                <b-table-column field="id" label="ID" width="40" sortable numeric></b-table-column>
                <b-table-column field="first_name" label="First Name" sortable></b-table-column>
         

                <!-- Rows -->
                <template slot="row">
                    <td> test</td>
                    <td> test</td>

                </template>
            </b-table>
           

      
            
                </section>

       
</template>

<script>
    
export default {
        data() {
            return {
                data : [
                    { 'id': 1, 'first_name': 'Jesse', 'last_name': 'Simmons', 'date': '2016-10-15 13:43:27', 'gender': 'Male' },

                ],
              
                columns: [
                    {
                        field: 'id',
                        label: 'ID',
                        width: '40',
                        numeric: true
                    },
                    {
                        field: 'first_name',
                        label: 'First Name',
                    },
                    {
                        field: 'last_name',
                        label: 'Last Name',
                    },
                    {
                        field: 'date',
                        label: 'Date',
                        centered: true
                    },
                    {
                        field: 'gender',
                        label: 'Gender',
                    }
                ]
            }
        }

}

</script>