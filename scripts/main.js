let ax = axios.create({
  baseURL: 'https://certjud.com.br/blog/wp-json/wp/v2/'
});

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
      {
        nome: "Alaíde Almeida Ferraz",
        profissao: "Aposentada",
        texto: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.",
        foto: "fakeuser.jpg"
      },
    ],
    posts: [],
    isLoading: false,
    chatMinimized: true,
    showFormResponse: false,
    advResponse: false,
    clientResponse: false
  },

  methods: {
    toggleModal() {
      this.modalIsOpen = !this.modalIsOpen
    },

    toggleChat() {
      this.chatMinimized = !this.chatMinimized
    },

    sendPartner() {
      this.showFormResponse = true
      this.advResponse = true
    },

    sendClient() {
      this.showFormResponse = true
      this.clientResponse = true
    }
  },

  mounted() {
    this.isLoading = true
    ax.get('posts?_embed&per_page=3')
      .then(response => {
        this.posts = response.data;
        this.isLoading = false
      })
  }
})