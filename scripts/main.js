var app = new Vue({
  el: '#app',

  data: {
    modalIsOpen: false,
    testimonials: [
      {
        nome: "Jorge Leal Macedo",
        profissao: "Advogado",
        texto: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et",
        foto: "fakeuser.jpg"
      },
    ]
  },

  methods: {
    toggleModal() {
      this.modalIsOpen = !this.modalIsOpen
    }
  },
})