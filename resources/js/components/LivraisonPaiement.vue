 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Adresse de livraison</h4>
        <hr>
        <select v-model="selected"  class="custom-select">
          <option selected> sélectionner une adresse </option>
  <option  v-for="adres in adress" :key="adres.id" v-bind:value="adres.id"  >
    {{adres.rue}} {{adres.numero}}, {{adres.npa}} {{adres.localite}}
  </option>
  
</select>
        <form @submit.prevent="submitAdress">
                        <div class="form-group">
                          <hr>
                                        <label for="exampleInputNom1">Ajouter une nouvelle adresse</label>
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
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Adresse de facturation</h4>
        <hr>
        <div class="mr-5 ml-5">
                    <b-form-checkbox v-model="checked" name="check-button"  checked>
                      Adresse identique à l'adresse de livraison <b></b>
                    </b-form-checkbox>
          <hr>
        <select  v-show="checked==false" v-model="selected2"  class="custom-select">
          <option selected> sélectionner une adresse </option>
  <option  v-for="adres in adress" :key="adres.id" v-bind:value="adres.id"  >
    {{adres.rue}} {{adres.numero}}, {{adres.npa}} {{adres.localite}}
  </option>
  
</select>
          <div class="form-group mt-5 mb-5">
            <a href="paiement-etape3"  class="p">   
              <button type="submit" @click="submitCmd" class="btn btn-danger btn-block">Continuer</button>
              </a>
          </div>
         
        </div>
        
      </div>
    </div>
  </div>
</template>

<script>

 export default {
  
  
  props: ["adress"],

   data() {
    return {
      adres : '',
      destinataire: '',
      rue: '',
      numero: '',
      npa: '',
      localite: '',
      pays: '',
      selected: 'sélectionner une adresse',
      selected2: 'sélectionner une adresse',
      checked: true,
      totalCart: localStorage.getItem("total"),
      vins:JSON.parse(localStorage.getItem("vinCarts")),
    };
  },

  methods: {
autoRefresh(){
  var auto_refresh = setInterval(
    function(){
      location.reload();
    },1000);
},

        submitAdress(){
            axios.post('adresses',{
              destinataire: this.destinataire,
              rue: this.rue,
              numero: this.numero,
              npa: this.npa,
              localite: this.localite,
              pays: this.pays,
            })
            this.autoRefresh();
            $("input").val('');
        },
        submitCmd(){
           if(this.checked == true){
            var selectLivr = this.selected
          } else{
           var selectLivr = this.selected2
          }
          
          axios.post('commandes',{
            adresLivrId:this.selected,
            adresFactId: selectLivr,
            total:this.totalCart,
            vins:this.vins,
          })
        },


    }
 
  
 

}

</script>