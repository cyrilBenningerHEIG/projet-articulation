<template>
<div>
    <div class="container">
        <div class="row pt-4">
            <div class="col pl-0 pr-0" id="map-desk">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.762195969216!2d6.555731315822994!3d46.53260736953746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31173a0301e1%3A0x559c04025ad5e74c!2sElie+Gazzar+S.A.!5e0!3m2!1sfr!2sch!4v1560246364104!5m2!1sfr!2sch" width="555" height="497" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col pl-0 pr-0" id="map-mob">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2744.762195969216!2d6.555731315822994!3d46.53260736953746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c31173a0301e1%3A0x559c04025ad5e74c!2sElie+Gazzar+S.A.!5e0!3m2!1sfr!2sch!4v1560246364104!5m2!1sfr!2sch" width="375" height="375" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col pl-0 pr-0">
                <div class="container contact-form ">
                        <form @submit.prevent="submitContact">
                            <h3>Contacter nous</h3>
                        <div class="row" >
                                <div class="col" id="form">
                                    <div class="form-group">
                                        <input type="text" v-model="Name" class="form-control" placeholder="Nom et prénom" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" v-model="Email" class="form-control" placeholder="Email" value="" />
                                    </div>
                                    <div class="form-group">
                                        <textarea v-model="Msg" class="form-control" placeholder="Votre message" style="width: 100%; height: 150px;"></textarea>
                                    </div>
                                    <div class="form-group" @click="sucess">
                                        <input type="submit" class="btnContact rounded" value="Envoyer" />
                                    </div>
                                </div>
                            </div>
                             <h4 style="display:none; padding-top : 50px;color:white" class="sucesstxt">Nous vous remercions de votre message, vous avez reçu une confirmation de contact par mail.</h4>
                             <h4 style="display:none; padding-top : 50px;color:white" class="sucesstxt">Nous vous répondrons au plus vite</h4>
                             <h4 style="display:none; padding-top : 50px;color:white" class="sucesstxt">Cordialement, Elie Gazzar</h4>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            Name: '',
            Email: '',
            Msg: '',
            
            }
    },
    methods: {
        sucess(){
            $("#input").val('');
            $("#form").hide();
            $(".sucesstxt").show();
        },

        submitContact(){

            axios.post('contact',{
                Name: this.Name,
                Email: this.Email,
                Msg: this.Msg,
            
            
          
            })
        }
    }
}
</script>
