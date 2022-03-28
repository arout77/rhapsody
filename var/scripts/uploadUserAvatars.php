<?php require_once '../../gateway.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<div id='myapp'>

   <input type="file" id="file" ref="file" />

   <button type="button" @click='uploadFile()' >Upload file</button>
</div>


<script>
    var app = new Vue({
  el: '#myapp',
  data: {
     file: "",
  },
  methods: {

     uploadFile: function(){

       this.file = this.$refs.file.files[0];

       let formData = new FormData();
       formData.append('file', this.file);

       axios.post('https://diamondphp.org/rhapsody/var/scripts/post.php', formData,
       {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
       })
       .then(function (response) {

          if(!response.data){
             alert('File not uploaded.');
          }else{
             alert('File uploaded successfully.');
          }

       })
       .catch(function (error) {
           console.log(error);
       });

     }
   }
})
</script>

























<!-- 
<style>
    img {
        max-height: 250px;
    }
    </style>

<div id="content">
  <div id="app">
  <div id="app">
  <div v-if="!image">
    <h2>Select an image</h2>
    <input type="file" @change="onFileChange">
  </div>
  <div v-else>
    <img :src="image" />
    <p><button @click="removeImage">Remove image</button></p>
  </div>
</div>
  </div>
</div>

<script>
new Vue({
  el: '#app',
  data: {
    image: ''
  },
  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length)
        return;
      this.createImage(files[0]);
    },
    createImage(file) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;

      reader.onload = (e) => {
        vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function (e) {
      this.image = '';
    }
  }
})
  </script> -->
