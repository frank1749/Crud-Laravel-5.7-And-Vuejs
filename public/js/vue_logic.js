Vue.use(VueMaterial.default);
Vue.use(VeeValidate);

app = new Vue({
        el: '#aplicacion',
        data :{
            share_name: '',
            share_price: '',
            share_qty: '',
            resul_list: {
                share_name: '',
                share_price: '',
                share_qty: ''
            },
            spinner: false,
            id_reg: '',
            tot_reg: '',
            NUM_RESULTS: 5, // Numero de resultados por página
            pag: 1 // Página inicial
        },
        methods:{

            dataSite: function (){

                $.get("/api/v1/dataSite",
                {
                    
                },
                function(arrData){
                    console.log(arrData);

                    if (arrData.success === true) {

                        this.resul_list = arrData.data.datos;
                        console.log(this.resul_list);
                        this.tot_reg = this.resul_list.length;

                    }else{

                        alert("Error de carga de datos");
                        
                    }

                }.bind(this));

            },
            loadInfoData: function (){

                this.id_reg = $('#id_reg').val();

                //alert(this.id_reg);

                if (this.id_reg > 0) {

                    $.post("/api/v1/infoData",
                    {
                        id:this.id_reg
                    },
                    function(arrData){
                        console.log(arrData);

                        if (arrData.success === true) {

                            this.share_name = arrData.data.data_info.share_name;
                            this.share_price = arrData.data.data_info.share_price;
                            this.share_qty = arrData.data.data_info.share_qty;

                        }

                    }.bind(this));

                }

            },
            insertData: function (e){

                e.preventDefault();

                //alert(this.share_name);

                if (this.share_name == '' || this.share_price == '' || this.share_qty == '') {
                    alert('Faltan Datos Por Completar');
                    return false;
                }

                this.spinner = true;

                $.post("/api/v1/insertData",
                {
                    share_name:this.share_name,
                    share_price:this.share_price,
                    share_qty:this.share_qty
                },
                function(arrData){
                    console.log(arrData);

                    if (arrData.success === true) {

                        alert(arrData.message);
                        this.share_name = '';
                        this.share_price = '';
                        this.share_qty = '';

                        this.spinner = false;

                    }else{
                        
                        alert(arrData.message);
                        this.spinner = false;
                        
                    }

                }.bind(this));

            },
            updateData: function (e){

                e.preventDefault();

                if (this.share_name == '' || this.share_price == '' || this.share_qty == '') {
                    alert('Faltan Datos Por Completar');
                    return false;
                }

                this.spinner = true;

                $.post("/api/v1/updateData",
                {
                    share_name:this.share_name,
                    share_price:this.share_price,
                    share_qty:this.share_qty,
                    id:this.id_reg
                },
                function(arrData){
                    console.log(arrData);

                    if (arrData.success === true) {

                        alert(arrData.message);
                        this.share_name = '';
                        this.share_price = '';
                        this.share_qty = '';

                        this.spinner = false;

                        app.loadInfoData();

                    }else{
                        
                        alert(arrData.message);
                        this.spinner = false;
                        
                    }

                }.bind(this));

            },
            delData: function (id){

                if (confirm("Desea eliminar este registro?")) {

                    this.spinner = true;

                    $.post("/api/v1/deleteData",
                    {
                        id:id
                    },
                    function(arrData){
                        console.log(arrData);

                        if (arrData.success === true) {

                            alert(arrData.message);
                            this.spinner = false;
                            app.dataSite();

                        }else{
                            
                            alert(arrData.message);
                            this.spinner = false;
                            
                        }

                    }.bind(this));

                }

            }

        },

});

app.dataSite();
app.loadInfoData();