 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>Mes informations</b></h4>
        <hr>
        <form  @submit.prevent="submitClient" class="mr-5 ml-5">
          <div class="form-group">
            <label for="exampleInputNom1">Nom</label>
            <input type="télépone" class="form-control" id="nom" aria-describedby="NomHelp" v-model:value="user.nom" name="nom" required>
          </div>

             <div class="form-group">
            <label for="exampleInputprénom1">Prénom</label>
            <input type="télépone" class="form-control" id="prenom" aria-describedby="prénomHelp" v-model:value="user.prenom" name="prenom" required>
          </div>

             <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="télépone" class="form-control" id="email" aria-describedby="emailHelp" v-model:value="user.email" name="email"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputtelephone1">Télephone</label>
            <input type="telephone" class="form-control" id="telephone" aria-describedby="telephoneHelp" v-model:value="user.telephone" name="telephone" >
          </div>
          <button type="submit" class="btn btn-danger btn-block ">Actualiser mes informations</button>
          </form>
          <hr>
          <button class="btn btn-secondary btn-block " >Mes commandes</button>
          <button class="btn btn-secondary btn-block " >Gestion du compte</button>
        
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>Adresses</b></h4>
        <hr>               
        <form @submit.prevent="submitAdress">
                        <div class="form-group">
                                        <label for="exampleInputNom1">Adresse de livraison</label>
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
          <button type="submit" class="btn btn-danger btn-block ">Ajouter une adresse</button>
            </form>
             <!-- <form @submit.prevent="submitAdress" style="padding-top : 25px;">
                        <div class="form-group">
                                        <label for="exampleInputNom1">Adresse de facturation</label>
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
          <button type="submit"  class="btn btn-danger btn-block ">Ajoute une adresse</button>
            </form> -->
      </div>
    </div>
  </div>
</template>

<script>

export default {
    props: ["user"],
    data(){
        return{
            destinataire: '',
            rue: '',
            numero: '',
            npa: '',
            localite: '',
            pays: '',
            nom: '',
            prenom:user.prenom,
            email:user.email,
            telephone:user.telephone,
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
        },
        submitClient(){
            axios.post('client',{
                nom: this.user.nom,
                prenom: this.user.prenom,
                email: this.user.email,
                telephone: this.user.telephone,
            
            
          
            })
             console.log(this.nom)
            $("input").val('')
        }

    }
        
}

</script>