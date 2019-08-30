var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    usuarios: []
  },
  mounted() {
    this.getUsuarios()
  },
  methods: {
    async getUsuarios(){
      let res = await axios.get("api/respuesta")
      this.usuarios = res.data
      console.log(this.usuarios)
    }
  }
})

var genre = new Vue({
  el: '#genre',
  data: {
    generos: []
  },
  mounted() {
    this.getGeneros()
  },
  methods: {
    async getGeneros(){
      let res = await axios.get("api/respuesta2")
      this.generos = res.data
      console.log(this.generos)
    }
  }
})