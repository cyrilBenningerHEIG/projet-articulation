 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>Mes informations</b></h4>
        <hr>
        <form  class="mr-5 ml-5">
                         <div class="form-group">
            <label for="exampleInputNom1">Nom</label>
            <input type="télépone" class="form-control" id="exampleInputNom1" aria-describedby="NomHelp" placeholder="clnt.nom">
          </div>

             <div class="form-group">
            <label for="exampleInputprénom1">Prénom</label>
            <input type="télépone" class="form-control" id="exampleInputprénom1" aria-describedby="prénomHelp" placeholder="clnt.prenom">
          </div>

             <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="télépone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="clnt.email">
          </div>
          <div class="form-group">
            <label for="exampleInputtelephone1">Télephone</label>
            <input type="telephone" class="form-control" id="exampleInputtelephone1" aria-describedby="telephoneHelp" placeholder="clnt.telephone">
          </div>
          <button type="submit" class="btn btn-danger btn-block ">Actualisé mes informations</button>
          <hr>
          <button class="btn btn-secondary btn-block " >Mes commandes</button>
          <button class="btn btn-secondary btn-block " >Gestion du compte</button>
        </form>
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>Adresses</b></h4>
        <hr>               
        <form>
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
             <form style="padding-top : 25px;">
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
          <button type="submit" class="btn btn-danger btn-block ">Ajoute une adresse</button>
            </form>
      </div>
    </div>
  </div>
</template>