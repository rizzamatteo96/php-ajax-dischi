const app = new Vue({
  el: '#app',
  data: {
    url : window.location.href + '/../api/apiDischi.php',
    arrayDischi : '',
    
  },
  mounted: function(){
    axios
      .get(this.url)
      .then(response => {
        // console.log(response.data);
        this.arrayDischi = response.data;
      })
  }
});