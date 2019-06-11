 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Adresse de livraison</h4>
        <hr>
        <form class="needs-validation" novalidate >
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationCustom01">Prénom</label>
                <input type="text" class="form-control form-control-sm" id="validationCustom01" placeholder="Bob"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
                <div class="col-md-6 mb-3">
                <label for="validationCustom02">Nom</label>
                <input type="text" class="form-control form-control-sm" id="validationCustom02" placeholder="Alice"
                    required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                </div>
                
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                <label for="validationCustom03">Ville</label>
                <input type="text" class="form-control form-control-sm" id="validationCustom03" placeholder="Lausanne" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationCustom04">Canton</label>
                <input type="text" class="form-control form-control-sm" id="validationCustom04" placeholder="Vaud" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
                </div>
                <div class="col-md-3 mb-3">
                <label for="validationCustom05">CP</label>
                <input type="text" class="form-control form-control-sm" id="validationCustom05" placeholder="1006" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pays</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                    <option>Suisse</option>
                    <option>France</option>
                    <option>Italie</option>
                    <option>Allemagne</option>
                    <option>Autriche</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger btn-block ">Submit</button>
        </form>
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2">Adresse de facturation</h4>
        <hr>
        <div class="mr-5 ml-5">
            <p>Identique à l'adresse de facturation</p>
          <div class="form-group mt-3 mb-5">
            <button type="submit" class="btn btn-outline-danger btn-outline-form  btn-block ">Modifier</button>
          </div>
          <div class="form-group mt-5 mb-5">
           <a href="paiement-etape3" class="p"><button class="btn btn-danger btn-block">Continuer</button></a>
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
      
    };
  },
 
  
 

}