<template>
<div>
    <div class="container">
        <div class="row pt-4 pb-4">
            <div class="col pl-0 pr-0">
                <img class="img-contact" :src="'images/nav/contact.jpg'">
            </div>
            <div class="col pl-0 pr-0">
                <div class="container contact-form ">
                        <form method="post">
                            <h3>Contacter nous</h3>
                        <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" name="txtName" class="form-control" placeholder="Nom et prénom" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="txtEmail" class="form-control" placeholder="Email" value="" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="txtMsg" class="form-control" placeholder="Votre message" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="btnSubmit" class="btnContact rounded" value="Envoyer" />
                                    </div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</template>
