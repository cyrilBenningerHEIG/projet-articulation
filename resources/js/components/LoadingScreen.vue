<template>
<div class="container">
    <div class="loader">
    <img id="loading-pic" src="/images/illustrations/loading.gif" alt="Loading..." />
</div>
</div>
</template>
<script>

 export default {
  
   data() {
    return {
    };
  },

  methods: {
    refresh(){
  if( window.localStorage )
  {
    if( !localStorage.getItem('firstLoader') )
    {
      localStorage['firstLoader'] = true;
    }  
    else
      $(".loader").hide();
  };
    }
    
  },
 mounted() {

    this.refresh();
  },


}

</script>
    </script>

    