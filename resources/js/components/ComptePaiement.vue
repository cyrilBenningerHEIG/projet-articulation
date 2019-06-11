 <template>
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>J'ai un compte</b></h4>
        <hr>
        <form  class="mr-5 ml-5">
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="example@gazzar.ch">
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Password</label> -->
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-danger btn-block ">Submit</button>
        </form>
      </div>
      <div class="col m-5 p-compte-paiement">
        <h4 class="text-center mb-2"><b>Je suis nouveau</b></h4>
        <hr>
          <div class="form-group mt-5 mb-5">
            <button type="submit" class="btn btn-outline-danger btn-outline-form  btn-block ">Créer un compte</button>
          </div>
          <div class="form-group mt-5 mb-5">
            <span><a href="paiement-etape2" class="p"><button class="btn btn-outline-danger btn-outline-form btn-block ">Commander en tant qu'invité</button></a></span>
          </div>
      </div>
    </div>
  </div>
</template>