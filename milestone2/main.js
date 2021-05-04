var app= new Vue({
  el: '#root',
  data:{
    disks: [],
    genres: ['All'],
    selectedGenre: 'All',
    refYear: 0,
  },
  methods: {
    sortYear: function(){
      this.disks.sort(function(a, b) {
        return a.year - b.year;
      });
    },
  },
  created() {

    axios.get('http://localhost/php-ajax-dischi/milestone2/call.php')
        .then((result) => {
          //console.log(response.data);
          var disksObjArray = [result.data.response];
          //console.log(disksObjArray[0]);
          this.disks = [...disksObjArray];
          console.log(this.disks);
          // for (var i = 0; i < disksObjArray.length; i++) {
          //   if (!this.genres.includes(disksObjArray[i].genre)) {
          //     this.genres.push(disksObjArray[i].genre)
          //   }
          // }

        });
  }
});
