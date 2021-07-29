const app = new Vue({
  el: '#app',
  data: {
    url : window.location.href + '/../api/apiDischi.php',
    arrayDischi : '',
    arrayGenres : []
  },
  mounted: function(){
    axios
      .get(this.url)
      .then(response => {
        // console.log(response.data);
        this.arrayDischi = response.data;
      })
      .catch(error => console.log(error))
      .finally(() =>{
        // console.log(this.arrayDischi);
        this.arrayDischi.forEach(disco => {
          // console.log(disco.genre);
          if(!this.arrayGenres.includes(disco.genre)){
            this.arrayGenres.push(disco.genre);
          }
        });
        console.log(this.arrayGenres);
      })
  },
  methods:{
    filterGenre(genre){
      
    }
  }
});