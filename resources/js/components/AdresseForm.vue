<template>
   <div class="container contact-form">
            <form @submit.prevent="submitAdress">
                <h3>Ajoutez une adresse</h3>
               
                    
                        <div class="form-group">
                            <input type="text" name="destinataire" class="form-control" v-model="destinataire" placeholder="Destinataire" value="" />
                        </div>
                       <div class="form-row">
                        <div class="form-group col-md-10">
                            <input type="text" name="rue" class="form-control" v-model="rue" placeholder="Rue" value="" />
                        </div>
                        <div class="form-group col-md-2">
                            <input type="text" name="numero" class="form-control" v-model="numero" placeholder="N°" value="" />
                        </div>
                        </div>
                       
                        <div class="form-row">
                        <div class="form-group col-md-3">
                            <input type="text" name="npa" class="form-control" v-model="npa" placeholder="NPA" value="" />
                        </div>
                        <div class="form-group col-md-5">
                            <input type="text" name="localite" class="form-control" v-model="localite" placeholder="Localite" value="" />
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="pays" class="form-control" v-model="pays" placeholder="Pays" value="" />
                        </div>
                        </div>
                    

                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact rounded" value="Envoyer" />
                        </div>
                
            </form>
</div>
</template>

<script>

export default{

    data(){
        return{
            destinataire: '',
            rue: '',
            numero: '',
            npa: '',
            localite: '',
            pays: '',
            

        }
    },
    methods: {

        submitAdress(){
            axios.post('adresses',{
                destinataire: this.destinataire,
                 rue: this.rue,
            numero: this.numero,
            npa: this.npa,
            localite: this.localite,
            pays: this.pays,
            
          
            })
              console.log(this.destinataire)
            $("input").val('')
        }

    }
        
}

</script>