var app = new Vue({
  el: '#app',

  //const axios = require('axios').default

  data: {
    modalIsOpen: false,
    testimonials: [
      {
        nome: "Jorge Leal Macedo",
        profissao: "Advogado",
        texto: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et",
        foto: "fakeuser.jpg"
      },
    ],
    posts: []
  },

  methods: {
    toggleModal() {
      this.modalIsOpen = !this.modalIsOpen
    }
  },

  mounted: {
    // axios.get('http://cristianismobiblico.net/wp-json/wp/v2/posts')
    //   .then(function (response) {
    //     //this.posts = response
    //     console.log(response);
    //   })
  }
})