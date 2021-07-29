const app = new Vue({
  el: '#app',
  data: {
    url : window.location.href + '/../api/apiDischi.php',
    arrayDischi : [],
    arrayGenres : [],
    selGenre : '',
    arrayFiltered : []
  },
  mounted: function(){
    axios
      .get(this.url)
      .then(response => {
        this.arrayDischi = response.data;
        this.arrayFiltered = response.data;
      })
      .catch(error => console.log(error))
      .finally(() => {
        // quando la api si è caricata creo l'array di generi a seconda di quali sono presenti nell'api
        this.arrayDischi.forEach(disco => {
          if(!this.arrayGenres.includes(disco.genre)){
            this.arrayGenres.push(disco.genre);
          }
        });
      })
  },
  methods:{
    filterGenre(){
      // se il valore filtrato è uno dei generi in lista allora filtra la lista altrimenti mostra tutti i dischi
      if(this.selGenre){
        this.arrayFiltered = [];
        this.arrayFiltered = this.arrayDischi.filter((disco) => {
          return disco.genre == this.selGenre;
        });
      }
      else {
        this.arrayFiltered = this.arrayDischi;
      }
    }
  }
});